<?php
    function redirect($msg){
        
    }

    function dbConnect() {
        //ritorna ID connessione a db
        //host db, usr, pwd, nomedb sono i parametri
        $conn = mysqli_connect('localhost', 'root', '', 'prenotazioni');
        if(mysqli_connect_error())
	    	redirect("index.php?msg=Errore di collegamento al DB");
	    return $conn;
    }

    //funzione che serve per evitare sql injection, previene la possibilità
    //che nei campi di $var ci sia altro che non siano char alfanumerici
    function sanitizeString($var) {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return stripslashes($var);
    }
?>
