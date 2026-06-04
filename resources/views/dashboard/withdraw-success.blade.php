<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Withdrawal in Progress</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #4caf50, #2e7d32);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      overflow: hidden;
    }
    .container {
      text-align: center;
      background: rgba(0, 0, 0, 0.6);
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      animation: fadeIn 1.5s ease-in-out;
    }
    h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    p {
      font-size: 1.2rem;
      margin-bottom: 15px;
    }
    .timer {
      font-weight: bold;
      font-size: 1.5rem;
      color: #ffcc00;
    }
    .home-btn {
      text-decoration: none;
      display: inline-block;
      background: #ffcc00;
      color: #2e7d32;
      padding: 10px 20px;
      font-size: 1.1rem;
      border-radius: 5px;
      margin-top: 15px;
      transition: background 0.3s ease;
    }
    .home-btn:hover {
      background: #ffd633;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: scale(0.9);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Withdrawal in Progress</h1>
    <p>Your request is being processed. Please wait...</p>
    <p>Redirecting to the homepage in <span class="timer">10</span> seconds.</p>
    <a href="/home" class="home-btn">Return Home Now</a>
  </div>

  <script>
    let countdown = 15; // Seconds before redirect
    const timerSpan = document.querySelector('.timer');
    const redirectURL = "/home"; // Change to your homepage URL

    const countdownInterval = setInterval(() => {
      countdown--;
      timerSpan.textContent = countdown;
      if (countdown === 0) {
        clearInterval(countdownInterval);
        window.location.href = redirectURL;
      }
    }, 1000);
  </script>
</body>
</html>
