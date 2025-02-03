<?php

namespace App\Enums\Admin;

enum ConfigStatusEnum: string
{
    /**
     * @var string
     * status values for user roles
     */
    case ADMIN = 'admin';
    case SUPER_ADMIN = 'super_admin';
    /**
     * @var string
     * status values for menu
     */
    case MENU_FILE_SOURCE = 'config';
    case MENU_DB_SOURCE = 'database';
}
