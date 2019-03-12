<section class="newsletter-subscription stretch-full-width"
         style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/26.jpg ); height: 460px;">
    <div class="caption">
        <h1 class="title" style="background-color: #8adb08; color:red;" ><strong> - Подписаться на рассылку - </strong> </h1>
        <h4 style="color:black;" ><strong> Подпишитесь на нашу рассылку! <br> Горячие предложения и промокоды. </strong> </h4>
        <form action="{{route('mail-subscribed')}}" method="POST">
            @csrf
            <div class="newsletter-form">
                <input type="email" name="email" placeholder="Ведите свой e-mail">
                <button class="button" type="submit">Подписаться</button>
            </div>
        </form>
    </div>
</section>