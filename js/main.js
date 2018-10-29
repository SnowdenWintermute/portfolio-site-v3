var body = document.body,
    html = document.documentElement;

var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );

 window.addEventListener('scroll', function(){
     console.log("height: " + height);
    var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
     console.log(scrollTop);
     if(height-1115 <= scrollTop){
     console.log(window.pageYOffset + "yo");
     document.getElementById("top-button").className = "bottom-link show";
     }else if(height-1115 >= scrollTop){
        document.getElementById("top-button").className = "bottom-link hidden";
        console.log("send it back");
     }
 });

document.getElementById("about-button").addEventListener('click', function(){
    document.getElementById('about-section').scrollIntoView({ 
        behavior: 'smooth' 
      });
})
document.getElementById("projects-button").addEventListener('click', function(){
    document.getElementById('projects-section').scrollIntoView({ 
        behavior: 'smooth' 
      });
})
document.getElementById("top-button").addEventListener('click', function(){
    document.getElementById('landing-section').scrollIntoView({ 
        behavior: 'smooth' 
      });
})