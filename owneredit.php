<form method="post" action="#" >

<title>
	Edit Table Here
</title>

<header><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"> 
<link rel="stylesheet" href="home.css">
</header>

<div id="navmenu">
<ul> 

<li><a href="index.php" name="alink" >HOME</a></li>
 
<li><a href="registration.php" name="alink" >New User Registration </a></li>

<li><a href="stafflog.php" name="alink" >Staff Log-In</a></li>

<li><a href="adminlog.php" name="alink" >Admin Log-In</a></li>

<li><a href="help.php" name="alink" >Help</a></li>
</ul>

</div>

<table align='center'>

	<tr> <td> First Name: </td> <td> <input type="text" maxlength="34" name="fname"
		required aria-required='true'  /> </td> </tr> 
		
	<tr> <td> Last Name: </td> <td> <input type="text" maxlength="34" name="lname" 
		required aria-required="true" > </td> </tr>
		
	<tr> <td> Address: </td> <td> <input type="text" maxlength="34" name="address"
		required aria-required='true' > </td> </tr> 
		
	 <tr> <td> Telephone Number: </td> <td> <input type="tel" size=10 maxlength="10"
  		required aria-required="true" name="telno"/> </td> </tr> 
  		
  	 <tr> <td> <input type='submit' value = 'Edit Staff Details' name='edStaff' /> </td> </tr>  	
  	 
		
  	
</table>

<?php 
 
     /*	updating the owner table  */
     
     
 if(isset($_GET['email']) && isset($_POST['lname']) ) 
 {  
       $email= $_GET['email'];
 	
 	/*	performing the edit query here */
	  
	/*	connection settings		*/	  
	$hostp = "";
	$usernm = "";
	$passwd = "";
	$dbname = "";
	$dbconn = new mysqli($hostp ,$usernm ,$passwd,  $dbname );
 
 	/*	end of connection settings  */
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address= $_POST['address'];
	$telno= $_POST['telno'];
	   
	$myque = "update owner set lname='$lname' where email = '$email'"; 		  
     
	/*	$myquery= mysqli_query($dbconn,$myque);   */
	 if( mysqli_query($dbconn,$myque)  )
   	{   	       
   	      echo "<meta http-equiv='refresh' content='0;url=ownerselect.html' >"; 		 		 
	}   
	
	else
	{
		echo "</br> Update Not Successful";
		 
	} 
   	 	 
 	
 }
 	
    
?> 

<div id="footer">
Copyright © Change Of Car Ownership

<?php 
 echo "</br>Todays Date:  " . date('Y-m-d'); 
 /*	the fomat that will satisfy your primary key:   date('YmdHis')   	*/
?>

</div>

</form>