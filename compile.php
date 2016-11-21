<?php
include_once("analyticstracking.php");
	$languageID=$_POST["language"];
	$code=$_POST["code"];
	
if(!empty($languageID) && !empty($code)){
	
	switch($languageID)
			{ 

				case "text/x-csrc":
				{
					include("compiler/c.php");
					break;
				}
				case "text/x-c++src":
				{
					include("compiler/cpp.php");
					break;
				}
				case "application/x-httpd-php":
				{
					include("compiler/php.php");
					break;
				}
				case "text/x-python":
				{
					include("compiler/python.php");
					break;
				}
				case "text/html":
				{
					include("compiler/html.php");
					break;
				}
				
				
						
			}
	}
	else{
		
		echo "All fields are mandatory";
		
	}
?>
