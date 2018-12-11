<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11.12.2018
 * Time: 12:53
 */

namespace App\Services;


use App\Menu;

final class GetItemsForMenuService
{
public function getMenu()
{
    return Menu::all();
}
}