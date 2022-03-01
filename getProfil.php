<?php

	$response = @file_get_contents("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/".$_GET['name']."?api_key=RGAPI-524b1bd8-711e-43d8-982a-34b67f830f90");

if ($response === FALSE){
	$response = '{"id": "none","accountId": "none","puuid": "none","name": "inconnu","profileIconId": 0,"revisionDate": 0, "summonerLevel": 0}';
}

echo $response;

?>