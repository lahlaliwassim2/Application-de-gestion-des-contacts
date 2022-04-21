<?php require_once 'Database/includesDb.php';

if (isset($_POST['insert'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Adresse = $_POST['Adresse'];
    $user_id = $_SESSION['user_session'];
    $crud->ADD($Name, $Email, $Phone, $Adresse, $user_id);
    header("location: {$_SERVER['PHP_SELF']}");
}
 ?>
 <!-- link fontawesome  -->

<!-- The Modal -->
<div class="w-50 position-absolute top-50 start-50 translate-middle invisible" style="z-index:1" id="myModal">
  <div class="">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add a Contact</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
         <form method="POST" enctype="multipart/form-data" action="" class="px-4 py-4">
            <fieldset> 
                 <div class="form-group">
                   <label for="Name">Veuillez entrez un nom :</label>
                   <input type="text" class="form-control"  placeholder="Votre Nom" name="Name">
                 </div>
                 
                 <div class="form-group">
                   <label for="Email">Veuillez entrez un mail :</label>
                   <input type="Email" class="form-control"  placeholder="user@email.com" name="Email">
                 </div>
                 <div class="form-group">
                   <label for="Phone">Veuillez entrez le numéro de telephone : </label>
                   <input type="text" class="form-control"  placeholder="06XXXXXX" name="Phone">
                 </div>
                 <div class="form-group">
                   <label for="Adresse"> Veuillez entrez l'adresse : </label>
                   <input type="text" class="form-control"  placeholder="votre Adresse" name="Adresse">
                 </div>
                   <!-- Modal footer -->
      <div class="modal-footer">
         <input type="submit" name="insert" placeholder="ADD CONTACT" class="btn btn-primary" >
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
             </fieldset>
       </form>

    </div>
  </div>
</div>
  <!-- link js  -->

  <!-- modal -->

  <!-- end section -->
  <script src="../../assets/js/model.js"></script>
</body>