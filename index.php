<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .chat-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        #text {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
        #response {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
            min-height: 50px;
            overflow-y: auto;
            max-height: 200px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <h1>Travel Conductor Chatbot</h1>
        <input type="text" id="text" placeholder="Type your message here...">
        <button onclick="genarateResponse()">Submit</button>
        <div id="response"></div>
    </div>
    <script src="script.ts"></script>
</body>
</html>
