$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});


// $(document).ready(function(){
//     $('.activation').hover(function(){
//         $('.activation').removeClass('selection');
//         $(this).addClass('selection');
//     })
// })

// $('.activation1').on('click', function() {
//     $(this).toggleClass("active");
//     $(this).addClass('unactive');
// });

