<!DOCTYPE html>

<head>



</head>
<body>
@include('layouts.header')


<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">

    <div class="login-panel">
        <section class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-content">
                        <h2>تسجيل دخول</h2>
                        <div class="form-style form-style-3">
                            <form method="POST" action="{{ route('login') }}" >
                                    {{ csrf_field() }}
                                <div class="form-inputs clearfix">
                                    <p class="login-text">
                                        <input type="email" id="email" name="email"value="الأسم" onfocus="if (this.value == 'الأسم') {this.value = '';}" onblur="if (this.value == '') {this.value = 'الأسم';}">
                                        <i class="icon-user"></i>
                                    </p>
                                    <p class="login-password">
                                        <input type="password" id="password" name="password" value="كلمة المرور" onfocus="if (this.value == 'كلمة المرور') {this.value = '';}" onblur="if (this.value == '') {this.value = 'كلمة المرور';}">
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
            <form method="POST" action="{{ route('register') }}" >
                {{ csrf_field() }}
                <div class="form-inputs clearfix">
                    <p>
                        <label class="required">الأسم<span>*</span></label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    </p>
                    <p>
                        <label class="required">البريد الإلكتروني<span>*</span></label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    </p>
                    <p>
                        <label class="required">كلمة المرور<span>*</span></label>
                        <input id="password" type="password" class="form-control" name="password" required>

                    </p>
                    <p>
                        <label class="required">إعادة كلمة المرور<span>*</span></label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
   
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
                        <input type="email" name="email">
                    </p>
                </div>
                <p class="form-submit">
                    <input type="submit" value="أستعادة" class="button color small submit">
                </p>
            </form>
            <div class="clearfix"></div>
        </div>
    </div><!-- End lost-password -->



    <div class="breadcrumbs">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>تسجيل دخول</h1>
                </div>
                <div class="col-md-12">
                    <div class="crumbs">
                        <a href="#">الرئيسية</a>
                        <span class="crumbs-span">/</span>
                        <a href="#">الصفحات</a>
                        <span class="crumbs-span">/</span>
                        <span class="current">تسجيل الدخول</span>
                    </div>
                </div>
            </div><!-- End row -->
        </section><!-- End container -->
    </div><!-- End breadcrumbs -->

    <section class="container main-content">
        <div class="login">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-content">
                        <h2>تسجيل دخول</h2>
                        <div class="form-style form-style-3">
                        <form method="POST" action="{{ route('login') }}" >
                                    {{ csrf_field() }}
                                <div class="form-inputs clearfix">
                                    <p class="login-text">
                                        <input type="email" name="email" value="الأسم" onfocus="if (this.value == 'الأسم') {this.value = '';}" onblur="if (this.value == '') {this.value = 'الأسم';}">
                                        <i class="icon-user"></i>
                                    </p>
                                    <p class="login-password">
                                        <input type="password" name="password" value="كلمة المرور" onfocus="if (this.value == 'كلمة المرور') {this.value = '';}" onblur="if (this.value == '') {this.value = 'كلمة المرور';}">
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
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، .</p>
                        <a class="button color small signup">تسجيل حساب جديد</a>
                    </div><!-- End page-content -->
                </div><!-- End col-md-6 -->
            </div><!-- End row -->
        </div><!-- End login -->
    </section><!-- End container -->


</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>
@include('layouts.footer')

</body>
</html>