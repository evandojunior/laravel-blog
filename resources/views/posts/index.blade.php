@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>
                {{-- <div class="panel-body"> --}}
                    <table class="table table-bordered table-responsive">
                        <th>#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Author</th>
                        <th>Country</th>
                        <th>Comments</th>
                        <th>Tags</th>
                        <tbody>
                            @foreach ($posts as $post)
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                <td>{{$post->author->name}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endforeach
                        </tbody>
                    </table>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
