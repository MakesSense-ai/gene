<?php
session_start();

// Load questions from a separate file or define here
include 'assessment_data.php'; // Will store questions and results content

if (!isset($_SESSION["current_question_index"])) {
    $_SESSION["current_question_index"] = 0;
    $_SESSION["answers"] = [];
}

$action = $_POST["action"] ?? $_GET["action"] ?? null;
$all_questions = get_assessment_questions(); // Function from assessment_data.php

if ($action === "start_assessment") {
    $_SESSION["current_question_index"] = 0;
    $_SESSION["answers"] = [];
    // No direct echo here, the main HTML structure will handle display logic
} elseif ($action === "next_question") {
    if (isset($_POST["answer"])) {
        $_SESSION["answers"][$_SESSION["current_question_index"]] = $_POST["answer"];
    }
    $_SESSION["current_question_index"]++;
    if ($_SESSION["current_question_index"] >= count($all_questions)) {
        header("Location: results.php");
        exit;
    }
} elseif ($action === "reset") {
    session_destroy();
    header("Location: index.php");
    exit;
}

$current_question_index = $_SESSION["current_question_index"] ?? 0;
$show_landing_page = ($action !== "start_assessment" && $current_question_index === 0 && empty($_SESSION["answers"]) && $action !== 'next_question') || $action === 'reset_to_start';

if ($action === 'reset_to_start' && $current_question_index > 0) {
    $_SESSION["current_question_index"] = 0;
    $_SESSION["answers"] = [];
    $current_question_index = 0;
    $show_landing_page = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadership Level Assessment - Gene Hammett</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="container text-center py-3 sticky-top bg-light shadow-sm">
        <img src="images/GeneHammett-Logo.png" alt="Gene Hammett Logo" id="header-logo">
    </header>

    <main class="container mt-4" id="main-content">
        <?php if ($show_landing_page): ?>
        <section id="landing-page" class="text-center py-5">
            <h1 class="display-5 fw-bold">Discover Your Leadership Level</h1>
            <p class="lead col-lg-8 mx-auto mb-4">Unlock your path to greater impact. This quick assessment will help you understand your current leadership style, identify potential bottlenecks, and illuminate your roadmap for growth.</p>
            <form method="POST" action="index.php">
                <input type="hidden" name="action" value="start_assessment">
                <button type="submit" class="btn btn-primary btn-lg">Start Your Assessment</button>
            </form>
        </section>
        <?php elseif ($current_question_index < count($all_questions)): 
            $current_q_data = $all_questions[$current_question_index];
        ?>
        <section id="assessment-question-container" class="py-4">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="progress mb-4" role="progressbar" aria-label="Assessment Progress" aria-valuenow="<?= (($current_question_index + 1) / count($all_questions)) * 100 ?>" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: <?= (($current_question_index) / count($all_questions)) * 100 ?>%"></div>
                    </div>
                    <h2 class="mb-3 text-center h4">Question <?= ($current_question_index + 1) ?> of <?= count($all_questions) ?></h2>
                    <p class="lead text-center mb-4 question-text"><?= htmlspecialchars($current_q_data["question"]) ?></p>
                    <form method="POST" action="index.php" id="question-form">
                        <input type="hidden" name="action" value="next_question">
                        <?php foreach ($current_q_data["options"] as $key => $option_text): ?>
                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" name="answer" value="<?= $key ?>" class="btn btn-outline-primary btn-lg p-3 answer-button"><?= htmlspecialchars($option_text) ?></button>
                        </div>
                        <?php endforeach; ?>
                    </form>
                    <?php if ($current_question_index > 0): ?>
                    <!-- <div class="text-center mt-3">
                        <a href="index.php?action=prev_question" class="btn btn-sm btn-outline-secondary">Back</a>
                    </div> -->
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </main>

    <footer class="container text-center py-4 mt-5 border-top">
        <p class="mb-1">&copy; <?= date("Y") ?> Gene Hammett. All Rights Reserved.</p>
        <p><a href="index.php?action=reset" class="text-muted small">Reset Assessment</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
