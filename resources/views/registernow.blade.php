@extends('master')
@section('content')
<div class="jumbotron">
    <div class="col-sm-10">
    <table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>Rs {{$total}}</td>
      </tr>
      <tr>
        <td>Other Charges</td>
        <td>Rs 0</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>Rs {{$total}}</td>
      </tr>
    </tbody>
  </table>

  <div>
  <form action="/registrationdone" method="POST">
    @csrf
  <div class="form-group">
    <label for="pwd">Payment Method</label><br>
    <input type="radio" value="online" name="payment"><span>Credit/Debit Card</span><br>
    <input type="radio" value="online" name="payment"><span>UPI</span><br>
    <input type="radio" value="online" name="payment"><span>Net Banking</span><br>
  </div>
  <button type="submit" class="btn btn-secondary">Register Now</button>
</form>
  </div>

</div>
</div>
@endsection