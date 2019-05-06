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
@endsection
