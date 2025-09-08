<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users/view</title>
    <link rel="stylesheet" href="<?=base_url();?>public/style.css">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-10">

    <h1 class="text-3xl font-bold mb-8 text-gray-800">Welcome to Users/view</h1>

    <div class="overflow-x-auto w-full max-w-4xl bg-white shadow-md rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach($users as $user): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?=$user['id'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?=$user['username'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?=$user['email'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 space-x-2">
                            <a href="<?=site_url('user/update/'.$user['id']);?>" class="text-indigo-600 hover:text-indigo-900">Update</a>
                            <span>|</span>
                            <a href="<?=site_url('user/delete/'.$user['id']);?>" class="text-red-600 hover:text-red-900">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <a href="<?=site_url('user/create');?>" class="mt-6 inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
        Create Record
    </a>

</body>
</html>
