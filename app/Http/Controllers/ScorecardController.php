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

    public function storeScorecard(Request $request)
    {
      
      $results = $request->results;
      // $results[0] = 1;
      //  $results[1] = 2;
      //  $request->name = 'adam adi ';
      
      Scorecard::create([
          'name' => $request->name,
          'phone_number' => $request->phoneNumber,
          'score_pdf' => 'tester.pdf' //$filename,
      ]);
    }

    public function generatePDF(Request $request)
    {
        $results = $request->results;
       
        $options = '{
            "type": "outlabeledPie",
            "data": {
              "labels": ["Minat & Bakat", "Jurusan & Kampus", "Biaya & Jadwal Akademik"],
              "datasets": [{
                  "backgroundColor": ["#FF3784", "#36A2EB", "#4BC0C0", "#F77825", "#9966FF"],
                  "data": ['.$results[0].','.$results[1].','.$results[2].']
              }]
            },
            "options": {
              "plugins": {
                "legend":false,
                // "legend": {
                //   display: false,
                //   position : "right",
                //   align : "start",
                // },
                "outlabels": {
                  "text": "%l %v",
                  "color": "white",
                  "stretch": 20,
                  "font": {
                    "resizable": true,
                    "minSize": 6,
                    "maxSize": 10
                  }
                }
              }
            }
        }';

        // $options0 = "{
        //   type: 'doughnut',
        //   data: {
        //     labels: ['Minat & Bakat', 'Akademik', 'Non-akademik', 'Prospek', 'Orang Tua'],
        //     datasets: [
        //       {
        //         data: ['.$results[0].','.$results[1].',3,4,5],
        //         backgroundColor: [
        //           '#EA526F',
        //           '#23B5D3',
        //           '#279AF1',
        //           '#935FA7',
        //           '#DAFEB7',
        //         ],
        //         datalabels: {
        //           labels: {
        //             index: {
        //               color: '#404040',
        //               font: {
        //                 size: 13,
        //               },
        //               // See https://chartjs-plugin-datalabels.netlify.app/guide/options.html#option-context
        //               formatter: (val, ctx) => ctx.chart.data.labels[ctx.dataIndex],
        //               align: 'end',
        //               anchor: 'end',
        //             },
        //             name: {
        //               color: (ctx) => ctx.dataset.backgroundColor,
        //               font: {
        //                 size: 16,
        //               },
        //               backgroundColor: '#404040',
        //               borderRadius: 4,
        //               offset: 0,
        //               padding: 2,
        //               formatter: (val, ctx) => `#\${ctx.dataIndex + 1}`,
        //               align: 'top',
        //             },
        //             value: {
        //               color: '#404040',
        //               backgroundColor: '#fff',
        //               borderColor: '#fff',
        //               borderWidth: 2,
        //               borderRadius: 4,
        //               padding: 0,
        //               align: 'bottom',
        //             },
        //           },
        //         },
        //       },
        //     ],
        //   },
        //   options: {
        //     legend: {
        //       display: false,
        //     },
        //     layout: {
        //       padding: {
        //         top: 30,
        //         bottom: 30,
        //       },
        //     },
        //     plugins: {
        //       datalabels: {
        //         display: true,
        //       },
        //     },
        //   },
        // }"; 
         
        $chartUrl = 'https://quickchart.io/chart?w=300&h=200&c=' . urlencode($options);
        $fileDate = Carbon::now()->locale('id')->isoFormat('DMMMYY_HHmmss');
        $date = Carbon::now()->locale('id');
        $date->settings(['formatFunction' => 'translatedFormat']);
        $date->setTimezone('Asia/Jakarta')->format('l, j F Y ; h:i');
        
        $pdf = PDF::loadview('scorecard_pdf', ['results' => $results, 'chart' => $chartUrl, 'name'=>$request->name, 'date' => $date])->setOptions(['defaultFont' => 'sans-serif']);
        // $filename = time().'.'.'pdf';
        $filename = $request->name .'_'. $fileDate.'.'.'pdf';
        $pdf->save(public_path(). '/storage/pdf/scored/' . $filename); //storage_path('/pdf/scored/'. $filename));

        Scorecard::create([
            'name' => $request->name,
            'phone_number' => $request->phoneNumber,
            'email' => $request->email,
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
