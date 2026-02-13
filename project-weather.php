<?php $pageTitle = 'Weather App - My Portfolio'; $currentPage = 'projects'; include 'includes/header.php'; ?>

    <section class="container project-detail">
        <h2 class="section-title">Weather App</h2>
        <div class="project-content">
            <div class="project-image-large">
                <img src="images/weather_app_thumbnail.png" alt="Weather App Screenshot" onerror="this.style.display='none'">
            </div>
            <div class="project-description">
                <p>An interactive weather dashboard that fetches real-time weather data from the OpenWeatherMap API. It displays current conditions, humidity, wind speed, and a 5-day forecast.</p>
                <br>
                <h3>Technologies Used</h3>
                <ul class="tech-list">
                    <li>JavaScript (Async/Await)</li>
                    <li>OpenWeatherMap API</li>
                    <li>CSS3 (Animations)</li>
                </ul>
                <div class="project-buttons">
                    <a href="#" class="btn">View Live Demo</a>
                    <a href="#" class="btn-small">View Source Code</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
