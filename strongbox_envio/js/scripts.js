function http(form) {
	var url = form.url.value;
	if ((url.indexOf("http://")==-1) && (url.indexOf("https://")==-1)){
		form.url.value = "http://"+url;
	}
}

function check(input, form) {
    if (input.value != form.password.value) {
        input.setCustomValidity('Los dos passwords deben coincidir');
    } else {
        input.setCustomValidity('');
   }
}

function passShow(form) {
	if (form.show.checked) {
		form.password.setAttribute('type','text');
	} else {
		form.password.setAttribute('type','password');
	}
}