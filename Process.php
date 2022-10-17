<?php
$nameError="";
if(isset($_REQUEST["enter"]))
{
    if (empty($_REQUEST["name"]))
    {
        $nameError="Name is required*";
    }else{
        $nameError="Your name is ".$_REQUEST["name"];
    }
    
}
?>