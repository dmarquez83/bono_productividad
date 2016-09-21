@if ($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <button class="close" data-close="alert"></button>
            {{ $error }}
        @endforeach
    </div>
@endif
