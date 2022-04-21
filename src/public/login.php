<!-- seesion -->
<?php
session_start();

require_once 'Database/includesDb.php';

$user = new USER($db_conn);

  include '../../components/simplenavbar.php';
     if(isset($_POST['login'])){
      $Name  = $_POST['Name'];
      $pass  = $_POST['password'];
      
      if($user->login($Name,$pass)){
        header('Location: contact.php');
      }
      else{
        $error = "Please Verify ur Name or Password !!";
       
        
      }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- link fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- link css -->
     <link rel="stylesheet" href="../../assets/style.css">
     <!-- link bootstrap  -->
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
<body class="for-body">
<body class="for-body">
   <!-- Start NAVBAR -->

<!-- End of NAVBAR  -->
      <div class="form">
    <h1 class="text-black text-center ">LOG IN </h1>
    <form  method="post" action = "<?=$_SERVER['PHP_SELF'];?>" > 
    <div class="parent-for d-flex justify-content-center align-items-center">
    <div class="parent d-flex flex-column bg-modal w-25 px-5 py-5 rounded">
 
        <!-- Input Username  -->
        <label for="" class="mb-2 text-black sigin-clr">Username</label>
        <input class="w-100 " type="text" id="username" name="Name">
        <div id="erreurName" class="mb-2"></div>
      <!-- Input Password -->
        <label for="" class="mb-2 text-black sigin-clr">Password</label>
        <input class="w-100 " type="password" id="password" name="password">
        <div id="erreurPassword" class="mb-3"></div>
      <!-- Input type Submit for login  -->
        <input class="w-100  bg-submit text-white border-0 rounded py-2 " type="submit" value="LOGIN" id="login" name="login">
    </form>

        <p class="mt-4 text-black text-center sigin-clr">No account? <a class="h-one text-decoration-none fw-bold" href="signin.php"> Sign up</a> here.</p>
      </div>
    </div>
</div>
    <!-- link js  -->
    <script src="../../assets/js/LoginFormValid.js"></script>
    <script src="../../assets/js/signin.js"></script>

</body>
</html>