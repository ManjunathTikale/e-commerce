@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>${{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$50</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$10</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>${{ $total + 10 + 50}}</td> <!-- Adjusted the total calculation -->
                </tr>
            </tbody>
        </table>

        <div>
            <form action="/orderplace" method="POST"> <!-- Make sure to set the correct action URL -->
                @csrf <!-- Don't forget the CSRF token for POST requests -->

                <div class="form-group">
                    <textarea placeholder="Enter your address" class="form-control" id="address" name="address"></textarea> <!-- Properly closed the textarea -->
                </div>

                <div class="form-group">
                    <label for="payment-method">Payment Method</label><br><br>
                    <input type="radio" name="payment" id="online-payment" value="cash">
                    <span>Online Payment</span><br><br>
                    <input type="radio" name="payment" id="emi-payment" value="cash">
                    <span>EMI Payment</span><br><br>
                    <input type="radio" name="payment" id="payment-on-delivery" value="cash">
                    <span>Payment on Delivery</span><br><br>
                </div>

                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
        </div>
    </div>
</div>
@endsection
