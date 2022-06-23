<!doctype html>
<html lang="en">

<head>
    <title>Login Kepegawaian</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ url('css/style.css') }}" rel="stylesheet">

</head>

<body class="img js-fullheight" style="background-image: url('../images/background.jpg');">
    <section class="ftco-section">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center mb-5">
                    <img src="{{ url('images/logo.png')}}" height="200px" width="200px;">
                    <h2 class="heading-section">KEPEGAWAIAN POLITEKNIK NEGERI SAMBAS</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">

                        <form action="{{ route('Dosen.check') }}" method="post" class="signin-form">

                            @csrf
                            <div class="form-group">
                                <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror"
                                    name="nip" value="{{ old('nip') }}" placeholder="Nomor Induk Pegawai" required
                                    autofocus>
                                @error('nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="password" type="password" class="form-control"
                                    placeholder="Password" value="{{ old('password') }}" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password "></span>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('js/jquery.min.js')}}"></script>
    <script src="{{ url('js/popper.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/main.js')}}"></script>

</body>

</html>