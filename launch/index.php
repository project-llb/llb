<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div id="container">
        <?php include "../libs/header.php"; ?>
<!--        --><?php //include "../libs/navbar.php"; ?>
<!--    <div id="navbar">-->
<!--        <div style="width: 100%; background-color: #CC0605; height: 26px;"></div>-->
<!--    </div>-->
    <div id="navbar">
        <div id="block2"><b></b></div>
        <div id="block2"><b></b></div>
        <div id="block2"><b></b></div>
        <div id="block2"><b></b></div>
        <div id="block2"><b></b></div>
    </div>
    <div id="content">
        <div id="login">
            <div id="log-titel">Login</div>
            <div id="log-content">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                    <table>
                            <tr>
                                <td>Gebruikersnaam:</td>
                                <td><input type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Wachtwoord:</td>
                                <td><input type="password" name="pass" ></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="">Wachtwoord vergeten?</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input align="right" type="submit" name="submit" value="Inloggen">
                                </td>
                            </tr>
                    </table>
                </form>
                <?php

                    if(isset($_POST['submit'])) {

                        $username = trim(strtolower($_POST['username']));
                        $pass1 = $_POST['pass'];
                        $dead = "false";
                        $message = "<font color='red' size=1 face=verdana>";
                        if(strlen($username) < 1 ){
                            $dead = "true";
                            $message .= "<br>De Gebruikersnaam is niet ingevuld.<br>";
                        }
                        if(strlen($pass1) < 8 ) {
                            $dead = "true";
                            $message .= "<br>Het wachtwoord voldoet niet aan de eisen<br><br> (8 tekens).";
                        }
                        if(!preg_match("#[0-9]+#", $pass1)) {
                            $dead = "true";
                            $message .= "<br>(1 cijfer).";
                        }
                        if(!preg_match("#[A-Z]+#", $pass1)) {
                            $dead = "true";
                            $message .= "<br>(1 hoofdletter).";
                        }
                        if(!preg_match("#[a-zA-Z]+#", $pass1)) {
                            $dead = "true";
                            $message .= "<br>(1 letter).";
                        }
                        if(!preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $pass1)) {
                            $dead = "true";
                            $message .= "<br>(1 leesteken).";
                        }

                        if($dead == "false"){
                            include('../libs/connect.php');
//                            $pass1 = md5($pass1);
                            $query = "SELECT * FROM login WHERE username = '$username' and password = '$pass1'";
                            $results =  $conn->query($query);
                            while($row = $results->fetch_assoc()) {
                                echo $row['status'];

                                if ($row['status'] > 0) {
//                                    $row = mysql_fetch_assoc($query);
//                                    $username = mysql_real_escape_string($username);
                                    $_SESSION['login'] = true;
                                    $_SESSION["username"] = $username;
                                    $_SESSION['rank'] = $row['status'];
                                    if($row['status']== 1) {
                                        $url1 = "http://localhost/llb/launch/student.php";
                                        header( "Location: $url1" );
                                    }
                                    if($row['status']== 2) {
                                        $url1 = "http://localhost/llb/launch/docent.php";
                                        header( "Location: $url1" );
                                    }
                                    if($row['status']== 3) {
                                        $url1 = "http://localhost/llb/launch/beheer.php";
                                        header( "Location: $url1" );
                                    }
                                } else {
                                    print "<font color='red' size=1 face=verdana>You filled in a wrong password and/or username";
                                }
                            }

                        }
                        else{
                            print $message;
                        }
                    }

                    ?>
            </div>
        </div>
    </div>
        <?php include "../libs/footer.php"; ?>

</div>

</body>
</html>