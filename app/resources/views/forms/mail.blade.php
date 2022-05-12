<!DOCTYPE html>  
<html lang = "en">  
  <head>  
    <title> Mail Form </title>  
    <meta charset = "utf-8">  
    <meta name = "viewport" content = "width=device-width, initial-scale = 1">  
    <link href = "{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel = "stylesheet">  
    <script src = "{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>  
  </head>  
  <body>  
    <div class = "container mt-3">
      @if (session()->has('text'))
      <p>{{ session('text') }}</p>
      @endif   
      <form url = " {{ route('send.mail') }} " method="POST">  
        <label for = " message"> Message </label>  
        {{ @csrf_field() }}
        <div class="my-2">  
          <textarea class = "form-control" rows = "10" id = "message" name = "message" placeholder="Write your message here"></textarea>
          {{ $errors->first('message', ":message")}}  
        </div>
        <button type = "submit" class = "btn btn-primary"> Submit </button>  
      </form>  
    </div>  
  </body>  
</html>  