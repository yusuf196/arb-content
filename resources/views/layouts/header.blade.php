

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

<div id="header-top">
    <section class="container clearfix">
        <nav class="header-top-nav">
                
            <ul class="dropdown-menu">
                <li><a href="contact_us.html"><i class="icon-envelope"></i>اتصل بنا</a></li>
                <li><a href="#"><i class="icon-headphones"></i>الدعم الفني</a></li>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">دخول</a></li>
                            <li><a href="{{ route('register') }}">تسجيل جديد</a></li>
                        @else
                            <li class="">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                          
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                              
                            </li>
                        @endif
                    </ul>
                </div>
                
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
<header id="header" >
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
                <li><a href="right_sidebar.html">الكتب الالكترونية</a>

                </li>
                <li><a href="shortcodes.html">الاشعارات</a></li>
                <li><a href="contact_us.html">اتصل بنا</a></li>
            </ul>
        </nav>
    </section>
</header><!-- End container -->



</div>
</body>
</html>
<!-- End header -->