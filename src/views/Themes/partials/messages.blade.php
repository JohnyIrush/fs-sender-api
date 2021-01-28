@if ($message = Session::get('success'))
<div class="alert bg-color-greenlight alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="">{{ $message }}</strong>
</div>
@endif
  
@if ($message = Session::get('error'))
<div class="alert bg-color-red alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="text-color-white" class="text-color-white">{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('warning'))
<div class="alert bg-color-yellowlight alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="text-color-white">{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="text-color-white">{{ $message }}</strong>
</div>
@endif
  
@if ($errors->any())
<div class="alert alert-danger text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    Please check the form below for errors
</div>
@endif