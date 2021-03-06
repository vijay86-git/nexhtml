<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Images as Images;

class ImageController extends Controller
{
    //
    public function index()
	    {
	    	//Images::truncate();
	        $images = Images::latest()->paginate(15);
	        return view('admin.pages.image.index',compact('images'))->with('i', (request()->input('page', 1) - 1) * 5);
	    }

	public function store(Request $request)
	  {
	  	    request()->validate(['image' => 'required']);

	  	    if ($request->hasFile('image'))
		        {  
		            /*\Cloudder::upload($request->file('image'));
		            $result  = \Cloudder::getResult();             
		            $data['image_url']       = $result['secure_url'];
		            $data['data']            = json_encode($result);
		            $data['unix_timestamp']  = time();
		            Images::create($data);*/

		            $file                 = $request->file('image') ;
                    $filename             = $file->getClientOriginalName() ;
                    $destinationPath      = public_path().'/uploads/' ;
                    $file->move($destinationPath, $filename);

                    $data['image_url']       = $filename;
		            $data['data']            = json_encode(array());
		            $data['unix_timestamp']  = time();
		            Images::create($data);

		            return redirect()->route('image.index')->with('success', 'Image upload successfully');
		        }
		    else
              {
              	    return redirect()->route('image.index')->with('error', 'An error occured. try again');
              }
	  }
}
