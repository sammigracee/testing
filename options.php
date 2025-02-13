<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine's Options 💖</title>
    <style>
        body {
            text-align: center;
            font-family: 'Perpetua', serif;
            background-image: url('https://i.pinimg.com/736x/09/2b/95/092b956ccd59ab98d7113685b2855923.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px; 
            color:#A94064; 
        }
        .question {
            font-size: 24px;
            margin-bottom: 20px;
            color: red;
        }
        .image-container {
            margin-top: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .options {
            font-size: 20px;
            margin-top: 20px;
        }
        button {
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            background-color: #de5d83;
            color: white;
        }
        .name-input {
            font-size: 13px;
            padding: 8px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #de5d83;
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="red">pookie said yes?!🥰💕</h1>
        <div class="image-container">
            <img src="https://i.pinimg.com/736x/c6/18/66/c618665404746b7da10a469302e5a6fb.jpg" height = '500' width = '400'>
        </div>
        <div class="options">
            <form action="thank_you.php" method="POST" class = 'radio-group'>
                <label for="name">enter your name: </label><br>
                <input type="text" id="name" name="valentine_name" class="name-input" size ='30' placeholder="handsome man, jj etc." required>
                <br> <br> 
                <strong>please choose ONE(1): <br></strong>
                <label><input type="radio" name="valentine_choice" value="brownies"> brownies (now in the trash bin) </label><br>
                <label><input type="radio" name="valentine_choice" value="romantic_dinner"> very yummy dinner </label><br>
                <label><input type="radio" name="valentine_choice" value="date"> date @ gillman barracks </label><br>
                <label><input type="radio" name="valentine_choice" value="me"> my lovely presence </label><br>
                <label><input type="radio" name="valentine_choice" value="all" checked> all of the above </label><br>
                <br>
                <button type="submit"> choose wisely or else...</button>
            </form>
        </div>
    </div>
</body>
</html>
