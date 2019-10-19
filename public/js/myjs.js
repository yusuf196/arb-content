


$(document).ready(function(){

  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  jax_get(CSRF_TOKEN);

  jax_get_answer_comments(CSRF_TOKEN);
  setInterval(function(){

    jax_get(CSRF_TOKEN);
}, 10000);
            $("#form2").submit(function(event){
              event.preventDefault();
              console.log($('#comment_field').val());
              if($('#comment_field').val()==''){

                swal("(ಥ﹏ಥ)","لم تدخل نصاً","warning");}
                else{
                jax(CSRF_TOKEN);
                $("#comment_field").val('');
              }
            });

            $("#upvote").click(function(event){
                console.log("here");



            });

            var forms=$(".form3");

            forms.submit(function(event){
              event.preventDefault();
              for (var i = 0; i < forms.length; i++) {
                console.log(forms.length);
                if (forms[i].getElementsByClassName('comment_field_for_answer')[0].value =='' ||null||undefined ) {
                  continue;
                  console.log("not found");
                }
                console.log("found it");
                console.log(forms[i].getElementsByClassName('comment_field_for_answer')[0].value);
                 let commentx =forms[i].getElementsByClassName('comment_field_for_answer')[0].value;;
                 let id =forms[i].getElementsByClassName('answer_id')[0].value;;
                 jax_answer(CSRF_TOKEN,commentx,id);
                  break;
                  // $("#comment_field_for_answer").val('');




              }

            });
       });



//home.php mostAnserd,notAnswerd,recently answerd





// function acceptAnswer($id){
//             $e=window.event;
//             $e.target.style.background='#282828';
//             var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
//                 $.ajax({
//                     /* the route pointing to the post function */
//                     url: '/acceptAnswer ',
//                     type: 'POST',
//                     /* send the csrf-token and the input to the controller */
//                     data: {_token: CSRF_TOKEN, id:$id},
//                     dataType: 'JSON',
//                     /* remind that 'data' is the response of the AjaxController */
//                     success: function (data) {
//
//
//                         console.log(data.id);
//                     }
//                 });
//
// }









function jax(CSRF_TOKEN){

                $.ajax({
                    /* the route pointing to the post function */
                    url: '/addQuestionComment',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, message:$("#comment_field").val(),id:$("#question_id").val()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {

                      var html='';
                      let controlsq='';
                        for (var i = 0; i < data.length; i++) {
                          if(user_id == data[i].user_id){
                                     controlsq=
                                     '<a style="position:absolute; right:48vw; top:1vh;" href="/editQComment/'+data[i].id+'"><em class="fa fa-edit" style="color:blue;"></em></a>\n'+
                                        '	<a style="position:absolute; right:50vw; top:1vh;" href="/deleteQComment/'+data[i].id+'"><em class="fa fa-trash" style="color:red;"></em></a>\n';
                                 }
                          let d=data[i].created_at.toString();
                          let y= d.substring(2,4);
                          let m=d.substring(5,7);
                          let day=d.substring(8,10);
                          let time=d.substring(11,16);
                          let full= day.concat('-',m,'-',y,' ','في',' ',time);
                          html +='<div  style=" position: relative ;background-color:#f5f5f0; margin-top:3px;margin-top:2px; margin-left:5px; margin-right:5px;">\n'+
                          controlsq+
                          '<small style="padding:15px;">'+data[i].body+'</small>\n'+
                          '<span><h4 style="display:inline;">.</h4></span>'+
                          '<small><span > <a style="color:#3bb4c1; !!important"  href="/profile/'+data[i].user_id+'">'+data[i].name+'</a></span></small>\n'+
                          '<samll><span style="color:#b8b2a6"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+full+'</span></small>\n'+
                          '</div>';
                          controlsq='';
                        }
                        $("#comments_block").html(html);
                        console.log(data[0].user_id);
                    }
                });

}


function jax_get(CSRF_TOKEN){

  $.ajax({
      /* the route pointing to the post function */
      url: '/addQuestionComment',
      type: 'GET',
      /* send the csrf-token and the input to the controller */
      data: {_token: CSRF_TOKEN, message:$("#comment_field").val(),id:$("#question_id").val()},
      dataType: 'JSON',
      /* remind that 'data' is the response of the AjaxController */
      success: function (data) {
        var html='';
        let controlsq1='';

          for (var i = 0; i < data.length; i++) {
            if(user_id === data[i].user_id){
                       controlsq1=
                       '<a style="position:absolute; right:56vw; top:1vh;" href="/editQComment/'+data[i].id+'"><em class="fa fa-edit" style="color:blue;"></em></a>\n'+
                          '	<a style="position:absolute; right:58vw; top:1vh;" href="/deleteQComment/'+data[i].id+'"><em class="fa fa-trash" style="color:red;"></em></a>\n';
                      }
            let d=data[i].created_at.toString();
            let y= d.substring(2,4);
            let m=d.substring(5,7);
            let day=d.substring(8,10);
            let time=d.substring(11,16);
            let full= day.concat('-',m,'-',y,' ','في',' ',time);
            html +='<div lang="ar"   style=" position:relative; background-color:#f5f5f0; margin-top:3px;margin-top:2px; margin-left:5px; margin-right:5px;">\n'+
          controlsq1+
            '<small style="padding:15px;" lang="ar">'+data[i].body+'</small>\n'+
            '<span><h4 style="display:inline;"lang="ar">.</h4></span>'+
            '<small><span > <a style="color:#3bb4c1; !!important" lang="ar" href="/profile/'+data[i].user_id+'">'+data[i].name+'</a></span></small>\n'+
            '<samll><span style="color:#b8b2a6"lang="ar"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+full+'</span></small>\n'+
            '</div>';
            controlsq1='';
          }
          $("#comments_block").html(html);
         // console.log(data[0].user_id);
      }
  });

}




