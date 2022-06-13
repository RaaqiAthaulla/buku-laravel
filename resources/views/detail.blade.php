@extends('main')
@section('container')

<style>
    body{
        font-family:sans-serif;
        color:black;
    }
    .main{
        width: 80em;
        height: 15em;
    }
    .container{
        width: 80em;
        height: 20em;
        background-color:black;
        display: flex;

      margin-left: 2rem;
      
    }
    .container2{
        display: flex;
    }
    .container1{
        
        
        width: 100em;
        
    }

   .about{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 20px;
    color: white
   }
   .name{
    color: white;
   }
    .box{
        display: flex;
        flex-direction:column;
    }
    audio{
        margin-top:2em ;
    }
    .button {
 /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 10px;
}

.button1 {
    background-color: #008CBA;
  color: white;
}

.button1:hover {
  
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}
.button2 {
    background-color: #f44336;
  color: white;
}

.button2:hover {
  
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}
</style>

<body style="color:white">
@foreach($bukus as $buku)@endforeach
<h1 style="text-align:center; margin-top:5rem">{{ $buku->name }}</h1>
<div class="main">

   <div class="container">
   
      <a href="/detail/{{ ($buku->id) }}"><img style="  width: 115rem;height: 30em;" src="{{asset('storage/'.$buku->image)}}" alt=""></a>
  
     <div class="container1">
     
       
        
     </div>
</div>

     <h1 class="name" style="margin-left:1em;  margin-top:5em; ">{{ $buku->judul }}</h1>
        <p class="about" style="margin-left: 2em">Author</p>
        <h3 class="name" style="margin-left:2em;">{{ $buku->author }}</h3>
        <p class="about" style="margin-left: 2em">Penerbit</p>
        <h3 class="name" style="margin-left:2em;" >{{ $buku->penerbit }}</h3>
        <p class="about" style="margin-left:2em;">Synopsis</p>
      <p class="name" style="margin-left:2em; text-align:justify;">{{ $buku->synopsis }}</p>
    <a href="/edit/{{ ($buku->id) }}"><button style="margin-left:2em;" class="button button1">Edit</button></a>
<a href="/delete/{{ ($buku->id) }}"><button class="button button2">Delete</button></a>
</div>
<div class="container2" style="margin-top:6rem">

</div>
</body>