<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <title> Booking</title>

    <link rel='stylesheet' type='text/css' href='{{ URL::to('assets/invoice/style.css') }}' />
    <link rel='stylesheet' type='text/css' href='/assets/invoice/print.css' media="print" />
    <script type='text/javascript' src='/assets/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='/assets/invoice/example.js'></script>

</head>

<body>

    <div id="page-wrap">

        <div id="header">
            <p>H & H MOTORS | MOT - SERVICING - MECHANICAL REPAIRS - DIAGNOSTIC </p>
            <p>Branch Open 09:00 to 18:00 Monday - Friday and 09:00 to 16:00 Saturday</p>

        </div>

        <!-- <div id="identity">

			<p id="address">Chris Coyier
					123 Appleseed Street
					Appleville, WI 53719

 					Phone: (555) 555-5555</p>

			<div id="logo">

				<div id="logoctr">
					<a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
					<a href="javascript:;" id="save-logo" title="Save changes">Save</a>
					|
					<a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
					<a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
				</div>

				<div id="logohelp">
					<input id="imageloc" type="text" size="50" value="" /><br />
					(max width: 540px, max height: 100px)
				</div>
				<img id="image" src="images/logo.png" alt="logo" />
			</div>

		</div> -->

        <!-- <div style="clear:both"></div> -->

        <div class="top-addr">
            <div id="customer">

                <h1 id="customer-title">H & H MOTORS</h1> <br>
                <div class="add">
                    <p>281 Clare Street, London E2 9HD </p>
                    <p>Tel: 020 7739 3342 </p>
                    <p>Registered VAT No: 249 9663 45 </p>
                </div>
                <table id="meta" style="margin-top: 20px;">
                    <tr>
                        <th colspan="2">Vehicle Details</th>
                    </tr>
                    <tr>
                        <td class="meta-head">VRM</td>
                        <td>
                            <p>{{ $quotation['vehicle']['vrm'] }}</p>
                        </td>
                    </tr>
                    <tr>

                        <td class="meta-head">Make/Model</td>
                        <td>
                            <p id="date">{{ $quotation['vehicle']['vehicle_make']['name'] }} / {{ $quotation['vehicle']['vehicle_model']['name'] }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="meta-head">Endine</td>
                        <td>
                            <div class="due">Lorem, ipsum dolor.</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="meta-head">Colour</td>
                        <td>
                            <div class="due">{{ $quotation['vehicle']['color']['color'] }}</div>
                        </td>
                    </tr>

                </table>

            </div>
            <div class="invoice-side">
                <h2 style="float: right;">Booking</h2>

                <table id="meta">
                    <tr>
                        <td class="meta-head">Invoice #</td>
                        <td>
                            <p>{{ $quotation['booking_no'] }}</p>
                        </td>
                    </tr>
                    <tr>

                        <td class="meta-head">Date</td>
                        <td>
                            <p id="date">{{\Carbon\Carbon::parse($quotation->booking_date)->format('D m Y') }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="meta-head">Amount Due</td>
                        <td>
                            <div class="due"> £ {{ $quotation['total'] }}</div>
                        </td>
                    </tr>

                </table>

                <table id="meta" style="margin-top:20px;">
                    <tr>
                        <th colspan="2">Customer Details</th>
                    </tr>
                    <tr>
                        <td class="meta-head">Full Name</td>
                        <td>
                            <p>{{ $quotation['contact_detail']['name'] }}</p>
                        </td>
                    </tr>
                    <tr>

                        <td class="meta-head">Company</td>
                        <td>
                            <p id="date">{{ $quotation['contact_detail']['name'] }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="meta-head">Mobile</td>
                        <td>
                            <div class="due">{{ $quotation['contact_detail']['mobile_no'] }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="meta-head">Landline</td>
                        <td>
                            <div class="due">{{ $quotation['contact_detail']['mobile_no'] }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="meta-head">Address</td>
                        <td>
                            <div class="due">{{ $quotation['contact_detail']['address'] }}, {{ $quotation['contact_detail']['city'] }} {{ $quotation['contact_detail']['postal_code'] }}</div>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
        <!-- <table id="items">

			<tr>
				<th>Item</th>
				<th>Description</th>
				<th>Unit Cost</th>
				<th>Quantity</th>
				<th>Price</th>
			</tr>

			<tr class="item-row">
				<td class="item-name">
					<div class="delete-wpr"><p>Web Updates</p><a class="delete" href="javascript:;" title="Remove row">X</a></div>
				</td>
				<td class="description"><p>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</p></td>
				<td><p class="cost">$650.00</p></td>
				<td><p class="qty">1</p></td>
				<td><span class="price">$650.00</span></td>
			</tr>

			<tr class="item-row">
				<td class="item-name">
					<div class="delete-wpr"><p>SSL Renewals</p><a class="delete" href="javascript:;" title="Remove row">X</a></div>
				</td>

				<td class="description"><p>Yearly renewals of SSL certificates on main domain and several subdomains</p></td>
				<td><p class="cost">$75.00</p></td>
				<td><p class="qty">3</p></td>
				<td><span class="price">$225.00</span></td>
			</tr>

			<tr id="hiderow">
				<td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
			</tr>

			<tr>
				<td colspan="2" class="blank"> </td>
				<td colspan="2" class="total-line">Subtotal</td>
				<td class="total-value">
					<div id="subtotal">$875.00</div>
				</td>
			</tr>
			<tr>

				<td colspan="2" class="blank"> </td>
				<td colspan="2" class="total-line">Total</td>
				<td class="total-value">
					<div id="total">$875.00</div>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="blank"> </td>
				<td colspan="2" class="total-line">Amount Paid</td>

				<td class="total-value"><p id="paid">$0.00</p></td>
			</tr>
			<tr>
				<td colspan="2" class="blank"> </td>
				<td colspan="2" class="total-line balance">Balance Due</td>
				<td class="total-value balance">
					<div class="due">$875.00</div>
				</td>
			</tr>

		</table> -->

        <table id="items">
            <tr>
                <th>Item/Description</th>
                <th>Prod</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Discount</th>
                <th>Subtotal <br> Ex Vat</th>
                <th>Vat <br> Rate%</th>
                <th>Vat </th>
                <th>Total</th>
            </tr>

            @foreach ($quotation['booking_items'] as $quotation_item)
            <tr class="item-row">
                <td style="color: black;">{{ $quotation_item['product'] }}</td>
                <td>{{ $quotation_item['price_type']['name'] }}</td>
                <td>{{ $quotation_item['qty'] }}</td>
                <td>{{$quotation_item['unit_price']}}</td>
                <td>{{ $quotation_item['discount'] }}</td>
                <td>{{ $quotation_item['sub_total_ex_vat'] }}</td>
                <td> 7 %</td>
                <td>{{ $quotation_item['vat_price'] }}</td>
                <td>{{ $quotation_item['total_price'] }}</td>
            </tr>
                
            @endforeach
            

          


        </table>
        <br><br><br><br><br><br>

        <!-- <table id="items"> -->

        <!-- <tr>
				<th>Item</th>
				<th>Description</th>
				<th>Unit Cost</th>
				<th>Quantity</th>
				<th>Price</th>
			</tr>

			<tr class="item-row">
				<td class="item-name">
					<div class="delete-wpr">
						<p>Web Updates</p><a class="delete" href="javascript:;" title="Remove row">X</a>
					</div>
				</td>
				<td class="description">
					<p>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</p>
				</td>
				<td>
					<p class="cost">$650.00</p>
				</td>
				<td>
					<p class="qty">1</p>
				</td>
				<td><span class="price">$650.00</span></td>
			</tr>

			<tr class="item-row">
				<td class="item-name">
					<div class="delete-wpr">
						<p>SSL Renewals</p><a class="delete" href="javascript:;" title="Remove row">X</a>
					</div>
				</td>

				<td class="description">
					<p>Yearly renewals of SSL certificates on main domain and several subdomains</p>
				</td>
				<td>
					<p class="cost">$75.00</p>
				</td>
				<td>
					<p class="qty">3</p>
				</td>
				<td><span class="price">$225.00</span></td>
			</tr>

			<tr id="hiderow">
				<td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
			</tr> -->

        <!-- <tr>
				<td colspan="2" class="blank"> </td>
				<td colspan="2" class="total-line">Subtotal</td>
				<td class="total-value">
					<div id="subtotal">$875.00</div>
				</td>
			</tr>
			<tr>

				<td colspan="2" class="blank"> </td>
				<td colspan="2" class="total-line">Total</td>
				<td class="total-value">
					<div id="total">$875.00</div>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="blank"> </td>
				<td colspan="2" class="total-line">Amount Paid</td>

				<td class="total-value">
					<p id="paid">$0.00</p>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="blank"> </td>
				<td colspan="2" class="total-line balance">Balance Due</td>
				<td class="total-value balance">
					<div class="due">$875.00</div>
				</td>
			</tr> -->

        <!-- </table> -->
        <div class="main">
            <hr>
            <div class="tleft">

                <table id="items">
                    <tr>
                        <th colspan="6" style="text-align:center;">Vat Summary</th>
                    </tr>
                    <tr>
                        <th>Vat Rate(%)</th>
                        <th>Subtotal(€)</th>
                        <th>Discount(€)</th>
                        <th>Subtotal(€)</th>
                        <th>Vat(€) </th>
                        <th>Total(€)</th>
                    </tr>
                    <tr class="item-row">
                        <td style="color: black;">7.00 %</td>
                        <td>{{ $quotation['sub_total'] }}</td>
                        <td>0</td>
                        <td>{{  $quotation['sub_total']  }}</td>
                        <td>{{ $quotation['vat'] }}</td>
                        <td>{{ $quotation['total'] }}</td>

                    </tr>



                </table>


            </div>
            <div class="tright">
                <table id="items" style="border:none !important;margin-left:9px">
                    <tr>
                        <th colspan="6" style="text-align:center;">Total(€)</th>
                    </tr>
                    <tr>
                        <!-- <td colspan="2" class="blank"> </td> -->
                        <td colspan="2" class="total-line" style="color:black">Total Due</td>
                        <td class="total-value">
                            <div id="subtotal">£ {{ $quotation['total'] }}</div>
                        </td>
                    </tr>
                    <tr>

                        <!-- <td colspan="2" class="blank"> </td> -->
                        <td colspan="2" class="total-line" style="color:black">Paid</td>
                        <td class="total-value">
                            <div id="total">£ 0 </div>
                        </td>
                    </tr>
                    <tr>
                        <!-- <td colspan="2" class="blank"> </td> -->
                        <td colspan="2" class="total-line" style="color:black">Balance</td>

                        <td class="total-value">
                            <p id="paid">£{{ $quotation['total'] }}</p>
                        </td>
                    </tr>
                    <!-- <tr>
						<td colspan="2" class="blank"> </td>
						<td colspan="2" class="total-line balance">Balance Due</td>
						<td class="total-value balance">
							<div class="due">$875.00</div>
						</td>
					</tr> -->
                </table>

            </div>
        </div>

        <hr>

        <div class="footer">
            <div class="footer_inner">

                <div class="footer-left">
                    <p>Thank You For Using <a href="#"> Link Moto </a></p>
                    <p><strong> Ph:</strong>+923426786629</p>
                    <p> <strong> Email:</strong>info@linkmoto.com</p>
                    <p> <strong> Address:</strong>189 CCA DHA Phase Lahore Pakistan</p>

                </div>
                <div class="footer-right">
                    <div class="flogo">
                        <img src="{{ URL::to($setting['headerlogo']) }}" alt="logo" width="300px">
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <p>&copy; 2022 LinkMoto.com | All Right Reserved</p>
            </div>

        </div>
    </div>

</body>

</html>