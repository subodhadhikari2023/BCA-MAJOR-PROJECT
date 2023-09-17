<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/appointment.css">
  <link rel="shortcut icon" href="../Images/Logos/logo.ico" type="image/x-icon">
  <title>Update Appointment</title>
</head>


<body>
  <div class="container">
    <h1>Update Appointment</h1>
    <form action="../PHP/operation.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your name" required>
      </div>
      
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="Your phone number" required>
      </div>
      <div class="form-group">
        <label for="date">Date Of Birth:</label>
        <input type="date" id="date" name="dob" required>
      </div>

      
      
      <div class="form-group">
        <label for="date">Appointment Date</label>
        <input type="date" id="appdate" name="appdate" required>
      </div>


      <button type="submit" name="action" value="update" class="btn">Update </button>
  </div>
  </form>
  </div>
</body>

</html>