var body = document.body,
    html = document.documentElement;

var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );

let prevScrollTop
//for the mouse reveal to not dissapear in some cases
let menuFromScroll = false;

window.addEventListener('scroll', function(){
     console.log("height: " + height);
    var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
    if(scrollTop <= prevScrollTop){
        document.getElementById("top-nav").className = "nav-show";
        menuFromScroll = true;
    }else if(scrollTop >= prevScrollTop){
        document.getElementById("top-nav").className = "nav-hidden";
        menuFromScroll = false;        
    }
    prevScrollTop = scrollTop;
    if(height-1115 <= scrollTop){
    document.getElementById("top-button").className = "bottom-link show";
    }else if(height-1115 >= scrollTop){
       document.getElementById("top-button").className = "bottom-link hidden";
    }
});

//various button smooth scrolls

document.getElementById("about-button").addEventListener('click', function(){
    document.getElementById('about-section').scrollIntoView({ 
        block: 'start',
        behavior: 'smooth' 
      });
})
document.getElementById("projects-button").addEventListener('click', function(){
    document.getElementById('projects-section').scrollIntoView({ 
        block: 'start',
        behavior: 'smooth' 
      });
})
document.getElementById("top-button").addEventListener('click', function(){
    document.getElementById('landing-section').scrollIntoView({ 
        block: 'start',
        behavior: 'smooth' 
      });
})
document.getElementById("nav-about-button").addEventListener('click', function(){
    document.getElementById('about-section').scrollIntoView({
        block: 'start',
        behavior: 'smooth'
      });
})
document.getElementById("nav-projects-button").addEventListener('click', function(){
    document.getElementById('projects-section').scrollIntoView({ 
        block: 'start',
        behavior: 'smooth' 
      });
})
document.getElementById("nav-top-button").addEventListener('click', function(){
    document.getElementById('landing-section').scrollIntoView({ 
        block: 'start',
        behavior: 'smooth' 
      });
})

//show top menu on mouse up
    document.onmousemove = handleMouseMove;
    function handleMouseMove(event) {

        event = event || window.event;

        if(event.clientY <= 80){
            menuFromScroll = false;
            document.getElementById("top-nav").className = "nav-show";
        }        
        if(event.clientY > 80 && !menuFromScroll){
            document.getElementById("top-nav").className = "nav-hidden";
        }        
    }