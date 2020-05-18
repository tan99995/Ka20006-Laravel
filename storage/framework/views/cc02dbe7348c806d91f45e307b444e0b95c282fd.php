<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $__env->yieldContent('title', 'Registration'); ?></title>
    </head>
    <h1> This is the register page!!</h1>

    <body>
        <p>
        <a href="/login"> Login</a> here.
        <p>
        <a href="/index"> Index</a>
        </p>
    <form method="POST" action="/register">
    <?php echo e(csrf_field()); ?>

        
        <div>
        <input type="text" name="username" placeholder="username">
         </div>
        <div>
        <input type="text" name="email" placeholder="email">
         </div>
        <div>
        <input type="text" name="institution" placeholder="institution">
         </div>
        <div>
        <input type="text" name="password" placeholder="password">
        
        </div>

        <div>
        <button type="submit"> Save
        </div>

     </form>
    </body>
</html>
<?php /**PATH C:\Laravel\resources\views/register.blade.php ENDPATH**/ ?>