<?php


namespace App\Http\Controllers\Management\ManageSetting\Teams;

use App\Http\Controllers\Controller;
use App\Models\Management\ManageSetting\Teams\Teams;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
use App\Models\User;



use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data['commission'] = AddCommission::get()->all();
             $data['team'] = Teams::get()->all();


             foreach($data['team'] as $team)
             {
              if(json_decode($team->erp_package) != null)
              {
//                  dd(json_decode($team->erp_package));
          foreach(json_decode($team->erp_package,true) as $roleassigndata){
                       $data['roleAssign'][] = RolesAssign::with('package','user')->where('commission_id',$roleassigndata)->get()->all();
          }
              }
             }
//            dd($data['roleAssign']);
              return view('management.ManageSetting.teams.index',compact('data'));

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'erp_team_name' => 'required',
        ]);

        $first_team =$request->erp_package[0];
         $data=[
            'erp_status'=>$request->erp_status,
            'erp_team_name'=>$request->erp_team_name,
            'erp_package'=>json_encode($request->erp_package),
             'dependent_package' => (int)$first_team,
        ];



        $team =Teams::Create($data);
        return redirect()->back()->with('success','Team Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function show(Teams $teams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function edit(Teams $teams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $package = $request->erp_package[0];
        $data=Teams::where('id',$id)->get()->first();
         $data->update([
                           'erp_status'=>$request->erp_status,
                           'erp_team_name'=>$request->erp_team_name,
                            'erp_package'=>json_encode($request->erp_package),
                            'dependent_package'=>$package,
                      ]);

                        return redirect()->back()->with('success','Team updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data=Teams::where('id',$id)->get()->first();
                    $data->delete();

                return redirect('teams')->with('success','Team deleted successfully');
    }
}
