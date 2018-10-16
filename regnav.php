<?php 

	/*  HERE COMES THE VALIDATION AND DATA */
	$capCapture = "Emmanuel Seloka" ; /*  $_POST['uuname']  ; */
	/* echo $capCapture; */
	
	/*	declare variables here please	*/
	
	if( isset($_POST['butAdCont'] ))
	{
		/* 	NAVIGATING ACCORDING TO THE BUTTON CLICKED	 */
		echo "<meta http-equiv='refresh' content='0;url=admincont.html' >";
	}
	
	if( isset($_POST['butUReg'] ))
	{
		/* 	NAVIGATING ACCORDING TO THE BUTTON CLICKED	 */
		$capCapture = "The Herald Newspaper" ;
		echo "<meta  content='0;url=#' >"; /*	http-equiv='refresh'	*/
	}
	
	if( isset($_POST['butURegI'] ))
	{
		/* 	NAVIGATING ACCORDING TO THE BUTTON CLICKED	 */
		$capCapture = "Jason Bourne 2016" ;
		echo "<meta  content='0;url=#' >"; /*	http-equiv='refresh'	*/
	}
	
	if( isset($_POST['butULog'] ))
	{
		/* 	NAVIGATING ACCORDING TO THE BUTTON CLICKED	 */
		echo "<meta http-equiv='refresh' content='0;url=ulogin.html' >";
	}
	
	
	/* assign variblaes here please */
	
	/*	create your methods and long codings here please	*/
	
	
?>