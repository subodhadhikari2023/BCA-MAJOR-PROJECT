<?php

require('database_connection.php');
session_start();
// include('database_creation.php');

if ($_POST) {
    if (isset($_POST['action']) && $_POST['action'] == "Login") {
        // Fetching email and password from the form
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM registration WHERE email = '$email' and pass = '$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // assign the session
            $_SESSION['username'] = $email;
            // Redirecting the user to the homepage
            header("Location: ../Internal/home.php");

        } else {
            header('location: ../Internal/login.php');
        }
    }
    if (isset($_POST['action']) && $_POST['action'] == "Signup") {
        $email = $_POST['email'];
        $sql = "SELECT * FROM registration WHERE email ='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // header('Location: ../Index.html');
            ?>
            <script>
                alert("Email already registered!");
                window.location.replace("../Index.html")

            </script>

            <?php
            // Redirect to index.html after showing the alert message

            // exit;
        } else {
            // Fetch the data from the form fields
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $pass = $_POST['password'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];

            //sql query to insert data into database
            $sql = "INSERT INTO registration (firstname,lastname,email,pass,phone,gender,habitat) VALUES('$firstname','$lastname','$email','$pass','$phone','$gender','$address')";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                var_dump($result);
            } else {
                // Redirect to home.html after successful registration
                header('Location: ../Internal/login.php');
                exit;
            }
        }

    }

    if (isset($_POST['action']) && $_POST['action'] == "Logout") {
        unset($_SESSION["username"]);
        header('location:../Internal/login.php');
    }



    if (isset($_POST['action']) && $_POST['action'] == "next") {

        // $timeSlot = $_POST['time-slot'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $appdate = $_POST['appdate'];
        $dept = $_POST['department'];





        // Insert appointment into the database
        $sql = "INSERT INTO appointment (name, email, phone, dob, appdate,dept) VALUES ('$name', '$email', '$phone', '$dob', '$appdate','$dept')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert('Appointment Booked Successfully');
            window.location.href = '../Internal/home.php';
          </script>";
            exit;
        } else {
            echo "Error: " . $sql . "<br>";
        }

        // Close the database connection
        $conn->close();
    }
}
if (isset($_POST['action']) && $_POST['action'] == "update") {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $appdate = $_POST['appdate'];
    $sql = "UPDATE appointment SET name = '$name', phone = '$phone', dob = '$dob', appdate = '$appdate' WHERE email = '" . $_SESSION['username'] . "'";

    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        var_dump($result);
    } else {
        // Redirect to home.html after successful registration
        header('Location: ../Internal/home.php');
        exit;
    }

}
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == "cancel")
{
    $sql = "DELETE FROM `appointment` WHERE email = '" . $_SESSION['username'] . "'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        var_dump($result);
    } else {
        // Redirect to home.html after successful registration
        header('Location: ../Internal/home.php');
        exit;
    }
}

?>