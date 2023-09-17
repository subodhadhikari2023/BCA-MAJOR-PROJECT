<?php
session_start();
?>
<!DOCTYPE html>


<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/viewAppointments.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Prompt:wght@600&family=Signika+Negative:wght@700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="../Images/Logos/logo.ico" type="image/x-icon">
    <title>View Appointments</title>
</head>

<body>
    <h1>
        <?php echo "Hi " . $_SESSION['username'];
        echo "! Here are your Appointments" ?>
    </h1>


    <?php
    require_once('../PHP/database_connection.php');

    if (isset($_SESSION['username'])) {
        $email = $_SESSION['username'];
        // echo $email;
    

        // Fetch appointments from the database for the user's email ID, ordered by the nearest date first
        $query = "SELECT * FROM appointment WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        // echo $query;
    
        // Check if any appointments are found
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Patient Name</th>";
            echo "<th>Date of Appointment</th>";
            echo "<th>Department</th>";
            echo "<th>Actions</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            // Iterate over the fetched appointments
            while ($row = mysqli_fetch_assoc($result)) {
                $patientName = $row['name'];
                $appointmentDate = $row['appdate'];
                $department = $row['dept'];


                echo "<tr>";
                echo "<td>$patientName</td>";
                echo "<td>$appointmentDate</td>";
                echo "<td>$department</td>";
                echo "<td>";
                ?>
                <form action="../PHP/operation.php" method="POST">   
               
                 <button class='update-button btn' name = 'action' value = 'update'><i class='fas fa-pencil-alt'></i> <a href='../Internal/updateAppointment.php'>Update </a> </button>
                 <button class='cancel-button btn' name = 'action' value = 'cancel'><i class='fas fa-times'></i> Cancel</button>
                </form>
                <?php
                echo "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>No appointments found.</p>";
        }
    } else {
        echo "<p>Email not found in session.</p>";
    }
    ?>
</body>

</html>