// Alternar visibilidade da senha
const togglePassword = document.getElementById('togglePassword');
const passwordInput = document.getElementById('password');

if (togglePassword && passwordInput) {
  togglePassword.addEventListener('click', function () {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
  });
}

// Alternar modo claro/escuro
const themeButtons = document.querySelectorAll('.theme-btn');

themeButtons.forEach(button => {
  button.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

    themeButtons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
  });
});
