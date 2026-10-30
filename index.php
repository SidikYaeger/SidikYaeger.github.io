<?php

require_once __DIR__ . '/identity.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars(MEMBER_NAMA) ?> &mdash; Portfolio</title>
    <meta name="description" content="Personal Page of Zhafir Muhammad Tectona Grandito (<?= htmlspecialchars(MEMBER_NIM) ?>) - Route <?= htmlspecialchars(MEMBER_ROUTE) ?>. Informatics Student at Telkom University.">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="assets/style.css?v=<?= time() ?>">
</head>
<body>

    
    <div class="nav-overlay" id="nav-overlay"></div>

    
    <header class="nav-header" id="nav-header">
        <div class="nav-inner">
            
            <a href="https://github.com/SidikYaeger" target="_blank" rel="noopener noreferrer" class="nav-logo-link" title="GitHub - SidikYaeger">
                <svg class="github-icon-svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
                </svg>
                <span class="nav-github-user">SidikYaeger</span>
            </a>

            
            <ul class="nav-menu" id="nav-menu">
                <li><a href="#hero" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#experience" class="nav-link">Experience</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#shoutbox" class="nav-link">Shoutbox</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>

            
            <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main>
        
        <section id="hero" class="hero">
            <div class="hero-bg-wrapper">
                <img src="assets/igon.jpg" alt="Hero Background" class="hero-bg-img" onerror="this.classList.add('is-hidden');" onload="this.classList.remove('is-hidden');">
                <div class="hero-bg-overlay"></div>
            </div>

            <div class="container hero-container">
                <div class="hero-editorial-top">
                    <span class="hero-meta-tag">Bandung, Indonesia</span>
                </div>

                <div class="hero-main-block">
                    <h1 class="hero-headline"><em>&ldquo;Curse You, Bayle!&rdquo;</em></h1>
                    <div class="hero-quote-author">&mdash; Drake Warrior, Igon</div>
                </div>
            </div>
        </section>

        
        <section id="about" class="section">
            <div class="container">
                <div class="section-head">
                    <span class="section-index">01 / About</span>
                    <h2 class="section-title">Profile &amp; Background</h2>
                </div>

                <div class="about-columns">
                    
                    <div class="about-photo-wrapper">
                        <img src="assets/avatar.jpg" alt="Zhafir Muhammad Tectona Grandito" class="about-photo-img" onerror="this.classList.add('is-hidden');" onload="this.classList.remove('is-hidden');">
                        <div class="about-photo-fallback">
                            <div class="fallback-title">ZM</div>
                            <div style="font-weight:700; font-size:1rem; margin-bottom:0.25rem;"><?= htmlspecialchars(MEMBER_NAMA) ?></div>
                            <div class="fallback-sub">assets/avatar.jpg</div>
                        </div>
                    </div>

                    
                    <div>
                        <p class="about-bio">
                            Informatics undergraduate student with a strong interest in Data Analytics, AI, and Machine Learning. Familiar with Python, SQL, data visualization, and AI tools through academic and personal projects. I enjoy working with data, exploring insights, and using AI tools to improve productivity and support data driven decision making. I am eager to continuously develop my analytical and technical skills. Currently seeking an internship opportunity where I can apply my knowledge, gain hands-on experience, and contribute to data-driven projects.
                        </p>

                        <div class="editorial-list">
                            <div class="editorial-row">
                                <span class="editorial-label">Name</span>
                                <div class="editorial-value"><?= htmlspecialchars(MEMBER_NAMA) ?></div>
                            </div>
                            <div class="editorial-row">
                                <span class="editorial-label">Student ID</span>
                                <div class="editorial-value"><?= htmlspecialchars(MEMBER_NIM) ?></div>
                            </div>
                            <div class="editorial-row">
                                <span class="editorial-label">Education</span>
                                <div class="editorial-value">S1 Informatics &mdash; Telkom University Bandung</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section id="experience" class="section">
            <div class="container">
                <div class="section-head">
                    <span class="section-index">02 / Experience</span>
                    <h2 class="section-title">Experience</h2>
                </div>

                <div class="resume-list">
                    
                    <div class="resume-item">
                        <h3 class="resume-institution">
                            <strong>Indonesia Marketing Association Sub Chapter Telkom University</strong>
                        </h3>
                        <ul class="resume-bullets">
                            <li class="resume-bullet-item">
                                <div class="resume-role-header">
                                    <em>Manager of Human Capital Management</em> <span class="resume-period">(Jan 2026 &ndash; Present)</span>
                                </div>
                                <p class="resume-desc">
                                    Directed and oversaw several work programs (including recruitment, team-building, and awards) to ensure seamless execution and support organizational regeneration.
                                </p>
                            </li>

                            <li class="resume-bullet-item">
                                <div class="resume-role-header">
                                    <em>Head of Recruitment Committee 2025</em> <span class="resume-period">(Aug 2025 &ndash; Sept 2025)</span>
                                </div>
                                <p class="resume-desc">
                                    Led team management, streamlined communication channels, and successfully achieved the organization's recruitment targets and handling 400% (50 to 200) increase in applicant registrations.
                                </p>
                            </li>

                            <li class="resume-bullet-item">
                                <div class="resume-role-header">
                                    <em>Human Capital Management Staff</em> <span class="resume-period">(Aug 2024 &ndash; Jan 2026)</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    
                    <div class="resume-item">
                        <h3 class="resume-institution">
                            <strong>PRADA (Pejuang Ramadhan Idul Adha)</strong>
                        </h3>
                        <ul class="resume-bullets">
                            <li class="resume-bullet-item">
                                <div class="resume-role-header">
                                    <em>Religious Affairs Division</em> <span class="resume-period">(Nov 2025 &ndash; Mar 2026)</span>
                                </div>
                                <p class="resume-desc">
                                    Coordinated religious programming for a Ramadan community event, including recruiting speakers and Tarawih imams and providing free iftar meals for the public
                                </p>
                            </li>
                        </ul>
                    </div>

                    
                    <div class="resume-item">
                        <h3 class="resume-institution">
                            <strong>Grab It Fast 2026</strong>
                        </h3>
                        <ul class="resume-bullets">
                            <li class="resume-bullet-item">
                                <div class="resume-role-header">
                                    <em>Art &amp; Decoration Team</em> <span class="resume-period">(Aug 2025 &ndash; Feb 2026)</span>
                                </div>
                                <p class="resume-desc">
                                    Designed and crafted key visual and decorative elements for the event, including the official mascot, welcome board, photo booth, and directional signages. Ensured all physical decorations and artworks aligned with the event's core theme to create an engaging atmosphere.
                                </p>
                            </li>
                        </ul>
                    </div>

                    
                    <div class="resume-item">
                        <h3 class="resume-institution">
                            <strong>DGIT (Desain Grafis Ilmu Teknologi), SMAN 9 Kota Bogor</strong>
                        </h3>
                        <ul class="resume-bullets">
                            <li class="resume-bullet-item">
                                <div class="resume-role-header">
                                    <em>Treasurer</em> <span class="resume-period">(Jul 2022 &ndash; Feb 2024)</span>
                                </div>
                            </li>

                            <li class="resume-bullet-item">
                                <div class="resume-role-header">
                                    <em>Head of the Design Division - Youth Red Cross 2023</em> <span class="resume-period">(Mar 2023 &ndash; May 2023)</span>
                                </div>
                                <p class="resume-desc">
                                    Coordinated with cross-functional teams to align visual identity with event objectives and themes. Led a design team in creating promotional materials, including banners, Instagram feeds, and event backdrops.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        
        <section id="projects" class="section">
            <div class="container">
                <div class="section-head">
                    <span class="section-index">03 / Projects</span>
                    <h2 class="section-title">Featured Projects</h2>
                </div>

                
                <div class="portfolio-controls">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="ai">AI &amp; ML</button>
                    <button class="filter-btn" data-filter="web">Web Application</button>
                    <button class="filter-btn" data-filter="security">Security &amp; Tools</button>
                </div>

                <div class="portfolio-list">
                    
                    <article class="portfolio-item" data-category="web">
                        <div class="portfolio-content">
                            <div class="portfolio-tag">Cloud Computing &bull; Shared Cluster Application</div>
                            <h3 class="portfolio-title">
                                <a href="#shoutbox">Group Shoutbox &mdash; Route m0 &nearr;</a>
                            </h3>
                            <p class="portfolio-desc">
                                Real-time distributed multi-node communication system developed for the Cloud Computing course. Synchronized across a 5-node cluster (m0&ndash;m4) through a shared MySQL database (<code>kelompok_db</code>), featuring automated 4-second polling telemetry and cluster route filtering. Dilayani oleh <strong><?= htmlspecialchars(MEMBER_NAMA) ?> (<?= htmlspecialchars(MEMBER_NIM) ?>)</strong>.
                            </p>
                            <div class="portfolio-tech">
                                <span class="portfolio-tech-tag">PHP 8.2</span>
                                <span class="portfolio-tech-tag">MySQL PDO</span>
                                <span class="portfolio-tech-tag">AJAX Polling</span>
                                <span class="portfolio-tech-tag">Cluster Route m0</span>
                            </div>
                            <div style="display: flex; gap: 1rem; align-items: center; margin-top: 0.75rem;">
                                <a href="#shoutbox" class="portfolio-repo-link">
                                    Coba Aplikasi Langsung (Live Below) &darr;
                                </a>
                                <span style="color: var(--color-border);">&bull;</span>
                                <a href="https://github.com/SidikYaeger/shoutbox" target="_blank" rel="noopener noreferrer" class="portfolio-repo-link">
                                    GitHub Repository &rarr;
                                </a>
                            </div>
                        </div>
                    </article>

                    
                    <article class="portfolio-item" data-category="ai">
                        <div class="portfolio-content">
                            <div class="portfolio-tag">Artificial Intelligence</div>
                            <h3 class="portfolio-title">
                                <a href="https://github.com/SidikYaeger/Roleplay-AI" target="_blank" rel="noopener noreferrer">Roleplay-AI (Aether) &nearr;</a>
                            </h3>
                            <p class="portfolio-desc">
                                Interactive AI character roleplay web platform with custom character creation (personality, scenario, avatar), real-time typewriter response streaming powered by LLMs (Gemini &amp; Nvidia API), and long-term dialogue memory.
                            </p>
                            <div class="portfolio-tech">
                                <span class="portfolio-tech-tag">Python</span>
                                <span class="portfolio-tech-tag">Gemini API</span>
                                <span class="portfolio-tech-tag">JavaScript</span>
                                <span class="portfolio-tech-tag">LLM Streaming</span>
                            </div>
                            <a href="https://github.com/SidikYaeger/Roleplay-AI" target="_blank" rel="noopener noreferrer" class="portfolio-repo-link">
                                View on GitHub &rarr;
                            </a>
                        </div>
                    </article>

                    
                    <article class="portfolio-item" data-category="web">
                        <div class="portfolio-content">
                            <div class="portfolio-tag">Productivity &amp; Web</div>
                            <h3 class="portfolio-title">
                                <a href="https://github.com/SidikYaeger/Campus-Companion" target="_blank" rel="noopener noreferrer">Campus Companion &nearr;</a>
                            </h3>
                            <p class="portfolio-desc">
                                Full-stack student productivity application for managing courses, assignments, weekly schedules, deadlines, and calendar activities with per-user authentication and isolated academic data storage.
                            </p>
                            <div class="portfolio-tech">
                                <span class="portfolio-tech-tag">Full-Stack</span>
                                <span class="portfolio-tech-tag">Course &amp; Task Management</span>
                                <span class="portfolio-tech-tag">Authentication</span>
                                <span class="portfolio-tech-tag">REST API</span>
                            </div>
                            <a href="https://github.com/SidikYaeger/Campus-Companion" target="_blank" rel="noopener noreferrer" class="portfolio-repo-link">
                                View on GitHub &rarr;
                            </a>
                        </div>
                    </article>

                    
                    <article class="portfolio-item" data-category="security">
                        <div class="portfolio-content">
                            <div class="portfolio-tag">Security &amp; Networking</div>
                            <h3 class="portfolio-title">
                                <a href="https://github.com/SidikYaeger/NEScan" target="_blank" rel="noopener noreferrer">NEScan &nearr;</a>
                            </h3>
                            <p class="portfolio-desc">
                                Lightweight, fast, and efficient network scanning and reconnaissance utility designed for discovering active network devices, open ports, and potential vulnerabilities.
                            </p>
                            <div class="portfolio-tech">
                                <span class="portfolio-tech-tag">Python</span>
                                <span class="portfolio-tech-tag">Network Scanning</span>
                                <span class="portfolio-tech-tag">Port Scanner</span>
                                <span class="portfolio-tech-tag">Security Recon</span>
                            </div>
                            <a href="https://github.com/SidikYaeger/NEScan" target="_blank" rel="noopener noreferrer" class="portfolio-repo-link">
                                View on GitHub &rarr;
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        
        <section id="skills" class="section">
            <div class="container">
                <div class="section-head">
                    <span class="section-index">04 / Skills</span>
                    <h2 class="section-title">Skills &amp; Competencies</h2>
                </div>

                <div class="skills-list">
                    
                    <div class="skills-row">
                        <div class="skills-category">Languages</div>
                        <div class="skills-items">
                            <span class="skills-item-tag">Indonesian (Native)</span>
                            <span class="skills-item-tag">English (Proficient)</span>
                        </div>
                    </div>

                    
                    <div class="skills-row">
                        <div class="skills-category">Hard Skills</div>
                        <div class="skills-items">
                            <span class="skills-item-tag">Ms. Office</span>
                            <span class="skills-item-tag">Basic Design</span>
                            <span class="skills-item-tag">Web Development</span>
                        </div>
                    </div>

                    
                    <div class="skills-row">
                        <div class="skills-category">Soft Skills</div>
                        <div class="skills-items">
                            <span class="skills-item-tag">Project Management</span>
                            <span class="skills-item-tag">Public Speaking</span>
                            <span class="skills-item-tag">Leadership</span>
                            <span class="skills-item-tag">Adaptability</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section id="shoutbox" class="section shoutbox-section" style="padding: clamp(3.5rem, 6vw, 5.5rem) 0; background: #ffffff;">
            <div class="container shoutbox-grid-container" style="display: grid; grid-template-columns: minmax(260px, 300px) minmax(0, 1fr); gap: clamp(2rem, 3.5vw, 4rem); align-items: start; max-width: 1360px;">
                
                <div class="shoutbox-side" style="position: sticky; top: 6rem;">
                    <h2 class="shoutbox-heading" style="font-family: var(--font-heading, sans-serif); font-size: clamp(2.2rem, 3.2vw, 2.85rem); font-weight: 800; color: #0f172a; line-height: 1.15; letter-spacing: -0.03em; margin: 0 0 1.25rem 0;">
                        Aplikasi bersama:<br>
                        shoutbox
                    </h2>
                    <p class="shoutbox-description" style="font-family: var(--font-body, sans-serif); font-size: 0.95rem; line-height: 1.65; color: #64748b; margin: 0;">
                        Papan pesan terpusat antarmahasiswa kelompok dengan sinkronisasi AJAX, perlindungan SQL Injection dan XSS, serta pelacakan node server.
                    </p>
                </div>

                
                <div class="shoutbox-frame-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; box-shadow: 0 12px 36px -6px rgba(0, 0, 0, 0.07), 0 4px 12px -2px rgba(0, 0, 0, 0.03); overflow: hidden; width: 100%; min-height: 860px;">
                    <iframe
                        src="app/index.php?v=<?= time() ?>"
                        title="Aplikasi Bersama Shoutbox"
                        class="shoutbox-app-iframe"
                        style="width: 100%; height: 860px; min-height: 860px; border: none; display: block; background: #fdfbf7;"
                        loading="eager"
                    ></iframe>
                </div>
            </div>
        </section>

        
        <section id="contact" class="section">
            <div class="container">
                <div class="section-head">
                    <span class="section-index">06 / Contact</span>
                    <h2 class="section-title">Get In Touch</h2>
                </div>

                <div class="contact-minimal-list">
                    
                    <a href="mailto:zhafirtectona@gmail.com" class="contact-row-item">
                        <span class="contact-row-label">Email</span>
                        <span class="contact-row-value">zhafirtectona@gmail.com</span>
                    </a>

                    
                    <a href="https://www.linkedin.com/in/zhafirmuhammad/" target="_blank" rel="noopener noreferrer" class="contact-row-item">
                        <span class="contact-row-label">LinkedIn</span>
                        <span class="contact-row-value">linkedin.com/in/zhafirmuhammad &nearr;</span>
                    </a>

                    
                    <a href="https://github.com/SidikYaeger" target="_blank" rel="noopener noreferrer" class="contact-row-item">
                        <span class="contact-row-label">GitHub</span>
                        <span class="contact-row-value">github.com/SidikYaeger &nearr;</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    
    <footer class="site-footer">
        <div class="container footer-inner">
            <div>
                &copy; <?= date('Y') ?> <strong><?= htmlspecialchars(MEMBER_NAMA) ?></strong> &mdash; <?= htmlspecialchars(MEMBER_NIM) ?>
            </div>
            <div>
                Cloud Computing Course &bull; Node Route: <code><?= htmlspecialchars(MEMBER_ROUTE) ?></code>
            </div>
        </div>
    </footer>

    
    <?php include __DIR__ . '/app/partials/served_by.php'; ?>

    
    <script src="assets/script.js"></script>
</body>
</html>
