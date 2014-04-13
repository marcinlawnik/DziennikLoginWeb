<?php
    require dirname(__FILE__).'/../classes/gradeChartGenerator.php';
    $chartGenerator = new graphReportGenerator();
    $chartGenerator->setDatabaseConnectionData(DB_HOST2, DB_NAME2, DB_USER2, DB_PASS2);
    $chartGenerator->setUserId($_SESSION['user_id']);
    $chartGenerator->executeProcessing();
?>