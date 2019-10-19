@include('layouts.header')
<body>


	
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>{{$post->title}}</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">الرئيسية</a>
						<span class="crumbs-span">/</span>
						<a href="#">المقالات</a>
						<span class="crumbs-span">/</span>
						<span class="current">{{$post->title}}</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				
				<article class="post single-post clearfix">
					
					<div class="post-inner">
						@if(Auth::user()->id==$post->user_id)
					<a class="question-report" href="/deletePost/{{$post->id}}">حذف</a>
						<a class="question-type-main" href="/editPost/{{$post->id}}"><i class="icon-question-sign" ></i>تعديل</a>
						@endif
						<div class="post-img"><a href="#"><img src="/{{$post->image}}" alt=""></a></div>
						
					<h2 class="post-title"><span class="post-type"><i class="icon-film"></i></span>{{$post->title}}</h2>
							
						<div class="post-meta">
			        	        <span class="meta-author"><i class="icon-user"></i><a href="#">{{$post->userName}}</a></span>
			        	        <span class="meta-date"><i class="icon-time"></i>{{$post->created_at}}</span>
			        	        <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">{{$post->cat_name}}</a></span>
			        	        <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#"> تعليق</a></span>
			        	    </div>
				        <div class="post-content">
				            <p>{!! $post->desc_post !!}</p>
				            
				            
				        </div><!-- End post-content -->
				        <div class="clearfix"></div>
				    </div><!-- End post-inner -->
				</article><!-- End article.post -->
				
				<div class="share-tags page-content">
					<div class="post-tags"><i class="icon-tags"></i>
						{{-- <a href="#">projects</a>,
						<a href="#">Portfolio</a>,
						<a href="#">Wordpress</a>,
						<a href="#">Html</a>,
						<a href="#">Css</a>,
						<a href="#">jQuery</a>,
						<a href="#">2code</a>,
						<a href="#">vbegy</a> --}}
					</div>
					<div class="share-inside-warp">
						<ul>
							<li>
								<a href="#" original-title="Facebook">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#3b5997" span_hover="#666">
											<i i_color="#FFF" class="social_icon-facebook"></i>
										</span>
									</span>
								</a>
								<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=www.arb-content.com/viewPost/{{$post->id}}&display=popup"> share this </a>
								{{-- <a href="#" >Facebook</a> --}}
							</li>
							<li>
								<a href="#" target="_blank">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#00baf0" span_hover="#666">
											<i i_color="#FFF" class="social_icon-twitter"></i>
										</span>
									</span>
								</a>
								<a target="_blank" href="#">Twitter</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#ca2c24" span_hover="#666">
											<i i_color="#FFF" class="social_icon-gplus"></i>
										</span>
									</span>
								</a>
								<a href="#" target="_blank">Google plus</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#e64281" span_hover="#666">
											<i i_color="#FFF" class="social_icon-dribbble"></i>
										</span>
									</span>
								</a>
								<a href="#" target="_blank">Dribbble</a>
							</li>
							<li>
								<a target="_blank" href="#">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#c7151a" span_hover="#666">
											<i i_color="#FFF" class="icon-pinterest"></i>
										</span>
									</span>
								</a>
								<a href="#" target="_blank">Pinterest</a>
							</li>
						</ul>
						<span class="share-inside-f-arrow"></span>
						<span class="share-inside-l-arrow"></span>
					</div><!-- End share-inside-warp -->
					<div class="share-inside"><i class="icon-share-alt"></i>مشاركة</div>
					<div class="clearfix"></div>
				</div><!-- End share-tags -->
				
				<div class="about-author clearfix">
					<div class="author-image">
					<a href="#" original-title="admin" class="tooltip-n"><img alt="" src="/{{$post->image_user}}"></a>
					</div>   
				    <div class="author-bio">
				        <h4>عن الكاتب</h4>
				        {{$post->userDesc}}
				    </div>
				</div><!-- End about-author -->
{{-- 				
				<div id="related-posts">
					<h2>مقالات مشابهة</h2>
					<ul class="related-posts">
						<li class="related-item"><h3><a href="#"><i class="icon-double-angle-right"></i>هذه هي المقالة الافتراضية .</a></h3></li>
						<li class="related-item"><h3><a href="#"><i class="icon-double-angle-right"></i>مقالة بدون صورة .</a></h3></li>
						<li class="related-item"><h3><a href="#"><i class="icon-double-angle-right"></i>مقال سلايد جميل .</a></h3></li>
						<li class="related-item"><h3><a href="#"><i class="icon-double-angle-right"></i>هذه مقالة بها فيديو .</a></h3></li>
					</ul>
				</div><!-- End related-posts --> --}}
				
				<div id="commentlist" class="page-content">
					<div class="boxedtitle page-title"><h2>التعليقات ( <span class="color">5</span> )</h2></div>
					<ol class="commentlist clearfix">
					   @foreach ($comments as $comment)
					   <li class="comment">
						
						<div class="comment-body clearfix"> 
							
							<div class="avatar"><img alt="" src="/{{$comment->image_user}}"></div>
							
							<div class="comment-text">
									@if(Auth::user()->id==$comment->user_id)
									<a class="question-report" href="/deletePostComment/{{$comment->id}}">حذف</a>
										
										@endif
								<div class="author clearfix">
									<div class="comment-meta">
									<span><a href="/profile/{{$comment->user_id}} " style="color:black;">{{$comment->name}}</a></span>
										<div class="date">{{$comment->created_at}}</div> 
									</div>
									<a class="comment-reply" href="#"><i class="icon-reply"></i>رد</a> 
								</div>
								<div class=""><p>{{$comment->commentstext_post}}</p>
								</div>
							</div>
						</div>
					   
					</li>
					   @endforeach
					  
					</ol><!-- End commentlist -->
				</div><!-- End page-content -->
				
				<div id="respond" class="comment-respond page-content clearfix">
				    <div class="boxedtitle page-title"><h2>اترك تعليق</h2></div>
				    <form action="/addPostComment/{{$post->id}}" method="post" id="commentform" class="comment-form">
					   @csrf
						{{-- <div id="respond-inputs" class="clearfix">
				            <p>
				                <label class="required" for="comment_name">الأسم<span>*</span></label>
				                <input name="author" type="text" value="" id="comment_name" aria-required="true">
				            </p>
				            <p>
				                <label class="required" for="comment_email">البريد الإلكتروني<span>*</span></label>
				                <input name="email" type="text" value="" id="comment_email" aria-required="true">
				            </p>
				            <p class="last">
				                <label class="required" for="comment_url">الموقع<span>*</span></label>
				                <input name="url" type="text" value="" id="comment_url">
				            </p>
				        </div> --}}
				        <div id="respond-textarea">
				            <p>
				                <label class="required" for="comment">التعليق<span>*</span></label>
				                <textarea id="comment" name="postComment" aria-required="true" cols="58" rows="10"></textarea>
				            </p>
				        </div>
				        <p class="form-submit">
				        	<input name="submit" type="submit" id="submit" value="أضف التعليق" class="button small color">
				        </p>
				    </form>
				</div>
				
				<div class="post-next-prev clearfix">
				    <p class="prev-post">
				        <a href="#"><i class="icon-double-angle-left"></i>&nbsp;المقالة السابقة</a>
				    </p>
				    <p class="next-post">
				        <a href="#">المقالة التالية&nbsp;<i class="icon-double-angle-right"></i></a>                                
				    </p>
				</div><!-- End post-next-prev -->
			</div><!-- End main -->
			@include('layouts.aside')
		</div><!-- End row -->
	</section><!-- End container -->
	@include('layouts.footer')

</body>
</html>