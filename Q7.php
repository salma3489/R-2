<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--#Q7-->
    <?php $name = ["Ahmed", "Mohammed", "Hassan"];?>
    <ul>
        <?php foreach($name as $value) {?>
            <li><?= $value ?></li>
        <?php } ?>
    </ul>

    <!--#Q7-->
    <?php $instructors = [
    'Kareem Fouad' => [
        'job' => 'backend developer',
        'track' => 'php',
        ],
    'Ahmed Bahnasy' => [
        'job' => 'frontend developer',
        'track' => 'angular',
        ],
    'Ahmed Nasser' => [
        'job' => 'backend developer',
        'track' => '.net',
        ],
    ]; ?>

    <ul>
    <?php foreach($instructors as $index => $info) {
            echo "<br>"; ?>
            <li><?php echo $index ?></li>
            
            <?php foreach($info as $key => $value) { ?>
                <ul>
                    <li><?= $key.": ". $value ?></li>
                </ul>
            <?php } ?>
    <?php } ?>
    </ul>

</body>
</html>