 <?php


 if(function_exists($_GET['f'])) {
  $_GET['f']();
 }
 else{
 	echo "Nuk eksiston";
 }
 
 function getUsers(){  

    require 'db.php';

  	 $query = pg_query($db, "SELECT * FROM users ORDER BY id"); 
	    $result = pg_fetch_all($query);
	   print_r(json_encode($result));

}


function insertUsers(){


  
  require 'db.php';

        $id = pg_escape_string($_POST['id']); 
        $username = pg_escape_string($_POST['username']); 
     
      $result = pg_query($db, "INSERT INTO users(id, username) VALUES('  $id  ', '  $username  ')");

}

function deleteUsers(){

   require 'db.php';

        $id = pg_escape_string($_POST['id']); 
      
      $result = pg_query($db, "DELETE FROM users WHERE id = $id");

}

function updateUsers(){

   require 'db.php';

        $id = pg_escape_string($_POST['id']); 
        $username = pg_escape_string($_POST['username']); 
       
      $result = pg_query($db, "UPDATE users set username = '$username' where id = $id ");
  
}

 ?>