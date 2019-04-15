
$(document).ready(() =>
{ 
$('.pic').click(function() {
    $(this).toggleClass('active');
    $('.backdrop').toggleClass('underlay');
});
});
