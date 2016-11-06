/**
 * Created by dmarquez on 27/10/16.
 */
app.directive('myLink', function() {
    return {
        restrict: 'A',
        scope: {
            enabled: '=myLink'
        },
        link: function(scope, element, attrs) {
            element.bind('click', function(event) {
                if(!scope.enabled) {
                    event.preventDefault();
                }
            });
        }
    };
});