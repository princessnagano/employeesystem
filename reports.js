$(document).ready(function(){
	$('#generate_time_log').on('click', function(e){
		var data = {};
		var uiParentModal 	= $(this).closest('#time_log_report');

		data.date_from 	= uiParentModal.find('input[name=date_from]').val();
		data.date_to 	= uiParentModal.find('input[name=date_to]').val();
		data.usernames 	= uiParentModal.find('select[name=employees]').multiselect("getChecked").map(function(){
					 		return this.value;    
					 	}).get();
		
		data.sargas_form_token = $.cookie('sargas_form_cookie');

		$.ajax({
			url : '/reports/generate_time_log',
			data : data,
			type : 'post',
			dataType : 'json',
			error : function(xhr, status, message){

			},
			beforeSend : function(){
				show_loading(uiParentModal);
			},
			complete : function(){
				hide_loading(uiParentModal);
			},
			success : function(oData){
				$('#loading_wrapper').hide();

				if(oData.status == 'false'){
					$('.error_message').html(oData.message).show();
				}else{
					$('.error_message').html(oData.message).hide();

					var now = new Date();
					var date = now.getFullYear()+'-'+(now.getMonth() + 1)+'-'+now.getDate();
					var link = document.createElement('a');
					link.href = oData.url;
					link.download = oData.file;
					document.body.appendChild(link);
					link.click();
				}
			}
		});
	});

	$('#time_log_report').on('show.bs.modal', function(e){
		$(".multiselect_employees").multiselect("uncheckAll");

	});
});

function show_loading(uiTarget) {
	uiTarget.find("#loading_wrapper").show();
	uiTarget.find("#action_wrapper").hide();
}
function hide_loading(uiTarget) {
	uiTarget.find("#loading_wrapper").hide();
	uiTarget.find("#action_wrapper").show();
}