@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
          <form class="form-horizontal" action="/blogs" method="POST">
            {{ csrf_field() }}
            <fieldset>
              <legend>Create Article</legend>
              <div class="form-group">
                <label for="inputTitle" class="col-lg-1 control-label">Title</label>
                <div class="col-lg-11">
                  <input class="form-control" name="title" id="inputTitle" placeholder="Title" type="text">
                </div>
              </div>

              <div class="form-group">
                <label for="textBody" class="col-lg-1 control-label">Body</label>
                <div class="col-lg-11">
                  <textarea class="form-control" name="body" rows="30" id="article-ckeditor"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="select" class="col-lg-1 control-label">Category</label>
                <div class="col-lg-11">
                  <select class="form-control" name="category_name" id="select">
                    @foreach ($categories as $category)
                      <option>{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-11 col-lg-offset-1">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
          {{-- Display if there are errors --}}
          @if(count($errors) > 0)
            <div class="alert-danger">
              @foreach($errors->all() as $error)
                {{ $error }}
              @endforeach
            </div>
          @endif
        </div>
    </div>
</div>
@endsection
