
	@include('layouts.header')
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
				<h1>الملف الشخصي : {{$user->name}}</h1>
				</div>
				<div class="col-md-12">
					{{-- <div class="crumbs">
						<a href="#">الرئيسية</a>
						<span class="crumbs-span">/</span>
						<a href="#">الاعضاء</a>
						<span class="crumbs-span">/</span>
					<span class="current">الملف الشخصي : {{$user->name}}</span>
					</div> --}}
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="user-profile">
						<div class="col-md-12">
							<div class="page-content">
								<h2>عن {{$user->name}}</h2>
								{{-- <div class="user-profile-img"><img  src="/{{$user->image_user}}" alt="user"></div> --}}
								<div style="vertical-align: middle;
								width:7%;
								height: 7%;
								border-radius: 50%;"><img alt="" src="/{{$user->image_user}}"></div>
								<div class="ul_list ul_list-icon-ok about-user">
									<ul>
										<li class="registe-user"><i class="icon-plus"></i>تاريخ التسجيل : <span>{{$user->created_at}} </span></li>
										<li><i class="icon-map-marker"></i>البلد : <span>{{$user->country}}</span></li>
										{{-- <li><i class="icon-globe"></i>الموقع الشخصي : <a target="_blank" href="http://themeforest.net/user/vbegy">عرض</a></li> --}}
									</ul>
								</div>
								<p>{{$user->aboutme}}</p>
								<div class="clearfix"></div>
								<span class="user-follow-me">تابعني</span>
								<a href="//www.facebook.com/{{$user->facebook}}" original-title="Facebook" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#3b5997" span_hover="#2f3239">
											<i class="social_icon-facebook"></i>
										</span>
									</span>
								</a>
								<a href="//www.twitter.com/{{$user->twitter}}" original-title="Twitter" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#00baf0" span_hover="#2f3239">
											<i class="social_icon-twitter"></i>
										</span>
									</span>
								</a>
								<a href="//www.linkedin.com/{{$user->linkedin}}" original-title="Linkedin" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#006599" span_hover="#2f3239">
											<i class="social_icon-linkedin"></i>
										</span>
									</span>
								</a>
								{{-- <a href="#" original-title="Google plus" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#c43c2c" span_hover="#2f3239">
											<i class="social_icon-gplus"></i>
										</span>
									</span>
								</a> --}}
								{{-- <a href="#" original-title="Email" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#000" span_hover="#2f3239">
											<i class="social_icon-email"></i>
										</span>
									</span>
								</a> --}}
							</div><!-- End page-content -->
						</div><!-- End col-md-12 -->
						<div class="col-md-12">
							<div class="page-content page-content-user-profile">
								<div class="user-profile-widget">
									<h2>أحصائيات العضو</h2>
									<div class="ul_list ul_list-icon-ok">
										<ul>
										<li><i class="icon-question-sign"></i><a href="user_questions.html">الاسئلة<span> ( <span>{{$questions}}</span> ) </span></a></li>
											<li><i class="icon-comment"></i><a href="user_answers.html">الإجابات<span> ( <span>{{$answers}}</span> ) </span></a></li>
											{{-- <li><i class="icon-star"></i><a href="user_favorite_questions.html">الاسئلة المفضلة<span> ( <span>3</span> ) </span></a></li> --}}
											<li><i class="icon-heart"></i><a href="user_points.html">النقاط<span> ( <span>{{$questions*$answers}}</span> ) </span></a></li>
											<li><i class="icon-asterisk"></i>الافضل اجابة<span> ( <span>{{$bestAnswers}}</span> ) </span></li>
										</ul>
									</div>
								</div><!-- End user-profile-widget -->
							</div><!-- End page-content -->
						</div><!-- End col-md-12 -->
					</div><!-- End user-profile -->
				</div><!-- End row -->
				<div class="clearfix"></div>
				<div class="page-content">
					<div class="user-stats">
						<div class="user-stats-head">
							<div class="block-stats-1 stats-head">#</div>
							<div class="block-stats-2 stats-head">اليوم</div>
							<div class="block-stats-3 stats-head">الشهر</div>
							<div class="block-stats-4 stats-head">الاجمالي</div>
						</div>
						<div class="user-stats-item">
							<div class="block-stats-1">الاسئلة</div>
							<div class="block-stats-2">{{App\Qustion::where('user_id','=',$user->id)->whereDay('created_at','=',Carbon\Carbon::now()->day)->count()}}</div>
							<div class="block-stats-3">{{App\Qustion::where('user_id','=',$user->id)->whereMonth('created_at','=',Carbon\Carbon::now()->month)->count()}}</div>
							<div class="block-stats-4">{{$user->qustions->count()}}</div>
						</div>
						<div class="user-stats-item">
							<div class="block-stats-1">الاجابات</div>
							<div class="block-stats-2">{{App\Answer::where('user_id','=',$user->id)->whereDay('created_at','=',Carbon\Carbon::now()->day)->count()}}</div>
							<div class="block-stats-3">{{App\Answer::where('user_id','=',$user->id)->whereMonth('created_at','=',Carbon\Carbon::now()->month)->count()}}</div>
							<div class="block-stats-4">{{$user->answers->count()}}</div>
						</div>
						<div class="user-stats-item user-stats-item-last">
							<div class="block-stats-1">تعليقات</div>
							<div class="block-stats-2">{{App\AnswerComment::where('user_id','=',$user->id)->whereDay('created_at','=',Carbon\Carbon::now()->day)->count()}}</div>
							<div class="block-stats-3">{{App\AnswerComment::where('user_id','=',$user->id)->whereMonth('created_at','=',Carbon\Carbon::now()->month)->count()}}</div>
							
							<div class="block-stats-4">{{$coments}}</div>
						</div>
					</div><!-- End user-stats -->
				</div><!-- End page-content -->
			</div><!-- End main -->
		@include('layouts.aside')
		</div><!-- End row -->
	</section><!-- End container -->
	

</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>
@include('layouts.footer')
<!-- js -->
</html>