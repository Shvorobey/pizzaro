<?php


namespace App\Http\Controllers;


use App\Adapter\Logger\LoggerInterface;
use App\Menu;
use App\Product;
use Illuminate\Http\Request;

class FormUpdateActionController extends Controller
{

    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->middleware('auth');
        $this->logger = $logger;
    }

    public function __invoke(Request $request)
    {

        if ($request->method() == 'POST') {
            $this->validate($request, [
                'name' => 'required | max: 150 | string ',
                'description' => 'required | min: 30 | string',
                'image' => 'image | dimensions: min_width=370, min_height=330 |  file',
            ]);

            $product = Product::find($request->input('id'));
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->menu_id = $request->input('menu');

            $image = $request->image;
            if ($image) {
                $imageName = $image->getClientOriginalName();
                $image->move('images', $imageName);
                $product->image = 'http://pizzaro/images/' . $imageName;
            }
            $product->save();

        } else
            {$this->logger->info(' Продукт'. ' ' . ' '. 'обновлен ');
            $product = Product::find($request->get('id'));
        }
        return view('admin.form-update', ['menu' => Menu::all(), 'product' => $product]);
    }

}
