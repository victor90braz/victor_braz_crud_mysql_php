<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mt-4">
        <div class="card-body">

          <a href="./index.php" class="btn btn-info"><i class="fa-solid fa-angles-left"></i> Back</a>
          <hr>

          <form action="" method="post">
            <label for="title"></label>
            <input type="text" class="form-control" id="title" name="title" value=<?=$_SESSION['title']?> placeholder="Surname paternal">

            <textarea type="date" class="form-control" id="dateBirth" name="dateBirth" placeholder="18/06/1990"> <?=$_SESSION['description']?> </textarea>

            <button class="btn btn-warning mt-3"><i class="fa-regular fa-floppy-disk"></i> Update Register</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
