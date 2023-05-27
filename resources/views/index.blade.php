<!doctype html>

<html>

<head>
    <title>
        DAT
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>

<body>
    <header>
        <div class="container" id="top-header-container">
            <div id="header-navigation">
                <nav>
                    Про нас
                </nav>
                <nav>
                    <a href="/catalog">Каталог продукції</a> 
                </nav>
                <nav>
                    Оплата і доставка 
                </nav>
                <nav>
                    Партнери
                </nav>
                <nav>
                    Новини
                </nav>
                <nav>
                    Контакти
                </nav>
            </div>

            <div id="header-singup">
                <img src="src/signin.png" alt="">
                <span>
                    Вхід  
                </span>
                <span>
                    |
                </span>
                <span>
                    Реестрація
                </span>
            </div>

			<div id="header-mobile-menu">
				<img src="src/brgrmenu.png" alt="">
			</div>
        </div>
        <div class="container" id="bottom-header-container">
            <div id="bottom-header-first-row">
                <div id="bottom-header-logo">
                    <a href="/"><img src="src/logo.png" alt=""></a>
                </div>
                <div id="bottom-header-search-bar">
                    <span>
                        Пошук
                    </span>
                    <img src="src/search.png" alt="">
                </div>
                <div class="bottom-header-contact">
                    <img src="src/phone.png" alt="">
                    <div class="contact-number">
                        <span>
                            +38 (067) 115 00 58
                        </span>
                        <span class="contact-Feedback">
                            Замовити зворотній зв’язок
                        </span>
                        
                    </div>
                </div>
                <div id="bottom-header-icons">
                    <img src="src/favorites.png" alt="">
                    <img src="src/equals.png" alt="">
                    <img src="src/cart.png" alt="">
                </div>
            </div>
            <div id="bottom-header-second-row">
                <div id="bottom-header-navigation">
                    <div id="navigation-buttons">
                        <div class="nav-button">
                            <img src="src/seeds2.png" alt="">
                            <span>
                                Насіння
                            </span>
                        </div>
                        <div class="nav-button">
                            <img src="src/sapling.png" alt="">
                            <span>
                                Засоби захисту рослин
                            </span>
                        </div>
                        <div class="nav-button">
                            <img src="src/fertilizer.png" alt="">
                            <span>
                                Добрива
                            </span>
                        </div>
                        <div class="nav-button">
                            <img src="src/trees.png" alt="">
                            <span>
                                кормова група
                            </span>
                        </div>
                        <div class="nav-button">
                            <img src="src/farmer.png" alt="">
                            <span>
                                Агроному в поміч
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    
    <div class="container" id="banner" style="background-image: url(src/bannerbg.png);">
        <div id="banner-content">
            <img src="src/emblem.png" alt="">
            <div id="banner-text">
                <h1>
                    Аграрний інтернет-магазин
                </h1>
    
                <span>
                    Основна сфера діяльності – дистрибуція насіння, засобів захисту рослин, мінеральних макро - та мікродобрив
                </span>
    
                <div class="banner-button" id="default-button">
                    Про компанію
                </div>
            </div>
        </div>

        <div id="banner-img">
            <img src="src/banner.png" alt="">

        </div>

		<div class="banner-button" id="mobile-button">
			Про компанію
		</div>
    </div>

    <div class="container" id="about">
        <div id="about-photo"> 
              <img src="src/aboutphoto.png" alt="">
        </div>
        <div id="about-text">
            <div id="about-title">
                <img src="src/emblem.png" alt="">
                <h1>
                    Про нас
                </h1>
            </div>

            <p>
                «Компанія ТОВ “ДАМАР АГРОТРЕЙД” — молода команда, яка з’явилась на аграрному ринку у 2020 році. Ми не боїмось труднощів і викликів. Тому навіть складний ковідний період, світова пандемія не стали на заваді успішному старту.
            </p>
            <p>
                Отже, ми — сміливі, ми — драйвові, ми — ті, що розвивають рослинництво та допомагають ставати успішними тисячам вітчизняних аграріїв.
                
            </p>
            <p>
                Бачення: компанія ТОВ “ДАМАР АГРОТРЕЙД” тримає курс на підвищення престижності, довіри до засобів захисту рослин made in UA. Прагнемо, аби в кожному регіоні України наш споживач мав доступ до якісної продукції та консалтингу від фахівців команди. 
                
            </p>
            <p>
                Місія: усе продуктове портфоліо, консультативні послуги ТОВ “ДАМАР АГРОТРЕЙД” направлені на підвищення рентабельності рослинництва в мінливих кліматичних умовах України. Також ставимо собі завдання підвищувати обізнаність клієнтів щодо сучасних методів ведення рослинництва...
                
            </p>

            <div class="banner-button">
                Докладніше
            </div>
        </div>
    </div>

    <div class="container" id="novelty">
        <div class="container-title"> 
            <img src="src/emblem.png" alt="">
            <h1>
                Новинки
            </h1>
            <img src="src/emblem.png" alt="">
        </div>

        <div class="card-container" id="novelty-list">
			@foreach($products->slice(0, 4) as $product)
			<div class="product-card">
				<div class="card-image">
					<a href="/product/{{$product->id}}"><img class="card-main-image" src="{{asset($product->product_image)}}" alt=""></a>
					<img class="card-vesi" src="src/products/vesi.png" alt="">
				</div>

				<div class="card-text">
					<h3>
						{{$product->product_name}}
					</h3>
					<span style="color: #1E6140;">
						В наявності
					</span>
					<div class="card-text-price">
						<div class="card-price"> 
							<h3>
								{{$product->product_price}}
							</h3>
							<span style="color: #84BE51;">
								1 шт
							</span>
						</div>
						<img src="src/products/but.png" alt="">
					</div>
				</div>
			</div>
			@endforeach
        </div>
    </div>

    <div class="container" id="promo">
        <div class="container-title" id="promo-title"> 
            <img src="src/emblem.png" alt="">
            <h1>
                Новинки
            </h1>
            <img src="src/emblem.png" alt="">
        </div>

        <div class="card-container" id="promo-list">
		@foreach($products->slice(0, 4) as $product)
			<div class="product-card">
				<div class="card-image">
					<a href="/product/{{$product->id}}"><img class="card-main-image" src="{{asset($product->product_image)}}" alt=""></a>
					<img class="card-vesi" src="src/products/vesi.png" alt="">
				</div>

				<div class="card-text">
					<h3>
						{{$product->product_name}}
					</h3>
					<span style="color: #1E6140;">
						В наявності
					</span>
					<div class="card-text-price">
						<div class="card-price"> 
							<h3>
								{{$product->product_price}}
							</h3>
							<span style="color: #84BE51;">
								1 шт
							</span>
						</div>
						<img src="src/products/but.png" alt="">
					</div>
				</div>
			</div>
		@endforeach
        </div>
        <div class="banner-button" id="promo-button">
            Дивитися усі товари
        </div>
    </div>

    <div class="container" id="partners">
        <div class="container-title" id="promo-title"> 
            <img src="src/emblem.png" alt="">
            <h1>
                Партнери
            </h1>
            <img src="src/emblem.png" alt="">
        </div>

        <div id="partners-list"> 
            <div class="partner">
                <img src="src/partners/1.png" alt="">
            </div>
            <div class="partner">
                <img src="src/partners/2.png" alt="">
            </div>
            <div class="partner">
                <img src="src/partners/3.png" alt="">
            </div>
            <div class="partner">
                <img src="src/partners/4.png" alt="">
            </div>
            <div class="partner">
                <img src="src/partners/5.png" alt="">
            </div>
        </div>
    </div>

    <div class="container article" id="semenA" style="background-image: url(src/semena.png);">
        <div class="container-title article-title" id="semenA-title"> 
            <img src="src/emblem.png" alt="">
            <h1>
                Семена
            </h1>
        </div>

        <p>
            Вирощування овочів, квітів на своїй ділянці або просто на балконі - це улюблене заняття багатьох дачників та городників. Звичайно, свіжі овочі з власного городу натуральні, смачні та корисні. Але щоб отримати хороший урожай томату або капусти, насолоджуватися цвітінням петунії або троянди, важливо не тільки правильно доглядати за рослинами. Все починається із вибору посівного матеріалу. І тут постає питання: яке насіння вибрати? Адже вони мають бути якісними, давати гарну схожість.
        </p>
        <P>
            Предлагаем покупателям широкий выбор семян овощей. У нас вы можете найти семена баклажан, разных видов капусты, бобовых и бахчевых культур, томата, перца, огурцов, лука, салата, чеснока, картофеля от отечественных и зарубежных производителей.
        </P>
        <P>
            Также вы можете найти в нашем каталоге семена цветов: однолетних (петуния, львиный зев, календула и т.д.), двулетних (виола, примула, мальва), многолетних (иберис, анемона, гибискус, дельфиниум, фрезия), луковичных (тюльпаны, лилия, ирис, нарциссы), комнатных (гербера, бегония, кактус, мимоза, пасифлора). Конечно, это далеко не весь список — каждая хозяйка найдет здесь свой любимый цветок.
        </P>
        <P>
            В широком ассортименте представлены саженцы плодовых деревьев, роз, ягодных кустов. У нас вы можете купить семена газонной травы, а также сопутствующие товары: удобрения, средства защиты, биопрепараты, садовый инвентарь, субстраты, грунты, агроволокно, горшки, кассеты для рассады. 
        </P>
    </div>

	<footer>
        <div class="container" id="footer-container">
            <div id="footer-items">
                <div class="footer-item">
                    <img id="footer-logo" src="src/logo.png" alt="">
                    <span id="footer-logo-attribution">
                        Пропонуємо покупцям широкий вибір насіння овочів
                    </span>
                </div>
                <div class="footer-item">
                    <h3>
                        Інформація
                    </h3>
                    <a href="">
                        Про компанію
                    </a>
                    <a href="">
                        
                        Оплата і доставка
                    </a>
                    <a href="">
                        
                        Партнери
                    </a>
                </div>
                <div class="footer-item">
                    <h3>
                        Товари
                    </h3>
                    <a href="">
                        Каталог продукції
                    </a>
                    <a href="">     
                        Засоби захисту рослин
                    </a>
                    <a href="">
                        
                        Насіння
                    </a>
                    <a href="">
                        
                        Добрива
                    </a>
                    <a href="">
                        
                        Агроному в поміч
                    </a>
                </div>
                <div class="footer-item">
                    <h3>
                        Контакти
                    </h3>
                    <div class="bottom-header-contact footer-contact">
                        <img src="src/phone.png" alt="">
                        <div class="contact-number">
                            <span>
                                +38 (067) 115 00 58
                            </span>
                            <span class="contact-Feedback">
                                Замовити зворотній зв’язок
                            </span>
                        </div>
                    </div>
                    <div class="bottom-header-contact footer-contact">
                        <img src="src/email.png" alt="">
                        <div class="contact-number">
                            <span>
                                DAT@gmail.com
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>
            <div id="copyright">
                © 2022 DAT
            </div>
        </div>

    </footer>

</body>


</html>