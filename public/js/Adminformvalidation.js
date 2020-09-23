$(document).ready(function(){
	$("#current_pwd").keyup(function(){
		var current_pwd = $("#current_pwd").val();
		var Admin_id =$("#current_pwd").data('id');

		$.ajax({
			type:'get',
			url:'/admin/check-pwd',
			data:{current_pwd:current_pwd,id:Admin_id},
			success:function(resp){
				// alert(resp);
				if(resp=="false"){
					$("#checkpassword").html("<font color='red'>Current Password Is Incorrect</font>");
				} else if(resp=="true") {
					$("#checkpassword").html("<font color='green'>Current Password Is Correct</font>");
				}
			},error:function(){
				alert("Error");
			}
		});
	});
	
	
	
	
	// Form Validation
    $("#password_validate").validate({
		rules:{
			required:{
				required:true
			},
			current_pwd:{
				required:true,
				
			},
			new_pwd:{
				required:true,
				
			},
			confirm_pwd:{
				required:true,
				
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	$("#profile-update").validate({
		rules:{
			required:{
				required:true
			},
			name:{
				required:true
				
			},
			email:{
				required:true
			},
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});



	$("#user-update").validate({
		rules:{
			required:{
				required:true
			},
			name:{
				required:true
				
			},
			email:{
				required:true
			},
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});


	$(".delete-user").click(function(){
		
		if(confirm('Are you sure you want to delete?')){
			return true;
		} else {
			return false;
		}
	});


	


    // $("#add_moderator").validate({
	// 	rules:{
	// 		moderator_name:{
	// 			required:true,
	// 			pattern:"[A-Za-z ]+",
	// 		},
	// 		moderator_email:{
	// 			required:true,
	// 		},
	// 		moderator_password:{
	// 			required:true,
	// 		}
	// 	},
	// 	errorClass: "help-inline",
	// 	errorElement: "span",
	// 	highlight:function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').addClass('error');
	// 	},
	// 	unhighlight: function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').removeClass('error');
	// 		$(element).parents('.control-group').addClass('success');
	// 	}
	// });
	// $("#send_inviteuser").validate({
	// 	rules:{
	// 		email:{
	// 			required:true,
	// 			pattern:"[A-Za-z ]+",
	// 		}
	// 	},
	// 	errorClass: "help-inline",
	// 	errorElement: "span",
	// 	highlight:function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').addClass('error');
	// 	},
	// 	unhighlight: function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').removeClass('error');
	// 		$(element).parents('.control-group').addClass('success');
	// 	}
	// });
	// $("#edit_moderator").validate({
	// 	rules:{
	// 		moderator_name:{
	// 			required:true
	// 		},
	// 		moderator_email:{
	// 			required:true
	// 		},
	// 		moderator_password:{
	// 			required:true
	// 		}
	// 	},
	// 	errorClass: "help-inline",
	// 	errorElement: "span",
	// 	highlight:function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').addClass('error');
	// 	},
	// 	unhighlight: function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').removeClass('error');
	// 		$(element).parents('.control-group').addClass('success');
	// 	}
	// });
	// $("#edit_inviteuser").validate({
	// 	rules:{
	// 		inviteuser:{
	// 			required:true
	// 		}
	// 	},
	// 	errorClass: "help-inline",
	// 	errorElement: "span",
	// 	highlight:function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').addClass('error');
	// 	},
	// 	unhighlight: function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').removeClass('error');
	// 		$(element).parents('.control-group').addClass('success');
	// 	}
	// });
	// $("#add_boardcategory").validate({
	// 	rules:{
	// 		boardcategory_name:{
	// 			required:true,
	// 			pattern:"[A-Za-z ]+",
	// 		}
	// 	},
	// 	errorClass: "help-inline",
	// 	errorElement: "span",
	// 	highlight:function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').addClass('error');
	// 	},
	// 	unhighlight: function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').removeClass('error');
	// 		$(element).parents('.control-group').addClass('success');
	// 	}
	// });
	// $("#edit_boardcategory").validate({
	// 	rules:{
	// 		boardcategory_name:{
	// 			required:true
	// 		}
	// 	},
	// 	errorClass: "help-inline",
	// 	errorElement: "span",
	// 	highlight:function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').addClass('error');
	// 	},
	// 	unhighlight: function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').removeClass('error');
	// 		$(element).parents('.control-group').addClass('success');
	// 	}
	// });
	// $("#add_thread").validate({
	// 	rules:{
	// 		thread_name:{
	// 			required:true,
	// 			pattern:"[A-Za-z ]+",
	// 		}
	// 	},
	// 	errorClass: "help-inline",
	// 	errorElement: "span",
	// 	highlight:function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').addClass('error');
	// 	},
	// 	unhighlight: function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').removeClass('error');
	// 		$(element).parents('.control-group').addClass('success');
	// 	}
	// });
	// $("#edit_thread").validate({
	// 	rules:{
	// 		thread_name:{
	// 			required:true,
	// 			pattern:"[A-Za-z ]+",
	// 		}
	// 	},
	// 	errorClass: "help-inline",
	// 	errorElement: "span",
	// 	highlight:function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').addClass('error');
	// 	},
	// 	unhighlight: function(element, errorClass, validClass) {
	// 		$(element).parents('.control-group').removeClass('error');
	// 		$(element).parents('.control-group').addClass('success');
	// 	}
	// });
	// $("#delModerator").click(function(){
		
	// 	if(confirm('Are you sure you want to delete?')){
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// });
	// $("#delInviteUser").click(function(){
		
	// 	if(confirm('Are you sure you want to delete?')){
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// });
	// $("#delCat").click(function(){
		
	// 	if(confirm('Are you sure you want to delete?')){
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// });
	// $("#delThread").click(function(){
		
	// 	if(confirm('Are you sure you want to delete?')){
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// });

});
