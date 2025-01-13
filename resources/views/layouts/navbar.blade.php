<div class="parent">
    <nav class="nav"
        style="z-index: 9999; position: relative;top: 4px;width: 99%;background-color: #fff;border-radius:24px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; height: 12vh;">

        <div class="brand">
            <div class="container">
                <img src="assets/logo.png" alt="logo">
                Travelo
            </div>
            <div class="toggle" onclick="toggleNav()">
                <span id="hamburger" class="hamburger">☰</span>
                <span id="close" class="close" style="display: none;">&times;</span>
            </div>
        </div>
        <ul id="navList" class="nav-list">
            <li><a href="#hero">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#recommended">Apropos</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
        </ul>
        {{-- <button >Connect</button> --}}
        <button class="sparkle-button">
            <span>Connect</span>
          </button>
        
    </nav>
    <div id="responsiveNav" class="responsive-nav">
        <ul>
            <li><a href="#hero" onclick="closeNav()">Home</a></li>
            <li><a href="#services" onclick="closeNav()">Services</a></li>
            <li><a href="#recommended" onclick="closeNav()">Recommended</a></li>
            <li><a href="#testimonials" onclick="closeNav()">Testimonials</a></li>
        </ul>
    </div>
</div>

<script>
    let navState = false;

    function toggleNav() {
        navState = !navState;
        const responsiveNav = document.getElementById('responsiveNav');
        const hamburger = document.getElementById('hamburger');
        const close = document.getElementById('close');

        if (navState) {
            responsiveNav.style.top = '50px';
            hamburger.style.display = 'none';
            close.style.display = 'block';
        } else {
            responsiveNav.style.top = '-500px';
            hamburger.style.display = 'block';
            close.style.display = 'none';
        }
    }

    function closeNav() {
        navState = false;
        const responsiveNav = document.getElementById('responsiveNav');
        const hamburger = document.getElementById('hamburger');
        const close = document.getElementById('close');

        responsiveNav.style.top = '-500px';
        hamburger.style.display = 'block';
        close.style.display = 'none';
    }
</script>
