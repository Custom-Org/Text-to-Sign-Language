<!DOCTYPE html>
<html>
    <head>
    	<?php require_once("include.php"); ?>
        <title>Avatar Page</title>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
<script>
(function() {
    var origOpen = XMLHttpRequest.prototype.open;
    XMLHttpRequest.prototype.open = function() {
        console.log('request started!');
        console.log(this);
        this.addEventListener('load', function() {
            console.log('request completed!');
            console.log(this.readyState); //will always be 4 (ajax is completed successfully)
            console.log(this.responseText); //whatever the response was
        });
        origOpen.apply(this, arguments);
    };
})();
	</script>        
    </head>
    <body>
	<h1>Testing AJAX Wrapper</h1>

	<button type="button" id="btn1">Click to send GET request</button>
	<script>
	var url = "http://vhg.cmp.uea.ac.uk/demo/BSLExamples/SignFiles/A.sigml";
	
	$("#btn1").click(function() {
		console.log("Button clicked! Sending get request");
		$.get(url, function( data ) {
		  console.log( "Data received of length : " + data.length );
		});
	});
	
	TextToSpeech.talk("Hello Beautiful World!");
	</script>
	</body>
</html>	
