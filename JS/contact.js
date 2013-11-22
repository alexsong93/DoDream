$(document).ready(function(){
	//define submitted dialog
	$('#submitted').dialog({
	    autoOpen: false,
	    title: 'Submitted!',
	});

	// check if all fields are filled in
	function checkValid() {
		var count = 0;
		//check if each formInfo field (name , email) is empty
		$('.formInfo').each(function() {
			if($(this).val() !== '') { 
				count += 1; 
			}
		});
		//check if message is empty
		if($('.formMessage').val() !== '') {
			count += 1
		}
		return count === 3;
	}

	$('#contactForm').submit(function() {
		var isValid = checkValid();
		//if all filled out, then show dialog
		if(isValid) {
			$('#submitted').dialog('open');
			return false;
		}

	});
});