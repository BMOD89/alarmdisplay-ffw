<?php 
$dateityp = GetImageSize($_FILES['datei']['tmp_name']);

if($dateityp[2] = 3)
   {

      move_uploaded_file($_FILES['datei']['tmp_name'], "../images/background.jpg");
      echo "Das Bild wurde erfolgreich hochgeladen. Benutzen Sie die Zurückschaltfläche in Ihrem Browser.";
     
    }

else
    {
    echo "Bitte nur Bilder im JPG-Format hochladen! Benutzen Sie die Zurückschaltfläche in Ihrem Browser.";
    }
?>
