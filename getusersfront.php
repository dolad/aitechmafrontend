<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link type="text/css" rel="stylesheet" href="style.css" />

    <style>
    .users{
      width:300px;
    }
    </style>
</head>
<body>
    <div class="signupSection" style="height:500px">
        <div class="info">
        <form action="" method="">
          <h2>Enter your 10digit uuid</h2>
          
          <ul class="noBullet">
            <li>  
              <label for="User unique id"></label>
              <input type="text" class="inputFields" id="uniqueid" placeholder="Unter your UUID here " value="" required/>
            </li>
            <li id="center-btn">
             <a> <input type="submit" id="join-btn" name="save" alt="Join" value="Check details" onclick="submitForm(event)"/>
            </a>
            </li>
          </ul>
          </form>

        </div>
        <div class="signupForm">
          <h2>Cross check your details</h2>
          <ul class="noBullet">
            <li>
              <label for="First name"></label>
              <input type="text" class="inputFields users" id="firstname" name="firstname" placeholder="Firstname"  value=""  disabled />
            </li>
            <li>
              <label for="lastname"></label>
              <input type="text" class="inputFields users" id="lastname" name="lastname" placeholder="Lastname" value=""  disabled/>
            </li>
            <li>
              <label for="email"></label>
              <input type="email" class="inputFields users" id="email" name="email" placeholder="Email" value="" disabled />
            </li>
            <li>
              <label for="Phone number"></label>
              <input type="text" class="inputFields users" id="phonenumber" name="phonenumber" placeholder="phonenumber" value="" disabled />
            </li>
           
          </ul>
        </div>
      </div>  
</body>
<script src="validate.js"></script>
<script>

function submitForm(event){
  event.preventDefault();
  
   var uuid= document.getElementById("uniqueid");  
   if(/^\d{10}/.test(uuid.value)){
    
    var url='http://localhost/Aitechma/readoneuser.php?uniqueid='+uuid.value;
    
   fetch(url, {
       method: 'get', }).then(function(response) {
           if (response.status >= 200 && response.status < 300) {
                return response.json();
           }
           throw new Error(response.statusText);
       }).then(function(json){

          let myObj=JSON.stringify(json);
          let userdetails=JSON.parse(myObj);
         document.getElementById("lastname").value="Lastname: "+ userdetails.lastname;
         document.getElementById("firstname").value="Firstname "+ userdetails.firstname;
         document.getElementById("email").value="Email "+ userdetails.email;
         document.getElementById("phonenumber").value="Phonenumber is "+  userdetails.phonenumber;
       
       });
   }else{
     alert('enter your 10digit uniqui id');
      uuid.style.borderColor = "#8C1010";
      password.setCustomValidity('please enter 10 digit pin');
   }
    
      

}


</script>


</html>

