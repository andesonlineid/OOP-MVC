<?php 

if(!session_id()) {
    session_start();
}

require_once "../app/init.php";




// instance class app
$app = new App();



?>