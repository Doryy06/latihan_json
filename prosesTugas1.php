 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
 </head>

 <body>
     <div class="text-center">
         <hr>
         <a href="tugas1.php">Form Pendaftaran</a>
         <hr>
     </div>
     <div class="container mt-3">
         <div class="row justify-content-center">
             <div class="col-12">
                 <div class="card">
                     <div class="spinner-border" role="status" style="display:none;">
                         <span class="visually-hidden">Loading...</span>
                     </div>
                     <div class="table-responsive">
                         <table class="table">
                             <thead class="table-dark">
                                 <tr>
                                     <th>Nama</th>
                                     <th>Email</th>
                                 </tr>
                             </thead>
                             <tbody>

                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <script src="jquery-3.6.4.min.js">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
     </script>
     <script>
     $(document).ready(function() {
         getData();

         function getData() {
             $.ajax({
                 type: "GET",
                 url: "getData.php",
                 beforeSend: function(resut) {},
                 success: function(result) {
                     $("tbody").html(result);
                 }
             })
         }
     })
     </script>
 </body>

 </html>