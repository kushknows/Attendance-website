 <?php
$user = "root";
$password = "";
$db = "attendance";
$conn = mysqli_connect('localhost',$user, $password , $db) or die("Unable to connect");
echo"Connection made" ;

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
        body {
            background-color:transparent;
            font-weight: bold;
            font-family: 'Open Sans' arial;

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
    <?php
      $sq = "SELECT t_id,tname, sub_code FROM teacher;";
      $res = mysqli_query($conn,$sq);
      $rs = mysqli_fetch_assoc($res);
      $rw = array('ad0','qeq0');
      ?>
      <form method="POST" name="index0f" action ="index1.php">
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
      $sq = "SELECT t_id,tname, sub_code FROM teacher;";
      $res = mysqli_query($conn,$sq);
      $rs = mysqli_fetch_assoc($res);
      ?>
            <select name="sb">
                <?php 
                 if(mysqli_num_rows($res)>0) {
        while($row= mysqli_fetch_assoc($res)){
             $ti = $row['sub_code'];
            echo "<option value='$ti'>$ti</option> "; 
        }   }
        ?>
            </select>
            <input type="submit" value="submit" >
        </form>
          
   </body>
   </html>
