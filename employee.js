$(document).ready(function(){
	$('.save_employee_info').on('click', function(e){
		var data = {};

		var uiParentModal 	= $(this).closest('#add_employee');

		data.username = uiParentModal.find('#username').val();
		data.password = uiParentModal.find('#password').val();
		data.role_id = uiParentModal.find('#role').val();
		data.family_name = uiParentModal.find('#family_name').val();
		data.given_name = uiParentModal.find('#given_name').val();
		data.street = uiParentModal.find('#street').val();
		data.city = uiParentModal.find('#city').val();
		data.province = uiParentModal.find('#province').val();
		data.postal_code = uiParentModal.find('#postal_code').val();
		data.country = uiParentModal.find('#country').val();
		data.work_location = uiParentModal.find('#location').val();
		data.email = uiParentModal.find('#email').val();
		data.phone = uiParentModal.find('#phone').val();
		data.mobile = uiParentModal.find('#mobile').val();
		data.billing_rate = uiParentModal.find('#billing_rate').val();
		data.is_default = uiParentModal.find('#default').val();
		data.employee_id = uiParentModal.find('#employee_id').val();
		data.gender = uiParentModal.find('#gender').val();
		data.position_name = uiParentModal.find('#position').val();
		data.hire_date = uiParentModal.find('#hire_date').val();
		data.release_date = uiParentModal.find('#release_date').val();
		data.birth_date = uiParentModal.find('#birth_date').val();
		data.salary = uiParentModal.find('#salary').val();
		data.employee_status = uiParentModal.find('#employee_status').val();

		data.sargas_form_token = $.cookie('sargas_form_cookie');

		$.ajax({
			url : 'employee/save_employee_info',
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
				if(oData.status == 'false'){
					uiParentModal.find('.error_message').html(oData.message).fadeIn();
				}else{

					window.location.reload();
					// uiParentModal.find('.error_message').html(oData.message).fadeOut();

					// uiParentModal.find('#last_name').val('');
					// uiParentModal.find('#first_name').val('');
					// uiParentModal.find('#gender').val('');
					// uiParentModal.find('#position').val('');
					// uiParentModal.find('#salary').val('');
					// uiParentModal.find('#contact_no').val('');
					// uiParentModal.find('#start_date').val('');
				}
			}
		});
	});
}).on('click', 'p.edit', function(e){
	
	var uiParent 	= $(this).closest('#info_table');

	uiParent.find('input').show();
	uiParent.find('select').show();
	uiParent.find('span').hide();
	uiParent.find('label.hidden').hide();
	uiParent.find('label.show').show();

	uiParent.find('p.edit').hide();
	uiParent.find('p.delete').hide();
	uiParent.find('p.save').show();

	//$(this).closest('tr').find('p.delete').hide();
	uiParent.find('p.cancel').show();
	

	e.preventDefault();

}).on('click', 'p.cancel', function(e){

	var uiParent 	= $(this).closest('#info_table');

	uiParent.find('.error_message').hide();
	uiParent.find('.success_message').hide();
	uiParent.find('input').hide();
	uiParent.find('select').hide();
	uiParent.find('span').show();
	uiParent.find('label.hidden').show();
	uiParent.find('label.show').hide();

	uiParent.find('p.edit').show();
	uiParent.find('p.delete').show();
	uiParent.find('p.save').hide();

	//$(this).closest('tr').find('p.delete').show();
	uiParent.find('p.cancel').hide();

	e.preventDefault();

}).on('click', 'p.save', function(e){
	var data = {};
	var uiParent 	= $(this).closest('#info_table');

	data.username = uiParent.find('input[name=username]').val();
	data.old_password = uiParent.find('input[name=old_password]').val();
	data.password = uiParent.find('input[name=password]').val();
	data.role_id = uiParent.find('select[name=role]').val();
	data.employee_id = uiParent.find('input[name=employee_id]').val();
	data.family_name = uiParent.find('input[name=family_name]').val();
	data.given_name = uiParent.find('input[name=given_name]').val();
	data.gender = uiParent.find('select[name=gender]').val();
	data.birth_date = uiParent.find('input[name=birth_date]').val();
	data.street = uiParent.find('input[name=street]').val();
	data.city = uiParent.find('input[name=city]').val();
	data.province = uiParent.find('input[name=province]').val();
	data.postal_code = uiParent.find('input[name=postal_code]').val();
	data.country = uiParent.find('input[name=country]').val();
	data.work_location = uiParent.find('select[name=location]').val();
	data.email = uiParent.find('input[name=email]').val();
	data.phone = uiParent.find('input[name=phone]').val();
	data.mobile = uiParent.find('input[name=mobile]').val();
	data.position_name = uiParent.find('input[name=position_name]').val();
	data.salary = uiParent.find('input[name=salary]').val();
	data.billing_rate = uiParent.find('input[name=billing_rate]').val();
	data.is_default = uiParent.find('select[name=default]').val();
	data.hire_date = uiParent.find('input[name=hire_date]').val();
	data.release_date = uiParent.find('input[name=release_date]').val();
	data.employee_status = uiParent.find('input[name=employee_status]').val();
//console.log(data);
	data.sargas_form_token = $.cookie('sargas_form_cookie');

	$.ajax({
		url : '/employee/update_employee_info',
		data : data,
		type : 'post',
		dataType : 'json',
		error : function(xhr, status, message){

		},
		beforeSend : function(){
			show_loading(uiParent);
		},
		complete : function(){
			hide_loading(uiParent);
		},
		success : function(oData){
			if(oData.status == 'false'){
				uiParent.find('.error_message').html(oData.message).fadeIn();
			}else{
				uiParent.find('.success_message').html(oData.message).fadeIn();
				uiParent.find('.error_message').hide();
				uiParent.find('input').hide();
				uiParent.find('select').hide();
				uiParent.find('span').show();
				uiParent.find('label.hidden').show();
				uiParent.find('label.show').hide();

				uiParent.find('p.edit').show();
				uiParent.find('p.delete').show();
				uiParent.find('p.save').hide();

				//$(this).closest('tr').find('p.delete').show();
				uiParent.find('p.cancel').hide();

				uiParent.find('span.username').html(data.username);
				uiParent.find('span.family_name').html(data.family_name);
				uiParent.find('span.given_name').html(data.given_name);
				uiParent.find('span.gender').html(data.gender);
				uiParent.find('span.birth_date').html(data.birth_date);
				uiParent.find('span.street').html(data.street);
				uiParent.find('span.city').html(data.city);
				uiParent.find('span.province').html(data.province);
				uiParent.find('span.postal_code').html(data.postal_code);
				uiParent.find('span.country').html(data.country);
				uiParent.find('span.work_location').html(data.work_location);
				uiParent.find('span.email').html(data.email);
				uiParent.find('span.phone').html(data.phone);
				uiParent.find('span.mobile').html(data.mobile);
				uiParent.find('span.position_name').html(data.position_name);
				uiParent.find('span.employee_id').html(data.employee_id);
				uiParent.find('span.salary').html(data.salary);
				uiParent.find('span.billing_rate').html(data.billing_rate);
				uiParent.find('span.is_default').html(data.is_default);
				uiParent.find('span.hire_date').html(data.hire_date);
				uiParent.find('span.release_date').html(data.release_date);
				uiParent.find('span.role_id').html(data.role_id);
				uiParent.find('span.employee_status').html(data.employee_status);
			}
		}
	});
}).on('click','.delete_employee_info', function(){
	var data = {};
	var uiParent 	= $(this).closest('#delete_modal');
	var sBaseUrl = uiParent.find('input[name=base_url]').val();

	data.username = uiParent.find('input[name=username]').val();

	data.sargas_form_token = $.cookie('sargas_form_cookie');

	$.ajax({
		url : '/employee/delete_employee_info',
		data : data,
		type : 'post',
		dataType : 'json',
		error : function(xhr, status, message){

		},
		beforeSend : function(){
			show_loading(uiParent);
		},
		complete : function(){
			hide_loading(uiParent);
		},
		success : function(oData){
			if(oData.status == 'false'){
				uiParent.find('.error_message').html(oData.message).fadeIn();
			}else{
				window.location.href = sBaseUrl+'employee';
			}
		}
	})
	

})

function show_loading(uiTarget) {
	uiTarget.find("#loading_wrapper").show();
	uiTarget.find("#action_wrapper").hide();
}
function hide_loading(uiTarget) {
	uiTarget.find("#loading_wrapper").hide();
	uiTarget.find("#action_wrapper").show();
}