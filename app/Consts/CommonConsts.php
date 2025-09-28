<?php

namespace App\Consts;

class CommonConsts
{
    public const COURSE_TYPE_WHITE_BELT = 1;
    public const COURSE_TYPE_BASIC = 2;

    public const TRIAL_COURSE_LIST = [
        self::COURSE_TYPE_WHITE_BELT => '白帯クラス',
        self::COURSE_TYPE_BASIC => 'ベーシッククラス',
    ];
}
