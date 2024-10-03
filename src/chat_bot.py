import time
import random

# Placeholder for conversation history
conversation_history = []

def send_message_to_ai(user_message):
    # Simulate ChatGPT response logic
    responses = [
        "I see, that's interesting!",
        "Can you tell me more about that?",
        "What do you mean by that?",
        "That's a good question. Let me think...",
        "I understand, let's dive deeper."
    ]
    
    conversation_history.append({"role": "user", "message": user_message})
    
    # Simulate AI response time
    time.sleep(1)
    
    ai_response = random.choice(responses)
    conversation_history.append({"role": "ai", "message": ai_response})
    
    return ai_response


def chat_interface():
    print("Chat with AI - Type 'exit' to stop\n")
    
    while True:
        user_input = input("You: ")
        
        if user_input.lower() == 'exit':
            print("Chat ended.")
            break

        # Display sent message
        print(f"You: {user_input}")
        
        # Send message to the AI (simulated)
        ai_response = send_message_to_ai(user_input)
        
        # Display AI response
        print(f"AI: {ai_response}")
        

if __name__ == "__main__":
    chat_interface()
