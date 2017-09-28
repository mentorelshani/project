<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Piktura</title>
</head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
<script src="js/users.js"></script>
<script src="js/works.js"></script>
<script src="js/ratings.js"></script>
<script src="js/test.js"></script>



<body>
<style>

	#adminpage {float: left;border-style: solid;width: 100%;position: relative; }

	.links {border-style: solid; height:80%;width:45%;position: fixed; left:50%; top :20%;}

	.border {border-style: solid; height:80%;width: 45%;position: fixed;left: 5%;top: 20% }


</style>
<div class="container-fluid">
  <div class = "row-fluid">
             ADD A USER 


 
        <form id="addU"> 

   
            <label> Id: </label> <input type="number" name="id" > 
            <label>  Username :</label> <input type="text" name="username" > 
            <input type="submit" name="submit" class="btn btn-success" value="Add user"> 
            <input type="reset" name="reset" class="btn btn-default" value="Clear It"> 
  
        </form>
 
   </div>




<div class="row-fluid">
             DELETE A USER BY ID 


    <form id = "deleteU">

      <label> Id:</label>
      <input type="number" name="id">
      <input type="submit" name="submit" class="btn btn-danger" value="Delete user"> 
      <input type="reset" name="reset" class="btn btn-default" value="Clear It"> 

    </form>

</div>
 
<div class="row-fluid">
              CHANGE USERNAME 
 
        <form id="updateU" > 

                <label> Id: </label> <input type="number" name="id" > 
                <label>  Username :</label> <input type="text" name="username" > 
                <input type="submit" name="submit" class="btn btn-success" value="Update user"> 
                <input type="reset" name="reset" class="btn btn-default" value="Clear It"> 


        </form> 

</div>

<div class="row-fluid">
  <input type="button" value="Ratings" id="RatingsButton" />

  <input type="button" value="Works" id="WorksButton" />

  <input type="button" value="Users" id="UsersButton" />

  <input type="button" value="Top three works" id="Top3" />

  <input type="button" value="test" id="testButton" />

</div>
</div>
<div class="links">
<div id='users'></div>
<div id='ratings'></div>
<div id='works'></div>

</div>

<div class = "border">
	<div class="container">           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Username</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
</div>




</body>

</html> 
