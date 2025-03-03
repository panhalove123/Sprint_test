<div class="container mt-5">
        <h2 class="text-center">User Management</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $users = [
                    ["id" => 1, "name" => "John Doe", "email" => "john@example.com", "role" => "Admin", "created_at" => "2025-03-03"],
                    ["id" => 2, "name" => "Jane Smith", "email" => "jane@example.com", "role" => "User", "created_at" => "2025-02-28"],
                    ["id" => 3, "name" => "Alice Brown", "email" => "alice@example.com", "role" => "Editor", "created_at" => "2025-02-25"]
                ];
                
                foreach ($users as $user):
                ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['role']) ?></td>
                    <td><?= htmlspecialchars($user['created_at']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>