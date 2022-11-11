<?php




namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Order;
use App\Models\Item;
use App\Models\Orderitem;
use App\Traits\ApiTrait;
use Illuminate\Support\Facades\Hash;

class ordersController extends Controller
{

    use ApiTrait;

    public function orders()
    {
        $data = Order::get();

        return view('orders', compact('data'));
    }



    public function order($id)
    {
        $data = Order::with('oitems', 'ousers')->find($id);


        return view('order', compact('data'));
    }




    public function showedit($id)
    {
        $data = Order::with('oitems')->find($id);


        return view('editorder', compact('data'));
    }



    public function edit(Request $request)
    {

        $validated = $request->validate([
            'location' => 'required',
        ]);

        $order = Order::find($request->id);
        if (!$order)
            return redirect()->back();



        $order->update([
            'location' => $request->location,

        ]);


        return redirect()->back()->with(['message' => ' تم التحديث بنجاح ']);
    }



    public function delete($id)
    {
        $order = Order::find($id);
        if (!$order)
            return redirect()->back();



        Orderitem::where('order_id', $id)->forceDelete();

        Order::where('id', $id)->forceDelete();


        return redirect()->back();
    }




    public function mathapi(Request $request)
    {



        $old_arr = explode(",", $request->nums);




        $arr = array_values(array_filter($old_arr, function ($value) {
            return $value > 0;
        }));



        $val = $arr[0];
        $n = count($arr);

        for ($i = 0; $i < $n; $i++) {


            if ($val > $arr[$i]) {

                $val = $arr[$i];
            }
        }

        return $this->returnData('MinPositive', $val);
    }
}
