<!-- Changes 1st part of the string and 2nd part of the string with each other 
if length of the string  is a multiple of 4 -->
<form action = "" method="GET">
    <label for = "string">Введите строку</label>
    <input type = "text" placeholder="Введите строку" name ="string" id = "string">
    <input type = "submit">
</form>
<?php
if(!empty($_GET["string"]))
{
    $str = strip_tags($_GET["string"]);
    if(mb_strlen($str) % 4 == 0)
    {
        $str1 = substr($str, 0 , mb_strlen($str)/2);
        $str2 = substr($str, mb_strlen($str)/2, mb_strlen($str)/2);
        echo $str2 . $str1;
    }
    else echo "Длин строки не кратна 4";
}
?>