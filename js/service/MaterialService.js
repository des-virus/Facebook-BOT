app.factory('MaterialService', function ($http, $q, $log, $rootScope) {
    var factory = {};
    var contextURL = "https://uncircumscribed-sit.000webhostapp.com/";

    //<editor-fold defaultstate="collapsed" desc="Get: Menu">
    factory.getMenu = function () {
        return  $http.get(contextURL + 'db/menu.php').then(
                function (response) {
                    return response.data;
                },
                function (response) {
                    $log.error(response.data);
                }
        );
    };
    
    factory.getMenuDetail = function(menu_id){
       return  $http.get(contextURL + 'db/menu_detail.php?menu_id=' + menu_id).then(
                function (response) {
                    return response.data;
                },
                function (response) {
                    $log.error(response.data);
                }
        ); 
    };


    factory.getMenuCSRF = function () {
        return $http({
            method: 'JSONP',
            url: contextURL + 'db/menu.php'
        }).
                success(function (response) {
                    return response.data;
                }).
                error(function (response) {
                    $log.error(response.data);
                });
    }
    //</editor-fold>
    return factory;
});