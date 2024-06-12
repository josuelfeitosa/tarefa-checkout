<?php

namespace Tests\Feature;

use App\Models\Produto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProdutoApiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    /** @test */
    public function listaProdutos(): void
    {
        //Cria alguns produtos para teste
        Produto::factory()->count(3)->create();

        // Act: Faça uma requisição GET para o endpoint
        $response = $this->getJson('/');

        // Assert: Verifique se a resposta está correta
        $response->assertStatus(200)
                 ->assertJsonCount(3)
                 ->assertJsonStructure([
                     '*' => [
                         'id',
                         'nome',
                         'descricao',
                         'preco',
                         'created_at',
                         'updated_at',
                     ]
                 ]);
    }
}
