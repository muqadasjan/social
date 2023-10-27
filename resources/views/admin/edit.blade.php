@extends('layout.Master')
@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <h2>{{$page}} Post</h2>
        <form class="form-horizontal" action = "{{route('admin.update',['admin'=>$post->id])}}" method = "post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value = "{{$post->title}}" name = "title" placeholder="Title">
                    @error('title')
                        <p class = "text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                <div class="col-sm-10" required>
                <input type="file" name = "image">
                    @error('image')
                        <p class = "text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                <textarea name="description" class  ="form-control"  cols="30" rows="10">{{$post->description}}</textarea>
                @error('description')
                        <p class = "text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>




@endsection 