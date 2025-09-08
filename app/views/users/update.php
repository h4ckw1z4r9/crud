<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users/update</title>
</head>
<body>
    <h1>Welcome to Users/update View</h1>
    <form action="<?=site_url('user/update/'.$user['id']);?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?=$user['username'];?>" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?=$user['email'];?>" required>
        <button type="submit">Update User</button>
    </form>
</body>
</html>