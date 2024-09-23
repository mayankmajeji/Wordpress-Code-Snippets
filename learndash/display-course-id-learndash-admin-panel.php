<?php

/**
 * Add course ID admin column labels to LearnDash courses admin area
 *
 * @param array $columns
 * @return array $columns
 */
function maverick_add_learndash_course_id_admin_column_labels($columns)
{
    $columns['course_id'] = __('Course ID');

    return $columns;
}

add_filter('manage_sfwd-courses_posts_columns', 'maverick_add_learndash_course_id_admin_column_labels');

/**
 * Add course ID admin column to LearnDash courses admin area
 *
 * @param string $column
 * @param int $post_id
 */
function maverick_add_learndash_course_id_admin_columns($column, $post_id)
{
    switch ($column) {
        case 'course_id':
            echo $post_id;
            break;
    }
}

add_action('manage_sfwd-courses_posts_custom_column', 'maverick_add_learndash_course_id_admin_columns', 10, 2);
