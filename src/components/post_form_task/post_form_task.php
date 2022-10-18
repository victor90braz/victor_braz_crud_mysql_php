<div class="container p-4">
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Saved in the database.</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

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

      <div class="col-md-8"></div>
    </div>
  </div>
</div>
