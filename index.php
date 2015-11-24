
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #333;}</style>
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>A Simple PHP app that displays phpinfo</h1>
                <h2>Congratulations Vikas!</h2>
                <p>HostName: &ldquo;<?php echo gethostname(); ?>&rdquo;
                and PHP version : <?php echo phpversion(); ?>.</p>
                <p><?php echo phpinfo(); ?></p>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>

</html>
