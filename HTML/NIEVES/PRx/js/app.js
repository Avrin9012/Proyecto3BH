  const againButton = document.querySelector('.again');
  const goodButton = document.querySelector('.good');
  const easyButton = document.querySelector('.easy');
  const easyButton = document.querySelector('.points');

  againButton.addEventListener('click', function() {
      var points = againButton
      points = points + 20
      againButton.textContent = $(points)
  });

  goodButton.addEventListener('click', function() {
      var points = againButton
      points = points - 20
      goodButton.textContent = $(points)

  });

  easyButton.addEventListener('click', function() {
      var points = againButton
      points = points - 50
      easyButton.textContent = $(points)
  });