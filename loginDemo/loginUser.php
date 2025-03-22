<?php



session_start();
$errors = array();
if(isset($_POST["email"]) && isset($_POST["password"])){

    $email = $_POST["email"];
    $password = $_POST["password"];
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email";
    }


}else{
    $errors["email"] = "Email is required";
    $errors["password"] = "Password is required";
}
if(count($errors) == 0){
    if($email==='noha@gmail.com' && $password==='123456'){
        $_SESSION['email'] = $email;
        $_SESSION['name'] = "Nohaaaaaaaaaaaa";
        $_SESSION['login']= true;
    }
    header('Location: home.php');
}else{
    $errors = json_encode($errors);
    header("Location: login.php?error={$errors}");
}