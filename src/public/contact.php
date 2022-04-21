<?php
session_start();
include '../../components/navbar.php';

require_once 'Database/includesDb.php';

$user_id = $_SESSION['user_session'];
$user =  $crud->Show($user_id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts</title>
  <!-- link fontawesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- link css -->
  <link rel="stylesheet" href="../../assets/style.css">
  <!-- link bootstrap  -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- link icos font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- ------------ -->
  
  <!-- ------------ -->
  <!-- JavaScript Bundle with Popper -->
</head>

<body class="for-body">

  <!-- Start NAVBAR -->
 

  <!-- End of NAVBAR  -->

  <!-- start section -->
  <div class="container position-relative">
    <h2 class="text-black mb-5">Contact.</h2>
  </div>
  <div class="parent container">
    <h3 class="mb-5 under-line h5">Contact List : </h3>

    <table class="table bg-opa rounded">
      <thead>
        <tr>
          <th scope="col" class="py-3">Name</th>
          <th scope="col" class="py-3">Email</th>
          <th scope="col" class="py-3">Phone</th>
          <th scope="col-1" class="py-3">Adresse</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php 
        if(!empty($user)){
        ?>
        <?php
        foreach ($user as $key => $val) : ?>
          <tr>
            <td><?= $val['Name'] ?></td>
            <td><?= $val['Email'] ?></td>
            <td><?= $val['Phone'] ?></td>
            <td><?= $val['Adresse'] ?></td>
            <td> <a href="update.php?id_contact=<?= $val['id_contact']; ?>"><input type="submit" class="btn btn-success showmodal" value="Update"></a>
              <a href="delete.php?id_contact=<?= $val['id_contact']; ?>"><input type="button" class="btn btn-danger" value="Delete"></a>
            </td>
          <?php endforeach; }?>
      </tbody>
    </table>
    <?php 
      if(empty($user)) {
        echo "
            <div class='alert alert-danger' role='alert'>
              There are no contacts yet!
            </div>
        ";
      }  
    ?>
    <?php include './modalAdd.php'; ?>
    <div class="card text-center w-25 position ">
    <button type="button"   id="modlbtn" class="btn btn-primary" >
 ADD CONTACT 
</button>  </div>

</div>
   
  </div>
  <script src="../../assets/js/model.js"></script>
</body>