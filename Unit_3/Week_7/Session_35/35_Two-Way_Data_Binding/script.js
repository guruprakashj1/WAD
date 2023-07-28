// chat application with two-way data binding with angualrjs

var app = angular.module('myApp', []);

app.controller('myController', function($scope) {

    $scope.messages = [];
    $scope.handle = "";
    $scope.message = "";

    $scope.addMessage = function() {
        $scope.messages.push({
            handle : $scope.handle,
            message : $scope.message
        });
        $scope.message = "";
    };
}
);


