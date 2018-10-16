<form action="#" method="post" >



<!DOCTYPE html>
<html>

<?php 

	/*  HERE COMES THE VALIDATION AND DATA */
		
	if( isset($_POST['btnUReg'] ))
	{
		/* 	NAVIGATING ACCORDING TO THE BUTTON CLICKED	 */
		$capCapture = "The Herald Newspaper" ;
		
		/*	VARIABLES DECLARATIONS	*/
		
		$varFName = $_POST["ufstnm"];
		$varLName = $_POST["ulastnm"];
		$varIDNo = $_POST["uidno"];
		$varTel = $_POST["uphonenm"];
		$varUName = $_POST["uuname"];
		$varEmail = $_POST["uemail"] . $_POST['mailExt'];;
		$mailServer = $_POST['mailExt'];
		$varPasOne = $_POST["upaw1"];
		$varPasTwo = $_POST["upaw2"];
		
		/*	variables for dealing with the date of birth from the idno	*/
		
			$mdate   =  "" . $varIDNo;
			$myear   =  substr( $mdate, 0, 2);
			$mmon    =  substr( $mdate, 2, 2);
			$mday    =  substr( $mdate, 4, 2);		
			$allyear =  "19" .$myear; 
			$birthdate = "";
			
			/*	dealing with date of birth 	*/
			
			if( /* year */ intval( $allyear ) >= 1935 && intval( $allyear ) <= 1998 /* year */ && 
		  /* month */ intval( $mmon ) >= 1  && intval( $mmon ) <= 12 /* month */  && 
			/* day */ intval( $mday ) >= 1  && intval( $mday ) <= 31 /* day */   )
			{
				$birthdate = $allyear . "-" . $mmon . "-" . $mday;							
			}
			
			/*	done with date of birth 	*/
			
			/*	dealing with Gender here 	*/
			$herGen = substr($varIDNo, 6, 4);
			
			$specGen = "";
			
			if( intval( $herGen ) < 5000 )
			{
				$specGen = "Male";
			}
			else
			{
				$specGen = "Female";
			}
			
			/*	done with Gender here	*/

		/*	database variables 	*/
	
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
			/*	validate the passwords and usernames here 	*/
			
								
				$myque ="insert into wowner values ('$varUName', '$varLName', '$varFName', '$birthdate', 'vikingsLuther', 
							'$varPasOne', '$varIDNo', '$varEmail', '$specGen')";
 	 	  	
				if( mysqli_query( $dbconn , $myque ) )
				{
					echo "<meta http-equiv='refresh' content='0;url=ulogin.php' >";
				} 
	
				else
				{
					echo "<br> <strong> Your Username / Password Are Wrong<strong>";
				} 
		}
	
	}	
	
