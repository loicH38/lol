<?php
/*
// api_key=RGAPI-7a2d4f7c-9c0a-4da1-bfa5-a652379dbe9a
*/
$response = file_get_contents("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/".$_GET['name']."?api_key=RGAPI-7a2d4f7c-9c0a-4da1-bfa5-a652379dbe9a");

echo $response;
?>