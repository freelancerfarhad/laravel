@extends('layout.app')
@section('title','Contact')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="contactforms">
            <h1>Contact US</h1>
            </div>
        </div>
        <div class="col-md-6">
            <div class="biodata">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14615.686381477528!2d89.765785!3d23.6787617!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb98e00cc84623e2e!2sFreelancer%20Farhad!5e0!3m2!1sen!2sbd!4v1646453739229!5m2!1sen!2sbd" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <div class="forms">
            <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Full Name</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Inter Your Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Phome Number</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Inter Your Phone Number">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
<input type="submit" class="form-control btn btn-success" id="exampleFormControlInput1" value="Send Now">
</div>
            </div>
        </div>
    </div>
</div>

@endsection