<?php

	$response = @file_get_contents("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/".$_GET['name']."?api_key=RGAPI-fad492af-3029-4a25-b1f0-d820388f99f2");

if ($response === FALSE){
	$response = '{"id": "none","accountId": "none","puuid": "none","name": "inconnu","profileIconId": 0,"revisionDate": 0, "summonerLevel": 0}';
}

echo $response;

?>