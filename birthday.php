<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> birthday </title>
    <link rel="stylesheet" href="birthday.css">
</head>
    <body>
        <header>
        <h1 > My birthday</h1>
        </header>
        <header >
            <form>
                <fieldset>
                <legend>informations</legend>
                <legend>informations</legend>
                <label> NOM:IKRAM</label><br>
                <label> DATE: 21/11/2024</label><br>
                <label> THEME: METGALA</label><br>
                <label> HEURE:16:30 </label><br>
                <label><a href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-
                    descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes/"> Lieu </a> </label><br>
                
                </fieldset>  
            </form>
            <fieldset>
            <button id="savoir+" onclick="displayExplanations()"> en savoir plus</button>
            <p id="savoir"> 
                Il y a tellement de plaisir associé aux anniversaires. Vous rencontrez des gens, 
                des amis, jouez, mettez des gâteaux et chantez ensuite des chansons d'anniversaire. 
                Et bien plus encore nous partageons la joie et les cadeaux avec nos proches et nos amis.
            </p>
            </fieldset>
            


            <form method="post" action="register.php">
            <fieldset>  
            <legend>Invités</legend>

            <label for="NAME">Name</label><br>
            <input type="text" id="Nom" NAME="Nom" placeholder="Nom "><br><br>

             <label for="Nombre">Nombre</label><br>
            <input type="number" id="Nombre" NAME="Nombre" placeholder="nombre"><br><br>

            <input  type="submit" name="submit" value="send">

            
            </fieldset>
            </form>
            <fieldset>
                <p>Total guests:<?php include 'count-guests';?></p>
            </fieldset>
            <script src="birthday.js"></script>
    </body>
</html>