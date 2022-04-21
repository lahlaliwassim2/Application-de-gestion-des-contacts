<?php
session_start();
require_once 'includesDb.php';
$user_id = $_SESSION['user_session'];

  if(isset($_GET['id_contact'])) {
    $id = $_GET['id_contact'];

    // check if user exist
    $query = "SELECT * FROM contact WHERE id_contact = :id";
    $req = $db_conn->prepare($query);
    $req->bindParam(":id", $id);
    $req->execute();

    $result = $req->fetch(PDO::FETCH_ASSOC);

    if($result) {
      $contact = new Contact($db_conn);
      $contact->delete($id, $user_id);
      header("location: contact.php");
    } else {
      echo "<h1> ERROR 404 </h1>";
    }
  } else {
    echo "<h1> ERROR 404 </h1>";
  }

?>