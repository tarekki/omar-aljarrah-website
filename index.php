<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package Omar_Al_Jarrah_Consulting
 */

get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Transform Your Business with Strategic Consulting</h1>
                <p class="hero-subtitle">I help businesses achieve sustainable growth through data-driven strategies and proven methodologies.</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Get Started</a>
                    <a href="#about" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/omar.jpg" alt="Omar Al-Jarrah - Institutional Development Consultant" />
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <h2>About Omar Al-Jarrah</h2>
                <p>Experienced Business Consultant with a proven track record</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Institutional Development & Quality Systems Specialist</h3>
                    <p>Biomedical Engineering graduate with Hospital Management diploma, specializing in ISO 9001:2015 implementation, institutional building, and organizational development. Proven track record with UNDP projects, medical complexes, and NGOs.</p>
                    
                    <!-- Credentials Tabs -->
                    <div class="credentials-tabs">
                        <div class="tab-buttons">
                            <button class="tab-btn active" data-tab="certifications">Certifications</button>
                            <button class="tab-btn" data-tab="experience">Experience</button>
                            <button class="tab-btn" data-tab="achievements">Achievements</button>
                        </div>
                        
                        <div class="tab-content">
                            <div class="tab-panel active" id="certifications">
                                <div class="credentials">
                                    <div class="credential-item">
                                        <i class="fas fa-certificate"></i>
                                        <span>ISO 9001:2015 Lead Auditor</span>
                                    </div>
                                    <div class="credential-item">
                                        <i class="fas fa-award"></i>
                                        <span>Quality Management Systems</span>
                                    </div>
                                    <div class="credential-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Internal Auditor Certification</span>
                                    </div>
                                    <div class="credential-item">
                                        <i class="fas fa-graduation-cap"></i>
                                        <span>Biomedical Engineering Degree</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-panel" id="experience">
                                <div class="credentials">
                                    <div class="credential-item">
                                        <i class="fas fa-university"></i>
                                        <span>UNDP Project Management</span>
                                    </div>
                                    <div class="credential-item">
                                        <i class="fas fa-hospital"></i>
                                        <span>Medical Complex Development</span>
                                    </div>
                                    <div class="credential-item">
                                        <i class="fas fa-building"></i>
                                        <span>Institutional Development</span>
                                    </div>
                                    <div class="credential-item">
                                        <i class="fas fa-chart-line"></i>
                                        <span>Operations Optimization</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-panel" id="achievements">
                                <div class="credentials">
                                    <div class="credential-item">
                                        <i class="fas fa-users"></i>
                                        <span>25+ Organizations Transformed</span>
                                    </div>
                                    <div class="credential-item">
                                        <i class="fas fa-trophy"></i>
                                        <span>15+ ISO Certifications</span>
                                    </div>
                                    <div class="credential-item">
                                        <i class="fas fa-star"></i>
                                        <span>8+ Years Experience</span>
                                    </div>
                                    <div class="credential-item">
                                        <i class="fas fa-handshake"></i>
                                        <span>100% Client Satisfaction</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="about-stats">
                        <div class="stat">
                            <h4>25+</h4>
                            <p>Organizations Transformed</p>
                        </div>
                        <div class="stat">
                            <h4>15+</h4>
                            <p>ISO Certifications</p>
                        </div>
                        <div class="stat">
                            <h4>8+</h4>
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <div class="about-photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/omar.jpg" alt="Omar Al-Jarrah - Professional Photo" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Services</h2>
                <p>Comprehensive business consulting solutions</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Strategic Planning</h3>
                    <p>Develop comprehensive business strategies that align with your goals and market opportunities.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Operations Optimization</h3>
                    <p>Streamline your operations to improve efficiency, reduce costs, and enhance productivity.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Growth Strategy</h3>
                    <p>Identify and implement growth opportunities to scale your business effectively.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Change Management</h3>
                    <p>Guide your organization through transitions and transformations with minimal disruption.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-analytics"></i>
                    </div>
                    <h3>Performance Analysis</h3>
                    <p>Analyze your business performance and provide actionable insights for improvement.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation Consulting</h3>
                    <p>Help you innovate and stay competitive in today's rapidly changing business landscape.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-header">
                <h2>Success Stories</h2>
                <p>Real results for real businesses</p>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <div class="portfolio-placeholder">
                            <i class="fas fa-building"></i>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Manufacturing Company</h3>
                        <p>Increased operational efficiency by 35% through process optimization and strategic restructuring.</p>
                        <div class="portfolio-result">
                            <span class="result-number">35%</span>
                            <span class="result-text">Efficiency Increase</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <div class="portfolio-placeholder">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>E-commerce Startup</h3>
                        <p>Scaled from startup to $2M revenue in 18 months through strategic growth planning.</p>
                        <div class="portfolio-result">
                            <span class="result-number">$2M</span>
                            <span class="result-text">Revenue Growth</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <div class="portfolio-placeholder">
                            <i class="fas fa-hospital"></i>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Healthcare Organization</h3>
                        <p>Reduced operational costs by 25% while improving patient satisfaction scores.</p>
                        <div class="portfolio-result">
                            <span class="result-number">25%</span>
                            <span class="result-text">Cost Reduction</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>What Clients Say</h2>
                <p>Trusted by business leaders worldwide</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Omar's strategic insights transformed our business. His approach is both analytical and practical, delivering real results."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>CEO, TechCorp</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Working with Omar was a game-changer. His expertise in operations optimization saved us significant costs."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Michael Chen</h4>
                            <p>COO, Manufacturing Plus</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Omar's guidance helped us navigate a major organizational change smoothly. Highly recommended!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Emily Rodriguez</h4>
                            <p>Director, HealthFirst</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Get In Touch</h2>
                <p>Ready to transform your business? Let's discuss your goals.</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>omar@aljarrahconsulting.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Location</h4>
                            <p>New York, NY</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="1" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
