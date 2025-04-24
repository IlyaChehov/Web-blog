<?php
require_once DIR_VIEWS . '/templates/head.tpl.php';
require_once DIR_VIEWS . '/templates/header.tpl.php';
?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h1 class="card-title text-center mb-4">Регистрация</h1>

                    <form id="signupForm" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label">Имя</label>
                            <input type="text" class="form-control" id="name" required>
                            <div class="invalid-feedback">Пожалуйста, введите ваше имя</div>
                        </div>

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

                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Подтверждение пароля</label>
                            <input type="password" class="form-control" id="confirmPassword" required>
                            <div class="invalid-feedback">Пароли не совпадают</div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                        </div>

                        <div class="text-center mt-4">
                            <p class="mb-0">Уже есть аккаунт? <a href="login.html">Войти</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once DIR_VIEWS . '/templates/footer.tpl.php';
