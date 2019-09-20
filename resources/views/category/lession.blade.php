@extends('layouts.sidebar')
@section('content')

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <form method="POST" action="{{ route('lession.store') }}">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="lession_name" class="form-control" placeholder="New Lession....">
            <div class="input-group-append">
              <button class="input-group-text" type="submit">ADD</button>
            </div>
          </div>
        </form>
    </div>
    <div class="col-sm-3"></div>
</div>


<div class="card_section">
   @foreach($data as $d)
    <a href="{{ route('category.edit',$d->id) }}" class="card_body" style="float: left;
    padding: 50px;
    border: 1px solid grey;
    border-radius: 6px;
    color: white;
    background: rgb(52, 58, 64);
    margin: 5px;
    text-decoration: none;
    ">
      {{ $d->lession_name }}      
    </a>
  @endforeach
</div>


@endsection