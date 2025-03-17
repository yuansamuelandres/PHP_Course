<!-- In the name of Allah -->

<?php
    $username = "Yuan";
    $$username = "him";
    echo $Yuan;  # him
    echo "Hello  ${$username}";  # Deprecated since PHP 8.2
    echo "Hello ". $$username;  # Alternative
    $a = "name";
    $Yuan = &$a;
    echo '<br>';
    echo $a;    # name
    echo $Yuan; # name
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page | <?php echo $username?></title>
</head>
<body>
    <div>Welcome <?php echo $username?></div>
    <div>You scored 1000 points</div>
</body>
</html>