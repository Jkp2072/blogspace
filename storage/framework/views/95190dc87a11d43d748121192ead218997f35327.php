<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <style>
    body{
    margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}
.a{
    font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid $gray;
  outline: 0;
  font-size: 1.3rem;
  color:#D2691E;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
  }
  .hel{
    font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid $gray;
  outline: 0;
  font-size: 1.3rem;
  color: #FFEBCD;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;

  }


    .aa {
       
  position: absolute;
  


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
  
  .dis{
      position: relative;
      padding:10px 10px 10px 10px;
      color :#00FFFF;

  }
  .error{
    background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
  height : 15%;
 
}
 
  
 



    </style>
    </head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="navbar-brand" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
        <a class="navbar-brand" href="/message">Message</a>
        </li>
        <li class="nav-item">
        <a class="navbar-brand" href="/compose">Compose Blog</a>
        </li>
        <li class="nav-item">
        <a class="navbar-brand" href="/activity">Activity</a>
        </li>
    <ul>
   
   
    </div>
    <a class="btn btn-outline-danger" href="logout">logout</a>    
    </nav>
    
    <div>
    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="aa">
    <h2><?php echo e($blog->title); ?></h2>
    <p><?php echo e($blog->passage); ?></p></br>
    <p class="text-right font-italic">Author: <?php echo e($blog->name); ?></p></br>
    <p class="text-right font-italic">Created on : <?php echo e($blog->created_at); ?></p></br>
    <p class="text-right font-italic">Updated on : <?php echo e($blog->updated_at); ?></p></br>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    
</html><?php /**PATH C:\xampp\htdocs\webass5\auth\resources\views//activity.blade.php ENDPATH**/ ?>