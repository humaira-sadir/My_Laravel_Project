@extends('welcome')
<div class="container-fluid  ">
    <div class="row justify-content-center m-5 p-5"  class="text-capitalize">
        <div class="col-sm-4 "><form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Remember Password
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>  
        </div>
    </div>
</div>
