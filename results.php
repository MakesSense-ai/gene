<?php
session_start();
include 'assessment_data.php'; // Contains get_assessment_questions() and get_leadership_level_details()

if (!isset($_SESSION["answers"]) || empty($_SESSION["answers"])) {
    // Redirect to start if no answers are found
    header("Location: index.php?action=reset");
    exit;
}

$answers = $_SESSION["answers"];
$answer_counts = array_count_values($answers);
arsort($answer_counts); // Sort by frequency, highest first
$dominant_answer_key = key($answer_counts); // Get the key of the most frequent answer (a, b, c, d, or e)

$all_level_details = get_leadership_level_details();
$user_level_details = $all_level_details[$dominant_answer_key] ?? $all_level_details["a"]; // Default to 'a' if something is wrong

$pyramid_levels = [
    "e" => ["name" => "Compound Leader", "color" => "#28a745", "css_class" => "level-compound"], // Dark Green
    "d" => ["name" => "Exceptional Leader", "color" => "#84d078", "css_class" => "level-exceptional"], // Light Green
    "c" => ["name" => "Strategic Leader", "color" => "#ffc107", "css_class" => "level-strategic"], // Yellow
    "b" => ["name" => "Transactional Leader", "color" => "#fd7e14", "css_class" => "level-transactional"], // Orange
    "a" => ["name" => "Anti-Leader", "color" => "#dc3545", "css_class" => "level-anti"]      // Red
];

// Sales letter content (can be expanded or moved to assessment_data.php if it gets too long)
$sales_letter_headline = "Ready to Break Through and Lead Without Limits?";
$sales_letter_text = "<p class='lead'>You've taken the first step by understanding your current leadership level. Now, let's build on that clarity.</p>
<p>Imagine having a customized leadership roadmap that clarifies your next strategic move, empowers your team to take more ownership, and positions you to step out of daily problem-solving. No theory—just clear, actionable steps tailored to you.</p>
<p>The 'Courage and Clarity Call' is a strategic 90-minute session designed to uncover your specific leadership bottlenecks and create a clear path to growth—without burnout or constant pressure. You’ll leave with actionable insights you can implement immediately.</p>
<p>This isn't just another coaching call; it's a pivotal moment to redefine your leadership and accelerate your company's success. Let Gene Hammett help you build the dream company that grows WITH you, and eventually, without you needing to be in every detail.</p>";
$cta_link = "https://call.coreelevation.com/";
$cta_text = "Book Your Courage & Clarity Call Now";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Leadership Assessment Results - Gene Hammett</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pyramid.css"> <!-- Specific CSS for pyramid -->
</head>
<body>
    <header class="container text-center py-3 sticky-top bg-light shadow-sm">
        <img src="images/GeneHammett-Logo.png" alt="Gene Hammett Logo" id="header-logo">
    </header>

    <main class="container mt-4 results-page" id="main-content">
        <section class="text-center pt-4 pb-3">
            <h1 class="display-5 fw-bold">Your Leadership Profile</h1>
            <p class="lead">You are identified as a/an:</p>
            <h2 class="display-4 text-primary mb-3"><?= htmlspecialchars($user_level_details["level_name"]) ?></h2>
            <p class="fst-italic col-md-8 mx-auto">"<?= htmlspecialchars($user_level_details["tagline"]) ?>"</p>
        </section>

        <section class="pyramid-container-section mb-5">
            <div class="leadership-pyramid mx-auto">
                <?php 
                $level_order = ['e', 'd', 'c', 'b', 'a']; // Top to bottom
                foreach ($level_order as $level_key): 
                    $level_info = $pyramid_levels[$level_key];
                    $is_user_level = ($level_key === $dominant_answer_key);
                ?>
                <div class="pyramid-level <?= $level_info["css_class"] ?> <?= $is_user_level ? 'highlighted' : '' ?>" style="--level-color: <?= $level_info['color'] ?>;">
                    <span class="level-name"><?= htmlspecialchars($level_info["name"]) ?></span>
                </div>
                <?php endforeach; ?>
                 <div class="leadership-ravine-results">Leadership Ravine</div>
            </div>
            <p class="text-center mt-3"><small>Your identified level is highlighted above.</small></p>
        </section>

        <section class="mb-5 p-4 shadow-sm bg-white rounded">
            <h3 class="mb-3 text-secondary">Understanding Your Level: <?= htmlspecialchars($user_level_details["level_name"]) ?></h3>
            <p><?= nl2br(htmlspecialchars($user_level_details["description"])) ?></p>
        </section>

        <div class="row gx-lg-5">
            <div class="col-lg-6 mb-4">
                <section class="p-4 shadow-sm bg-white rounded h-100">
                    <h4 class="text-danger mb-3">Your Potential Bottlenecks:</h4>
                    <ul class="list-unstyled">
                        <?php foreach ($user_level_details["bottlenecks"] as $bottleneck): ?>
                            <li class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill text-danger me-2" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg><?= htmlspecialchars($bottleneck) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </div>
            <div class="col-lg-6 mb-4">
                <section class="p-4 shadow-sm bg-white rounded h-100">
                    <h4 class="text-success mb-3">Quick Wins to Elevate Your Leadership:</h4>
                     <ul class="list-unstyled">
                        <?php foreach ($user_level_details["quick_wins"] as $win): ?>
                            <li class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success me-2" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg><?= htmlspecialchars($win) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </div>
        </div>

        <section class="mb-5 p-4 shadow-sm bg-white rounded">
            <h4 class="text-primary mb-3">Long-Term Benefits of Growth:</h4>
            <ul class="list-unstyled">
                 <?php foreach ($user_level_details["long_term_benefits"] as $benefit): ?>
                    <li class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle-fill text-primary me-2" viewBox="0 0 16 16"><path d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8m5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707z"/></svg><?= htmlspecialchars($benefit) ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
        
        <section class="sales-letter-section text-center py-5 mb-5">
            <div class="container">
                <img src="images/Gene-Hammett-Photo.jpeg" alt="Gene Hammett" class="gene-photo img-fluid rounded-circle mb-4 shadow" style="width: 150px; height: 150px; object-fit: cover;">
                <h2 class="display-6 fw-bold mb-3"><?= htmlspecialchars($sales_letter_headline) ?></h2>
                <div class="col-lg-8 mx-auto sales-copy">
                    <?= $sales_letter_text // Already contains HTML, so not escaping ?>
                </div>
                <a href="<?= htmlspecialchars($cta_link) ?>" target="_blank" class="btn btn-primary btn-lg mt-4 px-5 py-3"> 
                    <?= htmlspecialchars($cta_text) ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short ms-2" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/></svg>
                </a>
            </div>
        </section>

    </main>

    <footer class="container text-center py-4 mt-5 border-top">
        <p class="mb-1">&copy; <?= date("Y") ?> Gene Hammett. All Rights Reserved.</p>
        <p><a href="index.php?action=reset" class="text-muted small">Take the Assessment Again</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script> 
</body>
</html>
