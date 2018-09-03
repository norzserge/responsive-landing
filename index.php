<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Внештатник | Ваш рекламный отдел</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
    <script>
        function AjaxFormRequest(result_id,formMain,url) {
                    jQuery.ajax({
                        url:     url,
                        type:     "POST",
                        dataType: "html",
                        data: jQuery("#"+formMain).serialize(), 
                        success: function(response) {
                        document.getElementById(result_id).innerHTML = response;
                    },
                    error: function(response) {
                    document.getElementById(result_id).innerHTML = "<p>Возникла ошибка при отправке формы. Попробуйте еще раз</p>";
                    }
                 });

                 $(':input','#formMain')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .removeAttr('checked')
            .removeAttr('selected');
        }
    </script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="hidden-box">
          <div class="container">
            <div class="row hidden-content">
              <div class="hidden-xs col-sm-4 hidden-content-logo">
                <img src="img/logo.png" alt="">
              </div>
              <div class="col-xs-6 col-sm-4 hidden-content-phone">
                <a href="tel:+78129099535"><i class="fa fa-phone" aria-hidden="true"></i> 8 981 882 4000</a>
              </div>
              <div class="col-xs-6 col-sm-4 hidden-content-email">
                <a href="mailto:service@doctormac.ru" class="font-sf-thin blue"><i class="fa fa-envelope-o" aria-hidden="true"></i> mail@mail.ru</a>
              </div>
            </div>  
            </div>
          </div>
        </div>
        <header id="header">
        	<div class="container">
				<div class="row nav-panel">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 hidden-sm hidden-md hidden-lg phone-header-mobile"><a href="tel:+78129099535"><i class="fa fa-phone" aria-hidden="true"></i> 8 981 882 4000</a>&nbsp; &nbsp; &nbsp;<a href="mailto:service@doctormac.ru" class="font-sf-thin blue"><i class="fa fa-envelope-o" aria-hidden="true"></i> mail@mail.ru</a></div>
                        </div>
                        <nav class="navbar navbar-default" role="navigation"> 
                        <!-- Brand and toggle get grouped for better mobile display --> 
                          <div class="navbar-header"> 
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
                              <span class="sr-only">Toggle navigation</span> 
                              <span class="icon-bar"></span> 
                              <span class="icon-bar"></span> 
                              <span class="icon-bar"></span> 
                            </button> 
                            <a class="navbar-brand logo" href="#"><img src="img/logo.png" alt=""></a> 
                          </div> 
                          <!-- Collect the nav links, forms, and other content for toggling --> 
                          <div class="toggle-nav collapse navbar-collapse navbar-ex1-collapse pull-right"> 
                            <ul class="nav navbar-nav"> 
                              <li><a href="#about" class="menu-first-link">О нас</a></li> 
                              <li><a href="#complex-service" class="menu-second-link">Мы предлагаем</a></li> 
                              <li><a href="#features" class="menu-third-link">Преимущества</a></li> 
                              <li><a href="#services" class="menu-forth-link">Услуги</a></li> 
                              <li><a href="#price" class="menu-fifth-link">Стоимость</a></li> 
                              <li><a href="#footer" class="menu-six-link">Контакты</a></li> 
                            </ul>
                          </div>
                        </nav>
                    </div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-offset-1 col-sm-7">
						<!-- <p class="help-block">Сейчас будет мотивация</p> -->
						<h1>
							Выводим маркетинг на новый уровень!
						</h1>
						<div class="btn-wrap">
							<button class="btn yellow-bg contact">
								Это интересно!
							</button>
						</div>
					</div>
				</div>
        	</div>
        </header>
        <section id="about">
        	<div class="container">
        		<div class="row">
        			<div class="col-xs-12 col-sm-offset-1 col-sm-5">
        				<h2>ВНЕШТАТНИК</h2>
        				<p>возьмет на себя все функции отдела маркетинга вашей компании. Мы не просто выстраиваем систему маркетинга, а становимся частью Вашей команды. Мы - волею Вселенной собранные в одном месте специалисты разных направлений, но объединных единой целью - быть лучшими в своей отрасли и быть полезными другим людям. Для нас нет невыполнимых задач, скромных бюджетов или «не интересных» проектов.</p>
        			</div>
        			<div class="col-xs-12 col-sm-5">
        				<div class="best-personal-wrap">
        					<table>
        						<tr>
        							<td><img src="img/cap.png" alt=""></td>
        							<td>
        								<h3>Ресурсы</h3>
        								<p>Мы готовы реализовывать самые сложные и амбициозные задачи, ведь у нас собраны лучшие специалисты в сфере маркетинга, рекламы и PR, опытные дизайнеры, веб-разработчики и аналитики. </p>
        							</td>
        						</tr>
        					</table>
        				</div>
        				<div class="best-result-wrap">
        					<table>
        						<tr>
        							<td><img src="img/graph.png" alt=""></td>
        							<td>
        								<h3>Результаты</h3>
        								<p>Мы знаем и используем лучшие практики маркетинга, которые приносят эффективные результаты нашим Клиентам.</p>
        							</td>
        						</tr>
        					</table>        					
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <section id="complex-service">
            <div class="container">
                <div class="row">
                    <h2 class="complex-service-head text-center">Что мы предлагаем</h2>
                    <p class="help-block text-center">Для эффективного решения ваших целей и задач, мы предложим Вам оптимальный вариант сотрудничества:</p>
                    <div class="col-lg-4 text-center">
                      <div class="complex-service-icon">
                        <i class="fa fa-rocket fa-4x" aria-hidden="true"></i>
                      </div>
                      <h3 class="complex-service-heading">Отдел маркетинга на аутсорсинге</h2>
                      <p class="complex-service-desc">Наша команда встроится в вашу компанию и возьмет на себя решение всех маркетинговых, рекламных и PR задач. Мы можем работать самостоятельно, получив от вас задачу и предоставляя Вам отчеты на всех этапах реализации, либо активно вовлекать вас в разработку – как Вы пожелаете! Мы не будем просить вас заполнять многостраничные технические задания, ведь наша задача – освободить ваше время для бОльших дел.</p>
                      <div class="complex-service-btn"><a class="btn yellow-bg contact" href="#" role="button">Нужно именно это!</a></div>
                    </div>
                    <div class="col-lg-4 text-center">
                      <div class="complex-service-icon">
                          <i class="fa fa-space-shuttle fa-4x" aria-hidden="true"></i>
                      </div>
                      <h3 class="complex-service-heading">Проектный менеджмент</h2>
                      <p class="complex-service-desc">Для компаний, которым не требуется полное маркетинговое сопровождение, но есть потребность в решении конкретных задач мы предлагаем воспользоваться услугами наших многочисленных специалистов. Мы с большим удовольствием возьмемся за реализацию ваших амбициозных проектов, будь то организация мероприятия, издание корпоративного журнала или запуск космического корабля. Мы хорошо знаем рекламный рынок, используем только действенные инструменты и можем предложить выгодные условия по рынку.</p>
                      <div class="complex-service-btn"><a class="btn yellow-bg contact" href="#" role="button">Нужно именно это!</a></div>
                    </div>
                    <div class="col-lg-4 text-center">
                      <div class="complex-service-icon">
                          <i class="fa fa-cogs fa-4x" aria-hidden="true"></i>
                      </div>
                      <h3 class="complex-service-heading">Работа с существующим отделом маркетинга</h2>
                      <p class="complex-service-desc">Читая наше предложение, штатный маркетолог может подумать, что мы хотим полностью заменить его функционал. Это не так! Наша компания станет «помощником» и возьмет на себя основной объем текущих задач, тем самым освободив время для глобальных стратегических проектов.</p>
                      <div class="complex-service-btn"><a class="btn yellow-bg contact" href="#" role="button">Нужно именно это!</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                      <div class="complex-service-icon">
                        <i class="fa fa-line-chart fa-4x" aria-hidden="true"></i>
                      </div>
                      <h3 class="complex-service-heading">Консалтинговые услуги</h2>
                      <p class="complex-service-desc">Если Ваш глаз «замылился», а руки «чешутся» сделать что-нибудь эдакое – скорее к нам! Мы ежедневно генерируем столько идей, что хватит на еще одно Сколково!</p>
                      <div class="complex-service-btn"><a class="btn yellow-bg contact" href="#" role="button">Нужно именно это!</a></div>
                    </div>
                    <div class="col-lg-4 text-center">
                      <div class="complex-service-icon">
                          <i class="fa fa-search fa-4x" aria-hidden="true"></i>
                      </div>
                      <h3 class="complex-service-heading">Аудит</h2>
                      <p class="complex-service-desc">«В чужом глазу соринку видим, в своем бревно не замечаем» - и Да, да, ДА!  Это действительно так! Мы обеспечим Вам взгляд со стороны и подскажем, что необходимо исправить, чтобы ваши рекламные материалы стали еще лучше.</p>
                      <div class="complex-service-btn"><a class="btn yellow-bg contact" href="#" role="button">Нужно именно это!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="features">
        	<div class="container">
        		<div class="row">
        			<div class="col-xs-12 col-sm-6">
        				<div class="feature featute-1">
        				    <img src="img/feature-3.png" alt="" class="feature-img">
        					<h3><span class="feature-num yellow-bg">1</span> Оптимизация затрат</h3>
        					<p>Рекламный аутсорсинг обойдется гораздо дешевле бюджету компании, чем содержание собственного рекламного отдела. Не нужно платить зарплату нескольким сотрудникам, выплачивать налоги и отчисления в различные фонды.</p>
        				</div>
        			</div>
        			<div class="col-xs-12 col-sm-6">       				
        				<div class="feature featute-2">
        					<img src="img/feature-1.png" alt="" class="feature-img">
        					<h3><span class="feature-num yellow-bg">2</span> Опыт</h3>
        					<p>У нас многолетний опыт проведения маркетинговых, рекламных и PR кампаний разной сложности.</p>
        				</div>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-xs-12 col-sm-6">       				
        				<div class="feature featute-3">
        					<img src="img/feature-2.png" alt="" class="feature-img">
        					<h3><span class="feature-num yellow-bg">3</span> Синергия (целая команда)</h3>
        					<p>Над вашими задачами будет трудиться целая команда лучших специалистов по маркетингу и рекламе, дизайну, копирайтингу, интернет-технологиям и другие специалисты.</p>
        				</div>        				
        			</div>
        			<div class="col-xs-12 col-sm-6">      				
        				<div class="feature feature-4">
        					<img src="img/feature-4.png" alt="" class="feature-img">
        					<h3><span class="feature-num yellow-bg">4</span> Комплексный подход</h3>
        					<p>Вы получаете комплексное маркетинговое сопровождение из одного источника и на профессиональном уровне.</p>
        				</div>        				
        			</div>
        		</div>
        	</div>
        </section>
        <section id="services">
        	<div class="container">
        		<div class="row">
        			<h2 class="text-center">Что мы делаем</h2>
        			<div class="col-xs-12 col-sm-6 services services-sites">
                        <div class="services-heading">
                            Разработка<br/>и создание<br/>WEB-ресурсов
                            <div class="get-services-btn"><a href="#" style="color: #fa6041;" class="contact">Хочу! <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div> 
                        </div>        
                    </div>
        			<div class="col-xs-12 col-sm-6 services services-smm">
                         <div class="services-heading">
                            SMM<br/>оптимизация
                            <div class="get-services-btn"><a href="#" style="color:#ffc50c;" class="contact">Это мне подходит <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div> 
                        </div>                             
                    </div>
        		</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 services services-targeting">
                         <div class="services-heading">
                            Таргетинг и тизерная реклама в социальных сетях
                            <div class="get-services-btn"><a href="#" style="color: #abfcfc;" class="contact">То, что нужно <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 services services-context">
                         <div class="services-heading">
                            Контекстная реклама Яндекс и Google
                            <div class="get-services-btn"><a href="#" style="color: #f25e3e;" class="contact">Давно хотели <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div> 
                        </div> 
                    </div>
                    <div class="col-xs-12 col-sm-3 services services-seo">
                         <div class="services-heading">
                            SEO-оптимизация
                            <div class="get-services-btn"><a href="#" style="color:#fde10d;" class="contact">Наш сайт давно просит <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 services services-email">
                         <div class="services-heading">
                            E-mail маркетинг
                            <div class="get-services-btn"><a href="#" style="color:#da1d0b;" class="contact">Нужно разослать! <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div> 
                        </div>                        
                    </div>
                    <div class="col-xs-12 col-sm-3 services services-reputation">
                         <div class="services-heading">
                            Репутационный маркетинг
                            <div class="get-services-btn"><a href="#" style="color:#b78a4f;" class="contact">Поднять репутацию! <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div> 
                        </div>                         
                    </div>
                    <div class="col-xs-12 col-sm-6 services services-copyright">
                        <div class="services-heading">
                            Копирайтинг
                            <div class="get-services-btn"><a href="#" style="color:#861600;" class="contact">Нам нужны хорошие тексты! <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div> 
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 services services-design">
                         <div class="services-heading">
                            Графический<br/>и WEB-дизайн
                            <div class="get-services-btn"><a href="#" style="color:#ffc50c;" class="contact">Сможете? <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div> 
                        </div>                        
                    </div>
                    <div class="col-xs-12 col-sm-6 services services-video">
                         <div class="services-heading">
                            Фото и видео
                            <div class="get-services-btn"><a href="#" style="color:#ffc50c;" class="contact">Нннада? <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div> 
                        </div> 
                    </div>
                </div>
        	</div>
        </section>
        <section id="cta-1">
        	<div class="container">
        		<div class="row">
        			<div class="col-xs-12">
        				<table class="cta-table">
        					<tr>
        						<td><h3 class="hidden-sm hidden-md hidden-lg" style="color:#983623; margin-bottom:20px;">Готовы сделать выбор? Звоните!<br/><span class="cta-phone"><a href="tel:8 981 882 4000">8 981 882 4000</a></span></h3>
									<h3><span class="hidden-xs">Готовы сделать выбор? Звоните!<br/><span class="cta-phone"><a href="tel:8 981 882 4000">8 981 882 4000</span></span>
									</h3>     							
        						</td>
        					</tr>
        				</table>
        			</div>
        		</div>
        	</div>
        </section>
        <section id="price">
        	<div class="container">
    				<div class="row">
    					<h2 class="text-center">Тарифные планы</h2>
    					<p class="help-block text-center">Стоимость услуг зависит от сложности поставленных Вами задач.</p>
			        <div class="col-md-4">
			          <div><img src="img/price-img-3.png" alt="" class="img-responsive price-img"></div>
			          <h3 class="text-center">Ваш персональный маркетолог</h3>
			          <p class="text-center price-desc">Это супер человек, который экспертным взглядом оценит состояние дел Компании, выявит узкие места / неэффективные инструменты и предложит варианты по привлечению клиентов и увеличению прибыли. Данный вид сотрудничества необходим тем организациям, которые не имеют в штате специалиста по рекламе и маркетингу, но очень хотят его заполучить без лишних затрат на организацию рабочего места, уплаты налогов и прочих государственных поборов.</p>
			          <p class="cost text-center"><span class="from">от</span> 30 000 <i class="fa fa-rub" aria-hidden="true"></i></p>
			          <p class="text-center"><button class="btn yellow-bg contact" href="#" role="button">Заказать</button></p>
			        </div>
              <div class="col-md-4">
                <div><img src="img/price-img-4.png" alt="" class="img-responsive price-img"></div>
                <h3 class="text-center">Наш специалист - Ваш специалист</h3>
                <p class="text-center price-desc">На тот случай, если в Вашей компании уже есть штатный маркетолог, но цели, задачи и стратегия требуют наличия других специалистов (веб-разработчик, дизайнер, копирайтер и др.), то мы можем предложить Вам тех людей, которых Вы так долго искали. Мы доукомплектуем Вашу команду профессионалами. При этом экономия от данного решения составит больше половины цены необходимых специалистов в штате, а результаты скажут сами за себя.</p>
                <p class="cost text-center"><span class="from">от</span> 50 000 <i class="fa fa-rub" aria-hidden="true"></i></p>
                <p class="text-center"><button class="btn yellow-bg contact" href="#" role="button">Заказать</button></p>
              </div>
			        <div class="col-md-4">
			          <div><img src="img/price-img-2.png" alt="" class="img-responsive price-img"></div>
			          <h3 class="text-center">Ударный маркетинг</h3>
			          <p class="text-center price-desc">Именно так и никак иначе! За рекламу и маркетинг Вашей Компании в приоритетном порядке берется вся команда наших специалистов, аки кулак, пробивающий закостенелую систему, неэффективные инструменты, убыточные подходы и безрезультативные рекламные потуги! Данный тарифный план подойдет тем Компаниям, которые хотят иметь полноценный отдел маркетинга, включающий специалиста по маркетингу, рекламе и PR, дизайнера, веб-разработчика, копирайтера и др. узких специалистов.</p>
			          <p class="cost text-center"><span class="from">от</span> 70 000 <i class="fa fa-rub" aria-hidden="true"></i></p>
			          <p class="text-center"><button class="btn yellow-bg contact" href="#" role="button">Заказать</button></p>
			       </div>
             <div class="col-md-6 col-xs-12 col-md-offset-3">
                <p class="text-center" style="color:#000; margin-top:30px;"><i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#ef5554;"></i> Стоимость услуг на разовые и прочие работы (дизайн, веб-разработка, копирайтинг и т.д.) определяется исходя из поставленных целей, задач и объемов.</p>     
             </div>
            </div>        		
        	</div>
        </section>
        <footer id="footer">
        	<div class="container">
        		<div class="row">
        			<div class="col-xs-12 col-md-4">
        				<h2>Контакты</h2><br/>
        				<p>Мы работаем <del>с 09:00 до 18:00</del> тогда, когда удобно Вам - практически 24 часа в сутки.</p><br/>
    						<div class="row">
    							<div class="col-xs-12 col-sm-6 col-md-12">
    		        				<span class="text-uppercase help-block-phone">телефон:</span><br/>
    		        				<a class="phone" href="tel:71234567889">+7 981 882 4000</a><br/>	
                        <span class="text-uppercase help-block-mail">электропочта:</span><br/>
                        <a class="mail" href="mail:mail@mail.ru">mail@mail.ru</a><br/> 			
    							</div>
    							<div class="col-xs-12 col-sm-6 col-md-12" style="display: none;">
                    <div class="social">
    									<a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
    									<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    									<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    									<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
    							</div>
    						</div>
        			</div>
        			<div class="col-xs-12 col-md-4"></div>
        			<div class="col-xs-12 col-md-4">
						<form class="form-horizontal feedback-form" method="post" action="" id="formMain" name="formMain">
						  <div class="form-group">
						    <label for="inputName" class="col-xs-3 control-label">Имя</label>
						    <div class="col-xs-9">
						      <input id="inputName" type="text" name="name" class="form-control">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputTel" class="col-xs-3 control-label">Телефон *</label>
						    <div class="col-xs-9">
						      <input id="inputTel" type="Tel" name="telephone" class="form-control">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail" class="col-xs-3 control-label">E-mail</label>
						    <div class="col-xs-9">
						      <input type="email" class="form-control" id="inputEmail" name="email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputCompany" class="col-xs-3 control-label">Компания</label>
						    <div class="col-xs-9">
						      <input type="text" class="form-control" id="inputCompany" name="company">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputMessage" class="col-xs-3 control-label">Сообщение</label>
						    <div class="col-xs-9">
						      <textarea class="form-control" rows="1" id="inputMessage" name="message"></textarea>
						    </div>
						  </div>
                          <div id="messegeResult"></div>
						  <div class="form-group">
						    <div class="col-xs-12 text-right">
						      <button id="button" type="button" onclick="AjaxFormRequest('messegeResult', 'formMain', 'form.php')" class="btn yellow-bg">Отправить</button>
						    </div>
						  </div>

						</form>        				
        			</div>
        		</div>
        	</div>
        </footer> 
    	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script type="text/javascript">
          $(document).ready(function() {

            function scrollTo(link) {
              $(link).click(function () { 
                var elementClick = $(this).attr("href");
                var destination = $(elementClick).offset().top;
                $('html,body').animate( { scrollTop: destination }, 1100 );
                return false;
              });
            }
            scrollTo('a.menu-first-link');
            scrollTo('a.menu-second-link');
            scrollTo('a.menu-third-link');
            scrollTo('a.menu-forth-link');
            scrollTo('a.menu-fifth-link');
            scrollTo('a.menu-six-link');
          });
        </script>

        <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.simplemodal.js"></script>
        <script src="js/vendor/contact.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
