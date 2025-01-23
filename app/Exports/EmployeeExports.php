<?php

namespace App\Exports;

use Box\Spout\Writer\WriterFactory;
use Box\Spout\Common\Type;
use App\Models\Employee;
use Symfony\Component\HttpFoundation\StreamedResponse;

class EmployeeExports
{
    public function export()
    {
        // Create a stream response to stream the file
        $response = new StreamedResponse(function () {
            // Create a writer for CSV or XLSX
            $writer = WriterFactory::create(Type::XLSX);  // Type::CSV or Type::ODS

            // Open the writer and output the file
            $writer->openToStream(fopen('php://output', 'w'));

            // Add headings (columns) to the export
            $writer->addRow(['ID', 'Name', 'Email']);

            // Add data rows
            $users = Employee::all();
            foreach ($users as $user) {
                $writer->addRow([$user->id, $user->name, $user->email]);
            }

            // Close the writer (this sends the file to the browser)
            $writer->close();
        });

        // Set the appropriate headers to force a download in the browser
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment; filename="users.xlsx"');

        return $response;
    }
}
