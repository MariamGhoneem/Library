@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Categories</h3>
      <div class="box-tools pull-right">
        <a class="btn btn-primary" href="{{route('categories.create')}}">Add category</a>
      </div>
    </div>
    <div class="box-body">
        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                </tr>
            </thead>
            @if (count($categories)>0)
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        {{-- <td>{{$category->name}}</td> --}}
                        <td><a href="{{route('category',$category->id)}}">{{$category->name}}</a></td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
  </div>

@stop
