


<?php
$num_tab = trim(htmlspecialchars($_REQUEST["numero"], ENT_QUOTES, "UTF-8"));
    
for ($i=1; $i <=10 ; $i++) { 
    echo"num_tab x $i = ".($num_tab*$i). "<br/>";
}
    ?>
