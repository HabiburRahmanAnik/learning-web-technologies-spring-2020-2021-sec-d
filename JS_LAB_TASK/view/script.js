'user strict';

function show(){
 	const profile = document.querySelector('.profile-container');
 	profile.style.display = 'block';
 }

function validation(){
			
	const name = document.getElementById('name');
	const username = document.getElementById('username');
	const email = document.getElementById('email');
	const password = document.getElementById('password');
	const conPass = document.getElementById('repass')
	const lname = document.getElementById('lname');
	const luser = document.getElementById('luser');
	const lemail = document.getElementById('lemail');
	const lpassword = document.getElementById('lpassword');
	const category = document.getElementsByName('category');
	const lradio = document.getElementById('lradio');
	const check = document.getElementById('checkbox');
	const lcheck = document.getElementById('lcheck');

		
	if (name.value.trim() == "" || name.value.trim() == null) {
		name.style.border = '1px solid red';
		lname.innerHTML = "*name can;t be empty";
		return false;

	}else if(name.value.length<3){
		name.style.border = '1px solid red';
		lname.innerHTML = "*name is too short";
		return false;
	}
	else if(name.value.length > 40){
		name.style.border = '1px solid red';
		lname.innerHTML = "*name is too long";
		return false;

	}else if(username.value.trim() == "" || username.value.trim() == null){
		username.style.border = '1px solid red';
		luser.innerHTML = "username can't be empty";
		return false;

	}else if(username.value.length<3){
		name.style.border = '1px solid red';
		luser.innerHTML = "*username is too short";
		return false;

	}else if(username.value.length > 40){
		name.style.border = '1px solid red';
		luser.innerHTML = "*username is too long";
		return false;
	}
	else if(email.value.trim() =="" || email.value.trim() == null){
		email.style.border = '1px solid red';
		lemail.innerHTML = "*email can't be empty";
		return false;

	}else if(password.value.trim() =="" || password.value.trim() == null){
		password.style.border = '1px solid red';
		lpassword.innerHTML = "*password can't be empty";
		return false;

	}else if(password.value.length <6){
		password.style.border = '1px solid red';
		lpassword.innerHTML = "*password contain at least 6 character";
		return false;

	}else if(!password.value.includes('$')  && !password.value.includes('&') 
			&& !password.value.includes('#') && !password.value.includes('@')){
		password.style.border = '1px solid red';
		lpassword.innerHTML = "*password contain at least one special character";
		return false;

	}else if(password.value != conPass.value){
		password.style.border = '1px solid red';
		conPass.style.border = '1px solid red';
		lpassword.innerHTML = "*password and confirm password does't match";
		return false;

	}else if(check.checked == false){
		lcheck.innerHTML = '*Please check tearms and condition';
		return false;
	}
	else{
			let  valid = false;
			let radio = '';
			for (let i =0; i< category.length; i++ ){
				if (category[i].checked) {
					radio = category[i].value;
					valid = true;
					break;
				}
			}
			if (valid)
			{
				const xhttp = new XMLHttpRequest();
				xhttp.open('POST', '../controller/regCheck.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('name='+name.value+'&&username='+username.value+'&&email='+email.value+
							'&&password='+password.value+'&&category='+radio);

				xhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						const regMsg = document.getElementById('regMsg');
						regMsg.innerHTML = this.responseText;
						regMsg.style.display = 'block';
					}
				}
				
				return false;
			}else{
				lradio.innerHTML = '*Please select one of them';
				return false;
			}
		}


}


/*-------------------login from validation--------------------------------------*/

/*function logValidation(){
	const name = document.getElementById('name');
	const password = document.getElementById('password');
	const lname = document.getElementById('lname');
	const lpass = document.getElementById('lpass');

	if (name.value.trim() === '' || name.value.trim == null) {
		lname.innerHTML = '*username is empty';
		return false;
	}else if(password.value.trim() === '' || password.value.trim() == null){
		lpass.innerHTML = '* password is empty';
		return false;
	}else{
		
	}

}*/

function productValidation(){
	const name = document.getElementById('name');
	const lproduct = document.getElementById('lproduct');

	if (name.value == "" || name.value == null) {
		lproduct.innerHTML = "*category name can't be empty";
		return false;
	}else if(name.value.length < 4){
		lproduct.innerHTML = "*category name is too short";
		lproduct.style.display = 'block';
		return false;
	}
	else{
				const xhttp = new XMLHttpRequest();
				xhttp.open('POST', '../controller/addProductCategory.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('name='+name.value);

				xhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						const regMsg = document.getElementById('msg');
						regMsg.innerHTML = this.responseText;
						regMsg.style.display = 'block';
					}
				}
				
				return false;
	}
}


