<?php
    //carico script contenente i parametri di configurazione
    include_once 'config.php';
    //carico script di interfaccia al database
    include_once 'database.php';
    
    if(!isset($_GET['id'])){
        header("Location: inserisciGeneri.php");
    }
    $id = $_GET['id'];
        
    //creo una connessione al database
    $conn = database::dbConnect();
    //eseguo la query di eliminazione  
    $sql = "DELETE FROM `generi` WHERE `id` = $id";
    database::qDelete($conn, $sql);
    //Torno alla pagina precedente
    header("Location: inserisciGeneri.php");
    die();    
?>