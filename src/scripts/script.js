document.addEventListener('DOMContentLoaded', ()=>{
  const navMobileButton = document.querySelector('.main-header__nav-mobile');
  const navItems = document.querySelector('.main-header__nav-bar_items');
  let flag = true;
  navMobileButton.addEventListener('click', ()=>{
    if (flag){
      navMobileButton.firstElementChild.src = 'src/img/icons/menu-arrow.svg';
      navItems.style.transform = 'translate(-200px, 0px)';
      flag = false;
    }else{
      navMobileButton.firstElementChild.src = 'src/img/icons/menu-mobile.svg';
      navItems.style.transform = 'translate(300px, 0px)';
      flag = true;
    }
  });
  const anchors = document.querySelectorAll('a[href*="#"]')
  for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
    e.preventDefault()
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'nearest'
      })
    })
  }
});
