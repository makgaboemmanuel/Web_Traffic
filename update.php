<form action="#" method="post">

<title>	View And Update Details </title>


<?php 

	/*	updating variables	*/
	$alteFname ="";

	/*	hiding errors - NB: use this only when you are confident about your code	*/
		error_reporting(0);
	/*		hiding errors - NB: use this only when you are confident about your code	*/
	
	/*	holding Variables	*/
	
	$holdFirst = "";
	$holdLast = "";
	$holdID = "";
	$holdEmail = "";
	$holdPhone = "";
	$holdPass = "";
	$thisError = "";
	
	/*	holding variables	*/
	
	/*	received variable	*/
		$userGot = $_GET['userSend'];
	/*	done with receiving	*/
	
	$dbhost = "";
	$dbusername = "";
	$dbpasswd = "";
	$dbname = "";
 
	$dbconn = mysqli_connect($dbhost ,$dbusername ,$dbpasswd,  $dbname );
	if( mysqli_connect_error() )
	{
		echo "</br> There Was A Connection Error";
	}		
	
	else
	{
		$myque = "select * from wowner where wousername= '$userGot'";
		
		$myquery = mysqli_query($dbconn, $myque );
		
		while($row = $myquery->fetch_assoc()) 
		{ 
			$holdFirst = $row[wofname];
			$holdLast = $row[wosname];
			$holdID = $row[wo_idenno];
			$holdEmail = $row[woemail];
		    $holdPhone = $row['wophone'];
			$holdPass = $row[wopassword];
		}
		
	}
	
	/*	update your system fileds here on this code below	*/
	
		
		$dbhost = "localhost";
		$dbusername = "thupuqu_myplugs";
		$dbpasswd = "silverline";
		$dbname = "thupuqu_webplugs";
 
		$dbconn = mysqli_connect($dbhost ,$dbusername ,$dbpasswd,  $dbname );
		if( mysqli_connect_error() )
		{
			echo "</br> There Was A Connection Error";
		}		
		
		else 
		{
			/*	hold your send variable here please 	*/ 
			if(	isset($_POST['btnUpdateFirstN'])	)
			{
	
				$alteFname = $_POST['entNewFirstName'];
				if(!empty($alteFname) && strlen($alteFname) >= 3 && is_string( $alteFname ))
				{
					/*	the wuery goes here 	*/
					$myque = "update wowner set wofname= '$alteFname' where wousername= '$userGot'";		
					$myquery = mysqli_query($dbconn, $myque );	
				}
			
				else
				{
					$thisError = "First Name Must At Least Be 3 Characters Long";
				}	
							
			}	

			/*	updating for last name	*/
			if(	isset($_POST['btnUpdateLastN'])	)
			{
	
				$alteLname = $_POST['entNewLastName'];
				if(!empty($alteLname) && strlen($alteLname) >= 3 && is_string( $alteLname ) )
				{
					/*	the wuery goes here 	*/
					$myque = "update wowner set wosname= '$alteLname' where wousername= '$userGot'";		
					$myquery = mysqli_query($dbconn, $myque );	
				}
			
				else
				{
					$thisError = "Last Name Must At Least Be 3 Characters Long";
				}	
							
			}
			
			/*	updating for phone number	*/
			if(	isset($_POST['btnUpdatePhone'])	)
			{
	
				$altePhone = $_POST['entNewPhone'];
				if(!empty($altePhone) && is_numeric($altePhone) && strlen($altePhone) == 10 )
				{
					/*	the wuery goes here 	*/
					$myque = "update wowner set wophone= '$altePhone' where wousername= '$userGot'";		
					$myquery = mysqli_query($dbconn, $myque );	
				}
			
				else
				{
					$thisError = "Must Be 10 Numbers Long";
				}	
							
			}
			
			/*	btnUpdatePhone	*/
			
			/*	updating for email address	*/
			
			if(	isset($_POST['btnUpdateEmail'])	)
			{
	
				$alteEmail = $_POST['entNewEmail'];
				if(!empty($alteEmail) && is_string($alteEmail) && strlen($alteEmail) >= 3 
						&& $_POST['hostmail'] != "Email Server")
				{
					/*	the wuery goes here 	*/
					$mimail = $alteEmail . $_POST['hostmail'];
					$myque = "update wowner set woemail= '$mimail' where wousername= '$userGot'";		
					$myquery = mysqli_query($dbconn, $myque );	
				}
			
				else
				{
					$thisError = "Please Enter Your Email And Select Email Server";
				}	
							
			}
			
			/*	email address	*/
		}	

