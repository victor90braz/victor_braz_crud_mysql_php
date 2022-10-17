## Commands:

terminal cmd:

- php -S localhost:3000
- url(localhost:80/phpmyadmin) // Interface graphic of mysql

## Sintaxis

    Equivalents:
        <?php echo "Hi, " . $_GET["name"]; ?>
        <?="Hi, " . $_GET["name"];?>

        http://localhost:3000/?name=victor

    Arrays:

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

    $typeOfValuesKeys = var_dump($hobbies);
    die($typeOfValuesKeys);

## If/Else

        <?php if ($beach["weatherStatus"]): ?>

            <img src="url" alt="">

        <?php else: ?>

            <img src="url" alt="">

        <?php endif?>

## connexion to database mysql

      <?php

      $connexion_to_data_base = mysqli_connect("localhost", "root", "", "crud_mysql_php");

      if (isset($connexion_to_data_base)) {
          echo "DataBase is connected.";
      }

## check the connexions

    http://localhost/victor_braz_crud_mysql_php/index.php
    http://localhost/victor_braz_crud_mysql_php/database/connect_database.php

## Notes

### Sicurity - good practise

- htmlSpecialChars() avoid to inject html code in the url
- http://localhost:3000/?name=<a%20href="google.com">Google</a>
