
<?php
$pb = new PlantillaBase();
class PlantillaBase{

    public function __construct()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>PLANTILLA</title>
            <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        </head>
        <body>
        <?php
    }


    public function __destruct()
    {
        ?>
        </body>
        </html>
        <?php
        
    }
}
