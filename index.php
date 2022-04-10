<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INT220 Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <form action="add.php" method="POST">
            <div class="row">
                <h3>TODO</h3>
                <div class="">
                    <input type="text" name="list" id="" class="form-control">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
            </div>
        </form>

        <!-- get list data -->
        <?php 
        include "db_config.php";
        $data = mysqli_query($config, "SELECT * FROM todo");
        ?>

        <?php while ($item = mysqli_fetch_array($data)) { ?>

        <?php if ($item["done"]){ ?>
        <s>
            <h5><?php echo $item['list'] ?></h5>
        </s>
        <a href="" class="done disabled btn btn-secondary">Done</a>
        <?php } else { ?>
        <h5><?php echo $item['list'] ?></h5>
        <a href="update.php?id=<?php echo $item['id'] ?>" class="btn btn-success">Done</a>
        <?php } ?>

        <a href="delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a>

        <?php } ?>
    </div>
</body>

</html>