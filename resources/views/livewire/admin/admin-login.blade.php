<form class="mb-3" wire:submit.prevent="submit">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" wire:model.blur="email" class="form-control" id="email" name="email"
            placeholder="Enter your email" wire:loading.attr="disabled" autofocus />
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
            <a href="auth-forgot-password-basic.html">
                <small>Forgot Password?</small>
            </a>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" wire:model.blur="password" id="password" class="form-control" name="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" wire:loading.attr="disabled" />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" wire:model.blur="remember" id="remember-me" />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit"><span wire:loading.remove>Sign in</span>
            <span class="text-center"><span wire:loading
                    class="spinner-border spinner-border-sm"></span></span></button>
    </div>
</form>
