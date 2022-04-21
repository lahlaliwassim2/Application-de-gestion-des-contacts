<?php

include "Database/DbConnection.php";
// Class Contact -> CRUD :
/**
 * classe de contact;
 * 
 * -propriétées
 *  - $db;
 * -methodes:
 * - show
 * - ADD
 * - getUserId
 * - getId
 * - Update
 * 
 */ 
class CONTACT{
     private $db;
     public function __construct($db_conn){
         $this->db=$db_conn;
     }
                    /**
                     * affichier via l id_user
                    @para user_id
                    @return user
                    
                    */

     public function Show($user_id){

        $sql = "SELECT * FROM `contact` WHERE id = $user_id";
        $query = $this->db->prepare($sql);
        $query->execute();
        $user = $query->fetchAll(PDO::FETCH_ASSOC);
        return $user;
     }


                /**
                 * function pour ajouter des contacts
                 *
                 * @param [type] $Name
                 * @param [type] $Email
                 * @param [type] $Phone
                 * @param [type] $Adresse
                 * @param [type] $id
                 * @return void
                 */
     public function ADD($Name,$Email,$Phone,$Adresse, $id){
        try{
            $stmt = $this->db->prepare("INSERT INTO contact(id, Name,Email,Phone,Adresse) 
            VALUES(:id, :Name, :Email, :Phone, :Adresse)");
            $stmt->bindParam(":Name",$Name);
            $stmt->bindParam(":Email",$Email);
            $stmt->bindParam(":Phone",$Phone);
            $stmt->bindParam(":Adresse",$Adresse);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage(); 
            return false;
        }
     }
     /**
      * function pour selectionner un contact
      *
      * @param [type] $user_id
      * @return user
      */
     public function getUserId($user_id){

        $stmt = $this->db->prepare("SELECT * FROM user WHERE id =:id_user");
        $stmt->execute(array(":id_user"=>$user_id));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ; 
    }
        /**
         * selectiooner un contact par ID
         *
         * @param [type] $id_contact
         * @return user
         */
     public function getID($id_contact)
    {
            $stmt = $this->db->prepare("SELECT * FROM contact WHERE id_contact=:id_contact");
            $stmt->bindParam(":id_contact", $id_contact);
            $stmt->execute();
            $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
            return $editRow;
    }
    /**
     * function pour modifier un contact
     *
     * @param [type] $id_contact
     * @param [type] $id
     * @param [type] $Name
     * @param [type] $Email
     * @param [type] $Phone
     * @param [type] $Adresse
     * @return void
     */
    public function update($id_contact,$id,$Name,$Email,$Phone,$Adresse)
 {
  try
  {
   $stmt=$this->db->prepare("UPDATE contact SET Name=:Name,Email=:Email,Phone=:Phone,Adresse=:Adresse
                             WHERE id_contact= :id_contact AND id = :id");
   $stmt->bindParam(":Name",$Name);
   $stmt->bindParam(":Email",$Email);
   $stmt->bindParam(":Phone",$Phone);
   $stmt->bindParam(":Adresse",$Adresse);
   $stmt->bindParam(":id_contact",$id_contact);
   $stmt->bindParam(":id",$id);
   $stmt->execute();
   return true; 
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
 }

 public function delete($id_contact,$id)
 {
  $stmt = $this->db->prepare("DELETE FROM contact WHERE id_contact= :id_contact AND id = :id");
  $stmt->bindParam(":id_contact",$id_contact);
  $stmt->bindParam(":id",$id);
  $stmt->execute();
  return true;
 }
 
}
/**
 * object 
 */
$crud = new CONTACT($db_conn);
