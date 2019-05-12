<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
                // Testons si l'extension est autorisée
    $infosfichier = pathinfo($_FILES['monfichier']['name']);
    $extension_upload = $infosfichier['extension'];
	$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
	if (in_array($extension_upload, $extensions_autorisees))
	{
                        // On peut valider le fichier et le stocker définitivement
		move_uploaded_file($_FILES['monfichier']['tmp_name'], 'C:\wamp64\www\projectweek\start\uploads/' . basename($_FILES['monfichier']['name']));
		echo "L'envoi a bien été effectué !";
	}
	$infosfichier = pathinfo($_FILES['monfichier2']['name']);
    $extension_upload = $infosfichier['extension'];
	$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
	if (in_array($extension_upload, $extensions_autorisees))
	{
                        // On peut valider le fichier et le stocker définitivement
		move_uploaded_file($_FILES['monfichier2']['tmp_name'], 'C:\wamp64\www\projectweek\start\uploads/' . basename($_FILES['monfichier2']['name']));
	}
	$infosfichier = pathinfo($_FILES['monfichier3']['name']);
    $extension_upload = $infosfichier['extension'];
	$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
	if (in_array($extension_upload, $extensions_autorisees))
	{
                        // On peut valider le fichier et le stocker définitivement
		move_uploaded_file($_FILES['monfichier3']['tmp_name'], 'C:\wamp64\www\projectweek\start\uploads/' . basename($_FILES['monfichier3']['name']));
	}
}
?>