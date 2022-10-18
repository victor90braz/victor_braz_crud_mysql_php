# CRUD using database MySql and PHP

## Commands:

- terminal cmd:

  - php -S localhost:3000

## Localhost

- interface graphic of mysql

  - localhost:80/phpmyadmin

- index

  - http://localhost/victor_braz_crud_mysql_php/index.php

## Connexion to database mysql

      <?php

      $connexion_to_data_base = mysqli_connect("localhost", "root", "", "crud_mysql_php");

      if (isset($connexion_to_data_base)) {
          echo "DataBase is connected.";
      }

## POST "form" action="file path" method(post)

- post_form_task php

      <form action="/victor_braz_crud_mysql_php/src/components/post_form_task/saved_task_form.php" method="POST">

        <div class="form-group">
          <input type="text" name="title" class="form-control mb-2" placeholder="Task Title" autofocus />
        </div>

        <div class="form-group mb-1">
          <textarea name="description" rows="2" class="form-control mb-2" placeholder="Task Description"></textarea>
        </div>

        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">

      </form>

- saved_task_form php

  - N.B = Take save_task from the attribute name input name="save_task"

        if (isset($\_POST["save_task"])) {

          echo "Saving data from: post_form_task.php <br>";

          $title = $_POST["title"];
          $description = $_POST["description"];

          echo "Title: $title <br> Description: $description";

        }

## Check the connexions to database mysql

- form action="/victor_braz_crud_mysql_php/src/components/post_form_task/saved_task_form.php"

  - http://localhost/victor_braz_crud_mysql_php/src/components/post_form_task/saved_task_form.php

# Notes

## Sicurity - good practise

- htmlSpecialChars() avoid to inject html code in the url
- http://localhost:3000/?name=<a%20href="google.com">Google</a>

## Sintaxis

    - $typeOfValuesKeys = var_dump($hobbies);
    - die($typeOfValuesKeys);

    - equivalents:
        <?php echo "Hi, " . $_GET["name"]; ?>
        <?="Hi, " . $_GET["name"];?>

        http://localhost:3000/?name=victor

    - arrays:

            <ul>
                <?php
                    foreach ($userList as $user): ?>
                        <li><?=$user?> </li>
                    <?php endforeach
                ?>
            </ul>

            or

            <ul>
                <?php
                    foreach ($userList as $user) {
                        echo "<li>{$user}</li>";
                    }
                ?>
            </ul>

## Conditionals

- If/Else

        <?php if ($beach["weatherStatus"]): ?>

            <img src="url" alt="">

        <?php else: ?>

            <img src="url" alt="">

        <?php endif?>
