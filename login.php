<html>
<head>
<title>Form</title>

<style>
input[type=text], select {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	
input[type=password], select {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

	}
input[type=submit] {
    width: 80%;
    background-color: #4CAF50;
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

input[type=reset] {
    width: 100%;
    background-color: #ea0909;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: #ea0909;
}
table {
    border-radius: 5px;
    background-color: #e8dec2;
    padding: 20px;
}
</style>
	
<script language="javascript">
	
	function validatef()
	{
		var a=document.forms["logindt"]["fname"].value;
		var b=document.forms["logindt"]["pwd"].value;
		var c=document.forms["logindt"]["cpwd"].value;
		var result=true;
		
	
		if(a=="" || b=="" || c==""){

            alert("Complete all Fields");
            result=false;
        }
        
		if(b!=c)
		   {
		   		alert("Passwords are Not Matched. Try again!!!");
			   	result=false;
		  		
		   }
		
		   
	}
	
	</script>
</head>

<body>
<form action="gg.php" method="POST" name="logindt" onSubmit="validatef()" id="hello">
<center>

<table>

<tr>
<td>Name :</td>
<td><input type = "text" name ="fname" style = "width :100%;" ></td>
</tr>

<tr>
<td>Password :</td>
<td ><input type = "password" name = "pwd" style = "width : 100%;"></td>
</tr>

<tr>
<td>Confirm Password :</td>
<td ><input type = "password" name = "cpwd" style = "width : 100%;"></td>
</tr>



<tr>
<td> <input type="reset" value="Reset"></td>
<td align= "right" > <input type="Submit" value="Submit" ></td>
</tr>
</table>
</form>

<?php
    $Uname=$_POST["fname"];
    $Pass=$_POST["pwd"];
    $Cpass=$_POST["cpwd"];

    $server ="localhost";
    $username="root";
    $password="";
    $db="tutedb";

    $con = mysqli_connect($server,$username,$password,$db);

    if(!$con)
    {
        die("Connection error ".mysqli_connect_error());
    }

    echo("Connected Succesfully <br>");

    /*$sql="INSERT INTO logintable VALUES ('$Uname','$Pass','$Cpass')";

    if(mysqli_query($con,$sql))
    {
        echo"New Record Entered Succesfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    */
   /* $sql="update logintable set  Password='$Pass', Confirm_Password='$Cpass' where User_Name='$Uname'";

    if(mysqli_query($con,$sql))
    {
        echo"Details Changed Succesfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }*/

    $sql="delete from logintable  where User_Name='$Uname'";

    if(mysqli_query($con,$sql))
    {
        echo"Row Deleted Succesfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
?>
</body>
</html>
