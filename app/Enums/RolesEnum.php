<?php
namespace App\Enums;

enum RolesEnum: string
{
    // case NAMEINAPP = 'name-in-database';

    case OWNER = 'owner';
    case USER = 'user';

    /**
     * Array of available roles.
     *
     * @var array
     */
    const SET = [
        self::OWNER,
        self::USER,
    ];

}