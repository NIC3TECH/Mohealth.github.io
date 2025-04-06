<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
     <title> Mohealth</title>
     <link rel="stylesheet" href="Style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
     <link rel="stylesheet" href="dtsel.css" />
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    </head>
    <body style="background-color:#3addf3cb">
        <section class="sub-header">
            <nav>
                <a href="index.html"><img src="images1/Mologo.png"> </a>
                <div class="nav-links">
                <ul>
                <li><a href="Feedback.html">contact us</a></li>
                <li><a href="home.html">Home</a></li>
                <li><a href="Profile.php">My Profile</a></li>
                <li><a href="Medical selection.html">Book appointment</a></li>
                </ul>
            </div>
        </nav>
<h1> "In the silence of a hospital room,<br> we find strength in the courage of those <br>who refuse to give up hope." </h1>
        </section>

<!---Appointment-->
<section>
    <?php 
    $specialist= isset($_GET['specialist']) ? $_GET['specialist']: '';
    ?>
    <form action="datedata.php" method="POST" id="appointmentForm">
        <input type="hidden" name="specialist_doc" value="<?php echo $specialist?>">
        <div class="datepicker">
            <input type="date" name="appointmentDate" required>
        </div>



        <?php
        session_start(); 

        if (isset($_SESSION['NIC'])) {
            
            $customer_id = $_SESSION['NIC'];
            echo "<input type='hidden' name='NIC' value='" . $customer_id . "'>";
        } else {
            echo "<p>Please log in to book an appointment.</p>";
        }
        ?>

        
        <section class="text-box">
            <h2>Please choose your appointment date below.</h2>
            <p>
                <button type="submit" class="hero-btn">Book an Appointment Now</button>
            </p>
          

  <div class="center-on-page ">
    <P></P>
<label> Choose Hospital and time</label>
<select name="hospitalD" id="hospitalD" required>
    <option value="Dr Bruno cheong Hospital"> Dr Bruno cheong Hospital</option>
    <option value="Dr AG Jeetoo Hospital"> Dr AG Jeetoo Hospital</option>
    <option value="ENT Hospital"> ENT Hospital</option>
    <option value="Jawaharlal Nehru Hospital"> Jawaharlal Nehru Hospital</option>
    <option value="Victoria Hospital">Victoria Hospital</option>
</select>

<select name="time" id="time" required >
    <option value="08:30-10:00">08:30-10:00</option>
    <option value="10:00-11:30">10:00-11:30</option>
    <option value="10:00-12:00">10:00-12:00</option>
    <option value="10:00-12:00">13:00-14:30</option>
    <option value="10:00-12:00">14:30-16:00</option>

</select>
</div>

        </section>
    </form>
</section>

<script src="dtsel.js"></script>

<script>
    
    <input name="dateTimePicker" />
   instance = new dtsel.DTS('input[name="appointmentDate"]' {
  dateFormat: "dd-mm-yyyy",
});

</script>

<!---footer-->
<section class="bfooter">
    <h4>ABOUT US</h4>
    <p>  MoHealth App implements a robust, centralized digital<br>
        database for storing all patient records and serves an 
        online platform for patient appointment</p>
        <div class="icons">

            <i class='bx bxl-twitter'></i>
            <i class='bx bxl-facebook'></i>
            <i class='bx bxl-instagram' ></i>
            <i class='bx bxl-reddit' ></i>
    
        </div>
</section>

    </body>

</html>
