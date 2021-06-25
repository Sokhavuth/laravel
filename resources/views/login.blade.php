<!--resources/views/login.blade.php-->
@include('partials/header')

<link href="{{ asset('styles/login.css') }}" rel='stylesheet' />

<div class='Login'>
    <div class='title'>ទំព័រ​ចុះ​ឈ្មោះ​ចូល​ទំព័រ​គ្រប់គ្រង</div>
    <form action="<?php echo url('/login') ?>" method='post'>
    @csrf
        <a>Email: </a><input type="email" name="email" required />
        <a>ពាក្យ​សំងាត់ៈ</a><input type='password' name='password' required />
        <a></a><input type='submit' value='បញ្ជូន' />
        <a></a><div class='message'>{{ $message }}</div>
    </form>
</div>


@include('partials/footer')