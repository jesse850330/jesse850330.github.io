$(function () {
    $('#top').click(function () {
        $('html,body').animate({ scrollTop: '0px' }, 800);
    });

    $('#ct').click(function () {
        $('html,body').animate({ scrollTop: $('#comment').offset().top }, 800);
    });

    $('#ft').click(function () {
        $('html,body').animate({ scrollTop: $('#footer').offset().top }, 800);
    });
});