@extends('partials.app')

@section('content')
    <main>
        @include('home.Hero')
        @include('home.About')
        @include('home.CoreValuesSection')
        @include('home.ServicesPreview')
        @include('home.DownloadsSection')
        @include('home.Contact')
    </main>
@endsection 