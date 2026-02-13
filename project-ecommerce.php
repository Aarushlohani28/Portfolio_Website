<?php $pageTitle = 'E-Commerce Store - My Portfolio'; $currentPage = 'projects'; include 'includes/header.php'; ?>

    <section class="container project-detail">
        <h2 class="section-title">E-Commerce Store</h2>
        <div class="project-content">
            <div class="project-image-large">
                <img src="images/ecommerce_project_thumbnail.png" alt="E-Commerce Store Screenshot" onerror="this.style.display='none'">
                <div class="placeholder-text" style="display:none; color: var(--text-color);">[Image Placeholder]</div>
            </div>
            <div class="project-description">
                <p>A fully responsive online store layout featuring a dynamic product listing, shopping cart functionality, and a checkout simulation. Users can filter products by category and price.</p>
                <br>
                <h3>Technologies Used</h3>
                <ul class="tech-list">
                    <li>HTML5</li>
                    <li>CSS3 (Flexbox & Grid)</li>
                    <li>JavaScript (ES6+)</li>
                    <li>Fetch API</li>
                </ul>
                <div class="project-buttons">
                    <a href="#" class="btn">View Live Demo</a>
                    <a href="#" class="btn-small">View Source Code</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
