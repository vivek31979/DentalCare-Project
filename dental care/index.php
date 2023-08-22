<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $doctor = mysqli_real_escape_string($conn, $_POST['doctor']);
    $date = $_POST['date'];
    
    $insert = mysqli_query($conn, "INSERT INTO contact_form(name, email, number, doctor, date)VALUES('$name','$email','$number','$doctor','$date')") or die('query failed');

    if($insert)
    {
        $message[] = 'appointment made successfully!';
    }
    else
    {
        $message[] = 'appointment failed';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Care</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<header class="header fixed-top">

    <div class="container">

        <div class="row align-items-center justify-content-between">
            <a href="#home" class="logo">dental<span>Care.</span></a>

            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#doctor">doctors</a>
                <a href="#services">services</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>

            <a class="link-btn" href="pages/admin.html">Admin Login</a>
            <!-- <a href="#contact" class="link-btn">make appointment</a> -->
           

            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </div>

</header>


<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>let us brighten your smile</h3>
                <p>We Have Specialised Treatment For Those With Sensitive Teeth For A Stress-Free Experience.</p>                

                <a href="#contact" class="link-btn">make appointment</a>


            </div>
        </div>

    </div>

</section>


<!--about section-->
<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center">

        <div class="col-md-6 image">
        <img src="https://img.freepik.com/free-photo/dentist-sitting-near-female-patient_23-2148085301.jpg?size=626&ext=jpg&ga=GA1.2.42484889.1690640861&semt=sph" height="300px" width="250px" class="w-100 mb-5 mb-md-0" alt="">
        </div>


        <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>Welcome to DentalCare Project, where smiles are our priority! We are a dedicated team of dental professionals and enthusiasts committed to promoting oral health and providing accessible dental care to individuals of all ages.</p>
        
        </div>


        </div>
    </div>
</section>


<!-- doctors section starts -->

<section class="about" id="doctor">

<h1 class="heading">Doctors</h1>

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 image">
                <img src="https://burst.shopifycdn.com/photos/male-dentist.jpg?width=1200&format=pjpg&exif=1&iptc=1" id="pic" class="w-100 mb-5 mb-md-0" alt="">
            </div>


        <div class="col-md-6 content">
            <h3>Dr.Adarsh barnwal</h3>
            <h4>(alignment specialist)</h4>
            <p>Welcome to our cutting-edge Alignment Specialist program designed exclusively for dentists. At our clinic, we understand that precise dental alignment is crucial for both optimal oral health and aesthetic confidence.</p>
            <a href="#contact" class="link-btn">make appointment</a>
        </div>


        </div>
    </div>

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 image">
                <img src="https://img.freepik.com/free-photo/pleased-young-female-doctor-wearing-medical-robe-stethoscope-around-neck-standing-with-closed-posture_409827-254.jpg" id="pic" class="w-100 mb-5 mb-md-0" alt="">
            </div>


        <div class="col-md-6 content">
            <h3>Dr.Ankita patel</h3>
            <h4>(root canal spacialist)</h4>
            <p>Dr. [Ankita patel], our esteemed root canal specialist, brings years of expertise and a deep passion for endodontics to our team where we are dedicated to providing comprehensive and specialized dental services to ensure your optimal oral health</p>
            <a href="#contact" class="link-btn">make appointment</a>
        </div>


        </div>
    </div>



    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 image">
                <img src="https://t4.ftcdn.net/jpg/00/69/48/11/360_F_69481147_vNyLF2u20piFO2DzaNbd0Fb5oz0i9egv.jpg" id="pic"class="w-100 mb-5 mb-md-0" alt="">
            </div>


        <div class="col-md-6 content">
            <h3>Dr.Alok kumar suman</h3>
            <h4>(cavity specialist)</h4>
            <p>Dr. [Alok kumar suman], our esteemed cavity specialist, is a true expert in the field of preventive and restorative dentistry. With a focus on cavity prevention and early intervention, Dr. [Alok] is passionate about preserving your natural teeth and helping you achieve a cavity-free smile.</p>
            <a href="#contact" class="link-btn">make appointment</a>
        </div>


        </div>
    </div>
</section>

<!-- services section starts -->

<section class="services" id="services">

<h1 class="heading">our services</h1>

<div class="box-container container">

    <div class="box">  
        <img src="images/logo.png" class="imglogo" alt="">
        <h3>Alignment specialist</h3>
        <p>Welcome to our Alignment Specialist Services at DentalCare Project,where we are dedicated to providing cutting-edge orthodontic solutions</p>
    </div>

    <div class="box">  
        <img src="images/logo.png" class="imglogo" alt="">
        <h3>Cosmetic dentistry</h3>
        <p>Welcome to our Cosmetic Dentistry Services, where we specialize in enhancing the beauty of your smile through a range of advanced and personalized treatments.</p>
    </div>

    <div class="box">  
        <img src="images/logo.png" class="imglogo" alt="">
        <h3>Oral Hygiene Experts</h3>
        <p>Welcome to our Oral Hygiene Experts Services, where we are dedicated to promoting optimal oral health through comprehensive education, personalized guidance,</p>
    </div>

    <div class="box">  
        <img src="images/logo.png" class="imglogo" alt="">
        <h3>Root Canal Specialist</h3>
        <p>Welcome to our Root Canal Specialist Services at , where we specialize in advanced endodontic care to preserve your natural teeth and alleviate dental pain.</p>
    </div>

    <div class="box">  
        <img src="images/logo.png" class="imglogo" alt="">
        <h3>Live Dental Advisery</h3>
        <p>we offer real-time, personalized guidance and expert advice to address your oral health concerns and empower you to make informed decisions.</p>
    </div>

    <div class="box">  
        <img src="images/logo.png" class="imglogo" alt="">
        <h3>Cavity Inspection</h3>
        <p>we prioritize your oral health by providing thorough and advanced cavity detection and assessment.</p>
    </div>


</div>
</section>

<!-- process section starts -->

<section class="process">

    <h1 class="heading">work process</h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/process1.png" class="illustration"  alt="">
            <h3>Cosmetic dentistry</h3>
            <p>We Specialize In Enhancing The Beauty Of Your Smile Through A Range Of Advanced And Personalized Treatments.</p>
        </div>

        <div class="box">
            <img src="images/process2.png" class="illustration"  alt="">
            <h3>Pediatric Dentistry</h3>
            <p>we specialize in providing gentle, compassionate, and comprehensive dental care for infants, children, and adolescents. </p>
        </div>

        <div class="box">
            <img src="images/process3.png" class="illustration" alt="">
            <h3>Dental Implants</h3>
            <p> we specialize in providing advanced and personalized dental implant solutions to restore missing teeth and enhance your oral health.</p>
        </div>

    </div>                    

</section>


<!-- review section starts -->

<section class="reviews" id="reviews">

<h1 class="heading">satisfied clients</h1>

<div class="box-container container">

    <div class="box">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg0T9XSSzcN0ITUIErvMrD_2cIqWgoNU3cQw&usqp=CAU"class="satimg" alt="">
      
        <p>We had a very pleasant experience with Dr. Ankita and her staff. My daughter was very anxious about the appointment and any procedure, but Dr. Ankita was very patient with her and spend a lot of time trying to calm her down.</p>
    
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>rahul sadaria</h3>
        <span>satisfied client</span>
    </div>

    <div class="box">
        <img src="https://media.istockphoto.com/id/1399395748/photo/cheerful-business-woman-with-glasses-posing-with-her-hands-under-her-face-showing-her-smile.webp?b=1&s=612x612&w=0&k=20&c=rEYFtJAy0nP2bMW1Nrtib3cBRGXaYURtuEeMwwMFMps="class="satimg" alt="">
      
        <p>I desperately needed dentures and I am on MassHealth. A cloud hangs over the people who are on MassHealth and the providers of their services.</p>
    
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>nikita sharma</h3>
        <span>satisfied client</span>
    </div>

    <div class="box">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxV30NJsabcXMw-7QD7VuKGMtCUjakV06wbA&usqp=CAU"class="satimg" alt="">
      
        <p>Excellent doctor!!!Very thorough and caring. I'm terribly afraid of the dentist and she's very sensitive to that and goes the extra mile to make you feel comfortable.</p>
    
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>sunil chhetri</h3>
        <span>satisfied client</span>
    </div>

</div> 
</section>

<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading">make appointment</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">
    <?php
        if(isset($message))
        {
            foreach($message as $message)
            {
                echo '<p class="message">'.$message.'</p>';
            
            }
        }
    ?>
    <span>your name :</span>
    <input type="text" name="name" placeholder="Enter your name" class="box" required>
    <span>your email :</span>
    <input type="email" name="email" placeholder="Enter your email" class="box" required>
    <span>your number :</span>
    <input type="number" name="number" placeholder="Enter your number" class="box" required>
    <span>consult with :</span><br>
    <select class="box" name="doctor" id="" required>
        <option value="select"selected>select doctor</option>
        <option value="Dr.adarsh barnwal">Dr.adarsh barnwal<p class="para"> (alignment specialist)</p></option>
        <option value="Dr.ankita patel">Dr.ankita patel<p class="para"> (root canal specialist)</p></option>
        <option value="Dr.alok kumar suman">Dr.alok kumar suman<p class="para"> (cavity specialist)</p></option>
    </select><br>
    <span>appointment date :</span>
    <input type="datetime-local" name="date" class="box">
    <input type="submit" value="make appoinment" name="submit" class="link-btn" required>
    </form>

</section>



<!-- footer section starts -->

<section class="footer">

        <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+91-7895-4608-10</p>
                <p>+91-7895-4608-11</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>Amritsar , India - 400104</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>opening hours</h3>
                <p>09:00 AM to 10:00 PM</p>
            </div>


            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>vivekchaurasia@gmail.com</p>
                <p>vivekraj101@gmail.com</p>
            </div>
        
        </div>


</section>




<script src="js/script.js"></script>
</body>
</html>