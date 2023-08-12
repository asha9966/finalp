<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coral Rock Beach Hotel</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      background-image: url("header-grand-velas-los-cabos-MXALLINC0222-46d3772ad56f4493a83e1bcb49e119f9.jpg");
      background-size: 1600px 270px;
      background-position: top;
      background-repeat: no-repeat;
      background-color: #f4f2e2;
    }
    h1 {
	    font-size: 34px; 
	    font-family: Arial, sans-serif;
    }
	h2 {
    font-size: 24px; 
    font-family: Bahnschrift, sans-serif; 
  }

  p {
    font-size: 20px; 
    font-family: Calibri, sans-serif; 
  }

    .logo img {
      width: 150px;
      height: auto;
    }

    .social-media img {
      width: 30px;
      height: 30px;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .navigation {
      display: flex;
      list-style: none;
      padding: 0;
      margin-left: auto;
    }

    .navigation li {
      margin-right: 20px;
    }

    .main-title {
      height: 100px;
      width: 50%;
      margin-bottom: 20px;
      margin-left: 10px;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.8), 0 20px 80px 0 rgba(0, 0, 0, 0.19);
      left: 50%;
      grid-column: 1 / span 2;
      grid-row: 1;
      text-align: center;
    }

    .tit {
      color: rgb(220, 222, 233);
      background: rgb(47, 59, 165);
      background: rgba(144, 116, 6, 0.8);
      font-size: 40px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
        Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
      font-weight: bold;
      padding-left: 40px;
      padding-top: 40px;
      height: 50px;
      text-shadow: 5px 5px 4px #615c5c;
    }

    main {
      text-align: center;
      max-width: 800px;
      margin-left: 220px;
      margin-right: auto;
    }

    footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
    }

    .social-media {
      display: flex;
      align-items: center;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .social-media li {
      margin-right: 10px;
    }

    header>* {
      flex-basis: 100%;
    }

    h1,
    h2 {
      text-align: center;
    }

   .navigation {
    display: flex;
    list-style: none;
    padding: 0;
    margin-right: auto;
    background-color: #e3e38b; 
    height: 25px;
  }

  .navigation li {
    margin-right: 20px;
  }

  .sidebar {
    width: 200px; 
    background-color: #beb757;
    padding: 20px;
    position: fixed;
    top: 0;
    left: 0;
    height: 250px;
    display: none;
  }

  .sidebar:target {
    display: block;  
  }

  .show-sidebar {
    display: block;
    text-align: center;
    margin-bottom: 20px;  
    }

    #button-1 {
      background-color: #beb757;
    }

  .about-photo {
      width: 300px;
      height: 150px;
    }
  .about-photo-small {
    width: 225px;
    height: 100px;
  }
	.about-photos {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
    }

    table {
    margin: 20px auto;
    border-collapse: collapse;
    width: 80%;
  }

  th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid #FEC5E5;
  }

  th {
    background-color: #63C5DA;
    color: #FEC5E5;
  }

  tr:nth-child(even) {
    background-color: #FCAE1E;
  }

  tr:hover {
    background-color: #FFF44F;
  }

  .division {
    text-align: left;
    width: 50%;
    height: 100px;
  }
  .slider-image {
    max-width: 100%;
    height: auto;
  }
  #contact {
      margin: 20px;
    }

    #contact h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    #contact form {
      display: grid;
      gap: 5px;
	  max-width: 400px; 
      margin: 0 auto; 
    }

    #contact label {
      font-weight: bold;
    }
    #contact input[type="text"] {
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
	   width: 100%; 
    }

    #contact input[type="submit"] {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
	  width: auto;
      margin: 0 auto;
    }

    #contact input[type="submit"]:hover {
      background-color: #45a049;
    }
	.fade-in {
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .fade-in.active {
      opacity: 1;
    }

  </style>
</head>

<body>
  <header>
    <div class="logo">
      <img src="c.png" alt="Logo">
    </div>
    <div class="main-title">
      <div class="tit">CORAL ROCK BEACH HOTEL</div>  
    </div>
    
    <nav>
      <ul class="navigation">
        <li><a href="#about">About Us</a></li>
        <li><a href="#booking">Booking</a></li>
        <li><a href="#rooms">Rooms</a></li>
        <li><a href="#orders">Orders</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#entertainment">Entertainment</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <button class="show-sidebar" id="button-1">
      <a href="#sidebar">Show Sidebar</a>
    </button>

    <section id="sidebar" class="sidebar" >
    <ul>
      <li><a href="#about">About Us</a></li>
        <li><a href="#booking">Booking</a></li>
        <li><a href="#rooms">Rooms</a></li>
        <li><a href="#orders">Orders</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#entertainment">Entertainment</a></li>
    </ul>
    </section>
	<section id="slider">
  <div class="slider-container">
    <img class="slider-image" src="s1.jpg" alt="Image 1">
    <img class="slider-image" src="s2.jpg" alt="Image 2">
    <img class="slider-image" src="s3.jpg" alt="Image 3">
  </div>
  <div class="slider-controls">
    <button class="slider-control prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="slider-control next" onclick="changeSlide(1)">&#10095;</button>
  </div>
  </section>

    <section id="about" class="fade-in">
      <h2>About Us</h2>
      <p>Welcome to Coral Rock Beach Hotel, where paradise meets luxury. Located on the pristine shores of a tropical island, our hotel offers a unique and unforgettable experience for discerning travelers. With breathtaking ocean views, exquisite dining options, and world-class amenities, we aim to provide our guests with the ultimate beachfront getaway.</p>
	  <div class="about-photos">
	  <img class="about-photo"  img src="Art-installation-Alizarin-part-of-Art-in-Resonance-located-in-The-Peninsula-Hong-Kongs-Lobby-Photo-credit-Simon-J-Nicol.jpg" alt="Photo 1">
      
      <img class="about-photo" img src="110257349.jpg" alt="Photo 3">
    </div>
    </section>

    <section id="booking" class="fade-in">
      <h2>Booking</h2>
      <p>Experience seamless and hassle-free booking at Coral Rock Beach Hotel. Our user-friendly booking system allows you to reserve your dream vacation with just a few clicks. Choose your desired dates, select your preferred room type, and get ready to embark on a memorable journey.</p>
      <table >
        <form action="#" method="post">
      <td>Name:</td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td>Date:</td>
      <td><input type="date" name="date"></td>
    </tr>
    <tr>
      <td>Number of Rooms:</td>
      <td><input type="number" name="rooms" min="1"></td>
    </tr>
	<tr>
            <td>Telephone Number:</td>
            <td><input type="tel" name="telephone"></td>
        </tr>
    <tr>
      <td colspan="2"><button type="submit" name="send" class="btn">SUBMIT</button></td>
    </tr>
  </form> 
    </table>
   
    </section>

    <section id="rooms" class="fade-in">
      <h2>Rooms</h2>
      <p>Indulge in the epitome of luxury and comfort with our exquisite rooms at Coral Rock Beach Hotel. Each room is meticulously designed to provide a serene and relaxing atmosphere, offering stunning ocean views and modern amenities. Whether you prefer a cozy suite or a spacious villa, our accommodations will exceed your expectations.</p>
      <div class="about-photos">
        <img class="about-photo" img src="pexels-pixabay-164595.jpg" alt="Room Photo 1">
        <img class="about-photo"  img src="RR-Standard-2-Queen.jpg" alt="Room Photo 2">
      </div>
      
  
    </section>

    <section id="orders" class="fade-in">
      <h2>Orders</h2>
      <p>Treat your taste buds to a culinary adventure with our delectable dining options. From fresh seafood to international cuisine, our diverse menu caters to every palate. Whether you dine in our elegant restaurant or opt for room service, our attentive staff will ensure an exceptional dining experience.</p>
    </section>

    <section id="menu">
      <h2>Menu</h2>
      <p>Immerse yourself in a world of culinary delights with our carefully curated menu. Discover a fusion of flavors that highlight the finest ingredients sourced from local markets. From breakfast to dinner, our culinary team creates mouthwatering dishes that showcase the vibrant and diverse culinary heritage of the region.</p>
      <div style="float: left;"  class="division">
      <ul>
        <li>Chinese Foods</li>
        <li>Indian Foods</li>
        <li>Western Foods</li>
        <li>Korean Food</li>
      </ul>
    </div>  
    
    <div style="float: right;" class="division">
      <ul>
        <li>Juice</li>
        <li>Desert</li>
        <li>Sup</li>
        <li>Shorteats</li>
      </ul>
    </div>
<br><br><br><br><br><br>
    <div class="about-photos">
      <img class="about-photo-small" img src="f1.jpeg" alt="Room Photo 1">
      <img class="about-photo-small" img src="f2.jpeg" alt="Room Photo 2">
      <img class="about-photo-small" img src="f3.jpeg" alt="Room Photo 3">
      <img class="about-photo-small" img src="f4.jpeg" alt="Room Photo 4">
    </div>
    </section>

    <section id="entertainment" class="fade-in">
      <h2>Entertainment</h2>
     <p>Experience a world of entertainment and relaxation at Coral Rock Beach Hotel. Unwind by our sparkling pool, indulge in rejuvenating spa treatments, or enjoy thrilling water sports adventures. With a range of activities and entertainment options, there's something for everyone to make your stay truly unforgettable.</p>
      <div class="about-photos">
        <img class="about-photo" img src="aqua-dome-hotel.jpg" alt="Entertainment Photo 1">
        <img class="about-photo" img src="1067.png" alt="Entertainment Photo 2">
      </div>
     
  
    </section>
  </main>

  <aside>
	<section id="contact" class="fade-in">
      <h2>Contact Us</h2>
      <form name="contactForm" onsubmit="return validateForm()" action="form2.php" method="post">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br><br>

        <input type="submit" value="Submit">
      </form>
    </section>
	<section id="resources" class="fade-in">
      <h2>Resources</h2>
    </section>
  </aside>

  <footer>
    <ul class="social-media" class="fade-in">
      <li><a href="https://example.com"><img src="124010.png" alt="Facebook"></a></li>
      <li><a href="https://example.com"><img src="free-twitter-logo-icon-2429-thumb.png" alt="Twitter"></a></li>
      <li><a href="https://example.com"><img src="Instagram-Icon.png" alt="Instagram.png"></a></li>
    </ul>
    <p>Contact information: coralrockhkk@gmail.com</p>
  </footer>
  <button onclick="scrollToTop()" id="scrollToTopBtn">Go to Top</button>
  

<script>
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }

  window.onscroll = function() {
    scrollFunction();
  };

  function scrollFunction() {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollToTopBtn.style.display = "block";
    } else {
      scrollToTopBtn.style.display = "none";
    }
  }
  var slideIndex = 0;
  var slides = document.getElementsByClassName("slider-image");

  showSlide(slideIndex);

  function changeSlide(n) {
    showSlide(slideIndex += n);
  }

  function showSlide(n) {
    if (n >= slides.length) {
      slideIndex = 0;
    } else if (n < 0) {
      slideIndex = slides.length - 1;
    }

    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    slides[slideIndex].style.display = "block";
  }
      function validateForm() {
      var email = document.forms["contactForm"]["email"].value;
      var phone = document.forms["contactForm"]["phone"].value;

      
      if (email == "") {
        alert("Email address must be filled out");
        return false;
      } else if (!validateEmail(email)) {
        alert("Invalid email address");
        return false;
      }

      
      if (phone == "") {
        alert("Phone number must be filled out");
        return false;
      } else if (!validatePhone(phone)) {
        alert("Invalid phone number");
        return false;
      }
    }

    function validateEmail(email) {
      
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailPattern.test(email);
    }

    function validatePhone(phone) {
     
      var phonePattern = /^\d{10}$/;
      return phonePattern.test(phone);
    }
	function scrollToSection(sectionId) {
      var section = document.querySelector(sectionId);
      if (section) {
        window.scrollTo({
          top: section.offsetTop,
          behavior: "smooth"
        });
      }
    }
	const fadeElements = document.querySelectorAll('.fade-in');
    const fadeInOptions = {
      threshold: 0.5,
      rootMargin: '0px 0px -100px 0px' 
    };

    const fadeInObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          observer.unobserve(entry.target);
        }
      });
    }, fadeInOptions);

    fadeElements.forEach(element => {
      fadeInObserver.observe(element);
    });

    
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    }

    window.onscroll = function() {
      scrollFunction();
    };
</script>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $date = $_POST["date"];
    $rooms = $_POST["rooms"];
    $telephone = $_POST["telephone"];

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webdb";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO form1 (name, date, rooms, telephone) VALUES ('$name', '$date', '$rooms', '$telephone')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}




?>






</body>

</html>