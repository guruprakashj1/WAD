## 1. AngularJS MVC Architecture

- AngularJS is a MVC framework for web application development.

- AngularJS MVC architecture is based on the following three important parts.

- MVC stands for Model, View and Controller.

- Model: Model represents the shape of the data and business logic. It maintains the data of the application. Model objects retrieve and store model state in the persistance store like a database.

- View: View is a user interface. View display data using model to the user and also enables them to modify the data.

- Controller: Controller handles the user request. Typically, user interact with view, view raise events, controller response to those events and interact with model and update the view as per model state.

## 3. AngularJS MVC Example
- Let's see the simple example of AngularJS MVC architecture.

- In this example, we are going to create a simple student model and view. The controller will handle the request and update the view as per model state.

- We are going to create a student model and view. The controller will handle the request and update the view as per model state.

What is dependency injection in angularjs?
Dependency injection is a software design pattern that deals with how components get hold of their dependencies. The Angular injector subsystem is in charge of creating components, resolving their dependencies, and providing them to other components as requested.

dependency injection in angularjs syntax
The syntax for dependency injection in angularjs is as follows:

angular.module('myApp', [])
.controller('MyController', ['$scope', 'greeter', function($scope, greeter) {
  // ...
}]);    

In the above example, the controller function is passed an array of strings, which are the names of the dependencies to inject. The last element in the array is the controller function itself, and the names of the dependencies are listed before it. The injector will create the dependencies and pass them to the controller function as arguments in the same order as the names in the array.
