<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="./CSS/framer.css">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
	        background-image: linear-gradient(to left bottom, #a3b8d7, #92bce2, #7ac0ea, #58c5ef, #0dcaf1);
            border-radius: 8px;
            box-shadow: 0px 1px 22px 4px rgba(0,0,0,0.75);
-webkit-box-shadow: 0px 1px 22px 4px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 1px 22px 4px rgba(0,0,0,0.75);
            padding: 20px;
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

		.gmail {
			background-color: red;
            color: #fff;
            cursor: pointer;
			width: 100%;
            padding: 8px 70px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
		}
		.gmail:hover {
			background-color: blue;
		}

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form style="margin-top: 200px" action="{{ route('chatbox.send') }}" method="post">
        @csrf
	    <h2>Contact Telegram</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
		
		<label for="phonenumber">Phone Number:</label>
        <input type="phonenumber" id="phonenumber" name="phonenumber" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
