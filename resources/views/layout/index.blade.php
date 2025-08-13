<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>SyntaxView — Software & Solutions</title>
  <meta name="description" content="SyntaxView — modern software solutions: web, mobile, cloud, and UX.">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* subtle page-wide accent */
    :root{--accent:theme(color.blue.600)}
    html { scroll-behavior: smooth; }
  </style>
</head>
<body class="antialiased text-slate-800 bg-slate-50">
  <!-- NAV -->
  <header class="sticky top-0 bg-white/80 backdrop-blur z-40 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <a href="#home" class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-md bg-gradient-to-br from-sky-500 to-indigo-600 flex items-center justify-center text-white font-bold">SV</div>
          <span class="font-semibold text-lg">SyntaxView</span>
        </a>

        <nav class="hidden md:flex items-center gap-6 text-sm font-medium">
          <a href="#services" class="nav-link hover:text-sky-600">Services</a>
          <a href="#about" class="nav-link hover:text-sky-600">About</a>
          <a href="#use" class="nav-link hover:text-sky-600">Use Cases</a>
          <a href="#contact" class="nav-link hover:text-sky-600">Contact</a>
          <a href="#" class="ml-4 inline-flex items-center gap-2 px-4 py-2 rounded-md bg-sky-600 text-white">Get a Quote</a>
        </nav>

        <div class="md:hidden">
          <button id="mobile-toggle" aria-label="Toggle menu" class="p-2 rounded-md hover:bg-slate-100">
            <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden border-t bg-white">
      <div class="px-4 py-4 flex flex-col gap-2">
        <a href="#services" class="py-2">Services</a>
        <a href="#about" class="py-2">About</a>
        <a href="#use" class="py-2">Use Cases</a>
        <a href="#contact" class="py-2">Contact</a>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <main id="home">
    <section class="relative overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">Build smarter products with <span class="text-sky-600">SyntaxView</span></h1>
          <p class="mt-6 text-lg text-slate-600">We design and engineer web & mobile applications, cloud platforms, and delightful user experiences that accelerate your business.</p>

          <div class="mt-8 flex gap-4">
            <a href="#contact" class="inline-flex items-center gap-2 px-5 py-3 rounded-md bg-sky-600 text-white font-medium">Start a Project</a>
            <a href="#services" class="inline-flex items-center gap-2 px-5 py-3 rounded-md border border-slate-200">Our Services</a>
          </div>

          <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-4 text-sm text-slate-500">
            <div class="flex flex-col">
              <span class="font-semibold text-slate-700">10+</span>
              <span>Years experience</span>
            </div>
            <div class="flex flex-col">
              <span class="font-semibold text-slate-700">50+</span>
              <span>Projects</span>
            </div>
            <div class="flex flex-col">
              <span class="font-semibold text-slate-700">SaaS</span>
              <span>Product focus</span>
            </div>
            <div class="flex flex-col">
              <span class="font-semibold text-slate-700">Remote</span>
              <span>Global teams</span>
            </div>
          </div>
        </div>

        <div class="order-first lg:order-last">
          <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1558696521-6b2b5d8c3c14?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="product mockup" class="w-full rounded-lg object-cover h-64 sm:h-80">
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold">Services</h2>
        <p class="mt-2 text-slate-600">End-to-end software services to take your idea to market.</p>

        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <article class="p-6 bg-white rounded-2xl shadow">
            <h3 class="font-semibold">Custom Web Apps</h3>
            <p class="mt-2 text-sm text-slate-500">Scalable React, Vue, or Next.js applications with modern APIs.</p>
          </article>

          <article class="p-6 bg-white rounded-2xl shadow">
            <h3 class="font-semibold">Mobile Apps</h3>
            <p class="mt-2 text-sm text-slate-500">iOS & Android apps built with native or cross-platform frameworks.</p>
          </article>

          <article class="p-6 bg-white rounded-2xl shadow">
            <h3 class="font-semibold">Cloud & DevOps</h3>
            <p class="mt-2 text-sm text-slate-500">Infrastructure automation, CI/CD, and cost-optimized cloud systems.</p>
          </article>

          <article class="p-6 bg-white rounded-2xl shadow">
            <h3 class="font-semibold">UX & Product Design</h3>
            <p class="mt-2 text-sm text-slate-500">Product discovery, prototypes, and polished interfaces focused on conversion.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="py-20 bg-white">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold">About SyntaxView</h2>
        <p class="mt-4 text-slate-600">We are a team of engineers, designers, and product thinkers who love turning complex problems into simple, beautiful products. Our process blends research, iterative design, and pragmatic engineering.</p>

        <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-6 text-left">
          <div class="p-6">
            <h4 class="font-semibold">Mission</h4>
            <p class="mt-2 text-sm text-slate-500">Help startups and enterprises ship software faster and with more confidence.</p>
          </div>

          <div class="p-6">
            <h4 class="font-semibold">How we work</h4>
            <p class="mt-2 text-sm text-slate-500">Small cross-functional teams, short feedback loops, and measurable outcomes.</p>
          </div>

          <div class="p-6">
            <h4 class="font-semibold">Values</h4>
            <p class="mt-2 text-sm text-slate-500">Clarity, craftsmanship, and customer empathy guide everything we do.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- USE CASES -->
    <section id="use" class="py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold">Use Cases</h2>
        <p class="mt-2 text-slate-600">Real problems we solve for our clients.</p>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="p-6 bg-white rounded-2xl shadow">
            <h4 class="font-semibold">SaaS Platforms</h4>
            <p class="mt-2 text-sm text-slate-500">From MVP to growth — multi-tenant architecture, billing, and analytics.</p>
          </div>

          <div class="p-6 bg-white rounded-2xl shadow">
            <h4 class="font-semibold">Marketplaces</h4>
            <p class="mt-2 text-sm text-slate-500">Complex workflows, payments, and trust systems for two-sided marketplaces.</p>
          </div>

          <div class="p-6 bg-white rounded-2xl shadow">
            <h4 class="font-semibold">Enterprise Integrations</h4>
            <p class="mt-2 text-sm text-slate-500">Secure integrations, APIs, and data pipelines for mission-critical systems.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="py-20 bg-gradient-to-b from-slate-50 to-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow p-8">
          <h2 class="text-2xl font-bold">Get in touch</h2>
          <p class="mt-2 text-slate-600">Tell us about your project — we'll respond within 1-2 business days.</p>

          <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4" onsubmit="event.preventDefault(); alert('Thanks — form submit simulation.');">
            <input required placeholder="Your name" class="px-4 py-3 border rounded-md" />
            <input required type="email" placeholder="Email" class="px-4 py-3 border rounded-md" />
            <input placeholder="Company (optional)" class="px-4 py-3 border rounded-md sm:col-span-2" />
            <textarea required placeholder="Project details" class="px-4 py-3 border rounded-md sm:col-span-2 h-32"></textarea>
            <button class="sm:col-span-2 inline-flex justify-center items-center py-3 px-6 bg-sky-600 text-white rounded-md">Send message</button>
          </form>

          <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-slate-600">
            <div>
              <h5 class="font-semibold">Office</h5>
              <p class="mt-1">Remote — Worldwide</p>
            </div>
            <div>
              <h5 class="font-semibold">Email</h5>
              <p class="mt-1">hello@syntaxview.example</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer class="border-t bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col md:flex-row items-center justify-between gap-4">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-md bg-gradient-to-br from-sky-500 to-indigo-600 flex items-center justify-center text-white font-bold">SV</div>
        <div>
          <div class="font-semibold">SyntaxView</div>
          <div class="text-sm text-slate-500">Software & Solutions</div>
        </div>
      </div>

      <div class="text-sm text-slate-500">© <span id="year"></span> SyntaxView. All rights reserved.</div>
    </div>
  </footer>

  <script>
    // year
    document.getElementById('year').textContent = new Date().getFullYear();

    // mobile menu toggle
    const toggle = document.getElementById('mobile-toggle');
    const menu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('icon-open');
    const closeIcon = document.getElementById('icon-close');
    toggle?.addEventListener('click', ()=>{
      menu.classList.toggle('hidden');
      openIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });

    // highlight active nav link on scroll
    const links = Array.from(document.querySelectorAll('.nav-link'));
    const sections = links.map(l => document.querySelector(l.getAttribute('href')));

    function onScroll(){
      const y = window.scrollY + 120;
      sections.forEach((sec, i) => {
        if(!sec) return;
        const top = sec.offsetTop;
        const bottom = top + sec.offsetHeight;
        if(y >= top && y < bottom){
          links.forEach(x=>x.classList.remove('text-sky-600'));
          links[i].classList.add('text-sky-600');
        }
      });
    }
    window.addEventListener('scroll', onScroll);
    onScroll();
  </script>
</body>
</html>
