import sys
import google.generativeai as ai

# API configuration
API_KEY = 'AIzaSyAOl_uvObdzhbiRwaIeJVJ3OAKci89F62M'
ai.configure(api_key=API_KEY)

model = ai.GenerativeModel("gemini-pro")
chat = model.start_chat()

system_instruction = "AI is restricted to only answering questions related to medical topics..."

message = sys.argv[1]
complete_message = f"{system_instruction}\nUser: {message}"

response = chat.send_message(complete_message)
print(response.text)
