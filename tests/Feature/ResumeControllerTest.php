<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResumeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_empty_name()
    {
        $data = [
            'name' => '',
            'email' => 'valido@email.com',
            'position' => 'Desenvolvedor',
            'education' => 'ens_medio_com',
            'obs' => 'Observações do candidato',
            'resume' => '', // Não é necessário enviar arquivo para teste de validação
        ];

        $response = $this->post(route('store'), $data);

        $response->assertStatus(302); // Verifica status HTTP 302 (redirecionamento)
        $response->assertSessionHasErrors(['name']); // Verifica se a sessão contém erros para o campo 'name'
    }

    public function test_invalidated_email()
    {
        $data = [
            'name' => 'Candidato',
            'email' => 'emailinvalido',
            'position' => 'Desenvolvedor',
            'education' => 'ens_medio_com',
            'obs' => 'Observações do candidato',
            'resume' => '', // Não é necessário enviar arquivo para teste de validação
        ];

        $response = $this->post(route('store'), $data);

        $response->assertStatus(302); // Verifica status HTTP 302 (redirecionamento)
        $response->assertSessionHasErrors(['email']); // Verifica se a sessão contém erros para o campo 'email'
    }

    public function test_empty_education()
    {
        $data = [
            'name' => 'Candidato',
            'email' => 'valido@email.com',
            'position' => 'Desenvolvedor',
            'education' => '', // Valor vazio para escolaridade
            'obs' => 'Observações do candidato',
            'resume' => '', // Não é necessário enviar arquivo para teste de validação
        ];

        $response = $this->post(route('store'), $data);

        $response->assertStatus(302); // Verifica status HTTP 302 (redirecionamento)
        $response->assertSessionHasErrors(['education']); // Verifica se a sessão contém erros para o campo 'education'
    }
}
