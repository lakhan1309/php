<?php
   //session_start();
    include_once("analyticstracking.php") ;
   
   if(isset($_SESSION['sent']) && !empty($_SESSION['sent']) && isset($_POST['submit'])) {
   	
   	$mssg=$_SESSION['sent'];
   	
   echo '<script type="text/javascript">';
   echo 'alert("'.$mssg.'")';
   echo '</script>';
   echo "<meta http-equiv='refresh' content='0;url=index.php'>";
   }
   else if(isset($_SESSION['sent']) && !empty($_SESSION['sent'])){
   	
   	$mssg=$_SESSION['sent'];
   	
   echo '<script type="text/javascript">';
   echo 'alert("'.$mssg.'")';
   echo '</script>';
   echo "<meta http-equiv='refresh' content='0;url=index.php'>";
   }
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="msvalidate.01" content="3D0E84C1134A4BAC59BB32FB3B982CE4" />
      <meta charset="utf-8">
      <meta name="description" content="Compile Pad is an online compiler/interpreter,  where you can run your C | C++ | HTML | Python | PHP code.You can select different types of themes like 3024-day | 3024-night | abcdef | ambiance | base16-dark">
      <meta name="keywords" content="C,C++,Java,HTML,Python,PHP">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
      <title>Compile Pad</title>
      <!-- Bootstrap core CSS -->
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome CSS-->
      <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
      <!-- Custom styles for this template -->
      <link href="css/main.css" rel="stylesheet">
      <script src="jcubic/js/jquery-1.7.1.min.js"></script>
      <script src="jcubic/js/jquery.mousewheel-min.js"></script>
      <script src="jcubic/js/jquery.terminal.min.js"></script>
      <script src="js/smoothscroll.js"></script>
      <link href="jcubic/css/jquery.terminal.css" rel="stylesheet"/>
      <!-- Hotjar Tracking Code for http://compilepad-webide.rhcloud.com/ -->
      <script>
         (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:339682,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
             r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
         })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
      </script>
   </head>
   <body>
      <div class="site-wrapper">
         <div class="site-wrapper-inner">
            <div class="cover-container">
               <a name="top"></a>
               <div class="masthead clearfix">
                  <div class="inner">
                     <nav>
                        <h3 class="masthead-brand"><i class="fa fa-laptop" aria-hidden="true"></i> CompilePad</h3>
                        <ul class="nav masthead-nav">
                           <li class="active"><a href="#top">Home</a></li>
                           <li><a href="compilepad.php">IDE</a></li>
                           <li><a href="#fea">Features</a></li>
                           <li><a href="#about">About Us</a></li>
                           <li><a href="#contact">Contact Us</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="inner cover">
                  </br></br></br></br></br></br></br>
                  <div id="terminal_outer">
                     <div id="toolbar">
                        <div class="top">
                           <div id="lights">
                              <div class="light red">
                                 <div class="glyph">×</div>
                                 <div class="shine"></div>
                                 <div class="glow"></div>
                              </div>
                              <div class="light yellow">
                                 <div class="glyph">-</div>
                                 <div class="shine"></div>
                                 <div class="glow"></div>
                              </div>
                              <div class="light green">
                                 <div class="glyph">+</div>
                                 <div class="shine"></div>
                                 <div class="glow"></div>
                              </div>
                           </div>
                           <div id="title">CompilePad Console ver 1.0.1
                           </div>
                           <div id="bubble">
                              <div class="shine"></div>
                              <div class="glow"></div>
                           </div>
                        </div>
                     </div>
                     <div id="terminal">
                        <p> CompilePad Console :: ver 1.0.1</br> Copyright (C) 2016</br></p>
                     </div>
                  </div>
                  </br></br></br>
               </div>
            </div>
            <!-- Marketing messaging and featurettes
               ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->
            <a name="fea"></a>
            <div class="container marketing">
               <!-- START THE FEATURETTES -->
               <hr class="featurette-divider">
               <div class="row featurette">
                  <div class="col-md-7">
                     <h3 class="featurette-heading">No need for Installations/Downloads. <span class="text-muted">Code on the go.</span></h3>
                     <!--<p >Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>-->
                  </div>
                  <div class="col-md-5">
                     <img class="featurette-image img-responsive center-block" src="images/screenshot500x500.png" alt="Generic placeholder image">
                  </div>
               </div>
               <hr class="featurette-divider">
               <div class="row featurette">
                  <div class="col-md-7 col-md-push-5">
                     <h3 class="featurette-heading">Cross Browser support. <span class="text-muted">Works on the browser of your choice.</span></h3>
                     <!--<p >Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>-->
                  </div>
                  <div class="col-md-5 col-md-pull-7">
                     <img class="featurette-image img-responsive center-block" src="images/browsers500x500.png" alt="Generic placeholder image">
                  </div>
               </div>
               <hr class="featurette-divider">
               <div class="row featurette">
                  <div class="col-md-7">
                     <h3 class="featurette-heading">Small Footprint. <span class="text-muted">Low Internet Speed?Not a problem.</span></h3>
                     <!-- <p >Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>-->
                  </div>
                  <div class="col-md-5">
                     <img class="featurette-image img-responsive center-block" src="images/rocket500x500.png" alt="Generic placeholder image">
                  </div>
               </div>
            
            <hr class="featurette-divider">
            <!-- Three columns of text below the carousel -->
            <a name="about"></a>
            <div class="row">
               <h3>Meet the Team</h3>
               </br>
               <div class="col-lg-3">
                  <img class="img-circle" src="images/a1-min.jpg" alt="Generic placeholder image" width="140" height="140">
                  <h3>Akash Shukla</h3>
                  <!--<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                     -->
               </div>
               <!-- /.col-lg-4 -->
               <div class="col-lg-3">
                  <img class="img-circle" src="images/l-min.jpg" alt="Generic placeholder image" width="140" height="140">
                  <h3>Lakhan Khandelwal</h3>
                  <!--<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                     -->
               </div>
               <!-- /.col-lg-4 -->
               <div class="col-lg-3">
                  <img class="img-circle" src="images/v-min.jpg" alt="Generic placeholder image" width="140" height="140">
                  <h3>Varun Kumar</h3>
                  <!--<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                     -->
               </div>
               <!-- /.col-lg-4 -->
               <div class="col-lg-3">
                  <img class="img-circle" src="images/d-min.jpg" alt="Generic placeholder image" width="140" height="140">
                  <h3>Deepesh Jain</h3>
                  <!--  <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                     -->
               </div>
            </div>
            <!-- /.row -->
            <a name="contact"></a>
            <hr class="featurette-divider">
            <div class="row">
               <div class="col-lg-6">
                  <h3 class="featurette-heading"> Contact Us.  <span class="text-muted">We'd love to help you.</span></h3>
               </div>
               <div class="col-lg-5">
                  <form action="contact_me.php" id="email_form" method="post" class="form">
                     <div class="form-group">
                        <input type="text" id="c_name" class="form-control" name="name" placeholder="Name" required>
                     </div>
                     <div class="form-group">
                        <input type="email" id="c_email" class="form-control" name="email" placeholder="E-mail" required>
                     </div>
                     <div class="form-group">
                        <textarea class="form-control" id="c_message" name="message" rows="7" placeholder="Message" style="resize:vertical" required></textarea>
                     </div>
                     <button type="submit" style="background-color:grey; "class="btn btn-lg btn-block" id="contactus" name="submit">Send Message</button>
                  </form>
               </div>
            </div>
		</div>
            <!-- /END THE FEATURETTES -->
			<div class="footer">
            <?php include("footer.php"); ?>
			</div>
         </div>
      </div>
      <script>
         jQuery(document).ready(function($) {
           var id = 1;
           $('#terminal').terminal(function(command, term) {
             if (command == 'help') {
               term.echo("AVAILABLE COMMANDS\n ide........Redirect to the IDE\n about......About CompilePad\n reload.....Reload the page\n help.......Displays available commands\n exit.......Go back to previous label\n clear......Clear Console");
             } else if (command == 'about'){
               term.echo('Compile Pad is a web IDE that helps you code and learn from anywhere anytime without \n the hassle of any installations..\n Enter ide to get started')
               term.push(function(command, term) {
                 if (command == 'help') {
                   term.echo('if you type ping it will display pong, Or else enter exit to go back');
                 } else if (command == 'ping') {
                   term.echo('       pong');
                 } else if (command == 'ide') {
                   window.location.assign("compilepad.php");
                 } else {
                   term.echo('unknown command ' + command);
                 }
               }, {
                 prompt: 'about> ',
                 name: 'about'});
             } else if (command == "reload") {
               window.location.reload();
             } else if (command == 'ide') {
               window.location.assign("compilepad.php");
                     //, {
                       //  prompt: "ide> "});
         } else {
           term.echo("unknown command " + command);
         }
         }, {
           greetings: "\nWelcome human! Enter help to list all available commands\n",
           onBlur: function() {
                     // prevent loosing focus
                     return true;
                   }
                 });
         });
         
         $("#terminal").animate({ scrollTop: $("#terminal")[0].scrollHeight}, 1000);
      </script>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
   </body>
</html>