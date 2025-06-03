<form class="card-body" wire:submit.prevent='submit'>
    @if (session()->has('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="row mt-2">
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" wire:model.lazy='name' class="form-control" placeholder="John Doe" />
            @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" wire:model.lazy='address' class="form-control"
                placeholder="123 Main St, Anytown, USA" />
            @error('address')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" wire:model.lazy='email' class="form-control" placeholder="info@digitalagency.com" />
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" wire:model.lazy='phone' class="form-control" placeholder="+1234567890" />
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="text" wire:model.lazy='facebook' class="form-control"
                placeholder="https://facebook.com/digitalagency" />
            @error('facebook')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="twitter" class="form-label">Twitter</label>
            <input type="text" wire:model.lazy='twitter' class="form-control"
                placeholder="https://twitter.com/digitalagency" />
            @error('twitter')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="text" wire:model.lazy='instagram' class="form-control"
                placeholder="https://instagram.com/digitalagency" />
            @error('instagram')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="linkedin" class="form-label">Linkedin</label>
            <input type="text" wire:model.lazy='linkedin' class="form-control"
                placeholder="https://linkedin.com/digitalagency" />
            @error('linkedin')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mt-4">
        <button type="submit" class="btn btn-primary"><span wire:loading.remove>Submit</span>
            <span class="text-center"><span wire:loading
                    class="spinner-border spinner-border-sm"></span></span></button>
    </div>
</form>
