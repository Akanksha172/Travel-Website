<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <title>Registration Form</title>
  <!-- Google fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container1">
    <form action="#" method="POST">
      <div class="title">
        Registration Form -
      </div>

      <div class="form">
        <div class="input_field">
          <label>First Name :</label>
          <input type="text" class="input" name="fname" required>
        </div>
        <div class="input_field">
          <label>Last Name :</label>
          <input type="text" class="input" name="lname" required>
        </div>
        <div class="input_field">
          <label>Gender :</label>
          <select class="selectbox" name="gender" required>
            <option value="Not Selected">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="input_field">
          <label>No. of Peoples :</label>
          <select class="selectbox" name="pnumber" required>
            <option value="Not Selected">Select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="More than 5">More than 5</option>
          </select>
        </div>
        <div class="input_field">
          <label>Email Address :</label>
          <input type="email" class="input" name="email" required>
        </div>
        <div class="input_field">
          <label>Phone Number :</label>
          <input type="number" class="input" name="phone" required>
        </div>
        <div class="input_field">
          <label>Address :</label>
          <textarea class="textarea" name="address" required ></textarea>
        </div>
        <div class="input_field terms">
          <label class="check" >
            <input type="checkbox" required name="check">
            <span class="checkmark"></span>
          </label>
          <p>Agree to terms and conditions.</p>
        </div>
        <div class="input_field">
          <input type="submit" value="Register" class="btn" name="register" >
        </div>
      </div>
    </form>
  </div>

</body>

</html>


<!-- PHP connection -->

<?php

  if($_POST['register'])
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $pnumber = $_POST['pnumber']; 
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $check = $_POST['check'];
  }
  if($fname != "" && $lname != "" && $gender !="" && $pnumber !="" && $email !="" && $phone !="" && $address !="" && $check !="" ){
    $query = "INSERT INTO final values('$fname','$lname','$gender','$pnumber','$email','$phone','$address')";
    $data = mysqli_query($conn,$query);
    echo "<script>
          alert('Response submitted ! Thankyou...we will soon contact you');
          window.location.href='index.php';
          </script>";
    if($data){
    // echo " Inserted";
    }
    else{
      echo "NOT ";
    }
  }
  
?>