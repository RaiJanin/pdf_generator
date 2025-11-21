<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Services\ResumeFormDataBuilder;

class ResumeController extends Controller
{
    public function generatePdfResume() 
    {
        $name = 'Janino_Abrenica';
        $data = [
            'title' => 'Resume_Laravel_'.$name.'_'.now()->format('Y_m_d_His')
        ];
        $pdf = Pdf::loadView('pdf.pdf-blade', $data);
        return $pdf->stream('preview_'.$name.'_'.now()->format('Y_m_d_His').'.pdf');
    }

    public function seePreview() 
    {
        return view('pages.pdf-template.template-1');
    }

    public function store(Request $request)
    {
        $data = ResumeFormDataBuilder::formContents($request->all());
        //return view('preview-blade', compact($data));

        return response()->json($data);
    }

    public function download(Request $request)
    {
        $data = ResumeFormDataBuilder::formContents($request->all());

        $pdf = Pdf::loadView('pdf.generate', $data);
        $fileName = 'Resume_' . $data['appli_name'] . '_' . now()->format('Ymd_His') . '.pdf';

        return $pdf->stream($fileName);
    }
}
