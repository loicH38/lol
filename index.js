
pseudo="NeoRocklee";
function profil(){
	
$.get("./getProfil.php?name="+pseudo).done( function(data){
	profil = jQuery.parseJSON(data);
	console.log(profil);
	$( ".b" ).text(profil.name);
	$("#Icon").attr("src","http://ddragon.leagueoflegends.com/cdn/12.4.1/img/profileicon/"+profil.profileIconId+".png");
	$( ".c" ).text(profil.summonerLevel);


	console.log(profil.profileIconId);
});


$( document ).ready(function() {

	$(".a").click(function(){
		pseudo=$(".a1").val();
		console.log("pseudo:"+pseudo);
		profil();
	});
});

