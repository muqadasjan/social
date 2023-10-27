@extends('layout.Master')
@section('content')
<h4>{{$page}}</h4>

<div class="row ">
    <div class="col-md-6 mx-auto">
        <a href="{{route('admin.create')}}" class  = "btn btn-primary mb-2">Create</a>
        <table class = "table table-bordered">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td><a href="{{route('admin.edit',['admin'=>$post->id])}}"><i class = "fa fa-edit"></i></a> | <a href="{{route('delete',['id'=>$post->id])}}"><i class = "fa fa-trash"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>






@endsection 