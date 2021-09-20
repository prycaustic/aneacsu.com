<?php include("include/head.html")?>
    <body>
        <?php include("include/header.html")?>
        <main>
            <section id="about">
                <h2 class="title">about</h2>
                <div class="content">
                    <video class="medium-img" autoplay loop muted playsinline>
                        <source src="/images/breakfast_club04.mp4" type="video/mp4">
                    </video>
                    <br>
                    <br>
                    <p>infosec / idk what i'm doing</p>
                </div>
            </section>
            <section id="social">
                <h2 class="title">social</h2>
                <div class="content">
                    <ul class="link-list">
                        <li><a href="https://github.com/prycaustic">github</a></li>
                        <li><a href="https://www.goodreads.com/aneacsu">goodreads</a></li>
                        <li><a href="https://letterboxd.com/prycaustic/">letterboxd</a></li>
                        <li><a href="https://www.last.fm/user/prycaustic">last.fm</a></li>
                    </ul>
                </div>
            </section>
            <section id="projects">
                <h2 class="title">projects</h2>
                <div class="content">
                    <ul class="link-list">
                        <li>
                            <h2 class="content-h2"><a href="https://github.com/prycaustic/aneacsu.com">aneacsu.com</a></h2>
                            <p>Github repo for this site, self hosted on a Raspberry Pi.</p>
                            <br>
                        </li>
                        <li>
                            <h2 class="content-h2"><a href="https://github.com/prycaustic/b1pod">b1pod</a></h2>
                            <p>Another Discord bot with some goofy stuff.</p>
                            <br>
                        </li>
                        <li>
                            <h2 class="content-h2"><a href="https://github.com/prycaustic/bent-bot">bent-bot</a></h2>
                            <p>First time messing around with Discord bots.</p>
                            <br>
                        </li>
                        <li>
                            <h2 class="content-h2"><a href="https://prycaustic.github.io/todolist/">todolist</a></h2>
                            <p>Wanted to learn JavaScript so I made this. Then I realized I hate JavaScript.</p>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.html") ?>
    </body>
</html> 