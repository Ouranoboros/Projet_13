function sendMail() {
	var params = {
		username: document.getElementById('name').value,
		email: document.getElementById('email').value,
		message: document.getElementById('message').value,
	};

	const serviceID = 'service_v7fbegx';
	const templateID = 'template_lcrqf8q';

	if (username === '' && email === '' && message === '') {
		alert('Veuillez remplir tous les champs');
		return false;
	} else {
		emailjs
			.send(serviceID, templateID, params)
			.then((res) => {
				document.getElementById('name').value = '';
				document.getElementById('email').value = '';
				document.getElementById('message').value = '';
				console.log(res);
				alert('Message envoyé !!');
			})
			.catch((err) => console.log(err));
	}
}
