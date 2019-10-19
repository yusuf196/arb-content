
@include('layouts.header')
<div class="breadcrumbs">
    {{ csrf_field() }}
	<section class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>إسألني سؤال</h1>
			</div>
			<div class="col-md-12">
				<div class="crumbs">
					<a href="#">الرئيسية</a>
					<span class="crumbs-span">/</span>
					<a href="#">الصفحات</a>
					<span class="crumbs-span">/</span>
					<span class="current">إسألني سؤال</span>
				</div>
			</div>
		</div><!-- End row -->
	</section><!-- End container -->
</div><!-- End breadcrumbs -->

<section class="container main-content">
	{!! csrf_field() !!}
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
			</ul>


		</div>


		@endif
	<div class="row">
		<div class="col-md-9">

			<div class="page-content ask-question">
				<div class="boxedtitle page-title"><h2> مقالتي</h2></div>

				
				<div class="form-style form-style-3" id="question-submit">
					<form action="storeBlog" method="post" value="{{ csrf_token() }} "enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-group">

							<p>
								<label class="required">عنوان المقالة<span>*</span></label>
								<input type="text" id="question-title"  name="title" class="form-control" value="{{Request::old('title')}}">
								<span class="form-description">يرجى اختيار عنوان مناسب للمقالة  .</span>
							</p>
							<p>
								{{--<label>الوسوم</label>--}}
								{{--<input type="text" class="input" name="question_tags" id="question_tags" data-seperator=",">--}}
								{{--<span class="form-description">الرجاء اختيار كلمات مناسبة مثال : <span class="color">question , poll</span> .</span>--}}
							</p>
							<p>
								<label class="required">القسم<span>*</span></label>

								<span class="styled-select">
										<select class="form-control" name="catname" id="catname">
                                            @foreach($qustions as $qus)
											<option value="{{$qus->id}}">{{$qus->cat_name}}</option>
											@endforeach
										</select>

									</span>
								<span class="form-description">الرجاء اختيار القسم المناسب لسهوله البحث والوصول الي مقالتك .</span>
							</p>
							<p class="question_poll_p">
								{{ csrf_field() }}
								
							</p>
							<div class="clearfix"></div>
							<div class="poll_options">
								<p class="form-submit add_poll">
									<button id="add_poll" type="button" class="button color small submit"><i class="icon-plus"></i>اضف حقل</button>
								</p>
								<ul id="question_poll_item">
									<li id="poll_li_1">
										<div class="poll-li">
											<p><input id="ask[1][title]" class="ask" name="ask[1][title]" value="" type="text"></p>
											<input id="ask[1][value]" name="ask[1][value]" value="" type="hidden">
											<input id="ask[1][id]" name="ask[1][id]" value="1" type="hidden">
											<div class="del-poll-li"><i class="icon-remove"></i></div>
											<div class="move-poll-li"><i class="icon-fullscreen"></i></div>
										</div>
									</li>
								</ul>
								<script> var nextli = 2;</script>
								<div class="clearfix"></div>
							</div>

							<label>صورة المقال</label>
							<div class="fileinputs">
								<input type="file" name="select_file" class="file">
								<div class="fakefile">
									<button type="button" class="button small margin_0">اختار الملف</button>
									<span><i class="icon-arrow-up"></i>تصفح</span>
								</div>
							</div>

						</div>
						<div id="form-textarea">
							<p>
								<label class="required">التفاصيل<span>*</span></label>
								<div id="respond" class="comment-respond page-content clearfix">
                                    
                                    
                                       
                                       
                                          
                                                
                                                <textarea id="article-ckeditor" name="body" aria-required="true" cols="58" rows="8"></textarea>
                                         
                                       
                                     
                                </div>
							</p>
						</div>
						<p class="form-submit">

							<input type="submit" id="publish-question" value="نشر مقالتك" class="button color small submit">
						</p>
					</form>
				</div>
			</div><!-- End page-content -->
		</div><!-- End main -->
		@include('layouts.aside')
	</div><!-- End row -->
</section><!-- End container -->
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
@include('layouts.footer')
