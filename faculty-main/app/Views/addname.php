<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Document</title>
   <style>

    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
   <div class="container mt-3">
   <h1>add data</h1>
   <form id="add_create" method="post" id="addname" name="addname" 
    action="<?= site_url('/submit-form')?>">
         <div class="form-group">
            <label for="fac_id">Id Faculty</label>
            <input type="text" name="fac_id" class="form-control">
         </div>
         <div class="form-group">
            <label for="fac_name">Faculty Name</label>
            <input type="text" name="fac_name" class="form-control">
         </div>

      <div class="form-group mt-3">
        <button type="submit" class="btn btn-success">Add Data</button>
        <a href="/namelist" class="btn btn-outline-white">Cancel</a>
      </div>

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
         fac_id: {
            required: true,
          },
          fac_name: {
            required: true,
          },
        },
        messages: {
         fac_id: {
            required: "Id is required.",
          },
          fac_id: {
            required: "Faculty is required.",
          },
        },
      })
    }
  </script>

</body>
</html>