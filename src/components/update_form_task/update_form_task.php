<div class="container p-4">
  <?php if (isset($_SESSION["message"])) {?>
      <div class="alert alert-<?=$_SESSION["message_type"]?> alert-dismissible fade show" role="alert">
          <strong>
            <?=$_SESSION["message"]?>
          </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

  <?php session_unset();}?>


<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mt-4">
        <div class="card-body">
          <a href="http://localhost/victor_braz_crud_mysql_php/index.php" class="btn btn-info"><i class="fa-solid fa-angles-left"></i> Back</a>
          <hr>

          <h2>Update Form Table </h2>
          <form action="/victor_braz_crud_mysql_php/src/components/update_form_task/update_form_task.php?id=<?='$id'?>" method="POST">
            <label for="title"></label>
            <input type="text" class="form-control" id="title" name="title" value=<?=$_SESSION['title']?> placeholder="Task Title">

            <textarea type="description" class="form-control"  name="description" rows="2" placeholder="Task Description"><?=$_SESSION['description']?> </textarea>

            <button class="btn btn-warning mt-3"><i class="fa-regular fa-floppy-disk"></i> Update Register</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

