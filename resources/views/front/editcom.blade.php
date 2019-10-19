
                        <form action="/editcoments/{{$qustionsss->id}}" method="post" id="comment" class="comment-form" name="comment" >
                            {!! csrf_field() !!}
                            <div id="respond-textarea">
                                <p>
                                    <label class="required" for="comment">التعليق<span>*</span></label>
                                    <textarea id="article-ckeditor" name="comment" aria-required="true" cols="58" rows="8">{{ $qustionsss->answer_text }}</textarea>
                                </p>
                            </div>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" value="أضف إجابتك" class="button small color">
                            </p>
                        </form>
                    </div>

                        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                        <script>
                            CKEDITOR.replace( 'article-ckeditor' );
                        </script>