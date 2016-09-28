/**
 * Created by dmarquez on 19/09/16.
 */
var app = angular.module('app', ['ngMaterial']);

app.config(function ($interpolateProvider) {

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

});

