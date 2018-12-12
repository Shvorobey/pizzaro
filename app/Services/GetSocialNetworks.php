<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.12.2018
 * Time: 12:54
 */

namespace App\Services;

use App\SocialNetworks;

final class GetSocialNetworks
{
    public function getSocialNetworks()
    {
        return SocialNetworks::all();
    }
}