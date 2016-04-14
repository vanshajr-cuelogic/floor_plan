app.factory('cuelogicEmployee', ['$http', function($http) {  
  return $http.get('http://cuelogic-phrms-dev.herokuapp.com/index.php/csi/employees') 
            .success(function(data) { 
              return data; 
            }) 
            .error(function(err) { 
              return err; 
            }); 
}]);
