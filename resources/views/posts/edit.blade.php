@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Post</h1>
@stop

@section('content')
@livewireStyles
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form  method="POST">
                        @csrf
                        <div class="form-group">
                            TOPIC
                            <input type="text" class="form-control" name="topic" value="{{ $post->topic }}">
                        </div>
                        <div class="form-group">
                            TOPIC
                            <textarea class="form-control" name="description">{{ $post->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@livewireScripts
@stop

{{-- removed students --}}

