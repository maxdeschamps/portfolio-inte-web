// AOS
AOS.init();

// SWIPER
const swiper = new Swiper('.swiper-container', {
  slidesPerView: 2,
  spaceBetween: 30,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

function testSizeEvent() {
  if (window.innerWidth < 768) {
    swiper.params.slidesPerView = 1;
  } else {
    swiper.params.slidesPerView = 2;
  }
  swiper.update();
}

testSizeEvent();
window.addEventListener('resize', testSizeEvent);

// NAVBAR
const navMenu = document.getElementById('menu');

if (navMenu) {
  if (document.getElementsByTagName('BODY')[0].classList.contains('home')) {
    function testScrollEvent() {
      if (window.scrollY >= 30) {
        navMenu.classList.add('scrolled');
      } else {
        navMenu.classList.remove('scrolled');
      }
    }

    window.addEventListener('load', testScrollEvent);
    window.addEventListener('scroll', testScrollEvent);
  } else {
    navMenu.classList.add('scrolled');
  }

  const buttonBurger = document.getElementsByClassName('burger-menu');

  if (buttonBurger) {
    buttonBurger[0].addEventListener('click', function(event) {
      buttonBurger[0].classList.toggle('active');
      navMenu.classList.toggle('desktop');
    })
  }

  window.addEventListener('resize', function() {
    buttonBurger[0].classList.remove('active');
    navMenu.classList.add('desktop');
  })
}

// REECRITURE DES URLS D'ANCRE SUR LA HOMEPAGE
if (document.getElementsByTagName('BODY')[0].classList.contains('home')) {
  const menuItems = document.getElementsByClassName('menu-item');

  for (let i=0; i<menuItems.length; i++) {
    if (menuItems[i].classList.contains('classic')) {
      menuItems[i].children[0].href = "#" + menuItems[i].children[0].href.split('#').pop();
    }
  }
}

// FORM
const formInputs = document.getElementsByClassName('input');

for (let i=0; i<formInputs.length; i++) {
  formInputs[i].addEventListener('change', function(e) {
    if (e.target.value !== "") {
      e.target.labels[0].classList.add('focus');
    } else {
      e.target.labels[0].classList.remove('focus');
    }
  })

  formInputs[i].addEventListener('focus', function(e) {
    e.target.labels[0].classList.add('focus');
  })

  formInputs[i].addEventListener('focusout', function(e) {
    if (e.target.value === "") {
      e.target.labels[0].classList.remove('focus');
    }
  })
}

// MAILTO
const linksMailto = document.getElementsByClassName('mailto');

for (let i=0; i<linksMailto.length; i++) {
  linksMailto[i].addEventListener('click', function(event) {
    const name = event.target.dataset.name ?? 'maxence.deschamps';
    const domain = event.target.dataset.domain ?? 'ynov.com';

    window.location.href = `mailto:${name}@${domain}`;
  })
}
