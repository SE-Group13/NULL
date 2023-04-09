const petOwnerRadioButton = document.querySelector('#pet-owner');
const petTypeDropdown = document.querySelector('#pet-type-dropdown');
const petSitterRadioButton = document.querySelector('#pet-sitter');

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
