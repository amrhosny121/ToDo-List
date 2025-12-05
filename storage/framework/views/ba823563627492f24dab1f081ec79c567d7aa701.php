<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registeration</title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/auth/css/login.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
</head>
<body>

    <form action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <h1>Registeration</h1>

        <!-- Frist name input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="fname" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter Frist Name" />
          </div>

          <!-- Last name input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="lname" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter Last Name" />
          </div>

          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>
          <button type="submit">Register</button>
        </form>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\todo-list-app\resources\views/Frontend/Auth/Registeration.blade.php ENDPATH**/ ?>