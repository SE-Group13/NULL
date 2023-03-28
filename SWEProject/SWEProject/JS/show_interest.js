const content = document.getElementById("content");
const showInterestForm = document.getElementById("show-interest-form");

console.log("here")
showInterestForm.addEventListener("submit", (e) => {
	if (!checkInputs()) {
		e.preventDefault();
	}
});

function checkInputs() {
	var contentCorrect;

	if (content.value === "" || content.value === null) {
		setErrorFor(content, "Please write a short message! ");
	} else {
		if (content.classList.contains("input-error")) {
			content.classList.remove("input-error");
		}
		contentCorrect = true;
	}

	if (contentCorrect) {
		return true;
	} else {
		return false;
	}
}

function setErrorFor(input, message) {
	input.value = "";
	input.placeholder = message;

	input.classList.add("input-error");
}
