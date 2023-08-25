@if ($errors->any())
    <div class="alert alert-warning" role="alert">
        <ul class="m-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ $action }}" method="POST">
    @csrf
    @method($method)
    {{ $slot }}
</form>
