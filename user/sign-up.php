<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="overlay">
    <!-- LOGN IN FORM by Omar Dsoky -->
    <form method="post">
        <!--   con = Container  for items in the form-->
        <div class="con">
            <!--     Start  header Content  -->
            <header class="head-form">
                <h2>Sing Up</h2>
                <!--     A welcome message or an explanation of the login form -->
                <p>Sign-Up here using your username and password</p>
            </header>
            <!--     End  header Content  -->
            <br>
            <div class="field-set">

                <!--   user name -->
                <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
                <!--   user name Input-->
                <input class="form-input" id="txt-input" type="text" placeholder="@UserName" name="username" >

                <br>

                <!--   Password -->

                <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
                <!--   Password Input-->
                <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" >

                <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
                <br>
                <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
                <input class="form-input" type="password" placeholder="Import Password" id="pwd"  name="password" >

                <!--      Show/hide password  -->
                <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>

                <br>
                <input type="radio" name="add" >buyer
                <input type="radio" name="add" >seller

                <br>
                <!--        buttons -->
                <!--      button LogIn -->
                <button class="log-in" name="login"> Sign Up </button>
            </div>

        </div>

        <!-- End Form -->
    </form>
</div>

</body>
</html>
<?php
include_once "DataUser.php";
include_once "User.php";

if($_SERVER['REQUEST_METHOD']=='POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $importPassword = $_POST['password'];
    if (empty($username) || empty($password) || empty($importPassword)) {
        echo '<b> Please enter username and password!</b>';
    } else if ($password != $importPassword) {
        echo '<b> Password is not correct, please enter password!</b>';
    } else {
        $user = new  User($username, $password);
        DataUser::addUser($user);
        header('location: login.php');
    }
}
?>