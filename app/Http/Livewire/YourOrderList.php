<?php

namespace App\Http\Livewire;

use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class YourOrderList extends Component
{
    public $orderItems;

    public function render()
    {
        $this->orderItems = OrderItem::where('session_id', Session::getId())
        ->where('status', 'pending')->get();

        return view('livewire.your-order-list', ['orderItems' => $this->orderItems]);
    }


}
