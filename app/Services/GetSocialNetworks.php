<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.12.2018
 * Time: 12:54
 */

namespace App\Services;

use App\SocialNetworks;
use Illuminate\Database\Eloquent\SoftDeletes;

final class GetSocialNetworks


{
    use SoftDeletes;
    public function getSocialNetworks()
    {
        return SocialNetworks::all();

    }
}