<?php

include_once('./_common.php');

$admin_id = 'stssoft2024'; // 새로 생성할 관리자 아이디
$admin_pass = sql_password('qweasd123!'); // 설정할 비밀번호

// 관리자 계정이 이미 존재하는지 확인
$sql = "SELECT COUNT(*) AS cnt FROM {$g5['member_table']} WHERE mb_id = '$admin_id'";
$result = sql_fetch($sql);

if ($result['cnt'] > 0) {
    // 계정이 이미 존재하면 경고 메시지 출력
    alert('해당 관리자 ID가 이미 존재합니다. 다른 ID를 사용하세요.', G5_URL);
} else {
    // 계정이 존재하지 않으면 새로 생성
    $sql = "INSERT INTO {$g5['member_table']} (mb_id, mb_password, mb_level) VALUES ('$admin_id', '$admin_pass', 10)";
    sql_query($sql);
    
    alert('새 관리자 계정이 성공적으로 생성되었습니다. 확인 후 이 파일은 반드시 삭제하세요.', G5_URL);
}

?>
