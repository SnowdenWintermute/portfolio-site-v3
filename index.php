<?php include('inc/header.php') ?>

<section id="landing-section">
<div id="main-center">
    <h1 class="grey">Mike Silverman</h1>

    <div id="skills-holder" class="flex-row">
        <div id="skill-html">
        <h2 class="grey">&lt</h2><h2 class="red">HTML<h2 class="grey">&gt&nbsp&nbsp</h2>
        </div>
        <div id="skill-css">
            <h2 class="red">CSS</h2><h2 class="grey">{ scss:</h2> <h2 class="orange">sassy</h2><h2 class="grey">; }&nbsp&nbsp</h2>
        </div>
        <div id="skill-js">
            <h2 class="purple">let </h2><h2 class="grey">javaScript</h2><h2 class="linkBlue"> = </h2><h2 class="orange">true</h2><h2 class="grey">;</h2>
        </div>
    </div>

    <div id="landing-page-buttons" class="flex-row">
        <a class="button landing-page-button" id="about-button">About</a>
        <a class="button landing-page-button" id="projects-button">Projects</a>
    </div>
</div>
</section>

<section id="projects-section">
    <hr>
    <header>
        <h1 class="grey">PROJECTS</h1>
    </header>

    <div id="projects-holder">
        <div id="project1" class="project">
            <div class="project-img-holder">
                <img class="img-desktop" src="./img/vertices-monitor.png" alt="">
                <img class="img-mobile" id="vertices-mobile" src="./img/vertices-phone-generic.png" alt="">
            </div>
            <div class="project-text">
                <h2 class="red"><a class="project-link" href="https://mike-silverman.com/vertices" target="_blank">Vertices</a></h2>
                <p class="green">Webpage for the Vertices group, an online collective of artists.</p>
                <p class="grey">/* HTML, SCSS, Vanilla JS */</p>
                <br>
                <p class="grey">/* A website I built for an online group of artists. The team leader gave me a mock up which I converted into a webpage. I met with the leader online daily to discuss the progress and to get feedback. */</p>
                <br>
                <a class="button small-button" href="https://mike-silverman.com/vertices" target="_blank">Visit&nbsp<i class="fa fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
        <div id="project1" class="project">
            <div class="project-img-holder">
                <img class="img-desktop" src="./img/weather-monitor.png" alt="">
                <img class="img-mobile" id="weather-mobile" src="./img/weather-phone-generic.png" alt="">
            </div>
            <div class="project-text">
                <h2 class="red"><a class="project-link" href="https://mike-silverman.com/weatherofthefuture" target="_blank">Weather of the Future</a></h2>
                <p class="green">Get the weather for your location using the <a href="https://openweathermap.org/" target="_blank">openweathermap</a> API.</p>
                <p class="grey">/* HTML, CSS, Vanilla JS */</p>
                <br>
                <p class="grey">/* This was a coding challenge to make a singe page site to display weather data from an API. I used JavaScript to make the AJAX call, decide which data to display, and create and delete elements. */</p>
                <br>
                <a class="button small-button" href="https://mike-silverman.com/weatherofthefuture" target="_blank">Visit&nbsp<i class="fa fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
        <div id="project1" class="project">
            <div class="project-img-holder">
                <img class="img-desktop" src="./img/art-monitor.png" alt="">
                <img class="img-mobile" id="art-mobile" src="./img/art-phone-generic.png" alt="">
            </div>
            <div class="project-text">
                <h2 class="red"><a class="project-link" href="https://mcguffsilverman.com/" target="_blank">McGuff-Silverman.com</a></h2>
                <p class="green">A portfolio website for my mom's professional artworks.</p>
                <p class="grey">/* HTML, CSS, Vanilla JS */</p>
                <br>
                <p class="grey">/* My mom's old website was from the early 2000's. I designed and created a new site with a more modern feel. This site features a fading image slideshow on the cover, as well as a full screen gallery viewer with captions. */</p>
                <br>
                <a class="button small-button" href="https://mcguffsilverman.com/" target="_blank">Visit&nbsp<i class="fa fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
        <div id="project1" class="project">
            <div class="project-img-holder">
                <img class="img-desktop" src="./img/rpg-monitor.png" alt="">
                <img class="img-mobile" id="rpg-mobile" src="./img/rpg-crt.png" alt="">
            </div>
            <div class="project-text">
                <h2 class="red"><a class="project-link" href="https://mike-silverman.com/reactRpg.html" target="_blank">React RPG</a></h2>
                <p class="green">Explore the dungeon and collect loot in this clicker-style role playing game.</p>
                <p class="grey">/* HTML, CSS, React.js */</p>
                <br>
                <p class="grey">/* Learning React was an opportunity to bring to life a pen-and-paper game I had designed earlier. I used CSS grid to align the elements, and JavaScript to create the battle system. The game feartures three playable characters, each with three unique abilities. There is also a slideshow with gameplay instructions. */</p>
                <br>
                <a class="button small-button" href="https://mike-silverman.com/reactRpg.html" target="_blank">Visit&nbsp<i class="fa fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section id="about-section">
<hr>
    <header>
        <h1 class="grey">ABOUT</h1>
    </header>

    <img id="wordcloud" src="./img/wordcloud6.png" alt="">

    <div id="profile-holder">
        <img src="./img/mike-profile.png" alt="">
        <div id="profile-text">
            <h1 class="red">Hello world!</h1>
            <p class="grey">I am a self-taught web developer. I started my learning on May 7th, 2018. Most days I put at least three hours towards developing my skillset.</p>
            <br>
            <p class="grey">Although I did not go to school for computer science, computers have been a passion of mine since childhood. My love of technology has neccesitated an ability to systematically resolve issues in a logical manner. I enjoy figuring out why something doesn't work and fixing it.</p>
            <br>
            <p class="grey">My previous career was in the non-profit sector working with various groups in an outdoor setting. While this career was not focused on technology, the experience was relevant in the areas of customer interactions and team dynamics.</p>
            <div id="social-links">
                <a href="https://www.linkedin.com/in/michael-silverman-8a854610/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/SnowdenWintermute" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.instagram.com/michaelpsilverman/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div id="contact">
        <div id="contact-form-holder">
            <h1 class="green">Get in touch</h1>
            <form action="contact-submit.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" name="name" type="text" placeholder="Name..." required>
                <label for="email">Email address:</label>
                <input type="text" name="email" type="email" placeholder="Email..." required>
                <label for="name">Name:</label>
                <textarea type="text" name="message" placeholder="Message..."></textarea>
                <button class="button" name="submit" type="submit">Send</button>
            </form>
        </div>
    </div>
</section>

<?php include('inc/footer.php') ?>