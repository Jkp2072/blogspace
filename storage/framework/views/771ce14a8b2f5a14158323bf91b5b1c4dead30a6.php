<html>
    <head>
        <title>Register page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <style>

body{
    margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}
.hh{
    margin: 0 0 30px;
  padding: 5px;
  color: #fff;
  text-align: center;
}

    .aa {
       
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}
.aa:hover{ 
     box-shadow: 1px 8px 20px black;
    -webkit-transition:  box-shadow .6s ease-in;
  }
  
  .a{
    font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid $gray;
  outline: 0;
  font-size: 1.3rem;
  color: #00FFFF;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
  }
 
  button{
    width: 40%;
  padding: 10px 0;
  font-size: 16px;
  
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
  }
 
.error{
    background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
  height : 15%;
 
}


    </style>
    
    
    </head>
    <body>
    <div class="aa">
    
    <div class="hh bg-dark text-light ">
    <h2>Register </h2>
    
    </div>
    <div class="container-fluid">
        <form class="" action ="<?php echo e(route('a.create')); ?>" method= "post">
        <?php echo e(csrf_field()); ?>


        <div>
        <?php if(Session::get('success')): ?>
            <div>
            <div class="alert alert-success">     <?php echo e(Session::get('success')); ?> </div>
            </div>
       
        <?php endif; ?>

        <div>
        <?php if(Session::get('fail')): ?>
            <div>
            <div class="alert alert-danger">     <?php echo e(Session::get('fail')); ?> </div>
            </div>
        
        <?php endif; ?>
        </div>
            
            <input class="a" type="text" name="username" value="<?php echo e(old('username')); ?>" placeholder="Enter username"/></br>
            <div class="error"><?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?><?php echo e($message); ?><?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></div>
            
            <input class="a" type="text" name="fullname" placeholder="Enter fullname"/></br>
            <div class="error"><?php if ($errors->has('fullname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fullname'); ?><?php echo e($message); ?><?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></div>
            
            <input class="a" type="email" name="email" placeholder="Enter email"/></br>
            <div class="error"><?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?><?php echo e($message); ?><?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></div>

            <input class="a" type="tel" name="mobile" placeholder="Enter mobile" pattern="[0-9]{10}"/></br>
            <div class="error"><?php if ($errors->has('mobile')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mobile'); ?><?php echo e($message); ?><?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></div>
            
            <input  class="a" type="password" name="password" placeholder="Enter password"/></br>
            <div class="error"><?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?><?php echo e($message); ?><?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></div>
            
            <input class="a" type="password" name="password2" placeholder="retype password"/></br>
            <div class="error"><?php if ($errors->has('password2')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password2'); ?><?php echo e($message); ?><?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></div>
            <br>
            <button type="submit" class="btn btn-outline-success" name="Register">Register</button>
            <br>
            <a class="btn btn-outline-primary" href="/login"> Already registered ? </a>
        </form>
    </div>
    </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\webass5\auth\resources\views//register.blade.php ENDPATH**/ ?>