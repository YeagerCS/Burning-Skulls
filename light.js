const lightbox = document.createElement('div'); //create lightbox
lightbox.id = 'lightbox'; 
document.body.appendChild(lightbox); 

const images = document.querySelectorAll('img'); //select all images
for(let image of images){ 
    image.addEventListener('click', function(event) {
    lightbox.classList.add('activated');
    const img = document.createElement('img');
    img.src = image.src; //create new image equal to the src
    if (lightbox.firstChild) {
      lightbox.removeChild(lightbox.firstChild);  
    }
    lightbox.appendChild(img);
  })
};

lightbox.addEventListener('click', function(event) {
  lightbox.classList.remove('activated'); 
})  