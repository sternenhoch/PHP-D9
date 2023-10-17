<?php
function my_very_secure_hash($password) {
    $my_very_secure_hash = md5($password);
    return $my_very_secure_hash;
    
}

/*$password = "blabli";
echo my_very_secure_hash($password);*/
