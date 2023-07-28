// Create the main AngularJS module
angular.module('flightApp', ['ngRoute']);

// Configure AngularJS routing
angular.module('flightApp').config(function($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl: 'views/flight-search.html',
      controller: 'FlightSearchController',
      controllerAs: 'flightSearch'
    })
    .when('/flight/:flightId', {
      templateUrl: 'views/flight-details.html',
      controller: 'FlightDetailsController',
      controllerAs: 'flightDetails'
    })
    .when('/booking/:flightId', {
      templateUrl: 'views/flight-booking.html',
      controller: 'FlightBookingController',
      controllerAs: 'flightBooking'
    })
    .otherwise({
      redirectTo: '/'
    });
});
