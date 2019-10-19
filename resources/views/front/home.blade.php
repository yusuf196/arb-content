<?php $user_sess = Auth::user()->id; ?>
@include('layouts.header')
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200" style="    margin-top: 5vh;

background-color: #F4F4F3;">
	
	<div class="login-panel">
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>تسجيل دخول</h2>
						{{--<div class="form-style form-style-3">--}}
							{{--<form>--}}
								{{--<div class="form-inputs clearfix">--}}
									{{--<p class="login-text">--}}
										{{--<input type="text" value="الأسم" onfocus="if (this.value == 'الأسم') {this.value = '';}" onblur="if (this.value == '') {this.value = 'الأسم';}">--}}
										{{--<i class="icon-user"></i>--}}
									{{--</p>--}}
									{{--<p class="login-password">--}}
										{{--<input type="password" value="كلمة المرور" onfocus="if (this.value == 'كلمة المرور') {this.value = '';}" onblur="if (this.value == '') {this.value = 'كلمة المرور';}">--}}
										{{--<i class="icon-lock"></i>--}}
										{{--<a href="#">نسيت كلمة المرور</a>--}}
									{{--</p>--}}
								{{--</div>--}}
								{{--<p class="form-submit login-submit">--}}
									{{--<input type="submit" value="تسجيل دخول" class="button color small login-submit submit">--}}
								{{--</p>--}}
								{{--<div class="rememberme">--}}
									{{--<label><input type="checkbox" checked="checked"> تذكرني</label>--}}
								{{--</div>--}}
							{{--</form>--}}
						{{--</div>--}}
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-6">
					<div class="page-content Register">
						<h2>تسجيل جديد</h2>
						<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
						<a class="button color small signup">تسجيل حساب جديد</a>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div>
		</section>
	</div><!-- End login-panel -->
	
	<div class="panel-pop" id="signup">
		<h2>سجل الأن<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<form>
				<div class="form-inputs clearfix">
					<p>
						<label class="required">الأسم<span>*</span></label>
						<input type="text">
					</p>
					<p>
						<label class="required">البريد الإلكتروني<span>*</span></label>
						<input type="email">
					</p>
					<p>
						<label class="required">كلمة المرور<span>*</span></label>
						<input type="password" value="">
					</p>
					<p>
						<label class="required">إعادة كلمة المرور<span>*</span></label>
						<input type="password" value="">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="تسجيل جديد" class="button color small submit">
				</p>
			</form>
		</div>
	</div><!-- End signup -->
	
	<div class="panel-pop" id="lost-password">
		<h2>نسيت كلمة المرور<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<p>نسيت كلمة المرور ؟ لو سمحت قم بادخال الاسم والبريد الإلكتروني. وسوف يصلك كلمة المرور الجديدة علي البريد الإلكتروني.</p>
			<form>
				<div class="form-inputs clearfix">
					<p>
						<label class="required">الأسم<span>*</span></label>
						<input type="text">
					</p>
					<p>
						<label class="required">البريد الإلكتروني<span>*</span></label>
						<input type="email">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="أستعادة" class="button color small submit">
				</p>
			</form>
			<div class="clearfix"></div>
		</div>
	</div><!-- End lost-password -->
	

	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
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
				<div class="tabs-warp question-tab">
		            <ul class="tabs">
		                <li class="tab"><a onclick="getQuestions()"  class="current">آخر الاسئلة</a></li>
		                <li class="tab"><a onclick="getMostAnswerd()" >الاكثر إجابة</a></li>
		                <li class="tab"><a onclick="getRecentlyAnswerd()" >المجاب مؤخرا</a></li>
		                <li class="tab"><a onclick="getNotAnswerd()" >بدون إجابات</a></li>
		            </ul>
					<div id="qst">

					</div>
					<a href="#" class="load-questions"><i class="icon-refresh"></i>المزيد من الاسئلة</a>
		        </div><!-- End page-content -->
			</div><!-- End main -->
			@include('layouts.aside')
		</div><!-- End row -->
	</section><!-- End container -->
	
	@include('layouts.footer')

<div class="go-up"><i class="icon-chevron-up"></i></div>
<!-- js -->
@include ('footer')
</body>
</html>

