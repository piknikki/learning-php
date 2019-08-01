<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP test</title>
</head>
<body>
<h1>Hello this is the h1</h1>

<?php echo '<p> Hello World </p>'; ?>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

<h3>This is an h3 in regular html</h3>


<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla') !== FALSE) {
    echo 'You are using Mozilla <br />';
} else {
    echo 'You are not cool <br />';
}
?>

<p>strpos() is a function built into PHP which searches a string for another string</p>


<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    ?>
    <h3>strpos() must have returned non-false</h3>
    <p>You are using Internet Explorer</p>
    <?php
} else {
    ?>
    <h3>strpos() must have returned false </h3>
    <p>You are NOT using Internet Explorer</p>
    <?php
}
?>

</body>
</html>