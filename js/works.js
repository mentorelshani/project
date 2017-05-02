
$(document).ready(function(){
    $("#WorksButton").click(function(){
        $.ajax({url: "works.php?f=getWorks", method:"GET", success: function(result){
                var jsonObj = $.parseJSON('[' + result + ']');

           for(var i = 0; i< jsonObj[0].length; i++)
           $("#ratings").append("<div class='row'>"+jsonObj[0][i]['id']+"    .    "+jsonObj[0][i]['title']+".      "+jsonObj[0][i]['content']+"</div>" );
  
        }});
    });
});