<div class="container-fluid students-container">

    <h1>📃 Students Data </h1>

    <div class="row mt-3 flasher-container">
        <div class="col-6">
            <?php
            Flasher::flashMessage();
            ?>
        </div>
    </div>


    <div class="row data-container">
        <!-- Button trigger modal -->
        <div class="col-6">
            <button type="button" class="btn btn-info add-student p-2" data-bs-toggle="modal" data-bs-target="#add">
                ➕ New Student
            </button>


            <h3 class="mt-3">Looking for Students</h3>

            <form action="<?= BASEURL ?>students/search" method="POST" mb-1>
                <div class="col-9 d-flex search-div">
                    <input autocomplete="off" placeholder="who you looking for..?" name="search-form" type="text" class="form-control" autofocus>
                    <button type="submit" class="btn btn-warning ms-2">🔍</button>
                </div>
            </form>


            <!-- Data display -->
            <div class="display-datas">
                <ul class="default-data list-group mt-5" id="default-data">
                    <?php foreach ($datas["students"] as $data) : ?>
                        <li class=" list-group-item d-flex justify-content-between align-items-center">
                            <h6 id="live-search"> <?= $data["name"]; ?> </h5>
                                <div>
                                    <a href="<?= BASEURL ?>/students/delete/<?= $data['id']; ?>" class="p-2 badge text-bg-danger text-decoration-none">delete</a>
                                    <a href="<?= BASEURL ?>students/details/<?= $data["id"]; ?>" class="p-2 badge text-bg-info text-decoration-none">details</a>
                                    <a href="" data-id-update="<?= $data['id']  ?>" class="p-2 badge  text-bg-warning update" data-bs-toggle="modal" data-bs-target="#add">
                                        update
                                    </a>
                                </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- last data display -->
        </div>
    </div>



    <div class="students-fade position-fixed w-100 z-n1">
        <!-- just for fade -->
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


<!-- last modal -->