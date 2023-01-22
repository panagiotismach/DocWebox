<?php
    $pathInPieces = explode('\\', __DIR__);
    
    define('ROOT_PATH', end($pathInPieces));
?>