<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target = 'uploads/' . basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
        echo "✅ Fichier uploadé avec succès : <a href='$target'>$target</a>";
    } else {
        echo "❌ Erreur lors de l’upload.";
    }
}
?>

<h2>Uploader votre fichier</h2>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" />
    <input type="submit" value="Uploader" />
</form>
