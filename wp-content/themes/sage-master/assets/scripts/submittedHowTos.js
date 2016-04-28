var app = angular.module('becomeContributorForm', []);
app.controller('becomeContributorController', function($scope) {
    //$scope.count = 0;
    amplify.subscribe( "becomeContributorSuccess", function() {
		$scope.showSuccess();
	});

    $scope.steps = $('.formStep').length;

    $scope.stepLength = function() {
    	var numberedList = [];
    	for (var i = 1; i <= $scope.steps; i++) {
    		numberedList.push(i);
    	}
	    return numberedList;
	};

	$scope.prevStep = function() {
    	var nextStep = $('.formStep.active').data('step') - 1;
		$('.formStep').removeClass('active');
		$('.formStep[data-step="' + nextStep + '"]').addClass('active');
    }

    $scope.nextStep = function() {
    	var nextStep = $('.formStep.active').data('step') + 1;
		$('.formStep').removeClass('active');
		$('.formStep[data-step="' + nextStep + '"]').addClass('active');
    }

    $scope.showSuccess = function() {
    	$('.successMessage').removeClass('hide');
    };
});

app.directive('navItems', function() {
	return {
        template: '<p>1</p>'
    };
});

$(document).ready(function() {

	$('.contributorOption').click(function() {
		$('.middleStep').addClass('hide');
		$('.formStep[data-step="' + $(this).data('showstep') + '"]').removeClass('hide');
	});

	

	$('.checkButtonsWrapper span').click(function() {
		var doAdd;
		var selection = $(this).text(),
			optionsParent = $(this).parents('.checkButtonsWrapper'),
			submitValue = optionsParent.find('input'),
			currentVal = submitValue.attr('value');

		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			doAdd = false;
		} else {
			$(this).addClass('active');
			doAdd = true;
		}
		
		var newVal = currentVal === ''? [] : currentVal.split(', ');

		if(doAdd) {
			newVal.push(selection);
		} else {
			newVal.splice(newVal.indexOf(selection),1);
		}

		submitValue.attr('value', newVal.join(', '));

	});

});
