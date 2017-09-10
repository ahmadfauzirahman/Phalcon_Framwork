<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Phalcon PHP Framework</title>
        <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
    </head>
    <body>
        <div class="container">
            <?php echo $this->getContent(); ?>
        </div>
        
        <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
            <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
        <!-- Latest compiled and minified JavaScript -->
        
    </body>
</html>
