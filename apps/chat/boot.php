<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

$svg_icon = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5"/>
        <path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z" fill="#000000"/>
    </g>
</svg>';

add_menu_admin('Chat', U . 'chat/app', 'chat', $svg_icon, 2, [
    [
        'name' => 'Chats',
        'link' => U . 'chat/app/chats/',
    ],

]);

add_menu_client('Chat', U . 'chat/app', 'chat', $svg_icon, 3, [
    [
        'name' => 'Chats ',
        'link' => U . 'chat/client/chats/',
    ],



]);