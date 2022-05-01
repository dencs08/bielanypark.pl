<?php

namespace App\Http\Controllers;

use App\Models\Storefront;
use App\Models\User;
use Illuminate\Http\Request;

class StorefrontMigrationController extends Controller
{
    function csvToArray($filename = '', $delimiter = ','){
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

    public function importCsv(){
        $file = public_path('CSV/bielanypark_data.csv');

        $customerArr = $this->csvToArray($file);

        for ($i = 0; $i < count($customerArr); $i ++)
        {
            Storefront::firstOrCreate($customerArr[$i]);
        }

        return 'CSV import success!';    
    }
}
