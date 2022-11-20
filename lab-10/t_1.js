const loaderContainer = document.querySelector('.loader-container');
let btn = document.querySelector('.refresh');

const timer = () => {
    console.log("timer is called");
    setTimeout(() => {
        
        loaderContainer.style.display = 'none';    
    }, 1000);
    
}

btn.addEventListener('click', () => {
    window.location.reload();
})


window.addEventListener('load', timer );




