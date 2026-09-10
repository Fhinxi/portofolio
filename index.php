<?php
/**
 * Muhammad Vabian Handaka — Futuristic Portfolio
 * Pure PHP + CSS | No JavaScript
 */

// ─── DATA ────────────────────────────────────────────────────────────────────

$profile = [
    'name'       => 'Muhammad Vabian Handaka',
    'title'      => 'Software Developer & Tech Enthusiast',
    'status'     => 'AVAILABLE FOR OPPORTUNITIES',
    'email'      => 'vabianhandaka23@gmail.com',
    'whatsapp'   => '08995108433',
    'location'   => 'Batam, Indonesia',
    'university' => 'Politeknik Negeri Batam',
    'major'      => 'Teknik Rekayasa Perangkat Lunak',
    'school'     => 'SMK Negeri 7 Batam',
    'school_major'=> 'Rekayasa Perangkat Lunak',
];

$skills = [
    'Development' => [
        ['name' => 'PHP',        'level' => 85],
        ['name' => 'Laravel',    'level' => 75],
        ['name' => 'HTML',       'level' => 90],
        ['name' => 'CSS',        'level' => 85],
        ['name' => 'MySQL',      'level' => 70],
        ['name' => 'Basic Web Dev', 'level' => 80],
    ],
    'Design' => [
        ['name' => 'Canva',      'level' => 75],
        ['name' => 'Web Design', 'level' => 70],
        ['name' => 'UI Design',  'level' => 65],
    ],
    'Office' => [
        ['name' => 'Microsoft Word',       'level' => 85],
        ['name' => 'Microsoft Excel',      'level' => 80],
        ['name' => 'Microsoft PowerPoint', 'level' => 80],
        ['name' => 'Data Entry',           'level' => 85],
    ],
    'Technical' => [
        ['name' => 'Basic IT Support',        'level' => 70],
        ['name' => 'Technical Maintenance',   'level' => 65],
        ['name' => 'CNC Operation',           'level' => 70],
    ],
];

$experiences = [
    [
        'company'  => 'PT LB Technologies',
        'role'     => 'Operator CNC',
        'type'     => 'Full-time',
        'duration' => 'Current',
        'color'    => 'primary',
        'tasks'    => [
            'Mengoperasikan mesin CNC sesuai prosedur',
            'Mengikuti instruksi produksi',
            'Memastikan ketelitian hasil produksi',
            'Menjaga kualitas pekerjaan',
            'Mengikuti standar keselamatan kerja',
        ],
    ],
    [
        'company'  => 'Bank BRI Simpang Kara',
        'role'     => 'Data Entry / Admin Assistant',
        'type'     => 'PKL',
        'duration' => '6 Months',
        'color'    => 'secondary',
        'tasks'    => [
            'Input data',
            'Pengelolaan data',
            'Administrasi',
            'Pengarsipan',
            'Microsoft Office',
        ],
    ],
    [
        'company'  => 'Hotel Sahid Batam',
        'role'     => 'Engineering Intern',
        'type'     => 'PKL',
        'duration' => '3 Months',
        'color'    => 'primary',
        'tasks'    => [
            'Maintenance dan pengecatan kamar',
            'Maintenance AC',
            'Membantu teknisi elevator',
            'Perbaikan lampu',
            'Electrical maintenance sederhana',
        ],
    ],
    [
        'company'  => 'Pizza Purisimo',
        'role'     => 'Waiter',
        'type'     => 'Part Time',
        'duration' => '6 Months',
        'color'    => 'secondary',
        'tasks'    => [
            'Melayani pelanggan',
            'Mengambil dan mengantarkan pesanan',
            'Menjaga kebersihan area',
            'Komunikasi dengan pelanggan',
            'Teamwork',
        ],
    ],
];

