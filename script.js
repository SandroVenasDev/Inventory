
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



  // Quando o checkbox do cabeçalho é clicado
  document.getElementById('selectAll').addEventListener('change', function () {
    const isChecked = this.checked;

    // Seleciona todas as checkboxes dos itens (ignorando a do cabeçalho)
    const checkboxes = document.querySelectorAll('.items .form-check-input:not(#selectAll)');
    
    checkboxes.forEach(function (checkbox) {
      checkbox.checked = isChecked;
    });
  });

