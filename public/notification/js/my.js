$(document).ready(function(){


setInterval(function(){

getnotes();
}, 5000);
});




function getnotes(){
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $.ajax({
      /* the route pointing to the post function */
      url: '/getNotifications',
      type: 'GET',
      /* send the csrf-token and the input to the controller */

      dataType: 'JSON',
      /* remind that 'data' is the response of the AjaxController */
      success: function (data) {
        console.log(data);
            for (var i = 0; i < data.length; i++) {
              var toastHTML = '<button class="btn-flat toast-action"><a style="color:#00c497" href="/profile/'+data[i].user_id+'">تصفح</a></button><span>'+data[i].name+":"+data[i].body+'</span>';
              M.toast({html: toastHTML});
            }
      }
  });

}
