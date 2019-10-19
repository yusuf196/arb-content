$(document).ready(function(){


    getAcceptAnswer();
  setInterval(function(){
    getAcceptAnswer();

}, 10000);

});



function upvote($id){

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/upvote',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, id:$id},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                      var rate=document.getElementById("ansRate"+$id);
                      if (data.rate>0) {
                       rate.innerHTML=data.rate+"+";
                      }
                    else {
                      rate.innerHTML=data.rate;
                    }

                        console.log("done!");
                    }
                });

}


function downvote($id){

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/downvote',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, id:$id},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                      var rate=document.getElementById("ansRate"+$id);
                       if (data.rate>0) {
                        rate.innerHTML=data.rate+"+";
                       }
                     else {
                       rate.innerHTML=data.rate;
                     }

                        console.log("done!");
                    }
                });

}



function acceptAnswer($id,$ans_id){
            $e=window.event;

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/acceptAnswer ',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, id:$id,ans_id:$ans_id},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                          $x=  $e.target.style.background;
                        if(data.accepted){
                          // $e.target.style.background='#22bb33';
                        $e.target.style.cssText=" position:absolute; up:10px; background:#22bb33"
                          $e.target.innerHTML='تم قبول الاجابة';

                        $e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.style.backgroundColor="rgb(244, 255, 250)";
                         // document.getElementById("img"+$ans_id).style.cssText="visibility:visible; position:absolute; left:1%; top:3%;";
                        }
                        else {
                          $e.target.style.cssText='';
                          $e.target.style.cssText="position: absolute; up:10px;"
                          $e.target.className="question-type-main icon-question-sign";
                          $e.target.innerHTML=' إقبل الاجابة  ';
                                    $e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.style.backgroundColor="";
                                       // document.getElementById("img"+$ans_id).style.cssText="visibility:hidden; position:absolute; left:1%; top:3%;";
                        }
                        console.log(qst_id);
                    }
                });

}



function getAcceptAnswer(){


            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/acceptAnswer/'+qst_id,
                    type: 'GET',
                    /* send the csrf-token and the input to the controller */

                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {

                       data.forEach(function(ans){
                     var element=document.getElementById("accept"+ans.id);
                     var rate=document.getElementById("ansRate"+ans.id);
                     if (ans.rate > 0) {
                      rate.innerHTML=ans.rate+"+";
                     }
                   else {
                     rate.innerHTML=ans.rate;
                   }
                     if(ans.accepted){
                    if (element != null || element != undefined) {
                      element.style.background='#22bb33';
                      element.style.cssText=" position:absolute; up:10px; background:#22bb33"
                        element.innerHTML='تم قبول الاجابة';
                    }

                      rate.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.style.backgroundColor="rgb(244, 255, 250)";
                     // document.getElementById("img"+ans.id).style.cssText="position:absolute; left:1%; top:3%;";
                     }
                     else {
                       if (element != null || element != undefined) {
                       element.style.cssText='';
                       element.style.cssText="position: absolute; top:15px;";
                      element.className="question-type-main icon-question-sign";
                    element.innerHTML=' إقبل الاجابة  ';}
                  rate.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.style.backgroundColor="";
                  // document.getElementById("img"+ans.id).style.cssText="visibility:hidden; position:absolute; left:1%; top:3%;";
                     }

                       });



                    }
                });

}
