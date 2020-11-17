/*****Section Response **********/

const sections = document.querySelectorAll('section');
const marker = document.querySelector('.marker');

const options = {
    threshold:0.7
};

let observer = new IntersectionObserver(navCheck, options);

function navCheck(entries){
    entries.forEach(entry => {
        const className = entry.target.className;
        const activeAnchor = document.querySelector(`[data-page=${className}]`);
        const coords = activeAnchor.getBoundingClientRect();
        const actScrWid = document.body.getBoundingClientRect().width;

        const directions = {
            height: coords.height,
            width: coords.width,
            top: coords.top,
            left: coords.left
        };

        const perRemove = (((actScrWid*5)/100)/2);
        directions.left = directions.left - perRemove;
        
        if(entry.isIntersecting){
            marker.style.setProperty("left",`${directions.left}px`);
            marker.style.setProperty("top", `${directions.top}px`);
            marker.style.setProperty("width", `${directions.width}px`);
            marker.style.setProperty("height", `${directions.height}px`);
        }
    });
}

sections.forEach(section => {
    observer.observe(section);    
});

// this is used for sliding panel
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('popup');

signUpButton.addEventListener('click', () => {
  container.classList.add('right-panel-active');
});

signInButton.addEventListener('click', () => {
  container.classList.remove('right-panel-active');
});

// this toggles the blur effect
function toggle(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');
  
  var popup = document.getElementById('popup');
  popup.classList.toggle('active');
}