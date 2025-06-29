<?php
require_once($CFG->libdir . '/outputrenderers.php');

$OUTPUT = $PAGE->get_renderer('core');
echo $OUTPUT->header();
?>

<div class="min-h-screen bg-gray-100 text-gray-800">
    <header class="bg-blue-700 text-white p-4 shadow">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">
                <a href="<?php echo $CFG->wwwroot; ?>"><?php echo format_string($SITE->fullname); ?></a>
            </h1>
            <?php echo $OUTPUT->login_info(); ?>
        </div>
    </header>

    <main class="max-w-7xl mx-auto p-6">
        <?php echo $OUTPUT->main_content(); ?>
    </main>

    <footer class="bg-blue-800 text-white text-sm p-4 mt-12">
        <div class="max-w-7xl mx-auto text-center">
            <?php echo $OUTPUT->standard_footer_html(); ?>
        </div>
    </footer>
</div>

<?php
echo $OUTPUT->footer();