?>

  <head>
    <title>User Registration</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/uregister/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="resources/scripts/bookpage/axQuery.js"></script>
    <script src="resources/scripts/bookpage/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/bookpage/annotation.js"></script>
    <script src="resources/scripts/bookpage/axQuery.std.js"></script>
    <script src="resources/scripts/bookpage/doc.js"></script>
    <script src="data/document.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/bookpage/events.js"></script>
    <script src="resources/scripts/bookpage/recording.js"></script>
    <script src="resources/scripts/bookpage/action.js"></script>
    <script src="resources/scripts/bookpage/expr.js"></script>
    <script src="resources/scripts/bookpage/geometry.js"></script>
    <script src="resources/scripts/bookpage/flyout.js"></script>
    <script src="resources/scripts/bookpage/ie.js"></script>
    <script src="resources/scripts/bookpage/model.js"></script>
    <script src="resources/scripts/bookpage/repeater.js"></script>
    <script src="resources/scripts/bookpage/sto.js"></script>
    <script src="resources/scripts/bookpage/utils.temp.js"></script>
    <script src="resources/scripts/bookpage/variables.js"></script>
    <script src="resources/scripts/bookpage/drag.js"></script>
    <script src="resources/scripts/bookpage/move.js"></script>
    <script src="resources/scripts/bookpage/visibility.js"></script>
    <script src="resources/scripts/bookpage/style.js"></script>
    <script src="resources/scripts/bookpage/adaptive.js"></script>
    <script src="resources/scripts/bookpage/tree.js"></script>
    <script src="resources/scripts/bookpage/init.temp.js"></script>
    <script src="files/uregister/data.js"></script>
    <script src="resources/scripts/bookpage/legacy.js"></script>
    <script src="resources/scripts/bookpage/viewer.js"></script>
    <script src="resources/scripts/bookpage/math.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!--    (Dynamic Panel) -->
      <div id="u132" class="ax_default">
        <div id="u132_state0" class="panel_state" data-label="State1">
          <div id="u132_state0_content" class="panel_state_content">

              
            <div id="u133" class="ax_default box_2">
              <div id="u133_div" class=""></div>
              <!--    () -->
              <div id="u134" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

        
      <div id="u135" class="ax_default btnregister">
        <div id="u135_div" class=""></div>
        <!--    () --> 
		<button id="u135_div" onClick="location.href='ulogin.php'" name="butULog" >
          <p><span>User Log-In</span></p>
        </button>
      </div>

      <!--    (Image) -->
      <div id="u137" class="ax_default image">
        <img id="u137_img" class="img " src="images/index/u4.jpg"/>
        <!--    () -->
        <div id="u138" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u139" class="ax_default btnregister">
        <div id="u139_div" class=""></div>
        <!--    () -->
        <button id="u139_div" onClick="location.href='uregister.php'" name="btnURegI" >
		<div id="u140" class="submit" style="visibility: visible;">
          <p><span>User Register</span></p>
        </button>
      </div>

        
      <div id="u141" class="ax_default btnregister">
        <div id="u141_div" class=""></div>
        <!--    () --> 
		<button id="u141_div" onClick="location.href='admincont.php'" name="butAdCont" >
          <p><span>Admin Control</span></p>
        </button>
      </div>

      <!--    (Droplist) -->
      <div id="u143" class="ax_default droplist">
        <select name="navSltAll" id="u143_input">
          <option selected value="User Log-In">User Log-In</option>
          <option value="User Register">User Register</option>
          <option value="Gallery">Gallery</option>
          <option value="Admin Control">Admin Control</option>
          <option value="Help">Help</option>
        </select>
      </div>

        
      <div id="u144" class="ax_default label">
        <div id="u144_div" class=""></div>
        <!--    () -->
        <div id="u145" class="text" style="visibility: visible;">
          <p><span>Choose Item Menu List </span></p>
        </div>
      </div>

        
      <div id="u146" class="ax_default btnregister">
        <div id="u146_div" class=""></div>
        <!--    () -->
        <button id="u146_div" type="submit" name="btnUReg" >
          <p><span>Register&nbsp; Now!</span></p>
        </button>
      </div>

      <div id="u150" class="ax_default icon">
        <img id="u150_img" class="img " src="images/index/u15.png"/>
        <!--    () -->
        <div id="u151" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u152" class="ax_default icon">
        <img id="u152_img" class="img " src="images/index/u17.png"/>
        <!--    () -->
        <div id="u153" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u154" class="ax_default icon">
        <img id="u154_img" class="img " src="images/index/u19.png"/>
        <!--    () -->
        <div id="u155" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u156" class="ax_default icon">
        <img id="u156_img" class="img " src="images/index/u21.png"/>
        <!--    () -->
        <div id="u157" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u158" class="ax_default heading_3">
        <div id="u158_div" class=""></div>
        <!--    () -->
        <div id="u159" class="text" style="visibility: visible;">
          <p><span>To Be A User</span></p><p><span>&nbsp;Please Register Here:</span></p>
        </div>
      </div>

        
      <div id="u160" class="ax_default heading_2">
        <div id="u160_div" class=""></div>
        <!--    () -->
        <div id="u161" class="text" style="visibility: visible;">
          <p><span>Username:</span></p>
        </div>
      </div>

        
      <div id="u162" class="ax_default heading_2">
        <div id="u162_div" class=""></div>
        <!--    () -->
        <div id="u163" class="text" style="visibility: visible;">
          <p><span>Password:</span></p>
        </div>
      </div>

        
      <div id="u164" class="ax_default heading_2">
        <div id="u164_div" class=""></div>
        <!--    () -->
        <div id="u165" class="text" style="visibility: visible;">
          <p><span>Firstname:</span></p>
        </div>
      </div>

        
      <div id="u166" class="ax_default heading_2">
        <div id="u166_div" class=""></div>
        <!--    () -->
        <div id="u167" class="text" style="visibility: visible;">
          <p><span>Lastname:</span></p>
        </div>
      </div>

        
      <div id="u168" class="ax_default heading_2">
        <div id="u168_div" class=""></div>
        <!--    () -->
        <div id="u169" class="text" style="visibility: visible;">
          <p><span>ID No:</span></p>
        </div>
      </div>

        
      <div id="u170" class="ax_default heading_2">
        <div id="u170_div" class=""></div>
        <!--    () -->
        <div id="u171" class="text" style="visibility: visible;">
          <p><span>Confirm Password:</span></p>
        </div>
      </div>

        
      <div id="u172" class="ax_default heading_2">
        <div id="u172_div" class=""></div>
        <!--    () -->
        <div id="u173" class="text" style="visibility: visible;">
          <p><span>Phone No:</span></p>
        </div>
      </div>

        
      <div id="u174" class="ax_default heading_2">
        <div id="u174_div" class=""></div>
        <!--    () -->
        <div id="u175" class="text" style="visibility: visible;">
          <p><span>Email:</span></p>
        </div>
      </div>

      <!-- scroll_content (Rectangle) -->
      <div id="u176" class="ax_default paragraph" data-label="scroll_content">
        <div id="u176_div" class=""></div>
        <!--    () -->
        <div id="u177" class="text" style="visibility: visible;">
         <p><span style="font-family:'Arial Bold', 'Arial';font-style:normal;"> Please click the </span>
		  <span style="font-family:'Arial Bold Italic', 'Arial';font-style:italic;text-decoration:underline;"> 
		  <a href="help.html"> HELP </a> </span><span style="font-family:'Arial Bold', 'Arial';font-style:normal;"> link above if you encounter any problems </span></p>
        </div>
      </div>

      <!--    (Image) -->
      <div id="u178" class="ax_default image">
        <img id="u178_img" class="img " src="images/index/u4.jpg"/>
        <!--    () -->
        <div id="u179" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u180" class="ax_default label">
        <div id="u180_div" class=""></div>
        <!--    () -->
        <div id="u181" class="text" style="visibility: visible;">
          <p><span>Follow Us Social Media:</span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u182" class="ax_default icon">
        <img id="u182_img" class="img " src="images/index/u15.png"/>
        <!--    () -->
        <div id="u183" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--     -->
      <div id="u184" class="ax_default icon">
        <img id="u184_img" class="img " src="images/index/u17.png"/>
        <!--    () -->
        <div id="u185" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--  -->
      <div id="u186" class="ax_default icon">
        <img id="u186_img" class="img " src="images/index/u19.png"/>
        <!--    () -->
        <div id="u187" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      
      <div id="u188" class="ax_default icon">
        <img id="u188_img" class="img " src="images/index/u21.png"/>
        <!--    () -->
        <div id="u189" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u190" class="ax_default flow_shape">
        <div id="u190_div" class=""></div>
        <!--    () -->
        <div id="u191" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u192" class="ax_default flow_shape">
        <div id="u192_div" class=""></div>
        <!--    () -->
        <div id="u193" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u194" class="ax_default flow_shape">
        <div id="u194_div" class=""></div>
        
        <div id="u195" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>
        
      <div id="u196" class="ax_default flow_shape">
        <div id="u196_div" class=""></div>
        
        <div id="u197" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>
        
      <div id="u198" class="ax_default flow_shape">
        <div id="u198_div" class=""></div>
        
        <div id="u199" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u200" class="ax_default flow_shape">
        <div id="u200_div" class=""></div>
        
        <div id="u201" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>
        
      <div id="u202" class="ax_default btnregister">
        <div id="u202_div" class=""></div>
        
		<button id="u202_div" name="butAbout" onClick="location.href='about_us.html'"> 
          <p><span>About Us</span></p>
        </button>
      </div>

        
      <div id="u204" class="ax_default btnregister">
        <div id="u204_div" class=""></div>
        
		<button id="u204_div" name="butHelp" onClick="location.href='ulogin.php'" > 
          <p><span>Help</span></p>
        </button>
      </div>

      <!--    Last Name -->
      <div id="u206" class="ax_default text_field">
        <input id="u206_input" title="Required, 8 - 30 Characters Long(No Numbers)" type="text" name="ulastnm" size="25" required pattern="[\w\D]{8,30}" value="lesolo"/>
      </div>

      <!--    First Name -->
      <div id="u207" class="ax_default text_field">
        <input id="u207_input" type="text"  required  name="ufstnm" value="two"/> 
      </div>

      <!--    ID NO  -->
      <div id="u208" class="ax_default text_field">
        <input id="u208_input" required type="tel" pattern="\d{13}" title="13 Digits Long" name="uidno" value="8102036542321" />
      </div>

      <!--    Telephone Number -->
      <div id="u209" class="ax_default text_field">
        <input id="u209_input" type="tel" pattern="\d{10}" size="13" required title="10 Digits Long" name="uphonenm" value="0123829104"/>
      </div>

      <!--    Email Textfield -->
      <div id="u210" class="ax_default text_field">
        <input id="u210_input" type="text" name="uemail" required placeholder="makgabomme"/>
      </div>

      <!--   Username  -->
      <div id="u211" class="ax_default text_field">
        <input id="u211_input" required title="Username Must Be Unique 8 - 25 characters long" pattern="[\w\D]{8,25}" type="text" name="uuname" value="six"/>
      </div>

        
      <div id="u212" class="ax_default flow_shape">
        <div id="u212_div" class=""></div>
        
        <div id="u213" class="number" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--    Password -->
      <div id="u214" class="ax_default text_field">
        <input id="u214_input" type="password" required name="upaw1" value="six"/>
      </div>

        
      <div id="u215" class="ax_default flow_shape">
        <div id="u215_div" class=""></div>
        
        <div id="u216" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--    Confirm Password -->
      <div id="u217" class="ax_default text_field">
        <input id="u217_input" type="password" required name="upaw2" value="seven"/>
      </div>

	  <div id="u90" class="ax_default droplist">
        <img id="u90_image_sketch" class="img " src="images/uregister/u90_image_sketch.png" alt="u90_image_sketch"/>
        <select id="u90_input" name="mailExt" class="form_sketch">
          <option selected value="Email Server">Email Server</option>
          <option value="@gmail.com">@gmail.com</option>
          <option value="@ymail.com">@ymail.com</option>
          <option value="@webmail.com">@webmail.com</option>
          <option value="@webmail.co.za">@webmail.co.za</option>
          <option value="@yahoomail.com">@yahoomail.com</option>
          <option value="@mail.com">@mail.com</option>
        </select>
      </div>
	  
        
      <div id="u218" class="ax_default btnregister">
        <div id="u218_div" class=""></div>
        <!--    () -->
        <button id="u218_div" onClick="location.href='gallery.html'" name="btnGallery" style="visibility: visible;">
          <p><span>Gallery</span></p>
        </button>
      </div>

        
      <div id="u220" class="ax_default box_3">
        <div id="u220_div" class=""></div>
        <!--    () -->
        <div id="u221" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>
	  
	  <!-- Unnamed (Rectangle) -->
      <div id="u458" class="ax_default link_button">
        <img id="u458_img" class="img " src="images/ulogin/u109.png"/>
        <!-- Unnamed () -->
        <div id="u459" class="text">
          <p><span><a  style = 'text-decoration: none;' href="index.html" name="alink" >Click To Homepage</a></span></p>
        </div>
      </div>
	  
	  
    </div>
  </body>
</html>



</form>

