app.controller('MaterialCtrl', function ($scope, $rootScope, $filter, MaterialService) {

    $scope.menus = [];
    $scope.data = [];
    $scope.selected_menu = {};
    $scope.is_loading;

    $scope.getMenu = function () {
        MaterialService.getMenu().then(function (response) {
            $scope.menus = response;
        });

    };

    $scope.chooseMenu = function (menu) {
        $scope.selected_menu = menu;
        console.log($scope.selected_menu);
        $scope.is_loading = true;
        MaterialService.getMenuDetail(menu.id).then(function (response) {
            $scope.is_loading = false;
            $scope.data = response;
            console.log(response);
        });
    };

    $scope.getMenu();
});
