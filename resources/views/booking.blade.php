@include('partials.customer.frametop')


@include('partials.customer.navbar')

<div class="booking d-flex justify-content-center mb-5" style="margin-top: 105px;">
    <form style="width: 90%; background-color: white; padding: 50px; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);
        -webkit-box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);">
        <div class="row">
            <h1 class="text-center mb-5 fw-bold">BOOKING FOR SERVICE</h1>
            <div class="col-6 px-3">
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold fs-4">Name</label>
                    <input type="text" class="name form-control" id="name" aria-describedby="emailHelp" placeholder="Evelyn">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>
            
            <div class="col-6">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

</div>

@include('partials.customer.footer')


@include('partials.customer.framedown')