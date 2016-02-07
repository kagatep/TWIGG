$(document).ready(function() {

	function addRemoveSubject(subject, addSubject) {
		var currentVal = $('#howtoSubjects').find('input').attr('value');
		var newVal = currentVal === ''? [] : currentVal.split(', ');

		if(addSubject) {
			newVal.push(subject);
		} else {
			newVal.splice(newVal.indexOf(subject),1);
		}

		$('#howtoSubjects').find('input').attr('value', newVal.join(', '));
	}

	$('.topics span').click(function() {
		var doAdd;
		var subject = $(this).text();

		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			doAdd = false;
		} else {
			$(this).addClass('active');
			doAdd = true;
		}
		addRemoveSubject(subject, doAdd);
	});

});