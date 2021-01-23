<div class="container-fluid">
    <div class="row justify-content-end ">
        <ul class="list-inline text-right">
            <li>

            </li>
            <li>
                <a href="/cart" class="btn ml-5 text-color-darkblue text-color-white" > <i class="fa fa-shopping-cart fa-2x text-white" aria-hidden="true"></i>Items  {{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</a>
            </li>
        </ul>
    </div>
</div>