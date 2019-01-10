<section class="newsletter-subscription stretch-full-width"
         style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/26.jpg ); height: 460px;">
    <div class="caption">
        <h3 class="title">Подписаться на рассылку</h3>
        <span class="marketing-text">Подпишитесь на нашу рассылку! <br> Горячие предложения и промокоды. </span>
        <form action="{{route('mail-subscribed')}}" method="POST">
            @csrf
            <div class="newsletter-form">
                <input type="email" name="email" placeholder="Ведите свой e-mail">
                <button class="button" type="submit">Подписаться</button>
            </div>
        </form>
    </div>
</section>