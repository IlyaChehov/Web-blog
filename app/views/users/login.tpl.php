<?php
require_once DIR_VIEWS . '/templates/head.tpl.php';
require_once DIR_VIEWS . '/templates/header.tpl.php';
?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h1 class="card-title text-center mb-4">Вход в аккаунт</h1>

                    <form id="loginForm" novalidate>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                            <div class="invalid-feedback">Пожалуйста, введите корректный email</div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Пароль</label>
                            <input type="password" class="form-control" id="password" required minlength="6">
                            <div class="invalid-feedback">Пароль должен содержать минимум 6 символов</div>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Запомнить меня</label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Войти</button>
                        </div>

                        <div class="text-center mt-3">
                            <a href="#">Забыли пароль?</a>
                        </div>

                        <div class="text-center mt-4">
                            <p class="mb-0">Нет аккаунта? <a href="signup.html">Зарегистрироваться</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once DIR_VIEWS . '/templates/footer.tpl.php';
