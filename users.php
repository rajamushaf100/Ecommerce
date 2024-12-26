<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9d722573e0.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include "./mystore.php";
    include "./product/dbConfig.php";
    $result_set = $conn->query("SELECT * FROM `user_table`");
    $row_count = $result_set->num_rows;
    ?>
    <div class="container">

        <div class="row">
            <div class='m-auto my-4 col-md-3 text-center border border-primary rounded-5 p-0 font-monospace'>
                <h3 class="text-primary">Total</h3>
                <h1><?= $row_count ?></h1>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <th>Id</th>
                        <th>UserName</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = $result_set->fetch_assoc()) {
                            $i++;
                            echo "<tr>
               <td>$i</td>
               <td>$row[UserName]</td>
               <td>$row[Email]</td>
               <td>$row[Number]</td>
              <td> <a class='text-decoration-none text-black fs-5 mx-3' href='deleteUser.php?id=$row[Id]'><i class='fa-solid fa-trash-can'></i></a></td>
               </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>