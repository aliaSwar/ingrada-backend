<x-layouts.guest>
    <x-slot name="styles">
        <link rel="stylesheet"
            href="css-auth/style.css">
    </x-slot>
    <div class="login-wrap p-4 p-md-5">
        <div class="d-flex">
            <div class="w-100">
                <h3 class="mb-4"> LOGIN</h3>
            </div>
            <div class="w-100">
                <p class="social-media d-flex justify-content-end">

                </p>
            </div>
            <form class="mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label class="form-label text-dark"
                                for="uname">Username</label>
                            <input class="form-control"
                                id="uname"
                                type="text"
                                placeholder="enter your username">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label class="form-label text-dark"
                                for="pwd">Password</label>
                            <input class="form-control"
                                id="pwd"
                                type="password"
                                placeholder="enter your password">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit"
                            class="btn w-100 btn-dark">Sign In</button>
                    </div>

                    <div class="col-lg-12 text-center mt-5">
                        Don't have an account? <a href="#"
                            class="text-danger">Sign Up</a>
                    </div>
                </div>
            </form>
        </div>
    </div>




</x-layouts.guest>