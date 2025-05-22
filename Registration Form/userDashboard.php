<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <a href="logout.php" class="bg-red-600 text-white px-4 py-2 rounded inline-block">Log Out</a>
  <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow-md">
    <h2 class="text-2xl font-semibold mb-4">User Dashboard</h2>

    <table class="min-w-full table-auto border border-gray-200">
      <thead>
        <tr class="bg-gray-200 text-gray-700">
          <th class="px-4 py-2 border">ID</th>
          <th class="px-4 py-2 border">Username</th>
          <th class="px-4 py-2 border">Gmail</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-center hover:bg-gray-100">
          <td class="px-4 py-2 border"><?php echo $_SESSION["ID"];?></td>
          <td class="px-4 py-2 border"><?php echo $_SESSION["username"];?></td>
          <td class="px-4 py-2 border"><?php echo $_SESSION["gmail"];?></td>
          <?php "<td class=px-4 py-2 border>"."hello"."</td>" ?>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>

</body>
</html>
