<html>
    <head>
        <title>Register page</title>
    </head>
    <body>
    <div class="container-fluid">
        <form class="" action ="" method= "post">
        <?php echo e(csrf_field()); ?>

            <label> Username :</label>
            <input type="text" name="username"/></br>

            <label> name :</label>
            <input type="text" name="fullname"/></br>

            <label> email :</label>
            <input type="email" name="email"/></br>

            <label> password :</label>
            <input type="password" name="password1"/></br>

            <label> retype password :</label>
            <input type="password" name="password2"/></br>

            <button type="submit" name="Register">Register</button>
        </form>
    </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\webass5\auth\resources\views/register.blade.php ENDPATH**/ ?>