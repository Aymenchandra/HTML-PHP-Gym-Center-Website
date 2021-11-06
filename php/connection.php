<?php
if(strlen($_POST["email"])>0)
{
    $conn=mysqli_connect("Localhost","root","","gymcenter") or die(mysqli_error());
    
    $email = $_POST["email"];
    $pass = md5($_POST["mdp"]);

    $r = mysqli_query($conn,"select * from admins where email='$email'") ;
    $r1 = mysqli_query($conn,"select * from registers where email='$email'");

    if(mysqli_num_rows($r)>0)
    {
        $r = mysqli_query($conn,"select * from admins where motdepass='$pass'");
        if(mysqli_num_rows($r)>0)
        {
            echo ('loading...');
            session_start();
            $_SESSION["admin"] = $email;
            if(isset($_POST["souvenir"]))
            {
                setcookie("admin",$email,time()+3600); //1h
                setcookie("pass",$pass,time()+3600);  //1h
            }
            header("REFRESH:3;URL=admin.php");
        }
        else
        echo "<script> alert('Mot de pass invalide'); window.history.back();</script>";
    }

    elseif(mysqli_num_rows($r1)>0)
    {
        $r = mysqli_query($conn,"select * from registers where motdepass='$pass'");
        if(mysqli_num_rows($r)>0)
        {
            echo ('loading...');
            session_start();
            $_SESSION["user"] = $email;
            if(isset($_POST["souvenir"]))
            {
                setcookie("email",$email,time()+3600); //1h
                setcookie("motdepass",$pass,time()+3600);  //1h
            }
            header("REFRESH:3;URL=welcome.php");
        }
        else
        echo "<script> alert('Mot de pass invalide'); window.history.back();</script>";
    }
    else
    echo "<script> alert('Adresse n\'existe pas'); window.history.back();</script>";
       
}
else 
    header("REFRESH:3;URL=index.php");
?>