<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        // валидация при создании
        $data = $request->validated();

        // сервис с работой с моделью
        $this->service->store($data);

        return redirect()->route('post.index');
    }
}
