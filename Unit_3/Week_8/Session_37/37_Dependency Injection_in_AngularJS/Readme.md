What is dependency injection in angularjs?
Dependency injection is a software design pattern that deals with how components get hold of their dependencies. The Angular injector subsystem is in charge of creating components, resolving their dependencies, and providing them to other components as requested.

dependency injection in angularjs syntax
The syntax for dependency injection in angularjs is as follows:

angular.module('myApp', [])
.controller('MyController', ['$scope', 'greeter', function($scope, greeter) {
  // ...
}]);    

In the above example, the controller function is passed an array of strings, which are the names of the dependencies to inject. The last element in the array is the controller function itself, and the names of the dependencies are listed before it. The injector will create the dependencies and pass them to the controller function as arguments in the same order as the names in the array.
