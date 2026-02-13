<?php $pageTitle = 'Task Manager - My Portfolio'; $currentPage = 'projects'; include 'includes/header.php'; ?>

    <section class="container project-detail">
        <h2 class="section-title">Task Manager</h2>
        <div class="project-content">
            <div class="project-image-large">
                <img src="images/task_manager_thumbnail.png" alt="Task Manager Screenshot" onerror="this.style.display='none'">
            </div>
            <div class="project-description">
                <p>A simple yet powerful To-Do list application. Users can add tasks, mark them as complete, and delete them. Data is persisted using Local Storage so tasks aren't lost on refresh.</p>
                <br>
                <h3>Technologies Used</h3>
                <ul class="tech-list">
                    <li>DOM Manipulation</li>
                    <li>Local Storage API</li>
                    <li>Vanilla JavaScript</li>
                </ul>
                <div class="project-buttons">
                    <a href="#" class="btn">View Live Demo</a>
                    <a href="#" class="btn-small">View Source Code</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
