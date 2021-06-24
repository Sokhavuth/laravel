<!--resources/views/partials/menu.blade.php-->
<link href="{{ asset('styles/partials/menu.css') }}" rel='stylesheet' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="<?php echo url("/") ?>" class="active">ទំព័រ​ដើម</a>
  <a href="#news">ព័ត៌មាន</a>
  <a href="#contact">ទំនាក់ទំនង</a>
  <div class="dropdown">
    <button class="dropbtn">ជំពូក
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">តំណរភ្ជាប់ ១</a>
      <a href="#">តំណរភ្ជាប់ ២</a>
      <a href="#">តំណរភ្ជាប់ ៣</a>
    </div>
  </div>
  <a href="#about">អំពី​យើង​ខ្ញុំ</a>
  <a href="<?php echo url("/login") ?>">ចូល​ក្នុង</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>