<?php
// This is a Moodle theme layout file
defined('MOODLE_INTERNAL') || die();

// Get the renderer - this is the correct way in Moodle
echo $OUTPUT->doctype();
echo $OUTPUT->header();
?>

<div class="min-h-screen bg-gray-100 text-gray-800">
    <header class="bg-blue-700 text-white p-4 shadow">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">
                <a href="<?php echo $CFG->wwwroot; ?>"><?php echo $SITE->fullname; ?></a>
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
