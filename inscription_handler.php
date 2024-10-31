<?php
$conn = new mysqli ("localhost","root","","global_foot") ; 
if ($conn->connect_error) {
    die ("la connexion a echoué". $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['mot_de_passe']; 
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
}

$sql = "INSERT INTO users (nom, prenom, email, mot_de_passe) VALUES ('$nom', '$prenom','$email','$hashed_password')";

if ($conn->query($sql)===TRUE) {
    header('location:pageacceuil.php');

   exit() ; 
} else {
    echo "erreur:". $sql . "<br>" . $conn->error ;
}
$conn->close() ; 
?> 