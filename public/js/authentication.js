document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.querySelector('input[name="password"]');
    const show = document.getElementById('show');
    const hide = document.getElementById('hide');
    const passwordInput2 = document.querySelector('input[name="password2"]');
    const show2 = document.getElementById('show2');
    const hide2 = document.getElementById('hide2');

    show.addEventListener('click', function () {
      passwordInput.setAttribute('type', 'text');
      show.classList.add('hidden');
      hide.classList.remove('hidden');
    });

    hide.addEventListener('click', function () {
      passwordInput.setAttribute('type', 'password');
      hide.classList.add('hidden');
      show.classList.remove('hidden');
    });

    show2.addEventListener('click', function () {
      passwordInput2.setAttribute('type', 'text');
      show2.classList.add('hidden');
      hide2.classList.remove('hidden');
    });

    hide2.addEventListener('click', function () {
      passwordInput2.setAttribute('type', 'password');
      hide2.classList.add('hidden');
      show2.classList.remove('hidden');
    });
  });