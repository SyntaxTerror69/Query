<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
   <title>register form</title>

   <link rel="stylesheet" href="style1.css">
   <style>
      * {
         font-family: 'Poppins', sans-serif;
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         outline: none;
         border: none;
         text-decoration: none;
      }

      body {
         width: available;
         height: available;
      }

      .container {
         width: available;
         height: available;
      }

      .leftpane {
         width: 20%;
         height: available;
         min-height: 70%;
         float: left;
         border-collapse: collapse;
      }

      .middlepane {
         width: 60%;
         height: available;
         min-height: 70%;
         float: left;
         border-collapse: collapse;
      }

      .rightpane {
         width: 20%;
         height: 70%;
         position: relative;
         margin-left: 80%;
         border-collapse: collapse;
      }

      .toppane {
         width: available;
         height: 30%;
         border-collapse: collapse;
         display: flex;
         justify-content: center;
         align-items: center;
         background: #252839;
      }



      .form-container {
         min-height: 60%;
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 20px;
         padding-bottom: 60px;
         
      }

      .form-container form {
         padding: 20px;
         border-radius: 5px;
         box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
         background: #fff;
         text-align: center;
         width: 500px;
         margin: auto;
        -moz-text-decoration-style: dotted;
        position: relative;
        box-shadow: 25px 30px 45px  0px rgba(105, 234, 12, 0.9074),0px 5px 30px 15px #ff7e0d;
      }

      .form-container form h3 {
         font-size: 30px;
         text-transform: uppercase;
         margin-bottom: 10px;
         color: #333;
      }

      .form-container form input,
      .form-container form select {
         width: 100%;
         padding: 10px 15px;
         font-size: 17px;
         margin: 8px 0;
         background: #eee;
         border-radius: 5px;
      }

      .form-container form select option {
         background: #fff;
      }

      .form-container form .form-btn {
         background: #fbd0d9;
         color: crimson;
         text-transform: capitalize;
         font-size: 20px;
         cursor: pointer;
      }

      .form-container form .form-btn:hover {
         background: crimson;
         color: #fff;
      }

      .form-container form p {
         margin-top: 10px;
         font-size: 20px;
         color: #333;
      }

      .form-container form p a {
         color: crimson;
      }

      .form-container form .error-msg {
         margin: 10px 0;
         display: block;
         background: crimson;
         color: #fff;
         border-radius: 5px;
         font-size: 20px;
         padding: 10px;
      }

      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

      .toppane {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: 'Poppins', sans-serif;

      }

      .toppane h2 {
         position: relative;
         font-size: 11vw;
         color: #252839;
         -webkit-text-stroke: 0.3vw #383d52;
         text-transform: uppercase;

      }

      .toppane h2::before {
         content: attr(data-text);
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         color: #75e916;
         -webkit-text-stroke: 0.3vw #383d52;
         border-right: 2px solid #75e916;
         overflow: hidden;
         animation: animate 6s linear infinite;

      }

      @keyframes animate {

         0%,
         10%,
         100% {
            width: 0;
         }

         70%,
         90% {
            width: 100%;
         }
      }
      #videoDiv2 {width:100%; max-width:100%;  margin:auto; display:block; position: relative;} /* This has been changed */
      #video2{width:100%; height:auto }
      #form{ 
            position: absolute; top: 0; left: 0;
            display: flex;
            flex-direction: column; 
            justify-content: center;
            align-items: center; 
            width: 100%;
            height: 100%;
         }
   </style>

</head>

<body>


   <div class="container">
      <div class="toppane">
         <h2 data-text="Query...">Query...</h2><br>
      </div>

      <div class="middlepane" id="videoDiv2">
         <video id="video2" preload="" autoplay="" muted="" playsinline="" loop="">
            <source src="register Video.mp4" type="video/mp4">
         </video>
         <div class="form-container" id="form">

            <form action="" method="post">
               <h3>register now</h3>
               <?php
                  if(isset($error)){
                  foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
                  };
                  };
               ?>
               <input type="text" name="name" required placeholder="enter your name">
               <input type="email" name="email" required placeholder="enter your email">
               <input type="password" name="password" required placeholder="enter your password">
               <input type="password" name="cpassword" required placeholder="confirm your password">
               <select name="user_type">
                  <option value="user">user</option>
                  <option value="admin">admin</option>
               </select>
               <input type="submit" name="submit" value="register now" class="form-btn">
               <p>already have an account? <a href="index.php">login now</a></p>
            </form>

         </div>
      </div>

      
   </div>


</body>

</html>