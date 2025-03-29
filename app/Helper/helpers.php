<?php

use Carbon\Carbon;
use App\Models\User;
use App\Models\LoginSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Facades\Agent;
use Stevebauman\Location\Facades\Location;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

if (!function_exists('generateOrderID')) {
    function short_code($str){
        return $str;
    }
}



if (!function_exists('generateOrderID')) {
    function generateOrderID() {
        $lastOrderGeneratedId = session()->get('lastOrderGeneratedId', '200000');
        $lastNumber = intval($lastOrderGeneratedId);
        $nextNumber = $lastNumber + 1;
        session(['lastOrderGeneratedId' => $nextNumber]);

        return (int)$nextNumber;
    }
}

if (!function_exists('countUsersByBlocked')) {
    function countUsersByBlocked() //is_brand_amb
    {
        return User::where('is_block', 1)
                    ->where('role', 'customer')
                    ->count();
    }
}
if (!function_exists('countUsersByTier')) {
    function countUsersByTier($tier, $is_brand_amb = false) //is_brand_amb
    {
        return User::where('tier', $tier)
                    ->where('role', 'customer')
                    ->where('is_block', 0)
                    // ->where('verified', 1)
                    ->where('is_brand_amb', $is_brand_amb)
                    ->count();
    }
}

if (!function_exists('countAllUsers')) {
    function countAllUsers()
    {
        return User::where('role', 'customer')
                    // ->where('verified', 1)
                    ->count();
    }
}


if (!function_exists('getHtmlContent')) {
    function getHtmlContent($path)
    {
        $htmlContent = '';

        if (file_exists($path) && is_readable($path)) {
            $htmlContent = file_get_contents($path);
        }

        return $htmlContent;
    }

}

if (!function_exists('removeDotHtml')) {
    function removeDotHtml($string)
    {
        // Remove the ".html" extension
        $filenameWithoutExtension = str_replace('.html', '', $string);
        return $filenameWithoutExtension;
    }
}


if (!function_exists('bankCode')) {
    function bankCode($userID)
    {
        if($userID === 1)
        {
            echo 'user one';
        }else{
            echo 'other number';
        }
    }
}


if (!function_exists('checkLogined')) {
    function checkLogined($userID)
    {
        $is_logout = DB::table('login_sessions')->where('user_id', $userID)->select('is_logout')->first();
        if($is_logout)
        {
            return $is_logout;
        }else{
            return 'Online';
        }
    }
}

if (!function_exists('getTotalUsersWithRole')) {
    function getTotalUsersWithRole($roleName)
    {
        return User::whereHas('roles', function ($query) use ($roleName) {
            $query->where('name', $roleName);
        })->count();
    }
}

if (!function_exists('getPermissionGroup')) {
    function getPermissionGroup($perm_id)
    {
        $permission_group = DB::table('permissions')
            ->select('group_name')
            ->where('id', $perm_id)
            ->first();

        return $permission_group ? $permission_group->group_name : null;
    }

}



if (!function_exists('getPermissionRoles')) {
    function getPermissionRoles($perm_id)
    {
        $permission = Permission::find($perm_id);

        if (!$permission) {
            return null; // Permission not found
        }
        // Get an array of role names
        $roleNames = $permission->roles->pluck('name')->toArray();

        return $roleNames;
    }

}

if (!function_exists('getRolePermissions')) {
    function getRolePermissions($roleName)
    {
        $role = Role::where('name', $roleName)->first();

        if (!$role) {
            return null; // Role not found
        }

        $permissions = $role->permissions;

        return $permissions;
    }
}

if (!function_exists('formatTime')) {
    function formatTime($timestamp)
    {
        return Carbon::parse($timestamp)->format('h:i A'); // -> 10:00 am
    }

}

if (!function_exists('formatTimestamp')) {
    function formatTimestamp($timestamp)
    {
        return Carbon::parse($timestamp)->format('d/m/Y'); //-> 11/01/2024
    }

}
if (!function_exists('sessions')) {
    function sessionsDetails()
    {
        $sessions = LoginSession::select('*')
                                ->distinct()
                                ->latest()
                                ->get();
        if($sessions){
            return $sessions;
        }else{
            return null;
        }
    }

}


if (!function_exists('getClientIpAddress')) {
    function getClientIpAddress()
    {
        return request()->ip();
    }
}

if (!function_exists('getLocation')) {
    function getLocation()
    {
        $ip = getClientIpAddress();

        $location = Location::get($ip);

       
        if ($location) {
            return $location;
        } else {
            return null; 
        }
    }
}



if(!function_exists('getMoreDeatils')){

    function getMoreDeatils()
    {
       
        //store user logged in
        $user = User::findOrFail(Auth()->id());
        $user->authenticated_at = Carbon::now();
        $user->save();

        // Get and store real client IP address
        $clientIpAddress = getClientIpAddress();
        
        // Get and store location address
        $location = Location::get($clientIpAddress);

        // Check if location is available before accessing its properties
        if ($location) {
            $city = $location->cityName;
            
        } else {
            $city = false;
        }

        //get&store device address
        $device = Agent::device();
        $browser = Agent::browser();
        $platform = Agent::platform();
        // Get client's user agent
        $device = Agent::device();
        $browser = Agent::browser();
        $platform = Agent::platform();

        if($device)
        {
           $deviceData =  Agent::device();
        }elseif($browser && $platform)
        {
            $deviceData = $platform.' '.$browser;

        }elseif($platform){
            $deviceData = $platform.' '.$browser;
        }
                 
        // Find the LoginSession record based on the user_id
        $logined = LoginSession::updateOrCreate(
            ['user_id' => $user->id], // Search condition
            [
                'location' => $city ?: null,
                'device' => $deviceData,
                'ip_address' => $clientIpAddress ?: null,
                'is_logout' => true,
                'time' => now(),
            ] 
        );

        // Store the ID in the session
        if ($logined) {
            session(['logged_id' => $logined->id]);
        }
        
      return $logined;

    }
    

}