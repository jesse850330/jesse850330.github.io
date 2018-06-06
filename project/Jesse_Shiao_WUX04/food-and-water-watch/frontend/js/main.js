/**
 * File main.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
(function () {
    $('#detail-card').on('keyup mouseout input',function(e){
        if((e.which >= 48 && e.which <= 57) ||(e.which >= 96 && e.which <= 105 )){
            var $this = $(this),
                v = $this.val();
            /\S{5}/.test(v) && $this.val(v.replace(/\s/g,'').replace(/(.{4})/g, "$1 "));
        }
    });
})();