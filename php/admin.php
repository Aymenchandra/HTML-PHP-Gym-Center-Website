<?php
session_start();
if(isset($_SESSION["admin"]))
{
    $conn=mysqli_connect("Localhost","root","","gymcenter") or die(mysqli_error());
    if(isset($_POST["cherchertout"]))
    {
        $r = mysqli_query($conn,"select * from registers");
        if(mysqli_num_rows($r)>0)
        {
            $i = 1;
            echo '<table border="0" width="100%"> 
            <tr>
                <td>N°</td>
                <td>Email</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Motdepass</td>
                <td>date de naissance</td>
                <td>age</td>
            </tr>';
            while($t = mysqli_fetch_array($r))
            {
                echo "<tr>
                <td>$i</td>
                <td>$t[0]</td>
                <td>$t[1]</td>
                <td>$t[2]</td>
                <td>$t[3]</td>
                <td>$t[4]</td>
                <td>$t[5]</td>
            </tr>
        ";
            $i++;
            }
            echo "</table>";
        }
        else echo"aucun inscription";
        echo "<hr>";
        $r = mysqli_query($conn,"select * from admins");
        if(mysqli_num_rows($r)>0)
        {
            $i = 1;
            echo '<table border="0" width="100%"> 
            <tr>
                <td>N°</td>
                <td>Email</td>
            </tr>';
            while($t = mysqli_fetch_array($r))
            {
                echo "<tr>
                <td>$i</td>
                <td>$t[0]</td>
            </tr>
        ";
            $i++;
            }
            echo "</table>";
        }
        else "aucun admin";
    }
    if(isset($_POST["demarer"]))
    {
            $e = $_POST["email"];
            $r = mysqli_query($conn,"select * from registers where email = '$e'");
            $r1 = mysqli_query($conn,"select * from registers where email = '$e'");
        if(mysqli_num_rows($r)>0)
        {
            echo '<table border="0" width="100%"> 
            <tr>
                <td>Email</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Motdepass</td>
                <td>date de naissance</td>
                <td>age</td>
            </tr>';
            while($t = mysqli_fetch_array($r))
            {
                echo "<tr>
                <td>$t[0]</td>
                <td>$t[1]</td>
                <td>$t[2]</td>
                <td>$t[3]</td>
                <td>$t[4]</td>
                <td>$t[5]</td>
            </tr>
        ";
            }
            echo "</table>";
        }
        else $affiche=$e." n'existe pas";
        
    }
    if(isset($_POST["modify"]))
    {
        $e = $_POST["email"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mdp = md5($_POST["mdp"]);
        $dt = $_POST["dt"];
        $age = $_POST["age"];
        
        if(strlen($e)>0)
        {
            $r = mysqli_query($conn,"select * from registers where email='$e'");
            if(mysqli_num_rows($r)>0)
            {
                if(strlen($mdp)>0)
                {
                    mysqli_query($conn,"UPDATE registers SET motdepass='$mdp' where email='$e'");
                    $affiche="Modifié avec succes";
                }
                if(strlen($nom)>0)
                {
                    mysqli_query($conn,"UPDATE registers SET nom='$nom' where email='$e'");
                    $affiche="Modifié avec succes";
                }
                if(strlen($prenom)>0)
                {
                    mysqli_query($conn,"UPDATE registers SET prenom='$prenom' where email='$e'");
                    $affiche="Modifié avec succes";
                }
                if(strlen($dt)>0)
                {
                    mysqli_query($conn,"UPDATE registers SET datenaissance='$dt' where email='$e'");
                    $affiche="Modifié avec succes";
                }
                if(strlen($age)>0)
                {
                    mysqli_query($conn,"UPDATE registers SET age='$age' where email='$e'");
                    $affiche="Modifié avec succes";
                }
            }
            else $affiche=$e." n'existe pas";
        }
        else $affiche="Tu dois recuperer le champ email";        
    }
    if(isset($_POST["supp"]))
    {
        $e = $_POST["email"];
        if(strlen($e)>0)
        {
            $r = mysqli_query($conn,"select * from registers where email='$e'");
            if(mysqli_num_rows($r)>0) 
            {   
                mysqli_query($conn,"DELETE FROM registers where email='$e'");    
                $affiche="Suppression avec succés";
            }
            else $affiche = $e." n'existe pas";
        }
        else $affiche ="Tu dois recupérer le champ email";
    }
    if(isset($_POST["ajout"]))
    {
        $email = $_POST["email"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mdp = md5($_POST["mdp"]);
        $date = $_POST["dt"];
        $age = $_POST["age"];
        $r = mysqli_query($conn,"select * from registers where email='$email'");
        $r1 = mysqli_query($conn,"select * from admins where email='$email'");
        if(strlen($email)>0 && strlen($mdp)>0 && strlen($nom)>0 && strlen($prenom)>0 && strlen($date)>0 && strlen($age)>0)
        {
            if(mysqli_num_rows($r)==0) 
                {   
                    mysqli_query($conn,"INSERT INTO registers VALUES ('$email', '$nom', '$prenom','$mdp','$date',$age)");    
                    $affiche="Ajout avec succés"; 
                }
            else $affiche = $email." est deja existe";
        }
        elseif(strlen($email)>0 && strlen($mdp)>0)
        {
            if(mysqli_num_rows($r1)==0)
            {
                mysqli_query($conn,"INSERT INTO admins VALUES ('$email','$mdp')");    
                $affiche="Bienvenue ".$email." tu es un noveau admin";
            }
            else $affiche = $email." est deja existe";
        } 
        else $affiche = "Tu doit recuperer les champs";
    }
    if(isset($_POST["deconn"]))  
    {
        session_start();
	    session_destroy();
 
        if (isset($_COOKIE["admin"]) AND isset($_COOKIE["pass"]))
        {
            setcookie("admin", '', time() - 3600);
            setcookie("pass", '', time() - 3600);
        }

        header('location:../index.php');
        }   
}

else die ("Tu n'es pas l'acces de cette page");


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/admin.css">
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
    <div class="form-box">
        <div class="container">
            <form name="f" action="<?php $_SERVER["PHP_SELF"];?>" method="POST" >
                <?php if(isset($_POST['chercher']) || isset($_POST['supprimer']))
                {
                    echo"<p>Email</p>";
                    echo"<input type='text' name='email' class='box'>";
                }
                ?>
                <?php if(isset($_POST['modifier']) || isset($_POST['ajouter'])) 
                {
                    
                    echo"<br><input type='text' name='email' class='box' placeholder='email...'></p>";

                    echo"<input type='text' name='nom' class='box' placeholder='nom...'></p>";

                    echo"<input type='text' name='prenom' class='box' placeholder='prenom...'></p>";

                    echo"<input type='password' name='mdp' class='box' placeholder='mot de pass...'></p>";

                    echo"<input type='text' name='dt' class='box' placeholder='date de naissance...'></p>";

                    echo"<input type='text' name='age' class='box' placeholder='age...'></p>";
                }
                ?>
               
                <?php if(isset($affiche)) echo "$affiche" ?>
                <p><input type="submit" value="Ajouter" class="btn" name="ajouter"></p>   
                <p><input type="submit" value="Supprimer" class="btn" name="supprimer"></p>
                <p><input type="submit" value="Modifier" class="btn" name="modifier"></p>
                <p><input type="submit" value="Chercher" class="btn" name="chercher"></p>
                <p><input type="submit" value="Cherchertout" class="btn" name="cherchertout"></p>
                <p><input type="submit" value="Deconnéxion" class="btn" name="deconn"></p>
                <?php if(isset($_POST['chercher'])) echo"<p><input type='submit' value='Démarrer' class='btn' name='demarer'></p>"; ?>
                <?php if(isset($_POST['modifier'])) echo"<p><input type='submit' value='modify' class='btn' name='modify'></p>"; ?>
                <?php if(isset($_POST['supprimer'])) echo"<p><input type='submit' value='suppression' class='btn' name='supp'></p>"; ?>
                <?php if(isset($_POST['ajouter'])) echo"<p><input type='submit' value='ajout' class='btn' name='ajout'></p>"; ?>
            </form>
        </div>
    </div>
</body>
</html>
