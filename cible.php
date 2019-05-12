<?php

    $infosfichier = pathinfo($_FILES['monfichier']['name']);
    $extension_upload = $infosfichier['extension'];
	$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
	if (in_array($extension_upload, $extensions_autorisees))
	{
		move_uploaded_file($_FILES['monfichier']['tmp_name'], 'C:\wamp64\www\projectweek\uploads/' . basename($_FILES['monfichier']['name'])); //modifier le path pour choisir ou upload les images
		echo "L'envoi a bien été effectué !";
	}
	$infosfichier = pathinfo($_FILES['monfichier2']['name']);
    $extension_upload = $infosfichier['extension'];
	$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
	if (in_array($extension_upload, $extensions_autorisees))
	{
		move_uploaded_file($_FILES['monfichier2']['tmp_name'], 'C:\wamp64\www\projectweek\uploads/' . basename($_FILES['monfichier2']['name'])); //ici aussi
	}
	$infosfichier = pathinfo($_FILES['monfichier3']['name']);
    $extension_upload = $infosfichier['extension'];
	$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
	if (in_array($extension_upload, $extensions_autorisees))
	{
		move_uploaded_file($_FILES['monfichier3']['tmp_name'], 'C:\wamp64\www\projectweek\uploads/' . basename($_FILES['monfichier3']['name'])); //ici aussi
	}
?>