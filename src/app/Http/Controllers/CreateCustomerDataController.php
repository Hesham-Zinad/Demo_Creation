<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Customer;

class CreateCustomerDataController extends Controller
{
    public function create_customer_data(Request $request)
    {
        $old_customer = Customer::latest()->first();
        if($old_customer){
            Storage::move('input.txt', $old_customer->customer_name.".txt");
        }
        $customer = Customer::create([
            'customer_name' => $request->customer_name,
            'port' => $request->port,
            'version' => $request->version,
            'logo' => 'logo',
        ]);

        Storage::disk('local')->put("input".".txt", $customer->customer_name."\n".$customer->port."\n".$customer->version);
        // Path to the shell script
        $scriptPath = storage_path('app\test.sh');
        // Execute the script
        $output = shell_exec("bash $scriptPath 2>&1");
        // Log the output or do something with it
        \Log::info($output);
        // Return a response to the user
        return response("Script executed successfully!");
    }
}
