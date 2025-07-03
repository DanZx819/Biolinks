<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use Illuminate\Support\Facades\Auth;
class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {   
        $maxSort = Auth::user()->links()->max('sort') ?? 0 ;
        $data = $request->validated();
        $data['sort'] = $maxSort + 1;

        
        Auth::user()->links()->create($data);
        return to_route('dashboard');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {   
       $this->authorize('atualizar', $link);
       return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        

        $link->fill($request->validated())->save();

        return to_route('dashboard')->with('message', 'Alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return to_route('dashboard')->with('message', 'Deletado com sucesso');
    }

    public function up(Link $link){
        
        $order = $link->sort; // 2

        $newOrder = $order - 1; // 2 -1 

        /** @var User $user */

        $user = Auth::user(); // Pega o user para a query futura

        $swapWith = $user->links()->where('sort', $newOrder)->first(); // Pega os links do usuario logado onde na tabela sort ele tenha um dado = 1 do new order que no caso é o Teste 1

        
        

        $link->fill(['sort' => $newOrder])->save(); // $link tem sort == 2 más vai ser trocado por sort == 1 
        $swapWith->fill(['sort' => $order])->save();// $swapWith tem sort == 1 más vai ser trocado por sort == 2



        return back();
    }
     public function down(Link $link){
        $order = $link->sort;
        $newOrder = $order + 1;

        /** @var User $user */

        $user = Auth::user();

        $swapWith = $user->links()->where('sort', '=', $newOrder)->first();

        

        $link->fill(['sort' => $newOrder])->save();
        $swapWith->fill(['sort' => $order])->save();



        return back();
    }
}
