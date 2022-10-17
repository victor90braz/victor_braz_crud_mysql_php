
<?php include "./header.php";?>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card mt-4  ">
            <div class="card-body ">

              <a href="./index.php" class="btn btn-outline-info"><i class="fa-solid fa-angles-left"></i> Back</a>
              <hr>
              <h2 class="card-header backgroundDelete">Delete a Register</h2>

              <table class="table table-bordered backgroundDelete">
                <thead>
                  <th>Surname Paternal</th>
                  <th>Surname Maternal</th>
                  <th>Name</th>
                  <th>Date of Birth</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                  </tr>

                </tbody>
              </table>

              <hr>

              <div class="alert alert-danger" role="alert">
                <small>
                  Do you really want to eliminate this register?
                </small>
              </div>

              <form action="" method="post">
                <button class="btn btn-danger">
                  <i class="fa-solid fa-user-xmark"></i> Delete Register
                </button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

<?php include "./scripts.php";
