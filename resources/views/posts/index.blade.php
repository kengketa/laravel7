@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Posts</h1>
@stop

@section('content')
@livewireStyles
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->topic }}</td>
                                <td>{{ $post->description }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@livewireScripts
@stop

{{-- removed students --}}

