

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>إسألني –انت تسال ونحن نجيب</title>
    <meta name="description" content="إسألني – قالب اسئلة واجوبة">
    <meta name="author" content="vbegy">

    <!-- Mobile Specific Metas -->
    <link href="/admin/css/styles.css" rel="stylesheet">
    {{-- <link href="/admin/css/bootstrap.min.css" rel="stylesheet"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/notification/css/materialize.min.css">
    <link rel="stylesheet" href="/notification/css/materialize.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Skins -->
    <link rel="stylesheet" href="/css/skins/skins.css">

    <!-- Responsive Style -->
    <link rel="stylesheet" href="/css/responsive.css">

    <!-- RTL Style -->
    <link rel="stylesheet" href="/css/rtl.css">
    <link rel="stylesheet" href="/css/mycss.css">
    
	<link href="/admin/css/font-awesome.min.css" rel="stylesheet">

	
    <!-- Favicons -->
    <link rel="shortcut icon" href="/images/favicon.png">
    

</head>
<body>
<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">

<div id="header-top">
    <section class="container clearfix">
        <nav class="header-top-nav">
                
            <ul class="dropdown-menu">
                <li><a href="/contact_us"><i class="icon-envelope"></i>اتصل بنا</a></li>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   
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
                                       <li>
                                        @if(Auth::user()->isAdmin)
                                        <a href="{{ route('adminLogin') }}"
                                       >
                                        Dashboard
                                    </a>
                                    @endif
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
        <div class="logo"><a href="/home"><img alt="" src="/images/logo.png"></a></div>
        <nav class="navigation">
            <ul>
                <li class="current_page_item"><a href="/home">الرئيسية</a>

                </li>
                <li class="ask_question"><a href="/addqustion">إسألني سؤال</a></li>
                <li><a href="/qustion">الاسئلة</a>


                </li>
                @if(Auth::check())
                <li><a href="/profile/{{Auth::user()->id}}">العضو</a>
                    <ul>
                        <li><a href="/profile/{{Auth::user()->id}}">ملف العضو الشخصي</a></li>
                        <li><a href="/userqustion">أسئلة العضو</a></li>
                        {{-- <li><a href="/useranswer">إجابات العضو</a></li> --}}

                        <li><a href="/editprofile">تعديل الملف الشخصي</a></li>
                    </ul>
                </li>
                @endif
                
                <li><a href="/blog">المقالات</a>
                    <ul>
                        <li><a href="/blog">عرض المقالات</a></li>
                        <li><a href="/writePost">كتابة مقالة</a></li>
                        

                
                    </ul>
                </li>
                <li><a href="/books">الكتب الالكترونية</a>

                </li>
                
                <li><a  id="notifications" >الاشعارات</a></li>
                <li><a href="/contactus">اتصل بنا</a></li>
            </ul>
        </nav>
    </section>
</header><!-- End container -->



</div>

    </div>
  </div>
  <div class="panel-pop" id="notification">
    <div class="panel panel-default"  style="height:80vh; overflow-y:auto;">
    <div class="panel-heading">
        إشعارات

        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
    <div class="panel-body">
        <ul class="list-group" id="addIthere">
            <li class="todo-list-item">
                <div class="checkbox">

                    <label for="checkbox-1">Make coffee</label>
                </div>
                <div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
            </li>

        </ul>
    </div>
    <div class="panel-footer">
        <div class="input-group">


        </span></div>
    </div>
</div>
</div><!-- End signup -->



</body>
</html>
<!-- End header -->