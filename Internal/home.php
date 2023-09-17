<?php
require('../PHP/database_connection.php');
// require('../PHP/login.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LifeCare Multispeciality Hospital</title>
  <link rel="shortcut icon" href="../Images/Logos/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/nav.css">
  <link rel="stylesheet" href="../CSS/home.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <script src="../JS/Script.js"></script>
</head>
<?php
if ($_SESSION) {
  ?>

  <body>

    <?php
    include('navbar.php');
    ?>
    <main id="home">
      <div class="main-body" id="body-cont-one">
        <img src="../Images/Assets/doctor.jpg" alt="Failed to load image">

      </div>
      <div class="main-body" id="body-cont-two">
        <span class="sentence">Every life matters</span>
        <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, est impedit laboriosam omnis
          autem recusandae quibusdam doloribus cupiditate aliquid rem vel deleniti? Perspiciatis nobis ipsa asperiores
          culpa officia quibusdam reprehenderit.</p>
      </div>


      <!-- Appointment Booking Button -->
      <div class="appointment" id="appoint-booking">
        <button id="appointment" class="btn">Book appointment</button>
        <button id="viewAppointments" class="btn">View Appointments </button>

        <script>
          // Redirecting the user to the appointment booking page...
          const appointmentredirect = document.getElementById('appointment');
          function redirectToPage() {
            window.location.href = 'appointment.php';
          }

          appointmentredirect.addEventListener('click', redirectToPage);




          // Redirecting the user to the view booked appointment 
          const viewAppointments = document.getElementById('viewAppointments');
          function viewAppointmentsredirect() {
            window.location.href = 'viewAppointments.php';
          }

          viewAppointments.addEventListener('click', viewAppointmentsredirect);



        </script>

      </div>


      <!-- About Us -->
      <div id="about">
        <h2>About Us</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea animi, aut quaerat perferendis deserunt delectus
          fuga eaque similique, a nostrum, nemo tempore numquam accusamus reprehenderit soluta fugiat velit placeat. Vel.
          Rem illum laborum, fugit, placeat consequuntur itaque dolorem possimus fugiat eveniet tempora deleniti sunt
          maiores nemo cumque molestias repudiandae ducimus voluptas reprehenderit, recusandae optio quod velit.
          Consequuntur libero at dolorem.
          Minus ratione voluptates consequuntur laudantium voluptate, esse illo doloribus corporis placeat eos obcaecati
          dolorum dolorem rem numquam possimus animi quaerat eaque corrupti magni. Tempore non libero expedita voluptatum
          culpa alias.
          Earum maxime nemo ab aspernatur perspiciatis in illum, autem incidunt facilis. Dolorum libero, repellendus minus
          obcaecati accusantium ipsam consectetur eligendi. Doloremque consequatur amet quasi deserunt necessitatibus quae
          quod rem ad?
          Odio quibusdam minima ad quasi fuga, quis doloribus, sequi, similique natus commodi minus voluptas? Rerum at ex
          numquam! Reprehenderit optio dignissimos alias maiores et voluptatem consequatur perferendis, eos fugiat
          perspiciatis?
          Nulla consequuntur natus deserunt ipsum enim. Incidunt totam ad enim tenetur officia rem placeat fuga voluptate
          quas quasi officiis, velit, aperiam libero, tempore consectetur fugit corporis vitae! Magni, commodi blanditiis.
          Ratione exercitationem eveniet fugit odit tenetur accusamus aperiam blanditiis eaque debitis voluptas modi, nam
          totam iste quo nostrum omnis, saepe accusantium dolorem voluptatum iure alias! Laboriosam sapiente reiciendis
          aliquam veniam!
          Accusamus repellat perspiciatis repudiandae magni hic unde sit voluptatibus doloribus cumque aperiam. Sapiente
          dolor doloribus quis itaque excepturi, amet voluptatem voluptatum obcaecati ipsa placeat veniam deleniti et,
          reprehenderit quidem impedit.
          Perferendis possimus voluptates qui fugiat corporis, fugit at beatae, a voluptate, quo repellendus provident
          necessitatibus. Maxime sapiente magnam voluptate. Et error quibusdam aliquid beatae eum incidunt neque. Facilis,
          blanditiis asperiores.
          Atque nobis incidunt asperiores magni exercitationem? Expedita dignissimos laborum amet perspiciatis blanditiis
          magni dolore sed temporibus odit esse dolorem, omnis, quaerat pariatur, obcaecati molestias ullam reprehenderit
          odio? Illum, autem itaque.
        </p>
      </div>



      <!-- Our Services -->

      <div class="services" id="services">

      </div>

      <!-- Doctors Names -->
      <div class="doctorsnames" id="doctorsnames">
        <h2>Our Doctors</h2>
        <div class="doct-container">
          <div class="doctor">
            <img src="../Images/Doctors/pic.png" alt="">
            <div class="doctor-details">
              <p>Doctor Name: Dr. Debjit Verma</p>
              <p>Specialization: Physician</p>
              <p>Contact: 1234567890</p>
            </div>
          </div>
          <div class="doctor">
            <img src="../Images/Doctors/pic.png" alt="">
            <div class="doctor-details">
              <p>Doctor Name: Dr. Preeti Sharma</p>
              <p>Specialization: Physician</p>
              <p>Contact: 1234567890</p>
            </div>
          </div>
        </div>
        <div class="doct-container">
          <div class="doctor">
            <img src="../Images/Doctors/pic.png" alt="">
            <div class="doctor-details">
              <p>Doctor Name: Ahana Ganguly</p>
              <p>Specialization: Physician</p>
              <p>Contact: 1234567890</p>
            </div>
          </div>
          <div class="doctor">
            <img src="../Images/Doctors/pic.png" alt="">
            <div class="doctor-details">
              <p>Doctor Name: Dr. Atanu Kumar Das</p>
              <p>Specialization: Cardiology</p>
              <p>Contact: 1234567890</p>
            </div>
          </div>
        </div>
        <div class="doct-container">
          <div class="doctor">
            <img src="../Images/Doctors/pic.png" alt="">
            <div class="doctor-details">
              <p>Doctor Name:Dr. Subodh Banerjee</p>
              <p>Specialization: Cardiology</p>
              <p>Contact: 1234567890</p>
            </div>
          </div>
          <div class="doctor">
            <img src="../Images/Doctors/pic.png" alt="">
            <div class="doctor-details">
              <p>Doctor Name: Dr. Ankita Saha</p>
              <p>Specialization: Cardiology</p>
              <p>Contact: 1234567890</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Services -->

      <!-- <div class="services" id="services">

        <h2>Explore our Centres of Clinical Excellence</h2>

        <div class="service-modules">

          <div class="service-child">
            <img src="../Images/Ico/bone.png" alt="">
            <h3>Orthopedic surgeries</h3>
          </div>



        </div>


      </div> -->

    </main>
    <footer>
      <div class="parent left">
        <h3>Contact Us</h3>
        <span class="footer-span">Address: 123 Park Street</span>
        <span class="footer-span">Email: 123@example.com</span>
        <span class="footer-span">Call Us: 123456789</span>
        <!-- . -->
        <span>&copy; 2023 LifeCare Multispeciality Hospital. All rights reserved</span>
      </div>
      <div class="parent right">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>

      </div>
    </footer>


  </body>

  </html>
  <?php
} else {
  header('location:login.php');
}

?>