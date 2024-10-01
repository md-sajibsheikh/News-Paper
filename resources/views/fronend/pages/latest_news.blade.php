@extends('home')


@section('main-content')

<main>
    <!-- About US Start -->
    <div class="about-area2 gray-bg pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <img src="/frontend/assets/img/trending/trending_top.jpg" alt="">
                        </div>
                        <div class="heading-news mb-30 pt-30">
                            <h3>Faruq Mahfuz Anam James (born 2 October 1964), known mononymously as James.</h3>
                        </div>
                        <div class="about-prea">
                            <p class="about-pera1 mb-25"> Faruq Mahfuz Anam James (born 2 October 1964), known mononymously as James, is a Bangladeshi singer-songwriter, guitarist and composer, also known as a playback singer.</p>
                            <p class="about-pera1 mb-25">He is the lead singer, songwriter and guitarist of the rock band Nagar Baul (previously Feelings).</p>
                            <p class="about-pera1 mb-25">
                                He is often referred by the name "Guru"[2] which means "Master" or "Teacher".

                                James was born and raised in Naogaon, but grew up in Chittagong city. James rose to mainstream fame in the 1990s as the frontman of Feelings, which is one of the "Big Three of Rock", who were responsible for developing and popularizing hard rock music in Bangladesh, along with LRB and Ark. Feelings is considered to be the pioneer of psychedelic rock in Bangladesh.

                                James has also led a successful solo career, with hit albums like Ananya (1989), Palabe Kothay (1995), Dukhini Dukkho Korona (1997), Thik Achhe Bondhu (1999). He sang in four Bollywood films, including Gangster (2006), Woh Lamhe (2006), Life in a... Metro (2007), Warning (2013).[3]

                                James won Bangladesh National Film Award for Best Male Playback Singer twice for his performance in the films of Desha: The Leader (2014) and Swatta (2017).
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3>Unordered list style?</h3>
                        </div>
                        <div class="about-prea">
                            <p class="about-pera1 mb-25">Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                            <p class="about-pera1 mb-25">Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                            <p class="about-pera1 mb-25">
                                My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.
                                the refractor telescope uses a convex lens to focus the light on the eyepiece.
                                The reflector telescope has a concave lens which means it telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount.
                                Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                        </div>
                        <div class="social-share pt-30">
                            <div class="section-tittle">
                                <h3 class="mr-20">Share:</h3>
                                <ul>
                                    <li><a href="#"><img src="/frontend/assets/img/news/icon-ins.png" alt=""></a></li>
                                    <li><a href="#"><img src="/frontend/assets/img/news/icon-fb.png" alt=""></a></li>
                                    <li><a href="#"><img src="/frontend/assets/img/news/icon-tw.png" alt=""></a></li>
                                    <li><a href="#"><img src="/frontend/assets/img/news/icon-yo.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- From -->
                    <div class="row">
                        <div class="col-lg-8">
                            <form action="{{route('share.submit')}}" method="post" class="form-contact contact_form mb-80" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button button-contactForm boxed-btn boxed-btn2">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="/frontend/assets/img/news/icon-fb.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="/frontend/assets/img/news/icon-tw.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="/frontend/assets/img/news/icon-ins.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="/frontend/assets/img/news/icon-yo.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src="/frontend/assets/img/news/news_card.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About US End -->
</main>

@endsection