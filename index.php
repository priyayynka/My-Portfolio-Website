<?php

$conn = mysqli_connect('localhost','root','','contact') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Personal Portfolio</title>

   <!-- font awesome cdn link --> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
   
   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#contact">Contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hello, priyanka shinde here!</h3>
      <span data-aos="fade-up">passionate learner & developer</span>
      <p data-aos="fade-up">i'm a 19 year old girl who strives to change the world by helping people</p>
      <br>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->
<br>
<br>
<br>
<br>
<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">
<br>
<br>
      <p data-aos="fade-up">this website is made in order to provide any kind of technical help that might be needed from my side. feel free to contact & message me.</p>
<br>
<br>
      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Priyanka Shinde </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> priyankashinde065@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Navi Mumbai </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +91-8828362658 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 19 years </h3>
      </div>
<br>
<br>
      <a href="#" class="btn" data-aos="fade-up">download RESUME</a>

   </div>
   
   <div class="skills" data-aos="fade-up">
<br>
<br>
<br>
<br>
      <h1 class="heading"> <span>skills</span> </h1>
<br>
<br>
      <div class="progress">
         <div class="bar" data-aos="fade-right"> <h3><span>Python</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>60%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>40%</span></h3> </div>
      </div>

   </div>
<br>
<br>
<br>
<br>
   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>
<br>
<br>
      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2025 )</span>
               <h3>B.Tech in Computer Engineering </h3>
               <p>Pursuing the degree from RAIT, DY Patil Uni, Navi Mumbai, Nerul. Score 10 CGPI in SEM-1 and 9.21 CGPI in SEM-2</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2021 )</span>
               <h3>CBSE XII<supscript>th</supscript> SCIENCE-PCM</h3>
               <p>Completed my education from D.A.V Public School, New Panvel. Scored 87.6% in board exams.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2006 - 2019 )</span>
               <h3>CBSE X<supscript>th</supscript></h3>
               <p>Completed my education from D.A.V Public School, New Panvel. Scored 87.6% in board exams.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2021 )</span>
               <h3>Hackathon</h3>
               <p>Participated in a hackathon and made a website for people dealing with stress & anxiety.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 )</span>
               <h3>Mini Project</h3>
               <p>Made a customized search engine using crawler and web scrapped the w3schools website.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 )</span>
               <h3>Jr. Tech Chief at RAIT ACM STIDENT CHAPTER</h3>
               <p>Handling the RAIT-ACM'S official website, solving fresher's doubt, keeping sessions, planning & organizing the techfest and other exciting programs.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->
<br>
<br>
<br>
<br>
<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>Web Development</h3>
         <p>Making websites as per yor needs and requirements.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>UI-UX Development</h3>
         <p>Designing invitations, logos, etc usiing figma/canva as per your requirements.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-code"></i>
         <h3>Android Development</h3>
         <p>Making andropid apps as per your needs and requirements.</p>
      </div>

   </div>

</section>

<!-- services section ends -->
<br>
<br>
<br>
<br>
<!-- project section starts  -->

<section class="project" id="project">

   <h1 class="heading" data-aos="fade-up"> <span>My Projects</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.png" alt="">
         <h3>Customized Search Engine</h3>
         <span>...Description...</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-2.png" alt="">
         <h3>FAQs section</h3>
         <span>...Description...</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-3.png" alt="">
         <h3>Landing Page</h3>
         <span>...Description...</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-4.png" alt="">
         <h3>Mouse Hover</h3>
         <span>...Description...</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.png" alt="">
         <h3>Events Section</h3>
         <span>...Description...</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-6.png" alt="">
         <h3>Sample Website</h3>
         <span>...Description...</span>
      </div>

   </div>

</section>

<!-- project section ends -->
<br>
<br>
<br>
<br>
<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>
<br>
<br>
<br>
<br>
   <div class="box-container">
      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+91-8828362658</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>priyankashinde065@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Navi Mumbai - 410206</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Ms. Priyanka Shinde</span> </div>












<!-- custom js file link  -->
<script src= "main.js" > </script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>