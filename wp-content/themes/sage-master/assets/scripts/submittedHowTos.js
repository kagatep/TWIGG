// twiggApp.controller('becomeContributorCtrl', function($scope) {
//     //$scope.count = 0;
//     amplify.subscribe( "becomeContributorSuccess", function() {
// 		$scope.showSuccess();
// 	});
// 	amplify.subscribe( "openBecomeContributorForm", function() {
// 		$scope.openForm();
// 	});


// 	$scope.hideOnSuccess = false;
//     $scope.steps = $('.formStep').length;
//     $scope.bcForm = $('.becomeContributorForm');

//     $scope.openForm = function() {
//     	//$('.becomeContributorForm').removeClass('hide');
//     	$scope.hideOnSuccess = true;
//     	$('.introText').addClass('hide');
//     	$scope.bcForm.addClass('formOpen');
//     	$scope.bcForm.find('.navOptions p').addClass('fadeIn');
//     	$scope.bcForm.find('.nav li').addClass('fadeIn');
//     	$('.formStep[data-step="1"]').addClass('active');
//     	$scope.highlightNav(1);
//     };

//     $scope.resetForm = function() {
//     	$('.formStep').removeClass('active');
//     	$('.formStep[data-step="1"]').addClass('active');
//     	$scope.bcForm.attr('data-currentstep',1);
//     	$scope.highlightNav(1);
//     };

//     $scope.getNumberOfSteps = function() {
//     	var numberedList = [];
//     	for (var i = 1; i <= $scope.steps; i++) {
//     		numberedList.push(i);
//     	}
// 	    return numberedList;
// 	};

// 	$scope.highlightNav = function(step) {
// 		$('.nav li').each(function() {
// 			if ($(this).data('step') <= step) {
// 				$(this).addClass('completedSteps');
// 				$(this).nextAll().removeClass('completedSteps');
// 			}
// 		});

// 		$scope.bcForm.attr('data-currentstep',step);
// 		$('.contributorFormWrapper').animate({ scrollTop: step * 250 + 'px'});
// 	};

// 	$scope.prevStep = function() {
//     	var nextStep = $('.formStep.active').data('step') - 1;
// 		$('.formStep').removeClass('active');
// 		$('.formStep[data-step="' + nextStep + '"]').addClass('active');

// 		$scope.highlightNav(nextStep);
//     };

//     $scope.nextStep = function() {
//     	var nextStep = $('.formStep.active').data('step') + 1;
// 		$('.formStep').removeClass('active');
// 		$('.formStep[data-step="' + nextStep + '"]').addClass('active');

// 		$scope.highlightNav(nextStep);
//     };

//     $scope.showSuccess = function() {
//     	$scope.highlightNav(4);
//     	$('.bcForm').addClass('mobileHide');
//     	$('.becomeContributorForm.full').find('.bcForm').addClass('hide');
//     	$('.becomeContributorForm.full').find('.introText').addClass('hide');
//     	$('.successMessage').removeClass('mobileHide');
//     	$('.successMessage').removeClass('hide');

//     	$scope.bcForm.find('h2').text('thanks!');
//     };

//     $scope.expandForm = function() {
//     	console.log('expanding');
//     };
// });

// // app.directive('navItems', function() {
// // 	return {
// //         template: '<p>1</p>'
// //     };
// // });

// $(function(){ 

// 	$('.contributorOption').click(function() {
// 		$('.middleStep').addClass('hide');
// 		$('.formStep[data-step="' + $(this).data('showstep') + '"]').removeClass('hide');
// 	});

	
// 	$('.beginForm').click(function() {
// 		amplify.publish( "openBecomeContributorForm" );
// 	});

// 	$('.checkButtonsWrapper span').click(function() {
// 		var doAdd;
// 		var selection = $(this).text(),
// 			optionsParent = $(this).parents('.checkButtonsWrapper'),
// 			submitValue = optionsParent.find('input'),
// 			currentVal = submitValue.attr('value');

// 		if($(this).hasClass('active')) {
// 			$(this).removeClass('active');
// 			doAdd = false;
// 		} else {
// 			$(this).addClass('active');
// 			doAdd = true;
// 		}
		
// 		var newVal = currentVal === ''? [] : currentVal.split(', ');

// 		if(doAdd) {
// 			newVal.push(selection);
// 		} else {
// 			newVal.splice(newVal.indexOf(selection),1);
// 		}

// 		submitValue.attr('value', newVal.join(', '));

// 	});

// });
