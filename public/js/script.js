document.querySelectorAll('nav-link').forEach(element => {
    addEventListener('click', () => {
        document.querySelectorAll('.nav-link').forEach( element => {
            element.classList.remove('active');
        });
        element.classList.add('active');
    })
});