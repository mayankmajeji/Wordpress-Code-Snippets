<?php

/**
 * Add course ID and Group Name admin column labels to LearnDash courses admin area
 *
 * @param array $columns
 * @return array $columns
 */
function maverick_add_learndash_course_id_admin_column_labels($columns)
{
    $columns['course_id'] = __('Course ID');
    $columns['group_name'] = __('Group Name');

    return $columns;
}

add_filter('manage_sfwd-courses_posts_columns', 'maverick_add_learndash_course_id_admin_column_labels');

/**
 * Add course ID and Group Name admin column to LearnDash courses admin area
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
        case 'group_name':
            $groups = array();
            $group_ids = learndash_get_course_groups($post_id);
            if (!empty($group_ids)) {
                foreach ($group_ids as $group_id) {
                    $groups[] = '<a href="' . get_permalink($group_id) . '">' . get_the_title($group_id) . '</a>';
                }
                echo implode(", ", $groups);
            } else {
                echo 'No Group Assigned';
            }
            break;
    }
}

add_action('manage_sfwd-courses_posts_custom_column', 'maverick_add_learndash_course_id_admin_columns', 10, 2);
