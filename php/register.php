<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $conn=mysqli_connect("Localhost","root","","gymcenter") or die(mysqli_error());
    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mdp = md5($_POST["mdp1"]);
    $date = $_POST["date"];
    $age = $_POST["age"];
    $r = mysqli_query($conn,"select * from registers where email='$email'");
    if(mysqli_num_rows($r)==0) 
    {   
        mysqli_query($conn,"INSERT INTO registers VALUES ('$email', '$nom', '$prenom','$mdp','$date',$age)");    
        echo "<script> alert('Bienvenu inscription avec succés tu dois connecter'); window.history.back();</script>";
    }
    else 
    echo "<script> alert('Ce adresse $email est deja existé'); window.history.back();</script>";      
} else echo "tu n'es pas l'accés directement";
?>