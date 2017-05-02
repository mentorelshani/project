
$(document).ready(function(){
    $("#UsersButton").click(function(){
        $.ajax({url: "users.php?f=getUsers", method:"GET", success: function(result){
          var jsonObj = $.parseJSON('[' + result + ']');



           for(var i = 0; i< jsonObj[0].length; i++)
          
           $("#users").append("<div class='row'>"+jsonObj[0][i]['id']+".  "+jsonObj[0][i]['username']+"</div>" );  

     


        }});
    });
});  

$(document).ready(function(){
    $("#updateU").click(function(){
       var values = $(this).serialize();

         $.ajax({
                url: "users.php?f=updateUser",
                type: "post",
                data: values ,
                success: function (response) {
                 
                }


            });
    });
   
});

$(document).ready(function(){
    $("#deleteU").click(function(){
       var values = $(this).serialize();

         $.ajax({
                url: "users.php?f=deleteUser",
                type: "post",
                data: values ,
                success: function (response) {
                 
                }


            });
    });
   
});

$(document).ready(function(){
    $("#addU").click(function(){
       var values = $(this).serialize();
       
         $.ajax({
                url: "users.php?f=insertUser",
                type: "post",
                data: values ,
                success: function (response) {
                 
                }


            });
    });
   
});



