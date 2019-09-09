<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhpP10</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        for($i = 1;$i <= 3;$i++) {
            ?>
        <p><a href="<?= '/TP'.$i.'/index.php'?>">TP <?= $i ?></a></p>
        
        <?php
         }
       ?>
 </body>
</html>