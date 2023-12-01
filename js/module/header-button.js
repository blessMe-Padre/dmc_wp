const initHeaderButton = () => {
    const headerBtn = document.querySelector('.header-call-button')
    const headerModalMenu = document.querySelector('.modal')

    headerBtn.addEventListener('click', () => {
        headerBtn.classList.toggle('active')
        headerModalMenu.style.display = 'block'
    })

    window.addEventListener('click', function(event) {
        if (event.target == modal) {
          modal.style.display = 'none';
        }})
}