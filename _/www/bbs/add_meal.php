
<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/register.lib.php');
header('Content-Type: application/json'); // JSON 형식으로 응답
// POST로 받은 데이터 가져오기
$name = $_POST['name'];
$description = $_POST['description'];
$stock = $_POST['stock'];
$date = $_POST['date'];


// 데이터 유효성 검사
$errors = [];

if (empty($name)) {
    $errors[] = "이름은 필수 항목입니다.";
}

if (empty($description)) {
    $errors[] = "설명은 필수 항목입니다.";
}

if (!is_numeric($stock) || $stock < 0) {
    $errors[] = "남은 급식 수는 양수이어야합니다.";
}

if (empty($date)) {
    $errors[] = "날짜입력은 필수입니다.";
} elseif (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $date)) {
    $errors[] = "날짜 형식은 YYYY-MM-DD 입니다";
}

// 오류가 있으면 화면에 출력하고 종료
if (!empty($errors)) {
    echo json_encode(['status' => 'error', 'message' => implode(', ', $errors)]);
    exit;
}
// SQL 삽입 쿼리 작성 (MealID는 자동으로 생성되므로 제외)
$sql = "insert into Meal (Name, Description, Stock, Date) VALUES ('$name', '$description', '$stock', '$date')";

$row = sql_fetch($sql);

echo json_encode(['status' => 'success', 'message' => $row]);
