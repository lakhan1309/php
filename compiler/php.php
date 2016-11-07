<?php
include_once("analyticstracking.php");
	$code=$_POST["code"];
	$input=$_POST["custom_textarea"];
	$filename_code="main.php";
	$empty=" ";
	$c="./";
	//$filename_in="inputphp.txt";
	$filename_error="errorphp.txt";
	//$executable="main";
	$command='php main.php';
	$command_error='php -l main.php';
	$command_error=$command_error.' 2> '.$filename_error;
	$filename_output="outputphp.txt";

	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	
	/*$file_input=fopen($filename_in,"w+");
	fwrite($file_input,$input);
	fclose($file_input);*/
	
	shell_exec($command_error);
	$error=file_get_contents($filename_error);
	$scan=file_get_contents($filename_code);
	
	if(!strpos($scan,"phpinfo();")){
	
	if(!strpos($error,"error") && !strpos($error,"undefined")){
		
			shell_exec($command." > ".$filename_output);
			
			echo "<b>Input</b>"."<br>";
			echo "<hr>";
			echo "standard input is empty"."<br>";
			
		
		echo "<b>Output</b>"."<br>";
		echo "<hr>";
		$output_file=fopen($filename_output,"r");
		while(!feof($output_file)){
			echo "<pre>".fgets($output_file)."</pre>";
		}
		fclose($output_file);
	}
		else{
			echo "<b>Error</b>"."<br>";
			echo "<hr>";
			$error_print=fopen($filename_error,"r");
			while(!feof($error_print))
		{
			echo "<pre>".fgets($error_print)."</pre>";
		}
		fclose($error_print);
		}
	}
	else{
		    echo "<b>Input</b>"."<br>";
			echo "<hr>";
			echo "standard input is empty"."<br>";
			echo "<b>Output</b>"."<br>";
		    echo "<hr>";
			echo "phpinfo(); is deprecated";
		
	}
	
	
	exec("rm $filename_code");
	//exec("rm $executable");
	//exec("rm $filename_in");
	exec("rm $filename_error");
	exec("rm $filename_output");
	
?>
