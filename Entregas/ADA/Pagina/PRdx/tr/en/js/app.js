  const againButton = document.querySelector('.again');
  const goodButton = document.querySelector('.good');
  const easyButton = document.querySelector('.easy');
  const easyButton = document.querySelector('.points');

  function againButton(){
    var points = againButton
    points = points + 20
    againButton.textContent = $(points)
}

  function goodButton(){
    var points = againButton
    points = points - 20
    goodButton.textContent = $(points)

}

  function easyButton(){
    var points = againButton
    points = points - 50
    easyButton.textContent = $(points)

}

  againButton.addEventListener('click', function() {
    function againButton()


  });

  goodButton.addEventListener('click', function() {
    function goodButton()


  });

  easyButton.addEventListener('click', function() {
    function easyButton()
    

  });