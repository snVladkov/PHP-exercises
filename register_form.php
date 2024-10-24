<?php
    // страница login
?>

<form class="border rounded p-4 w-50 mx-auto">
    <h3 class="text-center">Регистрация</h3>
    <div class="mb-3">
        <label for="names" class="form-label">Имена</label>
        <input type="names" class="form-control" id="names">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Имейл</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Парола</label>
        <input type="password" class="form-control" id="password">
    </div>
    <div class="mb-3">
        <label for="repeat_password" class="form-label">Повтори парола</label>
        <input type="repeat_password" class="form-control" id="repeat_password">
    </div>
    <button type="submit" class="btn btn-primary mx-auto">Регистрирай се</button>
</form>
