<x-layouts.guest>

    <form action="{{ route('password.email') }}" method="post" enctype="multipart/form-data" class="signin-form">
        @csrf
        <div class="form-group mb-3">
            <label class="label" name="email" for="name">Email</label>
            <input type="text" class="form-control @error('email') border-danger @enderror" name="e" placeholder="e" required>
            @error('email')
            <div>


                <div class="alert alert-danger">{{ $message }}</div>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
        </div>
    </form>
</x-layouts.guest>