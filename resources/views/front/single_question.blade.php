<?php
$qst_id = $qst->id;

?>
@include('layouts.header')
{{ csrf_field() }}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />	
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
@if (count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
		@endif
	<section class="container main-content">
		<div class="row">

			<div class="col-md-9">
				<article class="question single-question question-type-normal">
					<h2>{{$qst->qustion_title}}</h2>
					
					{{-- <a class="question-report" href="#">تبليغ</a>
					<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div> --}}
					<div class="question-inner">
						<div class="clearfix"></div>
						<div class="question-desc">
							<p>
								{{$qst->qustion_desc}}
							</p>
						</div>
						<div class="question-desc">
						<div id="qwqwqw" class="question-details">
							<script>
								var answerd="لم يحل";
					            var notanswerdClass='"question-answered question-notanswered"';
					            var notanswerdIcon="icon-exclamation-sign";
					            if(<?php echo $qst->answerd ?>){answerd="تم الحل"; notanswerdClass='"question-answered question-answered-done"'; notanswerdIcon="icon-ok"; }
								document.getElementById('qwqwqw').innerHTML='<span class='+notanswerdClass+'><i class='+notanswerdIcon+'></i>'+answerd+'</span>';

							</script>
						</div>
						<span class="question-category"><a href="#"><i class="icon-folder-close"></i>{{$qst->cat_name}}</a></span>
						<span class="question-date"><i class="icon-time"></i>{{$qst->created_at}}</span>
						<span class="question-comment"><a href="#"><i class="icon-comment"></i>{{$ans_count}} إجابات</a></span>
						<span class="question-view"><i class="icon-user"></i>{{$qst->views}} مشاهدة</span>
						<small class="single-question-vote-result"><a href="/profile/{{$qst->user->id}}"><p style="color:#3bb4c1;">{{$qst->user->name}}</p></a></small>
						{{-- <span class="single-question-vote-result"></span>
						<ul class="single-question-vote">
						<li><a href="#" class="single-question-vote-down" title="Dislike"><i class="icon-thumbs-down"></i></a></li>
							<li><a href="#" class="single-question-vote-up" title="Like"><i class="icon-thumbs-up"></i></a></li>
						</ul>--}}
						<div class="clearfix"></div>
						  <div class="clearfix"></div>
						</div>
					</div>
				    
				
				    
					 <div id="comments_block">
					 <div  style="background-color:#f5f5f0; margin-top:3px;margin-top:2px; margin-left:5px; margin-right:5px;">
			
					 <small style="padding:15px;"> مرحبا اليس هذا السؤال تم طرح سابقا لا ادري لكن  ارى انه تمت اجابته</small><span>&nbsp;ـــــ&nbsp;</span>
					  <span > <a style="text-color:blue; !!important"  href="">{{Auth::user()->name}}</a></span>
					</div>
				</div>
				
						 <br>
						 <br>
					
					<p style="padding:15px;"> <small >اضف تعليقاً</small></p>
					
					<form id="form2" action="addQuestionComment" value="{{ csrf_token() }}" >
							{{ csrf_field() }}	
							<input style="width:80vw;"  type="text" id="comment_field" name="comment" placeholder=" comment" >
                            <input type="hidden" name="id" id="question_id" value={{$qst->id}}>					
						</form>
						{{-- <form  action="/addQuestionComment"  id="form2" class="comment-form"  >
							{!! csrf_field() !!}
							<div id="respond-textarea">
								<p>
									<input style="width:50vw;"  type="text" id="comment_field" name="comment" placeholder=" comment" >
									<input type="hidden" id="hiddin" value={{$qst->id}}>
								</p>
							</div>

							<p class="form-submit">
								<input name="submit" type="submit" id="submit" value="أضف إجابتك" class="button small color">
							</p>
						</form> --}}
				
				</article>


				@foreach($ans as $answ)
				<div id="commentlist" class="page-content">
					{{--<div class="boxedtitle page-title"><h2>الاجابات ( <span class="color">5</span> )</h2></div>--}}
					<ol class="commentlist clearfix">
					    <li class="comment" style="position:relative;">
							<img id="img{{$answ->id}}" style="visibility:hidden; position:absolute; left:1%; top:3%;"  src="/images/sucessIcon.jpg" alt="Smiley face" height="42" width="42">	
					       
						    <div id="answerBlock" class="comment-body comment-body-answered clearfix" style="position: relative;">
							<div class="avatar"><img alt="" src="/{{$answ->user->image_user}}"></div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-author"><a href="#">    {{ $answ->user->name }} </a>

										</div>
					                	<div class="comment-vote">
						                	<ul class="question-vote">
						                		<li><i  class="question-vote-up" style="margin-bottom:5px;"  onclick="upvote({{$answ->id}})" title="Like"></i></li>
						                		<li><i  class="question-vote-down" onclick="downvote({{$answ->id}})" title="Dislike"></i></li>
						                	</ul>
					                	</div>
					                	<span class="question-vote-result"style="color:red" id="ansRate{{$answ->id}}">{{$answ->rate}}</span>
					                	<div class="comment-meta">
					                        <div class="date"><i class="icon-time" ></i>{{ $answ->created_at }}</div>
					                    </div>
									   @if(Auth::user()->id == $answ->user_id)

										 	<a class="question-report" href="/deleteComment/{{ $answ->id }}">حذف</a>
										 	<a class="question-comments" href="/editcoments/{{ $answ->id }}">تعديل</a>
										 @endif
					                    <div >
											
										@if(Auth::user()->id==$qst->user_id)
											<a class="question-type-main" id="accept{{$answ->id}}" onclick="acceptAnswer({{$qst->id}},{{$answ->id}})" style="position: absolute; top:1%;"><i class="icon-question-sign" ></i>اقبل الاجابة</a> 
										@endif
								    
										</div>
					                </div>
                                        
										<div style="margin-top:5%;">
											<h6 class="styleAnswerBody" style="color:#282828;">
												{!! $answ->answer_text !!}
											</h6>
										</div>
					        <ul class="children">
					            <li class="comment">
                                 
								<div id="comments_block{{$answ->id}}">
						<div  style="background-color:#f5f5f0; margin-top:3px;margin-top:2px; margin-left:5px; margin-right:5px;">
			   
						<!--<small style="padding:15px;"> مرحبا اليس هذا السؤال تم طرح سابقا لا ادري لكن  ارى انه تمت اجابته</small><span>&nbsp;ـــــ&nbsp;</span>
						 <span > <a style="text-color:blue; !!important"  href="">{{Auth::user()->name}}</a></span>
					   --></div>
				   </div>
				   
							
					   
					   <p style="padding:15px;"> <small >اضف تعليقاً</small></p>
					   
					   <form class="form3" action="" value="{{ csrf_token() }}" >
							   {{ csrf_field() }}	
							   <input style="width:50vw;"  type="text" class="comment_field_for_answer" name="comment" placeholder=" comment" >
							   <input type="hidden" name="id" class="answer_id" value={{$answ->id}}>					
						   </form>
					            </li>

					        </ul><!-- End children -->


					</ol><!-- End commentlist -->
				</div><!-- End page-content -->
				<form class="upvote" action="" value="{{ csrf_token() }}" >
							   
							
							   <input type="hidden" id="answerd_id" class="answer_id" value={{$answ->id}}>					
						   </form>
				@endforeach


				
				<div id="respond" class="comment-respond page-content clearfix">
				    <div class="boxedtitle page-title"><h2>اترك تعليق</h2></div>
				    <form action="/viewqust/{{$qst->id}}" method="post" id="commentform" class="comment-form" value="{{ csrf_token() }}" >
						{!! csrf_field() !!}
						<div id="respond-textarea">
				            <p >
				                <label class="required" for="comment">التعليق<span>*</span></label>
				                <textarea id="article-ckeditor" name="comment" aria-required="true" cols="58" rows="8"></textarea>
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
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script src="/js/singlQuestion.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
	</script>

	@include('layouts.footer')
	
	@include ('footer')
	