function editCategoryValidation(){

	//alert('fkfjfj');
	const name = document.getElementById('name');
	const lproduct = document.getElementById('lproduct');

	if (name.value == "" || name.value == null) {
		lproduct.innerHTML = "*category name can't be empty";
		return false;
	}else if(name.value.length < 4){
		lproduct.innerHTML = "*category name is too short";
		lproduct.style.display = 'block';
		return false;
	}
	else{
		/*const xhttp = new XMLHttpRequest();
		xhttp.open('POST', '../controller/editCategory.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send('categoryName='+name.value);

		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				const regMsg = document.getElementById('msg');
				regMsg.innerHTML = this.responseText;
				regMsg.style.display = 'block';
				}
			}
				
		return false;
	}*/
}
}

function deleteCategory(){
	let check = confirm('Are you sure? You want to delete this?','');
	if (check) {
		window.open('../controller/deleteCategory.php', '_self');
	}else{
		window.open('productCategoryList.php','_self');
	}
}

/*-----------------Tools Validation-------------------------*/

function toolValidation(){
	const name = document.getElementById('name');
	const price = document.getElementById('price');
	const desc = document.getElementById('desc');
	const itoolName = document.getElementById('itoolName');
	const lprice = document.getElementById('lprice');
	const ldesc = document.getElementById('ldesc');
			
	if (name.value.trim() == "" || name.value.trim() == null) {
		itoolName.innerHTML = "*name can't be empty";
		return false;

	}else if(price.value.trim() == "" || price.value.trim() == null){
		lprice.innerHTML = "*price can't be empty";
		return false;

	}else if(isNaN(price.value)){
		lprice.innerHTML = '*Plsease enter number';
		return false;

	}else if (desc.value.trim() == "" || desc.value.trim() == null){
		ldesc.innerHTML = "*Description can't be empty";
		return false;
	}else{
		return true;
	}
}

////// add user validation////////////////////
function userValidation(){

	const name = document.getElementById('name');
	const username = document.getElementById('username');
	const email = document.getElementById('email');
	const password = document.getElementById('password');
	const lname = document.getElementById('lname');
	const luser = document.getElementById('luser');
	const lemail = document.getElementById('lemail');
	const lpassword = document.getElementById('lpassword');
	const category = document.getElementsByName('category');
	const lradio = document.getElementById('lradio');
					
	if (name.value.trim() == "" || name.value.trim() == null) {
		name.style.border = '1px solid red';
		lname.innerHTML = "*name can;t be empty";
		return false;

	}else if(name.value.length < 3){
		name.style.border = '1px solid red';
		lname.innerHTML = "*name is too short";
		return false;
	}
	else if(name.value.length > 40){
		name.style.border = '1px solid red';
		lname.innerHTML = "*name is too long";
		return false;

	}else if(username.value.trim() == "" || username.value.trim() == null){
		username.style.border = '1px solid red';
		luser.innerHTML = "username can't be empty";
		return false;

	}else if(username.value.length < 3){
		name.style.border = '1px solid red';
		luser.innerHTML = "*username is too short";
		return false;

	}else if(username.value.length > 40){
		name.style.border = '1px solid red';
		luser.innerHTML = "*username is too long";
		return false;
	}
	else if(email.value.trim() =="" || email.value.trim() == null){
		email.style.border = '1px solid red';
		lemail.innerHTML = "*email can't be empty";
		return false;

	}else if(password.value.trim() =="" || password.value.trim() == null){
		password.style.border = '1px solid red';
		lpassword.innerHTML = "*password can't be empty";
		return false;

	}else if(password.value.length <6){
		password.style.border = '1px solid red';
		lpassword.innerHTML = "*password contain at least 6 character";
		return false;

	}else if(!password.value.includes('$')  && !password.value.includes('&') 
			&& !password.value.includes('#') && !password.value.includes('@')){
		password.style.border = '1px solid red';
		lpassword.innerHTML = "*password contain at least one special character";
		return false;

	}else{
			let  valid = false;
			let radio = '';
			for (let i =0; i< category.length; i++ ){
				if (category[i].checked) {
					radio = category[i].value;
					valid = true;
					break;
				}
			}
			if (valid)
			{
				const xhttp = new XMLHttpRequest();
				xhttp.open('POST', '../controller/addUser.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('name='+name.value+'&&username='+username.value+'&&email='+email.value+
							'&&password='+password.value+'&&category='+radio);

				xhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						const regMsg = document.getElementById('msg');
						regMsg.innerHTML = this.responseText;
						regMsg.style.display = 'block';
					}
				}
				
				return false;

			}else{
				lradio.innerHTML = '*Please select one of them';
				return false;
			}
		}
}


