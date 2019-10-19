
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
                <div class="boxedtitle page-title"><h2>إسألني سؤال</h2></div>

                {{--<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>--}}

                <div class="form-style form-style-3" id="question-submit">
                    <form action="/edit/{{$qustionsss->id}}" method="post" >

                        {{ csrf_field() }}
                        <div>
                            {{ csrf_field() }}

                            <p>
                                <label class="required">عنوان السؤال<span>*</span></label>
                                {{--<p value="{{$qustionsss->qustion_title}}">--}}
                                <input type="text" id="question-title"  name="title" value="{{$qustionsss->qustion_title}}" class="form-control" >
                                {{--<input value="{{$qustionsss->qustion_title}}" type="text">--}}
                                <span class="form-description">يرجى اختيار عنوان مناسب للسؤال حتي يتم الرد عليه بسهوله .</span>
                            </p>
                            {{--<input type="text" id="question-title"  name="title" value="{{$qustionsss->qustion_title}}" class="form-control" >--}}

                            {{$qustionsss->cat_name}}
                            <p>
                                <label class="required">القسم<span>*</span></label>

                                <span class="styled-select">
										<select class="form-control" name="catname" id="catname">

                                                <option value="{{$qustionsss->id}}">{{$qustionsss->cat_name}}</option>



									</span>
                                <span class="form-description">الرجاء اختيار القسم المناسب لسهوله البحث والوصول الي سؤالك .</span>
                            </p>
                            <p class="question_poll_p">
                                {{ csrf_field() }}
                                <label for="question_poll">التصويت</label>
                                <input type="checkbox" id="question_poll" value="1" name="question_poll">
                                <span class="question_poll">هل هذا السؤال استطلاع ؟</span>
                                <span class="poll-description">اذا كنت تريده استطلاع اضغط هنا .</span>
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

                            <label>Attachment</label>
                            <div class="fileinputs">
                                <input type="file" class="file">
                                <div class="fakefile">
                                    <button type="button" class="button small margin_0">اختار الملف</button>
                                    <span><i class="icon-arrow-up"></i>تصفح</span>
                                </div>
                            </div>

                        </div>
                        <div id="form-textarea">
                            <p>
                                <label class="required">التفاصيل<span>*</span></label>
                                <textarea id="question-details" aria-required="true" cols="58" rows="8" name="body" class="form-control"  value="{{$qustionsss->qustion_desc}}"  ></textarea>
                                <span class="form-description">اكتب وصفا جيدا وبالتفصيل .</span>
                            </p>

                        </div>
                        <p class="form-submit">

                            <input type="submit" id="publish-question" value="نشر سؤالك" class="button color small submit">
                        </p>
                    </form>
                </div>
            </div><!-- End page-content -->
        </div><!-- End main -->
        @include('layouts.aside')
    </div><!-- End row -->
</section><!-- End container -->
@include('layouts.footer')
