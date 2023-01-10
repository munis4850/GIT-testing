<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php for($i=0; $i<10;$i++): ?>
    <?php if ($i % 2 === 0): ?>
        <strong><?= $i ?></strong>
    <?php else :?>
        <?php echo $i; ?>
    <?php endif; ?>
    <br>
<?php endfor; ?>

</body>
</html>
