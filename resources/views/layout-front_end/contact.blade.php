@extends('layout-front_end.style_home')
@section('section')
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>GALLERY</p>
                <h2>Buffalo Basket Matinella</h2>
            </header>
        </div>
    </section>
@endsection
@section('content')
    <div class="container">
        <div class="col-md-8 order-md-1">
             <h4 class="mb-3">Billing address</h4>
             <form class="needs-validation" novalidate>
               <div class="row">
                 <div class="col-md-6 mb-3">
                   <label for="firstName">First name</label>
                   <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                   <div class="invalid-feedback">
                     Valid first name is required.
                   </div>
                 </div>
                 <div class="col-md-6 mb-3">
                   <label for="lastName">Last name</label>
                   <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                   <div class="invalid-feedback">
                     Valid last name is required.
                   </div>
                 </div>
               </div>

               <div class="mb-3">
                 <label for="email">Email <span class="text-muted">(Optional)</span></label>
                 <input type="email" class="form-control" id="email" placeholder="you@example.com">
                 <div class="invalid-feedback">
                   Please enter a valid email address for shipping updates.
                 </div>
               </div>

               <div class="mb-3">
                 <label for="address">Address</label>
                 <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                 <div class="invalid-feedback">
                   Please enter your shipping address.
                 </div>
               </div>

               <div class="row">
                 <div class="col-md-5 mb-3">
                   <label for="country">Country</label>
                   <select class="custom-select d-block w-100" id="country" required>
                     <option value="">Choose...</option>
                     <option>United States</option>
                   </select>
                   <div class="invalid-feedback">
                     Please select a valid country.
                   </div>
                 </div>
                 <div class="col-md-4 mb-3">
                   <label for="state">State</label>
                   <select class="custom-select d-block w-100" id="state" required>
                     <option value="">Choose...</option>
                     <option>California</option>
                   </select>
                   <div class="invalid-feedback">
                     Please provide a valid state.
                   </div>
                 </div>
               </div>
           </div>
       </div>
@endsection
