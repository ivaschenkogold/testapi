<?php
namespace App\Traits;

use Illuminate\Http\Request;

trait RequestTrait
{
    //Make arrays from input with comma
    public function makeRequestArray(Request $request)
    {
        $arr = [];
        foreach ($request->all() as $key => $value) {
            if (stripos($value, ',')) {
                $arr[$key] = explode(',', $value);
            }else{
                $arr[$key] = $value;
            }
        }
        return $arr;
    }
}