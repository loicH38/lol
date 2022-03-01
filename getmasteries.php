<?php

	$response = @file_get_contents("https://euw1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/".$_GET['id']."?api_key=RGAPI-524b1bd8-711e-43d8-982a-34b67f830f90");

if ($response === FALSE){
	$response = '{"championId": 0,"championLevel": 0,"championPoints": 0,"lastPlayTime": 0,"championPointsSinceLastLevel": 0,"championPointsUntilNextLevel": 0,"chestGranted": false,"tokensEarned": 0,"summonerId": "0"}';
}

echo $response;

?>