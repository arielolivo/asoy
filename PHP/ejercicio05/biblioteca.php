<?php

function cabecera($titulo) {
    print "<!DOCTYPE html>";
    print "<html>";
    print "<head>";
    print "<meta charset='utf-8' />";
    print "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
    print "<title>$titulo</title>";
    print "<meta name='viewport' content='width=device-width, initial-scale=1'>";
    print "</head>";
    print "<body>";
    print "<h1>$titulo</h1>";
}

function pie() {
    print "</body>";
    print "</html>";
}

?>