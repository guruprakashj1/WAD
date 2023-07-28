angular.module('flightApp').controller('FlightDetailsController', function($routeParams) {
    var vm = this;
  
    vm.flight = null;
  
    // Simulate API call to fetch flight details based on flight ID from the route parameter
    // Replace this with actual API call to fetch flight details from the server
    function getFlightDetails(flightId) {
      // Simulate API call delay
      setTimeout(function() {
        // Sample flight data (replace with API response)
        var flightData = {
          id: flightId,
          flightNumber: 'ABC123',
          departure: 'New York',
          arrival: 'Los Angeles',
          departureTime: '08:00 AM',
          arrivalTime: '11:00 AM',
          price: 200
        };
  
        // Set flight details
        vm.flight = flightData;
        // Trigger AngularJS digest cycle to update the view
        vm.$apply();
      }, 1000);
    }
  
    // Call the function to get flight details using the flight ID from the route parameter
    getFlightDetails($routeParams.flightId);
  
    // Function to book the flight
    vm.bookFlight = function() {
      // Implement the booking functionality here.
      // You can use AngularJS services or make an API call to book the flight.
      // For this example, we'll just show an alert to indicate the booking.
      alert('Flight booked successfully!');
    };
  });
  