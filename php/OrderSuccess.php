<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assests/css/OrderSuccess.css">
    <title>Order Success | Hot 'N' Spicy</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/assests/images/front.png" />
</head>
<body>
    <div class="main blur">
        <div class="wrapper"> 
            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
               <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/> 
               <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
          </svg>
        </div>
        <div>
            <p class="placed-suc"> Your Order Placed <br>Successfully </p>
        </div>
        <div class="ab">
            <button class="submit blur" onclick="openPopup()">OK</button>
        </div>
    </div>
   
    
    <div class="popup" id="popup">
        <h1>Help us Improve!</h1>
        <p class="feed-con">We'd welcome your Feedback!</p>
        <textarea placeholder="Summary"></textarea>

        <h2>Rate Us</h2>
        <p>How was your Experience so far ?</p>
        <div class="rating">
            <input type="radio" name="star" id="star1" checked><label for="star1">
            </label>
            <input type="radio" name="star" id="star2"><label for="star2">
            </label>
            <input type="radio" name="star" id="star3" ><label for="star3">
            </label>
            <input type="radio" name="star" id="star4"><label for="star4">
            </label>
            <input type="radio" name="star" id="star5" ><label for="star5">
            </label>
        </div>

        
        <a href="home.php"><button id="next" onclick="closePopup()">Submit Feedback</button><br></a> 
        <a href="home.php"><button id="skip" onclick="closePopup()">Skip</button></a>
    </div>


    <script src="/assests/js/OrderSuccess.js"></script>
    <!-- Confetti  JS-->
    <script>

        // start

        const start = () => {
            setTimeout(function() {
                confetti.start()
            }, 1000); // 1000 is time that after 1 second start the confetti ( 1000 = 1 sec)
        };

        //  Stop

        const stop = () => {
            setTimeout(function() {
                confetti.stop()
            }, 5000); // 5000 is time that after 5 second stop the confetti ( 5000 = 5 sec)
        };

        start();
        stop();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script>
        const options = {
  bottom: '32px', // default: '32px'
  right: 'unset', // default: '32px'
  left: '32px', // default: 'unset'
  time: '0.5s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#fff',  // default: '#fff'
  buttonColorDark: '#100f2c',  // default: '#100f2c'
  buttonColorLight: '#fff', // default: '#fff'
  saveInCookies: true, // default: true,
  label: '🌓', // default: ''
  autoMatchOsTheme: true // default: true
}

const darkmode = new Darkmode(options);
darkmode.showWidget();
    </script>
</body>
</html>