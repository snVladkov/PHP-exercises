<?php
    // страница login
?>

<form class="border rounded p-4 w-50 mx-auto">
    <h3 class="text-center">Вход в системата</h3>
    <div class="mb-3">
        <label for="email" class="form-label">Имейл</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Парола</label>
        <input type="password" class="form-control" id="password">
    </div>
    <button type="submit" class="btn btn-primary mx-auto">Вход</button>
</form>

<!-- масив с потребителски данни за логин  -->
$users = [
    [
        'email' => 'john@gmail.com',
        'password' => '123456',
        'name' => 'John Jones',
    ],
    [
        'email' => 'ana@gmail.com',
        'password' => 'qwerty',
        'name' => 'Ana Smith',
    ],
    [
        'email' => 'ivan@gmail.com',
        'password' => 'asd123',
        'name' => 'Ivan Ivanov',
    ],
];
