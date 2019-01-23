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
        
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0px;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        
        }
        
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;             
        }

        .sidenav a:hover, .offcanvas a:focus{
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
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
            padding-top: 56px;
            text-align: center;
            font-size: 36px;
            color: white;
        }

        .subcenter {
            position: absolute;
            width: 100%;
            text-align: center;
            font-size: 18px;
            font-style: italic;
            padding-top: 102px;
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
            <p class="subcenter">You do not have permission to view this page.</p>
        </div>    
        <ul class="topnav" id="myTopnav">
        <li><a class="active" href="#open" onclick="openNav()">&#9776; Menu</a></li>
         <li><a href="welcome_e.php">Home</a></li>
        <li><a href="confirm_logout.php">Logout</a></li>
        <li class="icon">
        <a href="javascript:void(0);" style="font-size:17px;" onclick="myFunction()">☰</a>
       </li>
        </ul>   
        
        <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Search Apparel</a>
        <a href="#">View Apparel</a>
        <a href="#">Sale</a>
        <a href="#">Return</a>
        </div>

        <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        </script>    
        
    </body>
</html>
