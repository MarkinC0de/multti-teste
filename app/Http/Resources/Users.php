<?php
declare(strict_types=1);

namespace App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class Users
 * @package App\Http\Resources
 */
class Users extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'senha' => $this->senha
        ];
    }
}
