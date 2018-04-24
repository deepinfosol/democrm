
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! | Login</title>

        <!-- Bootstrap -->
        <link href="{{ URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{ URL::asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ URL::asset('build/css/custom.min.css')}}" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form method="get" action="{{url('dashboard')}}">
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" />
                            </div>


                            <div style="text-align: right">
                                <button class="btn btn-default">Log in</button>



                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="left">

                                    <p class="change_link">
                                        <a href="#signup" class="to_register">Forget password? </a>
                                    </p>

                                </div>
                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><img src="{{URL::asset('images/logo.png')}}" alt="{{env('BRAND')}}"/></h1>
                                    <p>©{{date('Y')}} All Rights Reserved. <a href="deepinfosolution.com">DeepInfoSolution</a></p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>

                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <form>
                            <h1>Forget Password</h1>
                            <div>
                                <input type="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div style="text-align: right">
                                <a class="btn btn-default submit">Submit</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Already a member ?
                                    <a href="#signin" class="to_register"> Log in </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                     <h1><img src="{{URL::asset('images/logo.png')}}" alt="{{env('BRAND')}}"/></h1>
                                    <p>©{{date('Y')}} All Rights Reserved. <a href="deepinfosolution.com">DeepInfoSolution</a></p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>

            </div>
        </div>
    </body>
</html>
