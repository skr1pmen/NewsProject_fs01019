<?php
?>
<main>
    <div class="container">
        <section class="create_news">
            <div class="header">
                <h1 class="title">
                    <i class="fas fa-pen-fancy"></i>
                    Создание новости
                </h1>
                <p class="subtitle">
                    Заполните все поля для публикации новой новости
                </p>
            </div>

            <form class="form" action="/admin/create" method="post" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="title" class="form_label required">
                        <i class="fas fa-heading"></i>
                        Заголовок новости
                    </label>
                    <input
                            type="text"
                            id="title"
                            name="title"
                            placeholder="Введите заголовок новости..."
                            required
                            maxlength="200"
                    >
                    <span class="form_hint">Максимум 200 символов</span>
                </div>

                <div class="form_group">
                    <label for="lead" class="form_label required">
                        <i class="fas fa-paragraph"></i>
                        Краткое описание (лид)
                    </label>
                    <textarea
                            id="lead"
                            name="lead"
                            class="form_textarea"
                            placeholder="Краткое описание новости (1-2 предложения)..."
                            rows="2"
                            required
                            maxlength="300"
                    ></textarea>
                    <span class="form_hint">Максимум 300 символов</span>
                </div>

                <div class="form_group">
                    <label for="content" class="form_label required">
                        <i class="fas fa-align-left"></i>
                        Полный текст новости
                    </label>
                    <textarea
                            id="content"
                            name="content"
                            class="form_textarea large"
                            placeholder="Введите полный текст новости..."
                            rows="10"
                            required
                            minlength="100"
                    ></textarea>
                    <span class="form_hint">Минимум 100 символов</span>
                </div>

                <div class="form_group">
                    <label for="image" class="form_label">
                        <i class="fas fa-image"></i>
                        Изображение
                    </label>
                    <div class="form_file_upload">
                        <input
                                type="file"
                                id="image"
                                name="image"
                                class="form_file_input"
                                accept="image/*"
                        >
                        <label for="image" class="form_file_label">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Выберите изображение или перетащите сюда</span>
                            <small>PNG, JPG, WEBP до 5MB</small>
                        </label>
                        <div class="form_file_preview" id="imagePreview">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn">
                    <i class="fas fa-paper-plane"></i>
                    Опубликовать новость
                </button>
            </form>
        </section>
    </div>

    <script>
        document.getElementById('image').addEventListener('change', function (e) {
            const preview = document.getElementById('imagePreview');
            preview.innerHTML = '';

            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = 'Превью изображения';
                    preview.appendChild(img);
                };
                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>
</main>
