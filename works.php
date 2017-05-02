 <?php

 if(function_exists($_GET['f'])) {
  $_GET['f']();
 }
 else{
 	echo "Nuk eksiston";
 }

 function findAll(){  
 
    require 'db.php' ;	

	 $query = pg_query($db, "SELECT * FROM works ORDER BY id"); 
	   $result = pg_fetch_all($query);
    print_r(json_encode($result));

}

function insertWorks(){

  require 'db.php';



        $id = pg_escape_string($_POST['id']); 
        $title = pg_escape_string($_POST['title']);
        $content = pg_escape_string($_POST['content']);
        
        

       
      $result = pg_query($db, "INSERT INTO works (id,title,content) VALUES('  $id  ', '  $title  ' , '$content' )");

}

function deleteWorks(){

   require 'db.php';



        $id = pg_escape_string($_POST['id']); 

       
      $result = pg_query($db, "DELETE FROM works WHERE id = $id");

}

function updateWorks(){


   require 'db.php';



        $id = pg_escape_string($_POST['id']); 
        $title = pg_escape_string($_POST['title']);
        $content = pg_escape_string($_POST['content']);
        
       
      $result = pg_query($db, "UPDATE users set  title ='$title' , content ='$content' where id = $id ");
 
}

 ?>