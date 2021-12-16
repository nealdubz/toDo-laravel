<div class="container">
    <div class="row">
        <h1 class=" display-3 my-5">Todo</h1>
        <form wire:submit.prevent="add">
            <div class="input-group mb-3">
                <input wire:model="title" type="text" class="form-control" placeholder="Jot something here...">
                @error('title')
                    <p class="text-danger my-1 px-2">
                        {{ $message }}
                    </p>
                @enderror
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary" type="button">Add</button>
                </div>
            </div>
        </form>
    </div>
    <div class="bottom_section  align-items-top">
        @foreach ($data as $item)
            <div class="p-1 mb-1" style="background:rgba(89,181,103,0.5); border-radius: 5px;">
                <div class="row " >
                    <div class="col-11">
                        <p class="m-0">{{ $item->title }}</p>
                    </div>
                    <div class="col-1">
                        <button wire:click="del({{ $item->id }})" class="btn btn-secondary btn-sm ">X</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
