<?php include('server.php'); ?>   
<html>
<head>
    <title>Blog viewpage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>



<div class="container">
  <div class="row">
  <div class="col-md-4 offset-md-4">

  <form action="blogcreate.php" method="POST">
  <div class="form-group">
    <label><h6>Title:</h6></label>
    <input type="text" name="title" class="form-control" placeholder="Enter title" >
    <br>
  </div>   
  <select name="category">
    <option >Category:</option>
    <option >Politics</option>
    <option >Film-industry</option>
    <option >Education</option>
    <option >Management</option>
    <option >other</option>
  </select>
    <div class="form-group">
          <label><h6>Description:</h6></label>
          <textarea rows="5" cols="10" name="desc" class="form-control"  placeholder="Enter blog description" >
          </textarea>
    </div>
           <br>
    
          

         <div class="form-group">
         <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
         </div>
  
  </form>
                
  
 </div>
 </div>
 </div>
 </body>
 </html>

                     

