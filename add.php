<?php
include 'db.php'; // Подключение к БД

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $column1_value = $_POST['column1']; // Значение для добавления
    $foreign_key_id = $_POST['foreign_key_id']; // Внешний ключ

    // Добавление данных
    $sql = "INSERT INTO your_table (column1, foreign_key_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $column1_value, $foreign_key_id);
    $stmt->execute();
    echo "Запись добавлена!";
}
?>

<!-- HTML форма для добавления -->
<form method="POST" action="">
    <input type="text" name="column1" placeholder="Значение" required>
    <input type="number" name="foreign_key_id" placeholder="ID внешнего ключа" required>
    <button type="submit">Добавить</button>
</form>
