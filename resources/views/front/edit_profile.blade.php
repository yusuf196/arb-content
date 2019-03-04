@include('layouts.header')
	
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>تعديل الملف الشخصي</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">الرئيسية</a>
						<span class="crumbs-span">/</span>
						<a href="#">الأعضاء</a>
						<span class="crumbs-span">/</span>
						<span class="current">تعديل الملف الشخصي</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				<div class="page-content">
					<div class="boxedtitle page-title"><h2>تعديل الملف الشخصي</h2></div>
					
					<div class="form-style form-style-4">
						<form>
							<div class="form-inputs clearfix">
								<p>
									<label>الأسم الأول</label>
									<input type="text">
								</p>
								<p>
									<label>الأسم الاخير</label>
									<input type="text">
								</p>
								<p>
									<label class="required">البريد الإلكتروني<span>*</span></label>
									<input type="email">
								</p>
								<p>
									<label>الموقع</label>
									<input type="text">
								</p>
								<p>
									<label class="required">كملة المرور<span>*</span></label>
									<input type="password" value="">
								</p>
								<p>
									<label class="required">إعادة كملة المرور<span>*</span></label>
									<input type="password" value="">
								</p>
								<p>
									<label>الدولة</label>
									<input type="text">
								</p>
							</div>
							<div class="form-style form-style-2">
								<div class="user-profile-img"><img src="http://placehold.it/60x60/FFF/444" alt="admin"></div>
								<p class="user-profile-p">
									<label>صورة الملف الشصخي</label>
									<div class="fileinputs">
										<input type="file" class="file">
										<div class="fakefile">
											<button type="button" class="button small margin_0">أختار الملف</button>
											<span><i class="icon-arrow-up"></i>تصفح</span>
										</div>
									</div>
								<p></p>
								<div class="clearfix"></div>
								<p>
									<label>نبذة عنك</label>
									<textarea cols="58" rows="8"></textarea>
								</p>
							</div>
							<div class="form-inputs clearfix">
								<p>
									<label>Facebook</label>
									<input type="text">
								</p>
								<p>
									<label>Twitter</label>
									<input type="text">
								</p>
								<p>
									<label>Linkedin</label>
									<input type="email">
								</p>
								<p>
									<label>Google plus</label>
									<input type="text">
								</p>
							</div>
							<p class="form-submit">
								<input type="submit" value="تحديث" class="button color small login-submit submit">
							</p>
						</form>
					</div>
				</div><!-- End page-content -->
			</div><!-- End main -->
			@include('layouts.aside')
		</div><!-- End row -->
	</section><!-- End container -->
	

</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

@include('layouts.footer')