@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('admin.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Content Title <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="content-title" value="{{ old('conten_title') }}" />
            </div>
            <div class="mb-3">
                <label>Content <span class="text-danger">*</span></label>
                <textarea class="form-control" name="content"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
    </div>
</div>