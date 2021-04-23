<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head>
<title>mercado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="header">
  <link rel="stylesheet" type="text/css" href="style_homepage.css"> 
  
  
             <a href="" class="logo">BARANGAY BAESA INFORMATION SYSTEM</a>
   
  <div class="header-right">
      <a class="active" href="index_login.php">Login</a>
      <a href="contact.php">Contact</a>
      <a href="about.php">About</a>
  </div>
       
   <div class="slide" style="max-width:900px">
       <img class="mySlides" src="baesa.png" style="width:100%">
       <img class="mySlides" src="5.png" style="width:100%">
       <img class="mySlides" src="3.png" style="width:100%">
       <img class="mySlides" src="4.png" style="width:100%">
  

</div>   
       
  <script>
       var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000);
}

    </script>
    
  
    <br>
    <div class="footer">
    <label>Barangay Baesa Information System 2021 | JTech</label> 
    
    
    </div>

    </div>
    </body>
    </html>
    </head>
</html>
