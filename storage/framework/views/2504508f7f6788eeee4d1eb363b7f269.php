<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="<?php echo e(route('doLogin')); ?>">
        <?php echo csrf_field(); ?>
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="text" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
<?php /**PATH D:\SEM 4\PWEBBBBB\UTS PR\PR_UTS\resources\views/Login.blade.php ENDPATH**/ ?>