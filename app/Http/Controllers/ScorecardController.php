<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scorecard;
use PDF;
use DataTables;
use Carbon\Carbon;

class ScorecardController extends Controller
{
    // public 
    public function scorecardForm()
    {
        return view('scorecard');
    }

    public function generatePDF(Request $request) : void
    {
        $results = $request->results;
        
        $options = '{
            "type": "outlabeledPie",
            "data": {
              "labels": ["Minat & Bakat", "Akademis"],
              "datasets": [{
                  "backgroundColor": ["#FF3784", "#36A2EB", "#4BC0C0", "#F77825", "#9966FF"],
                  "data": ['.$results[0].','.$results[1].']
              }]
            },
            "options": {
              "plugins": {
                "legend": false,
                "outlabels": {
                  "text": "%l %v",
                  "color": "white",
                  "stretch": 35,
                  "font": {
                    "resizable": true,
                    "minSize": 12,
                    "maxSize": 18
                  }
                }
              }
            }
          }';
         
        $chartUrl = 'https://quickchart.io/chart?w=300&h=200&c=' . urlencode($options);
        
        $pdf = PDF::loadview('scorecard_pdf', ['results' => $results, 'chart' => $chartUrl])->setOptions(['defaultFont' => 'sans-serif']);
        $filename = time().'.'.'pdf';
        $pdf->save(public_path(). '/storage/pdf/scored/' . $filename);

        Scorecard::create([
            'name' => $request->name,
            'phone_number' => $request->phoneNumber,
            'score_pdf' => $filename,
        ]);
    }

    // private
    public function index(Request $request)
    {
        return view('admin.scorecard.index');
    }

    public function scoreList(Request $request)
    {
      if($request->ajax()){
        $data = Scorecard::select("*");
        return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('created_at', function($data){ 
                $date = Carbon::parse($data->created_at)->locale('id');
                $date->settings(['formatFunction' => 'translatedFormat']);
                return $date->setTimezone('Asia/Jakarta')->format('l, j F Y ; h:i a');
                //return $date->setTimezone('UTC +7');
                // dd($date);
                // $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('l jS m Y H:i:s'); 
                // return $formatedDate; 
            })
            ->addColumn('action', function($row){
                $btn = '<a href="' . route('download',['file'=> $row->score_pdf]) . '" data-id="'.$row->score_pdf.'" class="edit btn btn-primary btn-sm">Download</a>';
                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
      }
    }

    public function download(Request $request)
    {
      $file = $request->query('file');
      //return \Storage::download('/app/public/pdf/scored/'.$file);
      // $url = \Storage::url('/storage/app/public/pdf/scored/'.$file);
      // return redirect($url);
      return response()->download(storage_path('/app/public/'.'/pdf/scored/'.$file));
   }
}