$projects = [
    [
        'title'       => 'PHOTO GALLERY',
        'tech'        => ['PHP', 'Laravel', 'MySQL', 'HTML', 'CSS'],
        'description' => 'Website Photo Gallery yang memungkinkan pengguna mengelola album dan foto dengan sistem authentication dan role management.',
        'features'    => [
            'Login', 'Register', 'Admin & User', 'Album', 'Upload foto',
            'Like', 'Komentar', 'Search', 'Profile', 'CRUD Admin',
            'Photo detail', 'Print photo', 'Responsive design',
        ],
        'link_project' => '#',
        'link_source'  => '#',
    ],
];

$services = [
    [
        'icon'  => '&#9000;',
        'title' => 'WEB DEVELOPMENT',
        'desc'  => 'Membangun website menggunakan PHP, HTML, CSS, dan Laravel.',
        'symbol'=> '&lt;/&gt;',
    ],
    [
        'icon'  => '&#9881;',
        'title' => 'SOFTWARE DEVELOPMENT',
        'desc'  => 'Memahami dasar pengembangan aplikasi dan pemrograman.',
        'symbol'=> '&#8734;',
    ],
    [
        'icon'  => '&#9881;',
        'title' => 'IT SUPPORT',
        'desc'  => 'Memiliki pemahaman dasar troubleshooting dan technical support.',
        'symbol'=> '&#9211;',
    ],
    [
        'icon'  => '&#128196;',
        'title' => 'ADMINISTRATION',
        'desc'  => 'Berpengalaman melakukan data entry, pengelolaan dokumen, dan pekerjaan administrasi.',
        'symbol'=> '&#128203;',
    ],
];

$education = [
    [
        'school' => 'Politeknik Negeri Batam',
        'major'  => 'Teknik Rekayasa Perangkat Lunak',
        'period' => 'Current',
        'type'   => 'Diploma',
        'color'  => 'primary',
    ],
    [
        'school' => 'SMK Negeri 7 Batam',
        'major'  => 'Rekayasa Perangkat Lunak',
        'period' => 'Graduated',
        'type'   => 'SMK',
        'color'  => 'secondary',
    ],
];

$stats = [
    ['value' => '6 Months',  'label' => 'BRI Internship'],
    ['value' => '3 Months',  'label' => 'Hotel Engineering'],
    ['value' => '6 Months',  'label' => 'Part-time Waiter'],
    ['value' => 'Current',   'label' => 'CNC Operator'],
];

// ─── Handle Contact Form ─────────────────────────────────────────────────────
$form_message = '';
$form_status = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if ($name && $email && $message) {
        $form_message = 'Terima kasih, ' . $name . '! Pesan Anda telah diterima.';
        $form_status = 'success';
    } else {
        $form_message = 'Mohon lengkapi semua field.';
        $form_status = 'error';
    }
}

// ─── Skill Icon Map ──────────────────────────────────────────────────────────
$skill_icons = [
    'Development' => '&#60;/&#62;',
    'Design'      => '&#9998;',
    'Office'      => '&#128196;',
    'Technical'   => '&#9881;',
];

