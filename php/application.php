<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now | Hot 'N' Spicy</title>
    <link rel="stylesheet" href="/assests/css/application.css">
    <link rel="icon" type="image/png" href="/assests/images/front.png" />
</head>
  <body>
    <!--
        HEADER
    -->
    
    <div class="banner">
        
      <div class="overlay">
          <header>
              <div class="navbar">
                  <div class="logo-container">
                      <div class="logo" id="logo">
                          <a href="home.php"> 
                          <div class="front">
                          <img src="/assests/images/front.png" alt="Logo Front">
                          </div></a>
                          
                          <div class="back">
                          <img src="/assests/images/back.png" alt="Logo Back">
                          </div>
                      </div>
                  </div> 
                  <!-- navbar heading -->
                  <nav>
            
                      <div class="menu-icons">
                          <ul>
                              <li><a href="home.php">HOME</a></li>
                              <li><a href="/Aboutus.php">ABOUT US</a></li>    
                              <li><a href="menu.php">MENU</a></li> 
                              <li><a href="/services.php">SERVICES</a></li> 
                              <li><a href="tablereserve.php">BOOK A TABLE</a></li>  
                              <li><a href="contact.php">CONTACT</a></li> 
                              
                              <div class="header-img">
                                  <li><a href="login.php">
                                      <img src="/assests/images/loginn - 1.png" width="35px" height="35px">
                                  </a></li>  </div> 
                          </ul> 
                      </div>
                  </nav>
              </div>
          </header>
          
      </div>
  </div>
      <!-- FORM -->
      <form action="app1.php" method="POST">
      <h1 class="form-head1"> Application Form</h1>
      <h4 class="form-head2">Please complete and submit application to be considered.</h4>

      <label for="name">Full Name:</label>
      <input type="text" name="name" id="name"placeholder="Full name" >

      <label for="email">Email Id:</label>
      <input type="email" id="email" name="email"  placeholder="Enter Your Email Id">

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" placeholder="##########">

      <label for="specialty">Speciality:</label>
      <select id="specialty" name="specialty" >
        <option value="">Please select a specialty</option>
        <option value="Indian cuisine">Indian cuisine</option>
        <option value="Italian cuisine">Italian cuisine</option>
        <option value="Chettinad cuisine">Chettinad cuisine</option>
        <option value="French cuisine">French cuisine</option>
        <option value="Japanese cuisine">Japanese cuisine</option>
        <option value="Mexican cuisine">Mexican cuisine</option>
        <option value="Vegetarian cuisine">Vegetarian cuisine</option>
        <option value="Non Vegetarian cuisine">Non Vegetarian cuisine</option>
        <option value="Other">Other</option>
      </select>

      <label for="checkbox">What do you looking for?</label>
      <input type="radio" name="employment" value="Full-Time">Full-Time<br>
      <input type="radio" name="employment" value="Part-Time">Part-Time<br>

      <label for="experience">Experience:</label>
      <textarea id="experience" name="experience" rows="5" placeholder="Experience in years with additional notes"></textarea>
      
      <label for="resume" id="resume-con">Resume:</label>
      <input type="file" name="resume" id="resume" accept=".pdf,.doc,.docx" required/><br>
      <button>submit</button>
  

    </form>

<!-- Customer care -->
    <div class="main_container">
      <div class="overlay1">
          <a href="tel:1818-022">
              <img class="image-54" src="/assests/images/enquiry-13.png" alt="initial" width="70px">
          </a>
          <h4 class="section-title">Already applied? </h4>
          <h4 class="section-content">Please call for inquiry   </h4>
         <span>Toll Free - </span> <a class="tel-no" href="tel:1818-022">1818-022</a>
      </div>
      
  </div>

  <!-- Footer -->
  <div id="foot">
    <div id="media">
        <a href="https://facebook.com/theriyala-restaurant" class="footer" ><img src="/assests/images/fb.webp" alt="FB logo" class="fb"></a>
        <a href="https://instagram.com/theriyala-restaurant" class="footer"><img  class="insta" src="/assests/images/ig (2).webp" alt="Instagram logo"></a>
        <a href="https://twitter.com/theriyala-restaurant" class="footer"><img src="/assests/images/twi.webp" alt="twitter logo" class="twitter"></a>
    </div>
    
    <p id="margin">Copyright &copy; 2023 HOT 'N' SPICY</p>
  </div>

  
</body> 
</php>
