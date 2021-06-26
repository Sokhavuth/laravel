<!--resources/views/post.balde.php-->
@include('partials.header')
<link href="{{ asset('styles/post.css') }}" rel='stylesheet' />

<div class='Main'>
@foreach ($posts as $post)
<div class='post'>
    <div class='title'>{{ $post->title }}</div>
    <div class='date'>{{ $post->created_at }}</div>
    <div class='content'>{!! $post->content !!}</div>
</div>
@endforeach
</div>

@include('partials.footer')