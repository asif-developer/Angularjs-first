<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/4.1.6/css/foundation.min.css">
<script src="https://rawgithub.com/angular-ui/angular-ui/master/build/angular-ui.js"></script> 
<script type="text/javascript" src="script.js"></script>
<style>

body {
    font-family:"HelveticNeue", sans-serif;
    font-size: 14px;
    padding: 20px;
}
h2 {
    color: #999;
    margin-top: 0;
}
.field {
    margin-bottom: 1em;
}
.click-to-edit {
    display: inline-block;
}
input {
    display: initial !important;
    width: auto !important;
    margin: 0 5px 0 0 !important;
}
</style>
<div ng-app="formDemo" ng-controller="LocationFormCtrl">
    <div class="panel">
         <h2>Editors</h2>

        <div class="field"> <strong>Region:</strong>
            <div click-to-edit="location.region"></div>
        </div>
        <div class="field"> <strong>City:</strong>
            <div click-to-edit="location.city"></div>
        </div>
        <div class="field"> <strong>Suburb:</strong>
            <div click-to-edit="location.suburb"></div>
        </div>
    </div>
    <div class="panel callout">
         <h2>Values</h2>

        <p><strong>Region:</strong> {{location.region}}</p>
        <p><strong>City:</strong> {{location.city}}</p>
        <p><strong>Suburb:</strong> {{location.suburb}}</p>
    </div>
</div>