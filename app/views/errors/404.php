<?php
require_once DIR_VIEWS . '/templates/head.tpl.php';
require_once DIR_VIEWS . '/templates/header.tpl.php';
?>

<main class="container">
    <div class="error-container">
        <div class="error-card card p-5">
            <div class="error-icon error-animation">
                <i class="bi bi-exclamation-triangle-fill"></i>
            </div>
            <h1 class="error-title">404</h1>
            <p class="error-subtitle">Упс! Страница, которую вы ищете, не существует \o/</p>
            <p class="mb-4">Возможно, она была перемещена или удалена. Попробуйте вернуться на главную страницу или воспользуйтесь поиском.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="index.html" class="btn btn-primary">
                    <i class="bi bi-house-door me-2"></i>На главную
                </a>
                <button class="btn btn-outline-secondary" onclick="history.back()">
                    <i class="bi bi-arrow-left me-2"></i>Назад
                </button>
            </div>
        </div>
    </div>
</main>

<?php
require_once DIR_VIEWS . '/templates/footer.tpl.php';
