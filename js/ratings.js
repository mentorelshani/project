$(document).ready(function(){
    $("#RatingsButton").click(function(){
        $.ajax({url: "ratings.php?f=getRatings", method:"GET", success: function(result){
        	var jsonObj = $.parseJSON('[' + result + ']');



        	 for(var i = 0; i< jsonObj[0].length; i++)
        	
     			 $("#ratings").append("<div class='row'>"+jsonObj[0][i]['id']+".  "+jsonObj[0][i]['usersid']+".    "+jsonObj[0][i]['workid']+".   "+jsonObj[0][i]['likes']+".     "+jsonObj[0][i]['comment']+"</div>" );  

     


        }});
    });
});

$(document).ready(function(){
    $("#Top3").click(function(){
        $.ajax({url: "ratings.php?f=topThree", method:"GET", success: function(result){
          var jsonObj = $.parseJSON('[' + result + ']');



           for(var i = 0; i< jsonObj[0].length; i++)
          
           $("#ratings").append("<div class='row'>"+"workid :  "+jsonObj[0][i]['workid']+"</div>" );  

     


        }});
    });
});