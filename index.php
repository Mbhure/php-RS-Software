<?php

// include "./conn.php";
include "./conn.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>


<!--Registration form-->

<section class="container">
      <header>Registration Form</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="enterName" required  />
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="enterEmail" required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" name="enterPhone" required  />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="dateBirth" required  />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">Male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">Other</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address"  name="address" required  />
          <input type="text" placeholder="Enter street address line 2" name="address2" required  />
          <div class="column">
            <div class="select-box">
              <select name="contry">
                <option hidden>Country</option>
                <option>India</option>
                <option>Japan</option>
                <option>America</option>
                <option>Nepal</option>
                <option>Australia</option>
                <option>Brazil</option>
                <option>Canada</option>
                <option>China</option>
                <option>Pakistan</option>
                <option>Cuba</option>
                <option>Denmark</option>
                <option>France</option>
                <option>Germany</option>
                <option>Korea</option>
                
              </select>
            </div>
            <input type="text" placeholder="Enter your city"  name="enterCity" required />
          </div>
          <div class="column">
            <input type="text" placeholder="Enter your region" name="enterRegion" required />
            <input type="number" placeholder="Enter postal code" name="enterCode" required  />
          </div>
        </div>
        <button>Submit</button>
      </form>
    </section>







</body>
</html>