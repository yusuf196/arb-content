	@include('layouts.header')
	
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>المقالات 2</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">الرئيسية</a>
						<span class="crumbs-span">/</span>
						<span class="current">المقالات 2</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div id="arContainer" class="col-md-9">
				@foreach ($posts as $post)
				<article class="post blog_2 clearfix">
					<div class="post-inner">
					<div class="post-img"><a href="/viewPost/{{$post->id}}" ><img src="{{$post->image}}" alt=""></a></div>
				        <h2 class="post-title"><span class="post-type"><i class="icon-picture"></i></span><a >{{$post->title}}</a></h2>
			            <div class="post-meta">
			                <span class="meta-author"><i class="icon-user"></i>{{$post->userName}}</span>
						<span class="meta-date"><i class="icon-time"></i>{{$post->created_at}}</span>
			                <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">{{$post->cat_name}}</a></span>
			                <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">{{$post->count}} تعليق</a></span>
			            </div>
				        <div class="post-content">
				            <p>{!! $post->desc_post !!}</p>
						<a href="viewPost/{{$post->id}}" class="post-read-more button color small">أكمل القراءة</a>
				        </div><!-- End post-content -->
				    </div><!-- End post-inner -->
				</article><!-- End article.post -->
				@endforeach
				
			
				
			
				
				<div class="pagination">
				    <a href="#" class="prev-button"><i class="icon-angle-left"></i></a>
				    <span class="current">1</span>
				    <a href="#">2</a>
				    <a href="#">3</a>
				    <a href="#">4</a>
				    <a href="#">5</a>
				    <span>...</span>
				    <a href="#">11</a>
				    <a href="#">12</a>
				    <a href="#">13</a>
				    <a href="#" class="next-button"><i class="icon-angle-right"></i></a>
				</div><!-- End pagination -->
			</div><!-- End main -->
			@include('layouts.aside')
		</div><!-- End row -->
	</section><!-- End container -->
	

</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>
@include('layouts.footer')
<!-- js -->
