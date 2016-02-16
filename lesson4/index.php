<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home work lesson 4!</title>
    <link rel="stylesheet" type="text/styles" href="css/style.css" />
</head>

<body>
    <header class="nav">
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=load">Load file</a></li>
            <li><a href="index.php?page=avtorization">Avtorization</a></li>
            <li><a href="index.php?page=contact">Contact information</a></li>
        </ul>
        <div class="row"></div>
    </header>
    <content>
        <div class="cell">

            <?php
	session_start();

function getPage(){
	if (!isset($_GET["page"])) 
	{
		include 'modul/home.php' ;
		return "NULL" ;
	}	
	else{
        switch ($_GET["page"]) {
            case "home": include 'modul/home.php' ; break ;
            case "load": include 'modul/load.php' ; break ;
            case "upload": include 'modul/upload.php' ; break ;
            case "avtorization": include 'modul/avtorization.php' ; break ;		
            case "contact": include 'modul/contact.php' ; break ;
            default : echo $_SESSION['data'] ;
        }
	}
}

getPage() ;

$date = date("j.m.Y G:i");

?>
        </div>
    </content>
    <time>
        <?php
echo "<p>".$date."</p>";
?>
    </time>
    <footer class="nav">
        <p><a href="index.php">Return to home</a></p>
        <div class="row"></div>
    </footer>
</body>

</html>