?>


<!DOCTYPE html>
<html>
	<title> User Update Details </title>
  <head>
    <title>update</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/update/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="resources/scripts/axure/axQuery.js"></script>
    <script src="resources/scripts/axure/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/axure/annotation.js"></script>
    <script src="resources/scripts/axure/axQuery.std.js"></script>
    <script src="resources/scripts/axure/doc.js"></script>
    <script src="data/document.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/axure/events.js"></script>
    <script src="resources/scripts/axure/recording.js"></script>
    <script src="resources/scripts/axure/action.js"></script>
    <script src="resources/scripts/axure/expr.js"></script>
    <script src="resources/scripts/axure/geometry.js"></script>
    <script src="resources/scripts/axure/flyout.js"></script>
    <script src="resources/scripts/axure/ie.js"></script>
    <script src="resources/scripts/axure/model.js"></script>
    <script src="resources/scripts/axure/repeater.js"></script>
    <script src="resources/scripts/axure/sto.js"></script>
    <script src="resources/scripts/axure/utils.temp.js"></script>
    <script src="resources/scripts/axure/variables.js"></script>
    <script src="resources/scripts/axure/drag.js"></script>
    <script src="resources/scripts/axure/move.js"></script>
    <script src="resources/scripts/axure/visibility.js"></script>
    <script src="resources/scripts/axure/style.js"></script>
    <script src="resources/scripts/axure/adaptive.js"></script>
    <script src="resources/scripts/axure/tree.js"></script>
    <script src="resources/scripts/axure/init.temp.js"></script>
    <script src="files/update/data.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script src="resources/scripts/axure/math.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!--  (Dynamic Panel) -->
      <div id="u0" class="ax_default">
        <div id="u0_state0" class="panel_state" data-label="State1">
          <div id="u0_state0_content" class="panel_state_content">
          </div>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u1" class="ax_default primary_button">
        <div id="u1_div" class=""></div>
        <!--  () -->
        <button id="u1_div" class="text">
          <p><span>User Log-In</span></p>
        </button>
      </div>

      <!--  (Image) -->
      <div id="u3" class="ax_default image">
        <img id="u3_img" class="img " src="images/update/u3.jpg"/>
        <!--  () -->
        <div id="u4" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u5" class="ax_default primary_button">
        <div id="u5_div" class=""></div>
        <!--  () -->
        <div id="u6" class="text">
          <p><span>User Register</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u7" class="ax_default primary_button">
        <div id="u7_div" class=""></div>
        <!--  () -->
        <div id="u8" class="text">
          <p><span>Admin Control</span></p>
        </div>
      </div>

      <!--  (Droplist) -->
      <div id="u9" class="ax_default droplist">
        <select id="u9_input">
          <option selected value="User Log-In">User Log-In</option>
          <option value="User Register">User Register</option>
          <option value="Gallery">Gallery</option>
          <option value="Admin Control">Admin Control</option>
          <option value="Help">Help</option>
        </select>
      </div>

      <!--  (Button) -->
      <div id="u10" class="ax_default label">
        <div id="u10_div" class=""></div>
        <!--  () -->
        <div id="u11" class="text">
          <p><span>Choose Item Menu List </span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u12" class="ax_default primary_button">
        <div id="u12_div" class=""></div>
        <!--  () -->
        <button id="u12_div" class="text">
          <p><span>Update All Fields</span></p>
        </button>
      </div>

      <!--  (Button) -->
      <div id="u14" class="ax_default label">
        <div id="u14_div" class=""></div>
        <!--  () -->
        <div id="u15" class="text">
          <p><span>Follow Us Social Media:</span></p>
        </div>
      </div>

      <!--  (Shape) -->
      <div id="u16" class="ax_default icon">
        <img id="u16_img" class="img " src="images/update/u16.png"/>
        <!--  () -->
        <div id="u17" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Shape) -->
      <div id="u18" class="ax_default icon">
        <img id="u18_img" class="img " src="images/update/u18.png"/>
        <!--  () -->
        <div id="u19" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Shape) -->
      <div id="u20" class="ax_default icon">
        <img id="u20_img" class="img " src="images/update/u20.png"/>
        <!--  () -->
        <div id="u21" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Shape) -->
      <div id="u22" class="ax_default icon">
        <img id="u22_img" class="img " src="images/update/u22.png"/>
        <!--  () -->
        <div id="u23" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u24" class="ax_default heading_3">
        <div id="u24_div" class=""></div>
        <!--  () -->
        <div id="u25" class="text">
          <p><span>You Can Update Any Of Your Details Here:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u26" class="ax_default heading_2">
        <div id="u26_div" class=""></div>
        <!--  () -->
        <div id="u27" class="text">
          <p><span>Lastname:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u28" class="ax_default heading_2">
        <div id="u28_div" class=""></div>
        <!--  () -->
        <div id="u29" class="text">
          <p><span>ID No:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u30" class="ax_default heading_2">
        <div id="u30_div" class=""></div>
        <!--  () -->
        <div id="u31" class="text">
          <p><span>Phone No:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u32" class="ax_default heading_2">
        <div id="u32_div" class=""></div>
        <!--  () -->
        <div id="u33" class="text">
          <p><span>Email:</span></p>
        </div>
      </div>

      <!-- scroll_content (Button) -->
      <div id="u34" class="ax_default paragraph" data-label="scroll_content">
        <div id="u34_div" class=""></div>
        <!--  () -->
        <div id="u35" class="text">
         <p><span style="font-family:'Arial Bold', 'Arial';font-style:normal;"> <>Please click the </span>
		  <span style="font-family:'Arial Bold Italic', 'Arial';font-style:italic;text-decoration:underline;"> 
		  <a href="help.html"> HELP </a> </span><span style="font-family:'Arial Bold', 'Arial';font-style:normal;"> <>link above if you encounter any problems </></span></p>
        </div>
      </div>

      <!--  (Image) -->
      <div id="u36" class="ax_default image">
        <img id="u36_img" class="img " src="images/update/u3.jpg"/>
        <!--  () -->
        <div id="u37" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u38" class="ax_default label">
        <div id="u38_div" class=""></div>
        <!--  () -->
        <div id="u39" class="text">
          <p><span>Follow Us Social Media:</span></p>
        </div>
      </div>

      <!--  (Shape) -->
      <div id="u40" class="ax_default icon">
        <img id="u40_img" class="img " src="images/update/u16.png"/>
        <!--  () -->
        <div id="u41" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Shape) -->
      <div id="u42" class="ax_default icon">
        <img id="u42_img" class="img " src="images/update/u18.png"/>
        <!--  () -->
        <div id="u43" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Shape) -->
      <div id="u44" class="ax_default icon">
        <img id="u44_img" class="img " src="images/update/u20.png"/>
        <!--  () -->
        <div id="u45" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Shape) -->
      <div id="u46" class="ax_default icon">
        <img id="u46_img" class="img " src="images/update/u22.png"/>
        <!--  () -->
        <div id="u47" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u48" class="ax_default primary_button">
        <div id="u48_div" class=""></div>
        <!--  () -->
        <div id="u49" class="text">
          <p><span>About Us</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u50" class="ax_default primary_button">
        <div id="u50_div" class=""></div>
        <!--  () -->
        <div id="u51" class="text">
          <p><span>Help</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u52" class="ax_default primary_button">
        <div id="u52_div" class=""></div>
        <!--  () -->
        <div id="u53" class="text">
          <p><span>Gallery</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u54" class="ax_default box_3">
        <div id="u54_div" class=""></div>
        <!--  () -->
        <div id="u55" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u56" class="ax_default heading_2">
        <div id="u56_div" class=""></div>
        <!--  () -->
        <div id="u57" class="text">
          <p><span>Password:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u58" class="ax_default heading_2">
        <div id="u58_div" class=""></div>
        <!--  () -->
        <div id="u59" class="text">
          <p><span>Firstname:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u60" class="ax_default heading_2">
        <div id="u60_div" class=""></div>
        <!--  () -->
        <div id="u61" class="text">
          <p><span>Lastname:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u62" class="ax_default heading_2">
        <div id="u62_div" class=""></div>
        <!--  () -->
        <div id="u63" class="text">
          <p><span>ID No:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u64" class="ax_default heading_2">
        <div id="u64_div" class=""></div>
        <!--  () -->
        <div id="u65" class="text">
          <p><span>Confirm Password:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u66" class="ax_default heading_2">
        <div id="u66_div" class=""></div>
        <!--  () -->
        <div id="u67" class="text">
          <p><span>Phone No:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u68" class="ax_default heading_2">
        <div id="u68_div" class=""></div>
        <!--  () -->
        <div id="u69" class="text">
          <p><span>Email:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u70" class="ax_default flow_shape">
        <div id="u70_div" class=""></div>
        <!--  () -->
        <div id="u71" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u72" class="ax_default flow_shape">
        <div id="u72_div" class=""></div>
        <!--  () -->
        <div id="u73" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u74" class="ax_default flow_shape">
        <div id="u74_div" class=""></div>
        <!--  () -->
        <div id="u75" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u76" class="ax_default flow_shape">
        <div id="u76_div" class=""></div>
        <!--  () -->
        <div id="u77" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u78" class="ax_default flow_shape">
        <div id="u78_div" class=""></div>
        <!--  () -->
        <div id="u79" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u80" class="ax_default flow_shape">
        <div id="u80_div" class=""></div>
        <!--  () -->
        <div id="u81" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u82" class="ax_default flow_shape">
        <div id="u82_div" class=""></div>
        <!--  () -->
        <div id="u83" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Text Field) -->
      <div id="u84" class="ax_default text_field">
        <input id="u84_input" type="text" name="resLast" value="<?php echo $holdLast ?>"/>
      </div>

      <!--  (Text Field) -->
      <div id="u85" class="ax_default text_field">
        <input id="u85_input" name="resFirstN" type="text" value="<?php echo $holdFirst ?>"/>
      </div>

      <!--  (Text Field) -->
      <div id="u86" class="ax_default text_field">
        <input id="u86_input" type="tel" name="resID" value="<?php echo $holdID ?>"/>
      </div>

      <!--  (Text Field) -->
      <div id="u87" class="ax_default text_field">
        <input id="u87_input" name="resPhone" type="tel" value="<?php echo $holdPhone?>"/>
      </div>

      <!--  (Text Field) -->
      <div id="u88" class="ax_default text_field">
        <input id="u88_input" name="resEmail" type="text" value="<?php echo $holdEmail ?>"/>
      </div>

      <!--  (Text Field) -->
      <div id="u89" class="ax_default text_field">
        <input id="u89_input" name="resPass" type="password" value="<?php echo $holdPass ?>"/>
      </div>

      <!-- Text Field -->
      <div id="u90" class="ax_default text_field">
        <input id="u90_input" type="password" value="f"/>
      </div>

      <!--  (Button) -->
      <div id="u91" class="ax_default label">
        <div id="u91_div" class=""></div>
        <!--  -->
        <div id="u92" class="text">
          <p><span>Current Value:</span></p>
        </div>
      </div>

      <!--  -->
      <div id="u93" class="ax_default label">
        <div id="u93_div" class=""></div>
        <!--  -->
        <div id="u94" class="text">
          <p><span>New Value:</span></p>
        </div>
      </div>

      <!--  (Button) -->
      <div id="u95" class="ax_default flow_shape">
        <div id="u95_div" class=""></div>
        <!--  () -->
        <div id="u96" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  -->
      <div id="u97" class="ax_default flow_shape">
        <div id="u97_div" class=""></div>
        <!--  () -->
        <div id="u98" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  -->
      <div id="u99" class="ax_default flow_shape">
        <div id="u99_div" class=""></div>
        <!--  -->
        <div id="u100" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  -->
      <div id="u101" class="ax_default flow_shape">
        <div id="u101_div" class=""></div>
        <!--  () -->
        <div id="u102" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  -->
      <div id="u103" class="ax_default flow_shape">
        <div id="u103_div" class=""></div>
        <!--  -->
        <div id="u104" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  -->
      <div id="u105" class="ax_default text_field">
        <input id="u105_input" name="entNewFirstName" type="text" 
			value="<?php if (!is_null($alteFname)){ echo $alteFname ;} else echo 'e' ;?>  "/>
      </div>

      <!--   -->
      <div id="u106" class="ax_default flow_shape">
        <div id="u106_div" class=""></div>
        <!--  () -->
        <div id="u107" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  -->
      <div id="u108" class="ax_default flow_shape">
        <div id="u108_div" class=""></div>
        <!--  () -->
        <div id="u109" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  (Text Field) -->
      <div id="u110" class="ax_default text_field">
        <input id="u110_input" type="tel" name="entNewID" value="d"/>
      </div>

      <!--  (Text Field) -->
      <div id="u111" class="ax_default text_field">
        <input id="u111_input" type="text" name="entNewLastName" value="c"/>
      </div>

      <!--  (Text Field) -->
      <div id="u112" class="ax_default text_field">
        <input id="u112_input" name="entNewPhone" value="b" type="tel" />
      </div>

      <!--  (Text Field) -->
      <div id="u113" class="ax_default text_field">
        <input id="u113_input" value="a" name="entNewEmail" type="text" />
      </div>

      <!--  (Text Field) -->
      <div id="u114" class="ax_default text_field">
        <input id="u114_input" type="password" value="aaaaaa"/>
      </div>

      <!--  (Text Field) -->
      <div id="u115" class="ax_default text_field">
        <input id="u115_input" type="password" value="aaaaaa"/>
      </div>

      <!--  (Button) -->
      <div id="u116" class="ax_default primary_button">
        <div id="u116_div" class=""></div>
        <!--  () -->
        <button name="btnUpdateFirstN" id="u116_div" class="text">
          <p><span>Update Firstname</span></p>
        </button>
      </div>

      <!--  (Button) -->
      <div id="u118" class="ax_default primary_button">
        <div id="u118_div" class=""></div>
        <!--  () -->
        <button name="btnUpdatePhone" id="u118_div" class="text">
          <p><span>Update Phone</span></p>
        </button>
      </div>

	  <!-- Unnamed (Rectangle) -->
      <div id="u129" class="ax_default primary_button">
        <div id="u129_div" class=""></div>
        <!-- Unnamed () -->
        <button id="u129_div" type="button" onclick="location.href='registerweb.html'">
          <p><span>Register Website</span></p>
        </button>
      </div>
	  
	  <!-- Unnamed (Rectangle) -->
      <div id="u131" class="ax_default label">
        <div id="u131_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u132" class="text">
          <p><span>OR</span></p>
        </div>
      </div>
	  
      <!--  (Button) -->
      <div id="u120" class="ax_default primary_button">
        <div id="u120_div" class=""></div>
        <!--  () -->
        <button id="u120_div" name="btnUpdateEmail" class="text">
          <p><span>Update Email</span></p>
        </button>
      </div>

      <!--  (Button) -->
      <div id="u122" class="ax_default primary_button">
        <div id="u122_div" class=""></div>
        <!--  () -->
        <button id="u122_div" name="btnUpdatePassword" class="text">
          <p><span>Update Password</span></p>
        </button>
      </div>

      <!--  (Button) -->
      <div id="u124" class="ax_default primary_button">
        <div id="u124_div" class=""></div>
        <!--  () -->
        <button name="btnUpdateLastN" id="u124_div" class="text">
          <p><span>Update Lastname</span></p>
        </button>
      </div>

      <!--  (Button) -->
      <div id="u126" class="ax_default primary_button">
        <div id="u126_div" class=""></div>
        <!--  () -->
        <button id="u126_div" class="text" name="btnUpdateIDNo">
          <p><span>Update ID</span></p>
        </button>
      </div>

      <!--  (Droplist) -->
      <div id="u128" class="ax_default droplist">
        <select name="hostmail" id="u128_input">
          <option selected value="Email Server">Email Server</option>
          <option value="@gmail.com">@gmail.com</option>
          <option value="@ymail.com">@ymail.com</option>
          <option value="@webmail.com">@webmail.com</option>
          <option value="@webmail.co.za">@webmail.co.za</option>
          <option value="@yahoomail.com">@yahoomail.com</option>
          <option value="@mail.com">@mail.com</option>
		  <option value="@hotmail.com">@hotmail.com</option>
		  <option value="@outlook.com">@outlook.com</option>
		  <option value="@tut.ac.za">@tut.ac.za</option>
        </select>
      </div>
    </div>
  </body>
</html>
</form>