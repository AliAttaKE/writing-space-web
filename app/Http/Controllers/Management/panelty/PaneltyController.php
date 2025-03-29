                  <?php

namespace App\Http\Controllers\Management\panelty;
use App\Http\Controllers\Controller;

use App\Models\Management\Panelty\Panelty;

use Illuminate\Http\Request;

class PaneltyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Panelty = Panelty::get()->all();
         return view('management/panelty/index',compact('Panelty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=[

                                 'erp_status'=>$request->erp_status,
                                  'erp_users_id'=>auth()->user()->id,
                                 'erp_title'=>$request->erp_title,
                                 'erp_message'=>$request->erp_message,
                                  'erp_panelty'=>$request->erp_panelty,




                             ];
                             $Pan = Panelty::Create($data);
                             return redirect()->back()->with('success','Penalty Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Panelty  $panelty
     * @return \Illuminate\Http\Response
     */
    public function show(Panelty $panelty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panelty  $panelty
     * @return \Illuminate\Http\Response
     */
    public function edit(Panelty $panelty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Panelty  $panelty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


     $data=Panelty::where('id',$id)->get()->first();
         $data->update([
                                 'erp_status'=>$request->erp_status,
                                 'erp_title'=>$request->erp_title,
                                 'erp_message'=>$request->erp_message,
                                  'erp_panelty'=>$request->erp_panelty,
                       ]);
                        return redirect()->back()->with('success','Penalty updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panelty  $panelty
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

          Panelty::find($id)->delete();
          return redirect()->back()->with('success','Penalty Deleted successfully');
    }
}