?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <!-- HERO SECTION -->
    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <section id="home" class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <div class="hero-badge anim-fade-in">
                    <span class="badge-dot"></span>
                    <span><?php echo $profile['status']; ?></span>
                </div>

                <p class="hero-greeting anim-slide-up">HELLO, I'M</p>
                <h1 class="hero-name anim-slide-up delay-1">
                    <span class="text-gradient">MUHAMMAD</span><br>
                    <span class="text-gradient-alt">VABIAN HANDAKA</span>
                </h1>
                <p class="hero-title anim-slide-up delay-2"><?php echo $profile['title']; ?></p>
                <p class="hero-desc anim-slide-up delay-3">
                    Fresh graduate Rekayasa Perangkat Lunak dengan pengalaman dalam web development,
                    administrasi, technical support, dan dunia industri.
                </p>

                <div class="hero-buttons anim-slide-up delay-4">
                    <a href="#projects" class="btn btn-primary">
                        <span class="btn-text">VIEW PROJECTS</span>
                        <span class="btn-glow"></span>
                    </a>
                    <a href="#contact" class="btn btn-outline">
                        <span class="btn-text">CONTACT ME</span>
                    </a>
                </div>
            </div>

            <div class="hero-terminal anim-fade-in delay-2">
                <div class="terminal-window">
                    <div class="terminal-header">
                        <div class="terminal-dots">
                            <span class="dot dot-red"></span>
                            <span class="dot dot-yellow"></span>
                            <span class="dot dot-green"></span>
                        </div>
                        <span class="terminal-title">VABIAN.DEV</span>
                        <span class="terminal-status">● ONLINE</span>
                    </div>
                    <div class="terminal-body">
                        <div class="terminal-line line-1">
                            <span class="terminal-prompt">&gt;</span>
                            <span class="terminal-text">initializing portfolio...</span>
                        </div>
                        <div class="terminal-line line-2">
                            <span class="terminal-prompt">&gt;</span>
                            <span class="terminal-text">loading profile...</span>
                        </div>
                        <div class="terminal-line line-3">
                            <span class="terminal-prompt">&gt;</span>
                            <span class="terminal-text">loading skills...</span>
                        </div>
                        <div class="terminal-line line-4">
                            <span class="terminal-prompt">&gt;</span>
                            <span class="terminal-text">loading experience...</span>
                        </div>
                        <div class="terminal-line line-5">
                            <span class="terminal-prompt">&gt;</span>
                            <span class="terminal-text terminal-success">system ready.</span>
                        </div>
                        <div class="terminal-divider"></div>
                        <div class="terminal-skills">
                            <?php
                            $term_skills = [
                                ['PHP', 85], ['Laravel', 75], ['HTML', 90], ['CSS', 85]
                            ];
                            foreach ($term_skills as $ts): ?>
                            <div class="terminal-skill-row">
                                <span class="terminal-skill-name">&gt; <?php echo $ts[0]; ?></span>
                                <span class="terminal-skill-bar">
                                    <span class="terminal-bar-fill" style="--bar-width: <?php echo $ts[1]; ?>%"></span>
                                </span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="terminal-divider"></div>
                        <div class="terminal-footer">
                            <span class="terminal-status-label">SYSTEM STATUS:</span>
                            <span class="terminal-status-value">ONLINE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-scroll-indicator">
            <div class="scroll-line"></div>
            <span>SCROLL</span>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <!-- ABOUT SECTION -->
    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <section id="about" class="section about-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt; ABOUT /&gt;</span>
                <h2 class="section-title">ABOUT <span class="text-gradient">ME</span></h2>
                <div class="section-line"></div>
            </div>

            <div class="about-grid">
                <div class="about-card glass-card">
                    <div class="about-card-header">
                        <div class="hud-corner hud-tl"></div>
                        <div class="hud-corner hud-tr"></div>
                        <div class="hud-corner hud-bl"></div>
                        <div class="hud-corner hud-br"></div>
                        <span class="about-label">// PROFILE</span>
                    </div>
                    <p class="about-text">
                        Saya merupakan lulusan Rekayasa Perangkat Lunak yang memiliki ketertarikan
                        pada pengembangan website dan teknologi. Selain memiliki pengalaman dalam
                        pembuatan website, saya juga memiliki pengalaman kerja di bidang administrasi,
                        pelayanan, engineering, dan industri.
                    </p>
                    <p class="about-text">
                        Saya terbiasa bekerja secara teliti, mengikuti prosedur, bekerja dalam tim,
                        dan mempelajari hal baru.
                    </p>
                    <div class="about-tags">
                        <span class="tag">Web Developer</span>
                        <span class="tag">RPL Graduate</span>
                        <span class="tag">Tech Enthusiast</span>
                        <span class="tag">Team Player</span>
                        <span class="tag">Fast Learner</span>
                    </div>
                </div>

                <div class="about-stats">
                    <?php foreach ($stats as $i => $stat): ?>
                    <div class="stat-card glass-card" style="--delay: <?php echo $i * 0.1; ?>s">
                        <div class="stat-value"><?php echo $stat['value']; ?></div>
                        <div class="stat-label"><?php echo $stat['label']; ?></div>
                        <div class="stat-glow"></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <!-- SKILLS SECTION -->
    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <section id="skills" class="section skills-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt; SKILLS /&gt;</span>
                <h2 class="section-title">TECHNICAL <span class="text-gradient">SKILLS</span></h2>
                <div class="section-line"></div>
            </div>

            <div class="skills-grid">
                <?php $catIndex = 0; foreach ($skills as $category => $items): ?>
                <div class="skill-category glass-card" style="--delay: <?php echo $catIndex * 0.15; ?>s">
                    <div class="skill-category-header">
                        <span class="skill-icon"><?php echo $skill_icons[$category] ?? '&#9733;'; ?></span>
                        <h3 class="skill-category-title"><?php echo strtoupper($category); ?></h3>
                    </div>
                    <div class="skill-list">
                        <?php foreach ($items as $j => $skill): ?>
                        <div class="skill-item" style="--skill-delay: <?php echo ($catIndex * 0.15) + ($j * 0.08); ?>s">
                            <div class="skill-info">
                                <span class="skill-name"><?php echo $skill['name']; ?></span>
                                <span class="skill-percent"><?php echo $skill['level']; ?>%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-bar-fill" style="--skill-level: <?php echo $skill['level']; ?>%"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php $catIndex++; endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <!-- EXPERIENCE SECTION -->
    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <section id="experience" class="section experience-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt; EXPERIENCE /&gt;</span>
                <h2 class="section-title">WORK <span class="text-gradient">EXPERIENCE</span></h2>
                <div class="section-line"></div>
            </div>

            <div class="timeline">
                <div class="timeline-line"></div>
                <?php foreach ($experiences as $i => $exp): ?>
                <div class="timeline-item <?php echo ($i % 2 === 0) ? 'timeline-left' : 'timeline-right'; ?>" style="--delay: <?php echo $i * 0.2; ?>s">
                    <div class="timeline-dot dot-<?php echo $exp['color']; ?>">
                        <div class="timeline-dot-ring"></div>
                    </div>
                    <div class="timeline-card glass-card">
                        <div class="timeline-card-header">
                            <div class="timeline-duration-badge"><?php echo $exp['duration']; ?></div>
                            <span class="timeline-type"><?php echo $exp['type']; ?></span>
                        </div>
                        <h3 class="timeline-company"><?php echo $exp['company']; ?></h3>
                        <h4 class="timeline-role"><?php echo $exp['role']; ?></h4>
                        <ul class="timeline-tasks">
                            <?php foreach ($exp['tasks'] as $task): ?>
                            <li><?php echo $task; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <!-- PROJECTS SECTION -->
    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <section id="projects" class="section projects-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt; PROJECTS /&gt;</span>
                <h2 class="section-title">SELECTED <span class="text-gradient">PROJECTS</span></h2>
                <div class="section-line"></div>
            </div>

            <?php foreach ($projects as $project): ?>
            <div class="project-showcase glass-card">
                <div class="project-header">
                    <div class="project-label">// FEATURED PROJECT</div>
                    <h3 class="project-title"><?php echo $project['title']; ?></h3>
                    <div class="project-tech">
                        <?php foreach ($project['tech'] as $t): ?>
                        <span class="tech-badge"><?php echo $t; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="project-body">
                    <p class="project-desc"><?php echo $project['description']; ?></p>
                    <div class="project-features">
                        <h4 class="features-title">Features:</h4>
                        <div class="features-grid">
                            <?php foreach ($project['features'] as $feature): ?>
                            <span class="feature-item">
                                <span class="feature-dot"></span>
                                <?php echo $feature; ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="project-actions">
                    <a href="<?php echo $project['link_project']; ?>" class="btn btn-primary">
                        <span class="btn-text">VIEW PROJECT</span>
                        <span class="btn-glow"></span>
                    </a>
                    <a href="<?php echo $project['link_source']; ?>" class="btn btn-outline">
                        <span class="btn-text">SOURCE CODE</span>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <!-- EDUCATION SECTION -->
    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <section id="education" class="section education-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt; EDUCATION /&gt;</span>
                <h2 class="section-title">MY <span class="text-gradient">EDUCATION</span></h2>
                <div class="section-line"></div>
            </div>

            <div class="education-grid">
                <?php foreach ($education as $i => $edu): ?>
                <div class="education-card glass-card" style="--delay: <?php echo $i * 0.2; ?>s">
                    <div class="edu-icon-wrapper edu-<?php echo $edu['color']; ?>">
                        <span class="edu-icon">&#127891;</span>
                    </div>
                    <div class="edu-badge"><?php echo $edu['period']; ?></div>
                    <h3 class="edu-school"><?php echo $edu['school']; ?></h3>
                    <p class="edu-major"><?php echo $edu['major']; ?></p>
                    <span class="edu-type"><?php echo $edu['type']; ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <!-- WHAT I DO SECTION -->
    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <section class="section services-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt; SERVICES /&gt;</span>
                <h2 class="section-title">WHAT I <span class="text-gradient">DO</span></h2>
                <div class="section-line"></div>
            </div>

            <div class="services-grid">
                <?php foreach ($services as $i => $service): ?>
                <div class="service-card glass-card" style="--delay: <?php echo $i * 0.15; ?>s">
                    <div class="service-icon-wrap">
                        <span class="service-symbol"><?php echo $service['symbol']; ?></span>
                    </div>
                    <h3 class="service-title"><?php echo $service['title']; ?></h3>
                    <p class="service-desc"><?php echo $service['desc']; ?></p>
                    <div class="service-line"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <!-- CONTACT SECTION -->
    <!-- ════════════════════════════════════════════════════════════════════════ -->
    <section id="contact" class="section contact-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">&lt; CONTACT /&gt;</span>
                <h2 class="section-title">LET'S <span class="text-gradient">CONNECT</span></h2>
                <div class="section-line"></div>
            </div>

            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-card glass-card">
                        <div class="contact-item">
                            <div class="contact-icon-wrap">
                                <span class="contact-icon">&#9993;</span>
                            </div>
                            <div class="contact-detail">
                                <span class="contact-label">Email</span>
                                <a href="mailto:<?php echo $profile['email']; ?>" class="contact-value">
                                    <?php echo $profile['email']; ?>
                                </a>
                            </div>
                        </div>
                        <div class="contact-divider"></div>
                        <div class="contact-item">
                            <div class="contact-icon-wrap">
                                <span class="contact-icon">&#9742;</span>
                            </div>
                            <div class="contact-detail">
                                <span class="contact-label">WhatsApp</span>
                                <span class="contact-value"><?php echo $profile['whatsapp']; ?></span>
                            </div>
                        </div>
                        <div class="contact-divider"></div>
                        <div class="contact-item">
                            <div class="contact-icon-wrap">
                                <span class="contact-icon">&#9906;</span>
                            </div>
                            <div class="contact-detail">
                                <span class="contact-label">Location</span>
                                <span class="contact-value"><?php echo $profile['location']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <form method="POST" action="#contact" class="contact-form glass-card">
                        <h3 class="form-title">Send Me a Message</h3>

                        <?php if ($form_message): ?>
                        <div class="form-alert form-alert-<?php echo $form_status; ?>">
                            <?php echo $form_message; ?>
                        </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-input" placeholder="Your name" required>
                            <div class="input-glow"></div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="your@email.com" required>
                            <div class="input-glow"></div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-input form-textarea" placeholder="Your message..." rows="5" required></textarea>
                            <div class="input-glow"></div>
                        </div>
                        <button type="submit" name="contact_submit" class="btn btn-primary btn-full">
                            <span class="btn-text">SEND MESSAGE</span>
                            <span class="btn-glow"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

