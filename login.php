<?php
session_start();
include("globals.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <style>
        body {
            font-family: "Lato", sans-serif;
        }


        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #87CEFA;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        
        body {margin:0;}
        
        ul.topnav {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #87CEFA;
        }

        ul.topnav li {float: left;}

        ul.topnav li a {
          display: inline-block;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          transition: 0.3s;
          font-size: 17px;
        }

        ul.topnav li a:hover {background-color: #555;}

        ul.topnav li.icon {display: none;}

        @media screen and (max-width:680px) {
          ul.topnav li:not(:first-child) {display: none;}
          ul.topnav li.icon {
            float: right;
            display: inline-block;
          }
        }

        @media screen and (max-width:680px) {
          ul.topnav.responsive {position: relative;}
          ul.topnav.responsive li.icon {
            position: absolute;
            right: 0;
            top: 0;
          }
          ul.topnav.responsive li {
            float: none;
            display: inline;
          }
          ul.topnav.responsive li a {
            display: block;
            text-align: left;
          }
        }
        
        
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 20%;
            border-radius: 25%;
        }
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }
        

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
               display: block;
               float: none;
            }
        }
    </style>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        
        <ul class="topnav" id="myTopnav">
        <li><a href="login.php">Login</a></li>
        </ul> 
        <?php
        if (isset($_SESSION["logged_in"]) and ($_SESSION["logged_in"] == true) and ($_SESSION["admin_status"] == 0)) {
            header("Location: welcome_e.php");
            exit;
        }elseif(isset($_SESSION["logged_in"]) and ($_SESSION["logged_in"] == true) and ($_SESSION["admin_status"] == 1)) {
                header("Location: welcome_s.php");
                exit;
            }
        ?>

            <form action="" method="post">
            <div class="container">
             <div class="imgcontainer">
                <img src="https://cdn1.iconfinder.com/data/icons/unique-round-blue/93/user-512.png" alt="Avatar" class="avatar">
            </div>   

            <div class="container">
                
            <label><b>Employee ID</b></label>
            <input type="text" placeholder="Enter Employee ID" name="eid" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="loginpassword" required>
            
            <button type="submit"name="submit">Login</button>
            </div>
           
        </form>
        
        <?php
            $userconn = new mysqli($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["dbpassword"],  $GLOBALS["usersdb"]);
            $_SESSION["logged_in"] = false;
            $_SESSION["prev_page"] = "login.php";
            if($userconn->connect_error){
                die("Connection failed ".$userconn->connect_error);
            } 
        ?>
        
        <?php
        if(isset($_POST["submit"])){
            if(is_numeric($_POST["eid"])){
                $eid = $_POST["eid"];
                $sql = "SELECT Employee_ID, Password, Fname, Admin_Status FROM employee WHERE Employee_ID = $eid ";
                $result = $userconn->query($sql);
                $row = mysqli_fetch_assoc($result);
                if($_POST["eid"] == $row["Employee_ID"]){
                    if($_POST["loginpassword"] == $row["Password"]){
                        $_SESSION["admin_status"] = $row["Admin_Status"];
                        $_SESSION["eid"] = $row["Employee_ID"];
                        $_SESSION["fname"] = $row["Fname"];
                        $_SESSION["logged_in"] = true;
                        $userconn->close(); 
                        if($_SESSION["admin_status"] == 1){
                            header("Location: welcome_s.php");
                            exit;
                        }else{
                            header("Location: welcome_e.php");
                            exit;
                        }
                    }else{
                        echo "Invalid eid/password";
                    }
                }else{
                     echo "Invalid eid/password";
                }
            }else{
                echo "Invalid eid/password";
            }
        }
        ?>
        
    </body>
</html>
