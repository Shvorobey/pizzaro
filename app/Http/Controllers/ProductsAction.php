<?php

namespace App\Http\Controllers;

use App\Adapter\Logger\LoggerInterface;
use App\Menu;
use App\Product;
use Illuminate\Http\Request;

class ProductsAction extends Controller
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(Request $request, $key)
    {
        $this->logger->info('Все работает :)');
        $menu = Menu::where('key', $key)->first();
        $products = $menu->products()->paginate(6);

        $items = session()->get('cart');
        $total = 0;
        $totalitems = 0;
        if ($items != null) {
            foreach ($items as $item) {
                $total += $item->price;
                $totalitems++;
            }
        }
        return view('pages/shop-grid-3-column', ['products' => $products, 'items' => $items, 'total' => $total, 'totalitems' => $totalitems]);
    }
}
