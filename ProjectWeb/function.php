<?php require "database.php"; ?>

<?php
    function inputpicture(){
        global $db;
        $sorgu= $db->query("SELECT * FROM inputpicture")->fetchAll(PDO::FETCH_ASSOC);
        return $sorgu;
    }
    function choicepicture($pictureid){
        global $db;
        $sorgu= $db->query("SELECT * FROM inputpicture WHERE id='$pictureid' ")->fetchAll(PDO::FETCH_ASSOC);
        return $sorgu;
    }
    function outputpicture($pictureid){
        global $db;
            $sorgu= $db->query("SELECT * FROM outputpicture WHERE tags LIKE '%,".$pictureid.",%' ")->fetchAll(PDO::FETCH_ASSOC);
        return $sorgu;
    }
    function finalpicture($pictureid){
        global $db;
        $sorgu= $db->query("SELECT * FROM outputpicture WHERE id='$pictureid' ")->fetchAll(PDO::FETCH_ASSOC);
        return $sorgu;
    }
?>