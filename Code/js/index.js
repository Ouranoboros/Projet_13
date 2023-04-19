function sendMail() {
	var params = {
		username: document.getElementById('name').value,
		email: document.getElementById('email').value,
		message: document.getElementById('message').value,
	};

	const serviceID = 'service_v7fbegx';
	const templateID = 'template_lcrqf8q';

	if (username === empty) && (email === empty) && (message === empty) {
		alert('Les choix ne doivent pas être vide !!');
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
