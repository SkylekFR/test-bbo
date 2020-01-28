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
    <div id ="1" class="container">

    </div>
        <button class="btn btn-primary">Ajouter un user</button>


</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.2/handlebars.js"></script>

<script>
    $(document).ready(function (event) {

        $.get('getUser.php', function (data, status) {
            var myTemplate = ' <div class="row">\n' +
                '            {{#each .}}\n' +
                '            <ul class="col-md-6">\n' +
                '                <li> Firstname: {{this.firstname}}</li>\n' +
                '                <li> Lastname: {{this.lastname}}</li>\n' +
                '                <li> Age: {{this.age}}</li>\n' +
                '                <li> Address: {{this.address}}</li>\n' +
                '            </ul>\n' +
                '            {{/each}}\n' +
                '        </div>'
            var compiledTemplate = Handlebars.compile(myTemplate);

            const u = JSON.parse(data);
            console.log('test');
            $('#1').html(compiledTemplate(u));
        });

    });

</script>
</body>



