<!DOCTYPE html>
<html lang="en">

   <head>

      <title>Project one</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">

   </head>

   <body>

      <div class="container mt-5 w-50 border p-3 rounded">
         <h2>Register page</h2>

         <form id="form_name" action="#" method="POST" enctype="multipart/form data">
            <div class="mb-3 mt-3">
               <label for="first_name">First name:</label>
               <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name">
            </div>
            <div class="mb-3 mt-3">
               <label for="last_name">Last name:</label>
               <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name">
            </div>
            <div class="mb-3 mt-3">
               <label for="email">Email:</label>
               <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
               <label for="mobile">Mobile:</label>
               <input type="number" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile">
            </div>
            <div class="mb-3">
               <label for="password">Password:</label>
               <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
           <div class="mb-3">
               <label for="document">Document:</label>
               <input type="file" class="form-control" id="document" placeholder="Browse document" name="document">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>

      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
      <script type="text/javascript">
        $(document).ready(function(){

         $("#form_name").validate({
           rules: {

             // simple rule, converted to {required:true}
             first_name: "required",
             last_name: "required",

           },
           messages: {
            first_name: "Please enter your first name",
            last_name: "Please enter your last name"
           }
         });

         });
         // document.ready tar mane
      </script>

   </body>

</html>