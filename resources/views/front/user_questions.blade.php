@include('layouts.header')
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>اسئلة العضو : admin</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">الرئيسية</a>
						<span class="crumbs-span">/</span>
						<a href="#">الاعضاء</a>
						<span class="crumbs-span">/</span>
						<span class="current">اسئلة العضو : admin</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				
				<div class="clearfix"></div>
				<div class="page-content page-content-user">
					<div id="qustx" class="user-questions">
					
						
					</div>
				</div>
				
				<div class="height_20"></div>
				
				<div class="pagination">
				    <a href="#" class="prev-button"><i class="icon-angle-left"></i></a>
				    <span class="current">1</span>
				    <a href="#">2</a>
				    <a href="#">3</a>
				    <a href="#">4</a>
				    <a href="#">5</a>
				    <span>...</span>
				    <a href="#">11</a>
				    <a href="#">12</a>
				    <a href="#">13</a>
				    <a href="#" class="next-button"><i class="icon-angle-right"></i></a>
				</div><!-- End pagination -->
				<!-- if no questions
				<p>No questions yet</p>
				-->
			</div><!-- End main -->
			@include('layouts.aside')
		</div><!-- End row -->
	</section><!-- End container -->
	

</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>
@include('layouts.footer')
<script>	
	$(document).ready(function(){
getQuestions();
// setInterval(function(){
//     getQuestions();
// }, 10000);
});
		function getQuestions(){
			$.ajax({
				url: '/getUserQuestions/'+'<?php echo Auth::user()->id;?>',
				type: 'GET',
				datatype: 'json',
				success: function(data){
				 //  mostAnswerd=data[2];
				 //  recentlyAnswerd=data[1];
					var sess_id = '<?php echo Auth::user()->id; ?>';
					html = '';
					condition = '';
					//var dt = jQuery.parseJSON(data);
					for(var i = 0; i < data.length; i++)
					{
						var answerd="لم يحل";
						var notanswerdClass='"question-answered question-notanswered"';
						var notanswerdIcon="icon-exclamation-sign";
						if(data[i].answerd){
							
							answerd="تم الحل"; notanswerdClass='"question-answered question-answered-done"'; notanswerdIcon="icon-ok"; }
						
						var qust_user = data[i].user_id;
						if(qust_user == sess_id){
							condition = '\t\t\t\t\t\t\t\t<a class="question-report" href="/deletequstion/'+data[i].id+'/">حذف</a>\n' +
								'\t\t\t\t\t\t\t\t<a class="question-type-main" href="edit/'+data[i].id+'"><i class="icon-question-sign" ></i>تعديل</a>\n' ;
						}else{
							condition='';
						}
						html += '\t\t            <div class="tab-inner-warp">\n' +
							'\t\t\t\t\t\t<div class="tab-inner">\n' +
							'\t\t\t\t\t\t\t<article class="question question-type-normal">\n' +
							'\t\t\t\t\t\t\t\t<h2>\n' +
							'\t\t\t\t\t\t\t\t\t<a href="/viewqust/'+data[i].id+'/">'+data[i].qustion_title+'</a>\n' +
							'\t\t\t\t\t\t\t\t</h2>\n' +condition
							+
							
							'\t\t\t\t\t\t\t\t<div class="question-inner">\n' +
							'\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
							'\t\t\t\t\t\t\t\t\t<p class="question-desc">'+data[i].qustion_desc.substring(1, 80)+'...</p>\n' +
							'\t\t\t\t\t\t\t\t\t<div class="question-details">\n' +
							'\t\t\t\t\t\t\t\t\t\t<span class='+notanswerdClass+'><i class='+notanswerdIcon+'></i>'+answerd+'</span>\n' +
							'\t\t\t\t\t\t\t\t\t\t<span class="question-favorite"><i class="icon-star"></i>5</span>\n' +
							'\t\t\t\t\t\t\t\t\t</div>\n' +
							'\t\t\t\t\t\t\t\t\t<span class="question-category"><a href="#"><i class="icon-folder-close"> '+data[i].cat_name+'</i></a></span>\n' +
							'\t\t\t\t\t\t\t\t\t<span class="question-date"><i class="icon-time"></i>'+data[i].created_at+'</span>\n' +
							'\t\t\t\t\t\t\t\t\t<span class="question-comment"><a href="#"><i class="icon-comment"></i>'+data[i].answers_count+'	 إجابات</a></span>\n' +
							'\t\t\t\t\t\t\t\t\t<span class="question-view"><i class="icon-user"></i>'+data[i].views+' مشاهدة</span>\n' +
							'\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
							'\t\t\t\t\t\t\t\t</div>\n' +
							'\t\t\t\t\t\t\t</article>\n' +
							'\n' +
							'\n' +
							'\t\t\t\t\t    </div>\n' +
							'\t\t\t\t\t</div>';
						//console.log(data[i].qustion_title);
					}
					
					$('#qustx').html(html);
					},
				error: function()
				{
	
				}
			});
		}
		</script>
<!-- js -->
