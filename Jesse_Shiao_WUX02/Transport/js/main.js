//place list
var places = null;
//vehicle list
var vehicles = null;
//numbers of days
var daysinput = $("#number-d");
//numbers of peoples
var peoplesinput = $("#number-p");

//find DOM elements
var placeList = $('.place-list'),
    vehicleList = $('.vehicle-list'),
    filterButton = $('.filter-button'),
    output1 = $('#output1'),
    output2 = $('#output2'),
    totalOutput = $('.v-info');


$(function () {
    /**
     * Initialise the app.
     */
    function init() {
        //get place from JSON file
        $.getJSON('json/place.json', function (data) {
            places = data.places;
            displayPlaces(places);
        });
        //get vehicle from JSON file
        $.getJSON('json/vehicle.json', function (data) {
            vehicles = data.vehicles;
            displayVehicles(vehicles);
        });
        filterButton.on("click", function () {
            displayFilteredVehicles()
        });
        totalOutput.on("click", function () {
            getTotalOutput();
        });
    }

    /**
     * Get the HTML template for each place list item.
     * @param  {Place} place
     */
    function getHTMLPlacesItem(place) {
        return `<option id="${place.id}" value="${place.category}">
                ${place.title}</option>`;
    }

    /**
     * Display vehicle list.
     * @param  {Vehicle} vehicleList
     */
    function getHTMLVehiclesItem(vehicle) {
        return `<li class="vehicle-list--item" id="${vehicle.id}" onClick="openNav1()">
                <div class="v-image">
                <img src="${vehicle.image}">
                </div>
                <div class="v-info">
                <h2>${vehicle.category}</h2>
                <h3>${vehicle.title}</h3>
                <p>${vehicle.detail}</p>
                <b>Min ${vehicle.mind} / Max ${vehicle.maxd} Days</b>
                </div>
                </li>`;
    }

    /**
     * Display total distance.
     * @param  {Place} place
     */
    function getHTMLDistanceItem(place) {
        var distance1 = place.distance1;
        var distance2 = place.distance2;
        var totaldistance = distance1 - distance2;
        return `${totaldistance}<b>Km</b>`;
    }

    /**
     * Display total price.
     * @param  {Output2} output2
     */
    function getHTMLPricesItem(vehicle) {
        var days = daysinput.val();
        var price = vehicle.price;
        var totalprice = days * price;
        return `${totalprice}<b>$</b>`;
    }

    /**
     * Display a list of places.
     * @param  {Array<Place>} places
     */
    function displayPlaces(places) {
        var s = '';
        $.each(places, function (i, place) {
            s = s + getHTMLPlacesItem(place);
        });
        var x = '';
        $.each(places, function (i, place) {
            x = getHTMLDistanceItem(place);
        });
        //set inner HTML of place list container with items
        placeList.html(s);
        output1.html(x);
        //target the place
        var places = $('.place-list--item');
        var places = $('.output1--item');
    }

    /**
     * Display a list of vehicles.
     * @param  {Array<Vehicle>} vehicles
     */
    function displayVehicles(vehicles) {
        var s = '';
        $.each(vehicles, function (i, vehicle) {
            s = s + getHTMLVehiclesItem(vehicle);
        });
        var x = '';
        $.each(vehicles, function (i, vehicle) {
            x = getHTMLPricesItem(vehicle);
        });
        //set inner HTML of vehicle list container with items
        vehicleList.html(s);
        output2.html(x);
        //target the vehicles
        var vehicles = $('.vehicle-list--item');
        var vehicles = $('.output2--item');

    }

    /**
     * Filter a list of vehicles option by numbers of days.
     * @param  {Array<Vehicle>} vehicles
     */
    function filterByNumberOfDays(vehicles) {
        var filtereditemsDays = [];
        var numbersofdays = daysinput.val();
        $.each(vehicles, function (i, vehicle) {
            if (numbersofdays >= vehicle.mind && numbersofdays <= vehicle.maxd) {
                filtereditemsDays.push(vehicle);
            }
        });
        return filtereditemsDays;
    }

    /**
     * Filter a list of vehicles option by numbers of peoples.
     * @param  {Array<Vehicle>} vehicles
     */
    function filterByNumberOfPeoples(vehicles) {
        var filtereditemsPeoples = [];
        var numbersofpeoples = peoplesinput.val();
        $.each(vehicles, function (i, vehicle) {
            if (numbersofpeoples >= vehicle.minp && numbersofpeoples <= vehicle.maxp) {
                filtereditemsPeoples.push(vehicle);
            }
        });
        return filtereditemsPeoples;
    }

    /** 
     * Display a list of vehicles option.
     */
    function displayFilteredVehicles() {
        var filteredVehicles = filterByNumberOfDays(vehicles);
        filteredVehicles = filterByNumberOfPeoples(filteredVehicles);
        displayVehicles(filteredVehicles);
    }

    function getTotalOutput() {
        getHTMLDistanceItem(place);
        getHTMLPricesItem(vehicle);
    }

    init();

});