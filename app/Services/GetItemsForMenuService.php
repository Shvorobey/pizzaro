<?php


namespace App\Services;


use App\Menu;

final class GetItemsForMenuService
{
public function getMenu()
{
    return Menu::all();
}
}