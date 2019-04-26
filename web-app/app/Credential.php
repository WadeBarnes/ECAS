<?php
/**
 * Created by PhpStorm.
 * User: dirk
 * Date: 2019-04-18
 * Time: 2:50 PM
 */

namespace App;

class Credential extends DynamicsRepository
{
    public static $table = 'educ_credentialcodes';

    public static $primary_key = 'educ_credentialcode';

    public static $data_bind = 'educ_Credential';

    public static $cache = 480; // 8 Hours

    public static $fields = [
        'id'   => 'educ_credentialcode',
        'name' => 'educ_name'
    ];
}