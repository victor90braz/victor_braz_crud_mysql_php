# MONGODB & MONGOSH installation

https://www.youtube.com/watch?v=oC6sKlhz0OE&ab_channel=CSCORNERSunitaRai

# PHP installation and VSCODE config

https://www.youtube.com/watch?v=SV6By0GcAoo&ab_channel=GeekyScript

## Commands:

terminal cmd:

- php -S localhost:3000
- mongosh
- use crud (name db name)
- db.personas.find();

## create collection personas

- db.personas.insertOne({"paternal":"Martinez", "maternal":"Hernandez", "name": "Juan", "data_birth": "01-04-2000"});

## create user

- db.createUser({"user":"mongoadmin", "password":"123456",roles: [{ role: "readWrite", db: "crud"} ]});
- mongosh -u mongoadmin -p 123456 --authenticationDatabase crud

NB:

- Collection.insert() is deprecated. Use insertOne, insertMany, or bulkWrite.

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

## Notes

### Sicurity - good practise

- htmlSpecialChars() avoid to inject html code in the url
- http://localhost:3000/?name=<a%20href="google.com">Google</a>
