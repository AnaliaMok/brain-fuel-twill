@extends('layouts.app')

@section('content')
<article>
  <h1>{{ $item->title }}</h1>
  @if($item->hasImage('hero_image'))
    <img src="{{ $item->image('hero_image', 'default') }}" alt="{{ $item->imageAltText('hero_image') }}">
  @endif
  <div>{!! $item->description !!}</div>
</article>
@endsection