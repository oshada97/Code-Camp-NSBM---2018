<?php

        include_once "dbcon.php";
                
        date_default_timezone_set("Asia/Colombo");
  
        $Title=$_POST["title"];
        $Img=$_POST["img"];
        $Info=$_POST["info"];
        $Date_time=date('Y-m-d H:i:s');
        $RName=$_POST["reg"]; 
	
	

        $con= mysqli_connect($server,$uname,$pw,$dbname);

         $sql="INSERT INTO details (Title,Img,Info,Date_time,RName) VALUES ('$Title','$Img','$Info','$Date_time','$RName')";
	
	
         if(mysqli_query($con,$sql))
         {
             echo"New Record Entered Succesfully";
         }
         else
         {
             echo "Error: " . $sql . "<br>" . mysqli_error($con);
         }
     
        
     
         mysqli_close($con);
     ?>