<?php

namespace Jivoni\Http\Controllers;
use Jivoni\Http\Controllers\Route;
use DB;
use Illuminate\Http\Request;
use Mail;
use Auth;


use Illuminate\Support\Facades\Input;

class pharmviewController extends Controller
{
    //private $var;
   public function __construct()
    {
        $this->middleware('auth:admin');
    }
  

    public function index($order_id)
    {
            //$this->var = $order_id;
            //$id =  $order_id;
            //$results = DB::select('select image from orders where order_id = $order_id');
            $results = DB::select( DB::raw("SELECT * FROM orders WHERE order_id = '$order_id'") );

            // to get customer name on pharmview page

            $cust_name = DB::table('orders')
                ->join('users', 'users.id', '=', 'orders.cust_id')
                ->where('order_id','=',$order_id)->get();
                foreach ($cust_name as $value) {
                  $name=$value->name;
                  
                }

         
            
            return view('pharmview', ['order_id'=> $order_id, 'results'=>$results, 'name'=>$name]);   
    }

    public function update(request $request)
    {     
          $pharmacy_id = $request->pharmacy_id;
      		$ord_id = $request->ord_id;

          $medname1 = $request->medname2;
          $quantity1 = $request->quantity2;
          $price1 = $request->price2;
          $amount1 = $request->total;
          $date_of_delivery = date('Y-m-d H:i:s');
          $status = 1;

          // $results = DB::select( DB::raw("SELECT status FROM orders WHERE order_id = '$ord_id'") );
          /*$results = DB::table('orders')
          ->select('status')
          ->where('order_id', '=', '$ord_id')->get();*/
           // var_dump($results);
           // die();

           $results = DB::select("select status from orders where order_id = $ord_id");
           
           foreach( $results as $r ) {
           $r_status = $r->status;
            
           }
    
          if($r_status == 0)
          {
            DB::table('orders')
            ->where('order_id', $ord_id )
            ->update(['drug_name' => $medname1, 'quantity' => $quantity1, 'price' => $price1, 'amount'=>$amount1, 'date_of_delivery'=> $date_of_delivery, 'pharmacy_id' =>$pharmacy_id,         'status' => $status] );
            //return view('pharmview');
         
  //$mailid = DB::select( DB::raw("select email from users join orders where orders.cust_id = users.cust_id"));
           
           

          $drugs = DB::table('orders')
                ->join('users', 'users.id', '=', 'orders.cust_id')
                ->where('order_id','=',$ord_id)->get();

          foreach ($drugs as $value) {
            $mailid=$value->email;
            # code...
          }


          // $template_path = 'dispatch';
          // Mail::send(['text'=> $template_path ], array('email' => Input::get('email')), function($message) use ($mailid)
          // {
          //    // $message->from('imdadul@simplisticsolutions.in','Admin')->to($request->get('email'))->subject('Order Placed');

          //    // $message->to($request->get('email'), 'Receiver Name')->subject('Order Placed');

          //     $message->to($mailid, 'Receiver Name')->subject('Order Dispatched');

          //             // Set the sender
          //             $message->from('satish@simplisticsolutions.in','Greetings');
          // });





          return redirect()->action('InvoiceCreator@index',['ord_id' => $ord_id]);

            


      		//collect($request->medname)->each(function($medname){
      		//var_dump($medname);
      			//$string = implode(',', $medname);
      			//$string .= $medname.',';
      			//return($string);
      		//});
      	}
        else
        {
          // dd("else part");
            //$status = 2;
          // echo "Order canceled by user!";
            return redirect('admin')->with('message', 'Order has been cancelled');
          // return view('auth.dashboard', ['status'=>$status, 'order_id' => $ord_id, '$data' => null, '$count' => null]);
          
        }
      
    }
}
