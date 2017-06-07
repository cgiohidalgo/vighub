
/**
 * Created by GHS
 */
(function(githubSearcher) {

    var githubController = function(scope, log, location,githubService) {

        var onSearchComplete = function(data)
        {
            id = data.idconsulta;
            datos = data;
            scope.id = data.idconsulta;
            renderizargrafico();
            scope.list = data.items;
            if(data.total_count > 1000)
                scope.totalResults = 1000;
            else
                scope.totalResults = data.total_count;

            scope.totalPage = scope.totalResults/scope.pageSize;
            scope.pages = [];
        scope.tosave = data.items;
    //scope.tosave['descripcion'] = data.items.description;
            for(var i = 1; i <= scope.totalPage; i++)
            {
                scope.pages.push(i);
        
            }
            
              ////////////////////////
            
            scope.pages1 = [];
            //scope.tosave = data.items;
            scope.tosave1 = ""
            
            for (var i = 0; i < data.items.length; i++){
                 scope.tosave1 += data.items[i].name+"  ";
                /* scope.tosave1 += data.items[i].full_name+"  ";
                 scope.tosave1 += data.items[i].description+"                         ";
                 scope.tosave1 += data.items[i].collaborators_url+"  ";
                scope.tosave1 += data.items[i].owner.login+"  ";
                scope.tosave1 += data.items[Export to JSONi].owner.url+ " ";
                scope.tosave1 += data.items[i].owner.url+ " ";
                scope.tosave1 += data.items[i].owner.login+"  ";
*/

            }
            //scope.tosave += data.items.url;

    //scope.tosave['descripcion'] = data.items.description;
            for(var i = 1; i < scope.totalPage; i++)
            {
                scope.pages1.push(i);
              
            }
            scope.toJSON = angular.toJson(scope.tosave1, scope.tosave);
            //var blob = new Blob([scope.toJSON], { type:"application/json;charset=utf-8;" });
            //saveAs(blob, "archivo");  
            
            //////////////////////////////////////////////////
        };

        var onError = function(err) {
            log.info(err);
        };

        scope.search = function(topic){
            githubService
                        .getResult(topic, scope.page,scope.pageSize)
                        .then(onSearchComplete, onError);
            
        };

        scope.searchistory = function(busqueda){

            console.log("click.registrohistorial",busqueda);
            githubService
                        .getResult(false, false, false, busqueda)
                        .then(onSearchComplete, onError);
        };


        scope.userDetails = function (username) {
            location.path("/user/" + username);
        };
        
        scope.historial=historial;
        
        

        scope.topic = "";
        scope.username = "";
        scope.order = "+owner.login";
        scope.page = 1;
        scope.pageSize = 30;
    
        //scope.save = function () {
            scope.savedJSON = angular.toJson(scope.tosave);
            scope.savedJSON = angular.toJson(scope.tosave1);
    //}
        //scope.function = creararchivo(){
            var blob = new Blob([scope.savedJSON],{type: 'text/plain'});
            scope.enlace = window.URL.createObjectURL(blob);
            console.log(scope.enlace)
            
              scope.crearJSON = function () {
            scope.toJSON = '';
            scope.toJSON = angular.toJson(scope.tosave1, scope.tosave );
            var blob = new Blob([scope.toJSON], { type:"application/json;charset=utf-8;" });
            //saveAs(blob, "/home/archivo");            
            JSON.stringify (scope.toJSON);
            console.log (scope.toJSON.replace("["," "));
                        var downloadLink = angular.element('<a></a>');
                        //downloadLink.attr('href',window.URL.createObjectURL(blob));
                        //downloadLink.attr('download', '/home/fileName.json');
            //downloadLink[0].click();
            
             //window.location = '../home/giovanny/Escritorio/fileName.json'
             
        };
        //scope.function = creararchivo(){
            var blob = new Blob([scope.savedJSON],{type: 'text/plain'});
            scope.enlace = window.URL.createObjectURL(blob);
            console.log(scope.enlace)
            
              scope.crearJSON1 = function () {
            scope.toJSON = '';
            scope.toJSON = angular.toJson(scope.tosave);
            var blob = new Blob([scope.toJSON], { type:"application/json;charset=utf-8;" });            
            JSON.stringify (scope.toJSON);
           // console.log (scope.toJSON.replace("["," "));
                        var downloadLink = angular.element('<a></a>');
                        //downloadLink.attr('href',window.URL.createObjectURL(blob));
                        //downloadLink.attr('download', 'fileNames.json');
            //downloadLink[0].click();
            
             //window.location = '../home/giovanny/Escritorio/fileName.json'
             
        };
        
    };
    
    
    
  
    





    githubController.$inject = ['$scope','$log','$location','githubService'];

    githubSearcher.controller("githubController", githubController);

}(angular.module('githubSearcher')));


/*

(function(githubSearcher) {

    var githubController = function(scope, log, location,githubService) {

        var onSearchComplete = function(data)
        {
            scope.list = data.items;
            if(data.total_count > 1000)
                scope.totalResults = 1000;
            else
                scope.totalResults = data.total_count;

            scope.totalPage = scope.totalResults/scope.pageSize;
            scope.pages = [];
            for(var i = 1; i <= scope.totalPage; i++)
            {
                scope.pages.push(i);
            }
        };

        var onError = function(err) {
            log.info(err);
        };

        scope.search = function(topic){
            githubService
                        .getResult(topic, scope.page,scope.pageSize)
                        .then(onSearchComplete, onError);
        };

        scope.userDetails = function (username) {
            location.path("/user/" + username);
        };

        scope.topic = "";
        scope.username = "";
        scope.order = "+owner.login";
        scope.page = 1;
        scope.pageSize = 30;
    };

    githubController.$inject = ['$scope','$log','$location','githubService'];

    githubSearcher.controller("githubController", githubController);

}(angular.module('githubSearcher'))); 
*/
