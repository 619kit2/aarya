const toggleButton = document.getElementById('toggleButton');
const contactForm = document.getElementById('contact');

toggleButton.addEventListener('click', () => {
  contactForm.classList.toggle('show');
});
