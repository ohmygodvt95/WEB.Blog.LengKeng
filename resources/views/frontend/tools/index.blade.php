<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-language" content="vi" />
    <meta name="robots" content="noodp,index,follow" />
    <meta name="description" content="Tổng hợp các Tools vui vui, vớ vẩn, rảnh rỗi ngồi viết" />
    <meta name="keywords" content="Le Vinh Thien, LVT, LengKeng, vinhthien, Home, vinhthien.name.vn, student, software engineer, university, personal website" />
    {{-- fb --}}
    <meta property="og:title" content="Tools | Le Vinh Thien - HUST" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{$_SERVER['SERVER_NAME']}}" />
    <meta property="og:image" content="{{ asset('images/bg/bg2.jpg') }}" />
    <meta property="og:description" content="Tổng hợp các Tools vui vui, vớ vẩn, rảnh rỗi ngồi viết" />
    <meta property="og:site_name" content="Tools | Random Topic OOP" />
    <meta property="fb:admins" content="ohmygodvt95" />
    {{-- twitter --}}
    <meta name="twitter:card" content="Tools | Le Vinh Thien - HUST">
    <meta name="twitter:site" content="@ohmygodvt95">
    <meta name="twitter:title" content="Tools | Random Topic OOP">
    <meta name="twitter:description" content="Tổng hợp các Tools vui vui, vớ vẩn, rảnh rỗi ngồi viết">
    <meta name="twitter:creator" content="@ohmygodvt95">
    {{-- LINK --}}
    <link rel="canonical" href="{{$_SERVER['SERVER_NAME']}}"/>
    <title>Tools | Random Topic OOP</title>
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,400' rel='stylesheet' type='text/css'>
    <style type="text/css" media="screen">
    	.raleway{
			font-family: "Raleway", sans-serif;
    	}
    </style>
</head>
<body>
<hr>
	<div class="container">
		<ol class="breadcrumb">
			<li>
				<a href="{{url('/')}}">Home</a>
			</li>
			<li class="active">Tools</li>
		</ol>
		<div class="well jumbotron">
			<div class="">
				<h2 class="text-center raleway"><b>TOOLS</b></h2>
				<p class="text-center">Tổng hợp các tools linh tinh viết trong thời gian dỗi :3</p>
			</div>
		</div>
		
		<div class="col-sm-8 col-sm-offset-2" >
			<div class="list-group">
				<a href="{{url('tools/random')}}" class="list-group-item">
					<h4 class="list-group-item-heading">Random Topic OOP</h4>
					<p class="list-group-item-text">Lựa chọn ngẫu nhiên đề tài cho môn OOP</p>
				</a>
			</div>
		</div>
		
	</div>
	<p class="text-center">Leng Keng &copy 2016</p>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-71954602-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>
