angular.module('flightApp').controller('FlightSearchController', function() {
    var vm = this;
  
    vm.flightSearch = {
      departure: '',
      arrival: '',
      date: '',
      passengers: 1,
      flightResults: []
    };
  
    vm.searchFlights = function() {
      // Here you would typically make an API request to fetch flight search results based on the user's input.
      // For this example, we'll just simulate some sample data.
  
      // Clear previous results
      vm.flightSearch.flightResults = [];
  
      // Sample flight data (replace with API response)
      var flights = [
        {
          id: 1,
          flightNumber: 'ABC123',
          departure: 'New York',
          arrival: 'Los Angeles',
          price: 200
        },
        {
          id: 2,
          flightNumber: 'XYZ789',
          departure: 'Chicago',
          arrival: 'San Francisco',
          price: 250
        },
        // Add more sample flights here...
      ];
  
      // Simulate API response delay
      setTimeout(function() {
        vm.flightSearch.flightResults = flights;
        // Trigger AngularJS digest cycle to update the view
        vm.$apply();
      }, 1000);
    };
  });
  