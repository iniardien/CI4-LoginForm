<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <main class="form-signin">
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url(); ?>/login/process">
                        <?= csrf_field(); ?>
                        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
                        <br>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                        <br>

                        <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
                    </form>
                </main>
            </div>
        </div>
    </div>

</body>

</html>