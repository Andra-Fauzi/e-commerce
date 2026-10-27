@extends("layouts.app")

@section("title", $produk->nama)

@section("content")

<main class="flex justify-between gap-5 p-5">
    {{-- {{ $produk->img_path }} --}}
    <div class="gambar flex-1">
        <img src="{{ asset($produk->img_path) }}" alt="img" class="w-full aspect-[4/3] object-cover">
    </div>
    <div class="deskripsi flex-1 p-5 w-full m-5">
        <h1 class="text-5xl font-bold mb-5">{{ $produk->nama }}</h1>
        <div class="deskripsi-text p-3 mt-5 overflow-y-auto max-h-64">
            <h1 class="text-2xl mb-5">{{ $produk->deskripsi }}</h1>
            {{-- <h1 class="text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt labore minus corporis error dolor! Odio repellendus aliquid numquam magnam laborum rem aut enim laudantium voluptate perspiciatis laboriosam error corrupti debitis non officiis aliquam excepturi beatae ad sed iusto, eaque in omnis! Suscipit maiores eius sed quam? Velit nisi odio possimus deserunt, vitae omnis! Facere temporibus pariatur libero praesentium officiis! Quia libero id aut enim debitis nisi fuga dicta. Illo cupiditate dolores architecto, dolore eaque corporis molestias distinctio labore quae? Nihil atque quo nam nobis esse laborum vero, eligendi similique sunt vel voluptates, asperiores explicabo illum! Quam atque facilis, vitae magni minus eveniet ratione! Exercitationem voluptatem quis magnam quisquam autem ipsam inventore, suscipit tenetur numquam ab animi assumenda illo perferendis laudantium modi debitis voluptate omnis. Suscipit aspernatur repellat ex maxime corporis mollitia modi ipsa nemo debitis odio animi, necessitatibus dolorum quas? Non, voluptatem unde alias quia dolores praesentium facere quaerat veritatis soluta ullam numquam quo doloremque ex nam temporibus odit quasi, dolorem vero itaque perspiciatis. Qui, obcaecati architecto, id error sed quod soluta quasi aliquam pariatur esse non sequi optio iure. Ratione obcaecati nisi totam sed laboriosam, cum asperiores eum voluptatem labore est, nostrum et consectetur debitis accusantium eos a? Consequatur!</h1> --}}
        </div>
        <div class="button w-full flex mt-5 gap-2">
            <a class="border-2 rounded-2xl px-2 flex justify-center items-center" href="#"><img class="" src="{{ asset("assets/add_shopping_cart.svg") }}" alt=""></a>
            <a href="#" class="block w-full border-2 rounded-xl p-2"><div class="flex justify-center"><img src="{{ asset("assets/shopping_cart_checkout.svg") }}" alt="">Checkout</div></a>
        </div>
    </div>
</main>

@endsection