<!DOCTYPE html>
<html lang="en">
<head>

	<title>Project Perwalian</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{('assets/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{('assets/css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{('assets/css/owl.theme.default.min.css')}}">
     <link rel="stylesheet" href="{{('assets/css/font-awesome.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{('assets/css/tooplate-style.css')}}">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Soft Landing</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="{{URL::to('')}}" class="smoothScroll">Home</a></li>
                         <li><a href="{{URL::to('features')}}" class="smoothScroll">Features</a></li>
                         <li><a href="{{URL::to('about')}}" class="smoothScroll">About us</a></li>
                         <li><a href="{{URL::to('contact')}}" class="smoothScroll">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#">Silvia Ananda - <span>silviananda998@gmail.com</span></a></li>  <!-- nnti tarok email yang masuk(dri database) -->
                    </ul>
               </div>

          </div>
     </section>


@yield('content')

     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                              <p>Copyright &copy; 2019: Monita Surya Putri&Silvia Ananda
                				<a rel="nofollow" href="http://tooplate.com">Tooplate</a></p>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="{{('assets/js/jquery.js')}}"></script>
     <script src="{{('assets/js/bootstrap.min.js')}}"></script>
     <script src="{{('assets/js/jquery.stellar.min.js')}}"></script>
     <script src="{{('assets/js/owl.carousel.min.js')}}"></script>
     <script src="{{('assets/js/smoothscroll.js')}}"></script>
     <script src="{{('assets/js/custom.js')}}"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>