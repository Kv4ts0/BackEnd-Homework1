@extends('Layouts.Main', [
'Theme' => $Theme,
'textcolor' => $textcolor
])
@section('title', $title)

@section('content')
    <h1>{{ $text }}</h1>
    @if($showFooter)
    @include('Components.Footer')
    @endif
@endsection

