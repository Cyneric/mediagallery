<?php

// In welches Verzeichnis soll geladen werden, hier in das selbe wo die Datei liegt
$uploadDir = dirname(__FILE__) . '/';
// Wie soll die Datei auf dem Webserver genannt werden, hier der Ursprungsname
$uploadFile = $uploadDir . basename($_FILES['pdf']['name']);
// Wenn die Datei erfolgreich uebertragen wurde, dann gib ein Div mit dem Dateinamen zurueck
if(move_uploaded_file($_FILES['pdf']['tmp_name'], $uploadFile)) {
echo '<div id="result">' . $_FILES['pdf']['name'] . '</div>';
} else {
echo '<div id="result">Fehler beim Speichern der Datei.</div>';
}

?>