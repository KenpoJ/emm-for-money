$(document).ready(function() {
	

$(function() {
	$('[data-toggle="popover"]').popover();
});

// ================ EXPENSES ====================
// https://daveismyname.blog/duplicate-form-sections-with-jquery

var expTemplate = $('.expense-container .expense:first').clone();
var expenseCnt = 1;

// Add expense inputs
$('.add-expense').click(function() {
	expenseCnt++;
	addExpense();
	return false;
});

// Remove expense inputs
$('.expense-container').on('click', '.remove-expense', function(e) {
	$(this).parent().parent().fadeOut(300, function() {
		$(this).empty();
		return false;
	});
	return false;
});

function addExpense() {
	var newExpense = expTemplate.clone().find(':input').each(function() {
		var newName = this.name + expenseCnt;
		this.name = newName;
	}).end()
	.appendTo('.expense-container');
}


// ================= ALLOWANCES ==================
var alwTemplate = $('.allowance-container .allowance:first').clone();
var allowanceCnt = 1;

// Add allowance inputs
$('.add-allowance').click(function() {
	allowanceCnt++;
	addAllowance();
	return false;
});

// Remove allowance inputs
$('.allowance-container').on('click', '.remove-allowance', function(e) {
	$(this).parent().parent().fadeOut(300, function() {
		$(this).empty();
		return false;
	});
	return false;
});
function addAllowance() {
	var newAllowance = alwTemplate.clone().find(':input').each(function() {
		var newId = this.name + allowanceCnt;
		this.id = newId;
	}).end()
	.appendTo('.allowance-container');
}

// HERO IMAGE CONTROLS 
getHeroImage();

function getHeroImage() {
	if($('body').hasClass('page-id-6')) {
		console.log('getHeroImage()');
		$('.jumbotron').css({
			'background': 'red',
			'background-image': 'none'
		})
	}
}



})