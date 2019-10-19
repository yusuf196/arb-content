$(document).ready(function(){

getActivites();
getToDoList();
setInterval(function(){

getActivites();
}, 5000);



});


$(window).load(function() {
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

});

function toDoList(CSRF_TOKEN) {
  console.log(CSRF_TOKEN);
  console.log(document.getElementById("btn-inputxx").value);

  // var c=''+
	// 							'<div class="checkbox">'+
	// 								'<input type="checkbox" id="checkbox-1" />'+
	// 								'<label for="checkbox-1">'+$('#btn-inputxx').val()+'</label>'+
	// 							'</div>'+
	// 							'<div class="pull-right action-buttons"><a href="#" class="trash">'+
	// 								'<em class="fa fa-trash"></em>'+
	// 							'</a></div>'+
	// 						'';
  //              i.innerHTML=c;


$.ajax({
    /* the route pointing to the post function */
    url: '/toDoList',
    type: 'POST',
    /* send the csrf-token and the input to the controller */
    data: {_token: CSRF_TOKEN, message:$('#btn-inputxx').val()},
    dataType: 'JSON',
    /* remind that 'data' is the response of the AjaxController */
    success: function (data) {
      var html2="";
       for (var i = 0; i < data.length; i++) {
         let checked1="";
         if (data[i].done) {
           checked1='checked';
         }
        html2+= '<li class="todo-list-item">\n'+
        '<div class="checkbox">\n'+
           '<input type="checkbox" '+checked1+' '+'onClick="checkme('+data[i].id+')"  id="checkbox-1" />\n'+
           '<label for="checkbox-1">'+data[i].body+'</label>\n'+
         '</div>\n'+
         '<div class="pull-right action-buttons"><a id="'+data[i].id+'" onClick="deletme('+data[i].id+')" class="trash">\n'+
           '<em class="fa fa-trash"></em>\n'+
         '</a></div>\n'+
         '</li>';
       }
$('#btn-inputxx').val(" ");
        document.getElementById('toDoBodyx').innerHTML=html2;
    }
});







}
 function checkme(id){
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
   $.ajax({
       /* the route pointing to the post function */
       url: '/toDoListcheck',
       type: 'POST',
       /* send the csrf-token and the input to the controller */
       data: {_token: CSRF_TOKEN, id:id},
       dataType: 'JSON',
       /* remind that 'data' is the response of the AjaxController */
       success: function (data) {
             console.log(data.done);
       }
   });

 }

function getToDoList(){
  $.ajax({
      /* the route pointing to the post function */
      url: '/toDoList',
      type: 'GET',
      /* send the csrf-token and the input to the controller */

      dataType: 'JSON',
      /* remind that 'data' is the response of the AjaxController */
      success: function (data) {
        var html2="";
         for (var i = 0; i < data.length; i++) {
           let checked1="";
           if (data[i].done) {
             checked1='checked';
           }
          html2+= '<li class="todo-list-item">\n'+
          '<div class="checkbox">\n'+
             '<input type="checkbox" '+checked1+' '+'onClick="checkme('+data[i].id+')"  id="checkbox-1" />\n'+
             '<label for="checkbox-1">'+data[i].body+'</label>\n'+
           '</div>\n'+
           '<div class="pull-right action-buttons"><a id="'+data[i].id+'" onClick="deletme('+data[i].id+')" class="trash">\n'+
             '<em class="fa fa-trash"></em>\n'+
           '</a></div>\n'+
           '</li>';
         }

          document.getElementById('toDoBodyx').innerHTML=html2;
      }
  });


}




function deletme(id){
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $.ajax({
      /* the route pointing to the post function */
      url: '/toDoListDelete',
      type: 'POST',
      /* send the csrf-token and the input to the controller */
      data: {_token: CSRF_TOKEN, id:id},
      dataType: 'JSON',
      /* remind that 'data' is the response of the AjaxController */
      success: function (data) {
        var html2="";
         for (var i = 0; i < data.length; i++) {
           let checked1="";
           if (data[i].done) {
             checked1='checked';
           }
          html2+= '<li class="todo-list-item">\n'+
          '<div class="checkbox">\n'+
             '<input type="checkbox" '+checked1+' '+'onClick="checkme('+data[i].id+')" id="checkbox-1" />\n'+
             '<label for="checkbox-1">'+data[i].body+'</label>\n'+
           '</div>\n'+
           '<div class="pull-right action-buttons"><a id="'+data[i].id+'" onClick="deletme('+data[i].id+')" class="trash">\n'+
             '<em class="fa fa-trash"></em>\n'+
           '</a></div>\n'+
           '</li>';
         }

          document.getElementById('toDoBodyx').innerHTML=html2;
      }
  });
}
function getActivites(){

  $.ajax({
      /* the route pointing to the post function */
      url: '/getActivites',
      type: 'GET',
      /* send the csrf-token and the input to the controller */

      dataType: 'JSON',
      /* remind that 'data' is the response of the AjaxController */

      success: function (data) {
              var html1="";
        for (var i = 0; i < data.length; i++) {
          html1 +='<li class="left clearfix"><span class="chat-img pull-left">\n'+
								'<img src="'+data[i].image +'" alt="User Avatar" class="img-circle" style="width:60px; height:60px;" />\n'+
								'</span>\n'+
								'<div class="chat-body clearfix">\n'+
									'<div class="header"><strong class="primary-font">'+data[i].name+'</strong> <small class="text-muted">'+data[i].created_at+' ago</small></div>\n'+
									'<p>'+data[i].title+'.</p>\n'
								'</div>\n'+
							'</li>';
        }
      if(data.length==0){  document.getElementById('activityBody').innerHTML='<small>no activity</small>';}
        else {
        document.getElementById('activityBody').innerHTML=html1;
        }
      }


});
}
