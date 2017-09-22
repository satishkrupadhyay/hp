<html>
<head>
<title>Invoice</title>
<style type="text/css">
    #page-wrap {
        width: 70%;
        margin: 0 auto;
        border: 1.5px solid;
        border-spacing: 100px;
    }
    .center-justified {
        text-align: justify;
        margin: 0 auto;
        width: 30em;
    }
    table.outline-table {
        border: 0.7px solid #ddd;
        border-spacing: 0;
    }
    table.outline-border {
        border-spacing: 20px;
    }
    tr.border-bottom td, td.border-bottom {
        
        border-bottom: 1px solid #ddd;
        font-weight:bold ;
    }
    tr.border-top td, td.border-top {
        border-top: 1px solid #ddd;
    }
    tr.border-right td, td.border-right {
        border-right: 1px solid #ddd;
    }
    tr.border-right td:last-child {
        border-right: 0px;
    }
    tr.center td, td.center {
        text-align: center;
        vertical-align: text-top;
    }
    td.pad-left {
        padding-left: 5px;
    }
    tr.right-center td, td.right-center {
        text-align: right;
        padding-right: 50px;
    }
    tr.right td, td.right {
        text-align: right;
    }
    .grey {
        background:#ddd;
    }
</style>
</head>
<body>
    <div id="page-wrap">
        <center><strong><h4>TAX INVOICE</h4></strong>        
                        <p ><strong>STORE NAME</strong></p>
                     <p>Guwahati | Phone: 9876543210 | e-mail:store@email.com</p></center>
        <table style="width:100%">
            <tbody>
                
                    <!-- <td width="30%">
                        <img src="http://exotel.in/wp-content/uploads/2013/03/exotel.png">  your logo here 
                        
                    </td> -->
                                   
                   
                        <tr>
                            <td>
                                <div class="left">
                                    <strong>Date:</strong> <?php echo date('d/M/Y');?><br>
                                    <strong>Invoice Number:</strong> BF123<br>
                                    <strong>Due Date:</strong> 10/01/2013<br>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="left">
                                    <strong>Invoice To:</strong> Customer Name <br>
                                    <strong>Invoice Amount:</strong> Rs. 11,236 <br>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2"></td>
                        </tr>
                               
                        <tr>
                            <td>
                                <div align="left">
                                    <strong>Shipping Address</strong><br>
                                Next Step Webs, Inc.<br>
                                12345 Sunny Road<br>
                                Sunnyville, TX 12345
                                </div>
                            </td>
                            
                            <td>
                                <div align="right">
                                    <strong>Billing Address</strong><br>
                                Acme Corp.gdfhsfhfjgjfhjfhjghjhgjhgjhgdjhfj<br>
                                John Doe<br>
                                john@example.com
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                        </tr>
                    
            </tbody>
        </table>
        
   
        <table width="100%" class="outline-table">
            <tbody>
                <!-- <tr class="border-bottom border-right grey">
                    <td colspan="5"><strong>Summary</strong></td>
                </tr> -->
                <tr class="border-bottom border-right center grey ">
                    <td width="10%"><strong>Sl. No.</strong></td>
                    <td width="50%"><strong>Particulars</strong></td>
                    <td width="10%"><strong>Quantity</strong></td>
                    <td width="15%"><strong>MRP</strong></td>
                    <td width="15%"><strong>Amount (INR)</strong></td>
                </tr>
                
                <tr class="border-right">
                    <td class="pad-left"><b>{{$drug->id}}</b></td>
                    <td class="center">{{$drug->drug_name}}</td>
                    <td class="center">9</td>
                    <td class="center">5.00</td>
                    <td class="right">45.00</td>
                </tr>
                
                <tr class="border-right">
                    <td class="pad-left">&nbsp;</td>
                    <td class="pad-left">&nbsp;</td>
                    <td class="pad-left">&nbsp;</td>
                    <td class="right border-top">Subtotal</td>
                    <td class="right border-top">100.00</td>
                </tr>
                <tr class="border-right">
                    <td class="pad-left">&nbsp;</td>
                    <td class="pad-left">&nbsp;</td>
                    <td class="pad-left">&nbsp;</td>
                    <td class="right border-top">Tax</td>
                    <td class="right border-top">1.35</td>
                </tr>
                <tr class="border-right">
                    <td class="pad-left">&nbsp;</td>
                    <td class="pad-left">&nbsp;</td>
                    <td class="pad-left">&nbsp;</td>
                    <td class="right border-top">Grand Total</td>
                    <td class="right border-top">Rs. 101.35</td>
                </tr>
            </tbody>
        </table>
        <p>&nbsp;</p>
        
        <p>&nbsp;</p>
        
        <table width="100%">
            <tbody>
                <tr>
                    <td width="50%">
                        <div align="left"><strong>Declaration:</strong><br>
                           Medicines without Batch no. and expiry date will not be taken back and it will be acceptable within one month from the date of billing. Please
                           consult Doctor before using the medicine.
                            
                        </div>
                    </td>
                    <td width="50%">
                        <div align="right" "><strong>STORE NAME</strong><br>
                        <br>
                        <br>
                        <br>
                        <strong>Authorised Signatory</strong><br>
                        
                        </div>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <p>&nbsp;</p>
    
    </div>
</body>
</html>