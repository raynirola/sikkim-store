<?php

namespace App\Http\Livewire;

use App\Preorder;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class EarlyAccessPreviewRegistration extends Component
{
    /** @var string */
    public $email = '';

    /**@var string */
    public $name = '';

    /**@var string */
    public $phone = '';

    /**@var string */
    public $business = '';

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
        $this->register($this->validate(), new Preorder());
        $this->reset();
        session()->flash('success', 'Thank you for signing up, we will get back to you soon.');
    }

    private function register(array $data, Preorder $preorder)
    {
        $preorder->create($data);
    }

    /**
     * Rendering Login Modal
     * @return Renderable
     */
    public function render()
    {
        return view('livewire.early-access-preview-registration');
    }

    /**
     * Validation Rules
     * @return array
     */
    protected function getRules()
    {
        return [
            'email' => ['required', 'email', 'email:rfc,dns', 'unique:preorders'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['digits:10', 'required', 'numeric'],
            'business' => ['required', 'string']
        ];
    }

    /**
     * Validation messages
     * @return array
     */
    protected function getMessages()
    {
        return [
            'unique' => 'Email already registered.'
        ];
    }
}
