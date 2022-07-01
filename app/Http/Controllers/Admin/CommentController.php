<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCommentRequest;
use App\Models\{
    User,
    Comment
};
use Illuminate\Http\Request;


use function PHPUnit\Framework\returnSelf;

class CommentController extends Controller
{
    //Criar um construtor
    protected $comment;
    protected $user;

    public function __Construct(Comment $comment, User $user)
    {
        $this->comment = $comment;
        $this->user = $user;
    }
    //Metodo para listar os comentarios
    public function index(Request $req, $user_id)
    {
        if (!$user = $this->user->find($user_id))
        {
            return redirect()->back();
        }

        $comments = $user->comments()
                                    ->where('body', 'LIKE', "%{$req->search}%")
                                    ->get();
        return view('users.comments.index', compact('user','comments'));
    }
    //Metodo para criar os comentarios
    public function create($user_id)
    {
        if (!$user = $this->user->find($user_id))
        {
            return redirect()->back();
        }
            return view('users.comments.create', compact('user'));
    }
    //Metodo para gravar os comentarios
    public function store(StoreUpdateCommentRequest $req, $user_id)
    {
        if (!$user = $this->user->find($user_id))
        {
            return redirect()->back();
        }
            $user->comments()->create([
                'body' => $req->body,
                'visible' => isset($req->visible)
            ]);

            return redirect()->route('comments.index',$user->id);
    }
    //Metodo para editar os comentarios
    public function edit($user_id, $id)
    {
        if (!$comment = $this->comment->find($id))
        {
            return redirect()->back();
        }

            $user = $comment->user;
            return view('users.comments.edit', compact('user', 'comment'));
    }
    //Metodo para gravar a alteração dos comentarios
    public function update(StoreUpdateCommentRequest $req, $id)
    {
        if (!$comment = $this->comment->find($id))
        {
            return redirect()->back();
        }
            $comment->update([
            'body' => $req->body,
            'visible' => isset($req->visible)
            ]);

            return redirect()->route('comments.index',$comment->user_id);
    }
}
