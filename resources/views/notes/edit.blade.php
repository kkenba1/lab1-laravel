@extends('notes.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Note</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('notes.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ route('notes.update',$note->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="inputTitle" class="form-label"><strong>Title:</strong></label>
                <input
                    type="text"
                    Title="Title"
                    value="{{ $note->title }}"
                    class="form-control @error('Title') is-invalid @enderror"
                    id="inputTitle"
                    placeholder="Title">
                @error('Title')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputcontent" class="form-label"><strong>content:</strong></label>
                <textarea
                    class="form-control @error('content') is-invalid @enderror"
                    style="height:150px"
                    Title="content"
                    id="inputcontent"
                    placeholder="content">{{ $note->content }}</textarea>
                @error('content')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
<<<<<<< HEAD
=======

            <div class="mb-3">
                <label for="inputcontent" class="form-label"><strong>subject:</strong></label>
                <textarea
                    class="form-control @error('subject') is-invalid @enderror"
                    style="height:150px"
                    Title="subject"
                    id="inputcontent"
                    placeholder="subject">{{ $note->subject }}</textarea>
                @error('subject')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

>>>>>>> 0a266ac610b9e19484e347233c42fb3658a77814
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </form>

    </div>
</div>
@endsection