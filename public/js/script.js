const timeMenu = document.querySelector('#timeMenu');
const timeButton = document.querySelector('#timeBtn');

const menu = document.querySelector('#menu');
const menuButton = document.querySelector('#menuBtn');

const contactMenu = document.querySelector('#contactMenu');
const contactButton = document.querySelector('#contactBtn');

document.querySelector('#timeBtn').onclick = (e) => {
    timeMenu.classList.toggle('active');
    timeButton.classList.toggle('active');
    e.preventDefault();
};

document.querySelector('#contactBtn').onclick = (e) => {
    contactMenu.classList.toggle('active');
    contactButton.classList.toggle('active');
    e.preventDefault();
};

document.querySelector('#menuBtn').onclick = (e) => {
    menu.classList.toggle('active');
    e.preventDefault();
};


document.addEventListener('click', function(e) {
    if(!timeButton.contains(e.target) && !timeMenu.contains(e.target)) {
        timeMenu.classList.remove('active');
        timeButton.classList.remove('active');
    }
    if(!contactButton.contains(e.target) && !contactMenu.contains(e.target)) {
        contactMenu.classList.remove('active');
        contactButton.classList.remove('active');
    }
    if(!menuButton.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.remove('active')
    }
});

const carousel = document.querySelector('.carouselX');
const arrowBtns = document.querySelectorAll('.wrapper i');
const firstCardWidth = carousel.querySelector('.card').offsetWidth;

arrowBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        carousel.scrollLeft += btn.id === 'left' ? -firstCardWidth : firstCardWidth;
        // console.log(btn.id);
    });
});
