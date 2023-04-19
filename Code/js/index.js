function sendMail() {
	var params = {
		username: document.getElementById('name').value,
		email: document.getElementById('email').value,
		message: document.getElementById('message').value,
	};

	const serviceID = 'service_v7fbegx';
	const templateID = 'template_lcrqf8q';

	emailjs
		.send(serviceID, templateID, params)
		.then((res) => {
			document.getElementById('name').value = '';
			document.getElementById('email').value = '';
			document.getElementById('message').value = '';
			console.log(res);
			alert('Your message sent successfully!!');
		})
		.catch((err) => console.log(err));
}
