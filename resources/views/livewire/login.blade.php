<div class="container">
   <div class="row">
       <div class="col-md-12">
           <h1 class="text-center display-3 my-5">Login</h1>
       </div>
       <div class="col-md-6 mx-auto">
           @if (Session::has("success"))
           <p class="alert alert-success my-2">
               {{ Session::get("success") }}
           </p>
           @endif
           @if ($error)
           <p class="alert alert-danger my-2">
               {{ $error }}
           </p>
           @endif
           <form wire:submit.prevent="login">
               <div class="form-group my-2">
                   <input type="email" class="form-control" placeholder="email" wire:model="email" />
                   @error('email')
                   <p class="text-danger my-1 px-2">
                       {{ $message }}
                   </p>
               @enderror
               </div>
               <div class="form-group my-2">
                   <input type="password" class="form-control" placeholder="Password" wire:model="password" />
                   @error('password')
                   <p class="text-danger my-1 px-2">
                       {{ $message }}
                   </p>
               @enderror
               </div>
               <div class="form-group">
                   <button type="submit" class="btn btn-blk btn-dark">Login</button>
               </div>
           </form>
       </div>
   </div>
</div>