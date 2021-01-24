<div class="container-fluid">
    <div class="row justify-content-end ">
        <ul class="list-inline text-right">
            <li>

            </li>
            <li>
                <a href="/cart" class="btn ml-5 text-color-darkblue text-color-white" > <i class="fa fa-shopping-cart text-white" aria-hidden="true"></i> <span class="mr-2">Items  {{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span> </a>
            </li>
        </ul>
    </div>
</div>