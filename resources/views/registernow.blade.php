@extends('master')
@section('content')
<div class="custom-event">
    <div class="col-sm-10">
    <table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>Rs {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>Rs 0</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>Rs {{$total}}</td>
      </tr>
    </tbody>
  </table>

  <div>
  <form action="/action_page.php">
  <div class="form-group">
    <label for="pwd">Payment Method</label><br>
    <input type="radio" name="payment"><span>Credit/Debit Card</span><br>
    <input type="radio" name="payment"><span>UPI</span><br>
    <input type="radio" name="payment"><span>Net Banking</span><br>
  </div>
  <button type="submit" class="btn btn-default">Register Now</button>
</form>
  </div>

</div>
</div>
@endsection