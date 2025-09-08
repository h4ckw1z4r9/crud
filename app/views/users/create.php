<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users/create</title>
</head>
<body>
    <h1>Welcome to Users/create View</h1>
    <form action="<?=site_url('user/create');?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Create User</button>
    </form>
</body>
</html>