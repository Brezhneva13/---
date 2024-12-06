<?php
include 'db.php'; // Подключение к БД

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; // ID записи для удаления

    // Удаление данных
    $sql = "DELETE FROM your_table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    echo "Запись удалена!";
}
?>

<!-- HTML форма для удаления -->
<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- ID записи -->
    <button type="submit">Удалить</button>
</form>
