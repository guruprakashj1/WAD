var myApp = angular.module('myApp', []);

myApp.controller('myController', function($scope) {
    var bio = {
        name : "Guru" ,
        age : 25,   
        photo : "./photo.png",
        sayHello : function() {
            return "Hello";
        }
    };

    $scope.bio = bio;
});