<script type="text/javascript">
	var notAsnwerd=new Array();
	var mostAnswerd=new Array();
	var recentlyAnswerd=new Array();
	$(document).ready(function(){
        getQuestions();
	    // setInterval(function(){
        //     getQuestions();
		// }, 10000);
	});

	function getQuestions(){
	    $.ajax({
			url: '/view',
			type: 'GET',
			datatype: 'json',
			success: function(data){
			   mostAnswerd=data[2];
			   recentlyAnswerd=data[1];
			    var sess_id = '<?php echo $user_sess; ?>';
			    html = '';
			    condition = '';
			    //var dt = jQuery.parseJSON(data);
				for(var i = 0; i < data[0].length; i++)
				{
					var answerd="لم يحل";
					var notanswerdClass='"question-answered question-notanswered"';
					var notanswerdIcon="icon-exclamation-sign";
					if(data[0][i].answerd){
						mostAnswerd[i]
						answerd="تم الحل"; notanswerdClass='"question-answered question-answered-done"'; notanswerdIcon="icon-ok"; }
					else{ notAsnwerd.push(data[0][i]); }
				    var qust_user = data[0][i].user_id;
                    if(qust_user == sess_id){
                        condition = '\t\t\t\t\t\t\t\t<a class="question-report" href="/deletequstion/'+data[0][i].id+'/">حذف</a>\n' +
                            '\t\t\t\t\t\t\t\t<a class="question-type-main" href="edit/'+data[0][i].id+'"><i class="icon-question-sign" ></i>تعديل</a>\n' ;
                    }else{
                        condition='';
					}
                    html += '\t\t            <div class="tab-inner-warp">\n' +
                        '\t\t\t\t\t\t<div class="tab-inner">\n' +
                        '\t\t\t\t\t\t\t<article class="question question-type-normal">\n' +
                        '\t\t\t\t\t\t\t\t<h2>\n' +
                        '\t\t\t\t\t\t\t\t\t<a href="/viewqust/'+data[0][i].id+'/">'+data[0][i].qustion_title+'</a>\n' +
                        '\t\t\t\t\t\t\t\t</h2>\n' +condition
						+
                        '\t\t\t\t\t\t\t\t<div class="question-author">\n' +
                        '\t\t\t\t\t\t\t\t\t<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src='+data[0][i].image_user+'></a>\n' +
                        '\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t\t<div class="question-inner">\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
                        '\t\t\t\t\t\t\t\t\t<p class="question-desc">'+data[0][i].qustion_desc.substring(1, 80)+'...</p>\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="question-details">\n' +
                        '\t\t\t\t\t\t\t\t\t\t<span class='+notanswerdClass+'><i class='+notanswerdIcon+'></i>'+answerd+'</span>\n' +
                        '\t\t\t\t\t\t\t\t\t\t<span class="question-favorite"><i class="icon-star"></i>5</span>\n' +
                        '\t\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-category"><a href="#"><i class="icon-folder-close"> '+data[0][i].cat_name+'</i></a></span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-date"><i class="icon-time"></i>'+data[0][i].created_at+'</span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-comment"><a href="#"><i class="icon-comment"></i>'+data[0][i].answers_count+'	 إجابات</a></span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-view"><i class="icon-user"></i>'+data[0][i].views+' مشاهدة</span>\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
                        '\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t</article>\n' +
                        '\n' +
                        '\n' +
                        '\t\t\t\t\t    </div>\n' +
                        '\t\t\t\t\t</div>';
                    //console.log(data[i].qustion_title);
				}
				
				$('#qst').html(html);
			    },
			error: function()
			{

			}
		});
	}
	function getNotAnswerd(){
		
		htmlx='';
		for(var i = 0; i < notAsnwerd.length; i++)
				{
					var answerd="لم يحل";
					var notanswerdClass='"question-answered question-notanswered"';
					var notanswerdIcon="icon-exclamation-sign";
					if(notAsnwerd[i].answerd){answerd="تم الحل"; notanswerdClass='"question-answered question-answered-done"'; notanswerdIcon="icon-ok"; }
					
				    var qust_user = notAsnwerd[i].user_id;
                   
                    htmlx += '\t\t            <div class="tab-inner-warp">\n' +
                        '\t\t\t\t\t\t<div class="tab-inner">\n' +
                        '\t\t\t\t\t\t\t<article class="question question-type-normal">\n' +
                        '\t\t\t\t\t\t\t\t<h2>\n' +
                        '\t\t\t\t\t\t\t\t\t<a href="/viewqust/'+notAsnwerd[i].id+'/">'+notAsnwerd[i].qustion_title+'</a>\n' +
                        '\t\t\t\t\t\t\t\t</h2>\n' 
						+
                        '\t\t\t\t\t\t\t\t<div class="question-author">\n' +
                        '\t\t\t\t\t\t\t\t\t<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src='+notAsnwerd[i].image_user+'></a>\n' +
                        '\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t\t<div class="question-inner">\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
                        '\t\t\t\t\t\t\t\t\t<p class="question-desc">'+notAsnwerd[i].qustion_desc.substring(1, 80)+'...</p>\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="question-details">\n' +
                        '\t\t\t\t\t\t\t\t\t\t<span class='+notanswerdClass+'><i class='+notanswerdIcon+'></i>'+answerd+'</span>\n' +
                        '\t\t\t\t\t\t\t\t\t\t<span class="question-favorite"><i class="icon-star"></i>5</span>\n' +
                        '\t\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-category"><a href="#"><i class="icon-folder-close"> '+notAsnwerd[i].cat_name+'</i></a></span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-date"><i class="icon-time"></i>'+notAsnwerd[i].created_at+'</span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-comment"><a href="#"><i class="icon-comment"></i>'+notAsnwerd[i].answers_count+'	 إجابات</a></span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-view"><i class="icon-user"></i>'+notAsnwerd[i].views+' مشاهدة</span>\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
                        '\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t</article>\n' +
                        '\n' +
                        '\n' +
                        '\t\t\t\t\t    </div>\n' +
                        '\t\t\t\t\t</div>';
                    //console.log(data[i].qustion_title);
				}
				
				$('#qst').html("");
                $('#qst').html(htmlx);
	}

	function getMostAnswerd(){
		htmlxx='';
	
		for(var i = 0; i < mostAnswerd.length; i++)
				{
					var answerd="لم يحل";
					var notanswerdClass='"question-answered question-notanswered"';
					var notanswerdIcon="icon-exclamation-sign";
					if(mostAnswerd[i].answerd){answerd="تم الحل"; notanswerdClass='"question-answered question-answered-done"'; notanswerdIcon="icon-ok"; }
					
				    var qust_user = mostAnswerd[i].user_id;
                   
                    htmlxx += '\t\t            <div class="tab-inner-warp">\n' +
                        '\t\t\t\t\t\t<div class="tab-inner">\n' +
                        '\t\t\t\t\t\t\t<article class="question question-type-normal">\n' +
                        '\t\t\t\t\t\t\t\t<h2>\n' +
                        '\t\t\t\t\t\t\t\t\t<a href="/viewqust/'+mostAnswerd[i].id+'/">'+mostAnswerd[i].qustion_title+'</a>\n' +
                        '\t\t\t\t\t\t\t\t</h2>\n' 
						+
                        '\t\t\t\t\t\t\t\t<div class="question-author">\n' +
                        '\t\t\t\t\t\t\t\t\t<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src='+mostAnswerd[i].image_user+'></a>\n' +
                        '\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t\t<div class="question-inner">\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
                        '\t\t\t\t\t\t\t\t\t<p class="question-desc">'+mostAnswerd[i].qustion_desc.substring(1, 80)+'...</p>\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="question-details">\n' +
                        '\t\t\t\t\t\t\t\t\t\t<span class='+notanswerdClass+'><i class='+notanswerdIcon+'></i>'+answerd+'</span>\n' +
                        '\t\t\t\t\t\t\t\t\t\t<span class="question-favorite"><i class="icon-star"></i>5</span>\n' +
                        '\t\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-category"><a href="#"><i class="icon-folder-close"> '+mostAnswerd[i].cat_name+'</i></a></span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-date"><i class="icon-time"></i>'+mostAnswerd[i].created_at+'</span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-comment"><a href="#"><i class="icon-comment"></i>'+mostAnswerd[i].answers_count+'	 إجابات</a></span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-view"><i class="icon-user"></i>'+mostAnswerd[i].views+' مشاهدة</span>\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
                        '\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t</article>\n' +
                        '\n' +
                        '\n' +
                        '\t\t\t\t\t    </div>\n' +
                        '\t\t\t\t\t</div>';
                    //console.log(data[i].qustion_title);
				}
				
				$('#qst').html("");
                $('#qst').html(htmlxx);

	}
	
	function getRecentlyAnswerd(){
		htmlxxx='';
		for(var i = 0; i < recentlyAnswerd.length; i++)
				{
					var answerd="لم يحل";
					var notanswerdClass='"question-answered question-notanswered"';
					var notanswerdIcon="icon-exclamation-sign";
					if(recentlyAnswerd[i].answerd){answerd="تم الحل"; notanswerdClass='"question-answered question-answered-done"'; notanswerdIcon="icon-ok"; }
					
				    var qust_user = recentlyAnswerd[i].user_id;
                   
                    htmlxxx += '\t\t            <div class="tab-inner-warp">\n' +
                        '\t\t\t\t\t\t<div class="tab-inner">\n' +
                        '\t\t\t\t\t\t\t<article class="question question-type-normal">\n' +
                        '\t\t\t\t\t\t\t\t<h2>\n' +
                        '\t\t\t\t\t\t\t\t\t<a href="/viewqust/'+recentlyAnswerd[i].id+'/">'+recentlyAnswerd[i].qustion_title+'</a>\n' +
                        '\t\t\t\t\t\t\t\t</h2>\n' 
						+
                        '\t\t\t\t\t\t\t\t<div class="question-author">\n' +
                        '\t\t\t\t\t\t\t\t\t<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src='+recentlyAnswerd[i].image_user+'></a>\n' +
                        '\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t\t<div class="question-inner">\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
                        '\t\t\t\t\t\t\t\t\t<p class="question-desc">'+recentlyAnswerd[i].qustion_desc.substring(1, 80)+'...</p>\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="question-details">\n' +
                        '\t\t\t\t\t\t\t\t\t\t<span class='+notanswerdClass+'><i class='+notanswerdIcon+'></i>'+answerd+'</span>\n' +
                        '\t\t\t\t\t\t\t\t\t\t<span class="question-favorite"><i class="icon-star"></i>5</span>\n' +
                        '\t\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-category"><a href="#"><i class="icon-folder-close"> '+recentlyAnswerd[i].cat_name+'</i></a></span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-date"><i class="icon-time"></i>'+recentlyAnswerd[i].created_at+'</span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-comment"><a href="#"><i class="icon-comment"></i>'+recentlyAnswerd[i].answers_count+'	 إجابات</a></span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-view"><i class="icon-user"></i>'+recentlyAnswerd[i].views+' مشاهدة</span>\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
                        '\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t</article>\n' +
                        '\n' +
                        '\n' +
                        '\t\t\t\t\t    </div>\n' +
                        '\t\t\t\t\t</div>';
                    //console.log(data[i].qustion_title);
				}
				
				$('#qst').html("");
                $('#qst').html(htmlxxx);
	}
	
	if (!('Notification' in window)) {
		document.getElementById('wn-unsupported').classList.remove('hidden');
		document.getElementById('button-wn-show-preset').setAttribute('disabled', 'disabled');
	} else {
		var log = document.getElementById('log');
		var notificationEvents = ['onclick', 'onshow', 'onerror', 'onclose'];

		function notifyUser(event) {
			var title;
			var options;

			event.preventDefault();
				title = 'Email received';
				options = {
					body: 'You have a total of 3 unread emails',
					tag: 'preset',
					icon: 'http://www.audero.it/favicon.ico'
				};


			Notification.requestPermission(function() {
				var notification = new Notification(title, options);

				notificationEvents.forEach(function(eventName) {
					notification[eventName] = function(event) {
						log.innerHTML = 'Event "' + event.type + '" triggered for notification "' + notification.tag + '"<br />' + log.innerHTML;
					};
				});
			});
		}

	}
</script>