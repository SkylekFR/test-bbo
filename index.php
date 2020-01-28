<?php


?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">


    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">

    <title>BBO TEST</title>
</head>


<body>
<section role="main">
    <span id="test">test</span>
    <script id="test1" type="text/x-handlebars-template">
        <p>{{firstname}} {{lastname}}</p>
    </script>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.2/handlebars.js"></script>

<script>
    $(document).ready(function (event) {
        $('#test').click(function () {
            $.get('getUser.php', function (data, status) {
                var html = $('#test1').html();
                var test = Handlebars.compile(html);
                $('#test').html(test(data));
                console.log(data);
            });
        })
    });

</script>
</body>



