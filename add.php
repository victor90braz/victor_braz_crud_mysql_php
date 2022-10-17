<?php include "./header.php";?>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card mt-4">
            <div class="card-body">

              <a href="./index.php" class="btn btn-info"><i class="fa-solid fa-angles-left"></i> Back</a>
              <hr>

              <h2>Add a new register</h2>

              <form action="" method="post">
                <label for="paternal">Surname paternal</label>
                <input type="text" class="form-control" id="paternal" name="paternal">

                <label for="maternal">Surname maternal</label>
                <input type="text" class="form-control" id="maternal" name="maternal">

                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">

                <label for="dateBirth">Date of Birth</label>
                <input type="date" class="form-control" id="dateBirth" name="dateBirth">

                <button class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Add New Register</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

<?php include "./scripts.php";
