<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="description"
        content="">
    <meta name="author"
        content="">
    <!-- Favicon icon -->
    <link rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{ asset( 'assets/images/favicon.jpg') }}">
    <title>{{ config('app.name', 'Engrada Creative') }}</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css"
        rel="stylesheet">

    {{ $styles ?? '' }}
    <link href="{{ asset( 'assets/auth/login.css')  }}"
        rel="stylesheet">
</head>

<body>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">

                        <x-auth-image />
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4"> LOGIN</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">

                                    </p>
                                </div>
                            </div>


                            {{ $slot }}




                            <div class="modal fade"
                                id="exampleModalCenter"
                                tabindex="-1"
                                role="dialog"
                                aria-labelledby="exampleModalCenterTitle"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="Forget"
                                                id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button"
                                                class="close"
                                                data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <x-submit-auth-button />
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    {{ $scripts ?? '' }}


</body>

</html>