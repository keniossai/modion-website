@extends('includes.layouts')



@section('content')

<div class="page-title">
    <div class="container">
        <div class="padding-tb-170px">
            <h1>Create Post</h1>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
                <h1>Create a Post</h1>
            <form action="{{route('posts.store')}}" method="post" id="form" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls form-floating">
                      <label>Title</label>
                      <input type="text" placeholder="Title" id="title" name="title" class="form-control f-control">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls form-floating">
                      <label>Subtitle</label>
                      <input type="text" placeholder="Subtitle" id="subtitle" name="subtitle" class="form-control f-control">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls form-floating">
                      <label>Content</label>
                      <textarea class="f-control" name="content" id="content" placeholder="Content..." id="textContent" cols="65" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group mt-5">
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="form-group text-center my-4">
                    <button type="submit" onclick="postSuccessful" class="btn btn-primary btn-block">Create Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection