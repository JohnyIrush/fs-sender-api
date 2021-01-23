<div class="container-fluid">
    <div class="row justify-content-end ">
        <ul class="list-inline text-right">
            <li>

            </li>
            <li>
                <button class="btn btn-lg ml-5 text-color-darkblue text-white text-color-white" role="button" ><i class="fas fa-shopping-bag text-white mr-2"></i>  <span>Checkout </span> {{Session::has('cart') ? Session::get('cart')->totalQty : ''}} Items </button>
            </li>
        </ul>
    </div>
</div>