<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Document</title>

<div class="container mt-4">

   <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
   ?>

<h1>Faculty list</h1>

   <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/addname') ?>" class="btn btn-primary">Add data</a>
	</div>

  <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Id Faculty</th>
             <th>Faculty Name</th>
          </tr>
       </thead>
       <tbody>
      
      
         
       </tbody>
     </table>
  </div>
</div>
 
</body>
</html>