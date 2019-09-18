@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="main_area">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card">
                @foreach ($data as $d)
                    <img src="{{$d->image_path}}">                    
                @endforeach
            </div>
            <div class="text-center mt-3">
                {{ $data->links() }}
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>    
</div>
@endsection
