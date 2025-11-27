<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand btn btn-primary" href="{{ route('welcome') }}">Go Back</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>
<form action="{{ route('store') }}" method="POST">
    @csrf
    <div class="card p-5">
        <h1 class="text-center m-5">Welcome to learning Laravel . Please fill up this form</h1>

        <div class="mb-3">
            <label for="name_input" class="form-label">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name_input"
                aria-describedby="nameHelp">
            @error('name')
                <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email_input" class="form-label">Email address</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email_input"
                aria-describedby="emailHelp">
            @error('email')
                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone_input" class="form-label">Phone Number</label>
            <input type="number" name="phone_number" value="{{ old('phone_number') }}" class="form-control"
                id="phone_input" aria-describedby="phoneHelp">
            @error('phone_number')
                <div id="phoneHelp" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_input" class="form-label">Password</label>
            <input type="password" name="password" value="{{ old('password') }}" class="form-control"
                id="password_input" aria-describedby="passwordHelp">
            @error('password')
                <div id="passwordHelp" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
