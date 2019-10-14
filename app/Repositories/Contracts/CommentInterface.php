<?php

namespace App\Repositories\Contracts;

interface CommentInterface {

    public function find($id);

    public function delete($id);

    public function create($request);

    public function update($request);

    public function report($request);

}
