@extends('frontend.layouts.main')
@section('main-container')

<script src="{{url('frontend/js/index.js')}}"></script>
<source src="{{url('frontend/images/enfragy_video.mp4')}}" type="video/mp4">
<Img src="{{url('frontend/images/outlooklogo.png')}}" style="width:50%;margin-top:0px;">

<li><a href="{{url('/about_us')}}"> About Enfragy </a></li>

@endsection