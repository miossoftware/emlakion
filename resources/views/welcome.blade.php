@if(session()->has('user') && csrf_token())
    <script>window.location.href = "/index";</script>
@else
    <script>window.location.href = "/login";</script>
@endif
