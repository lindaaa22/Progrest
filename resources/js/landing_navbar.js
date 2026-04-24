const btn = document.getElementById('menu-btn');
const menu = document.getElementById('mobile-menu');

let open = false;

btn.addEventListener('click', () => {
    open = !open;

    if (open) {
        menu.classList.remove('max-h-0');
        menu.classList.add('max-h-40'); // adjust height if needed
    } else {
        menu.classList.remove('max-h-40');
        menu.classList.add('max-h-0');
    }
}); 

document.getElementById('scroll-features').addEventListener('click', () => {
    const section = document.getElementById('features'); 
    
    const yOffset = -50; 
    const y = section.getBoundingClientRect().top + window.pageYOffset + yOffset; 
    
    window.scrollTo({
        top: y, 
        behavior: 'smooth'
    }); 
})
