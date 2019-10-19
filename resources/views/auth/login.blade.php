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
            <form method="POST" action="{{ route('register') }}"  id="registerFrom">
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
                    <input type="submit" value="تسجيل جديد" class="button color small submit ">
                </p>
            </form>
        </div>
    </div><!-- End signup -->

    <div class="panel-pop" id="imageUploader">
            <h2>اختر صورة شخصية<i class="icon-remove"></i></h2>
        <header id="headerAv">
        <span class="avatar"><img id="imgvat" src="images/wait.gif" alt="" /></span>
        </header>
        <div class="form-style form-style-3">
                <form method="POST" action="{{ route('imageUploder') }}" id="imageUP" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="form-inputs clearfix">
                            <p class="custom-file">
                               
                                <input id="fileUp" type="file" name="select_file" />
                                
                            </p>
                          
                           
                        </div>
                        <p class="form-submit">
                            <input type="submit" value="تسجيل جديد" class="button color small submit">
                        </p>
                    </form>
        </div>
    </div>
    
    </div>
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
                      {{-- /  <a class="imageUploader">cccc</a> --}}

                    </div><!-- End page-content -->
                </div><!-- End col-md-6 -->
            </div><!-- End row -->
        </div><!-- End login -->
    </section><!-- End container -->


</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>





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
                            فلسطين-غزة.
                        </li>
                        <li>
                            <span>الدعم :</span>الدعم عبر الهاتف ت : 0597801733
                        </li>
                        <li>الدعم عبر البريد الإلكتروني : eng.mahbalawi@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 class="widget_title">وصلات سريعة</h3>
                    <ul>
                        <li><a href="/home">الرئيسية</a></li>
                        <li><a href="/addqustion">إسألني سؤال</a></li>
                        <li><a href="#">من نحن</a></li>
                        <li><a href="/qustion">الاسئلة</a></li>

                        <li><a href="/blog">المقالات</a></li>
                        <li><a href="right_sidebar.html">الكتب الالكترونية</a></li>
                        <li><a href="shortcodes.html">الاشعارات</a></li>
                        <li><a href="/contactus">اتصل بنا</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 class="widget_title">الاسئلة الشائعه</h3>
                    <ul class="related-posts">
                        <li class="related-item">
                            <h3><a href="#">هذا هو سؤالي الأول</a></h3>
                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي.</p>
                            <div class="clear"></div><span>فبراير ,2019</span>
                        </li>
                        <li class="related-item">
                            <h3><a href="#">هذا هو سؤال الاستطلاع الثاني</a></h3>
                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي.</p>
                            <div class="clear"></div><span>فبراير 22, 2019</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div><!-- End row -->
    </section><!-- End container -->
</footer><!-- End footer -->
<footer id="footer-bottom">
    <section class="container">
        <div class="copyrights f_left">Copyright 2019 graduate project | <a href="#">By team</a></div>
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
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/js/jquery.easing.1.3.min.js"></script>
<script src="/js/html5.js"></script>
<script src="/js/twitter/jquery.tweet.js"></script>
<script src="/js/jflickrfeed.min.js"></script>
<script src="/js/jquery.inview.min.js"></script>
<script src="/js/jquery.tipsy.js"></script>
<script src="/js/tabs.js"></script>
<script src="/js/jquery.flexslider.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="/js/jquery.scrollTo.js"></script>
<script src="/js/jquery.nav.js"></script>
<script src="/js/tags.js"></script>
<script src="/js/jquery.bxslider.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/custom-ar.js"></script>
<!-- End js -->




</body>
</html>