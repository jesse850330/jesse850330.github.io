function getPrice() {
    var p = vehicle.price;
    var d = $("#number-d").val();
    var totalprice = p*d;
    return `<p>${totalprice}</p>`;
}

    /**
     * Display travel prices.
     * @param  {Array<Price>} prices
     */
    function displayDistance(output) {
        var s = '';
        $.each(output, function() {
            s = s + getPrice();
        });
        //set inner HTML of travel prices
        price.html(s);

        //target the prices
        var output = $('.output--item');
    }

        /**
     * Price.
     * @param  {Array<Price>} price
     */
    function getPrice() {
        var x = event.target;
        var p = x.id.val();
        var d = daysinput.val();
        var totalprice = p * d;
        return totalprice;
    }

    /**
     * Display travel prices.
     * @param  {Array<Price>} prices
     */
    function displayDistance(output) {
        var s = '';
        $.each(output, function () {
            s = s + getPrice();
        });
        //set inner HTML of travel prices
        price.html(s);

        //target the prices
        var output = $('.output--item');
    }

    /**
     * Display price.
     * @param  {Array<Price>} price
     */
    function displayPrice(outputprice) {
        var days = daysinput.val();
        var price = ;
    }

    