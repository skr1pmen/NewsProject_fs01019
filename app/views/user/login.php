<?php
?>
<div class="auth_page">
    <div class="auth_container">
        <div class="auth_box">
            <div class="auth_logo">
                <a href="/" class="logo">News<span>Portal</span></a>
                <p class="subtitle">Войдите в свой аккаунт</p>
            </div>

            <form class="auth_form" action="" method="post">
                <div class="form_group">
                    <label for="login" class="form_label required">
                        <i class="fas fa-user"></i>
                        Логин или Email
                    </label>
                    <div class="form_input_wrapper">
                        <i class="fas fa-user form_input_icon"></i>
                        <input
                                type="text"
                                id="login"
                                name="login"
                                class="form_input fwith_icon"
                                placeholder="Введите логин или email"
                                required
                                autofocus
                        >
                    </div>
                </div>

                <div class="form_group">
                    <label for="password" class="form_label required">
                        <i class="fas fa-lock"></i>
                        Пароль
                    </label>
                    <div class="form_input_wrapper">
                        <i class="fas fa-lock form_input_icon"></i>
                        <input
                                type="password"
                                id="password"
                                name="password"
                                class="form_input form_input--with_icon"
                                placeholder="Введите пароль"
                                required
                        >
                        <button type="button" class="password_toggle" onclick="togglePassword()">
                            <i class="fas fa-eye" id="passwordIcon"></i>
                        </button>
                    </div>
                </div>

                <div class="form_options">
                    <div class="form_checkbox">
                        <input type="checkbox" id="remember" name="remember" checked>
                        <label for="remember">
                            Запомнить меня
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn">
                    <i class="fas fa-sign-in-alt"></i>
                    Войти
                </button>

                <div class="auth_error" id="authError" style="display: none;">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>Неверный логин или пароль. Попробуйте снова.</span>
                </div>

                <div class="auth_footer">
                    <p>
                        Нет аккаунта?
                        <a href="/user/register" class="auth_register_link">
                            Зарегистрироваться
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const icon = document.getElementById('passwordIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>
