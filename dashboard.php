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
                    <li class="active"><a href="dashboard.php">Home</a></li>
                    <li><a href="index1.php">Take Attendence</a></li>
                 <form style="padding: 0 10px 0 400px;">

                  <li id="pd1"><a href="logout.php"><input class="btn" type="button" value=Logout ></a><li></form>
         </ul>
            </div>
        </nav>
         <h4>
         <?php echo date('d/m/Y h:i:sa'); ?> </h4>
        <h2 align="center"><b >Teacher's Details </b></h2>
        <div style=" padding: 70px 200px 0 300px;">


        <div  class="container" >

        <div class="animated zoomIn"  id="bc">
           
            <table> 
                <tr>
                    <td>
            <h2 ><b>Teacher Name :</b></h2></td>
             <?php
             #echo $usn ;  
               if(!isset($_SESSION)) 
                { 
                    session_start(); 
                   } 
            

            $usn=  $_SESSION['username'];
             $sq = "SELECT * FROM teacher WHERE username = '$usn'  ;";
             $tq = mysqli_query($conn, $sq);
             if (mysqli_num_rows($tq) > 0) {
             while ($row = mysqli_fetch_assoc($tq)) {
                 echo "<td><h2>";
                echo $row['tname'] ; 
                echo "</h2></td></tr>" ;
                echo "<tr><td><h2 ><b>" ;
                echo "Subjects :</b>" ;
                echo "</td>";
                echo "<td><h2>".$row['sub_code']."</h2></td>";
                 }   }
             ?>   </h2>
                </tr>
            </table>

        
            </div>
           
             </div>
             </div>  
           </body>
         </html>