
	<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script type="text/javascript">
			var form = $("#ajaxForm");
			
			form.on('submit', formSubmit);

			function formSubmit(e) {
			    e.preventDefault();
			    $('.sent_status .loading').addClass('--active');
			    const formData = new FormData();
			    formData.append(
			        'name',
			        $('input[name="name"]').val()
			    )
			    formData.append(
			        'email',
			        $('input[name="email"]').val()
			    )
			    formData.append(
			    	'Message',
			    	$('#message').val()
		    	)
			    fetch("https://getform.io/f/116803f3-731f-4c6d-b121-7a8394a56378", {
			            method: "POST",
			            body: formData,
			    })
			    .then(
			    	response => {
			    		console.log(response)
			    		$('.sent_status .loading').removeClass('--active');
			    		$('.sent_status .good').show();
			    	
			    })
			    .catch(error => {
			    	console.log(error)
			    	$('.sent_status .loading').removeClass('--active');
			    	
			    })
			}
		</script>

	</body>
</html>
