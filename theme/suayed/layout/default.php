<?php
// This is a Moodle theme layout file
defined('MOODLE_INTERNAL') || die();

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <?php echo $OUTPUT->standard_head_html(); ?>
</head>
<body <?php echo $OUTPUT->body_attributes(); ?>>
<?php echo $OUTPUT->standard_top_of_body_html(); ?>

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
        <div class="flex gap-6">
            <div class="flex-1">
                <?php echo $OUTPUT->main_content(); ?>
            </div>
            <?php
            $hasblocks = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
            if ($hasblocks) {
            ?>
            <aside class="w-64 bg-white rounded-lg shadow p-4">
                <?php echo $OUTPUT->blocks_for_region('side-pre'); ?>
            </aside>
            <?php } ?>
        </div>
    </main>

    <footer class="bg-blue-800 text-white text-sm p-4 mt-12">
        <div class="max-w-7xl mx-auto text-center">
            <?php echo $OUTPUT->standard_footer_html(); ?>
        </div>
    </footer>
</div>

<?php echo $OUTPUT->standard_end_of_body_html(); ?>
</body>
</html>
