<?php
require_once('../controllers/pageAccess.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Exam</title>
</head>

<body>
    <div id="smallScreen"></div>
    <div class="desktop">
        <div class="container">
            <?php include_once('student_navbar.php') ?>
        </div>
        <div class="main">
            <?php include_once('student_sideNavbar.html') ?>
            <div class="main-body">
                <div class="content-header">
                    <div class="title">
                        <level>Exam</level>
                    </div>

                </div>

                 <div class="admin-table">
    <?php
            echo "
        <table>
        <tr>
            <th>Subject</th>
            <th>Exam Link</th>
        </tr>
        ";
            require_once('../model/studentModel.php');
            $exams = exam();
            foreach ($exams as $exam) {
                echo "
                <tr>
                    <td>{$exam['examName']}</td>
                    <td><a href='{$exam['links']}' >{$exam['links']}</a></td>
                </tr>
                ";
            } ?>
    </div>
                

      


            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/style.js"></script>
</body>

</html>






