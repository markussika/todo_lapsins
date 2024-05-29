<?php auth() ?>

<header>
    <nav>
        <a class="navbarcol" href="/">Home</a>
        <a class="navbarcol" href="/create">Add a task</a>
        <a class="navbarcol" href="/tasks">Ur tasks</a>
        <a class="navbarcol" href="/logout">logout</a>
        
    </nav>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentUrl = window.location.pathname;
        var navLinks = document.querySelectorAll("nav a");

        navLinks.forEach(function(link) {
            if (link.getAttribute("href") === currentUrl) {
                link.classList.add("current");
            }
        });
    });
</script>