<?php 

namespace App\Helper;

class cartHelper{
     public $items = [];
     public $total_quantity = 0;
     public $total_price = 0;

     public function __construct() {
        $this->items = session('cart') ? session('cart') : [];
     }

    public function list(){
        return $this->items;
     }
    public function add($product,$quantity = 1){
        $item = [
            'product_id' => $product->id,
            'price'=>$product->sale_price ? $product->sale_price : $product->price,
            'image'=>$product->main_img,
            'quantity'=>$quantity,
            'name'=>$product->name
        ];
        
        if(isset($this->items[$product->id])){
            $this->items[$product->id]['quantity']+=$quantity;
        }else{
            $this->items[$product->id] = $item;
        }

        session(['cart'=>$this->items]);
     }


    public function remove($id){
        if(isset($this->items[$id])){
            unset($this->items[$id]);
        }

        session(['cart'=>$this->items]);
    }

    public function getTotalPrice(){
        $totalPrice = 0 ;
        foreach ($this->items as $value) {
            $totalPrice += $value['price']*$value['quantity'];
        }

        return $totalPrice;
    }

    public function getTotalQuantity(){
        $totalQuantity = 0;
        foreach($this->items as $value){
            $totalQuantity += $value['quantity'];
        }

        return $totalQuantity;
    }


    public function updateCart($id,$quantity=1){
        if(isset($this->items[$id])){
            if($quantity = 0){
                unset($this->items[$id]);
            }else{
                $this->items[$id]['quantity'] = $quantity;
            }
        }

        session(['cart'=>$this->items[$id]]);
    }
}