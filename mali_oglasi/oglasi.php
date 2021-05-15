<?php 

    require_once "functions.php";

    if(isset($_SESSION['id'])){  // ako je postavljen id posalji na oglasi view
        include "oglasi.view.php";
    }else {
        header("Location: index.php"); // ako je pokusao preko url vrati na index.php
    }
?>