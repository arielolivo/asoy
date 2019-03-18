<?php
    print "ABAJO! Valores enviados del form<br/>";
    print_r($_REQUEST);
    print "<br/><br/>";
    print "ABAJO! Archivos enviados<br/>";
    print_r($_FILES);
    print "<br/><br/><br/>";


    $name = trim(htmlspecialchars(strip_tags($_REQUEST["name"]), ENT_QUOTES, "UTF-8"));
    $pass = $_REQUEST["pass"];
    $descrip = $_REQUEST["descrip"];
    $option = $_REQUEST["option"];
    $data = $_REQUEST["data"];
    $select = $_REQUEST["select"];
    $files = $_FILES["file"];

    //print "$pass";

    if ($name != "") {
        print "<p>Su nombre es $name</p>";
    }

    if (isset($_REQUEST["option"])) {
        print "<p>Opción marcada</p>";
    }
    if (!isset($_REQUEST["option"])) {
        print "<p>Opción no marcada</p>";
    }



?>