@if(session()->flash('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@elseif(session()->flash('danger'))
    <div class="alert alert-success">
        {{ session()->get('danger') }}
    </div>
@endif
