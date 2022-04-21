<?php
session_start();
require_once 'Database/includesDb.php';

$user_id = $_SESSION['user_session'];
  $contact = new CONTACT($db_conn);


  if (isset($_GET['id_contact'])) {

    $id = $_GET['id_contact'];

    $data = extract($contact->getID($id));

  }
  if(isset($_POST['btn-update'])) {
    $id_contact = $_GET['id_contact'];
    $Name   = $_POST['Name'];
    $Email      = $_POST['Email'];
    $Phone     = $_POST['Phone'];
    $Adresse     = $_POST['Adresse'];
    
    if ($contact->update($id_contact, $user_id, $Name, $Email, $Phone, $Adresse)) {
      header('location: contact.php');
    } else {
      echo "error";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Assets/css/my-bootstrap.css">
  <link rel="stylesheet" href="../../Assets/css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>Updtae</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="../Assets/images/images-removebg-preview.png" alt="logo" width="70px" height="70px" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto fs-5 d-flex flex-sm-row justify-content-end">
          
          <li class="nav-item">
            <?php $userRow = $crud->getUserId($user_id); ?>
          <?php if( is_array($userRow) ||is_object($userRow)){ ?>
           
            <a class="nav-link active" aria-current="page" href="home.php"><?= $userRow['Name']; ?></a>
            <?php } ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-3">
    <form method="POST">
      <h2>Update Contacte</h2>
      <?php $userRow = $crud->getID($user_id); ?>
          
            
      <div class="form-group">
        <label for="nom">Votre nom</label>
        <input type="text" class="form-control" name="Name" value="<?php  if(isset($Name)) echo $Name; ?> ">
      </div>

      <div class="form-group">
        <label for="email"> Votre mail</label>
        <input type="email" class="form-control" name="Email" value="<?php if (isset($Email)) echo $Email; ?>">
      </div>
      <div class="form-group">
        <label for="num">Votre phone </label>
        <input type="text" class="form-control" name="Phone" value="<?php if (isset($Phone)) echo $Phone; ?>">
      </div>
      <div class="form-group">
        <label for="number"> Votre adresse </label>
        <input type="text" class="form-control" name="Adresse" value="<?php if (isset($Adresse)) echo $Adresse; ?>">
      </div>
      <input type="hidden" name="id_contact" value="<?= isset($id_conatct) ?  $id_conatct : "" ?>">
       
      <input type="submit" name="btn-update" class="btn btn-primary " value="Update">
       
    </form>
                                
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
  <script src="../Assets/js/my-bootstrap.js"></script>
</body>

</html>