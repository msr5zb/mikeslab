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
        
        <img src="libs/images/head.jpg" alt="head" id="banner">
        <?php 
        print("Testinggggg Yoooo");print("Testinggggg2 Yoooo");
        $conn_string = "host=cs4320teamxvm.cloudapp.net port=80 dbname=CS4320TeamXVM user=azureuser password=PokemonRocks!";
        $dbconn4 = pg_connect($conn_string);




        if($dbconn4 == null)
        {
            print("Super Sad ;-;");
        }

        else{print("Super Nice ;-;");}
        ?> 
       
    </div>
    
    
    
    
    
   
    
</body>


</html>