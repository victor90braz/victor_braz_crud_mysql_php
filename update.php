<?php include "./header.php";?>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card mt-4">
            <div class="card-body">

              <a href="./index.php" class="btn btn-info"><i class="fa-solid fa-angles-left"></i> Back</a>
              <hr>

              <h2>Update a register</h2>

              <form action="" method="post">
                <label for="paternal">Surname paternal</label>
                <input type="text" class="form-control" id="paternal" name="paternal" placeholder="Surname paternal">

                <label for="maternal">Surname maternal</label>
                <input type="text" class="form-control" id="maternal" name="maternal" placeholder="Surname maternal">

                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">

                <label for="dateBirth">Date of Birth</label>
                <input type="date" class="form-control" id="dateBirth" name="dateBirth" placeholder="18/06/1990">

                <button class="btn btn-warning mt-3"><i class="fa-regular fa-floppy-disk"></i> Update Register</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

<?php include "./scripts.php";
