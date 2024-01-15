
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
$seletDataquery="SELECT * FROM `birthday-guests`";







if ($result->num_rows > 0) {

$totalGuests = 0;



while ($row = $result->fetch_assoc()) {

   

    echo "Nom: " . $row["Nom"] . " - Nombre: " . $row["Nombre"] . "<br>";



    

    $totalGuests += $row["Nombre"];

}





echo "<p>Le nombre total d'invités est : " . $totalGuests . "</p>";

} else {

echo "Aucun résultat trouvé dans la base de données.";

}



$connection->close();  

?>






