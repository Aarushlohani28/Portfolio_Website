<?php $pageTitle = 'Projects - My Portfolio'; $currentPage = 'projects'; include 'includes/header.php'; ?>

    <section id="projects" class="container">
        <h2 class="section-title">My Projects</h2>
        <div class="projects-grid">
            <a href="project-ecommerce.php" class="project-card-link">
                <div class="project-card">
                    <div class="card-image">
                        <img src="images/ecommerce_project_thumbnail.png" alt="E-Commerce" onerror="this.style.display='none'">
                    </div>
                    <div class="project-info">
                        <h3>E-Commerce Store</h3>
                        <p>A fully responsive online store layout with product listings and a cart interface.</p>
                        <span class="btn-small">View Details</span>
                    </div>
                </div>
            </a>
            
            <a href="project-weather.php" class="project-card-link">
                <div class="project-card">
                    <div class="card-image">
                        <img src="images/weather_app_thumbnail.png" alt="Weather App" onerror="this.style.display='none'">
                    </div>
                    <div class="project-info">
                        <h3>Weather App</h3>
                        <p>An interactive weather dashboard fetching real-time data from an API.</p>
                        <span class="btn-small">View Details</span>
                    </div>
                </div>
            </a>

            <a href="project-taskmanager.php" class="project-card-link">
                <div class="project-card">
                    <div class="card-image">
                        <img src="images/task_manager_thumbnail.png" alt="Task Manager" onerror="this.style.display='none'">
                    </div>
                    <div class="project-info">
                        <h3>Task Manager</h3>
                        <p>A To-Do list application to manage daily tasks with local storage support.</p>
                        <span class="btn-small">View Details</span>
                    </div>
                </div>
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
