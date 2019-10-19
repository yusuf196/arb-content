
                        <form action="/editQComment/{{$comment->id}}" method="post" id="comment" class="comment-form" name="comment" >
                            {!! csrf_field() !!}
                            <div id="respond-textarea">
                                <p>
                                    <label class="required" for="comment">التعليق<span>*</span></label>
                                    {{-- <input type="text" name="comment" aria-required="true"  cols="58" rows="8"> --}}
                                    <input type="text" name="commentxx" id="comment">
                                   
                                </p>
                            </div>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" value="أضف إجابتك" class="button small color">
                            </p>
                        </form>
                    </div>

                       