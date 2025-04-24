<?php
require_once DIR_VIEWS . '/templates/head.tpl.php';
require_once DIR_VIEWS . '/templates/header.tpl.php';
?>

<main class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mb-4">Последние статьи</h1>

            <article class="card mb-4 post-card">
                <img src="images/post1.jpg" class="card-img-top" alt="Post Image">
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <span class="badge bg-primary me-2">#технологии</span>
                        <span class="badge bg-success">#программирование</span>
                    </div>
                    <h2 class="card-title">Новые тенденции в веб-разработке 2023</h2>
                    <p class="card-text">Обзор самых интересных технологий и подходов, которые стоит освоить в этом
                        году для современного веб-разработчика.</p>
                    <a href="post.html" class="btn btn-outline-primary">Читать далее</a>
                </div>
                <div class="card-footer text-muted">
                    Опубликовано 15 октября 2025 • Автор: Я
                </div>
            </article>

            <article class="card mb-4 post-card">
                <img src="images/post2.jpg" class="card-img-top" alt="Post Image">
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <span class="badge bg-danger me-2">#дизайн</span>
                        <span class="badge bg-warning text-dark">#ux</span>
                    </div>
                    <h2 class="card-title">Принципы доступного дизайна</h2>
                    <p class="card-text">Как создавать интерфейсы, которые будут удобны для всех пользователей,
                        включая людей с ограниченными возможностями.</p>
                    <a href="post.html" class="btn btn-outline-primary">Читать далее</a>
                </div>
                <div class="card-footer text-muted">
                    Опубликовано 10 октября 2025 • Автор: Я
                </div>
            </article>

            <article class="card mb-4 post-card">
                <img src="images/post3.jpg" class="card-img-top" alt="Post Image">
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <span class="badge bg-info me-2">#продуктивность</span>
                        <span class="badge bg-secondary">#советы</span>
                    </div>
                    <h2 class="card-title">Как организовать рабочее пространство</h2>
                    <p class="card-text">Практические советы по настройке рабочего места для максимальной
                        продуктивности и комфорта.</p>
                    <a href="post.html" class="btn btn-outline-primary">Читать далее</a>
                </div>
                <div class="card-footer text-muted">
                    Опубликовано 5 октября 2025 • Автор: Я
                </div>
            </article>

            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Назад</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Вперед</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="col-lg-4">
            <div class="sidebar sticky-lg-top">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">О блоге</h3>
                        <p class="card-text">Web Blog - учебный проект на PHP</p>
                        <a href="about.html" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Последние посты</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="post.html">Новые тенденции в веб-разработке 2023</a></li>
                            <li class="mb-2"><a href="post.html">Принципы доступного дизайна</a></li>
                            <li class="mb-2"><a href="post.html">Как организовать рабочее пространство</a></li>
                            <li class="mb-2"><a href="post.html">Основы React для начинающих</a></li>
                            <li><a href="post.html">10 инструментов для дизайнера</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Теги</h3>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="badge bg-primary text-decoration-none">#технологии</a>
                            <a href="#" class="badge bg-success text-decoration-none">#программирование</a>
                            <a href="#" class="badge bg-danger text-decoration-none">#дизайн</a>
                            <a href="#" class="badge bg-warning text-dark text-decoration-none">#ux</a>
                            <a href="#" class="badge bg-info text-decoration-none">#продуктивность</a>
                            <a href="#" class="badge bg-secondary text-decoration-none">#советы</a>
                            <a href="#" class="badge bg-dark text-decoration-none">#react</a>
                            <a href="#" class="badge bg-primary text-decoration-none">#javascript</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once DIR_VIEWS . '/templates/footer.tpl.php';
