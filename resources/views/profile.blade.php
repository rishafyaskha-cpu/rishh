<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rishafy_studios</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
</head>
<body>
<nav class="navbar">
    <div class="logo"><strong>rishafy_studios</strong></div>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <br><br>

<section id="home" class="hero">
    <div class="hero-content">
      <span class="sub-title">Hi, My name is ...</span>
      <h1 class="hero-title">Rishafy Askha <br> <span>Septama</span></h1>
      
      <p class="hero-desc">
         A passionate Software Engineer and Video Editor specialized in building responsive web applications with PHP & Laravel, alongside creating engaging visual content for digital platforms.
      </p>

      <div class="hero-button">
        <a href="#contact" class="btn-primary">Let's Talk <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

    <div class="ghostty" data-ghostty-terminal data-columns="100" data-rows="40" data-title="Hello Nigga!" data-src="{{ asset('ghostty/frames.json.gz') }}" role="img" aria-label="Animasi ASCII hantu">
      <div class="ghostty__window">
        <div class="ghostty__bar">
          <ul class="ghostty__lights">
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <div class="ghostty__title" data-ghostty-title></div>
        </div>
        <div class="ghostty__screen" data-ghostty-screen aria-hidden="true"></div>
      </div>
    </div>
  </section>

  <!-- ABOUT ME SECTION -->
<section id="about" class="about-section">
  <div class="about-header">
    <span class="sub-title">GET TO KNOW ME</span>
    <h2>About Me</h2>
  </div>

  <div class="about-card">
    <div class="about-text">
      <p>
        I am a software engineer based in Yogyakarta, Indonesia. I have a strong interest in building responsive, well-structured, and efficient web applications using the PHP and Laravel ecosystem.
      </p>
      <p>
        Beyond web development, I also actively explore mobile app development, game development, and visual content creation—including video editing. I believe that combining solid programming logic with strong visual aesthetics is the key to creating exceptional digital products.
      </p>
    </div>

    <!-- Poin Ringkas / Highlights -->
    <div class="about-highlights">
      <div class="highlight-item">
        <i class="fa-solid fa-code"></i>
        <div>
          <h4>Clean Code & Structure</h4>
          <p>Terbiasa menulis kode yang rapi dan mudah dirawat.</p>
        </div>
      </div>
      <div class="highlight-item">
        <i class="fa-solid fa-wand-magic-sparkles"></i>
        <div>
          <h4>Creative & Visual Focus</h4>
          <p>Memperhatikan detail antarmuka dan pengalaman pengguna.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS SECTION -->
<section id="skills" class="skills-section">
  <div class="skills-header">
    <span class="sub-title">MY TOOLBOX</span>
    <h2>Skills & Technologies</h2>
  </div>

  <div class="skills-grid">
    
    <!-- HTML5 -->
    <div class="skill-card">
      <i class="devicon-html5-plain colored"></i>
      <span>HTML5</span>
    </div>

    <!-- CSS3 -->
    <div class="skill-card">
      <i class="devicon-css3-plain colored"></i>
      <span>CSS3</span>
    </div>

    <!-- PHP -->
    <div class="skill-card">
      <i class="devicon-php-plain colored"></i>
      <span>PHP</span>
    </div>

    <!-- Laravel -->
    <div class="skill-card">
      <i class="devicon-laravel-plain colored"></i>
      <span>Laravel</span>
    </div>

    <!-- Python -->
    <div class="skill-card">
      <i class="devicon-python-plain colored"></i>
      <span>Python</span>
    </div>

    <!-- C# -->
    <div class="skill-card">
      <i class="devicon-csharp-plain colored"></i>
      <span>C#</span>
    </div>

    <!-- ReactJS -->
    <div class="skill-card">
      <i class="devicon-react-original colored"></i>
      <span>React JS</span>
    </div>

    <!-- VS Code -->
    <div class="skill-card">
      <i class="devicon-vscode-plain colored"></i>
      <span>VS Code</span>
    </div>

    <!-- Figma -->
    <div class="skill-card">
      <i class="devicon-figma-plain colored"></i>
      <span>Figma</span>
    </div>

    <!-- Canva -->
    <div class="skill-card">
      <i class="devicon-canva-plain colored"></i>
      <span>Canva</span>
    </div>

    <!-- Premiere Pro -->
    <div class="skill-card">
      <i class="devicon-premierepro-plain colored"></i>
      <span>Premiere Pro</span>
    </div>

    <!-- After Effects -->
    <div class="skill-card">
      <i class="devicon-aftereffects-plain colored"></i>
      <span>After Effects</span>
    </div>

    <!-- DaVinci Resolve -->
    <div class="skill-card">
      <img src="https://cdn.simpleicons.org/davinciresolve/000000" alt="DaVinci">
      <span>DaVinci</span>
    </div>

    <!-- CapCut -->
    <div class="skill-card">
      <i class="devicon-capcut-plain colored"></i>
      <span>CapCut</span>
    </div>

    <!-- Antigravity IDE / Custom Tool -->
    <div class="skill-card">
      <i class="fa-solid fa-code" style="color: #00ff88;"></i>
      <span>Antigravity</span>
    </div>

    <!-- Arduino -->
    <div class="skill-card">
      <i class="devicon-arduino-plain colored"></i>
      <span>Arduino</span>
    </div>

    <!--Opencode-->
    <div class="skill-card">
      <img src="https://cdn.simpleicons.org/opencode/000000" alt="Opencode">
      <span>Opencode</span>
    </div>

    <!-- Git & GitHub -->
    <div class="skill-card">
      <i class="devicon-git-plain colored"></i>
      <span>Git</span>
    </div>
    <div class="skill-card">
      <i class="devicon-github-plain colored"></i>
      <span>GitHub</span>
    </div>

    <!-- Terminal/Shell Proficiency -->
    <div class="skill-card">
      <i class="fa-solid fa-terminal" style="color: #5fc2b3;"></i>
      <span>Terminal</span>
    </div>

    <!-- Flutter -->
    <div class="skill-card">
      <i class="devicon-flutter-plain colored"></i>
      <span>Flutter</span>
    </div>

    <!-- Firebase -->
    <div class="skill-card">
      <i class="devicon-firebase-plain colored"></i>
      <span>Firebase</span>
    </div>

    <!--Ollama-->
    <div class="skill-card">
      <img src="https://cdn.simpleicons.org/ollama/000000" alt="Ollama">
      <span>Ollama</span>
    </div>

    <!--dll-->
    <div class="skill-card">
      <i class="fa-solid fa-ellipsis" style="color: #5fc2b3;"></i>
      <span>dll</span>
    </div>

  </div>
