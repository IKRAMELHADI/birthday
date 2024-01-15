<?php
    $host="e-srv-lamp.univ-lemans.fr";
    $user="e2304343";
    $database="e2304343";
    $password="Kmw383vn";
    $connection=new mysqli($host,$user,$password,$database);

    if($connection->connect_error){
        echo("Error");
    }
    else{
        echo("No Error");
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Nom =$_POST['Nom'];
        $Nombre =$_POST['Nombre'];
        $sql ="INSERT INTO `birthday-guests`(Nom,Nombre) VALUES('$Nom','$Nombre')";
        $connection->query($sql);
        
    }
?>