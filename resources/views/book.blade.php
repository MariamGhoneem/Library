{{-- @if (count($book)>0) --}}
{{-- @if ($book->relation()->exists()) --}}
@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">Book Name</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('storage/thumbnails/'.$book->image)}}" class="img-responsive"/>
                        </div>

                        <div class="col-md-8 text-center">
                            <h2>{{$book->title}}</h2>
                            <p>{{$book->info}}</p>
                            <br/>
                            Author : {{$book->author}} <br/>
                            <a href="{{asset('storage/books/'.$book->bookfile)}}" class="btn btn-primary">Download</a>
                        </div>

                    </div>
                </div>
            </div>
<hr>
@include('commentbox')
        
@endsection   
{{-- @else
    No Book Found
@endif --}}

