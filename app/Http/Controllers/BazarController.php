<?php

namespace App\Http\Controllers;

use App\Mail\ContactFrom;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Mail;
use Illuminate\Support\Facades\Hash;


use Session;
class BazarController extends Controller
{
   public function bazar(){
    
    return view('bazar');


   }
   public function mango(){
    
      return view('mango');
  
  
     }
     										
     public function order(Request $request){

          if($request->category != "Custom Category")
            {
            $order = array();  
            $order['order_id'] = Str::random(8);
            $order['name'] =  $request->name;
            $order['phone'] =  $request->phone;
            $order['email'] =  $request->email;
            
            $order['category'] = $request->category;
            $order['type'] = $request->type;

            
          
            
            $order['measurement'] =  $request->measurement;
            
            $order['city'] = $request->city;
            $order['address'] = $request->address; 
            $order['d_status'] = 'pending';  

                  
            $mntype = DB::table('mangotype')
              ->where('name',$request->type)
              ->first();
            
            
            
            $or = DB::table('order')
              ->insert($order);
            
            // $pay = DB::table('payment')
            //    ->insert($payment);  
            
            if($or){
              return 'success';
            }

          } else{
 
              $order = array();  
              $order['order_id'] = Str::random(8);
              $order['name'] =  $request->name;
              $order['phone'] =  $request->phone;
              $order['email'] =  $request->email;
              
              $order['category'] = $request->category;
              $order['product_name'] = $request->pn;
              $order['brand'] = $request->pb;
              $order['quantity'] = $request->qan;
              $order['note'] = $request->no;
              
              
              $order['city'] = $request->city;
              $order['address'] = $request->address; 
              $order['d_status'] = 'pending';  

              $or = DB::table('customorder')
                 ->insert($order);
              if( $request->pbs && $request->pqs && $request->nts) {
                 $i=0;
                 $pbr = array();
                 $pqn = array();
                 $nte = array();

                 foreach( $request->pbs as $pb )
                 {   
                    $pbr[$i] = $pb;
                    $i++;
                 }
                 $i=0;
                 foreach( $request->pqs as $pb )
                 {   
                    $pqn[$i] = $pb;
                    $i++;
                 }
                 $i=0;
                 foreach( $request->nts as $pb )
                 {   
                    $nte[$i] = $pb;
                    $i++;
                 }
                 $i=0;
                
                foreach( $request->pns as $pn )
                {  
                    
                  $orderr['order_id'] = $order['order_id'];
                  $orderr['name'] =  $request->name;
                  $orderr['phone'] =  $request->phone;
                  $orderr['email'] =  $request->email;
                  
                  $orderr['category'] = $request->category;
                  $orderr['city'] = $request->city;
                  $orderr['address'] = $request->address; 
                  $orderr['d_status'] = 'pending';
                  $orderr['product_name'] = $pn;
                  $orderr['brand'] = $pbr[$i];
                  $orderr['quantity'] = $pbr[$i];
                  $orderr['note'] = $nte[$i];
                    DB::table('customorder')
                    ->insert($orderr);
                    $i++;
              
              
                  }

                }
                 
                    return 'success';
                
      

          }
      
  
     }



     public function payment(Request $request){
            
            $pay['order_id'] = $request->id;
            $pay['method'] = $request->method;
            $pay['number'] = $request->nm;
            $pay['txt_id'] = $request->tx;

            DB::table('payment')
               ->insert($pay);
     }
     



     public function price(Request $request){
      $price = DB::table('mangotype')
             ->where('name',$request->mango_type)             
             ->first();

      $p = $price->price;
      return $p;
      
           
     }

     public function type(Request $request){



      
       $cat = DB::table('category')
         ->where('name',$request->category)
         ->first();

        
       if($cat->id != 3 ){
              $type = DB::table('mangotype')
                ->where('category_id',$cat->id)
                ->get();
                if($cat->id == 2){
                      $mes = DB::table('ordermeasure')
                      ->whereBetween('value', array(0, 5))->get();
                
                }

                if($cat->id == 1){
                  $mes = DB::table('ordermeasure')
                  ->whereBetween('value', array(20, 100))->get();
            
                }
            
                    if($type && $mes){

                    echo "<div class='row text-black' style='background:white;padding:15px;'>";
                  
                    echo "<div class='col-sm-12'>";  
                    echo "<div class='form-group'>";
                    echo "<label class='text-black'>Type:</label>";
                    echo "<select class='form-control' id='mtype'>";
                    echo "<option value='select'>".'Select..'. "</option>";
                    foreach($type as $t){
                    echo "<option value='{{$t->name}}' class='form-control'>". $t->name . "</option>";
                    }
                    echo "</select>"; 
                    echo "</div>";
                    echo "</div>";
                    
                    echo "</div>";
                  
                    
                    }

          } else{
                
            echo "<div class='row' style='border-top:3px solid blue;border-bottom:3px solid blue;background:white;padding:15px;'>";
            
            echo "<div class='col-sm-3'>";
            echo "<div class='form-group'>";
            echo "<label>Product Name <sup>*</sup></label>";
            echo "<input type='text' class='form-control' name='pname'  id='pname' placeholder='Name' >";
            echo "</div>";
            echo "</div>";

            echo "<div class='col-sm-3'>";
            echo "<div class='form-group'>";
            echo "<label>Brand <sup></sup></label>";
            echo "<input type='text' class='form-control' name='brand' id='brand' placeholder='Brand' >";
            echo "</div>";
            echo "</div>";

            echo "<div class='col-sm-2'>";
            echo "<div class='form-group'>";
            echo "<label>Quantity <sup>*</sup></label>";
            echo "<input type='text' class='form-control' name='qntt' id='qntt' placeholder='Quantity' >";
            echo "</div>";
            echo "</div>";

            

            echo "<div class='col-sm-4'>";
            echo "<div class='form-group'>";
            echo "<label>Notes <sup></sup></label>";
            echo "<textarea name='note' id='note' class='form-control' cols='30' rows='2'></textarea>";
            echo "</div>";
            echo "</div>";
            echo "<div class='p-2'><button class='btn btn-primary' type='button' id='add_field_button' >+</button></div>";
            echo "</div>";
          }
     }
}
