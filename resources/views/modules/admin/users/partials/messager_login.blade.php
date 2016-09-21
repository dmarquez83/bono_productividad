@if ($errors->any())
    <div class="alert alert-danger">
        <p>Por favor Corrige los Errores:</p>
        <button class="close" data-close="alert"></button>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

