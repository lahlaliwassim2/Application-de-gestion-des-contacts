<?php   

// Sign Up page not Sign in
require_once 'includesDb.php';
$user = new USER($db_conn);


if( isset($_POST['signin'])){
  $Name = $_POST['Name'];
  $password = $_POST['password'];
  if($Name === "" || $password ==="") {
    $error[] = "remplire le champ !"; 
    if(strlen($password) < 6){
      $error[] = "Password must be atleast 6 characters"; 
    }
  };
 $user->Signup($Name,$password);
 header ('Location: login.php ');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up </title>
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
    <!-- Start NAVBAR -->
<?php 
  
  include '../../components/simplenavbar.php';
?>
<!-- End of NAVBAR  -->


<!-- start form  -->
<h1 class="text-white text-center ">SIGN UP </h1>
<form method="post">
<div class="parent-for d-flex justify-content-center align-items-center">
<div class="parent d-flex flex-column bg-modal w-25 px-5 py-5 rounded border-none">
<?php
            if(isset($error))
            {
               foreach($error as $error)
               {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                  </div>
                  <?php } } ?>
    <label for="" class="mb-2 text-black sigin-clr">Username</label>
    <input class="w-100 mb-1 " type="text" id="Username" name="Name">
    <div id="errUser" class="mb-3"></div>
    <label for="" class="mb-2 text-black sigin-clr">Password</label>
    <input class="w-100 mb-1" type="password" id="Password" name="password">
    <div id="errPass" class="mb-3"></div>
    <label for="" class="mb-2 text-black sigin-clr">Password Verify</label>
    <input class="w-100 mb-1" type="password" id="PasswordV">
    <div id="errPassV" class="mb-3"></div>
    <input class="w-100  bg-submit text-white border-0 rounded py-2 " id="signin" type="submit" name="signin" value="Sign in">

    <p class="mt-4 text-black text-center sigin-clr">Already have an account?<a class="h-one text-decoration-none fw-bold" href="login.php" > Login</a> here.</p> 
  </div>
</div>
</form>
<!-- end form -->
<!-- link js  -->
    <script src="../../assets/js/SignupFormValid.js"></script>

</body>
</html>