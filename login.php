<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include "../mystore.php";
    ?>
    <div class="container border mt-4 border-primary rounded-5 col-md-5 shadow">
        <div class="row">
            <div class="col-md-10 m-auto">
                <form action="loginLogic.php" method="post">
                    <div class="mb-3  m-auto">
                        <p class="text-center text-primary fw-bold fs-3"> Log in:</p>
                    </div>
                    <div class="mb-3">
                        <label for="Username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="Username" name="Username"
                            placeholder="Enter Username">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="Password" name="Password"
                            placeholder="Enter Password">
                    </div>


                    <div class="mb-3 text-end px-2">
                        <button class="bg-danger fs-5 fw-semibold rounded-3 text-white border-0">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>