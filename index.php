<?php include "./header.php";?>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card mt-4">
            <div class="card-body">
            <h2>CRUD with MongoDB and PHP</h2>
            <a href="./add.php" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Insert new register</a>
            <a href="./update.php" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Update a register</a>
            <a href="./delete.php" class="btn btn-primary"><i class="fa-solid fa-user-xmark"></i> Delete a register</a>
            <hr>
            <table class="table table-sm table-hover table-bordered">
              <thead>
                <th>Surname Paternal</th>
                <th>Surname Maternal</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Edit</th>
                <th>Delete</th>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="text-center">
                    <form action="" method="post">
                      <button class="btn btn-warning">
                        <i class="fa-solid fa-user-plus"></i>
                      </button>
                    </form>
                  </td>
                  <td class="text-center">
                    <form action="" method="post">
                      <button class="btn btn-danger">
                        <i class="fa-solid fa-user-xmark"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include "./scripts.php";?>