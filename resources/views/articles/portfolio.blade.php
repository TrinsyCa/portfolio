    <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Browser game</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Game development</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web Basics</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Github</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

              <li class="select-item">
                <button data-select-item>Browser game</button>
              </li>

              <li class="select-item">
                <button data-select-item>Game development</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web Basics</button>
              </li>

              <li class="select-item">
                <button data-select-item>Github</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="browser game">
              <a href="https://benkimim.trinsy.ca" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/ben-kimim.webp') }}" alt="Ben Kimim?" loading="lazy">
                  <img src="{{ asset('assets/project-cover/ben-kimim.webp') }}" alt="Ben Kimim?" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Ben Kimim? <g><svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none" stroke="hsla(0, 0%, 84%, 0.7)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="16" stroke-dashoffset="16" d="M12 3c4.97 0 9 4.03 9 9"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="16;0"/><animateTransform attributeName="transform" dur="1.5s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path><path stroke-dasharray="64" stroke-dashoffset="64" stroke-opacity="0.3" d="M12 3c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9c0 -4.97 4.03 -9 9 -9Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="1.2s" values="64;0"/></path></g></svg>&nbsp2Not Ready</g></h3>

                <p class="project-category">Browser game</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://greenpeacehotelalanya.com" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/green-peace-hotel.webp') }}" alt="Green Peace Hotel" loading="lazy">
                  <img src="{{ asset('assets/project-cover/green-peace-hotel.webp') }}" alt="Green Peace Hotel" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Green Peace Hotel</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://greenpeacehotelalanya.com" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/bist-bilisim.webp') }}" alt="Bist Bilişim" loading="lazy">
                  <img src="{{ asset('assets/project-cover/bist-bilisim.webp') }}" alt="Bist Bilişim" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Bist Bilişim</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://cooltravelistanbul.com" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/cool-travel-istanbul.webp') }}" alt="Cool Travel Istanbul" loading="lazy">
                  <img src="{{ asset('assets/project-cover/cool-travel-istanbul.webp') }}" alt="Cool Travel Istanbul" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Cool Travel Istanbul</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://taxi.trinsy.ca" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/taxi-system.webp') }}" alt="Taxi Booking System" loading="lazy">
                  <img src="{{ asset('assets/project-cover/taxi-system.webp') }}" alt="Taxi Booking System" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Taxi Booking System</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://felizbeautyland.com" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/feliz-beautyland.webp') }}" alt="Feliz Beautyland" loading="lazy">
                  <img src="{{ asset('assets/project-cover/feliz-beautyland.webp') }}" alt="Feliz Beautyland" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Feliz Beautyland</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://products.cooltravelistanbul.com" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/cool-travel-istanbul-products.webp') }}" alt="Cool Travel Istanbul Products" loading="lazy">
                  <img src="{{ asset('assets/project-cover/cool-travel-istanbul-products.webp') }}" alt="Cool Travel Istanbul Products" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Cool Travel Istanbul Products</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://istanbulcitytours.us/" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/istanbul-city-tours.webp') }}" alt="Istanbul City Tours" loading="lazy">
                  <img src="{{ asset('assets/project-cover/istanbul-city-tours.webp') }}" alt="Istanbul City Tours" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Istanbul City Tours</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://project.trinsy.ca/SpayAI" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/spayai.webp') }}" alt="SpayAI" loading="lazy">
                  <img src="{{ asset('assets/project-cover/spayai.webp') }}" alt="SpayAI" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">SpayAI</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://project.trinsy.ca/HealthCare/v2/" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/healthcare.webp') }}" alt="HealthCare" loading="lazy">
                  <img src="{{ asset('assets/project-cover/healthcare.webp') }}" alt="HealthCare" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">HealthCare</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://sevalsirakaya.com" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/seval-sirakaya.webp') }}" alt="Seval Sırakaya" loading="lazy">
                  <img src="{{ asset('assets/project-cover/seval-sirakaya.webp') }}" alt="Seval Sırakaya" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Seval Sırakaya</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://sevalsirakaya.com" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/bevella-makrome.webp') }}" alt="Bevella Makrome" loading="lazy">
                  <img src="{{ asset('assets/project-cover/bevella-makrome.webp') }}" alt="Bevella Makrome" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Bevella Makrome</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://tour.cooltravelistanbul.com/905301267153" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/whatsapp-linker.webp') }}" alt="WhatsApp Linker" loading="lazy">
                  <img src="{{ asset('assets/project-cover/whatsapp-linker.webp') }}" alt="WhatsApp Linker" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">WhatsApp Linker</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://age.trinsy.ca/" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/age-counter.webp') }}" alt="Age Counter" loading="lazy">
                  <img src="{{ asset('assets/project-cover/age-counter.webp') }}" alt="Age Counter" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Age Counter</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="game development">
              <a href="https://trinsyca.itch.io/jumpercube" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/jumper-cube.webp') }}" alt="Jumper Cube" loading="lazy">
                  <img src="{{ asset('assets/project-cover/jumper-cube.webp') }}" alt="Jumper Cube" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Jumper Cube</h3>

                <p class="project-category">Game development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web basics">
              <a href="https://todo.trinsy.ca" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/trinsytodo.webp') }}" alt="TrinsyTodo" loading="lazy">
                  <img src="{{ asset('assets/project-cover/trinsytodo.webp') }}" alt="TrinsyTodo" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">TrinsyTodo</h3>

                <p class="project-category">Web Basics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web basics">
              <a href="https://blog.trinsyca.com" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/trinsyblog.webp') }}" alt="TrinsyBlog" loading="lazy">
                  <img src="{{ asset('assets/project-cover/trinsyblog.webp') }}" alt="TrinsyBlog" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">TrinsyBlog</h3>

                <p class="project-category">Web Basics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web basics">
              <a href="https://file.trinsy.ca" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/file-bridge.webp') }}" alt="File Bridge" loading="lazy">
                  <img src="{{ asset('assets/project-cover/file-bridge.webp') }}" alt="File Bridge" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">File Bridge</h3>

                <p class="project-category">Web Basics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web basics">
              <a href="https://project.trinsy.ca/Doviz/" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/currency-converter.webp') }}" alt="Currency Converter" loading="lazy">
                  <img src="{{ asset('assets/project-cover/currency-converter.webp') }}" alt="Currency Converter" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Currency Converter</h3>

                <p class="project-category">Web Basics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web basics">
              <a href="https://project.trinsy.ca/Doviz/" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/calculator.webp') }}" alt="Calculator" loading="lazy">
                  <img src="{{ asset('assets/project-cover/calculator.webp') }}" alt="Calculator" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Calculator</h3>

                <p class="project-category">Web Basics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web basics">
              <a href="https://project.trinsy.ca/Polis-vs-Taksi/" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/police-vs-taxi.webp') }}" alt="Police vs Taxi" loading="lazy">
                  <img src="{{ asset('assets/project-cover/police-vs-taxi.webp') }}" alt="Police vs Taxi" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Police vs Taxi</h3>

                <p class="project-category">Web Basics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web basics">
              <a href="https://project.trinsy.ca/Coca-Cola/" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/coca-cola.webp') }}" alt="Coca Cola" loading="lazy">
                  <img src="{{ asset('assets/project-cover/coca-cola.webp') }}" alt="Coca Cola" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Coca Cola</h3>

                <p class="project-category">Web Basics</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="github">
              <a href="https://github.com/TrinsyCa/php-router" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy">
                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">PHP Router</h3>

                <p class="project-category">Github</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="github">
              <a href="https://github.com/TrinsyCa/XAMPP-Router" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy">
                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">XAMPP Router</h3>

                <p class="project-category">Github</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="github">
              <a href="https://github.com/TrinsyCa/Single-Liner" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy">
                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Single Liner</h3>

                <p class="project-category">Github</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="github">
              <a href="https://github.com/Trinsy/Trizola-LegacyVersion" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy">
                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Trizola Legacy Version</h3>

                <p class="project-category">Github</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="github">
              <a href="https://github.com/TrinsyCa/Dynamic-UUID" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy">
                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Dynamic UUID</h3>

                <p class="project-category">Github</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="github">
              <a href="https://github.com/TrinsyCa/google-currency-curl" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy">
                  <img src="{{ asset('assets/project-cover/github.webp') }}" alt="Github" loading="lazy" class="project-bg-cover">
                </figure>

                <h3 class="project-title">Google Currency CURL</h3>

                <p class="project-category">Github</p>

              </a>
            </li>

          </ul>

        </section>

      </article>
