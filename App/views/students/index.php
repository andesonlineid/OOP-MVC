<h1>Students Name from database</h1>




<div class=".container mt-3">

  <div class="row">
    <div class="col-6">
      <?php
      Flasher::flashMessage();
      ?>
    </div>

  </div>

</div>

<div class="row">
  <!-- Button trigger modal -->
  <div class="col-6">
    <button type="button" class="btn btn-success add-student" data-bs-toggle="modal" data-bs-target="#add">
      Add New Student
    </button>


    <h3 class="mt-3">List of students</h3>
    <ul class="list-group">
      <?php foreach ($datas["students"] as $data) : ?>
        <li class="list-group-item  d-flex justify-content-between align-items-center">
          <?= $data["name"]; ?>
          <a href="<?= BASEURL ?>/students/delete/<?= $data['id']; ?>" class="badge text-bg-danger text-decoration-none">delete</a>
          <a href="<?= BASEURL ?>students/details/<?= $data["id"]; ?>" class="badge text-bg-success text-decoration-none">details</a>
          <a href="" data-id-update="<?= $data['id']  ?>" class="badge  text-bg-warning update" data-bs-toggle="modal" data-bs-target="#add">
            update
          </a>

        </li>
      <?php endforeach; ?>
    </ul>

  </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adding New Student</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL ?>/Students/addStudent" method="POST">



          <input name="student_id" type="hidden" class="form-control" id="student_id" aria-describedby="emailHelp">


          <div class="mb-3">
            <label for="student_name" class="form-label">Name</label>
            <input name="student_name" type="text" class="form-control" id="student_name" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="student_nim" class="form-label">NIM</label>
            <input type="number" name="student_nim" class="form-control" id="student_nim" aria-describedby="emailHelp">
          </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="btn-add">Save</button>
        </form>
      </div>

    </div>
  </div>
</div>