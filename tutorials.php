<!DOCTYPE html>
<html>
<head>
<title>Tutorials</title>    
<link rel="stylesheet" type="text/css" href="libs/css/styles.css">
<link rel="stylesheet" type="text/css" href="libs/css/stylesTutorial.css">
    
<style>

</style>    
</head>
<body>
    <div id="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="status.php">Status</a></li>
            <li><a href="about.php">About Us!</a></li>
            <li id="currentPage"><a href="tutorials.php">Tutorials</a></li>
      
            <li><a href="index.php">Log In</a></li>
            <li><a href="index.php">Sign Up</a></li>
      
        </ul>    
    
    </div>
    
    <div id="wrapper">
        <h1 id="wrapperTitle">Tutorials</h1>
        <hr>
       
        <div id="contentWrapper">
        <h1>Composer...</h1>
        <h3>How is it installed?</h3>
        <p>Composer is currently installed locally to the repo ! Meaning, Composer was installed into the directory.</p>
        <p>It was installed by using the following::</p>
<p>In Terminal, type:
curl -sS https://getcomposer.org/installer | php <br>



Note, ours is installed locally, so cannot bin it (Means can't make shortcut to just type "composer").</p><br>
        
<h3>How do I use Composer?</h3>
<p>In the command prompt, go to the directory where composer.phar is installed. Note, this is our main directory.</p>
<p>Type: "php composer.phar" to view the commands you can use via composer.</p>
<p>To use a command, type: "php composer.phar [command]"</p><br>

<img src="libs/images/composerEx.PNG" alt="composer" class="bubbleImage"> 
            
            
            
<h1>Laravel...</h1>
<h3>How is it installed?</h3>
<p>Once again, it is installed locally in our repository directory.</p>
<p>Note we're using V5.0 because our server php version is older than 5.9. More info found <a href="http://laravel.com/docs/5.0" target="_blank">here</a>
</p>
<p>It was installed via Composer using the command: "php composer.phar require "laravel/installer=~1.1""</p>
<p>Note, we are not using "composer global require "laravel/installer=~1.1" because we do not want it globally installed.
</p><br>
        
<h3>How do I use Laravel?</h3>
<p>Like Composer, we need to reference it where it is located in the directory.</p>
<p>In our case, it is located in "vendor/bin/laravel</p>
<p>To view commands using Laravel, use 
"vendor/bin/laravel"</p>
<p>To execute a command, use
"vendor/bin/laravel [command]"</p><br>
            
<img src="libs/images/laravelEx.PNG" alt="laravel" class="bubbleImage"> 

            
<h3>Why use a PHP Framework ?</h3>
<p>It goes along with the whole Model-View-Controller. It seperates database/php details from the view sections. It keeps code clean, oraganized, and steady.</p><br>
<h2>Future Video TutorialsTo Come on how to use Laravel!</h2>
    </div>
    </div>
    
    
    
    
   
    
</body>


</html>