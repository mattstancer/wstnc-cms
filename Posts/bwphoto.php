<?php
$sciezka = $_GET['sciezka'];
        $cos = imagecreatefromjpeg($sciezka);
        imagefilter($cos, IMG_FILTER_GRAYSCALE);
        header('Content-Type: image/jpeg');
        imagejpeg($cos);
        
?>
