<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
                'name'=>'Eduardo',
                'email'=>'admin@mail.com',
                'password'=>bcrypt('123456'),
        ];
        //checa se ja existe usuario com este email
        if(User::where('email','=',$dados['email'])->count()){ //se ja existe, atualiza
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario alterado!";
        }else{ //se nao existe, cria
            User::create($dados);
            echo "Usuario criado!";
        }
    }
}
