<?php
class Mega_Menu_Walker extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '<div class="absolute left-0 w-full mt-2 bg-white border shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300"><div class="grid grid-cols-3 gap-6 p-6">';
        } else {
            $output .= '<ul class="space-y-2 mt-2">';
        }
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '</div></div>';
        } else {
            $output .= '</ul>';
        }
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        if ($depth === 0) {
            $output .= '<div class="relative group">';
            $output .= '<a href="' . esc_url($item->url) . '" class="px-3 py-2 text-gray-700 hover:text-gray-900">';
            $output .= esc_html($item->title);
            $output .= '</a>';
        } else {
            $output .= '<li>';
            $output .= '<a href="' . esc_url($item->url) . '" class="text-gray-600 hover:text-gray-900">';
            $output .= esc_html($item->title);
            $output .= '</a>';
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '</div>';
        } else {
            $output .= '</li>';
        }
    }
}
