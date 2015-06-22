angular.module('myApp', []).controller('nameCtrl', function($scope, $http) {
    $http.get("http://www.w3schools.com/angular/customers.php").success(function(respone) {
        $scope.name = respone.records;
    });

});