<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;
use Doctrine\Inflector\Rules\English\Rules;

class UpdateSettings extends Component
{
    public $name;
    public $address;
    public $email;
    public $phone;
    public $facebook;
    public $twitter;
    public $instagram;
    public $linkedin;
    public function rules()
    {
        return [
            'name' => 'required',
            'address' => 'nullable',
            'email' => 'required|email',
            'phone' => 'required',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ];
    }
    public function mount()
    {
        $settings = Setting::find(1);
        if($settings)
        {
            $this->name = $settings->name;
            $this->address = $settings->address;
            $this->email = $settings->email;
            $this->phone = $settings->phone;
            $this->facebook = $settings->facebook;
            $this->twitter = $settings->twitter;
            $this->instagram = $settings->instagram;
            $this->linkedin = $settings->linkedin;
        }
    }
    public function updated($propertyName)
    {
        return $this->validateOnly($propertyName);
    }
    public function submit()
    {
        $this->validate();
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'name' => $this->name,
                'address' => $this->address,
                'email' => $this->email,
                'phone' => $this->phone,
                'facebook' => $this->facebook,
                'twitter' => $this->twitter,
                'instagram' => $this->instagram,
                'linkedin' => $this->linkedin,
            ]
        );
        session()->flash('success', 'Settings updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.settings.update-settings');
    }
}