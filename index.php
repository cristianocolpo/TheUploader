<?php include('layout/head.php') ?>
<body data-spy="scroll" data-target=".navbar">
	<?php include('layout/menu.php') ?>
    <div style="background:url(img/logo.jpg); height:200px; text-align:center">
    	<form enctype="multipart/form-data" class="document-up" action="uploader.php" method="POST">
			<div class="fileupload fileupload-new" data-provides="fileupload">
  				<div class="input-append">
    				<div class="uneditable-input span3">
    					<i class="icon-file fileupload-exists"></i> 
    					<span class="fileupload-preview"></span>
    				</div>
    				<span class="btn btn-file">
    					<span class="fileupload-new">Select file</span>
    					<span class="fileupload-exists">Change</span>
    					<input type="file" name="file1">
    				</span>
    				<input type="submit" value="upload" class="btn" style="margin-left: 10px">
    				<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
        	</div>
		</form>
  </form>
	</div>	
    <div class="container">
	    <div class="row">
	    	<div class="span4">
	    		<img src="http://dumpshare.net/img/pann_contr.png">
	    		<h2>Controllo</h2>
	    		<p>Gestisci i tuoi file in maniera facile e veloce.Grazie al miglioramento del pannello di controllo trovi tutti i tuoi link a portata di click. </p>
			</div>
	    	<div class="span4">
	    		<img src="http://dumpshare.net/img/widget_home.png">
	    		<h2>Widgets</h2>
	    		<p>Porta dumpshare sempre con te!<br />Grazie ai diversi widget da implementare direttamente nel tuo forum, blog o sito web. </p>
	    	</div>
	    	<div class="span4">
	    		<img src="http://dumpshare.net/img/streaming.png">
	    		<h2>Streaming</h2>
	    		<p>Adesso puoi guardare direttamente online i tuoi video, senza doverli scaricare. Puoi anche scegliere se implementarli direttamente sul tuo spazio web personale.</p>
	    	</div>
	    </div>
    </div>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-fileupload.min.js"></script>
</body>
</html>
