<?php
include 'db.php'; // Подключение к БД

// Параметры для пагинации
$limit = 10; // Количество записей на странице
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Запрос на выборку данных
$sql = "SELECT * FROM your_table LIMIT ? OFFSET ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ii', $limit, $offset);
$stmt->execute();
$result = $stmt->get_result();

// Отображение данных
while ($row = $result->fetch_assoc()) {
    echo "<div>{$row['column_name']}</div>"; // Замените column_name на имя вашего поля
}

// Пагинация
$total = $conn->query("SELECT COUNT(*) FROM your_table")->fetch_row()[0];
$total_pages = ceil($total / $limit);
for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a href='view.php?page=$i'>$i</a> ";
}
?>
