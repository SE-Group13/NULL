const petOwnerRadioButton = document.querySelector('#pet-owner');
const petTypeDropdown = document.querySelector('#pet-type-dropdown');
const petSitterRadioButton = document.querySelector('#pet-sitter');
const registerButton = document.querySelector('button[name="submit"]');
const recaptcha = document.querySelector('.g-recaptcha');

petOwnerRadioButton.addEventListener('change', function() {
  if (this.checked) {
    petTypeDropdown.style.display = 'block';
  } else {
    petTypeDropdown.style.display = 'none';
  }
});

petSitterRadioButton.addEventListener('change', function() {
  if (this.checked) {
    petTypeDropdown.style.display = 'none';
  }
});

registerButton.addEventListener('click', function(event) {
  if (recaptcha && !grecaptcha.getResponse()) {
    alert('Please complete the reCAPTCHA verification');
    event.preventDefault();
  } else if (!document.getElementById('document').value) {
    alert('Please upload a document');
    event.preventDefault();
  }
});
