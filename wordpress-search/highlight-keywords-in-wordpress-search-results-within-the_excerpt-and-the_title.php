<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/highlight-keywords-in-search-results-within-the_excerpt-and-the_title/
*/ 

/**
 * Highlight Keywords in Search Results within the_excerpt and the_title
 */
function maverick_highlight_keyword_search_page($text)
{

    // If the page is search page
    if (is_search()) {

        // Get the search query.
        $searched_keyword = get_query_var('s');

        // Get all the keywords of the search.
        $keys = explode(" ", $searched_keyword);

        // highlight the keywords in the text.
        $text = preg_replace('/(' . implode('|', $keys) . ')/iu', '<strong class="searched-keyword">' . $searched_keyword . '</strong>', $text);
    }

    return $text;
}

add_filter('the_excerpt', 'maverick_highlight_keyword_search_page');
add_filter('the_title', 'maverick_highlight_keyword_search_page');

