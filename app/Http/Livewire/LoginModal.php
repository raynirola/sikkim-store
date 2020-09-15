<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Support\Renderable;

class LoginModal extends Component
{
    /**
     * @var string
     */
    public $email = '';

    /**
     * @var string
     */
    public $password = '';

    /**
     * @var bool
     */
    public $remember = false;

    /**
     * Initiate login
     */
    public function submit()
    {
        $this->authenticate();
    }

    /**
     * Rendering Login Modal
     *
     * @return Renderable
     */
    public function render()
    {
        return view('livewire.login-modal');
    }

    /**
     * Authenticates user
     *
     * @return RedirectResponse|int
     */
    private function authenticate()
    {
        if (!auth()->attempt($this->validateData(), $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return 0;
        }
        return redirect()->intended(route('home.index'));
    }

    /**
     * Validates users credentials
     *
     * @return array
     */
    private function validateData()
    {
        return $this->validate(
            [
                'email' => ['required', 'email', 'email:rfc,dns', 'exists:users'],
                'password' => ['required']
            ],
            [
                'exists' => 'User doesnt exist, please register.'
            ]
        );
    }
}
