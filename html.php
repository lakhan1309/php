<?php include_once("analyticstracking.php"); ?>
<!DOCTYPE html>
<html lang="en">

   <head>
      <title>Compile Pad</title>
      <meta name="msvalidate.01" content="3D0E84C1134A4BAC59BB32FB3B982CE4" />
      <meta charset="utf-8">
      <meta name="description" content="Compile Pad is an online compiler/interpreter,  where you can run your C | C++ | HTML | Python | PHP code.You can select different types of themes like 3024-day | 3024-night | abcdef | ambiance | base16-dark">
      <meta name="keywords" content="C,C++,Java,HTML,Python,PHP">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
	href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

      <link href="style1.css" rel="stylesheet">
      <link href="codemirrorcustom.css" rel="stylesheet">
      <link rel="stylesheet"
         href="codemirror-5.16.0/addon/search/matchesonscrollbar.css">
      <link rel="stylesheet" href="codemirror-5.16.0/addon/dialog/dialog.css">
      <link rel="stylesheet"
         href="codemirror-5.16.0/addon/display/fullscreen.css">
      <link rel="stylesheet" href="codemirror-5.16.0/addon/hint/show-hint.css">
      <script
         src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="codemirror-5.16.0/lib/codemirror.js"></script>
      <script src="highlight_html.js"></script>
      <link rel="stylesheet" href="codemirror-5.16.0/addon/scroll/simplescrollbars.css">
      <script src="codemirror-5.16.0/addon/scroll/simplescrollbars.js"></script>
      <script src="codemirror-5.16.0/addon/selection/active-line.js"></script>
      <script src="codemirror-5.16.0/addon/edit/closebrackets.js"></script>
      <script src="codemirror-5.16.0/addon/edit/matchbrackets.js"></script>
      <script src="codemirror-5.16.0/addon/edit/matchtags.js"></script>
      <script src="codemirror-5.16.0/mode/javascript/javascript.js"></script>
      <script src="codemirror-5.16.0/addon/fold/xml-fold.js"></script>
      <script src="codemirror-5.16.0/mode/xml/xml.js"></script>
      <script src="codemirror-5.16.0/mode/clike/clike.js"></script>
      <script src="codemirror-5.16.0/mode/htmlmixed/htmlmixed.js"></script>
      <script src="codemirror-5.16.0/mode/css/css.js"></script>
      <script src="codemirror-5.16.0/addon/hint/show-hint.js"></script>
      <script src="codemirror-5.16.0/addon/hint/css-hint.js"></script>
      <script src="codemirror-5.16.0/addon/hint/html-hint.js"></script>
      <script src="codemirror-5.16.0/addon/hint/javascript-hint.js"></script>
      <script src="codemirror-5.16.0/addon/hint/xml-hint.js"></script>
      <script src="codemirror-5.16.0/addon/hint/anyword-hint.js"></script>
      <script src="codemirror-5.16.0/addon/display/fullscreen.js"></script>
      <script src="codemirror-5.16.0/addon/edit/closetag.js"></script>
      <script src="codemirror-5.16.0/addon/search/search.js"></script>
      <script src="codemirror-5.16.0/addon/search/searchcursor.js"></script>
      <script src="codemirror-5.16.0/addon/search/match-highlighter.js"></script>
      <script src="codemirror-5.16.0/addon/search/jump-to-line.js"></script>
      <script src="codemirror-5.16.0/addon/dialog/dialog.js"></script>
   </head>
   <body>
      <div class="container">
	  <h1>
			<i class="fa fa-laptop" aria-hidden="true"></i>&nbsp;<a href="index.php" class="redirect">CompilePad</a><i
				class="fa fa-code  code" aria-hidden="true"></i>
		
		<hr>
		</h1>
         <div class="left">
            <form name="input_form">
			<div class="text">
			<div class="form-group">
			
				<select name="language" id="language"
					class="form-control d" >
					<option value="">Select Language</option>
					<option value="text/x-csrc">C (gcc 4.4.7)</option>
					<option value="text/x-c++src">C++ (g++ 4.4.7)</option>
					<option value="application/x-httpd-php">PHP (5.4.40)</option>
					<option value="text/html" selected>HTML</option>
					<!--<option value="text/x-java">Java(OpenJDK 1.7.0_111)</option>
					<option value="application/x-httpd-php">PHP</option>-->
					<option value="text/x-python">Python (2.6.6)</option>
				</select>
			<select id="theme" class="form-control d">
    <option>Select Theme</option>
    <option value="3024-day">3024-day</option>
    <option value="3024-night">3024-night</option>
    <option value="abcdef">abcdef</option>
    <option value="ambiance">ambiance</option>
    <option value="base16-dark">base16-dark</option>
    <option value="base16-light">base16-light</option>
    <option value="bespin">bespin</option>
    <option value="blackboard">blackboard</option>
    <option value="cobalt">cobalt</option>
    <option value="colorforth">colorforth</option>
    <option value="dracula">dracula</option>
    <option value="eclipse">eclipse</option>
    <option value="elegant">elegant</option>
    <option value="erlang-dark">erlang-dark</option>
    <option value="hopscotch">hopscotch</option>
    <option value="icecoder">icecoder</option>
    <option value="isotope">isotope</option>
    <option value="lesser-dark">lesser-dark</option>
    <option value="liquibyte">liquibyte</option>
    <option value="material">material</option>
    <option value="mbo">mbo</option>
    <option value="mdn-like">mdn-like</option>
    <option value="midnight">midnight</option>
    <option value="monokai">monokai</option>
    <option value="neat">neat</option>
    <option value="neo">neo</option>
    <option value="night">night</option>
    <option value="paraiso-dark">paraiso-dark</option>
    <option value="paraiso-light">paraiso-light</option>
    <option value="pastel-on-dark">pastel-on-dark</option>
    <option value="railscasts">railscasts</option>
    <option value="rubyblue">rubyblue</option>
    <option value="seti">seti</option>
    <option value="solarized dark">solarized dark</option>
    <option value="solarized light">solarized light</option>
    <option value="the-matrix">the-matrix</option>
    <option value="tomorrow-night-bright">tomorrow-night-bright</option>
    <option value="tomorrow-night-eighties">tomorrow-night-eighties</option>
    <option value="ttcn">ttcn</option>
    <option value="twilight">twilight</option>
    <option value="vibrant-ink">vibrant-ink</option>
    <option value="xq-dark">xq-dark</option>
    <option value="xq-light">xq-light</option>
    <option value="yeti">yeti</option>
    <option value="zenburn">zenburn</option>
</select>
</div>
</div>
               <textarea class="highlight" id="input" name="code"></textarea>
            </form>
         </div>
         <div class="right">
            <iframe id='iframe'></iframe>
         </div>
      </div>
   </body>
</html>