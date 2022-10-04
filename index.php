<?php
    $nbarticle = $_GET['nbarticle'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <main>

        <?php
            for($i = 0; $i < $nbarticle; $i++)
            {
                ?>
                <article>
                    <h2>Titre <?= $i ?></h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Saepe nulla error nam consectetur tempore ipsa debitis 
                        impedit iusto eligendi molestias numquam rem, ea eaque 
                        nesciunt est ratione, unde et ab.
                    </p>
                </article>
                <?php
            }
        ?>
        

    </main>

</body>

</html>