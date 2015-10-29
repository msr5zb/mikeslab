<!DOCTYPE html>
<html>
<head>
<title>About</title>    
<link rel="stylesheet" type="text/css" href="libs/css/styles.css">
<link rel="stylesheet" type="text/css" href="libs/css/stylesAbout.css">
    
<style>

</style>  

<script>
function OpenConnection()
{
    try
    {

        $serverName = "ssh:cs4320teamxvm.cloudapp.net,22";
        $connectionOptions = array("Database"=>"CS4320TeamXVM",
            "Uid"=>"azreuser", "PWD"=>"PokemonRocks!");
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if($conn == false)
            die(FormatErrors(sqlsrv_errors()));
    }
    catch(Exception $e)
    {
        echo("Error!");
    }
}</script>    
    
</head>
<body>
    <div id="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="status.php">Status</a></li>
            <li id="currentPage"><a href="about.php">About Us!</a></li>
            <li><a href="tutorials.php">Tutorials</a></li>
      
            <li><a href="index.php">Log In</a></li>
            <li><a href="index.php">Sign Up</a></li>
      
        </ul>    
    
    </div>
    
    <div id="wrapper">
        <h1 id="wrapperTitle">About The Devs</h1>
        <hr>
        <div id="bubbleContainer">
            
        <div class="bubble">
            <img src="libs/images/dustinR.jpg" alt="dustin" class="bubbleImage">
            <p>Dustin Rios! Email: drrkvf@mail.missouri.edu</p>
            <p class="small">Senior CS major. Database experience. Will assist where I am needed. Database Admin for project</p>
        </div>
            
        <div class="bubble">
            <img src="libs/images/JayOneLove.jpg" alt="jay" class="bubbleImage"> 
            <p>Jayanth Kanugo ! Email: jkanugo@mail.missouri.edu</p>
            <p class="small">Graduate Student. Front End Javascript, jQuery experience. Will be helping on the sever side scripting as well.</p>
        </div>
            
        <div class="bubble">
            <img src="libs/images/willM.jpg" alt="will" class="bubbleImage"> 
            <p>William Minard ! Email: wdmpp5@mail.missouri.ed</p>
            <p class="small">Senior CS major. Strongest with PHP and database creation and management. Also fairly familiar with web-based languages such as HTML, CSS, JavaScript, etc. Will be the middleman connecting front end to back end. Willing to help with front end as well.</p>
        </div>
            
        <div class="bubble">
            <img src="libs/images/karaH.jpg" alt="kaa" class="bubbleImage">
            <p>Karolina Hryszko ! Email: kgh458@mail.missouri.edu</p>
            <p class="small">Senior CS major. Database creation and management experience. Can help with any part necessary. Knowledge in object oriented languages. Responsible for database part of project.</p>
        </div>
            
        <div class="bubble">
            <img src="libs/images/birds.jpg" alt="michael" class="bubbleImage">   
            <p>Michael Koboldt ! Email: mjk8v2@mail.missouri.edu</p>
            <p class="small">Senior; Basic web language experience (html, css, javascript, scss), CMS experience (wordpress, drupal, etc.), experience with PHP, SQL, PostgreSQL, C, C++. I will be floating between front and backend, but I am hopeful to work mostly in the front- end/presentation of our project.</p>
        </div>
            
        <div class="bubble">
          <img src="libs/images/mikeR.jpg" alt="mike" class="bubbleImage">
          <p>Michael Rallo ! Email: msr5zb@mail.missouri.edu</p>
          <p class="small">Junior, CS Major. Dapples in a bit of everything. Is our platform guy. Responsible for providing a platform for which the team to work. May help with various parts of the project where needed.</p>
        </div>
       </div>

    </div>
    
    
    
    
    
   
    
</body>


</html>