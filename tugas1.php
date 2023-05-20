<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.css">

    <title>Hello, world!</title>
</head>

<body>
<div class="text-center"><hr>
        <a href="prosesTugas1.php">Daftar Peserta</a><hr>
    </div>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 text-alignt="center">Form Pendaftaran</h1>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <!-- Ini akan berisi halaman form-->
                            <div class="form-floating mb-2">
                                <input type="text" name="nama" class="form-control" id="nama"
                                    placeholder="name@example.com">
                                <label for="fiNama">Nama</label>
                            </div>
                            <div class="form-floating mt-2 mb-2">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="name@example.com">
                                <label for="fiEmail">Email</label>
                            </div>

                            <input type="submit" name="submit" class=" btn
                                btn-success mt-3 col-12" value="Daftar">
                    </div>
                    <div class="card-footer text-center">
                        <div class="spinner-border" role="status" style="display:none;">
                            <span class="visually-hidden">Loading...</span>
                        </div>
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
    $("form").submit(function(event) {
        event.preventDefault();
        var nama = $("#nama").val();
        var email = $("#email").val();
        var formData = {
            nama: nama,
            email: email
        }
        $.ajax({
            type: "POST",
            url: "proses.php",
            data: formData,
            beforeSend: function(resut) {},
            success: function(result) {
                window.location.href = "prosesTugas1.php";
                $("tbody").append(result);
                getData();
            }
        })
    })
    </script>
</body>

</html>