function sendMail() {
	var params = {
		name: document.getElementById('name').value,
		email: document.getElementById('email').value,
		message: document.getElementById('message').value,
	};

	const serviceID = 'service_v7fbegx';
	const templateID = 'template_lcrqf8q';

	var compteur = 0;
	const username = document.getElementById('name');
	const email = document.getElementById('email');
	const message = document.getElementById('message');

	if (username === '') {
	} else {
		compteur += 1;
	}

	if (email === '') {
	} else {
		compteur += 1;
	}

	if (message === '') {
	} else {
		compteur += 1;
	}

	if (compteur == 3) {
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

function checkInputs() {}
