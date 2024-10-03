from flask import Flask, request, jsonify
import time
import random

app = Flask(__name__)

# Placeholder for conversation history
conversation_history = []

def send_message_to_ai(user_message):
    responses = [
        "I see, that's interesting!",
        "Can you tell me more about that?",
        "What do you mean by that?",
        "That's a good question. Let me think...",
        "I understand, let's dive deeper."
    ]
    
    conversation_history.append({"role": "user", "message": user_message})
    time.sleep(1)  # Simulate AI response time
    ai_response = random.choice(responses)
    conversation_history.append({"role": "ai", "message": ai_response})
    
    return ai_response

@app.route('/chat', methods=['POST'])
def chat():
    user_message = request.json.get('message')
    if user_message:
        ai_response = send_message_to_ai(user_message)
        return jsonify({"response": ai_response})
    return jsonify({"error": "No message received"}), 400

if __name__ == "__main__":
    app.run(debug=True, host='0.0.0.0', port=5000)
