<?php $pageTitle = 'About Me - My Portfolio'; $currentPage = 'about'; include 'includes/header.php'; ?>

    <section id="about" class="container">
        <h2 class="section-title">About Me</h2>
        <div class="about-content">
            <div class="about-image">
                <img src="images/profile.jpg" alt="Profile Photo">
            </div>
            <div class="about-text">
                <p>I am a passionate developer with a knack for building responsive and user-friendly websites. I love solving problems and turning ideas into reality using code.</p>
                <br>
                <h3>My Skills</h3>
                <div class="skills">
                    <span class="skill-tag">HTML5</span>
                    <span class="skill-tag">CSS3</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">Git</span>
                </div>
                <br>
                <a href="resume.pdf" class="btn" download>Download Resume <i class="fas fa-download"></i></a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
