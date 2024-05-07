// modal video homepage //
function openModalVideo() {
    document.querySelector("#modalVideo").style.display = "block";
}

// modal video single animal page //
function openModal() {
    document.querySelector("#modalYoutube").style.display = "block";
}

// modal video focus //
function openModalVideoFocus() {
    document.querySelector("#modalVideoFocus").style.display = "block";
}

// partner logo click //
function logoClick(postId, imageUrl, titleTH, titleEN, content) {
    document.querySelector("#modalImage").src = imageUrl; // Set the image URL
    document.querySelector("#modalTitleTH").textContent = titleTH; // Set the title
    document.querySelector("#modalTitleEN").textContent = titleEN; // Set the title
    document.querySelector("#modalContent").innerHTML = content;
    document.querySelector("#modalLogo").style.display = "block"; // Show the modal
}

//close modal partner logo click
function closeModal() {
    document.querySelector("#modalLogo").style.display = "none"; // Hide the modal
}

window.onclick = function(event) {
    if (event.target == document.getElementById('modalYoutube')) {
        document.getElementById('modalYoutube').style.display = "none";
    }
    if (event.target == document.getElementById('modalVideo')) {
        document.getElementById('modalVideo').style.display = "none";
    }
    if (event.target == document.getElementById('modalLogo')) {
        document.getElementById('modalLogo').style.display = "none";
    }
    if (event.target == document.getElementById('modalVideoFocus')) {
        document.getElementById('modalVideoFocus').style.display = "none";
    }
}

// toggle menu //
function menuToggle() {
	var navigationMenu = document.getElementById("navigation-menu");
	if (navigationMenu.style.display === "block") {
	navigationMenu.style.display = "none";
	} else {
	navigationMenu.style.display = "block";
	}
}

// ajax count join team //
jQuery(document).ready(function($) {
	$('#clickButton').click(function() {
		var animalID = $(this).data('animal');
		
		$.ajax({
			beforeSend: (xhr) => {
				xhr.setRequestHeader('X-WP-Nonce', kindDining.nonce);
			},
			url: kindDining.root_url + '/wp-json/animal/v1/joinTeam?animal=' + animalID,
			type: 'GET',
			success: function(response) {
				window.location.href = response.redirect_url;
				console.log(response.message);
				console.log('Data sent successfully!');
			},
			error: function(error) {
				console.error('Error:', error);
			}
		});

	});
});
