function openModalVideo() {
    document.querySelector("#modalVideo").style.display = "block";
}

function openModal() {
    document.querySelector("#modalYoutube").style.display = "block";
}

function openModalVideoFocus() {
    document.querySelector("#modalVideoFocus").style.display = "block";
}

function logoClick(postId, imageUrl, titleTH, titleEN, content) {
    document.querySelector("#modalImage").src = imageUrl; // Set the image URL
    document.querySelector("#modalTitleTH").textContent = titleTH; // Set the title
    document.querySelector("#modalTitleEN").textContent = titleEN; // Set the title
    document.querySelector("#modalContent").innerHTML = content;
    document.querySelector("#modalLogo").style.display = "block"; // Show the modal
}

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
