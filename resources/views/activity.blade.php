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
  .tagg{
    font-family: inherit;
 
  border: 0;
  border-bottom: 2px solid $gray;
  

  color: #00FFFF;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;

  }
 




    .card {
      
       
  background: rgba(0,0,0,.5);
  
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
 padding : 10px 10px 10px 40px;
 width : 900px;
 align: center;
 
 top : 10%;
  left: 18%;
 
 

  
}
       
  
}
.:hover{ 
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
 
.hh{
    margin: 0 0 30px;
  padding: 5px;
  color: #FFEBCD;
  text-align: center;
}
 
.dropbtn {
background-color :#212529 ;
  color: white;
  padding: 3px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
 
.ho:hover{
  
  
}
 



    </style>
    </head>
    <nav class="navbar navbar-expand-lg navbar-black bg-dark">
    <div class="container-fluid ">
    <ul class="navbar-nav">
    <div class="ho">
    <li class="nav-item">
        <a href="/profile" class="navbar-brand"> <img src="https://res.cloudinary.com/mhmd/image/upload/v1557368579/logo_iqjuay.png" width="45" alt="profile" class="d-inline-block align-middle mr-2"></a>
        </li>
        </div>
        <div class="ho">
        <li class="nav-item">
      
        <a href="/mail" class="navbar-brand"> <img src="https://cdn.worldvectorlogo.com/logos/official-gmail-icon-2020-.svg" width="45" alt="mail" class="d-inline-block align-middle mr-2"></a>
        </li>
        </div>
        
        <li>
            <div class="dropdown">
              <button class="dropbtn"><img src="https://cdn0.iconfinder.com/data/icons/social-networks-and-media-flat-icons/136/Social_Media_Socialmedia_network_share_socialnetwork_network-22-512.png" width="45" alt="blogging" class="d-inline-block align-middle mr-2"></button>
              <div class="dropdown-content">
                <a href="/compose">Compose Blog</a>
                <a href="/activity">Blogspace</a>
  
              </div>
            </div>
        </li>
        <li>  
            <div class="dropdown">
              <button class="dropbtn"><img src="https://icon-library.com/images/icon-for-chat/icon-for-chat-21.jpg" width="45" alt="chatting" class="d-inline-block align-middle mr-2"></button>
              <div class="dropdown-content">
                <a href="/message">Compose message</a>
                <a href="/inbox">Inbox</a>
                <a href="/sent">Sent</a>
  
              </div>
            </div>

        </li>
        
    <ul>
  

      

   
   <!-- https://cdn2.iconfinder.com/data/icons/android-12/512/logout_signout-512.png
    https://cdn0.iconfinder.com/data/icons/thin-line-color-2/21/05_1-512.png-->
    </div>
    <a class="btn btn-outline-danger" href="logout"><img src="https://cdn2.iconfinder.com/data/icons/android-12/512/logout_signout-512.png" width="45" alt="chatting" class="d-inline-block align-middle mr-2"></a>    
    </nav>
   
    <h2 class="hh">Blogspace</h2>
    </br>
    <div>
    
    <div>
        @if(Session::get('success'))
            <div>
            <div class="alert alert-success">     {{Session::get('success')}} </div>
            </div>
       
        @endif
    @foreach ($blogs as $blog)
    <div class="card">
    <div class="card-header">
    <h2 class="hel"><div class="badge bg-primary">{{$blog->title}}</div></h2>
    </div></br>
    <div  class="card-body">

    <p class="a">{{$blog->passage}}</p></br>
    <p class="badge bg-success text-wrap">Author: {{$blog->name}}</p></br>
    <p class="tagg text-end fst-italic">Created on : {{$blog->created_at}}</p></br>
    <!--<p class="tagg text-end fst-italic">Updated on : {{$blog->updated_at}}</p></br>-->
    
    
    <form action="{{route('a.edit')}}" method="post">
    {{ csrf_field() }}
    <?php
    if($blog->name == $info->name)
    {
      echo"<h4 class='badge bg-danger text-wrap'>Actions</h4>
     
      <input type='hidden' name='edid' value='{$blog->id}'>
     <div class='hel'> Title :<input  class='a' type='text' name='edtitle' placeholder='{$blog->title}'  value='{$blog->title}'></div>
     <div class='hel'> Passage : <input class='a' type='textarea' name='edpassage' placeholder='{$blog->passage}' value='{$blog->passage}'></div>
     
      <button type='submit' class='btn btn-outline-success'  >edit</button>";
    }
    ?>
    </form>
    <form action="{{route('a.delete')}}" method="post">
    {{ csrf_field() }}
    <?php
    if($blog->name == $info->name)
    {
      echo"<input type='hidden' name='delid' value='{$blog->id}'>
      <button type='submit' class='btn btn-outline-danger'  >Delete</button>";
    }
    ?>
    </form>
   
    </div>
    </div>
    </br></br>
    @endforeach
    </div>
    
    
</html>