<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>إسألني – قالب اسئلة واجوبة</title>
	<meta name="description" content="إسألني – قالب اسئلة واجوبة">
	<meta name="author" content="vbegy">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="css/skins/skins.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="css/responsive.css">
	
	<!-- RTL Style -->
	<link rel="stylesheet" href="css/rtl.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.png">
  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	<div class="login-panel">
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>تسجيل دخول</h2>
						<div class="form-style form-style-3">
							<form>
								<div class="form-inputs clearfix">
									<p class="login-text">
										<input type="text" value="الأسم" onfocus="if (this.value == 'الأسم') {this.value = '';}" onblur="if (this.value == '') {this.value = 'الأسم';}">
										<i class="icon-user"></i>
									</p>
									<p class="login-password">
										<input type="password" value="كلمة المرور" onfocus="if (this.value == 'كلمة المرور') {this.value = '';}" onblur="if (this.value == '') {this.value = 'كلمة المرور';}">
										<i class="icon-lock"></i>
										<a href="#">نسيت كلمة المرور</a>
									</p>
								</div>
								<p class="form-submit login-submit">
									<input type="submit" value="تسجيل دخول" class="button color small login-submit submit">
								</p>
								<div class="rememberme">
									<label><input type="checkbox" checked="checked"> تذكرني</label>
								</div>
							</form>
						</div>
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
	
	<div id="header-top">
		<section class="container clearfix">
			<nav class="header-top-nav">
				<ul>
					<li><a href="contact_us.html"><i class="icon-envelope"></i>اتصل بنا</a></li>
					<li><a href="#"><i class="icon-headphones"></i>الدعم الفني</a></li>
					<li><a href="login.blade.php" id="login-panel"><i class="icon-user"></i>منطقة تسجيل الدخول</a></li>
				</ul>
			</nav>
			<div class="header-search">
				<form>
				    <input type="text" value="أبحث هنا ..." onfocus="if(this.value=='أبحث هنا ...')this.value='';" onblur="if(this.value=='')this.value='أبحث هنا ...';">
				    <button type="submit" class="search-submit"></button>
				</form>
			</div>
		</section><!-- End container -->
	</div><!-- End header-top -->
	<header id="header" class="index-no-box">
		<section class="container clearfix">
			<div class="logo"><a href="index.html"><img alt="" src="images/logo.png"></a></div>
			<nav class="navigation">
				<ul>
					<li class="current_page_item"><a href="/home">الرئيسية</a>


					</li>
					<li class="ask_question"><a href="/addqustion">إسألني سؤال</a></li>
					<li><a href="/qustion">الاسئلة</a>

					</li>
					<li><a href="user_profile.html">العضو</a>
						<ul>
							<li><a href="/profile">ملف العضو الشخصي</a></li>
							<li><a href="/userqustion">أسئلة العضو</a></li>
							<li><a href="user_answers.html">إجابات العضو</a></li>

							<li><a href="edit_profile.html">تعديل الملف الشخصي</a></li>
						</ul>
					</li>
					<li><a href="/blog">المقالات</a>

					</li>
					<li><a href="right_sidebar.html">الصفحات</a>
						<ul>
							<li><a href="login.blade.php">تسجيل الدخول</a></li>
							<li><a href="contact_us.html">اتصل بنا</a></li>
							<li><a href="ask_question.html">إسألني سؤال</a></li>
							<li><a href="right_sidebar.html">القائمة الجانبية يمين</a></li>
							<li><a href="left_sidebar.html">القائمة الجانبية يسار</a></li>
							<li><a href="full_width.html">العرض الكامل</a></li>
							<li><a href="404.html">404</a></li>
						</ul>
					</li>
					<li><a href="shortcodes.html">Shortcodes</a></li>
					<li><a href="contact_us.html">اتصل بنا</a></li>
				</ul>
			</nav>
		</section><!-- End container -->
	</header><!-- End header -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				
				<div class="tabs-warp question-tab">
		            <ul class="tabs">
		                <li class="tab"><a href="#" class="current">آخر الاسئلة</a></li>
		                <li class="tab"><a href="#">الاكثر إجابة</a></li>
		                <li class="tab"><a href="#">المجاب مؤخرا</a></li>
		                <li class="tab"><a href="#">بدون إجابات</a></li>
		            </ul>
		            <div class="tab-inner-warp">
						<div class="tab-inner">
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الأول</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered question-answered-done"><i class="icon-ok"></i>تم الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-الاستطلاع">
								<h2>
									<a href="single_question_الاستطلاع.html">هذا هو سؤال الاستطلاع الثاني</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-signal"></i>الاستطلاع</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الثالث</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الرابع</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الخامس</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي السادس</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي السابع</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الثامن</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<a href="#" class="load-questions"><i class="icon-refresh"></i>المزيد من الاسئلة</a>
					    </div>
					</div>
					<div class="tab-inner-warp">
						<div class="tab-inner">
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الأول</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered question-answered-done"><i class="icon-ok"></i>تم الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-الاستطلاع">
								<h2>
									<a href="single_question_الاستطلاع.html">هذا هو سؤال الاستطلاع الثاني</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-signal"></i>الاستطلاع</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الثالث</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الرابع</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الخامس</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي السادس</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي السابع</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الثامن</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<a href="#" class="load-questions"><i class="icon-refresh"></i>المزيد من الاسئلة</a>
					    </div>
					</div>
					<div class="tab-inner-warp">
						<div class="tab-inner">
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الأول</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered question-answered-done"><i class="icon-ok"></i>تم الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-الاستطلاع">
								<h2>
									<a href="single_question_الاستطلاع.html">هذا هو سؤال الاستطلاع الثاني</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-signal"></i>الاستطلاع</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الثالث</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الرابع</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الخامس</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي السادس</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي السابع</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الثامن</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<a href="#" class="load-questions"><i class="icon-refresh"></i>المزيد من الاسئلة</a>
					    </div>
					</div>
					<div class="tab-inner-warp">
						<div class="tab-inner">
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الأول</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered question-answered-done"><i class="icon-ok"></i>تم الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-الاستطلاع">
								<h2>
									<a href="single_question_الاستطلاع.html">هذا هو سؤال الاستطلاع الثاني</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-signal"></i>الاستطلاع</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الثالث</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الرابع</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الخامس</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي السادس</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي السابع</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">هذا هو سؤالي الثامن</a>
								</h2>
								<a class="question-report" href="#">تبليغ</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>بانتظار الحل</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>
									<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>
									<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<a href="#" class="load-questions"><i class="icon-refresh"></i>المزيد من الاسئلة</a>
					    </div>
					</div>
		        </div><!-- End page-content -->
			</div><!-- End main -->
			<aside class="col-md-3 sidebar">
				<div class="widget widget_stats">
					<h3 class="widget_title">الاحصائيات</h3>
					<div class="ul_list ul_list-icon-ok">
						<ul>
							<li><i class="icon-question-sign"></i>الاسئلة ( <span>20</span> )</li>
							<li><i class="icon-comment"></i>الاجابات ( <span>50</span> )</li>
						</ul>
					</div>
				</div>
				
				<div class="widget widget_social">
					<h3 class="widget_title">تجدنا هنا</h3>
					<ul>
						<li class="rss-subscribers">
							<a href="#" target="_blank">
							<strong>
								<i class="icon-rss"></i>
								<span>Subscribe</span><br>
								<small>To RSS Feed</small>
							</strong>
							</a>
						</li>
						<li class="facebook-fans">
							<a href="#" target="_blank">
							<strong>
								<i class="social_icon-facebook"></i>
								<span>5,000</span><br>
								<small>People like it</small>
							</strong>
							</a>
						</li>
						<li class="twitter-followers">
							<a href="#" target="_blank">
							<strong>
								<i class="social_icon-twitter"></i>
								<span>3,000</span><br>
								<small>Followers</small>
							</strong>
							</a>
						</li>
						<li class="youtube-subs">
							<a href="#" target="_blank">
							<strong>
								<i class="icon-play"></i>
								<span>1,000</span><br>
								<small>Subscribers</small>
							</strong>
							</a>
						</li>
					</ul>
				</div>
				
				<div class="widget widget_login">
					<h3 class="widget_title">تسجيل الدخول</h3>
					<div class="form-style form-style-2">
						<form>
							<div class="form-inputs clearfix">
								<p class="login-text">
									<input type="text" value="الأسم" onfocus="if (this.value == 'الأسم') {this.value = '';}" onblur="if (this.value == '') {this.value = 'الأسم';}">
									<i class="icon-user"></i>
								</p>
								<p class="login-password">
									<input type="password" value="كملة المرور" onfocus="if (this.value == 'كملة المرور') {this.value = '';}" onblur="if (this.value == '') {this.value = 'كملة المرور';}">
									<i class="icon-lock"></i>
									<a href="#">نسيت</a>
								</p>
							</div>
							<p class="form-submit login-submit">
								<input type="submit" value="تسجيل الدخول" class="button color small login-submit submit">
							</p>
							<div class="rememberme">
								<label><input type="checkbox" checked="checked"> تذكرني</label>
							</div>
						</form>
						<ul class="login-links login-links-r">
							<li><a href="#">تسجيل جديد</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<div class="widget widget_highest_points">
					<h3 class="widget_title">الأعلي نقاطا</h3>
					<ul>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="http://placehold.it/60x60/FFF/444" alt=""></a>
							</div> 
							<h6><a href="#">admin</a></h6>
							<span class="comment">12 نقطه</span>
						</li>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="http://placehold.it/60x60/FFF/444" alt=""></a>
							</div> 
							<h6><a href="#">vbegy</a></h6>
							<span class="comment">10 نقطه</span>
						</li>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="http://placehold.it/60x60/FFF/444" alt=""></a>
							</div> 
							<h6><a href="#">ahmed</a></h6>
							<span class="comment">5 نقطه</span>
						</li>
					</ul>
				</div>
				
				<div class="widget widget_tag_cloud">
					<h3 class="widget_title">الوسوم</h3>
					<a href="#">projects</a>
					<a href="#">Portfolio</a>
					<a href="#">Wordpress</a>
					<a href="#">Html</a>
					<a href="#">Css</a>
					<a href="#">jQuery</a>
					<a href="#">2code</a>
					<a href="#">vbegy</a>
				</div>
				
				<div class="widget">
					<h3 class="widget_title">آخر الاسئلة</h3>
					<ul class="related-posts">
						<li class="related-item">
							<h3><a href="#">هذا هو سؤالي الأول</a></h3>
							<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ.</p>
							<div class="clear"></div><span>فبراير 22, 2014</span>
						</li>
						<li class="related-item">
							<h3><a href="#">هذا هو سؤال الاستطلاع الثاني</a></h3>
							<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ.</p>
							<div class="clear"></div><span>فبراير 22, 2014</span>
						</li>
					</ul>
				</div>
				
			</aside><!-- End sidebar -->
		</div><!-- End row -->
	</section><!-- End container -->
	
	<footer id="footer">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="widget widget_contact">
						<h3 class="widget_title">أين نحن؟</h3>
						<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
						<ul>
							<li>
								<span>العنوان :</span>
								شبكة اسئلني ، السيدة زينب ، القاهرة.
							</li>
							<li>
								<span>الدعم :</span>الدعم عبر الهاتف ت : (+2)01111011110
							</li>
							<li>الدعم عبر البريد الإلكتروني : info@example.com</li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="widget">
						<h3 class="widget_title">وصلات سريعة</h3>
						<ul>
							<li><a href="index.html">الرئيسية</a></li>
							<li><a href="ask_question.html">إسألني سؤال</a></li>
							<li><a href="#">من نحن</a></li>
							<li><a href="cat_question.html">الاسئلة</a></li>
							<li><a href="user_profile.html">الاعضاء</a></li>
							<li><a href="blog_1.html">المقالات</a></li>
							<li><a href="right_sidebar.html">الصفحات</a></li>
							<li><a href="shortcodes.html">Shortcodes</a></li>
							<li><a href="contact_us.html">اتصل بنا</a></li>
							<li><a href="#">التعليمات</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="widget">
						<h3 class="widget_title">الاسئلة الشائعه</h3>
						<ul class="related-posts">
							<li class="related-item">
								<h3><a href="#">هذا هو سؤالي الأول</a></h3>
								<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي.</p>
								<div class="clear"></div><span>فبراير 22, 2014</span>
							</li>
							<li class="related-item">
								<h3><a href="#">هذا هو سؤال الاستطلاع الثاني</a></h3>
								<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي.</p>
								<div class="clear"></div><span>فبراير 22, 2014</span>
							</li>
						</ul>
					</div>	
				</div>
				<div class="col-md-3">
					<div class="widget widget_twitter">
						<h3 class="widget_title">أحدث التغريدات</h3>
						<div class="tweet_1"></div>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</footer><!-- End footer -->
	<footer id="footer-bottom">
		<section class="container">
			<div class="copyrights f_left">Copyright 2014 Ask me | <a href="#">By 2code</a></div>
			<div class="social_icons f_right">
				<ul>
					<li class="twitter"><a original-title="Twitter" class="tooltip-n" href="#"><i class="social_icon-twitter font17"></i></a></li>
					<li class="facebook"><a original-title="Facebook" class="tooltip-n" href="#"><i class="social_icon-facebook font17"></i></a></li>
					<li class="gplus"><a original-title="Google plus" class="tooltip-n" href="#"><i class="social_icon-gplus font17"></i></a></li>
					<li class="youtube"><a original-title="Youtube" class="tooltip-n" href="#"><i class="social_icon-youtube font17"></i></a></li>
					<li class="skype"><a original-title="Skype" class="tooltip-n" href="skype:#?call"><i class="social_icon-skype font17"></i></a></li>
					<li class="flickr"><a original-title="Flickr" class="tooltip-n" href="#"><i class="social_icon-flickr font17"></i></a></li>
					<li class="rss"><a original-title="Rss" class="tooltip-n" href="#"><i class="social_icon-rss font17"></i></a></li>
				</ul>
			</div><!-- End social_icons -->
		</section><!-- End container -->
	</footer><!-- End footer-bottom -->
</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/twitter/jquery.tweet.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/jquery.tipsy.js"></script>
<script src="js/tabs.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/tags.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/custom-ar.js"></script>
<!-- End js -->

</body>
</html>