</section>




<!-- CONTACT SECTION -->
<section id="contact" class="contact-section">
  <div class="contact-header">
    <span class="sub-title">GET IN TOUCH</span>
    <h2>Let's Work Together</h2>
    <p>Punya proyek menarik atau ingin berdiskusi? Kirimkan pesanmu di bawah ini.</p>
  </div>
<br><br><br><br>
  <div class="contact-container">
    <!-- FORMULIR PESAN -->
    <!-- Ganti 'YOUR_FORM_ID' dengan ID dari Formspree nanti -->
    <form action="https://formspree.io/f/mnpnlzrk" method="POST" class="contact-form">
      <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" placeholder="Nama lengkapmu" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="alamat@email.com" required>
      </div>

      <div class="form-group">
        <label for="message">Pesan</label>
        <textarea id="message" name="message" rows="5" placeholder="Tuliskan pesanmu di sini..." required></textarea>
      </div>

      <button type="submit" class="btn-primary">Kirim Pesan <i class="fa-solid fa-paper-plane"></i></button>
    </form>

    <!-- MEDIA SOSIAL & KONTAK DIRECT -->
    <div class="contact-info">
      <h3>Sosial Media & Kontak</h3>
      <p>Kamu juga bisa terhubung denganku melalui platform berikut:</p>

      <div class="social-links">
        <a href="https://github.com/rishafyaskha-cpu" target="_blank" class="social-card">
          <i class="devicon-github-original"></i>
          <span>GitHub</span>
        </a>
        <a href="https://linkedin.com/in/rishafyaskha" target="_blank" class="social-card">
          <i class="devicon-linkedin-plain colored"></i>
          <span>LinkedIn</span>
        </a>
        <a href="https://instagram.com/rishafy_askha" target="_blank" class="social-card">
          <i class="fa-brands fa-instagram" style="color: #e1306c;"></i>
          <span>Instagram</span>
        </a>
        <a href="mailto:[rishafyaskha@gmail.com]" class="social-card">
          <i class="fa-solid fa-envelope" style="color: #00ff88;"></i>
          <span>Email Direct</span>
        </a>
        <a href="https://api.whatsapp.com/send?phone=6285786343991" target="_blank" class="social-card">
          <i class="fa-brands fa-whatsapp" style="color: #25d366;"></i>
          <span>WhatsApp</span>
        </a>
        <a href="https://tiktok.com/@rishafy_askha_62" target="_blank" class="social-card">
          <i class="fa-brands fa-tiktok" style="color: #000000;"></i>
          <span>TikTok</span>
        </a>
        
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <p>&copy; 2026 Rishafy Askha Septama. All rights reserved.</p>
</footer>

<script src="{{ asset('js/ghostty-terminal.js') }}" defer></script>


</body>
</html>