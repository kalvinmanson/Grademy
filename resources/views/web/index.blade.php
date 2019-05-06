@extends('layouts.app')

@section('content')
<div class="bg-dark text-white py-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-8 m-auto">
        <div class="input-group input-group-lg mb-3">
          <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="card-columns">
    @foreach ($last_posts as $last_post)
    <div class="card">
      <img src="{{ $last_post->picture }}" class="card-img-top" alt="{{ $last_post->name }}">
      <div class="card-body">
        <h5 class="card-title">{{ $last_post->name }}</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-link btn-outline-danger float-right text-danger"><i class="far fa-heart"></i></a>
        <img src="{{ $last_post->user->avatar }}" width="18" class="rounded-circle"> <a href="#">{{ $last_post->user->name }}</a><br>
        <i class="far fa-clock"></i> {{ $last_post->created_at->diffForHumans() }}
      </div>
    </div>
    @endforeach
  </div>
</div>
<div class="container text-center py-5">
  <h2>Últimos usuarios</h2>
  @foreach($last_users as $last_user)
    <img src="{{ $last_user->avatar }}" class="img-fluid m-2">
  @endforeach
</div>
@endsection
