<div>
    <div wire:ignore.self class="modal fade bd-example-modal-lg" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" id="login">
            <div class="modal-content" style="border-radius: 0px;">
                <div class="modal-header" style="background-color: #2c3e50; border-radius: 0px; padding: 30px 20px">
                    <h5 class="modal-title text-white" id="loginModalLabel">
                        <img src="/assets/user/img/klinik_logo.png" alt="" width="80px">
                        Login
                    </h5>
                    <button type="button" class="close m-0 p-0 text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form wire:submit.prevent="authenticate">
                        @csrf
                        <div class="mb-3">
                            <label for="usernameLogin">Username<sup>*</sup></label>
                            <input wire:model="username" type="text" id="usernameLogin" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required>
                            @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="passwordLogin">Password<sup>*</sup></label>
                            <input wire:model="password" type="password" id="passwordLogin" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" required>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <br><br>
                        <div align="right">
                            <button type="submit" class="btn text-white px-4" style="background-color: #2c3e50">Login</button>
                        </div>
                    </form>
                </div>
    
            </div>
        </div>
    </div>

    @error('loginFailed')
    <script type="text/javascript">
    new Noty({
        
        text: "{{$message}}",
        timeout: 3000,
        theme: "metroui",
        type: "warning",
    }).show();
    </script>
    @enderror
</div>