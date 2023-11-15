<!-- resources/views/form.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Sample Form</title>
</head>

<body>

    <h1>Sample Form</h1>

    <form action="{{ route('submitForm') }}" method="post">
        @csrf <!-- Laravel 8 以後的版本需要使用 @csrf 來防止 CSRF 攻擊 -->

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br>

        <button type="submit">Submit</button>
    </form>

</body>

</html>