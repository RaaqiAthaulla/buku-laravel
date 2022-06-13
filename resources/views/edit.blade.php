@extends('main')
@section('container')

<style>
.container{
    border: 1px solid #ddd;
    display: inline-block;
    padding: 2em;
}

.container{
    margin-left: 670px;
    margin-top: 200px;
}

</style>

</style>
@foreach($bukus as $buku)@endforeach
<div class="container">
  <div class="left">
    <div class="header">
  <form action="{{ url('buku',$buku->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method("PUT")
  
     <h1 style="color: #ddd"> Buku</h1>
    </div>

    <div class="form">
        <input type="text" value="{{ $buku->judul }}" placeholder="Judul Buku" name="judul"/>
        <h4 style="color: #ddd">Cover</h4>
        <label style="color: #ddd" class="custom-file-upload">Choose FIle
              <input class="form-control" type="file" id="image" name="image"  " >
        </label><br><br>
  
        <input type="text" placeholder="Author" value="{{ $buku->author }}"  name="author"/>
        <input type="text" placeholder="Penerbit" value="{{ $buku->penerbit }}"  name="penerbit"/>
        <input type="text" placeholder="Synopsis" value="{{ $buku->synopsis }}"  name="synopsis"/>
        <button class="animation a6" type="submit">submit</button>
    </div>
  </div>  
        
</div>  
  </form>
</div>