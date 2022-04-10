<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INT220 Project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container card">
        <form action="add.php" method="POST">
            <div class="top">
                <h1>TASKS FOR THE DAY</h1>
                <div class="input">
                    <input type="text" name="list" class="form-control" placeholder="Enter your task...">

                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
            </div>
        </form>


        <?php 
        include "db_config.php";
        $data = mysqli_query($config, "SELECT * FROM todo");
        ?>

        <div class="tasks">
            <?php if ($data->num_rows === 0) {?>
            <h2>No tasks yet!</h2>
            <?php } ?>

            <?php while ($item = mysqli_fetch_array($data)) { ?>

            <div class="item">
                <?php if ($item["done"]){ ?>
                <div class="start">
                    <s>
                        <h5 class="done"><?php echo $item['list'] ?></h5>
                    </s>
                    <a href="" class="disabled btn btn-secondary">Done</a>
                </div>
                <?php } else { ?>
                <div class="start">
                    <h5><?php echo $item['list'] ?></h5>
                    <a href="update.php?id=<?php echo $item['id'] ?>" class="btn btn-success">Done</a>
                </div>
                <?php } ?>

                <a href="delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a>
            </div>

            <?php } ?>
        </div>
    </div>
</body>

</html>