@extends('user.layout.user-layout')
@section('title')
    Thông báo
@endsection
<<<<<<< Updated upstream
@section('css')

=======
@section('css')C
>>>>>>> Stashed changes
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<<<<<<< Updated upstream
  
=======
>>>>>>> Stashed changes
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('js')

    
@endsection
@section('main-content')
<!-- start page title -->
        
<div class="row">
  
 >

<div class="row main">
<<<<<<< Updated upstream
  <div class="column left" >
    <h2><b>Thông báo</b></h2></br>
    <div class = "form group">
    @if (count($thongbao)>0)
        @foreach ($thongbao as $thong_bao )
             <label ><a href="/thong-bao/{{$thong_bao->id}}"><u>{{$thong_bao->tieu_de_tb}}</u></a></label>       
        @endforeach     
    @endif
  </div>
  </div>
=======
  <div class="column left">
    <h2>Thông báo</h2></br>
    @if (count($thongbao)>= 0)
        @foreach ($thongbao as $thong_bao )
        <h4 ><a href="/thong-bao/{{$thong_bao->id}}">{{$thong_bao->tieu_de_tb}}</a></h4>       

            {{Form::hidden('_method','DELETE')}}                         
        @endforeach     
    @endif
  </div>
  @if($thongbao2)
>>>>>>> Stashed changes
  <div class="column right" >
    <h2 style="text-align:center">{{$thongbao2->tieu_de_tb}}</h2>
    </br>
        <div class="container" >{!!(substr($thongbao2->noi_dung_tb,0, )) !!}</div>
    </br>
  </div>
<<<<<<< Updated upstream
=======
  @endif        
>>>>>>> Stashed changes
</div>


<!-- Css cho trang -->
<style>
    * {
    box-sizing: border-box;
    }

    /* Style the body */
    body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    }

    /* Header/logo Title */
    .header {
    padding: 80px;
    text-align: center;
    background: #1abc9c;
    color: white;
    }

    /* Increase the font size of the heading */
    .header h1 {
<<<<<<< Updated upstream
         font-size: 40px;
=======
    font-size: 40px;
>>>>>>> Stashed changes
    }

    /* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
    .navbar {
<<<<<<< Updated upstream
        overflow: hidden;
        background-color: #333;
        position: sticky;
        position: -webkit-sticky;
        top: 0;
=======
    overflow: hidden;
    background-color: #333;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
>>>>>>> Stashed changes
    }

    /* Style the navigation bar links */
    .navbar a {
<<<<<<< Updated upstream
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
=======
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
>>>>>>> Stashed changes
    }


    /* Right-aligned link */
    .navbar a.right {
<<<<<<< Updated upstream
         float: right;
=======
    float: right;
>>>>>>> Stashed changes
    }

    /* Change color on hover */
    .navbar a:hover {
<<<<<<< Updated upstream
        background-color: #ddd;
        color: black;
    }

    /* Active/current link */
        .navbar a.active {
        background-color: #666;
        color: white;
=======
    background-color: #ddd;
    color: black;
    }

    /* Active/current link */
    .navbar a.active {
    background-color: #666;
    color: white;
>>>>>>> Stashed changes
    }

    /* Column container */
    .row {  
<<<<<<< Updated upstream
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
=======
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
>>>>>>> Stashed changes
    }

    /* Create two unequal columns that sits next to each other */
    /* Sidebar/left column */
    .side {
<<<<<<< Updated upstream
        -ms-flex: 30%; /* IE10 */
        flex: 30%;
        background-color: #f1f1f1;
        padding: 20px;
=======
    -ms-flex: 30%; /* IE10 */
    flex: 30%;
    background-color: #f1f1f1;
    padding: 20px;
>>>>>>> Stashed changes
    }

    /* Main column */
    .main {   
<<<<<<< Updated upstream
        -ms-flex: 70%; /* IE10 */
        flex: 70%;
        background-color: white;
        padding: 20px;
=======
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color: white;
    padding: 20px;
>>>>>>> Stashed changes
    }

    /* Fake image, just for this example */


    /* Footer */
    .footer {
<<<<<<< Updated upstream
        padding: 20px;
        text-align: center;
        background: #ddd;
    }

    * {
         box-sizing: border-box;
=======
    padding: 20px;
    text-align: center;
    background: #ddd;
    }

    * {
  box-sizing: border-box;
>>>>>>> Stashed changes
    }

    /* Create two unequal columns that floats next to each other */
    .column {
<<<<<<< Updated upstream
        float: left;
        padding: 10px;
        height: 1000px; /* Should be removed. Only for demonstration */
    }

    .left {
        width: 30%;
        border-right:2px solid black;
    }

    .right {
         width: 70%;
=======
    float: left;
    padding: 10px;
    height: 1000px; /* Should be removed. Only for demonstration */
    }

    .left {
    width: 30%;
    border-right:2px solid black;
    }

    .right {
    width: 70%;
>>>>>>> Stashed changes
    }

    /* Clear floats after the columns */
    .row:after {
<<<<<<< Updated upstream
        content: "";
        display: table;
        clear: both;
    }

        /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
    .row {   
        flex-direction: column;
    }
    .navbar a {
        float: none;
        width: 100%;
    }
    .column {
    width: 100%;
}
    }
=======
    content: "";
    display: table;
    clear: both;
    }

        /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
        .row {   
            flex-direction: column;
        }
        .navbar a {
            float: none;
            width: 100%;
        }
        .column {
        width: 100%;
    }
        }
>>>>>>> Stashed changes

        
        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    
</style>
@endsection