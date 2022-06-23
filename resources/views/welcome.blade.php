<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Halaman Login Kepegawaian POLTESA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ url('backend/css1/style.css') }}" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"><a href="#" class="btn btn-custom waves-effect waves-light mb-4"
                        data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200"
                        data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Login</a></div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-5">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>DOSEN</h4>
                                <p class="text-muted">@Dosen <span>| </span>
                                    <span><a href="#" class="text-pink">pastikan
                                            sudah punya akun</a></span>
                                </p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light"> <a
                                    class="text-white" href="{{ route('Dosen.login') }}">LOGIN</a> </button>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-5">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>TENDIK</h4>
                                <p class="text-muted">@Tendik <span>| </span><span><a href="#"
                                            class="text-pink">pastikan sudah punya akun</a></span></p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light"> <a
                                    class="text-white" href="{{ route('Tendik.login') }}">LOGIN</a> </button>

                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-4">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>UNIT PENGAJUAN SURAT ATAU SK</h4>
                                <p class="text-muted">@Unit <span>| </span><span><a href="#" class="text-pink">pastikan
                                            sudah punya akun</a></span></p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light"> <a
                                    class="text-white" href="{{ route('Unit.login') }}">LOGIN</a> </button>

                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-4">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>PROSES PENGUSULAN SURAT ATAU SK</h4>
                                <p class="text-muted">@Users <span>| </span><span><a href="#" class="text-pink">pastikan
                                            sudah punya akun</a></span></p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light"> <a
                                    class="text-white" href="{{ route('user.login') }}">LOGIN</a> </button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container -->
    </div>


    <script type="text/javascript">
    </script>
</body>

</html>