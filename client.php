<?php

error_reporting(0);

        $kullaniciadi = $_POST["kullanici"];
		$platform = $_POST["secim"];
		

		ini_set("soap.wsdl_cache_enabled", "0");
		
		
		$client = new SoapClient("http://DESKTOP-O2HAICV:8080/JaxWS/ProfilFotolarGetir?wsdl");
		$parametre = array("name" => $kullaniciadi);
		
		if($platform == "instagram"){
			$foto = $client->instagramGetir($parametre);
			
		}
		else{
			$foto = $client->twitterGetir($parametre);
		}
		
		?>
		<img src=<?=$foto->return?> />
		