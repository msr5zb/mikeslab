<!DOCTYPE html>
<html>
<head>
<title>Tutorials</title>    
<link rel="stylesheet" type="text/css" href="libs/css/styles.css">
    
<style>

</style> 
<script>
function OpenConnection()
{
    try
    {

        $serverName = "TCP:cs4320teamxvm.cloudapp.net,5432";
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
            <li id="currentPage"><a href="index.php">Home</a></li>
            <li><a href="status.php">Status</a></li>
            <li><a href="about.php">About Us!</a></li>
            <li><a href="tutorials.php">Tutorials</a></li>
      
            <li><a href="index.php">Log In</a></li>
            <li><a href="index.php">Sign Up</a></li>
      
        </ul>    
    
    </div>
    
    <div id="wrapper">
        <h1 id="wrapperTitle">Welcome to The Hub!</h1>
        <hr>
        
    
        <?php 
   print("Listen!");
    phpinfo();
            $conn = OpenConnection(); 
        if($conn == null)
        {
            echo("Super Sad ;-;");
        }

        else{echo("Super Nice ;-;");}
        ?> 
       
    </div>
    
    
    
    
    
   
    
</body>


</html>