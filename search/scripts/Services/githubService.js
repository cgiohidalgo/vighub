/**
 * Created by GHS
 */
(function(){

    var githubService = function(http, log){

        var getResult = function(topic, page, pageSize, id){
            var url="../search/prueba.php?q=" + topic + "&page=" + page + "&per_page=" + pageSize;
            if(id){
                url="../search/prueba.php?cache=true&id="+id;
            }

            return http.get(url)
                .then(function(response){
                    return response.data;
                });
        };
        
        var getUser = function(username)
        {
            return http.get("https://api.github.com/users/" + username)
                .then(function(response){
                    return response.data;
                });
        };

        return {
            getResult: getResult,
            getUser: getUser
        };

    };

    githubService.$inject = ['$http','$log'];

    var module = angular.module("githubSearcher");
    module.factory("githubService", githubService);

}());
