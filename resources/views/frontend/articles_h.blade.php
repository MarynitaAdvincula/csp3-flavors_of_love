@extends('layouts.home')
@section('content')
    {{-- @include('frontend._lang_filters') --}}
    @include('frontend._article_list_h', ['articles' => $articles])
@endsection
