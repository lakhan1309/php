<?php
include_once("analyticstracking.php");
	$code=$_POST["code"];
	$input=$_POST["custom_textarea"];
	$filename_code="main.py";
	$filename_in="inputpy.txt";
	$filename_error="errorpy.txt";
	$command='python main.py';	
	$command_error=$command.' 2> '.$filename_error;
	$filename_output="outputpy.txt";

	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	
	$file_input=fopen($filename_in,"w+");
	fwrite($file_input,$input);
	fclose($file_input);
	
	shell_exec($command_error);
	$error=file_get_contents($filename_error);
	$scan=file_get_contents($filename_code);
	
	
	
	if(!strpos($error,"Error") && !strpos($error,"undefined")){
		if(trim($input)==""){
			shell_exec($command." > ".$filename_output);
			echo "<b>Input</b>"."<br>";
			echo "<hr>";
			echo "standard input is empty"."<br>";
			
		}
		
		else{
			shell_exec($command." < ".$filename_in." > ".$filename_output);
			echo "<b>Input</b>"."<br>";
		    echo "<hr>";
			$input_file=fopen($filename_in,"r");
			while(!feof($input_file)){
			echo "<pre>".fgets($input_file)."</pre>";
		}
			
		}
		
		fclose($input_file);
		echo "<br>";
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
		
	
	exec("rm $filename_code");
	exec("rm $filename_in");
	exec("rm $filename_error");
	exec("rm $filename_output");
	
?>
