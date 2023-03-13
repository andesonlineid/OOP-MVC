<h1><?= $datas["title"];?></h1>


<input type="text" name="id" placeholder="<?= $datas['details']['id'] ?>" hidden>
<ul>
    <li>
        Name: <?= $datas["details"]["name"]; ?>

    </li>
    <li>
        Nim: <?= $datas["details"]["nim"]; ?>
    </li>

    <li>
        <button type="submit" class="btn btn-warning" name="btn-update">update</button>
       <a onclick="return confirm('are u sure?')" class="btn btn-danger" href="<?= BASEURL ?>/Students/delete/<?= $datas['details']['id']; ?>">delete</a>
    </li>
</ul>