<?php guest() ?>
<header>
    <nav>
        <a class="navbarcol" href="/">Home</a>
        <a class="navbarcol" href="/register">Register</a>
        <a class="navbarcol" href="/login">Login</a>
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