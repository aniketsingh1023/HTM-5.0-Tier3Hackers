from flask import Flask, render_template, request, redirect, url_for, session
from dotenv import load_dotenv
import os
import google.generativeai as genai

# Load environment variables
load_dotenv()

# Initialize Flask app
app = Flask(__name__)
app.secret_key = os.getenv("SECRET_KEY", "default_secret_key")  # Set a secret key for session management

# Configure the generative AI model
genai.configure(api_key=os.getenv("GOOGLE_API_KEY"))

# Load the Gemini Pro model
model = genai.GenerativeModel("gemini-pro")
chat = model.start_chat(history=[])

def get_gemini_response(question):
    response = chat.send_message(question)
    return response.text

@app.route("/", methods=["GET", "POST"])
def index():
    if request.method == "POST":
        input_text = request.form.get("input_text")
        if input_text:
            # Get response from the generative AI model
            response_text = get_gemini_response(input_text)
            
            # Update chat history
            if 'chat_history' not in session:
                session['chat_history'] = []
            session['chat_history'].append({"role": "You", "text": input_text})
            session['chat_history'].append({"role": "Bot", "text": response_text})

            return redirect(url_for("index"))
    
    return render_template("index.html", chat_history=session.get('chat_history', []))

@app.route("/clear_history")
def clear_history():
    session.pop('chat_history', None)
    return redirect(url_for("index"))

if __name__ == "__main__":
    app.run(debug=True)

