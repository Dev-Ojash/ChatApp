$(function () {  

var $frm = $("#reg_form");

if($frm.length){

	$frm.validate({
		rules:{
			user_name:{
				required: true,
			},
			email:{
				required :true,
				email :true
			},
			password:{
				required: true,
			}
			
		},
		messages:{
			user_name:{
				required:'* Name is required!',
			},
			email:{
				required:'* Email is required!',
				email:'* Please enter valid Email Id!'
			},
			password:{
				required: '* Passwosrd is required!',
			}
		}		
	})
}
var $frm2 = $("#login_form");

if($frm2.length){

	$frm2.validate({
		rules:{
			email:{
				required :true,
				email :true
			},
			password:{
				required: true,
			}
			
		},
		messages:{
			email:{
				required:'* Email is required!',
				email:'* Please enter valid Email Id!'
			},
			password:{
				required: '* Passwosrd is required!',
			}
		}		
	})
}

})

