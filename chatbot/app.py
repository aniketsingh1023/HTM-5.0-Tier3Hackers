from dotenv import load_dotenv
import streamlit as st
import os
import google.generativeai as genai
import time

# Load environment variables
load_dotenv()

# Configure the generative AI model
genai.configure(api_key=os.getenv("GOOGLE_API_KEY"))

# Function to load gemini pro model
model = genai.GenerativeModel("gemini-pro")
chat = model.start_chat(history=[])

def get_gemini_response(question):
    response = chat.send_message(question)
    return response

# Function to display text in a streaming manner by chunks
def stream_response(response_text, chunk_size=14):
    placeholder = st.empty()
    words = response_text.split()
    chunks = [" ".join(words[i:i + chunk_size]) for i in range(0, len(words), chunk_size)]

    text = ""
    for chunk in chunks:
        for letter in chunk:
            text += letter
            placeholder.text(text)
            time.sleep(0.01)  # Adjust the speed of letter streaming here
        text += "\n\n"
        placeholder.text(text)
        time.sleep(0.5)  # Adjust the speed of chunk streaming here


# Initialize Streamlit application
st.set_page_config(page_title="Chatbot with History")

st.header("Gemini Chatbot with History")

# Initialize chat history in session state
if 'chat_history' not in st.session_state:
    st.session_state['chat_history'] = []

# Get user input
input_text = st.text_input("Input: ", key="input")
submit = st.button("Submit")

if submit and input_text:
    response = get_gemini_response(input_text)
    
    # Append the input and response to the chat history
    st.session_state['chat_history'].append(("**You", input_text))
    st.subheader("The response is: ")
    
    # Adding spinning animation and generating response using stream
    with st.spinner('Generating response...'):
        response = get_gemini_response(input_text)
    st.header("The response to your question is: ")
    stream_response(response)

clear_history = st.button("Clear chat history")

if clear_history:
    st.session_state['chat_history'] = []
# Display chat history
st.subheader("The chat history is: ")
for role, text in st.session_state['chat_history']:
    st.write(f"{role}: {text}")