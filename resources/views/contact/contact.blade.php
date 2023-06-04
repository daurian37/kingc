
    <h1>Contactez-nous</h1>



    <form action="{{ route('contact') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            
