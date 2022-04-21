<?php
require_once 'Database/includesDb.php';
$user_id = $_SESSION['user_session'];
$stmt = $db_conn->prepare("SELECT * FROM user WHERE id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
?>


<nav class="navbar navbar-expand-lg bg-clr mb-5">
        <div class="container">
                <a class="text-decoration-none text-white fs-2" href="">CONTACT</a>
                <div class="nav">
                        <a class=" active text-decoration-none text-white special px-2" aria-current="page" href="./home.php"> Mr : <?php echo $userRow['Name']; ?></a>
                        <a class="text-decoration-none text-white special px-2  " href="./contact.php">Contacts</a>
                        <a class="text-decoration-none text-white special px-2  " href="./logout.php">logout</a>


                </div>
        </div>
</nav>