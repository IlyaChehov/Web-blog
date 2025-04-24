<?php
require_once DIR_VIEWS . '/templates/head.tpl.php';
require_once DIR_VIEWS . '/templates/header.tpl.php';
?>

<main class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mb-4">О блоге</h1>

            <div class="card mb-4">
                <img src="images/about.jpg" class="card-img-top" alt="About Blog">
                <div class="card-body">
                    <h2 class="card-title">Основная задача</h2>
                    <p class="card-text">Освоить полученные теоритические знания на практике</p>
                    <h2 class="mt-4">Автор</h2>
                    <p>Блог разработал
                    </p>

                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avatar bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 60px; height: 60px;">
                                        <span class="fs-4">АИ</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-0">Илья</h5>
                                    <p class="text-muted mb-0">Разработчик</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mt-4">Присоединяйтесь</h2>
                    <p>Вы можете:</p>
                    <ul>
                        <li>Зарегистрироваться на сайте и комментировать статьи</li>
                        <li>Предложить свою статью для публикации</li>
                        <li>Подписаться на мои социальные сети</li>
                    </ul>

                    <div class="mt-4">
                        <a href="signup.html" class="btn btn-primary me-2">Зарегистрироваться</a>
                        <a href="index.html" class="btn btn-outline-secondary">Читать статьи</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="sidebar sticky-lg-top">
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
