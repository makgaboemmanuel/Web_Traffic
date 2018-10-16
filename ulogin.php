<form action="#" method="post" >   

<?php 

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
		if(	!empty($_POST['unamein'] ) and !empty($_POST['upassin'] ) )
		{
			$usernvar = $_POST['unamein'] ; //"romanpeal" ;
			$upassvar = $_POST['upassin'] ;//; "2525write"
				
			$mque ="select wousername, wopassword from wowner where wousername = '$usernvar' and wopassword = '$upassvar' ";
 			
			$myquery = mysqli_query($dbconn, $mque); 	 
 		 
			$countrows = mysqli_num_rows( $myquery ); 	 
 	 	  	
			if( $countrows  > 0  ) 
			{
				echo "<meta http-equiv='refresh' content='0;url=update.php?userSend=$usernvar' >";
			} 
	
			else
			{
				echo "<br> <strong> Your Username / Password Are Wrong<strong>";
			} 
		
		}
	}
			
?>

<!DOCTYPE html>
<html>
  <head>
    <title>User Log-In</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/ulogin/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/ulogin/data.js"></script>
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

      <!--    (Group) -->
      <div id="u70" class="ax_default">

        <!--    (Group) -->
        <div id="u71" class="ax_default">

          <!--    (Group) -->
          <div id="u72" class="ax_default">

              
            <div id="u73" class="ax_default box_2">
              <div id="u73_div" class=""></div>
              <!--    () -->
              <div id="u74" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

              
            <div id="u75" class="ax_default btnregister">
              <div id="u75_div" class=""></div>
              <!--    () -->
              <button id="u75_div" name="butUsLog" class="text" style="visibility: invisible;">
                <p><span>User Log-In</span></p>
              </button>
            </div>

              
            <div id="u77" class="ax_default heading_3">
              <div id="u77_div" class=""></div>
              <!--    () -->
              <div id="u78" class="text" style="visibility: visible;">
                <p><span>In Oder To Access Our System And View Your Content </span></p><p><span>&nbsp;Please Log-In Here:</span></p>
              </div>
            </div>

              
            <div id="u79" class="ax_default heading_2">
              <div id="u79_div" class=""></div>
              <!--    () -->
              <div id="u80" class="text" style="visibility: visible;">
                <p><span>Username:</span></p>
              </div>
            </div>

              
            <div id="u81" class="ax_default heading_2">
              <div id="u81_div" class=""></div>
              <!--    () -->
              <div id="u82" class="text" style="visibility: visible;">
                <p><span>Password:</span></p>
              </div>
            </div>

              
            <div id="u83" class="ax_default btnregister">
              <div id="u83_div" class=""></div>
              <!--    () -->
              <button id="u83_div" name="butUsLog" onClick="location.href='ulogin.php'" type="button" style="visibility: visible;">
                <p><span>User Log-In</span></p>
              </button>
            </div>

            <!--    (Image) -->
            <div id="u85" class="ax_default image">
              <img id="u85_img" class="img " src="images/index/u4.jpg"/>
              <!--    () -->
              <div id="u86" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

              
            <div id="u87" class="ax_default btnregister">
              <div id="u87_div" class=""></div>
              <!--    () -->
              <button name="butUReg" id="u87_div" class="text" onClick="location.href='uregister.php'" type="button" style="visibility: visible;">
                <p><span>User Register</span></p>
              </button>
            </div>

              
            <div id="u89" class="ax_default btnregister">
              <div id="u89_div" class=""></div>
              <!--    () -->
              <button id="u89_div" name="butAdCont" onClick="location.href='admincont.php'" type="button" style="visibility: visible;">
                <p><span>Admin Control</span></p>
              </button>
            </div>

            <!--    (Droplist) -->
            <div id="u91" class="ax_default droplist">
              <select id="u91_input">
                <option value="User Log-In">User Log-In</option>
                <option value="User Register">User Register</option>
                <option value="Gallery">Gallery</option>
                <option value="Admin Control">Admin Control</option>
                <option value="Help">Help</option>
              </select>
            </div>

              
            <div id="u92" class="ax_default label">
              <div id="u92_div" class=""></div>
              <!--    () -->
              <div id="u93" class="text" style="visibility: visible;">
                <p><span>Choose Item Menu List </span></p>
              </div>
            </div>

              
            <div id="u94" class="ax_default label">
              <div id="u94_div" class=""></div>
              <!--    () -->
              <div id="u95" class="text" style="visibility: visible;">
                <p><span>Follow Us Social Media:</span></p>
              </div>
            </div>

            <!--    (Shape) -->
            <div id="u96" class="ax_default icon">
              <img id="u96_img" class="img " src="images/index/u15.png"/>
              <!--    () -->
              <div id="u97" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

            <!--    (Shape) -->
            <div id="u98" class="ax_default icon">
              <img id="u98_img" class="img " src="images/index/u17.png"/>
              <!--    () -->
              <div id="u99" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

            <!--    (Shape) -->
            <div id="u100" class="ax_default icon">
              <img id="u100_img" class="img " src="images/index/u19.png"/>
              <!--    () -->
              <div id="u101" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

            <!--    (Shape) -->
            <div id="u102" class="ax_default icon">
              <img id="u102_img" class="img " src="images/index/u21.png"/>
              <!--    () -->
              <div id="u103" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

              
            <div id="u104" class="ax_default btnregister">
              <div id="u104_div" class=""></div>
              <!--    () -->
              <button name="butAbout" id="u104_div" onClick="location.href='about_us.html'" type="button" style="visibility: visible;">
                <p><span>About Us</span></p>
              </button>
            </div>

              
            <div id="u106" class="ax_default btnregister">
              <div id="u106_div" class=""></div>
              <!--    () -->
              <button name="butHelp" id="u106_div" onClick="location.href='help.html'" type="button" style="visibility: visible;">
                <p><span>Help</span></p>
              </button>
            </div>

              
            <div id="u108" class="ax_default btnregister">
              <div id="u108_div" class=""></div>
              <!--    () -->
              <button id="u108_div" onClick="location.href='gallery.html'" type="button" name="btnGallery" style="visibility: visible;">
                <p><span>Gallery</span></p>
              </button>
            </div>

              
            

              
            <div id="u112" class="ax_default flow_shape">
              <div id="u112_div" class=""></div>
              <!--    () -->
              <div id="u113" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

            <!-- scroll_content (Rectangle) -->
            <div id="u114" class="ax_default paragraph" data-label="scroll_content">
              <div id="u114_div" class=""></div>
              <!--    () -->
              <div id="u115" class="text" style="visibility: visible;">
                <p><span style="font-family:'Arial Bold', 'Arial';font-style:normal;"> <mark>Please click the </span>
		  <span style="font-family:'Arial Bold Italic', 'Arial';font-style:italic;text-decoration:underline;"> 
		  <a href="help.html"> HELP </a> </span><span style="font-family:'Arial Bold', 'Arial';font-style:normal;"> <mark>link above if you encounter any problems </mark></span></p>
              </div>
            </div>

            <!--    (Image) -->
            <div id="u116" class="ax_default image">
              <img id="u116_img" class="img " src="images/index/u4.jpg"/>
              <!--    () -->
              <div id="u117" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

              
            <div id="u118" class="ax_default label">
              <div id="u118_div" class=""></div>
              <!--    () -->
              <div id="u119" class="text" style="visibility: visible;">
                <p><span>Follow Us Social Media:</span></p>
              </div>
            </div>

            <!--    (Shape) -->
            <div id="u120" class="ax_default icon">
              <img id="u120_img" class="img " src="images/index/u15.png"/>
              <!--    () -->
              <div id="u121" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

            <!--    (Shape) -->
            <div id="u122" class="ax_default icon">
              <img id="u122_img" class="img " src="images/index/u17.png"/>
              <!--    () -->
              <div id="u123" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

            <!--    (Shape) -->
            <div id="u124" class="ax_default icon">
              <img id="u124_img" class="img " src="images/index/u19.png"/>
              <!--    () -->
              <div id="u125" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

            <!--    (Shape) -->
            <div id="u126" class="ax_default icon">
              <img id="u126_img" class="img " src="images/index/u21.png"/>
              <!--    () -->
              <div id="u127" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

              
            <div id="u128" class="ax_default box_3">
              <div id="u128_div" class=""></div>
              <!--    () -->
              <div id="u129" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

            <!--    (Text Field) -->
            <div id="u130" class="ax_default text_field">
              <input id="u130_input" name="upassin" type="password" placeholder="makgabo"/>
            </div>

            <!--    (Text Field) -->
            <div id="u131" class="ax_default text_field">
              <input id="u130_input"  name="unamein" type="text"  placeholder="00000000"/>
            </div>
			
			
			<!-- Unnamed (Rectangle) -->
        <div id="u109" class="ax_default link_button">
          <img id="u109_img" class="img " src="images/ulogin/u109.png"/>
          <!-- Unnamed () -->
          <div id="u110" class="text">
            <p><span> <a  style = 'text-decoration: none;' href="index.html" name="alink" >Click To Homepage</a> </span></p>
          </div>
        </div>
		
			
			
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
</form>