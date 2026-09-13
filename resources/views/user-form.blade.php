<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }

        .form-container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="form-container">

    <h2>Create User</h2>

    <form action="/test-request" method="post">

        @csrf
          <!-- @method('PUT') -->

        <label>Name</label>
        <input type="text" name="name" placeholder="Enter name">

        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email">

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">

        <label>Phone</label>
        <input type="text" name="phone" placeholder="Enter phone">

        <button type="submit">Submit</button>

    </form>

</div>

</body>
</html>