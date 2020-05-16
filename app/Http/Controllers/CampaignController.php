<?php
namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\User;
use Illuminate\Http\Request;


class CampaignController extends BaseController
{

/**
* A Function For All User list.
*/
       function list(){ 
		return User::all();
		}

		
/**
* A Function For Delete Pericular User.
*/
	    public function delete($id){
		$data = User::find($id);
		$data->delete();
		return $data;
	    }

/**
* A Function For Detail of Pericular User.
*/
	    public function userDetail($id)
	    {
		  $data = User::where('id', $id)->get();
          return response()->json($data);
	    }
/**
* A Function For of Save the Conferm Doner User.
*/        
     
			public function confermDoner(Request $request,$id)
			{
				$userdata = new User;
				$userdata = User::find($id);
				$userdata->conferm_doner = "Yes";

				if($userdata->save()){
				return response()->json(['status' => 'success']);
				}else{
				return response()->json(['status' => 'failed']);
				}

			}


/**
* A Function For of Update the User.
*/       

	   public function updateUser(Request $request, $id)
			{
				$userdata = new User;
				$userdata = User::find($id);
				$userdata->conferm_doner = "Yes";
				$userdata->name     =$request->input('name');
				$userdata->email    = $request->input('email');
				$userdata->dob      = $request->input('dob');
				$userdata->mobile   = $request->input('mobile');
				$userdata->city     = $request->input('city');
				$userdata->amount   = $request->input('amount');

				if($userdata->save()){
				return response()->json(['status' => 'success']);
				}else{
				return response()->json(['status' => 'failed']);
				}

			}


/**
* A Function For of Insert the User.
*/      

		function insertUser(Request $request)
		{
	        $userdata = new User;
			$userdata->name = $request->input('fullname');
			$userdata->email    = $request->input('email');
			$userdata->dob = $request->input('dob');
			$userdata->mobile = $request->input('mobile');
			$userdata->city = $request->input('city');
			$userdata->amount = $request->input('amount');
			$userdata->save();
			return redirect('/');
        }



}
