<?php
$user = "root";
$password = "";
$db = "attendance";
$conn = mysqli_connect('localhost',$user, $password , $db) or die("Unable to connect");
#echo"Connection made" ;
 if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
      #echo "query" ;
    ob_start();
    session_start();
      


      $usn = $_POST['username'];
      $ps = $_POST['password'];
      $_SESSION['username'] = $usn;
      $_SESSION['password'] = $ps ; }

 ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ignite</title>

  
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        #pd1 {
            padding:1 20 0 550 ;
        
        }

        button[type=submit] {
            font-size: 1em;
            border-style: solid ;
            border-color: black ;
            border-width: 3px ;
        }
        .btn {
            background-color: transparent; /* grey */
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
           
            border-width: 3px ;
            font-size: 1em;
            border-style: solid ;
            border-color: black ;
            border-width: 3px ;

            
        }
        #bc {
            border-style: solid ;
            border-color: black ;
            border-width: 3px ;
            margin:0 500px 100px 100px;
            font-weight: bold ;
            padding: 50px 100px 50px 100px ;
        
        }
        body {
            background-color:transparent;
            font-weight: bold;
            font-family: 'Open Sans', arial;

        }
         input[type=text], input[type=password] {
            width: 25%;
            border: 2px solid #ccc;
            padding: 12px 20px;
            margin: 10px 0;
            box-sizing: border-box;
        }
         

        button {
            width: 8%;
            background-color: transparent;
            color: black;
            padding: 8px 20px;
            margin: 10px 0;
            opacity: 5 ;
          
        }
        .wrapper {
            width:80%;
            overflow: hidden;
            padding: 200px;
            margin: auto;
        }
    </style>
    </head>
<body  >
       <div >
        <nav class="navbar navbar-inverse" style="height:120px ; padding:10px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index1.html"><b>IGNITE.COM<b></a>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="dashboard.php">Home</a></li>
                    <li><a href="index1.php">Take Attendence</a></li>
                    <li class="active"><a href="view.php"> View </a></li>
                 <form style="padding: 0 10px 0 400px;">

                  <li id="pd1"><a href="logout.php"><input class="btn" type="button" value=Logout ></a><li></form>
         </ul>
            </div>
        </nav>
        <form action = "view1.php" method = "POST">
        From Date : 
        <input type="text" name="datein" >
        To Date :
        <input type="text" name="dateto" >
        <button  type="submit" name="submit2" value="submit2">Submit</button>
    </form>
        <? php 
             if(isset($_POST['submit'])) {
      #echo "query" ;
            $din = $_POST['datein'];
            $dto = $_POST['dateto'];

             # $sq = "SELECT rollno, s_name FROM teacher where username='$usnq' ;";
     # $res = mysqli_query($conn,$sq); 
        }
         echo $din ; 
         echo $dto ;
              ?>
        
        </body>
        </html>
