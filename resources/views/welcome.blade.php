@extends('layouts.default')
@section('content')

<div class="container">
    <div class="row" id="main_area">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="card">
                @foreach ($data as $d)
                    <img src="{{$d->image_path}}">                    
                @endforeach
            </div>
            <div class="text-center mt-3">
                {{ $data->links() }}
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

@endsection
