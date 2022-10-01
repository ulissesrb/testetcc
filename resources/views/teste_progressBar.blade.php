@extends('layouts.template')

@section('content')

<div id="progress-bar"></div>

<button type="submit" class="button entra" name="progress" onclick="progress()"> ++</button>

<script> 
    function progress() {
        var elem = document.getElementById("progress-bar");
        var width = 1;
        var id = setInterval(frame, 10);
        function frame() {
            if (width >= 100) {
                clearInterval(id);
            } else {
                width++;
                elem.style.width = width + '%';
            }
        }
}
    
</script>



@endsection