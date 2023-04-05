@extends('master.master')



@section('checkoutform')
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>

    <section class="checkout-orders">


        <form action="{{ route('storecheckout') }}" method="POST">
            @csrf
            <h3>your orders</h3>

            @php
                $grand_total = 0;
                $grand_product = '';
                $grand_total_quantity = 0;
                
            @endphp

            <div class="display-orders">
                @foreach ($carts as $order_details)
                    <input type="hidden" name="order_productname" value="{{ $order_details->product_name }}">
                    <input type="hidden" name="order_price" value="{{ $order_details->price }}">
                    <input type="hidden" name="order_qty" value="{{ $order_details->qty }}">

                    @php
                        $grand_product = $order_details->product_name . ' ' . '|' . ' ' . $grand_product;
                        
                        $grand_total = $order_details->price * $order_details->qty + $grand_total;
                        
                        $grand_total_quantity = $order_details->qty + $grand_total_quantity;
                        
                    @endphp
                @endforeach
                <div class="grand-total">grand total : <span>{{ $grand_product }} </span></div>
                <div class="grand-total">grand total : <span>NRs. {{ $grand_total }} /- </span></div>
                <div class="grand-total">Total Number of Products : <span> {{ $grand_total_quantity }} /- </span></div>
            </div>


            <h3>place your orders</h3>

            {{-- =================================================== --}}

            <input type="hidden" name="uid" value="{{ $order_details->uid }}">
            <input type="hidden" name="pid" value="{{ $order_details->pid }}">
            <input type="hidden" name="checkout_productname" value="{{ $grand_product }}">
            <input type="hidden" name="checkout_price" value="{{ $grand_total }}">
            <input type="hidden" name="checkout_quantity" value="{{ $grand_total_quantity }}">

            {{-- ==================================================== --}}

            <div class="flex">
                <div class="inputBox">
                    <span>your name :</span>
                    <input type="text" name="checkout_name" placeholder="Full Name" class="box" maxlength="20"
                        required>
                </div>
                <div class="inputBox">
                    <span>your number :</span>
                    <input type="number" name="checkout_number" placeholder="Mobile Number" class="box" min="0"
                        max="9999999999" onkeypress="if(this.value.length == 10) return false;" required>
                </div>
                <div class="inputBox">
                    <span>your email :</span>
                    <input type="email" name="checkout_email" placeholder="Enter your email" class="box" maxlength="50"
                        required>
                </div>
                <div class="inputBox">
                    <span>payment method :</span>
                    <select name="checkout_method" class="box" required>
                        <option value="cash on delivery">Cash On Delivery</option>
                        <option value="Pay with khalti">Pay with khalti</option>
                        {{-- <option value="paytm">paytm</option>
                            <option value="paypal">paypal</option>  --}}


                    </select>
                </div>

                <div class="inputBox">
                    <span>State :</span>
                    <input type="text" name="checkout_state" placeholder="e.g. Bagmati" class="box" maxlength="50"
                        required>
                </div>

                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="checkout_city" placeholder="e.g. Chitwan, Parsa" class="box"
                        maxlength="50" required>
                </div>
                {{-- <div class="inputBox">
                    <span>Review :</span>
                    <input type="text-area" name="checkout_status" placeholder="Anything here" class="box" maxlength="50"
                        required>
                </div> --}}


            </div>
            {{-- <input type="submit" value="Buy"> --}}


        </form>
        <button id="payment-button" class=" btn text-decoration-none"> BUY</button>



    </section>




    <script>
        var config = {
            // replace the publicKey with yours
            // "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "publicKey": "test_public_key_1512a554f86744999d6da1146e85336d",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess(payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                    if (payload.idx) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            }
                        });


                        $.ajax({
                            method: 'POST',
                            url: "{{ route('khalti.verify') }}",
                            data: payload,
                            success: function(response) {
                                console.log('successfully paid');
                                // window.location = response.redirectto; 
                            },
                            error: function(data) {
                                console.log(data.message);
                            }
                        });
                    }


                },
                onError(error) {
                    console.log(error);
                },
                onClose() {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function() {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({
                amount: {{ $grand_total }}
            });
        }
    </script>
@endsection
