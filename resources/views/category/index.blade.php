@extends('layouts.sidebar')

@section('content')

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <form method="POST" action="{{ route('category.store') }}">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="category_name" class="form-control" placeholder="New Category">
            <div class="input-group-append">
              <button class="input-group-text" type="submit">ADD</button>
            </div>
          </div>
        </form>
    </div>
    <div class="col-sm-3"></div>
</div>

<div class="row">
  <div class="col-sm-12">
    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Category List</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                     <th>#ID</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($data as $d)
                  <tr>
                    <td>{{$d->id}}</td>
                    <td>{{ $d->category_name }}</td>
                    <td>Edit</td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
  </div>
</div>







@endsection
