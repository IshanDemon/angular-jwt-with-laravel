<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Angular-Laravel Authentication</title>
        <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.css">
    </head>
    <body ng-app="authApp">

        <div class="container">
            <div ui-view></div>
        </div>        

    </body>

    <!-- Application Dependencies -->
    <script src="assets/angular/angular.js"></script>
    <script src="assets/angular-ui-router/release/angular-ui-router.js"></script>
    <script src="assets/satellizer/dist/satellizer.js"></script>

    <!-- Application Scripts -->
    <script src="scripts/app.js"></script>
    <script src="scripts/authController.js"></script>
    <script src="scripts/userController.js"></script>
</html>