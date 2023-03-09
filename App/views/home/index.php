<h1>Hello this is member of my family</h1>
<ul>
    <?php foreach($datas["myFiends"] as $friend)  :?>

        <li>Name: <?= $friend["name"]; ?></li>
        <li>Address: <?= $friend["address"]; ?></li>
        <br>


    <?php endforeach; ?>
</ul>