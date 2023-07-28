What is module in AngularJS?

A module is a container for the different parts of an application like controller, services, filters, directives etc. The module is a container for the application controllers. Controllers always belong to a module.
syntax:
var app = angular.module('myApp', []);

The above code creates an AngularJS module named myApp. The empty array in the syntax above will be used to inject the dependencies into the application. We will discuss dependency injection in detail in the next chapter.

What is controller in AngularJS?

A controller is defined using ng-controller directive. A controller is a JavaScript object containing attributes/properties and functions. Each controller accepts $scope as a parameter which refers to the application/module that controller is to control.

The controller function is executed immediately when the controller is loaded, allowing the properties and functions to be initialized before the page is rendered.

Syntax:
var myController = function($scope) {
    $scope.message = "Hello World";
}
The above code creates a controller named myController. The controller function accepts $scope as a parameter. The $scope object is used to bind the data between the controller and view.

What is scope in AngularJS?

Scope is an object that refers to the application model. It is an execution context for expressions. Scopes are arranged in hierarchical structure which mimic the DOM structure of the application. Scopes can watch expressions and propagate events.

Scopes are objects that refer to the model. They act as glue between controller and view.


