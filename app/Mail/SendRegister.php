<?php

namespace App\Mail;

use App\Models\Position;
use App\Models\Role;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendRegister extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $firstname;
    public $function;
    public $role;
    public $description;
    public $email;
    public $password;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {   
        $function_id = Position::find($user->function_id);
        $role_id = Role::find($user->role_id);
        $this->name = $user->name;
        $this->firstname = $user->firstname;
        $this->function = $function_id->function;
        $this->role= $role_id->role;
        $this->description = $user->description;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->url = $user->url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->subject('Bienvenue '.$this->firstname.' !')->view('template.templateRegister')->with(['nom' => $this->name, 'prenom' => $this->firstname, 'fonction' => $this->function, 'role' => $this->role, 'description' => $this->description, 'adresse' => $this->email, 'mdp' => $this->password, 'url' => $this->url]);
    }
}
