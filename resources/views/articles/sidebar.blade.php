<!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/omer-islamoglu.webp" alt="Ömer İslamoğlu" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Ömer İslamoğlu">Ömer İslamoğlu</h1>

          <p class="title">~&nbsp;&nbsp;&nbsp; TrinsyCa &nbsp;&nbsp;&nbsp;~</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item" role="button" onclick="this.querySelector('.contact-link').click()">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:omer@trinsyca.com" class="contact-link">omer@trinsyca.com</a>
            </div>

          </li>

          <li class="contact-item" role="button" onclick="this.querySelector('.contact-link').click()">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tg://msg?text=Merhaba&to=+905301267153" class="contact-link">t.me/trinsyca</a>
            </div>

          </li>

          <li class="contact-item" role="button">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="2006-06-18">June 18, 2006</time>
            </div>

          </li>

          <li class="contact-item" role="button">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>İstanbul, Turkey</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://facebook.com/trinsyca" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://x.com/trinsyca" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://instagram.com/trinsyca" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>
