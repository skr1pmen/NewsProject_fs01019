<?php
?>
<div class="auth_page">
    <div class="auth_container">
        <div class="auth_box auth_box--register">
            <div class="auth_logo">
                <a href="/" class="logo">News<span>Portal</span></a>
                <p class="subtitle">Создайте новый аккаунт</p>
            </div>

            <!-- Форма регистрации -->
            <form class="auth_form" action="/register" method="post" enctype="multipart/form-data">
                <!-- Имя -->
                <div class="form_group">
                    <label for="first_name" class="form_label required">
                        <i class="fas fa-user"></i>
                        Имя
                    </label>
                    <div class="form_input_wrapper">
                        <i class="fas fa-user form_input_icon"></i>
                        <input
                                type="text"
                                id="first_name"
                                name="first_name"
                                class="form_input form_input--with_icon"
                                placeholder="Введите ваше имя"
                                required
                                autofocus
                        >
                    </div>
                </div>

                <!-- Фамилия (опционально) -->
                <div class="form_group">
                    <label for="last_name" class="form_label">
                        <i class="fas fa-user-tag"></i>
                        Фамилия
                        <span class="form_label_optional">(необязательно)</span>
                    </label>
                    <div class="form_input_wrapper">
                        <i class="fas fa-user-tag form_input_icon"></i>
                        <input
                                type="text"
                                id="last_name"
                                name="last_name"
                                class="form_input form_input--with_icon"
                                placeholder="Введите вашу фамилию"
                        >
                    </div>
                </div>

                <!-- Логин -->
                <div class="form_group">
                    <label for="login" class="form_label required">
                        <i class="fas fa-signature"></i>
                        Логин
                    </label>
                    <div class="form_input_wrapper">
                        <i class="fas fa-signature form_input_icon"></i>
                        <input
                                type="text"
                                id="login"
                                name="login"
                                class="form_input form_input--with_icon"
                                placeholder="Придумайте уникальный логин"
                                required
                                minlength="3"
                                maxlength="20"
                        >
                    </div>
                    <span class="form_hint">От 3 до 20 символов, только латиница и цифры</span>
                </div>

                <!-- Пароль -->
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
                                placeholder="Придумайте надёжный пароль"
                                required
                                minlength="6"
                        >
                        <button type="button" class="password_toggle" onclick="togglePassword()">
                            <i class="fas fa-eye" id="passwordIcon"></i>
                        </button>
                    </div>
                    <span class="form_hint">Минимум 6 символов</span>
                </div>

                <!-- Подтверждение пароля -->
                <div class="form_group">
                    <label for="password_confirm" class="form_label required">
                        <i class="fas fa-check-double"></i>
                        Подтверждение пароля
                    </label>
                    <div class="form_input_wrapper">
                        <i class="fas fa-check-double form_input_icon"></i>
                        <input
                                type="password"
                                id="password_confirm"
                                name="password_confirm"
                                class="form_input form_input--with_icon"
                                placeholder="Повторите пароль"
                                required
                        >
                        <button type="button" class="password_toggle" onclick="toggleConfirmPassword()">
                            <i class="fas fa-eye" id="confirmPasswordIcon"></i>
                        </button>
                    </div>
                </div>

                <!-- Аватарка (опционально) -->
                <div class="form_group">
                    <label for="avatar" class="form_label">
                        <i class="fas fa-image"></i>
                        Аватарка
                        <span class="form_label_optional">(необязательно)</span>
                    </label>
                    <div class="form_file_upload avatar">
                        <input
                                type="file"
                                id="avatar"
                                name="avatar"
                                class="form_file_input"
                                accept="image/*"
                        >
                        <div class="form_file_avatar_preview" id="avatarPreview">
                            <i class="fas fa-user-circle"></i>
                            <span>Выберите аватарку</span>
                            <small>PNG, JPG, WEBP до 2MB</small>
                        </div>
                    </div>
                </div>

                <!-- Кнопка регистрации -->
                <button type="submit" class="btn auth_form__submit">
                    <i class="fas fa-user-plus"></i>
                    Зарегистрироваться
                </button>

                <!-- Сообщение об ошибке -->
                <div class="auth_error" id="authError" style="display: none;">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>Ошибка регистрации. Проверьте введённые данные.</span>
                </div>

                <!-- Вход -->
                <div class="auth_footer">
                    <p>
                        Уже есть аккаунт?
                        <a href="/user/login" class="auth_register_link">
                            Войти
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

    function toggleConfirmPassword() {
        const passwordInput = document.getElementById('password_confirm');
        const icon = document.getElementById('confirmPasswordIcon');

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

    // Превью аватарки
    document.getElementById('avatar').addEventListener('change', function (e) {
        const preview = document.getElementById('avatarPreview');

        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                // Очищаем превью
                preview.innerHTML = '';

                // Создаем изображение
                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = 'Аватарка';



                preview.appendChild(img);
                preview.classList.add('has-image');
            };
            reader.readAsDataURL(this.files[0]);
        }
    });

    function resetAvatarPreview() {
        const preview = document.getElementById('avatarPreview');
        preview.innerHTML = `
                <i class="fas fa-user-circle"></i>
                <span>Выберите аватарку</span>
                <small>PNG, JPG, WEBP до 2MB</small>
            `;
        preview.classList.remove('has-image');
    }
</script>
