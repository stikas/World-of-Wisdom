@extends('layouts.base')
@section('content')
<div class="tm-top-bar-notHome"></div>
	<!-- Page Content -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<h1>{{$article->title}}</h1>
						<p>ΤΕΛ. ΑΝΑΝΕΩΣΗ: <span class="glyphicon glyphicon-time"></span>{{$article->updated_at->format('d-m-Y')}}</p>
						 {!! Share::currentPage()->facebook()->twitter()->googlePlus()->linkedin() !!}
					</div>
				</div>
			</div>


			<!-- /.row -->

			<div class="row">
				<div class="col-sm-8">

					<!-- Image -->
					<figure class="margin-b-2">
						<img class="img-responsive big_article_image" src="/uploaded_images/{{$article->image_name}}" alt="">
						<figcaption class="margin-t-h">
								
						</figcaption>
					</figure>
					{!! nl2br(e($article->article)) !!}

				</div>
				<div class="col-sm-4">

				</div>
			</div>
		</div>

@endsection