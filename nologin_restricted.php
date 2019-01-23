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
        
        body {
            background-image: url("http://i.imgur.com/brQ5QVN.png");
            font-family: "Lato", sans-serif;
            
        }

        .container {
            position: relative;
        }

        .center {
            position: absolute;
            width: 100%;
            padding-top: 66px;
            text-align: center;
            font-size: 36px;
            color: white;
            font-weight: bold;
        }

        .subcenter {
            position: absolute;
            width: 100%;
            text-align: center;
            font-size: 18px;
            font-style: italic;
            padding-top: 112px;
            color: white;
        }
        
        </style>
        <head>
            <meta charset="UTF-8">
            <title></title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
        <body>
        <div class="container">
            <div class="center">Access Restricted</div>
            <p class="subcenter">You are not logged in.</p>
        </div>    
        <ul class="topnav" id="myTopnav">
        <li><a href="login.php">Login</a></li>
        </ul>   
            
        <?php
        if(isset($_POST["return"])){    
            if(!isset($_SESSION["logged_in"])){
                $_SESSION["prev_page"] = "login.php";
            }
            header("Location: ".$_SESSION["prev_page"]);
            }  
        ?>
        
        

        
        
    </body>
</html>
