<?php

$dimensione_massima=512000; //dimensione massima consentita per file in byte -> 1024 byte = 1 Kb
$dimensione_massima_Kb=$dimensione_massima/1024;
$cartella_upload="public/"; //cartella in cui eseguire l'upload (controllare permessi scrittura e sopratutto crearla xD)
$root = "http://sirseleucio.altervista.org";
$filtrare=1; //filtrare x estensioni ammesse? 1=si 0=no
$array_estensioni_ammesse=array('.jpg','.jpeg','.gif','.png'); //estensioni ammesse
$errore_in = '<div class="alert alert-block alert-error fade in"><button type="button" class="close" data-dismiss="alert">x</button><h4 class="alert-heading">';
$errore_end = '</h4><a class="btn btn-danger" href="dumpshare.php">Torna indietro</a></div>';
if(!isset($_FILES['file1']) || $_FILES['file1']['size']==0){
       $error = 1;
       $errore = $errore_in."Nessun file selezionato per l'upload".$errore_end;
}elseif($_FILES['file1']['size']>$dimensione_massima){
       echo $errore_in."Il file selezionato per l'upload supera dimensione massima di $dimensione_massima_Kb Kb".$errore_end;
}else{
       $random=rand(0000,9999);
       $nome_file=$random.$_FILES['file1']['name'];
       $errore="";
       if($filtrare==1){
               $estensione = strtolower(substr($nome_file, strrpos($nome_file, "."), strlen($nome_file)-strrpos($nome_file, ".")));
               if(!in_array($estensione,$array_estensioni_ammesse)){
                       $errore.=$errore_in."Upload file non ammesso. Estensioni ammesse: ".implode(", ",$array_estensioni_ammesse).$errore_end."<br/>";
               }
       }
       if(!file_exists($cartella_upload)){
               $errore.=$errore_in."La cartella di destinazione non esiste</br>".$errore_end;
       }
       
       if($errore==""){
               if(move_uploaded_file($_FILES['file1']['tmp_name'], $cartella_upload.$nome_file)){
                       chmod($cartella_upload.$_FILES['file1']['name'],0777); //permessi per poterci sovrascrivere/scaricare
                       $ok = '<center>Operazione eseguita con successo. Upload riuscito.<br><a href="'.$root.'/public/'.$nome_file.'">'.$nome_file.'</a><br><img  class="img-polaroid" src="'.$root.'/public/'.$nome_file.'"><br>link diretto: <input type="text" value="'.$root.'/public/'.$nome_file.'"></center><a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php">Condividi su Facebook</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>';
                        $meta = '<meta property="og:image" content="'.$root.'/public/'.$nome_file.'"/><meta property="og:image:secure_url" content="'.$root.'/public/'.$nome_file.'" /><link rel="image_src" href="'.$root.'/public/'.$nome_file.'"/>';
               }else{
                       echo "Impossibile effettuare l'upload del file";
               }
       }else{
               $error = 1;
       }
}
include('layout/head.php');
include ('layout/menu.php');
?>
<body>
  <div class="container">
  <br>
<?php if ($error == 1) {
  echo $errore;
}else{
  echo $ok; 
}
?>
</div>
  <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-fileupload.min.js"></script>
</body>
</html>