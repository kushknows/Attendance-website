<?php
$user = "root";
$password = "";
$db = "attendance";
$conn = mysqli_connect('localhost',$user, $password , $db) or die("Unable to connect");
#echo"Connection made" ;
if(isset($_POST['login'])) {
      #echo "query" ;
      $usn = $_POST['username'];
      $ps = $_POST['password']; }

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
        .btn1 {
            background-color: transparent; /* grey */
            border: none;
            color: black;
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
            margin:100px 300px 100px 300px;
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
  <nav class="navbar navbar-inverse" style="height:120px ; padding:10px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index1.html"><b>IGNITE.COM<b></a>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="dashboard.php">Home</a></li>
                    <li class="active"><a href="index1.php">Take Attendence</a></li>
                    <li><a href="view.php">View </a></li>
                    <form style="padding: 0 10px 0 400px;">

                  <li id="pd1"><a href="logout.php"><input class="btn" type="button" value=Logout ></a><li></form>

         </ul>
            </div>
        </nav>




        <div  class="container" >

     
                <?php
        session_start();

      $usnq=  $_SESSION['username'];      
      
      $sq = "SELECT t_id,tname, sub_code FROM teacher WHERE username = '$usnq';";
      $res = mysqli_query($conn,$sq);
     
      $rw = array('ad0','qeq0');
      ?>
      <form method="POST" name="index0f" action ="dashboard.php">
      <select name="tec">
        <?php 
       if(mysqli_num_rows($res)>0) {
        while($row= mysqli_fetch_assoc($res)){
            $tn = $row['tname'];
            $ti = $row['sub_code'];
             $tnn= implode($tn) ;
             
             echo "<option value='$tn'>$tn</option>";
             
       

        }}
      ?>
            </select>
           <?php

      $sq = "SELECT t_id,tname, sub_code FROM teacher where username='$usnq' ;";
      $res = mysqli_query($conn,$sq);
      ?>
            <select name="sb">
                <?php 
                
        while($row= mysqli_fetch_assoc($res)){
             $ti = $row['sub_code'];

            echo "<option value='$ti'>$ti</option> "; 
        }   
        ?>
            </select>
            
      
          <div class="animated zoomIn"  id="bc">
        <table width="100%" border="4">
          <tr>
           <th>Name</th>
           <th>RollNo</th>
           <th colspan=2>Attendance</th>
           </tr>
            <?php
             $sl ="SELECT rollno, s_name FROM stdlist ;";
             $res = mysqli_query($conn, $sl);
  
              $num =     mysqli_num_rows($res);
                while($row = mysqli_fetch_assoc($res)) {
                  $sn = $row['s_name'];
                  $rn = $row['rollno'];
                    echo "<tr>";
                    echo "<td><b>";
                    echo "" . $row["s_name"]. "" ;
                    echo "</b></td>";
                    echo "<td><b>";
                    echo "" .$row["rollno"]. "";
                    echo "</b></td>";
                   echo "<td>";
                   echo "Present";
          
                   echo "<input type='checkbox' name='sf[]' value='P' ";
                    
                   echo "</td>";
                   echo "<td>" ;
                   echo "Absent";
                   echo "<input type='checkbox' name='sf[]' value='A' ";
                 
                   echo "</td>" ;
                  
                }
           
             echo "</tr>";
             
             ?>
             
             </tr>
             
             </table>
             <br>
             <div  style="padding:0 10px 0 100px;">
             <input class="btn1" type="submit" name="Submit" value="Submit" />
           </div>
           </form>
            </div>
    </div>
    



          
           </body>
         </html>