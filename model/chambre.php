<?php
include_once('modele.php');
class Chambre extends Modele {
    private $numero_chambre,$nombre_lit_seul,$nombre_lit_double;
    function __construct(){
        parent ::__construct();
    }

    function insert($numero_chambre,$nombre_lit_seul,$nombre_lit_double){
        $query="insert into chambre(numero_chambre,nombre_lit_seul,nombre_lit_double) values(? ,? ,? )";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($numero_chambre,$nombre_lit_seul,$nombre_lit_double));
    }

    function insertLog($username,$password,$email,$numero){
        $query="insert into login(username,password,email,numero) values(? ,?,?,?)";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($username,$password,$email,$numero));
    }
    function insertRes($Lundi,$Mardi,$Mercredi,$Jeudi,$Vendredi,$Samedi,$Dimanche, $numeroChambre){
        $query="UPDATE chambre
        SET Lundi = ?, Mardi = ?, Mercredi = ?, Jeudi = ?, Vendredi = ?, Samedi = ?, Dimanche = ?
        WHERE numero_chambre = ?;";
        $res = $this->pdo->prepare($query);
        $res->execute(array($Lundi,$Mardi,$Mercredi,$Jeudi,$Vendredi,$Samedi,$Dimanche, $numeroChambre));
    }

    function liste(){
        $query = "select * from chambre";
        $res=$this->pdo->query($query);
        return $res;
    }

    function listeLog(){
        $query = "select * from login";
        $res=$this->pdo->query($query);
        return $res;
    }
    function modifier($numero_chambre,$nombre_lit_seul,$nombre_lit_double,$numAnc)
    {
        $sql = "UPDATE chambre SET  numero_chambre=?, nombre_lit_seul=?,nombre_lit_double=? WHERE numero_chambre=?";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute(array($numero_chambre,$nombre_lit_seul,$nombre_lit_double,$numAnc));
    }

    function delete($numero_chambre) {
        $query = "delete from chambre where numero_chambre=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($numero_chambre));
        }
}

?>