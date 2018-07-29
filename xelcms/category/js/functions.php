<?php
function ValidateEmail($email)
{
/*
Name: Letters, Numbers, Dots, Hyphens and Underscores
@ sign
Domain (with possible subdomain(s) ). Contains only letters, numbers, dots and hyphens (up to 255 characters)
. sign
Extension: Letters only (up to 10 (can be increased in the future) characters)
*/

$regex = "([a-z0-9_\.\-]+)". # name

"@". # at

"([a-z0-9\.\-]+){2,255}". # domain & possibly subdomains

"\.". # period

"([a-z]+){2,10}"; # domain extension 

$eregi = eregi_replace($regex, '', $email);

return empty($eregi) ? true : false;
}
?>