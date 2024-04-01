<!-- with this statement we're including the required source code that is necessary to render this template view -->
<? require "index.module.php"; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP View Template</title>
</head>
<body>
    <!-- This is the PHP view template and it will get its' required source code from the index.php file -->
    <h2>Users who is aged between 21 to 23:</h2>
    <ul>
        <? foreach($filtered_users as $user) : ?>
            <li><?= "$user[first_name] $user[last_name]" ?></li>
        <? endforeach ?>
    </ul>
</body>
</html>