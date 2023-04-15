<?php
namespace App\Http\Controllers\Admin;


use App\Http\Requests\organisation\UpdateRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\organisation\StoreOrganisationRequest;
use App\Models\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    
    public function index(){
            $org = Organisation::paginate(10);
        if($org->count() == 0 && request('page', "1") != "1"){
            return back();            
        }
        return view(
            'admin.organisation_index',
            ['organisations'=> $org]
        );
    }

    public function store(StoreOrganisationRequest $request)
    {
        
        //Organisation::create($request->validated());
        //return back();

        //dd("END");
        $data = $request->validated();
        $data['source'] .= '_web';
        Organisation::create($data);
        return redirect()->route('web.organisation.index')->with('message', 'Organisation succesfully added! ');
    }

    public function show($id)
    {
        $organisation = Organisation::with('comments')->findOrFail($id);

        return view('admin.organisation_show', ['organisation' => $organisation]);
    }

    public function edit($id)
    {
        $organisation = Organisation::findOrFail($id);
        return view(
            'admin.organisation_edit',
            ['organisation' => $organisation]
        );
    }

    public function update(UpdateRequest $request, $id)
        {
           
                /*Organisation::findOrFail($id)->update($request->validated());
        
                return back();*/     
            $organisation = Organisation::findOrfail($id);
            if($organisation->update($request->validated()))
            {
                return redirect()->route('web.organisation.index');
            } else {
                return back()->with('errors', ['message' => 'Something gone wrong']);
            } 
        }
 
    public function destroy($id)
    {
        $organisation = Organisation::findOrFail($id);
        \DB::beginTransaction();
        try{
            $organisation->comments()->delete();
            $organisation->delete();
            \DB::commit();
            return redirect()->route('web.organisation.index');
        }catch(\Exception $e){
            \DB::rollBack();
            return back()->with('errors', ['message' => 'Something gone wrong']);
        }
    }
}
                     
?>