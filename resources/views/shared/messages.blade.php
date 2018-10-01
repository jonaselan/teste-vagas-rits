
{{-- retorno de $msg do controller via view --}}

@if(!empty($success))
    <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        @foreach($success as $value)
            <span class="glyphicon glyphicon-ok"></span>
            {{ $value }}

            <br>
        @endforeach
    </div>
@endif

@if(!empty($warning))
    <div class="alert alert-warning alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        @foreach($warning as $value)
            <span class="glyphicon glyphicon-warning-sign"></span>
            {{ $value }}
            <br>
        @endforeach
    </div>
@endif

@if(!empty($error))
    <div class="alert alert-danger">
        @foreach($error as $value)
            <span class="glyphicon glyphicon-alert"></span>
            {{ $value }}
            <br>
        @endforeach
    </div>
@endif

{{-- retorno de $msg do controller via session --}}

@if(session('success'))
    <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        @foreach(session('success') as $value)
            <span class="glyphicon glyphicon-ok"></span>
            {{ $value }}
            <br>
        @endforeach
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

    @foreach(session('warning') as $value)
            <span class="glyphicon glyphicon-warning-sign"></span>
            {{ $value }}
            <br>
        @endforeach
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        @foreach(session('error') as $value)
            <span class="glyphicon glyphicon-alert"></span>
            {{ $value }}
            <br>
        @endforeach
    </div>
@endif

{{-- $errors gerados via FormRequest --}}

@if($errors->any())
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
            <span class="glyphicon glyphicon-alert"></span>
            {{ $error }}
            <br>
        @endforeach
    </div>
@endif
