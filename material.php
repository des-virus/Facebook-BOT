<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta charset="UTF-8">
        <title>Material | MinhPhong306 - Make things simple</title>

        <link href="css/lib/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/lib/angular.min.js" type="text/javascript"></script>
        <script src="js/lib/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/lib/bootstrap.min.js" type="text/javascript"></script>

        <link href="css/custom/custom.css" rel="stylesheet" type="text/css"/>

        <link href="css/lib/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <script src="js/lib/perfect-scrollbar.js" type="text/javascript"></script>

        <script src="js/module/app.js" type="text/javascript"></script>
        <script src="js/service/MaterialService.js" type="text/javascript"></script>
        <script src="js/controller/MaterialController.js" type="text/javascript"></script>



    </head>
    <body>
        <?php
        require './partial/nav.php';
        ?>
        <div ng-controller="MaterialCtrl">
            <div class="col-md-3" >
                <div class="panel panel-success">
                    <div class="panel-heading">Danh mục material</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item custom_groupitem_click" ng-repeat="item in menus track by $index" ng-click="chooseMenu(item)">{{item.name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-9"   id="col-perfect" style="height: 500px">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Material cho {{selected_menu.name}}</div>
                        <div class="panel-body">
                            <img src="image/gears.gif" ng-if="is_loading">

                            <!-- Table of content -->
                            <div id="table_of_content" class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="panel-title"><a href="#table_of_content"><b><i class="fa fa-home">^</i></b></a>
                                        Mục lục
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Tên mục</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="item in data">
                                                    <td><a href="#{{item.id_string}}">{{item.title}}</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>		
                            <!-- End Table of content -->

                            <div class="panel panel-default" ng-repeat="item in data track by $index">
                                <div class="panel-heading" id="{{item.id_string}}">{{item.title}}</div>
                                <div class="panel-body">
                                    {{item.content}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require './partial/footer.php';
        ?>
    </body>
</html>