document.querySelector('.fa-bars').addEventListener('click', () => {
    document.querySelector('.sidebar').classList.toggle('active');
});

document.querySelector('.fa-x').addEventListener('click', () => {
    document.querySelector('.sidebar').classList.remove('active');
});
