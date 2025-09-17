<?php
// Initialize variables
$source_input = '';
$warnings = '';
$cleanedHtml = '';
$hasErrors = false;

// If form submitted
if (isset($_POST['source_input'])) {
    $source_input = trim($_POST['source_input']);
    $html = '';

    // Hybrid logic to handle URL or file path
    if (filter_var($source_input, FILTER_VALIDATE_URL)) {
        $html = @file_get_contents($source_input);
        if ($html === false) {
            $warnings = "Could not retrieve content from the URL '$source_input'.";
            $hasErrors = true;
        }
    } else {
        $filepath = __DIR__ . '/' . $source_input;
        if (file_exists($filepath)) {
            ob_start();
            include $filepath;
            $html = ob_get_clean();
        } else {
            $warnings = "File '$source_input' does not exist in the current directory.";
            $hasErrors = true;
        }
    }

    if ($html) {
        // --- CONFIGURATION WITH ACCESSIBILITY CHECK REMOVED ---
        $config = [
            // Core Validation Settings
            'doctype'             => 'html5',
            'show-warnings'       => true,
            'show-errors'         => -1,

            // Stricter Syntax & Cleanup Rules
            'output-xhtml'        => true,
            'logical-emphasis'    => true,
            'enclose-text'        => true,
            'fix-bad-comments'    => true,

            // Repair Settings
            'force-output'        => true,
            'clean'               => true,
            
            // Formatting
            'indent'              => true,
            'wrap'                => 0,
            'numeric-entities'    => true,
        ];

        $tidy = new tidy();
        $tidy->parseString($html, $config, 'utf8');
        $tidy->cleanRepair(); 

        $warnings = $tidy->errorBuffer;
        $cleanedHtml = htmlspecialchars((string)$tidy);

        if ($tidy->getStatus() === 2) {
             $hasErrors = true;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Strict HTML Validator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body { padding: 30px; background: #f8f9fa; }
        .card { margin-bottom: 20px; }
        pre { background: #e9ecef; padding: 15px; border-radius: 5px; overflow-x: auto; white-space: pre-wrap; word-wrap: break-word; }
        .error-header { color: #dc3545; }
        .warning-header { color: #ffc107; }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4"><i class="bi bi-shield-check"></i> PHP Strict HTML Validator</h1>

        <div class="card p-4 shadow-sm">
            <form method="POST">
                <div class="mb-3">
                    <label for="source_input" class="form-label">Enter Local File Name or URL:</label>
                    <input type="text" class="form-control" id="source_input" name="source_input" placeholder="e.g., login.php or http://localhost/project/login.php" value="<?php echo htmlspecialchars($source_input); ?>" required>
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> Validate & Fix</button>
            </form>
        </div>

        <?php if ($source_input): ?>
        <div class="card p-4 shadow-sm">
            <h3>Validation Results for: <code><?php echo htmlspecialchars($source_input); ?></code></h3>
            <?php if ($warnings): ?>
                <h5 class="mt-3 <?php echo $hasErrors ? 'error-header' : 'warning-header'; ?>">
                    <?php echo $hasErrors ? '<i class="bi bi-x-circle-fill"></i> Errors Found' : '<i class="bi bi-exclamation-triangle-fill"></i> Warnings Found'; ?>
                </h5>
                <pre><?php echo trim($warnings); ?></pre>
            <?php else: ?>
                <p class="text-success mt-3"><i class="bi bi-check-circle-fill"></i> No warnings or errors found! ✅</p>
            <?php endif; ?>
        </div>

        <?php if (!empty($cleanedHtml)): ?>
        <div class="card p-4 shadow-sm">
            <h5>Strictly Cleaned & Repaired XHTML Output:</h5>
            <pre><?php echo $cleanedHtml; ?></pre>
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </div>

</body>
</html>