function jax_answer(CSRF_TOKEN,comment1,answer_id1){
              console.log(comment1);
              console.log(answer_id1);


                $.ajax({
                    /* the route pointing to the post function */
                    url: '/addAnswerComment',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, message:comment1,id:answer_id1},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {


                      var html='';
                        let controls='';
                        for (var i = 0; i < data.length; i++) {

                         if(user_id == data[i].user_id){
                           controls=
                           '<a style="position:absolute; right:42vw; top:1vh;" href="/editMyComment/'+data[i].id+'"><em class="fa fa-edit" style="color:blue;"></em></a>\n'+
                              '	<a style="position:absolute; right:45vw; top:1vh;" href="/deleteMyComment/'+data[i].id+'"><em class="fa fa-trash" style="color:red;"></em></a>\n';
                       }

                          let d=data[i].created_at.toString();
                          let y= d.substring(2,4);
                          let m=d.substring(5,7);
                          let day=d.substring(8,10);
                          let time=d.substring(11,16);
                          let full= day.concat('-',m,'-',y,' ','في',' ',time);
                          html +=
                          '<div  style=" position:relative;     background-color:#f5f5f0; margin-top:3px;margin-top:2px; margin-left:5px; margin-right:5px;">\n'+
                           controls+
                          '<small style="padding:15px;">'+data[i].comment_answer+'</small>\n'+
                          '<span><h4 style="display:inline;">.</h4></span>'+
                          '<small><span > <a style="color:#3bb4c1; !!important"  href="">'+data[i].name+'</a></span></small>\n'+
                          '<samll><span style="color:#b8b2a6"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+full+'</span></small>\n'+
                          '</div>';
                            controls='';
                        }

                       $("#comments_block"+answer_id1).html(html);
                        console.log("#comments_block"+answer_id1);
                    }
                });

}

function jax_get_answer_comments(CSRF_TOKEN){
   var forms1=$('.form3');
  for (let i = 0; i < forms1.length; i++) {
    console.log(forms1.length);


     let answer_id2 =forms1[i].getElementsByClassName('answer_id')[0].value;;
     $.ajax({
         /* the route pointing to the post function */
         url: '/addAnswerComment',
         type: 'GET',
         /* send the csrf-token and the input to the controller */
         data: {_token: CSRF_TOKEN,id:answer_id2},
         dataType: 'JSON',
         /* remind that 'data' is the response of the AjaxController */
         success: function (data) {


           var html='';
              let controls='';
             for (let j = 0; j < data.length; j++) {

              if(user_id == data[j].user_id){
                controls=
                '<a style="position:absolute; right:42vw; top:1vh;" href="/editMyComment/'+data[j].id+'"><em class="fa fa-edit " style="color:blue;"></em></a>\n'+
                   '	<a style="position:absolute; right:45vw; top:1vh;" href="/deleteMyComment/'+data[j].id+'"><em class="fa fa-trash"style="color:red;"></em></a>\n';
            }
               let d=data[j].created_at.toString();
               let y= d.substring(2,4);
               let m=d.substring(5,7);
               let day=d.substring(8,10);
               let time=d.substring(11,16);
               let full= day.concat('-',m,'-',y,' ',time,' ','في');
               html +=

               '<div  style=" position:relative;     background-color:#f5f5f0; margin-top:3px;margin-top:2px; margin-left:5px; margin-right:5px;">\n'+
               controls+
               '<small style="padding:15px;">'+data[j].comment_answer+'</small>\n'+
               '<span><h4 style="display:inline;">.</h4></span>'+
               '<small><span > <a style="color:#3bb4c1; !!important"  href="">'+data[j].name+'</a></span></small>\n'+
               '<samll><span style="color:#b8b2a6"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+full+'</span></small>\n'+
               '</div>';
                 controls='';
             }

            $("#comments_block"+answer_id2).html(html);
             console.log("#comments_block"+answer_id2);
         }
     });






  }




}
