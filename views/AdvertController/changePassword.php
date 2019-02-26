<?php



require_once __DIR__.'/../../Database.php';

$database = new Database();
session_start();

$email = $_SESSION['id'];
$stmt = $database->connect()->prepare("SELECT password FROM users WHERE email=:email ORDER BY id DESC LIMIT 1;");
$stmt->execute(['email' => $email]);
$userPassword = $stmt->fetch();


if($userPassword[0] == $_POST['oldpassword'] && $_POST['newpassword'] == $_POST['newpassword2'])
{
    $data = [
        'password' => $_POST['newpassword'],
        'email' => $email
    ];
    $sql = "UPDATE users SET password=:password WHERE email=:email;";
    $stmt= $database->connect()->prepare($sql);
    $stmt->execute($data);

    $url = "http://$_SERVER[HTTP_HOST]/";
    header("Location: {$url}?page=index");
}
else
{
    echo "Błąd";
}




?>