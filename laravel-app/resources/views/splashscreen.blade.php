<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laravel CRM</title>
<style>
  /* Center the splash screen */
  body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: black;
  }

  h1, h5, p{
    color: white;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }

  h1{
    font-size: 60px;
    line-height: 30px;
  }

  h5{
    font-size: large;
    line-height: 0px;
  }

  p{
    font-size: large;
    line-height: 0px;
  }
  
  /* Style the splash content */
  .splash-content {
    text-align: center;
  }
</style>
</head>
<body>

<div class="splash-content">
  <h5>Welcome to</h5>
  <h1>Laravel CRM</h1>
  <p>Redirecting in <span id="countdown">3</span> seconds...</p>
  <!-- Add any additional content here -->
</div>

<script>
  // Countdown timer and redirect
  var countdown = document.getElementById("countdown");
  var seconds = 3;

  function updateCountdown() {
    countdown.textContent = seconds;
    seconds--;
    if (seconds < 0) {
      clearInterval(timer);
      window.location.href = "/login";
    }
  }

  var timer = setInterval(updateCountdown, 1000);
</script>

</body>
</html>
