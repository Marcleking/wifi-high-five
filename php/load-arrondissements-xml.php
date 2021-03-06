﻿<?php

/************************************************
	Bouchard-Marceau, Marc-Antoine
	Ouellet, Francis
	
	load-arrondissements-xml.php
	Dernière modification : 2013-10-27
************************************************/

// Retourne du contenu au format xml en utf-8.
header("Content-type: application/xml; charset=utf-8");

// Permet de désactiver la "Same Origin Policy" pour permettre
// un chargement en AJAX à partir d'un autre domaine.
header("Access-Control-Allow-Origin: *");

// Chargement du fichier XML.
$xml = simplexml_load_file('http://donnees.ville.quebec.qc.ca/Handler.ashx?id=2&f=XML');

// Adresse 
// http://donnees.ville.quebec.qc.ca/Handler.ashx?id=2&f=XML
// Ré-écriture du fichier XML dans la réponse.
echo $xml->asXML();

?>
