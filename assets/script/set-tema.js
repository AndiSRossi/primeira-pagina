
function setTema(tema) {
  const body = document.body;

  if (tema === 'claro') {
    body.style.backgroundImage = 'url("assets/css/img/11272476.jpg")';
    body.style.color = "#000";
  } else {
    body.style.backgroundImage = 'url("assets/css/img/pexels-imvitordiniz-31103723.jpg")';
    body.style.color = "#fff";
  }
  localStorage.setItem('tema', tema);
}


window.addEventListener('DOMContentLoaded', () => {

  const temaSalvo = localStorage.getItem('tema');
  if (temaSalvo) {
    setTema(temaSalvo);
  } else {
    setTema('claro'); 
  }
});


document.querySelectorAll('.dropdown-submenu > a').forEach(function (element) {
  element.addEventListener('click', function (e) {
    e.preventDefault();
    e.stopPropagation();
    const submenu = this.nextElementSibling;
    if (submenu) {
      submenu.classList.toggle('show');
    }

    document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function (el) {
      if (el !== submenu) el.classList.remove('show');
    });
  });
});

window.addEventListener('click', function () {
  document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function (el) {
    el.classList.remove('show');
  });
});