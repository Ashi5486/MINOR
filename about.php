<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicare</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c3e8725e16.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <section id="Header">
        <a href="#"><i class="fa-sharp fa-solid fa-heart-pulse"></i>Medicare</a> 


        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a href="doctor.php">Doctors</a></li>
                <li><a  href="medicine.php">Store</a></li>
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <button onclick="window.location.href='login.php';">Log out</button>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <!-- <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a> -->
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>
      
    <section id="p-about" class="section-p1">
        <h2>KNOW <span>US</span></h2>
        <p> "All information About Us"</p>
    </section>

    
    <section id="about-head" class="section-p1">
        <img src="img/Questions-pana.png" alt="">
        <div>
            <h2>Who <span>We </span>Are ?</h2>
            <p>Its our minor project in this website the user can login or register in the website User also can use this website for booking the appointment from doctor and also buy the medicine Its is made by Kanha Vishwakarma , Ashish Koushal , Monesh Sharma ,Aditya raj singh Thakur the Name of This project is <strong>SMART MEDICARE SYSTEM</strong></p>
            
            <br>
            <br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%" > IN THIS WEBSITE THE USER CAN BOOK THE APPOINTMENT FROM DOCTOR AND YOU ALSO SHOP MEDICINE ON THIS WEBSITE!!!</marquee>
        </div>
    </section>


    <footer class="section-p1">
        <div class="col">
          <a class="logo" href="#"><i class="fa-sharp fa-solid fa-heart-pulse"></i>Medicare</a>
          <h4>CONTACT</h4>
          <p><strong>Address</strong> : patel colony behind aurbindo hospital 453555 indore </p>
          <p><strong>Phone</strong> :9522288085 </p>
          <p><strong>Hours</strong> : 10:00 - 18:00 , mon-sat</p>
        
          <div class="follow">
              <h4>Follow us</h4>
              <div class="icon">
                  <i class="fab fa-facebook"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-instagram"></i>
                      <i class="fab fa-youtube"></i>
              </div>
          </div>
  
      </div>
      <div class="col">
          <h4>ABOUT</h4>
          <a href="#" ><i class="fa-solid fa-caret-right"></i>about us</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Doctor information</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Medicine information</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Terms & condition</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Contact Us</a>
      </div>
      <div class="col">
          <h4>OUR SITES</h4>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Sign in</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Sign Up</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Book Doctor</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Buy Medicine</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Help</a>
      </div>
      <div class="col">
          <h4>OUR FEATURES</h4>
          <a href="#"><i class="fa-solid fa-caret-right"></i>24x7</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Online Support</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Free Consultation</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Medical Store</a>
          <a href="#"><i class="fa-solid fa-caret-right"></i>Help</a>
      </div>
      
       </footer>
     <div class="copyright">
        <p>@ 2022 , kanha etc - HTML CSS Js Ecommerce Websites</p>
       </div>



     <script>
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
bar.addEventListener('click' , ()=>
{
nav.classList.add('active');
})
}




if(close){

close.addEventListener('click' , ()=>
{
nav.classList.remove('active');
})
}
     </script>
</body>

</html>