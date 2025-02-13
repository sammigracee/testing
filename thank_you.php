<?php
$choice = isset($_POST['valentine_choice']) ? $_POST['valentine_choice'] : 'a sweet surprise';
$name = isset($_POST['valentine_name']) ? $_POST['valentine_name']: 'mystery man'; 
$choices = [
    'brownies' => 'salty brownies',
    'romantic_dinner' => 'dinner',
    'date' => 'a date',
    'me' => 'my lovely presence',
    'all' => 'everything u wanted'
];

$selected_choice = isset($choices[$choice]) ? $choices[$choice] : 'a sweet surprise';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thank You! 💕</title>
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
            flex-direction: column;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
        .message {
            font-size: 24px;
            margin-bottom: 20px;
            color: #A94064;
        }
        .countdown {
            font-size: 22px;
            font-weight: bold;
            color: #ff1493;
            margin-top: 10px;
        }
        .image-container {
            margin-top: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        button {
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            background-color: #de5d83;
            color: white;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="message">hey <?php echo $name.", ".$selected_choice; ?> coming to you in:</h1>
        <div id="countdown" class="countdown"></div>
        <div class="image-container">
            <img src="https://i.pinimg.com/736x/ba/21/a5/ba21a551a368781fba8ba9a8ad2a9890.jpg" height="600" width="600">
        </div>
        <p> see u soon - sammi</p>
        <a href="homework.html"><button>Back</button></a>
    </div>

    <script>
        function startCountdown(targetDate) {
            function updateTimer() {
                const now = new Date().getTime();
                const distance = targetDate - now;

                if (distance < 0) {
                    document.getElementById("countdown").innerHTML = "It's time! 🎉";
                    clearInterval(countdownInterval);
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("countdown").innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }

            updateTimer();
            const countdownInterval = setInterval(updateTimer, 1000);
        }

        const targetDate = new Date("Feb 14, 2025 15:30:00").getTime(); 
        startCountdown(targetDate);
    </script>
</body>
</html>


