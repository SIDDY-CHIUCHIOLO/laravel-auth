@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th class="fw-bold text-primary fs-2">TITLE</th>
                        <th class="fw-bold text-primary fs-2">AUTHOR</th>
                        <th class="fw-bold text-primary fs-2">CREATED</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                    
                        <tr>
                            <th>
                                <a href="{{route('admin.posts.show', $post)}}">{{$post->title}}</a>
                            </th>
                            <th>
                                {{$post->author}}
                            </th>
                            <th>
                                {{$post->created_at}}
                            </th>
                        </tr>
                    
                    @empty
                        <tr>
                            <th colspan="3">Non ci sono post da mostrare</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection