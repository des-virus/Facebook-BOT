var app = angular.module('app', ['ngSanitize']);

app.directive('myframe', function($compile) {
  return {
    restrict: 'E',
    scope: {
        link: '='
    },
    template: "<iframe><script src=\"{{link}}\"></script></iframe>",
    link: function(scope, elm, attrs) {
        //elm.find('iframe').contents().find('body').html(scope.body);
    }
  };
});
