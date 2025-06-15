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
        // $post = post::all();
        // return $post;  //return in json format

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

        //type18 using whereIn
        // $post = post::whereIn('city', ['West Veda', 'Dibbertfort'])
        $post = post::whereNotIn('city', ['West Veda', 'Dibbertfort'])
            ->get();
        // return $post;
        return view("welcome", compact('post'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
