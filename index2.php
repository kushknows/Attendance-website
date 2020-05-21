<?php
$user = "root";
$password = "";
$db = "attendance";
$conn = mysqli_connect('localhost',$user, $password , $db) or die("Unable to connect");
#echo"Connection made" ;


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
            font-family: 'Open Sans', arial;

        }
        .wrapper {
            width:80%;
            overflow: hidden;
            padding: 200px;
            margin: auto;
        }
        #bc {
            border-style: solid ;
            border-color: black ;
            border-width: 3px ;
            margin:0 500px 100px 100px;
            font-weight: bold ;
            padding: 50px 100px 50px 100px ;
        
        }
    </style>
    </head>
<body>
     <div  class="container" >

     <div class="animated zoomIn"  id="bc">
    <?php 
     $st= $_POST['sf'];
     $sb= $_POST['sb'];
     $tn= $_POST['tec'];
     $date = date('d/m/Y');
      
       # echo $date ;
      
           
    $query="CREATE TABLE IF NOT EXISTS $sb (s_id int(5), sname char(18), rollno int(8),`".$date."` char) ;";
    $create=mysqli_query($conn, $query); 
    

         //adding columns 
        $col = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'$sb' ";
        $ree = mysqli_query($conn, $col);
        while ($row = $ree->fetch_assoc()) {
            echo $row['COLUMN_NAME']."<br>";
            if ($row['COLUMN_NAME'] !=$date)    {   
                
               $alter="ALTER TABLE $sb ADD status char";
                 $query=mysqli_query($conn, $alter) ; 

                 //loops starts
                $sq = "SELECT s_id FROM $sb; ";
                $re= (mysqli_query($conn,$sq))   ;
         
                 if (mysqli_num_rows($re) > 0) {
                    while($row = mysqli_fetch_assoc($re)) {
                     $sn[] = $row['s_id'];
                }}   
     for($i=0; $i<3 ; $i++)
                {
                    $se = $st[$i];
                    $sid= $sn[$i];
                           
                     $d = (string) $date ;
                     #echo $d ;
                     $in ="UPDATE  $sb 
                     SET status = '".$se."'    
                     WHERE s_id ='".$sid."' ; ";
                    $res= mysqli_query($conn,$in);  
                 }  //loops end



               
               

}}

 $alter="ALTER TABLE stdlist CHANGE status `".$date."` char ;";
 $quer=mysqli_query($conn, $alter) ;  
     
                 
                
       
?>
  </div>
</div>
 </body>
 </html>