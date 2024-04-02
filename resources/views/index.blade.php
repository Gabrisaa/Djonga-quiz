@extends('layout')
@section('content')
 <div class="jumbotron">
 <p class="h1 text-center py-4"> Quiz djonga </p >
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Apenas para amantes da lenda!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
 </div>
 <div class="container py-4" >
 <div class="row" >
 <div class="col-md-6">
 <div> 
    <h1> <p> Responda as perguntas e veja o quão fã você é!! </br> </br> </br> </br>Obs: Caso os acertos sejam menores quem 3 procure uma playlist nova</p> </h1>
 </div>
 </div >
 <div class="col-md-6">
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('storage/imagem/Djonga.webp')}}" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('storage/imagem/capa-corra.jpg')}}" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('storage/imagem/cantando.jpg')}}" alt="Terceiro Slide">
    </div>
    
  </div>
  <div> 
 </div>
</div>
</div>
<div class ="col-md-6 ">
<a href ="/iniciar" class ="btn btn-outline-warning" role =" button "> Começar </a >
</div>
 </div>
 </div>