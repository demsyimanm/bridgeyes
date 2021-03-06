<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BRIDGE YES</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.css')}}">
<!-- <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.min.css')}}"> -->
<link rel="stylesheet" href="{{URL::to('assets/css/bootstrap-responsive.css')}}">
<link rel="stylesheet" href="{{URL::to('assets/css/prettyPhoto.css')}}" >
<link rel="stylesheet" href="{{URL::to('assets/css/flexslider.css')}}" >
<link rel="stylesheet" href="{{URL::to('assets/css/custom-styles.css')}}">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->

<script src="{{URL::to('assets/js/jquery-1.11.3.min.js')}}"></script>
<script src="{{URL::to('assets/js/bootstrap.js')}}"></script>
<!-- <script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script> -->
<script src="{{URL::to('assets/js/moment.js')}}"></script>
<script src="{{URL::to('assets/js/clndr.min.js')}}"></script>

<script src="{{URL::to('assets/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{URL::to('assets/js/jquery.flexslider.js')}}"></script>
<script src="{{URL::to('assets/js/jquery.custom.js')}}"></script>

<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});
$('#calendar').clndr();
</script>
<link href="{{URL::to('assets/js/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{URL::to('assets/js/summernote/summernote.css')}}" rel="stylesheet">
<script src="{{URL::to('assets/js/summernote/summernote.min.js')}}"></script>

<script>
    $(document).ready(function(){
        $(function(){
            $('#textbox').summernote(
                {
                      height: 200,

                      minHeight: null,
                      maxHeight: null,

                      focus: true,
                });
        });
    });
</script>