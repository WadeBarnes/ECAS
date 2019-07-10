<?php
/**
 * Created by PhpStorm.
 * User: dirk
 * Date: 2019-04-18
 * Time: 2:50 PM
 */

namespace App\Dynamics;

class AssignmentStatus extends DynamicsRepository
{
    public static $table = 'educ_assignment';

    public static $api_verb = 'metadata';

    public static $primary_key = 'statuscode';

    public static $data_bind = 'statuscode';

    public static $fields = [
        'id'   => 'Id',
        'name' => 'Label'
    ];

}