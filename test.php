<script
src="https://code.jquery.com/jquery-3.2.1.js"
integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
crossorigin="anonymous"></script>

<html>

<body>
	

	<form name="formData"  id="formData">

		<input id="t1" type="text" name="name" placeholder="nombre"><br><br>
		<a href="#" id="boton">Enviar data</a>


	</form>


</body>

</html>

<script>


	$('#boton').click(function(){

		$.ajax({
			method: "GET",
			url: "user.php/create/3/4/839",
	    	data: $("#formData").serialize(),
		})
		.done(function(msg) {
			
			$('#t1').val(msg);

		});


	});



</script>