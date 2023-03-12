<h1>Students Name from database</h1>

<div class=".container mt-5">

<div class="row">
    <div class="col-6">
        <h3>List of students</h3>
<ul class="list-group">
    
<?php foreach($datas["students"] as $data) :?>
  <li class="list-group-item d-flex justify-content-between align-items-center">  <?= $data["name"]; ?>  
    <a href="<?= BASEURL ?>students/details/<?=$data["id"]; ?>"  class="badge text-bg-success ">Detail's</a>
</li>
    <?php endforeach; ?>

    </ul>

    </div>
    </div>


</div>