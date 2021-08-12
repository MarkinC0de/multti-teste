<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{


    /**
     * @return Users[]|Collection
     */
    public function index()
    {
        return Users::all();
    }


    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        Users::create($request->all());
    }


    /**
     * @param int $id
     * @return mixed
     */
    public function show(int $id)
    {
        return Users::findOrFail($id);
    }


    /**
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id)
    {
        $users = Users::findOrFail($id);
        $users->update($request->all());
    }


    /**
     * @param int $id
     */
    public function destroy(int $id )
    {
        $users = Users::findOrFail($id);
        $users->delete();

    }
}
