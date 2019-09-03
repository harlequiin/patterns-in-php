<?php
declare(strict_types=1);

namespace harlequiin\Patterns\Facade;

class App
{
    public function run()
    {
        $pageJsonData = new PageJsonData();
        $data = $pageJsonData->get("http://example.com"); 
        // do something with the data...
    }
}
