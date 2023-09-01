@if ($message = Session::get('success'))
<div class="pt-3">
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
</div>

@endif

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif