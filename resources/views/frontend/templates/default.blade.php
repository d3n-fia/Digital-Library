<!DOCTYPE html>
<html lang="en">
   @include('frontend.templates.partials.head')
<body>
<!-- navigator -->
    @include('frontend.templates.partials.navbar')
<!-- content -->
<div class="container">
    @yield('content')
</div>
   
<!-- script -->
<!-- Compiled and minified JavaScript -->
    @include('frontend.templates.partials.scripts')  
    @include('frontend.templates.partials.toast')  
</body>
</html>