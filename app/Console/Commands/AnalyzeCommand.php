<?php

namespace App\Console\Commands;

use App\Models\Brand;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class AnalyzeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:analyze';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $analyzes = [
            '',
            'Statistics Command',
            '',
            "Products: ".Product::count(),
            "Brands: ".Brand::count(),
            "Suppliers: ".Supplier::count(),
            "Users: ".User::count(),
            "Customers: ".Customer::count(),
            "Orders: ".Order::count(),
            '',
            'Daily Statistics',
            'Todays Orders: '.Order::query()->whereDate('created_at', Carbon::today())->count(),
            'Todays Customers: '.Customer::query()->whereDate('created_at', Carbon::today())->count(),
            '',
            'Weekly Statistics',
            'Orders: '.Order::query()->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count(),
            'Customers: '.Customer::query()->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count(),
            ''
        ];

        foreach($analyzes as $analyze){
            $this->line($analyze);
        }
    }
}
