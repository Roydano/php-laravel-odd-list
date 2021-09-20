@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$post->title}}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <select class="form-control" name="category_id" id="category">
                <option value="">-- seleziona una categoria --</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @if($category->id == old('category_id', $post->category_id)) selected @endif)>{{ $category->name }}</option>
                @endforeach
            </select>
            <!-- <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$post->title}}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="desc" cols="30" rows="10">{{$post->description}}</textarea>
            @error('decription')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror      
        </div>
        <div class="mb-3">
            <label for="sign" class="form-label">Autore</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="sign" name="author" value="{{$post->author}}">
            @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <h4 class="mt-5">Tags</h4>
        @foreach($tags as $tag)
        <div class="form-check d-inline-block my-1 mx-2">
            <input class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="{{ $tag->id }}" name="tag[]"
            @if(!$errors->any() && $post->tags->contains($tag->id))
            checked
            @elseif(in_array($tag->id, old('tag', [])))
            checked
            @endif>
            <label class="form-check-label" for="{{ $tag->id }}">
                {{ $tag->name }}
            </label>
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary d-block mt-5">Submit</button>
    </form>
</div>

@endsection