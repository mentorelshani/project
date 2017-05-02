
 <?php 


 if(function_exists($_GET['f'])) {
  $_GET['f']();
 }
 else{
 	echo "Nuk eksiston";
 }


 function getRatings(){  

	
    require 'db.php';


	 $query = pg_query($db, "SELECT * FROM ratings ORDER BY id"); 
	 $result = pg_fetch_all($query);
	 print_r(json_encode($result));

}

 function topThree(){  

  
   require 'db.php';


   $query = pg_query($db, "select workid from ratings group by workid order by count (true) desc limit 3"); 
   $result = pg_fetch_all($query);
   print_r(json_encode($result));

}

function insertRatings(){

  require 'db.php';



        $id = pg_escape_string($_POST['id']); 
        $usersId = pg_escape_string($_POST['usersId']);
        $workId = pg_escape_string($_POST['workId']);
        $likes = pg_escape_string($_POST['likes']);
        $comment = pg_escape_string($_POST['comment']);

       
      $result = pg_query($db, "INSERT INTO ratings (id,usersId,workId,likes,comment) VALUES('  $id  ', '  $usersId  ' , '$workId' , 'likes' ,'comment')");

}

function deleteRating(){

   require 'db.php';



        $id = pg_escape_string($_POST['id']); 

       
      $result = pg_query($db, "DELETE FROM ratings WHERE id = $id");

}

function updateRating(){


   require 'db.php';

        $id = pg_escape_string($_POST['id']); 
        $usersId = pg_escape_string($_POST['usersId']);
        $workId = pg_escape_string($_POST['workId']);
        $likes = pg_escape_string($_POST['likes']);
        $comment = pg_escape_string($_POST['comment']);
       
      $result = pg_query($db, "UPDATE users set  usersId='$usersId' , workId='$workId' , likes = '$likes' , comment = '$comment' where id = $id ");
 
}

 ?>