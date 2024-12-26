<?php

$env_file = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/env.json'); 
$env = json_decode($env_file, true);

?>