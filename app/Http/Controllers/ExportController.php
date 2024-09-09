<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Review;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    //
    public function exportToCSVTable1()
    {
        // Query the data you want to export from your database
        $data = Trip::all(); // Replace YourModel with the appropriate model and adjust the query as needed

        $csvHeader = ['id', 'activity_name', 'contact', 'location', 'image', 'description']; // Adjust column headers as needed
        
        // Open a new file handle with write permissions
        $file = fopen('export.csv', 'w');

        // Write CSV header
        fputcsv($file, $csvHeader);

        // Write data rows to the CSV file
        foreach ($data as $row) {
            fputcsv($file, $row->toArray()); // Assuming each row is an Eloquent model
        }

        // Close the file handle
        fclose($file);

        // Return a response or redirect as needed
        return response()->download('export.csv')->deleteFileAfterSend(true);
    }
    public function exportToCSVTable2(){
        // Query the data you want to export from your database
        $data = Review::all(); // Replace YourModel with the appropriate model and adjust the query as needed

        $csvHeader = ['id', 'activity_id', 'rating', 'comment']; // Adjust column headers as needed
        
        // Open a new file handle with write permissions
        $file = fopen('export2.csv', 'w');

        // Write CSV header
        fputcsv($file, $csvHeader);

        // Write data rows to the CSV file
        foreach ($data as $row) {
            fputcsv($file, $row->toArray()); // Assuming each row is an Eloquent model
        }

        // Close the file handle
        fclose($file);

        // Return a response or redirect as needed
        return response()->download('export2.csv')->deleteFileAfterSend(true);

    }
}
