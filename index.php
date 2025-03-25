<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Nombre | Desarrollador de Software</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/css.css">
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
                    <img src="img/ing2.jpeg" alt="Foto de Perfil">
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
                        <p>+52 (993) 104 8925</p>
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
                <?php if(isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; ?>
                    </div>
                <?php endif; ?>

                <h2>Contacto</h2>
                <form action="send_email.php" method="POST">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nombre Completo *" required>
                    <?php if(isset($errors['name'])): ?>
                        <span class="text-danger"><?php echo $errors['name']; ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email *" required>
                    <?php if(isset($errors['email'])): ?>
                        <span class="text-danger"><?php echo $errors['email']; ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input type="text" name="company" class="form-control" placeholder="Empresa">
                </div>
                <div class="form-group">
                    <input type="text" name="subject" class="form-control" placeholder="Asunto *" required>
                    <?php if(isset($errors['subject'])): ?>
                        <span class="text-danger"><?php echo $errors['subject']; ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Mensaje *" required></textarea>
                    <?php if(isset($errors['message'])): ?>
                        <span class="text-danger"><?php echo $errors['message']; ?></span>
                    <?php endif; ?>
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







<!-- {{-- para recargar la pagina sin recargar la pagina jajaja  --}} -->

 <!-- Agregar este código al final de tu archivo HTML, justo antes del cierre de  -->

 <script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('.contact-form form');
    
    const alertDiv = document.createElement('div');
    alertDiv.className = 'custom-alert';
    alertDiv.style.display = 'none';
    alertDiv.style.padding = '15px';
    alertDiv.style.borderRadius = '5px';
    alertDiv.style.marginBottom = '20px';
    alertDiv.style.fontWeight = '500';
    alertDiv.style.transition = 'all 0.3s ease';
    contactForm.insertBefore(alertDiv, contactForm.firstChild);

    const submitButton = contactForm.querySelector('button[type="submit"]');
    const originalButtonText = submitButton.innerHTML;

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';

        const formData = new FormData(contactForm);

        fetch(contactForm.getAttribute('action'), {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            setTimeout(() => {
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonText;

                if (data.success) {
                    contactForm.reset();

                    alertDiv.style.display = 'block';
                    alertDiv.style.backgroundColor = '#d4edda';
                    alertDiv.style.color = '#155724';
                    alertDiv.style.border = '1px solid #c3e6cb';
                    alertDiv.innerHTML = '<i class="fas fa-check-circle"></i> ¡Mensaje enviado con éxito! Me pondre en contacto contigo pronto.';

                    setTimeout(() => {
                        alertDiv.style.opacity = '0';
                        setTimeout(() => {
                            alertDiv.style.display = 'none';
                            alertDiv.style.opacity = '1';
                        }, 500);
                    }, 5000);
                } else {
                    alertDiv.style.display = 'block';
                    alertDiv.style.backgroundColor = '#f8d7da';
                    alertDiv.style.color = '#721c24';
                    alertDiv.style.border = '1px solid #f5c6cb';
                    alertDiv.innerHTML = '<i class="fas fa-exclamation-circle"></i> ' + (data.message || 'Hubo un error al enviar el mensaje. Intenta nuevamente.');
                }
            }, 1000);
        })
        .catch(error => {
            console.error('Error:', error);

            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;

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