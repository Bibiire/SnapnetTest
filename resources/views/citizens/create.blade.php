<x-app-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
           <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="col-3">
            <h2>Add New Citizen</h2>
        </div>
        <div class="col-3">
            <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('citizens.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <input type="text" name="gender" class="form-control" placeholder="Gender">
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Address"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                <input type="tel" name="phone" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="ward_id">Ward</label>
            <select class="form-control" name="ward_id" id="ward_id">
                <option >Select</option>
                <option value="1">Ward 1</option>
                <option value="2">Ward 2</option>
                <option value="3">Ward 3</option>
                <option value="4">Ward 4</option>
                <option value="5">Ward 5</option>
            </select>
            
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="ward_id">State</label>
            <select class="form-control" name="ward_id" id="ward_id">
                <option >Select</option>
                <option value="1">State 1</option>
                <option value="2">State 2</option>
                <option value="3">State 3</option>
                <option value="4">State 4</option>
                <option value="5">State 5</option>
            </select>
            
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="ward_id">LGA</label>
            <select class="form-control" name="ward_id" id="ward_id">
                <option >Select</option>
                <option value="1">LGA 1</option>
                <option value="2">LGA 2</option>
                <option value="3">LGA 3</option>
                <option value="4">LGA 4</option>
                <option value="5">LGA 5</option>
            </select>
            
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
        </div>
    </div>
</x-app-layout>
