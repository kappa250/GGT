$(document).ready(function() {$('select').material_select()});

$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears: 15 // Creates a dropdown of 15 years to control year
});

$('.dropdown-button').dropdown({
inDuration: 300,
outDuration: 225,
constrainWidth: false, // Does not change width of dropdown to that of the activator
hover: false, // Activate on hover
gutter: 0, // Spacing from edge
belowOrigin: true, // Displays dropdown below the button
alignment: 'left', // Displays dropdown with edge aligned to the left of button
stopPropagation: false // Stops event propagation
}
);

$(document).ready(function(){
$('.slider').slider({full_width: true});
});

$(".button-collapse").sideNav();

var options = [
{selector: '#staggered', offset: 400, callback: 'Materialize.showStaggeredList("#staggered")' }
];
Materialize.scrollFire(options);

$(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
$('.modal-trigger').leanModal();
});
