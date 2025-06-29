<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme Suayed lib.
 *
 * @package    theme_suayed
 * @copyright  2025
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_suayed_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    return false;
}

/**
 * Returns the main SCSS content.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_suayed_get_extra_scss($theme) {
    $content = '';
    $imageurl = '';

    // Sets the background image, and its settings.
    $imageurl = $theme->setting_file_url('backgroundimage', 'backgroundimage');
    if (!empty($imageurl)) {
        $content .= '$imageurl: "' . $imageurl . '";';
        $content .= file_get_contents($theme->dir . '/scss/preset/default-image.scss');
    } else {
        $content .= file_get_contents($theme->dir . '/scss/preset/default.scss');
    }

    // Always return the background image with the scss when we have it.
    return $content;
}

/**
 * Get SCSS to prepend.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_suayed_get_pre_scss($theme) {
    $content = '';
    $configurable = [
        // Config key => [variableName, ...].
        'brandcolor' => ['primary'],
    ];

    // Prepend variables first.
    foreach ($configurable as $configkey => $targets) {
        $value = isset($theme->settings->{$configkey}) ? $theme->settings->{$configkey} : null;
        if (empty($value)) {
            continue;
        }
        array_map(function($target) use (&$content, $value) {
            $content .= '$' . $target . ': ' . $value . ";\n";
        }, (array) $targets);
    }

    return $content;
}
