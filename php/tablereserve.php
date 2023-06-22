<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Booking | Hot 'N' Spicy</title>
    <link rel="stylesheet" href="/assests/css/tablereserve.css">
    <link rel="icon" type="image/png" href="/assests/images/front.png" />
</head>
<body>
    <!------------------ header---------------->

    <div class="banner">
      
      <div class="overlay">
          <header>
              <div class="navbar">
                  <div class="logo-container">
                      <div class="logo">
                          <div class="front">
                            <a href="home.php">
                          <img src="/assests/images/front.png" alt="Logo Front"></a>
                          </div>
                          <div class="back">
                            <a href="home.php">
                          <img src="/assests/images/back.png" alt="Logo Back"></a>
                          </div>
                      </div>
                  </div> 
                  
              </div>
          </header>
      </div>
  </div>
      <div class="=form-contain">
    <div class="img-container">
      <img src="/assests/images/rest-1.png"/>
    </div>
    <form id="form" class="reservation" action="reservation.php" method="post">
      <div class="form-container">
        <h1>Book A Table</h1>
        <div class="item_field">
          <label for="place">Place:</label>
          <input class="radio" type="radio" id="anna" name="place" value="Anna Nagar" required><span>Anna Nagar</span>
          <input class="radio" type="radio" id="light" name="place" value="Light House"><span>Light House</span>
          <input class="radio" type="radio" id="west" name="place" value="West Mambalam"><span>West Mambalam</span>
          <br>
        </div>
        <div class="item_field">
          <!-- <label for="name">Name:</label>   -->
          <input type="text" id="name" name="name" placeholder="Your name" required oninvalid="this.setCustomValidity('Please Enter Your Name')"
          oninput="setCustomValidity('')">
          <br>
        </div>
        <div class="item_field">
          <!-- <label for="phnno" >Phone Number:</label> -->
          <input type="tel" id="tel" name="tel" placeholder="##### #####" required oninvalid="this.setCustomValidity('Please Enter a valid mobile number')"
          oninput="setCustomValidity('')">
          <br>
        </div> 
        <div class="item_field">
          <!-- <label for="email" >Email Id:</label> -->
          <input type="email" id="email" name="email" placeholder="Your Email Id" required oninvalid="this.setCustomValidity('Please Enter valid email')"
          oninput="setCustomValidity('')">
          <br>
        </div>
        <div class="date_time">
          <div class="item_field date_div">
            <label for="date">Select Date</label>
            <input type="date" id="date" name="date">
            <br>
          </div>
          <div class="item_field time_div">
            <label for="time">Select Time Slot</label>
            <select name="time" id="time">
                <option value="none">None</option>
                <option value="12:30">12:30</option>
                <option value="2:30">2:30</option>
                <option value="4:30">4:30</option>
                <option value="7:00">7:00</option>
                <option value="9:00">9:00</option>
            </select><br>
          </div>     
      </div>
      <div class="item_field">
        <!-- <label for="party-size">How many people:</label> -->
        <input type="number" id="party-size" name="party-size" placeholder="Number of Guests" min="1" max="20" required>
        <br>
      </div>

      <div class="item_field">
        <label for="place">Type of Dining</label>
        <input class="radio" type="radio" id="buffet" name="dining" value="Buffet" required><span>Buffet</span>
        <input class="radio" type="radio" id="carte" name="dining" value="À la carte"><span>À la carte</span>
        <br>
      </div>

      <div class="item_field occasion">
        <label for="occasion">Any Special Occasion (optional)</label>
        <select name="occasion" id="occasion">
            <option value="None">None</option>
            <option value="Birthday">Birthday</option>
            <option value="Anniversary">Anniversary</option>
            <option value="Celebration">Celebration</option>
            <option value="Others">Others</option>
        </select><br>
      </div>    
      <!-- <div class="submit_button"> -->
        
      <!-- </div>  -->
    </div> 
    <button type="submit">Reserve Table</button>   
    </form>
    <div class="diplay_details" id="display_details">
      <div class="details">
        <h2 id="one" class="details_item" style="color: #490303; font-style: italic;"></h2>
        <p id="two" class="details_item" style="color: #490303; font-style: italic;"></p>
        <p id="three" class="details_item" style="color: #490303; font-style: italic;"></p>
        <p id="four" class="details_item" style="color: #490303; font-style: italic;"></p>
        <p id="five" class="details_item" style="color: #490303; font-style: italic;"></p>
        <p id="six" class="details_item" style="color: #490303; font-style: italic;"></p>
        <p id="seven" class="details_item" style="color: #490303; font-style: italic;"></p>
        <p id="eight" class="details_item" style="color: #490303; font-style: italic;"></p>
      </div>
    </div>
  </div>
  
    

    <script>
        const form = document.querySelector('form');

      form.addEventListener('submit', (e) => {
        e.preventDefault();
          
        const name = document.querySelector('#name').value.trim();
        const date = document.querySelector('#date').value;
        const time = document.querySelector('#time').value;
        const tel = document.querySelector('#tel').value;
        const emailToTest = document.querySelector('#email').value;
        const occasion = document.querySelector('#occasion').value;

        if (date === '') {
          alert('Please Enter a date.');
          return;
        }

        if (time === 'none') {
          alert('Please select a time.');
          return;
        }
        
        check()
        
      })

    function check(){
        const name = document.querySelector('#name').value.trim();
        const date = document.querySelector('#date').value.split('-');
        const time = document.querySelector('#time').value;
        const tel = document.querySelector('#tel').value;
        const party_size = document.querySelector('#party-size').value;
        var place = document.querySelector('input[name="place"]:checked').value;
        var dining = document.querySelector('input[name="dining"]:checked').value;
        const occasion = document.querySelector('#occasion').value;

        
        document.getElementById("one").innerHTML = "Hi <b>"+name+ ",</b><br>Table Reservation Successful! <br><br>See your table reservation details below..!";
        document.getElementById("two").innerHTML = "<b>Phone Number:</b> "+tel;
        document.getElementById("three").innerHTML = "<b>Date:</b> "+date[1]+'-'+date[2]+'-'+date[0];
        document.getElementById("four").innerHTML = "<b>Time Slot:</b> "+time+" pm";
        document.getElementById("five").innerHTML = "<b>Number of Guests:</b> "+party_size;
        document.getElementById("six").innerHTML = "<b>Type of Dining:</b> "+dining;
        document.getElementById("seven").innerHTML = "<b>Place:</b> "+place;
        document.getElementById("eight").innerHTML = "<b>Occasion:</b> "+occasion;
        var form = document.getElementById("form")
        var diplay_details = document.getElementById("display_details")
        form.style.display = "none";
        diplay_details.style.display = "block";
    }


    </script>
</body>
</php>