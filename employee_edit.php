<?php
session_start();
include("globals.php");
?>
<?php
    if ($_SESSION["logged_in"] == false ) {
        header("Location: nologin_restricted.php");
    }elseif(($_SESSION["admin_status"] != 1)) {
            header("Location: employee_restricted.php");
    }elseif(!isset($_GET["eid"])){
            header("Location: employee_search_edit.php");
    }
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
          position: relative;
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
        
        input[type=text], input[type=password], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=integer] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #87CEFA;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
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
  
    <ul class="topnav" id="myTopnav">
    <li><a class="active" href="#open" onclick="openNav()">&#9776; Menu</a></li>
    <li><a href="welcome_s.php">Home</a></li>
    <li><a href="confirm_logout.php">Logout</a></li>
    <li class="icon">
    <a href="javascript:void(0);" style="font-size:17px;" onclick="myFunction()">☰</a>
    </li>
    </ul>    
        <h3>Edit Employee</h3>    
    <div1 id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="active" href="#openEmployee" onclick="openNav1()">Employee</a>
        <a class="active" href="#openApparel" onclick="openNav2()">Apparel</a>
    </div1>
    

    
    <div1 id="mySidenavE" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
        <a href="employee_add.php">Add Employee</a>
        <a href="employee_delete.php">Delete Employee</a>
        <a href="employee_edit.php">Edit Employee</a>
        <a href="employee_search.php">Search Employee</a>
        <a href="employee_view.php">View Employees</a>   
    </div1>
    
    <div1 id="mySidenavA" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
        <a href="apparel_add.php">Add Apparel</a>
        <a href="apparel_delete.php">Delete Apparel</a>
        <a href="apparel_addstock.php">Add Stock</a>
        <a href="apparel_search_s.php">Search Apparel</a>
        <a href="apparel_view_s.php">View Apparel</a>
        <a href="apparel_sale_s.php">Sale</a>
        <a href="apparel_return_s.php">Return</a>
        <a href="apparel_stolen.php">Stolen</a>
        <a href="apparel_write_off.php">Write Off</a>
    </div1>
    
    <div>
        <form action="" method="post">

            <label for="psw">Password</label>
            <input type="password" name="password">

            <label for="fname">First Name</label>
            <input type="text" name="fname">

            <label for="lname">Last Name</label>
            <input type="text" name="lname">

            <label for="admin">Admin Status</label>
            <select name="admin">
                <option value="">Select...</option>  
                <option value="no">No</option>
                <option value="yes">Yes</option>    
            <input type="submit" name="update" value="Submit">
        </form>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0px";
        }
        
        function openNav1() {
            document.getElementById("mySidenavA").style.width = "0px";
            document.getElementById("mySidenav").style.width = "0px";
            
            document.getElementById("mySidenavE").style.width = "250px";
            
        }
        
        function closeNav1() {
            document.getElementById("mySidenav").style.width = "250px";
            
            document.getElementById("mySidenavE").style.width = "0px";
        }
        
        function openNav2() {
            document.getElementById("mySidenavE").style.width = "0px";
            document.getElementById("mySidenav").style.width = "0px";
           
            document.getElementById("mySidenavA").style.width = "250px";
        }
        
        function closeNav2() {
 
            document.getElementById("mySidenav").style.width = "250px";
                        

            document.getElementById("mySidenavA").style.width = "0px";
        }
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
        
    <?php
    if(isset($_POST["update"])){                   
                    $eid = (int)$_GET["eid"];
                    $emp = searchEID($eid);
                    $password = $emp["Password"];
                    $fname = $emp["Fname"];
                    $lname = $emp["Lname"];
                    $admin = $emp["Admin_Status"];
                    if(isset($_POST["password"])and (strlen($_POST["password"])> 5) and (strlen($_POST["password"])< 31)){
                        $password = $_POST["password"];
                    }    
                    if(isset($_POST["fname"]) and (ctype_alpha($_POST["fname"])) and (strlen($_POST["fname"])< 31) and (strlen($_POST["fname"])> 1)){
                        $fname = $_POST["fname"];
                    }    
                    if(isset($_POST["lname"])and (ctype_alpha($_POST["lname"]))and (strlen($_POST["lname"])< 31) and (strlen($_POST["lname"])> 1)){
                        $lname = $_POST["lname"];
                    }   
                    if(isset($_POST["admin"])){
                        if($_POST["admin"] == "yes"){
                            $admin = 1;
                        }
                        if($_POST["admin"] == "no"){
                            $admin = 0;
                        }
                    }       
                    $userconn = new mysqli($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["dbpassword"], $GLOBALS["usersdb"]);
                    $sql = "UPDATE employee SET Password='$password', Fname='$fname', Lname='$lname', Admin_Status=$admin WHERE Employee_ID = $eid";
                    if($userconn->query($sql)==true){
                        echo "Employee has been edited.<br>";
                    }else{
                        echo "Employee has not been edited. Please try again.<br>";
                    }
                    $userconn->close();

}
    
    ?> 

    <?php
    function searchEID($x){
        $userconn = new mysqli($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["dbpassword"], $GLOBALS["usersdb"]);
        if($userconn->connect_error){
            die("Connection failed".$userconn->connect_error);
        }
        $sql = "SELECT * FROM employee WHERE Employee_ID = $x";
        $result = $userconn->query($sql);
        $row = mysqli_fetch_assoc($result);
        $userconn->close(); 
        return $row;
    }
    ?>  
        


    </body>
</html>