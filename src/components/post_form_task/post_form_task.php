<div class="container p-4">
  <?php if (isset($_SESSION["message"])) {?>
      <div class="alert alert-<?=$_SESSION["message_type"]?> alert-dismissible fade show" role="alert">
          <strong>
            <?=$_SESSION["message"]?>
          </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

  <?php session_unset();}?>

  <div class="row ">

    <div class="col-md-4 ">
      <div class="card card-body">
        <form action="/victor_braz_crud_mysql_php/src/components/post_form_task/saved_task_form.php" method="POST">

            <div class="form-group">
              <label for="title"></label>
              <input type="text" id="title" name="title" class="form-control mb-2" placeholder="Task Title" autofocus />
            </div>

            <div class="form-group mb-1">
              <textarea name="description" rows="2" class="form-control mb-2" placeholder="Task Description"></textarea>
            </div>

            <label for="save_task"></label>
            <input type="submit" id="save_task" class="btn btn-success btn-block" name="save_task" value="Save Task">

          </form>
      </div>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
<?php
$tasks = ['Title', 'Description', 'Created At', 'Actions'];
foreach ($tasks as $task): ?>
          <th>  <?=$task?>   </th>
          <?php endforeach?>
          </tr>
        </thead>

        <tbody>
<?php
$query = "SELECT * FROM task";
$result_task = mysqli_query($connexion_to_data_base, $query);
$data_column = ['title', 'description', 'created_at'];

foreach ($result_task as $task) {?>
  <tr>
    <?php foreach ($data_column as $column): ?>
      <td>
        <?=$task[$column]?>
      </td>
    <?php endforeach?>

    <td class="">
      <a href="./edit.php?id=<?=$task['id']?>" class="btn  btn-secondary"> <i class="fa-solid fa-pen"></i></a>
      <a href="./delete.php?id=<?=$task['id']?>" class="btn  btn-danger"> <i class="fa-solid fa-trash-can"></i></a>
    </td>
  </tr>
<?php
}
?>
        </tbody>
      </table>
    </div>
  </div>
</div>
