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
    <button class="btn btn-primary btn-hilang">tombol 1</button>
    <button class="btn btn-primary btn-muncul">tombol 2</button>
    <button class="btn btn-primary btn-toggle">tombol 3</button>
    <h1>ini adalah text h1</h1>
    <script src="jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".btn-hilang").click(function() {
            $("h1").hide();
        })
        $(".btn-muncul").click(function() {
            $("h1").show();
        })
        $(".btn-toggle").click(function() {
            $("h1").toggle();
        })
    })
    </script>

</body>

</html>