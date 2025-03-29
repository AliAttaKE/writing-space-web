<?php

namespace App\Http\Controllers\Backend\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\SystemConfiguration;
use Dotenv\Dotenv;




class SystemConfigurationController extends Controller
{
    public function merchantConfiguration()
    {
        return view('backend.admin.systemConfiguration.merchantAccount.index');
    }

    public function storeMerchantDetails(Request $request)
    {
        $validatedData = $request->validate([
            'merchant_id' => 'required',
            'merchant_password' => 'required',
            'merchant_url' => 'required|url',
            'merchant_version' => 'required|integer',
            'currency_type' => 'required',
        ]);

        $name = $request->input('name');

        $oldEnvContent = file_get_contents(base_path('.env'));
        $oldEnvContent = preg_replace("/^MERCHANT_ID=.*/m", "", $oldEnvContent);
        $oldEnvContent = preg_replace("/^MERCHANT_PASSWORD=.*/m", "", $oldEnvContent);
        $oldEnvContent = preg_replace("/^MERCHANT_URL=.*/m", "", $oldEnvContent);
        $oldEnvContent = preg_replace("/^MERCHANT_VERSION=.*/m", "", $oldEnvContent);
        $oldEnvContent = preg_replace("/^CURRENCY_TYPE=.*/m", "", $oldEnvContent);
        file_put_contents(base_path('.env'), $oldEnvContent);

        DB::table('system_configurations')->where('name', $name)->delete();

        $details = [
            'merchant_id' => $validatedData['merchant_id'],
            'merchant_password' => $validatedData['merchant_password'],
            'merchant_url' => $validatedData['merchant_url'],
            'merchant_version' => $validatedData['merchant_version'],
            'currency_type' => $validatedData['currency_type'],
        ];

        DB::table('system_configurations')->insert([
            'name' => $name,
            'details' => json_encode($details),
            'status' => 1, // 1.active , 0.inactive
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $envContent = PHP_EOL . "MERCHANT_ID={$validatedData['merchant_id']}" . 
                    PHP_EOL . "MERCHANT_PASSWORD={$validatedData['merchant_password']}" . 
                    PHP_EOL . "MERCHANT_URL={$validatedData['merchant_url']}" . 
                    PHP_EOL . "MERCHANT_VERSION={$validatedData['merchant_version']}" . 
                    PHP_EOL . "CURRENCY_TYPE={$validatedData['currency_type']}";

        file_put_contents(base_path('.env'), $envContent, FILE_APPEND);
        return back()->with('success', 'Configuration updated successfully.');
    }


    public function smptConfiguration()
    {
        return view('backend.admin.systemConfiguration.smtpConfiguration.index');
    }

    public function smtpConfigurationUpdate(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }
        return back()->with('success','Settings updated successfully');
    }

    public function overWriteEnvFile($type, $val)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            $val = '"' . trim($val) . '"';
            if (is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0) {
                file_put_contents($path, str_replace(
                    $type . '="' . env($type) . '"',
                    $type . '=' . $val,
                    file_get_contents($path)
                ));
            } else {
                file_put_contents($path, file_get_contents($path) . "\r\n" . $type . '=' . $val);
            }
        }
    }





}
