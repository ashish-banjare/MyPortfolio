<template>
    <div>
        <!-- ============== Document Wrapper ================= -->
        <div id="main-wrapper">
            <!-- ===========Header================= -->
            <header id="header" class="sticky-top">
                <!-- Navbar -->
                <nav class="primary-menu navbar navbar-expand-lg bg-dark navbar-text-light border-bottom-0">
                    <div class="container-fluid position-relative h-100 flex-lg-column pl-3 px-lg-3 pt-lg-3 pb-lg-2">

                        <!-- Logo -->
                        <a href="index.html" class="mb-lg-auto mt-lg-4">
                            <span class="bg-dark-2 rounded-pill p-2 mb-lg-1 d-none d-lg-inline-block">
                                <img class="img-fluid rounded-pill d-block" v-bind:src="$page['props'].dev.image" v-bind:title="'I\'m '+$page['props'].dev.name"
                                    alt="">
                            </span>
                            <h1 class="text-5 text-white text-center mb-0 d-lg-block">{{$page['props'].dev.name}}</h1>
                        </a>
                        <!-- Logo End -->

                        <div id="header-nav" class="collapse navbar-collapse w-100 my-lg-auto">
                            <ul class="navbar-nav text-lg-center my-lg-auto py-lg-3">
                                <li class="nav-item"><a class="nav-link smooth-scroll active" href="#home">Home</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About Me</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">What I Do</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#resume">Resume</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#testimonial">Testimonial</a>
                                </li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        <ul class="social-icons social-icons-muted social-icons-sm mt-lg-auto ml-auto ml-lg-0 mb-n1 d-flex">
                            <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/"
                                    target="_blank" title="" data-original-title="Facebook"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/"
                                    target="_blank" title="" data-original-title="Twitter"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-dribbble"><a data-toggle="tooltip" href="http://www.dribbble.com/"
                                    target="_blank" title="" data-original-title="Dribbble"><i
                                        class="fab fa-dribbble"></i></a></li>
                            <li class="social-icons-github"><a data-toggle="tooltip" href="http://www.google.com/"
                                    target="_blank" title="" data-original-title="GitHub"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#header-nav"><span></span><span></span><span></span></button>
                    </div>
                </nav>
                <!-- Navbar End -->
            </header>
            <!-- Header End -->
            
            <!-- =================Content============================ -->
            <div id="content" role="main">
                <slot />
            </div>
            <!-- Content end -->
        </div>
        <!-- ============== Document Wrapper End================= -->
    </div>
</template>

<script>
    export default {
        components: {},
    }
</script>
