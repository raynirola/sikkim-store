<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LoginModal extends Component
{
    /** @var string */
    public $email = '';

    /**@var string */
    public $password = '';

    /**@var bool */
    public $remember = false;

    /**
     * Validation Rules
     * @return array
     */
    protected function getRules()
    {
        return [
            'email' => ['required', 'email', 'email:rfc,dns', 'exists:users'],
            'password' => ['required']
        ];
    }

    /**
     * Validation messages
     * @return array
     */
    protected function getMessages()
    {
        return [
            'exists' => 'User doesnt exist, please register.'
        ];
    }

    /**
     * Real time validation
     * @param $propertyName
     * @throws ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * Initiate login
     */
    public function submit()
    {
        $this->authenticate();
    }

    /**
     * Rendering Login Modal
     * @return Renderable
     */
    public function render()
    {
        return view('livewire.login-modal');
    }

    /**
     * Authenticates user
     * @return RedirectResponse|int
     */
    private function authenticate()
    {
        if (!auth()->attempt($this->validate(), $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return 0;
        }
        return redirect()->intended(route('home.index'));
    }
}
