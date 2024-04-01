<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Fruit List:</h3>
    <ul>
        <?php
            $fruit_bucket = ["Apple", "Banana", "Orange"]; //This type of data is knowned as ARRAY and is wrapped inside a pair of square bracket seperating each variable with commas. In this type of variable you can store multiple data inside a single variable and can access them through their index position which starts from 0.

            // loop throug this array

            foreach ($fruit_bucket as $fruit) { //foreach is looping keyword use to loop through objcts like ARRAY
                echo "<li>" . $fruit . "</li>"; // sometimes there can be multiple html tag to be added and nested in this block and its a hassle to do it inside quotes. for this we need something like short hand php loop so that we can use html tags easily inside the loop without using quotes.
            }
            
        ?>
    </ul>

    <h2>Fruit List with Short Hand PHP Loop:</h2>
    <ul>
        <? //You can use this kind of short hand syntax with any other loop as well ?>
        <? foreach ($fruit_bucket as $fruit) : //short hand php foreach loop start?> 

            <li><?= $fruit //used short hand php echo?></li> 

        <? endforeach //short hand php foreach loop end?> 
    </ul>

</body>

</html>