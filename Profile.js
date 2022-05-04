const btn = document.getElementById('form-btn');

btn.addEventListener('click', () => {
  const form = document.getElementById('profile-edit');

  if (form.style.display === 'none') {
    // 👇️ this SHOWS the form
    form.style.display = 'block';
  } else {
    // 👇️ this HIDES the form
    form.style.display = 'none';
  }
});