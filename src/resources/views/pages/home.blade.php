<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zinad Customer Portal</title>
<!--

Tooplate 2095 Level

https://www.tooplate.com/view/2095-level

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/font-awesome-4.7.0/css/font-awesome.min.css')}}">                <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="{{asset('assets/css/tooplate-style.css')}}">                                   <!-- Templatemo style -->

</head>

    <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="img/zinad-logo.jpg" width="120px" height="66px">
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>                          
                        </nav>            
                    </div>
                </div>
            </div>
            <div class="tm-section tm-bg-img" id="tm-section-1">
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                                {!! Form::open(['method' => 'POST', 'route' => ['customer_data'],'files' => true,'class'=>'row']) !!}   
                                {{ csrf_field() }}
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-100">
                                            <i class="fa-2x tm-form-element-icon"></i>
                                            <input name="customer_name" type="text" class="form-control" id="inputCity" placeholder="Type Customer Name...">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa-2x tm-form-element-icon"></i>
                                            <input name="version" type="text" class="form-control" id="inputCity" placeholder="Type Demo Version...">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa-2x tm-form-element-icon"></i>
                                            <input name="port" type="text" class="form-control" id="inputCity" placeholder="port">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa-2x tm-form-element-icon"></i>
                                            <label>Upload Customer Logo<span style="color:#f00;">*</span></label>
                                            <input type="file" class="form-control-file" >
                                        </div>
                                    </div>
                                        <div class="form-group tm-form-element tm-form-element-2">
                                        <button type="submit" class="btn btn-danger ">Test</button>
                                        </div>
                                      </div>
                                      {!! Form::close() !!}  
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>
            <footer class="tm-bg-dark-blue">
                <div class="container">
                    <div class="row">
                        <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                        Copyright &copy; <span class="tm-current-year">2024</span> ZINAD
                        </p>        
                    </div>
                </div>                
            </footer>
        </div>
        
        <!-- load JS files -->
        <script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="{{asset('assets/js/popper.min.js')}}"></script>                    <!-- https://popper.js.org/ -->       
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="{{asset('assets/js/jquery.singlePageNav.min.js')}}"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
</body>
</html>