<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-language" content="vi" />
    <meta name="robots" content="noodp,index,follow" />
    <meta name="description" content="Tools random đề tài cho môn OOP theo cơ chế có N đề tài mỗi nhóm sẽ random N + 1 lần, Đề tài được chọn là đề tài được xuất hiện nhiều nhất" />
    <meta name="keywords" content="Le Vinh Thien, LVT, LengKeng, vinhthien, Home, vinhthien.name.vn, student, software engineer, university, personal website" />
    {{-- fb --}}
    <meta property="og:title" content="Tools | Random Topic OOP" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{$_SERVER['SERVER_NAME']}}" />
    <meta property="og:image" content="{{ asset('images/bg/bg2.jpg') }}" />
    <meta property="og:description" content="Tools random đề tài cho môn OOP theo cơ chế có N đề tài mỗi nhóm sẽ random N + 1 lần, Đề tài được chọn là đề tài được xuất hiện nhiều nhất" />
    <meta property="og:site_name" content="Tools | Random Topic OOP" />
    <meta property="fb:admins" content="ohmygodvt95" />
    {{-- twitter --}}
    <meta name="twitter:card" content="Tools | Random Topic OOP - I'm Le Vinh Thien">
    <meta name="twitter:site" content="@ohmygodvt95">
    <meta name="twitter:title" content="Tools | Random Topic OOP">
    <meta name="twitter:description" content="Tools random đề tài cho môn OOP theo cơ chế có N đề tài mỗi nhóm sẽ random N + 1 lần, Đề tài được chọn là đề tài được xuất hiện nhiều nhất">
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
			<li>
				<a href="{{url('tools')}}">Tools</a>
			</li>
			<li class="active raleway">Random OOP</li>
		</ol>
		<div class="well jumbotron">
			<div class="">
				<h3 class="text-center raleway">Random Topic OOP - 2016</h3>
				<div class="row">
				<div class="col-sm-4 col-sm-offset-4 text-center">
					<input class="max-student form-control" placeholder="number of group | default: 20">
					<br>
					<input class="max-topic form-control" placeholder="number of topic | default: 8">
					<hr>
					<button type="" class="btn btn-primary center-block">Random</button>
					<br>
					<span></span>
				</div>
					<div class="abc"></div>
				</div>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-2" >
			<table class="table table-hover" style="border: 1px solid gray">
				<thead>
					<tr class="bg-primary">
						<th>Team</th>
						<th>Random [topicId => count, ...]</th>
						<th>Result</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
		
	</div>
	<p class="text-center">Leng Keng &copy 2016</p>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script>
	jQuery(document).ready(function($) {
		
	});
		var MAX_STUDENT = 20;
		var MAX_TOPIC = 8;
		function run() {
			MAX_STUDENT = isNaN(parseInt($('.max-student').val()))? 20: parseInt($('.max-student').val());
			MAX_TOPIC = isNaN(parseInt($('.max-topic').val()))? 8: parseInt($('.max-topic').val());
			$("span").html("Max group: " + MAX_STUDENT + " | " + "Max topic: " + MAX_TOPIC);
			for(var i = 0; i < MAX_STUDENT; i++){
			var rnd = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
			for(var j = 0; j < MAX_TOPIC + 1; j++){
				rnd[Math.floor(Math.random() * MAX_TOPIC + 1)]++;
			}
			print(i + 1, rnd, max(rnd));
			}
		}
		
		
		function max(array){
			var max = 0;
			for (var i = 1; i <= array.length; i++) {
				max = array[i] > array[max] ? i: max;
			}
			console.log(array[max]);
			return max;
		}

		function print(team, random, result) {
			var html = '<tr>';
			html += '<td>' + team + '</td>';
			html += '<td>[ ';
			for (var i = 1; i <= random.length; i++) {
				if(random[i] > 0) html += i + "=>" + random[i] + ", ";
			}
			html += ' ]</td>';
			html += '<td class="text-success"><b>' + result + '</b></td>';
			html += '</tr>';
			$('tbody').append($(html));
		}
		$('button').click(function(argument) {
			$('tbody').html("");
			run();
		});
	</script>
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
