@extends('layouts.admin')

@section('content')


    <div class="row">

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row invoice-preview">
                <!-- Invoice -->
                <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
                    <div class="card invoice-preview-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column m-sm-3 m-0">
                                <div class="mb-xl-0 mb-4">
                                    <div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
                                        <span class="app-brand-text fw-bold fs-4"> VENDER</span>
                                    </div>
                                    <p class="mb-2">Vender Market</p>
                                    <p class="mb-2">Yakkasaroy filiyali</p>
                                    <p class="mb-0">+998 (95) 000 04 09 , +998 (93) 836 61 11</p>
                                </div>
                                <div>
                                    <h4 class="fw-semibold mb-2">INVOICE #{{ $order->id  }}</h4>
                                    <div class="mb-2 pt-1">
                                        <span>Date Issues:</span>
                                        <span class="fw-semibold">{{ $order->created_at->format('d.m.Y') }}</span>
                                    </div>
                                    <div class="pt-1">
                                        <span>Date Due:</span>
                                        <span class="fw-semibold">{{ $order->updated_at->format('d.m.Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="card-body">
                            <div class="row p-sm-3 p-0">
                                <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                                    <h6 class="mb-3">Invoice To:</h6>
                                    <p class="mb-1">Thomas shelby</p>
                                    <p class="mb-1">Shelby Company Limited</p>
                                    <p class="mb-1">Small Heath, B10 0HF, UK</p>
                                    <p class="mb-1">718-986-6062</p>
                                    <p class="mb-0">peakyFBlinders@gmail.com</p>
                                </div>

                        </div>
                        <div class="table-responsive border-top">
                            <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Description</th>
                                    <th>Cost</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td class="text-nowrap">Vuexy Admin Template</td>
                                    <td class="text-nowrap">HTML Admin Template</td>
                                    <td>$32</td>
                                    <td>1</td>
                                    <td>$32.00</td>
                                </tr>
                                    <td colspan="3" class="align-top px-4 py-4">
                                        <p class="mb-2 mt-3">
                                            <span class="ms-3 fw-semibold">Salesperson:</span>
                                            <span>Alfie Solomons</span>
                                        </p>
                                        <span class="ms-3">Thanks for your business</span>
                                    </td>
                                    <td class="text-end pe-3 py-4">
                                        <p class="mb-2 pt-3">Subtotal:</p>
                                        <p class="mb-2">Discount:</p>
                                        <p class="mb-2">Tax:</p>
                                        <p class="mb-0 pb-3">Total:</p>
                                    </td>
                                    <td class="ps-2 py-4">
                                        <p class="fw-semibold mb-2 pt-3">$154.25</p>
                                        <p class="fw-semibold mb-2">$00.00</p>
                                        <p class="fw-semibold mb-2">$50.00</p>
                                        <p class="fw-semibold mb-0 pb-3">$204.25</p>
                                    </td>
                                @endforeach
                                </tbody>

                            </table>
                        </div>

                        <div class="card-body mx-3">
                            <div class="row">
                                <div class="col-12">
                                    <span class="fw-semibold">Note:</span>
                                    <span>It was a pleasure working with you and your team. We hope you will keep us in mind for
                            future freelance projects. Thank You!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Invoice -->

                <!-- Invoice Actions -->
                <div class="col-xl-3 col-md-4 col-12 invoice-actions">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-primary d-grid w-100 mb-2 waves-effect waves-light" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                                <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-send ti-xs me-1"></i>Send Invoice</span>
                            </button>
                            <button class="btn btn-label-secondary d-grid w-100 mb-2 waves-effect">Download</button>
                            <a class="btn btn-label-secondary d-grid w-100 mb-2 waves-effect" target="_blank" href="./app-invoice-print.html">
                                Print
                            </a>
                            <a href="./app-invoice-edit.html" class="btn btn-label-secondary d-grid w-100 mb-2 waves-effect">
                                Edit Invoice
                            </a>
                            <button class="btn btn-primary d-grid w-100 waves-effect waves-light" data-bs-toggle="offcanvas" data-bs-target="#addPaymentOffcanvas">
                                <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-currency-dollar ti-xs me-1"></i>Add Payment</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Actions -->
            </div>

            <!-- Offcanvas -->
            <!-- Send Invoice Sidebar -->
            <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
                <div class="offcanvas-header my-1">
                    <h5 class="offcanvas-title">Send Invoice</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 flex-grow-1">
                    <form>
                        <div class="mb-3">
                            <label for="invoice-from" class="form-label">From</label>
                            <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="invoice-to" class="form-label">To</label>
                            <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="invoice-subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods">
                        </div>
                        <div class="mb-3">
                            <label for="invoice-message" class="form-label">Message</label>
                            <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">Dear Queen Consolidated,
          Thank you for your business, always a pleasure to work with you!
          We have generated a new invoice in the amount of $95.59
          We would appreciate payment of this invoice by 05/11/2021</textarea>
                        </div>
                        <div class="mb-4">
                      <span class="badge bg-label-primary">
                        <i class="ti ti-link ti-xs"></i>
                        <span class="align-middle">Invoice Attached</span>
                      </span>
                        </div>
                        <div class="mb-3 d-flex flex-wrap">
                            <button type="button" class="btn btn-primary me-3 waves-effect waves-light" data-bs-dismiss="offcanvas">Send</button>
                            <button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Send Invoice Sidebar -->

            <!-- Add Payment Sidebar -->
            <div class="offcanvas offcanvas-end" id="addPaymentOffcanvas" aria-hidden="true">
                <div class="offcanvas-header mb-3">
                    <h5 class="offcanvas-title">Add Payment</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body flex-grow-1">
                    <div class="d-flex justify-content-between bg-lighter p-2 mb-3">
                        <p class="mb-0">Invoice Balance:</p>
                        <p class="fw-bold mb-0">$5000.00</p>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="invoiceAmount">Payment Amount</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" id="invoiceAmount" name="invoiceAmount" class="form-control invoice-amount" placeholder="100">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="payment-date">Payment Date</label>
                            <input id="payment-date" class="form-control invoice-date flatpickr-input" type="text" readonly="readonly">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="payment-method">Payment Method</label>
                            <select class="form-select" id="payment-method">
                                <option value="" selected="" disabled="">Select payment method</option>
                                <option value="Cash">Cash</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Paypal">Paypal</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="payment-note">Internal Payment Note</label>
                            <textarea class="form-control" id="payment-note" rows="2"></textarea>
                        </div>
                        <div class="mb-3 d-flex flex-wrap">
                            <button type="button" class="btn btn-primary me-3 waves-effect waves-light" data-bs-dismiss="offcanvas">Send</button>
                            <button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Add Payment Sidebar -->

            <!-- /Offcanvas -->
        </div>


    </div>
@endsection
