<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            width: 10%;
            /* 調整表單寬度 */
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            padding: 10px;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
    <title>Add New Entry</title>
</head>

<body>

    <h2>Add New Entry</h2>

    <form action="/member/insert" method="post">
        @csrf <!-- Laravel CSRF token -->
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" style="width: 200%;" required>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" style="width: 250%;" required>

        <button type="submit">送出</button>
    </form>

</body>

</html>