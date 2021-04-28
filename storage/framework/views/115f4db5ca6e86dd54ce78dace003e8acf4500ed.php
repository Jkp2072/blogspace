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
  
  .dis{
      position: relative;
      padding:10px 10px 10px 10px;
      color :#00FFFF;

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
        <li class="nav-item">
        <a class="navbar-brand" href="/mail"> Mail</a>
        </li>
    <ul>
   
   
    </div>
    <a class="btn btn-outline-danger" href="logout">logout</a>    
    </nav>
    <h2 class="hel text-center">Mail</h2>
    <form action="<?php echo e(route('a.sendmail')); ?>" method="get">

<div class="aa">



<input class="a" type="text" name="name"  placeholder="Enter name.....">

<input class="a" type="email" name="emails"  placeholder="Enter email.....">
<input class="a" type="textarea" name="maildata"  placeholder="Enter data.....">
<button type="submit" class="btn btn-outline-success" name="submit"> Submit </button>    

</html><?php /**PATH C:\xampp\htdocs\webass5\auth\resources\views/mail.blade.php ENDPATH**/ ?>