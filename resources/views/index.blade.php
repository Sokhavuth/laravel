<!--resources/views/index.balde.php-->
@include('partials.header')
<link href="{{ asset('styles/index.css') }}" rel='stylesheet' />

<div class='Main'>
@foreach ($posts as $post)
<div class='item'>
    <a href="<?php echo url('/post') ?>/{{ $post->id }}">
        <img class='thumb' src="{{ $post->thumb }}" />
    </a>
    <div class="title">
        <a href="<?php echo url('/post') ?>/{{ $post->id }}">
        {{ $post->title }}
        </a>
        <div>
        <script>
            var date = new Date('{{ $post->created_at }}')
            document.write(date.toLocaleDateString())
        </script>
        </div>
    </div>
</div>
@endforeach
</div>

@include('partials.footer')