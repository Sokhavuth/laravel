@include('admin.partials.header')
<script src="{{ asset('scripts/ckeditor/ckeditor.js') }}"></script>
<link href="{{ asset('styles/admin/post.css') }}" rel='stylesheet' />

<div class='Post'>
    <form action="<?php echo url('/admin/post') ?>" method='post'>
    @csrf
        <input type='text' name='title' required />
        <textarea class='editor' name='content' id='editor'></textarea>
        <div class='wrapper'>
            <input type='text' name='thumb' required />
            <input type='datetime-local' name='datetime' required />
            <input type='submit' value='បញ្ជូន' />
        </div>
    </form>
</div>

<script src="{{ asset('scripts/ckeditor/config.js') }}"></script>

@include('partials.footer')