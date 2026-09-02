<?php
/** @var array $user */
?>
<main>
    <div class="container">

        <!-- Профиль пользователя -->
        <section class="profile">
            <div class="header">
                <div class="user">
                    <div class="avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="info">
                        <h1 class="username"><?= $user['login'] ?></h1>
                        <p class="role"><?= $user['is_admin'] ? "Администратор" : "Пользователь" ?></p>
                    </div>
                    <a href="/user/logout" class="btn">Выход</a>
                </div>
            </div>

            <div class="body">
                <!-- Изменение пароля -->
                <div class="section">
                    <h2 class="title">
                        <i class="fas fa-key"></i>
                        Изменение пароля
                    </h2>

                    <form class="form" id="passwordForm">
                        <!-- Текущий пароль -->
                        <div class="form_group">
                            <label for="current_password" class="form_label required">
                                <i class="fas fa-lock"></i>
                                Текущий пароль
                            </label>
                            <div class="form_input_wrapper">
                                <i class="fas fa-lock form_input_icon"></i>
                                <input
                                    type="password"
                                    id="current_password"
                                    name="current_password"
                                    class="form_input form_input--with_icon"
                                    placeholder="Введите текущий пароль"
                                    required
                                >
                                <button type="button" class="password_toggle" onclick="togglePassword('current_password', 'currentIcon')">
                                    <i class="fas fa-eye" id="currentIcon"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Новый пароль -->
                        <div class="form_group">
                            <label for="new_password" class="form_label required">
                                <i class="fas fa-key"></i>
                                Новый пароль
                            </label>
                            <div class="form_input_wrapper">
                                <i class="fas fa-key form_input_icon"></i>
                                <input
                                    type="password"
                                    id="new_password"
                                    name="new_password"
                                    class="form_input form_input--with_icon"
                                    placeholder="Введите новый пароль"
                                    required
                                    minlength="6"
                                >
                                <button type="button" class="password_toggle" onclick="togglePassword('new_password', 'newIcon')">
                                    <i class="fas fa-eye" id="newIcon"></i>
                                </button>
                            </div>
                            <span class="form_hint">Минимум 6 символов</span>
                        </div>

                        <!-- Подтверждение нового пароля -->
                        <div class="form_group">
                            <label for="confirm_password" class="form_label required">
                                <i class="fas fa-check-double"></i>
                                Подтверждение нового пароля
                            </label>
                            <div class="form_input_wrapper">
                                <i class="fas fa-check-double form_input_icon"></i>
                                <input
                                    type="password"
                                    id="confirm_password"
                                    name="confirm_password"
                                    class="form_input form_input--with_icon"
                                    placeholder="Повторите новый пароль"
                                    required
                                >
                                <button type="button" class="password_toggle" onclick="togglePassword('confirm_password', 'confirmIcon')">
                                    <i class="fas fa-eye" id="confirmIcon"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Сообщение об ошибке -->
                        <div class="auth_error" id="profileError" style="display: none;">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>Ошибка изменения пароля</span>
                        </div>

                        <!-- Кнопки -->
                        <div class="actions">
                            <button type="submit" class="btn submit">
                                <i class="fas fa-save"></i>
                                Сохранить пароль
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
    function togglePassword(inputId, iconId) {
        const passwordInput = document.getElementById(inputId);
        const icon = document.getElementById(iconId);

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