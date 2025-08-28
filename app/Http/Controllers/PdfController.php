<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use Carbon\Carbon;
use Mpdf\HTMLParserMode;
use Mpdf\Mpdf;

class PdfController extends Controller
{
    public function exportPdf($id)
    {
        $permintaan = Permintaan::with('user')->find($id);

        $headerHtml = view('user.permintaan.partial.pdf_header', compact('permintaan'))->render();
        $footerHtml = view('user.permintaan.partial.pdf_footer')->render();

        $stylesheet = file_get_contents(public_path('css/pdf.css'));

        $mainContentHtml = view('user.permintaan.pdf', compact('permintaan'))->render();

        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 16,
            'margin_right' => 16,
            'margin_top' => 40,
            'margin_bottom' => 25,
        ]);

        $mpdf->SetHTMLHeader($headerHtml);
        $mpdf->SetHTMLFooter($footerHtml);

        $mpdf->WriteHTML($stylesheet, HTMLParserMode::HEADER_CSS);
        $mpdf->WriteHTML($mainContentHtml, HTMLParserMode::HTML_BODY);

        $filename = 'Permohonan_Toll_' . $permintaan->req_name . '_' . Carbon::now()->format('Ymd_His') . '.pdf';

        return $mpdf->Output($filename, 'I'); // 'D' = Download, 'I' = Inline (buka di browser)
    }
}
