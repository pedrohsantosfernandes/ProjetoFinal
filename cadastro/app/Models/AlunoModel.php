<?php

namespace App\Models;

use CodeIgniter\Model;

class AlunoModel extends Model
{
    protected $table = 'alunos';

    protected $allowedFields = ['nome', 'nascimento', 'endereco', 'cidade'];
}
