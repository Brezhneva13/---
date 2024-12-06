<?php
include 'db.php'; // Подключение к БД

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $column1_value = $_POST['column1']; // Значение для обновления
    $column2_value = $_POST['column2']; // Значение для обновления

    // Обновление данных
    $sql = "UPDATE your_table SET column1 = ?, column2 = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssi', $column1_value, $column2_value, $id);
    $stmt->execute();
    echo "Данные обновлены!";
}
?>

<!-- HTML форма для обновления -->
<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- ID записи -->
    <input type="text" name="column1" placeholder="Значение 1" required>
    <input type="text" name="column2" placeholder="Значение 2" required>
    <button type="submit">Обновить</button>
</form>
