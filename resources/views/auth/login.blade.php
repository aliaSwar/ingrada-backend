<x-layouts.guest name="login">

    <form action="{{ route('login') }}"
        method="post"
        enctype="multipart/form-data"
        class="signin-form">
        @csrf
        <div class="form-group mb-3">
            <label class="label"
                for="name">Username</label>
            <input type="text"
                name="username"
                class="form-control @error('username') border-danger @enderror"
                name="username"
                placeholder="Username"
                required>
            @error('username')
            <div>
                <div class="alert alert-danger">{{ $message }}</div>
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="label"
                for="password">Password</label>
            <input type="text"
                name="password"
                class="form-control @error('password') border-danger @enderror"
                placeholder="Password"
                required>
            @error('password')
            <div>
                <div class="alert alert-danger">{{ $message }}</div>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit"
                class="form-control btn btn-primary rounded submit px-3">Sign In</button>
        </div>
        <div class="form-group d-md-flex">
            <div c
                lass="w-50 text-left">
                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                    <input type="checkbox"
                        checked>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="w-50 text-md-right">

                <a href="{{ route('password.request') }}">
                    <span type="text"
                        data-toggle="modal"
                        data-target="">
                        forget
                        password

                    </span>
                </a>
</x-layouts.guest>