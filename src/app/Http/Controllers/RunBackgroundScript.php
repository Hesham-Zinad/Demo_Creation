<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RunBackgroundScript extends Controller
{
    public function runShellScript()
    {
        // Specify the path to your .bat file
        $batFilePath = 'C:\Users\Ethab\Desktop\cpwc.pdf';

        // Execute the .bat file
        exec("cmd /c start \"\" {$batFilePath}", $output, $returnVar);

        // Print the output
        dd($output);
    }
}
