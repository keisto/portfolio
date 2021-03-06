<div class="overlay"></div>
<nav class="sidenav pt-8 -ml-4">
    <div class="relative h-full">
        <img id="flag" src="/images/background/flag.png" class="bg-image -mb-2" width="240px" style="padding-left: 12px; display:none; bottom: 0;" />

        <div id="sun" style="width:216px; top:40px; left: 40px; height: 512px; display: none;
            background:url('/images/background/sun.png')" class="bg-image">
        </div>

        <div class="mobile-nav flex justify-between flex-col">
            <div class="flex-1">
                <section class="mb-8 pl-4">
                    <h5 class="uppercase font-bold mb-4 text-black">Navigation</h5>
                    <ul class="nav">
                        <li>
                            <router-link to="/" exact onclick="toggleNav();">
                                <i class="fas fa-home-heart fa-fw mx-2"></i>Home
                            </router-link>
                        </li>
                        <li>
                            <router-link to="/about" onclick="toggleNav();">
                                <i class="fas fa-clipboard-user fa-fw mx-2"></i>About
                            </router-link>
                        </li>
                        <li>
                            <router-link to="/projects" onclick="toggleNav();">
                                <i class="fas fa-rocket fa-fw mx-2"></i>Projects
                            </router-link>
                        </li>
                        <li>
                            <router-link to="/contact" onclick="toggleNav();">
                                <i class="fas fa-envelope-open-text fa-fw mx-2"></i>Contact
                            </router-link>
                        </li>
                    </ul>
                </section>
                <section class="mb-8 pl-4">
                    <h5 class="uppercase font-bold mb-4 text-black">Social</h5>
                    <ul class="nav">
                        <li>
                            <a target="_blank" href="https://github.com/keisto" onclick="toggleNav();">
                                <i class="fab fa-github fa-fw mx-2" aria-hidden="true"></i>GitHub
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://linkedin.com/in/keisto" onclick="toggleNav();">
                                <i class="fab fa-linkedin fa-fw mx-2"></i>LinkedIn
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.hackerrank.com/profile/keisertony" onclick="toggleNav();">
                                <i class="fab fa-hackerrank fa-fw mx-2"></i>HackerRank
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://leetcode.com/keisto/" onclick="toggleNav();">
                                <i class="fas fa-keyboard fa-fw mx-2"></i>LeetCode
                            </a>
                        </li>
                    </ul>
                </section>
                <section class="mb-8 pl-4">
                    <a class="button" target="_blank" href="/files/Keiser_Tony_Resume.pdf" onclick="toggleNav();">
                        <i class="fas fa-download fa-fw mr-2"></i>Download Resume
                    </a>
                </section>
            </div>

            <div>
                <div class="flex flex-1 flex-col animated fadeInRight mb-4 text-grey-light pl-4">
                    <p>
                        <i class="text-grey-dark fal fa-map-marker-alt fa-fw mr-2"></i> Seattle, Wa 98121
                    </p>
                    <p class="py-2">
                        <i class="text-grey-dark fal fa-mobile fa-fw mr-2"></i>
                        <a href="tel:206-353-3484">206-353-3484</a>
                    </p>
                    <p>
                        <i class="text-grey-dark fal fa-envelope-open-text fa-fw mr-2"></i>
                        <a href="mailto:keisertony@gmail.com">keisertony@gmail.com</a>
                    </p>

                </div>
            </div>
        </div>
    </div>

</nav>
