<?php
use App\Qustion;
use App\Answer;
 $qs=Qustion::orderBy('created_at','desc')->get();
 if(COUNT($qs)>1){
 $first_qst=$qs[0]->qustion_title;
 $second_qst=$qs[1]->qustion_title;
 $first_body=$qs[0]->qustion_desc;
 
 $second_body=$qs[1]->qustion_desc;
 }
?>
<aside class="col-md-3 sidebar">
    <div class="widget widget_stats">
        <h3 class="widget_title">الاحصائيات</h3>
        <div class="ul_list ul_list-icon-ok">
            <ul>
            <li><i class="icon-question-sign"></i>الاسئلة ( <span>{{Count(Qustion::all())}}</span> )</li>
                <li><i class="icon-comment"></i>الاجابات ( <span>{{Count(Answer::all())}}</span> )</li>
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

    {{--<div class="widget widget_login">--}}
        {{--<h3 class="widget_title">تسجيل الدخول</h3>--}}
        {{--<div class="form-style form-style-2">--}}
            {{--<form>--}}
                {{--<div class="form-inputs clearfix">--}}
                    {{--<p class="login-text">--}}
                        {{--<input type="text" value="الأسم" onfocus="if (this.value == 'الأسم') {this.value = '';}" onblur="if (this.value == '') {this.value = 'الأسم';}">--}}
                        {{--<i class="icon-user"></i>--}}
                    {{--</p>--}}
                    {{--<p class="login-password">--}}
                        {{--<input type="password" value="كملة المرور" onfocus="if (this.value == 'كملة المرور') {this.value = '';}" onblur="if (this.value == '') {this.value = 'كملة المرور';}">--}}
                        {{--<i class="icon-lock"></i>--}}
                        {{--<a href="#">نسيت</a>--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<p class="form-submit login-submit">--}}
                    {{--<input type="submit" value="تسجيل الدخول" class="button color small login-submit submit">--}}
                {{--</p>--}}
                {{--<div class="rememberme">--}}
                    {{--<label><input type="checkbox" checked="checked"> تذكرني</label>--}}
                {{--</div>--}}
            {{--</form>--}}
            {{--<ul class="login-links login-links-r">--}}
                {{--<li><a href="#">تسجيل جديد</a></li>--}}
            {{--</ul>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="widget widget_highest_points">
        <h3  class="widget_title">الأعلي نقاطا</h3>
        <ul id="points">
            
        </ul>
    </div>
{{-- 
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
    </div> --}}

    <div class="widget">
        <h3 class="widget_title">آخر الاسئلة</h3>
        <ul class="related-posts">
            <li class="related-item">
                @if(count($qs)>1)
            <h3><a href="/viewqust/{{$qs[0]->id}}">{{$first_qst}}</a></h3>
                <p>{{substr($first_body,0,100)}}...</p>
                <div class="clear"></div><span>{{$qs[0]->created_at}}</span>
            </li>
            <li class="related-item">
                <h3><a href="/viewqust/{{$qs[1]->id}}">{{$second_qst}}</a></h3>
                <p>{{ substr($second_body,0,100)}}</p>
                <div class="clear"></div><span>{{$qs[1]->created_at}}</span>
                @endif
            </li>
        </ul>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script>
 (function(){
 
    $.ajax({
                    /* the route pointing to the post function */
                    url: '/getPoints ',
                    type: 'GET',
                    /* send the csrf-token and the input to the controller */
                   
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                   html= '    <li>  '  + 
 '                   <div class="author-img">  '  + 
 '                       <a href="#"><img width="60" height="60" src="/'+data[0].image_user+'" alt=""></a>  '  + 
 '                   </div>  '  + 
 '                   <h6><a href="#">'+data[0].name+'</a></h6>  '  + 
 '                   <span class="comment">'+data[0].points+'</span>  '  + 
 '               </li>  '  + 
 '                <li>  '  + 
 '                   <div class="author-img">  '  + 
 '                       <a href="#"><img width="60" height="60" src="/'+data[1].image_user+'" alt=""></a>  '  + 
 '                   </div>  '  + 
 '                   <h6><a href="#">'+data[1].name+'</a></h6>  '  + 
 '                   <span class="comment">'+data[1].points+'</span>  '  + 
 '               </li>  '  + 
 '                <li>  '  + 
 '                   <div class="author-img">  '  + 
 '                       <a href="#"><img width="60" height="60" src="/'+data[2].image_user+'" alt=""></a>  '  + 
 '                   </div>  '  + 
 '                   <h6><a href="#">'+data[2].name+'</a></h6>  '  + 
 '                   <span class="comment">'+data[2].points+'</span>  '  + 
 '               </li>  '   ; 
            

                   $('#points').html(html);
                       
                    }
                });


 })();
 
 </script>
</aside><!-- End sidebar -->