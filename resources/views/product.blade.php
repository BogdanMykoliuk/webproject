<!doctype html>

<html>

<head>
    <title>
        DAT
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
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
                <img src="/src/signin.png" alt="">
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
				<img src="/src/brgrmenu.png" alt="">
			</div>
        </div>
        <div class="container" id="bottom-header-container">
            <div id="bottom-header-first-row">
                <div id="bottom-header-logo">
				<a href="/"><img src="/src/logo.png" alt=""></a>

                </div>
                <div id="bottom-header-search-bar">
                    <span>
                        Пошук
                    </span>
                    <img src="/src/search.png" alt="">
                </div>
                <div class="bottom-header-contact">
                    <img src="/src/phone.png" alt="">
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
                    <img src="/src/favorites.png" alt="">
                    <img src="/src/equals.png" alt="">
                    <img src="/src/cart.png" alt="">
                </div>
            </div>
            <div id="bottom-header-second-row">
                <div id="bottom-header-navigation">
                    <div id="navigation-buttons">
                        <div class="nav-button">
                            <img src="/src/seeds2.png" alt="">
                            <span>
                                Насіння
                            </span>
                        </div>
                        <div class="nav-button">
                            <img src="/src/sapling.png" alt="">
                            <span>
                                Засоби захисту рослин
                            </span>
                        </div>
                        <div class="nav-button">
                            <img src="/src/fertilizer.png" alt="">
                            <span>
                                Добрива
                            </span>
                        </div>
                        <div class="nav-button">
                            <img src="/src/trees.png" alt="">
                            <span>
                                кормова група
                            </span>
                        </div>
                        <div class="nav-button">
                            <img src="/src/farmer.png" alt="">
                            <span>
                                Агроному в поміч
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

	<div class="container" id="product">
		<div id="product-photos">
			<div class="photo-container" id="big-photo">
				<img src="{{asset($product->product_image)}}" alt="">
			</div>

			<div id="small-photos">
				@foreach($product->additional_images->slice(0, 3) as $image)
				<div class="small-photo photo-container">
					<img src="{{asset($image->image_path)}}" alt="">
				</div>
				@endforeach

			</div>
		</div>

		<div id="product-info">
			<h1>
				{{$product->product_name}}, <br> {{$product->manufacturer->manufacturer_name}}
			</h1>

			<div id="product-status">
				<div id="status">
					<img src="/src/galochka.png" alt="">
					<span>В наявності</span>
				</div>

				<span>
				{{$product->product_price}} грн./л
				</span>
			</div>

			<div id="product-details">
				<div id="details-left">
					<div id="product-manufacturer">
						<h4>
							Виробник
						</h4>
						<div id="manufacturer">
							<img src="{{asset($product->manufacturer->manufacturer_logo)}}" alt="">
							{{$product->manufacturer->manufacturer_name}}
						</div>
					</div>
	
					<div id="payment">
						<h4>
							Оплата
						</h4>
						<div id="payment-methods">
							<img src="/src/PaymentMethod1.png" alt="">
							<img src="/src/PaymentMethod2.png" alt="">
							<img src="/src/payment-method3.png" alt="">
						</div>
					</div>
				</div>
				<div id="vseparator">

				</div>
				<div id="details-right">
					<h4>
						Доставка
					</h4>
					<span>
						Завтра відповідно до тарифів перевізника
					</span>
					<div id="order-call-button">
						<img src="/src/trubka.png" alt="">
						<span>Замовити дзвінок</span>
					</div>
				</div>

			</div>

			<div id="separator">
			</div>

			<div id="product-payment">
				<div id="product-price">
					<h1>
					{{$product->product_price*5}} грн
					</h1>
					<span>
						Ціна за 5 л 
					</span>
				</div>
				<div id="buttons">
					<div id="buy-button">
						<img src="/src/cart-white.png" alt="">
						<span>
							Купити
						</span>
					</div>
					<img src="/src/favorites.png" alt="">
					<img src="/src/equals.png" alt="">
				</div>
			</div>
		</div>
	</div>


	<div class="container" id="product-description">
		<div id="headline-row">
			<div class="headline">
				Опис
			</div>
		</div>
		<div id="description-text">
			@foreach($product->product_description as $description)
			<h3>
				{{$description->product_description_title}}
			</h3>
			<p>
			{{$description->product_description_text}}
			</p>
			@endforeach
		</div>
	</div>


	<footer>
        <div class="container" id="footer-container">
            <div id="footer-items">
                <div class="footer-item">
                    <img id="footer-logo" src="/src/logo.png" alt="">
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
                        <img src="/src/phone.png" alt="">
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
                        <img src="/src/email.png" alt="">
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