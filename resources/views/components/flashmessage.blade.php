if(session()->has("success"))
    <div class="alert alert-primary">
        <span>{{session("success")}}</span>
    </div>
@elseif(session()->has("insuccess"))
    <div class="alert alert-danger">
        <span>{{session("insuccess")}}</span>
    </div>
@endif