@extends('Layout.master')
@section('content')
<h4>{{$page}}</h4>

<div class="row">
    <div class="col-md-6 mx-auto">
        @foreach($posts as $post)
        <div class="card mb-4">
            <img src="{{asset('upload/'.$post->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <a href="#" class="btn btn-primary">Show</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-md-4 mx-auto">
    {{$posts->links('pagination::bootstrap-4')}}
    </div>
</div>



@endsection 