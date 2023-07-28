
var myApp = angular.module('myApp', []);

myApp.controller('myController', function($scope) {
    var bio = {
        fname : 'Guru',
        age : 20,
        photo : "photo.png",
        sayHello : function() {
        return 'Hello World!';
    }
};
$scope.bio = bio;

$scope.sayHello = function() {
    document.getElementById("demo").innerHTML = "Hello World!";
}
});
