
	@include('layouts.header')
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">

				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="/home">الرئيسية</a>
						<span class="crumbs-span">/</span>
						<a href="/qustion">الاسئلة</a>
						<span class="crumbs-span">/</span>

					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				<article class="question single-question question-type-normal">
					<h2>{{ $qst->id }}</h2>
					<a class="question-report" href="#">تبليغ</a>
					<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
					<div class="question-inner">
						<div class="clearfix"></div>
						<div class="question-desc">
							<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء .</p>
						</div>
						<div class="question-details">
							<span class="question-answered question-answered-done"><i class="icon-ok"></i>تم الحل</span>
							<span class="question-favorite"><i class="icon-star"></i>5</span>
						</div>
						<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
						<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
						<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
						<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
						<span class="single-question-vote-result">+22</span>
						<ul class="single-question-vote">
							<li><a href="#" class="single-question-vote-down" title="Dislike"><i class="icon-thumbs-down"></i></a></li>
							<li><a href="#" class="single-question-vote-up" title="Like"><i class="icon-thumbs-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</article>

				<div id="commentlist" class="page-content">
					{{--<div class="boxedtitle page-title"><h2>الاجابات ( <span class="color">5</span> )</h2></div>--}}
					<ol class="commentlist clearfix">
					    <li class="comment">
					        <div class="comment-body comment-body-answered clearfix">
					            <div class="avatar"><img alt="" src="http://placehold.it/60x60/FFF/444"></div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-author"><a href="#">admin</a></div>
					                	<div class="comment-vote">
						                	<ul class="question-vote">
						                		<li><a href="#" class="question-vote-up" title="Like"></a></li>
						                		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
						                	</ul>
					                	</div>
					                	<span class="question-vote-result">+1</span>
					                	<div class="comment-meta">
					                        <div class="date"><i class="icon-time"></i>فبراير 15 , 2014 في 10:00 صباحا</div>
					                    </div>
					                    <a class="comment-reply" href="#"><i class="icon-reply"></i>رد</a>
					                </div>
									@foreach($qst->answers as $c)
					                <div class="text"><p> {{$c->answer_text}}</p>
										@endforeach

					        </div>
					        <ul class="children">
					            <li class="comment">

					            </li>

					        </ul><!-- End children -->
						</li>

					</ol><!-- End commentlist -->
				</div><!-- End page-content -->
				
				<div id="respond" class="comment-respond page-content clearfix">
				    <div class="boxedtitle page-title"><h2>اترك تعليق</h2></div>
				    <form action="" method="post" id="commentform" class="comment-form">

				        <div id="respond-textarea">
				            <p>
				                <label class="required" for="comment">التعليق<span>*</span></label>
				                <textarea id="comment" name="comment" aria-required="true" cols="58" rows="8"></textarea>
				            </p>
				        </div>
				        <p class="form-submit">
				        	<input name="submit" type="submit" id="submit" value="أضف إجابتك" class="button small color">
				        </p>
				    </form>
				</div>
				
				<div class="post-next-prev clearfix">
				    <p class="prev-post">
				        <a href="#"><i class="icon-double-angle-left"></i>&nbsp;السؤال السابق</a>
				    </p>
				    <p class="next-post">
				        <a href="#">السؤال التالي&nbsp;<i class="icon-double-angle-right"></i></a>                                
				    </p>
				</div><!-- End post-next-prev -->	
			</div><!-- End main -->
			@include('layouts.aside')
		</div><!-- End row -->
	</section><!-- End container -->
	@include('layouts.footer')
	
