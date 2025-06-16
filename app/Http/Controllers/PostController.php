<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //type 1
        $post = post::all();
        // return $post;  //return in json format
        return view("home", compact('post')); //return in welcome page

        //type 2
        // $post = post::all();
        // foreach ($post as $p) {
        //     echo $p->name . "<br>";
        // }

        //type3
        // return view("welcome",['data' => '$post']);

        //type4
        // $post = post::all();
        // return view("welcome", compact('post'));

        //type 5
        // $post = post::find(2);
        // return $post;

        //type 6 to show specu name nad email only
        // $post = post::find(2, ['name', 'email']);
        // return $post;

        //type 7 to fetch multiple data i.e 2 and 5
        // $post = post::find([2, 5], ['name', 'email']);
        // return $post;

        //typ8 to count data
        // $post = post::count();
        // return $post;

        //typ9 use min () or max() or sum() using aggregate method
        // $post = post::min('age');
        // return $post;

        //typ10 where clause
        // $post = post::where('city', 'Pourosbury')->get();
        // return $post; //return in json format
        // return view("welcome", compact('post')); //return in welome page

        //typ10 multiple where clause
        /* $post = post::where('city', 'Pourosbury')
            ->where('age', '>', 20)->get();
        // return $post; //return in json format
        return view("welcome", compact('post')); //return in welome page */

        /*    //typ11 multiple where clause second method
        $post = post::where([
            ['city', 'Pourosbury'],
            ['age', '>', 20]
        ])->get();
        // return $post; //return in json format
        return view("welcome", compact('post')); //return in welome page */


        /*     //typ11 multiple where clause and or where method
        $post = post::where('city', 'Pourosbury')
            ->orwhere('age', '>', 20)->get();
        // return $post; //return in json format
        return view("welcome", compact('post')); //return in welome page */


        /*     //typ12 multiple where clause and or where method adn count method
        $post = post::where('city', 'Pourosbury')
            ->orwhere('age', '>', 20)->count();
        return $post; //return in json format
        // return view("welcome", compact('post')); //return in welome page */

        /* 
        //typ13 multiple where new method
        $post = post::whereCity('Pourosbury')
            ->whereAge(20)->get();
        // return $post; //return in json format
        return view("welcome", compact('post')); //return in welome page */



        /* //typ13 multiple where new method
        $post = post::whereCity('Pourosbury')
            ->whereAge(20)
            ->select('name', 'email as Post Email')
            // ->get();
            // ->toSql();//return sql data that is run behind the sql
            // ->toRawSql(); //return exact value in the palce of ?
            // ->dd(); //return with sql ?
            ->ddRawSql(); //return without sql ?
        return $post;
        // return view("welcome", compact('post')); //return in welome page */


        /*  //type14
        $post = post::whereCity('Pourosbury')
            ->first();
        return $post; */


        /*  //type15
        $post = post::where('age', '<>', 20)
            ->get();
        // return $post;
        return view("welcome", compact('post'));
    } */

        /*  //type16
        $post = post::whereNot('age', 20)
            ->get();
        // return $post;
        return view("welcome", compact('post')); */

        /*   //type17 range between 20 and 22
        // $post = post::whereBetween('Age', [20, 22])
        $post = post::whereNotBetween('Age', [20, 22])
            ->get();
        // return $post;
        return view("welcome", compact('post')); */

        /* //type18 using whereIn
        // $post = post::whereIn('city', ['West Veda', 'Dibbertfort'])
        $post = post::whereNotIn('city', ['West Veda', 'Dibbertfort'])
            ->get();
        // return $post;
        return view("welcome", compact('post')); */
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adduser");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        // return $request; //return in json format

        /* //method 1 this is popular method
        $post = new post;
        $post->name = $request->username;
        $post->email = $request->useremail;
        $post->age = $request->userage;
        $post->city = $request->usercity;

        $post->save();

        return redirect()->route('post.index')->with('status', 'New User added Successfully'); */

        //method 2 Mass assignment use to make code less

        //validation
        $request->validate([
            'username' => 'required|alpha',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required|alpha',
        ]);

        post::create(
            [
                'name' => $request->username,
                'email' => $request->useremail,
                'age' => $request->userage,
                'city' => $request->usercity,

            ]
            // ,[
            //         'name' => $request->username,
            //         'email' => $request->useremail,
            //         'age' => $request->userage,
            //         'city' => $request->usercity,

            //     ]

            // ,[
            //         'name' => $request->username,
            //         'email' => $request->useremail,
            //         'age' => $request->userage,
            //         'city' => $request->usercity,

            //     ]
        );


        return redirect()->route('post.index')->with('status', 'New User added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = post::find($id);
        // return $posts;

        return view("viewuser", compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        $posts = post::find($post->id);
        return view("updateuser", compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = post::find($id);

        //method 1 aslo simple method : this is popular method that username,useremail etc are come from name field of form
        /*  $post->name = $request->username;
        $post->email = $request->useremail;
        $post->age = $request->userage;
        $post->city = $request->usercity;

        $post->save();
        return redirect()->route('post.index')->with('status', 'User Updated Successfully'); */


        //Method 2 : mass update method

        $request->validate([
            'username' => 'required|string',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required|alpha',
        ]);

        $post = post::where('id', $id)->update([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'city' => $request->usercity,
        ]);

        return redirect()->route('post.index')->with('status', 'User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = post::find($id);
        $posts->delete();

        return redirect()->route('post.index')->with('status', 'User Deleted Successfully');
    }
}
