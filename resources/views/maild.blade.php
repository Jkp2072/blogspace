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
  .hel{
   
    font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid $gray;
  outline: 0;
  font-size: 1.3rem;
  color: red;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;

  }
 
  
 



    </style>
    </head>
   
    
    
    <div class="card">
<div class="card-header"> hello , {{$name}} </div>
<div class="card-body">

<div class="hel">
{{$body}}
</div>

<p>https://github.com/pubsubhubbub/php-publisher/blob/master/README.md</p>
<p>Regards from blogspace,</p>
<p>Jeet.</p>

</div>

</div>
</html>

