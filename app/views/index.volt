<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Phalcon PHP Framework</title>
        {{ stylesheet_link("css/bootstrap.min.css") }}
    </head>
    <body>
        <div class="container">
            <?php echo $this->getContent(); ?>
        </div>
        
        {{ javascript_include("js/jquery.min.js") }}
            {{ javascript_include("js/bootstrap.min.js") }}
        <!-- Latest compiled and minified JavaScript -->
        
    </body>
</html>
