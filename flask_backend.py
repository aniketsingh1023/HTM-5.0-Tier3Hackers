from flask import Flask, request, jsonify
import os
import google.generativeai as genai
from dotenv import load_dotenv

# Load environment variables from .env file
load_dotenv()

# Retrieve API key from environment variables
api_key = os.getenv("GOOGLE_API_KEY")
use_api = bool(api_key)  # Check if API key is available for conditional API usage

# Initialize Flask app
app = Flask(__name__)

# Hardcoded FAQ responses
faq_responses = {
    "What is your name?": "I am a chatbot created to assist you.",
    "How can I reset my password?": "To reset your password, click on the 'Forgot Password' link on the login page.",
    # Add more FAQ responses here...
}

# Configure the generative AI model if API key is present
if use_api:
    genai.configure(api_key=api_key)
    model = genai.GenerativeModel("gemini-pro")
    chat = model.start_chat(history=[])

def get_response(question):
    """Get response either from hardcoded FAQs or using the API."""
    if question in faq_responses:
        return faq_responses[question]
    elif use_api:
        response = chat.send_message(question)
        return getattr(response, 'text', 'Sorry, I don’t have an answer for that.')
    else:
        return "Sorry, I don't have an answer for that."

# Flask API route to handle chatbot responses
@app.route('/get_response', methods=['POST'])
def get_chatbot_response():
    data = request.json
    question = data.get('question', '')
    response = get_response(question)
    return jsonify({'response': response})

if __name__ == "__main__":
    app.run(debug=True, port=5001)  # Use a different port than Streamlit (e.g., 5001)
