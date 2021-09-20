@extends('layouts.app')

@section('content')

    <div class="card text-center">
        <div class="card-header">
            Post scritto da: "{{$post->author}}" 
        </div>
        <div class="card-body">
            <h1 class="card-title">{{ $post->title}}</h1>
            <hr>
            <p class="card-text">{{ $post->description}}</p>
        </div>
        <div class="card-footer text-muted">
            
            @if($post->category)
            <p>{{$post->category->name}}</p>
            @else
            <p>Nessuna categoria selezionata</p>
            @endif
            
        </div>
        <div class="card-footer text-muted">
            @forelse($post->tags as $tag)
            <span class="badge bg-warning my-1">{{ $tag->name}}</span>
            @empty
            <p>Nessun Tag selezionato</p>
            @endforelse
        </div>
    </div>

    <button type="submit" class="btn btn-dark d-block mt-5"><a class="white" href="{{ route('admin.posts.index') }}">Back</a></button>

    

@endsection