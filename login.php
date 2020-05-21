<?php 
$user= 'root';
$pass='';
$db='attendance';
$conn = mysqli_connect('localhost',$user,$pass,$db)or die("Unable to connect");
  #echo "start" ;
  if(isset($_POST['login'])) {
      echo "query" ;
      $usn = $_POST['username'];
      $ps = $_POST['password'];
      $sql= "SELECT * FROM loginup WHERE username= '$usn' AND pswd = '$ps' ";
      # echo $sql ;
      $req = mysqli_query($conn,$sql);
      $re  = mysqli_fetch_assoc($req);
      if ($re['username']== $usn && $re['pswd']==$ps){
          echo "Login Successful" ; }
      else {
           echo "Error";
       }   
      
     # $active = $row['active'];
      #echo $row ;
      
     
    
        }
  $conn->close();
  ?>

<html>

<head>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ignite</title>
 

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css" />
    <style>
        
        .avatardiv {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        input[type=text], input[type=password] {
            width: 25%;
            border: 2px solid #ccc;
            padding: 12px 20px;
            margin: 10px 0;
            box-sizing: border-box;
        }
         
         
        button {
            width: 15%;
            background-color: transparent;
            color: black;
            padding: 14px 20px;
            margin: 10px 0;
            opacity: 5 ;
          
        }
        
        #bc {
            border-style: solid ;
            border-color: black ;
            border-width: 3px ;
            margin:0 100px 100px 200px;
            font-weight: bold ;
        
        }
        

        button[type=submit] {
            font-size: 1em;
            border-style: solid ;
            border-color: black ;
            border-width: 3px ;
        }
        body {
             font-family: 'Open Sans' , Arial ;
             font-weight: bold ;
        }  
        

        </style>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
</head>

<body >
    <div >
        <nav class="navbar navbar-inverse" style="height:100px ; padding:10px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index1.html"><b>IGNITE.COM<b></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index1.html">Home</a></li>
                    <li><a href="#">Cruise</a></li>
                    <li><a href="#">Trips</a></li>
                  <!--  <li id="pd1"><a href="SignUp.php"><input class="btn" type="button" value=SignUp ></form></li>
    -->     </ul>
            </div>
        </nav>
        <div  class="container" align ="center">
        <div class="animated zoomIn" id="bc">
            <h1 ><b>LOGIN</b></h1>
                <form action="dashboard.php" method="POST">
         <!--   <div class= "avatardiv">
                <img src="SeekPng.png" alt="avatar">
            </div> -->

                    <div class="form-container">
                        <label for="username"><h3><b>Username: &nbsp    <b></h3></label>
                        <input type="text" placeholder="Username"  name="username" required>
                         <br><br>
                        <label for="password"><h3><b>Password: &nbsp</b></h3></label>
                        <input type="password" placeholder="Enter Password"  name="password" required>
                 <br><br>
                 <label style="margin:0 140px 0 0;">
                <input  type="checkbox" checked="checked" name="remember">Remember me
            </label>
            <BR><br>
                <button style="margin: 0 0 0 40px ;" type="submit" name="login" value="login">Login</button>
                <br>
           
    </div>
    </form>
    </div>
    </div>
    </div>
    <script src="C:\Users\KUSH\Downloads\html\Sphere-master\js\header.js"></script>
	<script src="C:\Users\KUSH\Downloads\html\Sphere-master\js\sphere.js"></script>  
</body>

</html>