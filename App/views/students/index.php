<h1>Students Name from database</h1>

<ul>
 
    <?php foreach($datas["students"] as $data) :?>
    <li>
        No : <?= $data["id"]; ?>
    </li>
    <li>
        Name : <?= $data["name"]; ?>
    </li>
    <li>
        NIM : <?= $data["nim"]; ?>
    </li>
    <br>

    <?php endforeach; ?>
</ul>