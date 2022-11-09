const tombol = document.querySelector('.tombol');

tombol.addEventListener('click', function(){
    this.classList.toggle('is-active');
});