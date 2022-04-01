<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Item;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use Livewire\Component;

class OrderNow extends Component
{
    public $items, $categories, $orderItems, $total = 0, $address;

    public $item_id, $category_id, $item_name, $item_price;
    public $description, $quantity, $session_id, $total_price, $image, $user_address;

    
    public function render()
    {
        $this->orderItems = OrderItem::where('session_id', Session::getId())
        ->where('status', 'pending')->get();
        return view('livewire.order-now', ['orderItems' => $this->orderItems]);
    }

    
}
