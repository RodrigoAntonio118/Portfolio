<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Nombre | Desarrollador de Software</title>
    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Variables */
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #2980b9;
            --text-color: #333;
            --light-text: #666;
            --lighter-text: #999;
            --bg-color: #fff;
            --light-bg: #f9f9f9;
            --border-color: #e0e0e0;
            --shadow: 0 2px 10px rgba(0,0,0,0.05);
            --transition: all 0.3s ease;
        }
        
        /* Reset y Estilos Generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.7;
            color: var(--text-color);
            background-color: var(--bg-color);
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            line-height: 1.3;
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        p {
            margin-bottom: 15px;
            color: var(--light-text);
        }
        
        a {
            text-decoration: none;
            color: var(--secondary-color);
            transition: var(--transition);
        }
        
        a:hover {
            color: var(--accent-color);
        }
        
        ul {
            list-style: none;
        }
        
        /* Container */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Utilidades */
        .btn {
            display: inline-block;
            background: var(--primary-color);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
        }
        
        .btn:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }
        
        .btn-outline:hover {
            background: var(--primary-color);
            color: white;
        }
        
        .section {
            padding: 80px 0;
        }
        
        .section-dark {
            background-color: var(--primary-color);
            color: white;
        }
        
        .section-light {
            background-color: var(--light-bg);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 32px;
            display: inline-block;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title h2:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: var(--secondary-color);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .section-dark .section-title h2 {
            color: white;
        }
        
        .section-dark .section-title h2:after {
            background: white;
        }
        
        .card {
            background: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .card:hover {
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        
        /* Encabezado */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: white;
            box-shadow: var(--shadow);
            z-index: 1000;
        }
        
        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .logo span {
            color: var(--secondary-color);
        }
        
        .nav-menu {
            display: flex;
        }
        
        .nav-menu li {
            margin-left: 30px;
        }
        
        .nav-menu a {
            color: var(--text-color);
            font-weight: 500;
            font-size: 16px;
            position: relative;
        }
        
        .nav-menu a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--secondary-color);
            bottom: -5px;
            left: 0;
            transition: var(--transition);
        }
        
        .nav-menu a:hover:after {
            width: 100%;
        }
        
        .mobile-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }
        
        /* Hero Section */
        .hero {
            background: var(--light-bg);
            height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 80px;
            position: relative;
            overflow: hidden;
        }
        
        .hero:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(44, 62, 80, 0.9) 0%, rgba(41, 128, 185, 0.8) 100%);
            top: 0;
            left: 0;
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 800px;
        }
        
        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: white;
        }
        
        .hero-content h2 {
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .hero-content p {
            font-size: 18px;
            margin-bottom: 40px;
            color: rgba(255, 255, 255, 0.7);
            max-width: 600px;
        }
        
        /* About Section */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 50px;
            align-items: center;
        }
        
        .about-image {
            position: relative;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .about-image img {
            width: 100%;
            display: block;
        }
        
        .about-content h3 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        
        .experience-list {
            margin-top: 30px;
        }
        
        .experience-item {
            margin-bottom: 30px;
            position: relative;
            padding-left: 30px;
            border-left: 2px solid var(--secondary-color);
        }
        
        .experience-item:last-child {
            margin-bottom: 0;
        }
        
        .experience-item:before {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: var(--secondary-color);
            left: -8.5px;
            top: 5px;
        }
        
        .experience-item h4 {
            font-size: 20px;
            margin-bottom: 5px;
        }
        
        .experience-item h5 {
            font-size: 16px;
            font-weight: 500;
            color: var(--secondary-color);
            margin-bottom: 10px;
        }
        
        .experience-item p {
            font-size: 16px;
        }
        
        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .skill-card {
            background: white;
            border-radius: 5px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .skill-icon {
            width: 60px;
            height: 60px;
            background: var(--light-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: var(--primary-color);
            font-size: 24px;
        }
        
        .skill-card h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }
        
        .skill-list li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 20px;
        }
        
        .skill-list li:before {
            content: '•';
            color: var(--secondary-color);
            position: absolute;
            left: 0;
            top: 0;
            font-size: 20px;
        }
        
        /* Proyectos Section */
        .project-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        
        .project-tab {
            padding: 12px 24px;
            margin: 0 5px 10px;
            background: var(--light-bg);
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .project-tab.active, .project-tab:hover {
            background: var(--secondary-color);
            color: white;
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .project-card {
            background: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .project-image {
            position: relative;
            overflow: hidden;
            height: 200px;
        }
        
        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(44, 62, 80, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: var(--transition);
        }
        
        .project-card:hover .project-overlay {
            opacity: 1;
        }
        
        .project-card:hover .project-image img {
            transform: scale(1.1);
        }
        
        .project-links a {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 50%;
            background: white;
            color: var(--primary-color);
            margin: 0 5px;
            transition: var(--transition);
        }
        
        .project-links a:hover {
            background: var(--secondary-color);
            color: white;
        }
        
        .project-content {
            padding: 25px;
        }
        
        .project-content h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        .project-tags {
            margin-bottom: 15px;
        }
        
        .project-tags span {
            display: inline-block;
            padding: 5px 10px;
            background: var(--light-bg);
            border-radius: 3px;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            color: var(--light-text);
        }
        
        /* Testimonials Section */
        .testimonials-slider {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        
        .testimonial {
            background: white;
            padding: 40px;
            border-radius: 5px;
            box-shadow: var(--shadow);
            text-align: center;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .client-info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .client-image {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 15px;
        }
        
        .client-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .client-name {
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .client-position {
            color: var(--lighter-text);
        }
        
        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }
        
        .contact-info {
            padding-right: 30px;
        }
        
        .contact-info h3 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        
        .contact-detail {
            display: flex;
            margin-bottom: 25px;
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background: var(--light-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: var(--primary-color);
            font-size: 20px;
        }
        
        .contact-text h4 {
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .contact-text p {
            color: var(--light-text);
        }
        
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 5px;
            box-shadow: var(--shadow);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            width: 100%;
            padding: 15px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            font-size: 16px;
            transition: var(--transition);
        }
        
        .form-control:focus {
            border-color: var(--secondary-color);
            outline: none;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        /* Footer */
        .footer {
            background: var(--primary-color);
            color: rgba(255, 255, 255, 0.7);
            padding: 60px 0 30px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 50px;
        }
        
        .footer-col h4 {
            color: white;
            font-size: 20px;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-col h4:after {
            content: '';
            position: absolute;
            width: 30px;
            height: 2px;
            background: var(--secondary-color);
            bottom: 0;
            left: 0;
        }
        
        .footer-about p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 20px;
        }
        
        .social-links {
            display: flex;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 10px;
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
        }
        
        .footer-links li {
            margin-bottom: 15px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            text-align: center;
        }
        
        .scroll-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--secondary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }
        
        .scroll-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .about-grid, 
            .contact-grid, 
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .about-image {
                max-width: 500px;
                margin: 0 auto;
            }
            
            .contact-info {
                padding-right: 0;
            }
        }
        
        @media (max-width: 768px) {
            .header-inner {
                padding: 15px 0;
            }
            
            .mobile-toggle {
                display: block;
            }
            
            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 80%;
                max-width: 300px;
                height: 100vh;
                background: white;
                flex-direction: column;
                padding: 30px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                transition: var(--transition);
                z-index: 999;
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-menu li {
                margin: 0 0 20px 0;
            }
            
            .hero-content h1 {
                font-size: 36px;
            }
            
            .projects-grid {
                grid-template-columns: 1fr;
            }
            
            .project-tab {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <div class="logo">Dev<span>Rodrigo</span></div>
                <ul class="nav-menu">
                    <li><a href="#hero">Inicio</a></li>
                    <li><a href="#about">Perfil</a></li>
                    <li><a href="#skills">Tecnologías</a></li>
                    <li><a href="#projects">Proyectos</a></li>
                    <li><a href="#testimonials">Testimonios</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Desarrollador de Software</h1>
                <h2>Especialista en React Native, Laravel, Python & Kotlin</h2>
                <p>Transformo ideas en aplicaciones funcionales y escalables. Experiencia en desarrollo web y móvil con enfoque en la experiencia del usuario y código de alta calidad.</p>
                <a href="#projects" class="btn">Ver Proyectos</a>
                <a href="#contact" class="btn btn-outline" style="margin-left: 15px;">Contactar</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Perfil Profesional</h2>
            </div>
            <div class="about-grid">
                <div class="about-image">
                    <img src="{{ asset('img/ing2.jpeg') }}" alt="Foto de Perfil">
                </div>
                <div class="about-content">
                    <h3>Desarrollador multidisciplinario con pasión por la innovación</h3>
                    <p>Soy un desarrollador de software con más de 1 años imedio de experiencia creando soluciones web y móviles de alto rendimiento. Mi expertise abarca todo el ciclo de desarrollo de software, desde el diseño de arquitectura hasta la implementación y mantenimiento de sistemas complejos.</p>
                    <p>Me especializo en la creación de experiencias de usuario fluidas y atractivas, respaldadas por código limpio, optimizado y mantenible. Mi enfoque combina la eficiencia técnica con la comprensión de las necesidades del negocio para entregar productos que realmente generan valor.</p>
                    
                    <div class="experience-list">
                        <div class="experience-item">
                            <h4>Software Deceloper Manager</h4>
                            <h5>Maelf Oil Services | 2025 - Presente</h5>
                            <p>Lidero el desarrollo de aplicaciones web y Codex en Laravel. Implementé una arquitectura de microservicios que mejoró los tiempos de carga en un 60% y rediseñé la experiencia de usuario que aumentó la retención en un 35%.</p>
                        </div>
                        <div class="experience-item">
                            <h4>Desarrollador Backend</h4>
                            <h5>PC GIL | 2022 - 2023</h5>
                            <p>Desarrollé APIs RESTful con React Native, implementé sistemas de autenticación seguros y optimicé consultas a bases de datos que redujeron el tiempo de respuesta en un 45%. Integré servicios  y procesamiento de transacciones con alta disponibilidad.</p>
                        </div>
                        <!-- <div class="experience-item">
                            <h4>Desarrollador Mobile</h4>
                            <h5>Agencia Digital | 2018 - 2020</h5>
                            <p>Diseñé y desarrollé aplicaciones móviles con React Native y Kotlin para diversos clientes del sector retail y entretenimiento. Implementé arquitecturas limpias y patrones de diseño que facilitaron el mantenimiento y las actualizaciones continuas.</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section section-light">
        <div class="container">
            <div class="section-title">
                <h2>Stack Tecnológico</h2>
            </div>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Frontend</h3>
                    <ul class="skill-list">
                        <li>React.js / Next.js</li>
                        <li>Vue.js</li>
                        <li>JavaScript / TypeScript</li>
                        <li>HTML5 / CSS3 / SASS</li>
                        <li>Redux / Context API</li>
                    </ul>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Backend</h3>
                    <ul class="skill-list">
                        <li>Laravel / PHP</li>
                        <li>Python (Django, Flask)</li>
                        <li>Node.js (Express)</li>
                        <li>RESTful APIs</li>
                        <li>GraphQL</li>
                    </ul>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Desarrollo Móvil</h3>
                    <ul class="skill-list">
                        <li>React Native</li>
                        <li>Kotlin (Android)</li>
                        <li>Flutter</li>
                        <li>Firebase</li>
                        <li>Push Notifications</li>
                    </ul>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Bases de Datos</h3>
                    <ul class="skill-list">
                        <li>MySQL / PostgreSQL</li>
                        <li>MongoDB</li>
                        <li>SQL Server</li>
                        <li>Casandra</li>
                        <li>PostgreSQL</li>
                    </ul>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Desarrollo Web</h3>
                    <ul class="skill-list">
                        <li>HTML5 Canvas / WebGL</li>
                        <li>Bootstrap / Tailwind CSS</li>
                        <li>SEO / Web Performance</li>
                        <li>APIs RESTful</li>
                        <li>Responsive Design</li>
                    </ul>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Herramientas & Metodologías</h3>
                    <ul class="skill-list">
                        <li>Git / GitHub</li>
                        <li>Agile / Scrum</li>
                        <li>Testing (Jest, PHPUnit)</li>
                        <li>UI/UX Design (Figma)</li>
                        <li>Performance Optimization</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Proyectos Destacados</h2>
            </div>
            <div class="project-tabs">
                <div class="project-tab active">Todos</div>
                <div class="project-tab">Web</div>
                <div class="project-tab">Mobile</div>
                <div class="project-tab">E-commerce</div>
                <div class="project-tab">SaaS</div>
            </div>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <img src="/api/placeholder/400/300" alt="App de Delivery">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#"><i class="fas fa-link"></i></a>
                                <a href="#"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>Aplicación de Delivery Multi-ciudad</h3>
                        <div class="project-tags">
                            <span>React Native</span>
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>Firebase</span>
                        </div>
                        <p>Aplicación móvil de delivery con sistema de geolocalización en tiempo real, pagos integrados y panel de administración. Optimizada para alta concurrencia y múltiples ciudades.</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <img src="img/rigpass.jpg" alt="Dashboard Analítico">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href=""><i class="fas fa-link"></i></a>
                                <a href="#"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>Dashboard Analítico para E-commerce</h3>
                        <div class="project-tags">
                            <span>React</span>
                            <span>Python</span>
                            <span>MongoDB</span>
                            <span>D3.js</span>
                        </div>
                        <p>Plataforma analítica avanzada para e-commerce con visualización de datos en tiempo real, predicciones de ventas mediante machine learning y sistema de alertas proactivas.</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <img src="img/codrex.jpg" alt="Plataforma Educativa">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="codrex.maelf.com"><i class="fas fa-link"></i></a>
                                <a href="#"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>Plataforma Educativa Interactiva</h3>
                        <div class="project-tags">
                            <span>Laravel</span>
                            <span>Blade</span>
                            <span>Tailwind CSS</span>
                            <span>MySQL</span>
                        </div>
                        <p>Sistema de aprendizaje en línea con clases en vivo, seguimiento de progreso personalizado y contenido interactivo. Implementación de micro-frontends para escalabilidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section section-light">
        <div class="container">
            <div class="section-title">
                <h2>Testimonios</h2>
            </div>
            <div class="testimonials-slider">
                <div class="testimonial">
                    <div class="testimonial-text">
                        <p>"Su capacidad técnica combinada con su visión de negocio es excepcional. Desarrolló nuestra app móvil en tiempo récord, con código limpio y una experiencia de usuario impecable. Los resultados superaron nuestras expectativas y ya estamos trabajando en nuevos proyectos."</p>
                    </div>
                    <div class="client-info">
                        <div class="client-image">
                            <img src="img/manuel.jpeg" alt="CEO de StartUp">
                        </div>
                        <h4 class="client-name">Manuel Alejandro Cornelio Cadena</h4>
                        <p class="client-position">Maelf Oil Services</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Contact Section -->
   <section id="contact" class="section">
    <div class="container">
        <div class="section-title">
            <h2>Contacto</h2>
        </div>
        <div class="contact-grid">
            <div class="contact-info">
                <h3>¿Tienes un proyecto en mente?</h3>
                <p>Estoy disponible para trabajar en proyectos desafiantes que requieran soluciones innovadoras. Ya sea que necesites una aplicación móvil, un sistema web o una consultoría técnica, contáctame para discutir cómo puedo ayudarte.</p>
                
                <div class="contact-detail">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Email</h4>
                        <p>kayvazquez65@gmail.com</p>
                    </div>
                </div>
                
                <div class="contact-detail">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Teléfono</h4>
                        <p>+52 (936) 104 8925</p>
                    </div>
                </div>
                
                <div class="contact-detail">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Ubicación</h4>
                        <p>Villahermosa, Tabasco</p>
                    </div>
                </div>
                
                <div class="contact-detail">
                    <div class="contact-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Disponibilidad</h4>
                        <p>Disponible para nuevos proyectos</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nombre Completo *" required>
                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email *" required>
                        @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="company" class="form-control" placeholder="Empresa">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Asunto *" required>
                        @error('subject')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Mensaje *" required></textarea>
                        @error('message')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <button type="submit" class="btn" style="width: 100%;">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-about">
                    <h4>DevMaster</h4>
                    <p>Desarrollador de Software especializado en crear aplicaciones web y móviles de alta calidad con Laravel, React Native, Python y Kotlin.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-medium"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Enlaces Rápidos</h4>
                    <ul class="footer-links">
                        <li><a href="#hero">Inicio</a></li>
                        <li><a href="#about">Perfil</a></li>
                        <li><a href="#skills">Tecnologías</a></li>
                        <li><a href="#projects">Proyectos</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Recursos</h4>
                    <ul class="footer-links">
                        <li><a href="#">Descargar CV</a></li>
                        <li><a href="#">Blog Técnico</a></li>
                        <li><a href="#">Certificaciones</a></li>
                        <li><a href="#">Tutoriales</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top -->
    <div class="scroll-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Font Awesome Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    
    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navMenu = document.querySelector('.nav-menu');
        
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
        
        // Close menu when clicking a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });
        
        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Project Tabs
        const projectTabs = document.querySelectorAll('.project-tab');
        
        projectTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                projectTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                // Here you would typically filter projects
            });
        });
        
        // Scroll to Top Button
        const scrollTopBtn = document.querySelector('.scroll-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('active');
            } else {
                scrollTopBtn.classList.remove('active');
            }
        });
        
        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>



<!-- scrip del contact-detail -->
    <script>
    // Mostrar mensajes de notificación
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    
    if(status === 'success') {
        alert('¡Mensaje enviado correctamente! Pronto me pondré en contacto contigo.');
    }
    
    if(status === 'error') {
        alert('Hubo un error al enviar el mensaje. Por favor intenta nuevamente más tarde.');
    }
    </script>







{{-- para recargar la pagina sin recargar la pagina jajaja  --}}

// Agregar este código al final de tu archivo HTML, justo antes del cierre de </body>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Seleccionar el formulario de contacto
    const contactForm = document.querySelector('.contact-form form');
    
    // Crear el elemento para mostrar alertas
    const alertDiv = document.createElement('div');
    alertDiv.className = 'custom-alert';
    alertDiv.style.display = 'none';
    alertDiv.style.padding = '15px';
    alertDiv.style.borderRadius = '5px';
    alertDiv.style.marginBottom = '20px';
    alertDiv.style.fontWeight = '500';
    alertDiv.style.transition = 'all 0.3s ease';
    
    // Insertar el div de alerta al principio del formulario
    contactForm.insertBefore(alertDiv, contactForm.firstChild);
    
    // Agregar estilos para el botón
    const submitButton = contactForm.querySelector('button[type="submit"]');
    const originalButtonText = submitButton.innerHTML;
    
    // Agregar un listener al evento submit del formulario
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Cambiar el estado del botón
        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
        submitButton.style.backgroundColor = 'var(--secondary-color)';
        
        // Obtener los datos del formulario
        const formData = new FormData(contactForm);
        
        // Enviar la petición usando Fetch API
        fetch(contactForm.getAttribute('action'), {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Restaurar el botón después de 1 segundo para mostrar la animación
            setTimeout(() => {
                // Restaurar el botón
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonText;
                submitButton.style.backgroundColor = '';
                
                // Mostrar mensaje de éxito
                if (data.success) {
                    // Limpiar el formulario
                    contactForm.reset();
                    
                    // Mostrar alerta de éxito
                    alertDiv.style.display = 'block';
                    alertDiv.style.backgroundColor = '#d4edda';
                    alertDiv.style.color = '#155724';
                    alertDiv.style.border = '1px solid #c3e6cb';
                    alertDiv.innerHTML = '<i class="fas fa-check-circle"></i> ¡Mensaje enviado con éxito! Nos pondremos en contacto contigo pronto.';
                    
                    // Auto ocultar la alerta después de 5 segundos
                    setTimeout(() => {
                        alertDiv.style.opacity = '0';
                        setTimeout(() => {
                            alertDiv.style.display = 'none';
                            alertDiv.style.opacity = '1';
                        }, 500);
                    }, 5000);
                } else {
                    // Mostrar errores si existen
                    alertDiv.style.display = 'block';
                    alertDiv.style.backgroundColor = '#f8d7da';
                    alertDiv.style.color = '#721c24';
                    alertDiv.style.border = '1px solid #f5c6cb';
                    alertDiv.innerHTML = '<i class="fas fa-exclamation-circle"></i> ' + (data.message || 'Hubo un error al enviar el mensaje. Por favor intenta nuevamente.');
                }
            }, 1000);
        })
        .catch(error => {
            console.error('Error:', error);
            
            // Restaurar el botón
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;
            submitButton.style.backgroundColor = '';
            
            // Mostrar alerta de error
            alertDiv.style.display = 'block';
            alertDiv.style.backgroundColor = '#f8d7da';
            alertDiv.style.color = '#721c24';
            alertDiv.style.border = '1px solid #f5c6cb';
            alertDiv.innerHTML = '<i class="fas fa-exclamation-circle"></i> Error de conexión. Por favor verifica tu conexión a internet e intenta nuevamente.';
        });
    });
});
</script>




</body>
</html>