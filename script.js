
  const lightBtn = document.getElementById('lightModeBtn');
  const darkBtn = document.getElementById('darkModeBtn');

  function activateLightMode() {
    document.body.classList.remove('dark-mode');
    lightBtn.classList.add('active');
    darkBtn.classList.remove('active');
  }

  function activateDarkMode() {
    document.body.classList.add('dark-mode');
    darkBtn.classList.add('active');
    lightBtn.classList.remove('active');
  }

  lightBtn.addEventListener('click', activateLightMode);
  darkBtn.addEventListener('click', activateDarkMode);

  // Opcional: ativar conforme o tema inicial do body
  if(document.body.classList.contains('dark-mode')) {
    activateDarkMode();
  } else {
    activateLightMode();
  }
