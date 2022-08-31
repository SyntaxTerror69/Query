<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
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
   <title>WWW.Query.com</title>

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

      

      .middlepane {
         
         width: 100%;
         height: available;
         min-height: 70%;
         float: left;
         border-collapse: collapse;
      }
      #videoDiv2 {width:100%; max-width:100%;  margin:auto; display:block; position: relative;} 
      #video2{width:100%; height:auto }
      

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
         padding: 30px;
         padding-bottom: 60px;
         min-height: 557px;

      }

      .form-container form {
         padding: 30px;
         border-radius: 5px;
         box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
         /* background: #fff; */
         text-align: center;
         width: 500px;
         margin: auto;
         -moz-text-decoration-style: dotted;
         position: relative;
         /* box-shadow: 25px 30px 45px 0px rgba(105, 234, 12, 0.9074), 0px 5px 30px 15px #ff7e0d; */
      }

      .form-container form h3 {
         font-size: 30px;
         text-transform: uppercase;
         margin-bottom: 10px;
         color:rgba(255, 255, 255, 0.732);;
      }

      .form-container form input,
      .form-container form select {
         width: 100%;
         padding: 10px 15px;
         font-size: 17px;
         margin: 8px 0;
         background: rgba(255, 255, 255, 0.799);
         border-radius: 5px;
      }

      .form-container form select option {
         background: rgba(255, 255, 255, 0.901);
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
         color: #fff;;
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

      
      #form{ 
            position: absolute; top: 0; left: 0;
            display: flex;
            flex-direction: column; 
            justify-content: center;
            align-items: center; 
            margin-left: 10%;
            width: 80%;
            height: 80%;
         }
         
     
   </style>

</head>

<body>

   
   <div class="container">
      

      <div class="middlepane" id="videoDiv2">
         <video id="video2" preload="" autoplay="" muted="" playsinline="" loop="">
            <source src="login Videos.mp4" type="video/mp4">
         </video>
         <div class="form-container" id="form">
         <pre style="font-size: 35px;  color: rgba(255, 255, 255, 0.944); font-family: Georgia, 'Times New Roman', Times, serif; ">

      <br>
         Wanting to get an alternative than usual, 
         here it is Login to Know More!!!!!!!
            </pre>

            <form action="" method="post">
               <h3>login to Query</h3>
               <?php
               if(isset($error)){
                  foreach($error as $error){
                     echo '<span class="error-msg">'.$error.'</span>';
                  };
               };
               ?>
               <input type="email" name="email" required placeholder="enter your email">
               <input type="password" name="password" required placeholder="enter your password">
               <input type="submit" name="submit" value="login now" class="form-btn">
               <p>don't have an account? <a href="register_form.php">register now</a></p>
            </form>
            

         </div>
      </div>

   </div>

</body>

</html>