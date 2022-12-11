<head>
	<meta charset="UTF-8">
	<title>Movies Test</title>
</head>
<?php 

    session_start();

    if(isset($_SESSION["username"])){
        require('nav.php');
        require('../modules/movies/movieModule.php');
        require('footer.php');
    }else{
        header('Location: /talent');
        exit;
    }

?>