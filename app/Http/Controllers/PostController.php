<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Post;
use Brick\Math\BigInteger;
//return type View
use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(Request $request): View
    {
        //get posts
        // $posts = Post::latest()->paginate(5);
        $pagination = 5;
        $posts = Post::orderBy('kode_barang')->paginate($pagination);

        //render view with posts
        return view('posts.index', compact('posts'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'kode_barang'     => 'required|min:1',
            'nama_barang'     => 'required|min:1',
            'satuan'     => 'required|min:1',
            'jumlah'     => 'required|min:1',
            'harga_barang'   => 'required|min:1'
        ]);

        

        //create post
        Post::create([
            'kode_barang'     => $request->kode_barang,
            'tanggal'     => $request->tanggal,
            'nama_barang'   => $request->nama_barang,
            'satuan'   => $request->satuan,
            'jumlah'   => $request->jumlah,
            'harga_barang'   => $request->harga_barang,
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


     public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }

    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
           'kode_barang'     => 'required|min:1',
            'nama_barang'     => 'required|min:1',
            'satuan'     => 'required|min:1',
            'jumlah'     => 'required|min:1',
            'harga_barang'   => 'required|min:1'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

            //update post with new image
            $post->update([
                'kode_barang'     => $request->kode_barang,
                'nama_barang'   => $request->nama_barang,
                'satuan'   => $request->satuan,
                'jumlah'   => $request->jumlah,
                'harga_barang'   => $request->harga_barang,
            ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

     public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);


        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
