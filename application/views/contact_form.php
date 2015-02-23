<div id="contact_form">
	<h1>Contact with us</h1>
	<?php
	echo form_open('contact/submit');
	echo form_input('name', 'Name', 'id="name"');
	echo form_input('email', 'E-mail', 'id="email"');

	$data = array(
		'name' => 'message',
		'cols' => 35,
		'rows' => 10,
		'id' => 'message'
		);
	echo form_textarea($data, 'Message');
	echo form_submit('submit', 'Submit', 'id="submit"');
	
	echo form_close();
	
	?>
</div>

<script>
	$('#submit').click(function(){
		var name = $('#name').val();
		var email = $('#email').val();
		var message = $('#message').val();
		var submit = $('#submit').val();
		
		      $.post('<?php echo site_url("contact/submit");?>',{

		      	name:name,
		      	email:email,
		      	message:message,
		      	submit:submit
		      },
		      function(result){
		        
		        alert(result);
		        
		        
		      });

		// alert(name + email + message);

		return false;
	});

</script>