<div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" value="{{old('name') ?? $customer->name}}" class="form-control" id="exampleInputName" name="name"
           aria-describedby="nameHelp" placeholder="Enter name">
    <div class="alert-danger">{{$errors->first('name')}}</div>
    <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.
    </small>

</div>

<div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input type="email" value="{{old('email') ?? $customer->email}}" class="form-control" id="exampleInputEmail"
           name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <div class="alert-danger">{{$errors->first('email')}}</div>
    <small id="emailHelp" class="form-text text-muted">Please make sure that you always follow that
        email.
    </small>
</div>

<div class="form-group">
    <label for="active">Status</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customer status</option>

        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected' : ''}}> {{$activeOptionValue}}</option>
        @endforeach
    </select>
    <div class="alert-danger">{{$errors->first('active')}}</div>
</div>

<div class="form-group">
    <label for="company_id">Company</label>
    <select name="company_id" id="company_id" class="form-control">
        @foreach($companies as $company)
            <option value="{{$company->id}}" {{$company->id == $customer->company_id ? 'selected' : ''}}>{{$company->name}}</option>
        @endforeach
    </select>
    <div class="alert-danger">{{$errors->first('company_id')}}</div>
</div>

@csrf
