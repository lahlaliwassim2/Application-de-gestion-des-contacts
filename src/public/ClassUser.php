<?php 
include 'Database/DbConnection.php';
// Class user :
class USER{
    private $db;

    function __construct($db_conn){
        $this->db = $db_conn;
    }

    public function Signup($Name,$password){
        try{
           $stmt = $this->db->prepare("INSERT INTO `user`(Name, password) VALUES ('$Name','$password')");
           $stmt->execute();
           return true;
        }
        catch(PDOException $e){
           die ($e->getMessage());
           return false;
        }
     }
   
        public function login($Name,$password)
{
   try
   {
      $stmt = $this->db->prepare("SELECT * FROM user WHERE Name=:Name AND password=:Pass ");
      $stmt->bindParam(':Pass', $password);
      $stmt->bindParam(':Name', $Name);
      $stmt->execute();
      $userRow =$stmt->fetch(PDO::FETCH_ASSOC);
      if($stmt->rowCount()>0){
          $_SESSION['user_session']=$userRow['id'];
          return true;
      }

      }
   catch(PDOException $e)
   {
       echo $e->getMessage();

   }
   return false;
   
}
}
