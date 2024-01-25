<?php

namespace App\Controllers;

use App\Models\AlunoModel;
use CodeIgniter\Controller;

class AlunoController extends Controller
{
    public function index()
    {
        // Se o formulário for submetido
        if ($this->request->getMethod() === 'post') {
            // Carregue o modelo
            $alunoModel = new AlunoModel();

            // Obtenha os dados do formulário
            $data = [
                'nome'      => $this->request->getPost('nome'),
                'nascimento' => $this->request->getPost('nascimento'),
                'endereco'  => $this->request->getPost('endereco'),
                'cidade'    => $this->request->getPost('cidade'),
            ];

            // Insira os dados no banco de dados
            $alunoModel->insert($data);
        }

        // Redirecione de volta para a página do formulário de cadastro
        return redirect()->to('http://localhost/cadastro/public/');

        // Se você desejar exibir a view do formulário, você pode fazer algo como:
         return view('index');

        // Consulta para buscar todos os alunos
        $alunos = $alunoModel->findAll();

        // Passa os dados dos alunos para a view
        return view('seu_formulario', ['alunos' => $alunos]);
    }
    public function consulta()
    {
        $alunoModel = new AlunoModel();

        // Busca todos os alunos
        $alunos = $alunoModel->findAll();

        // Passa os dados dos alunos para a view de consulta
        $data = ['alunos' => $alunos];

        // Carrega a view de consulta
        echo view('consulta_alunos', $data);
    }
}
