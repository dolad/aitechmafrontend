<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>

    <link type="text/css" rel="stylesheet" href="style.css" />
    <style>
    .signupSection{
      height:600px;
    }
    </style>
</head>

<body>
    <div class="signupSection">
        <div class="info">
          <h2>Aitechma Techbology</h2>

          <p>Exploring technologies</p>
        </div>
        <form action="createuserapi.php" method="POST" class="signupForm" >
          <h2>Sign Up</h2>
          <h2>Please Enter your details</h2>
          <ul class="noBullet">
            <li>
              <label for="First name"></label>
              <input type="text" class="inputFields" id="firstname" name="firstname" placeholder="Firstname" value="" oninput="return nameValidation(this.value)" required/>
            </li>
            <li>
              <label for="lastname"></label>
              <input type="text" class="inputFields" id="lastname" name="lastname" placeholder="Lastname" value="" oninput="return userNameValidation(this.value)" required/>
            </li>
            <li>
              <label for="email"></label>
              <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
            </li>
            <li>
              <label for="Phone number"></label>
              <input type="text" class="inputFields" id="phonenumber" name="phonenumber" placeholder="070 XXXX XXXX" value="" oninput="return phoneNumberValidation(this.value)" required/>
            </li>
            <li>
              <label for="password"></label>
              <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="" oninput="return passwordValidation(this.value)" required/>
            </li>
            <li id="center-btn">
              <input type="submit" id="join-btn" name="save" alt="Join" value="Join">
            </li>
          </ul>
        </form>
      </div>  
</body>
<script src="validate.js"></script>

</html>

