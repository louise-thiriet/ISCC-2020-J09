<?php

if (isset($_FILES['userfile']['name'])){
    if (strlen(explode('.', $_FILES['userfile']['name'])[0])<5){
        echo "Le fichier ne correspond pas aux attentes.";
    }
    else{
        $ext = explode('.', $_FILES['userfile']['name'])[1];
        $extposs = array("jpg", "jpeg", "png", "JPG", "JPEG", "PNG");
        if (in_array($ext, $extposs)){
            $_SESSION['description'] = $_POST['description'];
            $_SESSION['titre'] = $_POST['titre'];
            echo "<p><strong>Titre:</strong> ".$_SESSION['titre']."</p>";
            echo "<p><strong>Description:</strong> ".$_SESSION['description']."</p>";
            echo "<p><strong>Nom du fichier:</strong> ".$_FILES['userfile']['name']."</p>";
            echo "<p><strong>Type du fichier:</strong> ".$_FILES['userfile']['type']."</p>";
            echo "<p><strong>Taille du fichier du fichier:</strong> ".$_FILES['userfile']['size']."</p>";
        }
        else{
            echo "Le fichier ne correspond pas aux attentes.";
        }
    }
}
if(isset($_FILES['userfile'])){
    $name_file = $_FILES['userfile']['name'];
    $tmp_name = $_FILES['userfile']['tmp_name'];
    $local_image = "uploaded/";
    $upload = move_uploaded_file($tmp_name, $local_image.$name_file);
    echo '>>>>'.$upload."<br>";
    print_r($upload);
    print_r($_FILES);

    if($upload){
        echo "c'est un succès".$_FILES['userfile']['name'];
    }
    else{
        echo "c'est un échec";
    }
}
?>