<?php
/*function my_very_secure_hash($password) {
    $my_very_secure_hash = crypt($password);
    return $my_very_secure_hash;

    printf("uniqid(à")
    if (crypt_blowfish == 1){

    }
}

$password = "blabli";
echo my_very_secure_hash($password);

<?php
function my_password_hash($password){
    $toto = [1, 2 , 3];
    
    return $toto;
}

$resultat = my_password_hash("coucou");
var_dump($resultat);

$password = array(
    'hashed' => "H ghC7(-5TH):",
    'uniqid' => "xxx",
    );*/

    function my_password_hash($password){
        $salt = uniqid(); 
        $hash = crypt($password, $salt);
        return array("hash" => $hash, "salt" => $salt);
    }
    
    $resultat = my_password_hash("blabli");
    var_dump($resultat);

    function my_password_verify($password,$salt,$hash){
        $test = false;
        if (crypt($password, $salt)==$hash){
            return $test=true;
        } 
        else {
            return $test = false;
        }
    }
    
    var_dump(my_password_verify("blabli","65GRjF/uHWI62","6530b8efe951b"));