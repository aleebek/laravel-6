<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autocomplete="off" value="{{ old('name') ?? $customer->name }}">

    @error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autocomplete="off" value="{{ old('email') ?? $customer->email }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="company_id">Company</label>
    <select type="text" class="form-control @error('company_id') is-invalid @enderror" id="company_id" name="company_id" autocomplete="off" value="{{ old('company_id') ?? $customer->company_id }}">
        <option value="">Select company</option>
        @foreach($companies as $company)
            <option value="{{ $company->id }}" {{ $customer->company_id == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
        @endforeach

    </select>
    @error('company_id')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="active">Customer status</label>
    <select type="text" class="form-control @error('active') is-invalid @enderror" id="active" name="active" autocomplete="off" value="{{ old('active') ?? $customer->active }}">

        <option value="">Select customer status</option>
        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
    @error('active')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

@csrf
