@extends('layouts.app')

@section('title', 'Edit Article')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <h3 class="text-center py-5">Edit Article</h3>
        <div class="container pb-5">
            <form action="{{ route('articles.update', ['article' => $article]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('articles.form')

                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>

@endsection
