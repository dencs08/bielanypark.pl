<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Storefront;
use Illuminate\Support\Facades\DB;

class ImportCsv extends Command
{
    protected $signature = 'CSV:import';
    protected $description = 'none';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $file = dirname(__DIR__, 3).'/CSV/bielanypark_data.csv';
        $delimiter = ',';
        
        if (!file_exists($file) || !is_readable($file))
        dd('file doesnt exists or is not readable'); 
        
        $header = null;
        $data = array();
        if (($handle = fopen($file, 'r')) !== false)
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

        $arr = $data;
        for ($i = 0; $i < count($arr); $i ++)
        {
            DB::table('storefronts')->insert([
                $arr[$i]
            ]);
        }

         dump('CSV import success!'); 
    }
}
