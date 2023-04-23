<?php 
/*
Template Name: Play With Pro Arena
*/
?>
	<?php get_header() ?>
<style type="text/css">

.lineTopButtons .buttonBlock .btn.mywidth {
    padding: 0px 38px;
}

.rangeSection .rangeBlock .rangeInputBlock .bgBottomFonL {
    width: calc(31% - 15px);
    left: calc(34% - 0px);
}
.rangeSection .rangeBlock .rangeInputBlock .bgBottomFonLL .title {
	    position: absolute;
    top: 21px;
    left: 0px;
    width: 100%;
    text-align: center;
    color: #ffffff;
    font-size: 14px;
    font-family: PTSansRegular;
    box-sizing: border-box;
    padding: 0px 20px;
    line-height: 1.3em;
}
.irs-slider {
    width: 25px;
    height: 25px;
    top: 15px;
    z-index: 3;
    background-image: url(/wp-content/themes/cruelten/img/g.png);
    background-size: cover;
}
.irs::before {
    content: '';
    z-index: 2;
    width: 25px;
    height: 25px;
    top: 15px;
    background-image: url(/wp-content/themes/cruelten/img/g.png);
    background-size: cover;
    position: absolute;
}
.irs-from, .irs-to, .irs-single {
    z-index: 5;
    top: -51px;
    width: 77px;
    height: 62px;
    padding: 0px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    color: #fff;
}
.irs-from:after, .irs-to:after, .irs-single:after {
    position: absolute;
    display: block;
    content: "";
    bottom: -6px;
    left: 50%;
    width: 0;
    height: 0;
    margin-left: -3px;
    overflow: hidden;
    border: 3px solid transparent;
     border-top-color: none; 
}
.rangeSection .rangeBlock .rangeInputBlock .bgBottomFonLL {
    position: absolute;
    z-index: 1;
    bottom: 44px;
    left: 15px;
    width: calc(35% - 21px);
    height: 127px;
    background-image: url(http://gcdboost.com/wp-content/themes/cruelten/img/4342.png);
    background-repeat: repeat-x;
}
.irs-single {
	text-align: center;
    font-weight: bold;
    font-family: arial;
    line-height: 20px;
    font-size: 14px;
}
.rangeInputBlock .title {
	font-size: 11px !important;
}

.rangeSection .rangeBlock .rangeInputBlock .bgBottomFonM {
    left: calc(63% - 1px);
    width: calc(19% - 1px);
}
.rangeSection .rangeBlock .rangeInputBlock .bgBottomFonR {
    width: calc(17% - 4px);
}
.rangeSection .rangeBlock .rangeInputBlock .bgBottomFonRR {
    position: absolute;
    z-index: 0;
    bottom: 44px;
    right: 15px;
    width: calc(10% - 1px);
    height: 127px;
     background-image: url(http://gcdboost.com/wp-content/themes/cruelten/img/4342.png);
    background-repeat: repeat-x;
}
.rangeSection .rangeBlock .rangeInputBlock .bgBottomFonRR .title{
	    position: absolute;
    top: 21px;
        left: -10px;
    width: 100%;
    text-align: center;
    color: #ffffff;
    font-size: 14px;
    font-family: PTSansRegular;
    box-sizing: border-box;
    padding: 0px 20px;
    line-height: 1.3em;
}
.rangeSection .lineRangeList {
	margin-top: 20px;
}
.mycircle {
    width: 19px;
    height: 19px;
    top: 18px;
    background: #fff;
    border-radius: 1000px;
    border: 1px solid #ccc;
    z-index: 1000;
}
.irs-line-mid {
   background-image: url(http://gcdboost.com/wp-content/themes/cruelten/img/lpr.png) !important;
}
.irs-line-right {
    background-image: url(http://gcdboost.com/wp-content/themes/cruelten/img/lpr.png) !important;
}
.irs-line {
   background-image: url(http://gcdboost.com/wp-content/themes/cruelten/img/lpr.png) !important;
}
.myleft-margin {
margin-left: 50px;
}
@media only screen and (max-width: 1024px){
	  
} 
@media only screen and (max-width: 768px){
  .myleft-margin {
 	margin-left: 0px;
 }    
} 
@media only screen and (max-width: 425px){
    .bgBottomFonL, .bgBottomFonR, .bgBottomFonM, .bgBottomFonLL, .bgBottomFonRR {
        display: none;
    }

}

</style>	
			</section>
		</section>
		<section class="wrap simpleS">
			<section class="work">
				<h1 class="titleSectionText">WoW Coaching Selfplay Boost - Arena 3x3</h1>
				<div class="lineTopButtons">
					<div class="buttonBlock">
						<button class="btn active mywidth">3v3
							<div class="helpI">
<p>Play with our booster in 3x3. Get ranks and acievements today.</p>
							</div>
						</button>
						<button class="btn mychengefont mywidth"  onclick="location.href='/one-pro-for-your-team/'">PRO for your 3v3 team
	<div class="helpI">
<p>Are you looking for a professional player in your 3v3 team? We can help you.</p>
							</div>
						</button>
						<button class="btn mywidth" onclick="location.href='/play-with-pro-2v2-arena/'">2v2
<div class="helpI">
<p>Play with our booster in 2x2. Get a exclusive experience.</p>
							</div>
						</button>
					</div>
						<div class="buttonBlock">
						<button class="btn mywidth active" onclick="myorecoach(0);">Rank 1
<div class="helpI">
<p>Play with players who have<br>received status Rank 1.</p>
							</div>
						</button>
						<button class="btn mywidth" onclick="myorecoach(1);"><span class="recomended"></span>PRO Coach
<div class="helpI">
<p>"PRO coach" is the best coaches with great experience, they possess incredible skills of the game. The coaches have a fame in the pvp community and 99% of successful sessions.</p>
							</div>
						</button>
						<button class="btn mywidth" onclick="myorecoach(2);">PRO Elite
							<div class="helpI">
<p>You will play with the best players in the world. These players are constantly on top and participate in various tournaments and even win them. They have high ratings and an incredible skill and experience of the game. Waiting time for players may be increased due to the high demand for the services of these players.</p>
							</div>
						</button>
					</div>
					<div class="buttonBlock">
								<button class="btn active mywidth" id="curancyEU" onclick="myRegionChoose(0);">Eu</button>
						<button class="btn mywidth" id="curancyUS" onclick="myRegionChoose(1);">Us</button>
					</div>
				
				</div>
				<h4 class="subtitleSectionText ct white">On this page, you can purchase hourly Coaching with professional players of different skill levels (R1 / PRO COACH / PRO ELITE).<br>No standing team, but want to get a gladiator? This is what you need to achieve your goal.</h4>
				<section class="rangeSection">
					<div class="imageBlock">
						<img src="<?php echo get_template_directory_uri() ?>/img/pro.jpg" />
					</div>
					<div class="rangeBlock">
						<div class="lineLinkInfo">
							<div class="tiLine" id="mynameservice">Play with PRO Arena 3x3</div>

							<a href="/" class="link">How does it work?
								<span class="questionI">
									<div class="winHelpInfo">
							<p>This service is the time you buy playing with our boosters. If you buy more training time, the process will be better and you will get closer to becoming you as a professional player.</p>															</div>
								</span>
							</a>
						</div>
						<div class="rangeInputBlock">
					<!-- 		<a href="" class="why">Why not 0?
								<span class="questionI">
									<div class="winHelpInfo">
										<p>The requirement for a character with 1600 rating
</p><p>

When choosing a SelfPlay service you will play with professionals. You must have basic PvP skills or be able to take a rating of 1500 on your own.
</p><p>

If we work with players who have a minimum rating we think that it will be more difficult to achieve the goals.
</p><p>

Therefore, the cost of this service will increase. Do you want to overpay?
</p><p>

Spend a few fights, feel the taste of the game, get the basic skills and contact us for advice. The goal isn`t to make you wait.
</p><p>

If you want to order a service for a character whose rating is less than 1500, then contact us and we will offer you options for solving your question.
</p><p>

The cost of this service will be increased. Therefore, we recommend spending a couple of evenings playing on your own in the arena to achieve a rating of 1500.
</p>
									</div>
								</span>
							</a> -->
							<div class="bgBottomR"></div>
							<div class="bgBottomFonLL">
<span class="title"> With this amount of hours <br>you can reach 2k <br>and unlock his Elite Gear!</span>




							</div>
							<div class="bgBottomFonL">
								<span class="title">If you want to reach Gladiator<br>start with these hours.</span>
							</div>
							<div class="bgBottomFonM">
							<span class="title"> Combine youself with <br>our boosters for<br>getting a new<br>experience!</span>
							</div>
							<div class="bgBottomFonR">
								<!-- <span class="title">DUELIST</span> -->
								<span class="title"> Get a maximum! <br>Become a Elite player. </span>
							</div>
							<input type="text" id="example_id" class="js-range-slider" name="example_name" value="" />
						</div>
						<div class="lineRangeList">
							<ul class="rangeList">
								<!-- <li class="active">Express -->
								<li id="express" onclick="getExpressSlowboost(1);">Express
									<div class="helpI">
										Our coaches will give a priority to complete your selected hours.
									</div>
								</li>
							</ul>
						</div>
						<div class="buyLine">
							<div class="price"><span class="cena">128</span><span class="valut">€</span></div>
							<button class="btnBuy"  id="btnBuy">Buy now</button>
							<div id="saveme" class="saveme"></div>
						</div>
					</div>
				</section>
	
<?php get_template_part( 'icons' ); ?>



				<div class="textPostSection">
					<div class="infoLine" style="margin-top: 0px;">
						<ul class="listInfo">
							<li class="myactive" id="moreinfo">
								<span class="leftSep"></span>
								<span class="titleB">More info</span>
								<span class="rightSep"></span>
							</li>
							<li id="faq">
								<span class="leftSep"></span>
								<span class="titleB">FAQ</span>
								<span class="rightSep"></span>
							</li>
						</ul>
					</div>
		<div class="moreinfo">


<h3 class="title">What does the coaching service include?</h3>
<p>- You play with the best players in the 2v2 or 3v3 rating arena. It depends on which bracket you choose.<br>
- The best players will reveal the basic understanding of the arena and even the most subtle tricks of the game in the rating arena.<br>
- You will see the difference in your skills at the end of the session.<br>
- In case you don't want to waste your time looking for proper arena mates this is for you.<br>
- Our professional players will help you to reach your goal as fast as it possible and answer all your questions.<br>
- Also we can play any time you want to make process more comfortable for you.<br>
</p>
<h3 class="title">Service's description</h3>
<p>- You can choose the number of hours you want to play, and the arena brackets - 2v2 or 3v3.<br>
- This service does not guarantee any rating.<br>
- The more you play with our coaches, the more you increase your skill level in the rating arena.<br>
- You will improve your skills and find out much interesting information:<br>
- Basic skills for your class.<br>
- Best rotation in any situation and most valuable characteristic.<br>
- Talents and equipment depending on the enemy team.<br>
- Macros, using focus and addons.<br>
- Positioning on arena, communicating and team play.<br>
- And many other moments to be on top.
</p>
<h3 class="title">Customization</h3>
<p>You can choose three levels of coaches:<br>
- "Rank 1" is the best players in the game.<br>
- "Coach Pro" is the players who coach not only their individual experience of the game, but also learn the training methods of other players, such trainers have a large percent of successful training sessions.<br>
- "Pro Elite". You will play with the best players in the world. These players are constantly on top and participate in various tournaments and even win them. They have high ratings and an incredible skill and experience of the game. Waiting time for players may be increased due to the high demand for the services of these players.<br>
- Do not underestimate our coaches.
</p>
<h3 class="title">Extra options description</h3>
<p>Our coaches will give a priority to complete your selected hours thanks to the “Express” option.</p>

<h3 class="title">Service Process</h3>
<p>After payment we will add you to Discord or skype. We will look for the right team for your class and do our best to assign you a team as quickly as possible. It usually takes from a couple of minutes to several hours. <br>
In extreme cases, no more than a day. As the team is found, we will connect you in the conference, there you will discuss a convenient time to start.</p>

</div>
		<div class="faq" style="display: none;">
<h3 class="title">How can I order a service?</h3>
<p>You can order the service only after you confirm your order with our Manager. </p>
<h3 class="title">What happens after the purchase?</h3>
<p>As soon as you make a payment for the service you` ll be contacted by the Manager and agree with you the convenient time of the service by our boosters.</p>
<h3 class="title">What happens if you can’t find a team?</h3>
<p>Even if you buy a level 1 coaching service we can give you a higher level of players if they can finish your service before others and if they agree to be paid a little less according to your chosen coaching level. If no one can be found in double the size of ETA advertisement on our website then you`ll be entitled to a full refund. We also offer to lower your education to the lower level, partially reimbursing you for the difference. We can't cover all computers in the Euro Union / US at celebrity level, for example.</p>
<h3 class="title">What is GCDvpn?</h3>
<p>GCDvpn is a special program that has been developed by us that will allow you to avoid blocking your account. With program GCDvpn your account will be protected.</p>
<h3 class="title">Refund</h3>
<p>If the service can`t be performed through our fault, we will refund your money. If you refuse an order in the middle of its execution, or just want to pick up your money, in this case, the <a href="/terms-of-services/" target="blank" style="color: #fff;">rules</a> that have been described in our user guide will apply. Be sure to read it.</p>
<h3 class="title">Who will complete my order?</h3>
<p>Your order will be completed by the best boosters of the world which showed the professionalism and the best game skill. Don't worry! The GCDboost team will help to achieve any results.</p>
</div>
				</div>
			</section>
		</section>


<!-- Форма всплывающая -->
		<div class="glassForm">
			<div class="winGlassForm">
				<div class="closeGlassForm" id="closeGlassForm"></div>
				<div id="winForm">
					<?php echo do_shortcode('[contact-form-7 id="185" title="Checkout 3x3 Coaching" html_id="contact-form-my" html_class="myforms"]'); ?>
				</div>
		<div class='proas' id="poema" style="display: none;">Your promocode is active.</div>
				<div id="oplat" style="display: none;">
					<h4 class="title">Your order has been sent. Please, pay for it now.</h4>
					<div id="paypal-button"></div>
				</div>
			</div>
		</div>
<!-- Конец форме всплывающей -->
<!-- Начало подключения скриптов расчета -->
<!-- Подключение Калькулятора расчетов -->
<script src="<?php echo get_template_directory_uri() ?>/js/myconstants.js"></script>

<script src="<?php echo get_template_directory_uri() ?>/js/calculate.js"></script>
<!-- Вывод своих скриптов -->
<script type="text/javascript">

// Инициализация ключей
var myleft = 0;
var dopoknitMnozhitel = 1.1  * 1.05; //добавление множителя к цене.

var expressSlowboostReit = 0; // 0 or 1
var mychoosecoach = 0; // 0 - 1 выбор коача

var mySelect = 0; //выбор селекта данных
$('#levelbooster').val('Rank 1');


// Инициализация массовов данных
var aEURank1 = [40,79,118,152,188,223,258,288,352,409,493];
var aEURank1Express = [48,94,141,183,226,268,310,346,423,490,591];
var aEUProCoach = [53,103,154,200,247,293,338,378,462,536,646];
var aEUProCoachExpress = [61,120,181,233,289,343,395,442,540,626,755];
var aEUProElite = [61,120,181,233,289,343,395,442,540,626,755];
var aEUProEliteExpress = [70,138,207,267,330,392,453,506,619,717,865];


var aUSRank1 = [50,98,147,190,235,279,322,360,440,510,615];
var aUSRank1Express = [58,115,172,222,275,326,377,421,515,597,719];
var aUSProCoach = [63,124,186,240,297,353,407,455,556,645,777];
var aUSProCoachExpress = [72,141,211,272,337,400,462,516,631,731,882];
var aUSProElite = [73,142,214,276,341,405,468,523,639,741,893];
var aUSProEliteExpress = [81,159,239,308,381,453,522,584,714,828,998];




var vyvodskdka = ["","Save 2%","Save 3%","Save 5%","Save 6%","Save 7%","Save 8%","Save 10%","Save 12%","Save 15%","Save 18%"];

	//Инициализация ползунка
$("#example_id").ionRangeSlider({
prefix: "HOURS<br>",
    grid: true,
    from: 0,
    values: [1, 2, 3, 4, 5, 6, 7, 8, 10, 12, 15],
	onStart: function (data) {
        myFunction(data.from);
    },
    onChange: function (data) {
        myFunction(data.from);

    }
});


// Функиция подсчета вывода цифр с ползунка а также важнейшая инициализация селекта
function myFunction(int1) {
		myleft = int1;
		mySelect = myleft;
	myDataParse(); //Обновление всех данных в письме
	myvyvod();
}	


// Функция подсчета данных
function myvyvod () {

			if (regionSelect == 0) {
				if (mychoosecoach == 0) {
					if (expressSlowboostReit == 0) {
							itog = aEURank1[mySelect]; //инициализация нужного массива данных
					}
					else {
							itog = aEURank1Express[mySelect]; //инициализация нужного массива данных
					}
				}
				else if(mychoosecoach == 1) {
					if (expressSlowboostReit == 0) {
							itog = aEUProCoach[mySelect]; //инициализация нужного массива данных
					}
					else {
							itog = aEUProCoachExpress[mySelect]; //инициализация нужного массива данных
					}				
				}
				else {
					if (expressSlowboostReit == 0) {
							itog = aEUProElite[mySelect]; //инициализация нужного массива данных
					}
					else {
							itog = aEUProEliteExpress[mySelect]; //инициализация нужного массива данных
					}				
				}
			}
			else {
				if (mychoosecoach == 0) {
					if (expressSlowboostReit == 0) {
							itog = aUSRank1[mySelect]; //инициализация нужного массива данных
					}
					else {
							itog = aUSRank1Express[mySelect]; //инициализация нужного массива данных
					}
				}
				else if(mychoosecoach == 1){
					if (expressSlowboostReit == 0) {
							itog = aUSProCoach[mySelect]; //инициализация нужного массива данных
					}
					else {
							itog = aUSProCoachExpress[mySelect]; //инициализация нужного массива данных
					}				
				}	
				else {
					if (expressSlowboostReit == 0) {
							itog = aUSProElite[mySelect]; //инициализация нужного массива данных
					}
					else {
							itog = aUSProEliteExpress[mySelect]; //инициализация нужного массива данных
					}				
				}	
			}


			$("#saveme").text(vyvodskdka[mySelect]);

itog = (itog * dopoknitMnozhitel).toFixed(0); // умножаем на дополнительный множитель




myPromocode(); // вызываем функцию промокода - хранится в constants.js
		//проверка на валюту бакса
		if (regionSelect == 1) {
			itog = (itog * kursUSD).toFixed(0); 
		}

		$('.cena').text(itog); 
		$('#bydens').text(itog); 
		myDataParse(); //Обновление всех данных в письме

	}


// Инициализация выбора региона и валюты
function myRegionChoose(arg) {
	regionSelect = arg;
	if (arg == 0) {
		region	= 'EU';
		$('.valut').text('€');
	}
	else {
		region	= 'US';
		$('.valut').text('$');

	}
	myvyvod(); //выводим подсчет
	myDataParse(); //Обновление всех данных в письме
}


//Инициализация Express or Slowboost or Nothing
function getExpressSlowboost(arg) {
	if (expressSlowboostReit == arg) {
		expressSlowboostReit = 0;
		myexpress = 'NO';
	}
	else {
		expressSlowboostReit = arg;
		if (arg == 1) {
			myexpress = 'EXPRESS';
			$('#slowboost').removeClass('active');

		}
		else {
			myexpress = 'SLOWBOOST';
			$('#express').removeClass('active');
		}
	}
	myvyvod(); //выводим подсчет
	myDataParse(); //Обновление всех данных в письме
}



function myorecoach(arg) {
	    if (arg == 0) {
	    	mychoosecoach = 0;
	    	$('#levelbooster').val('Rank 1');
	    }
	    else if (arg == 1)	{
	    	mychoosecoach = 1;
	    	$('#levelbooster').val('Pro Coach');

	    }
		else	{
	    	mychoosecoach = 2;
	    	$('#levelbooster').val('Pro Elite');

	    }
	myvyvod(); //выводим подсчет
		myDataParse();
}



//Запись данных в отправку
function myDataParse() {
	$('#nameservice').val(nameService);
	$('#region').val(region);
	$('#hours').val(colchasob);
	colchasob = $('.irs-single').text();
	$('#amount').val(itog);
	$('#myespress').val(myexpress);
	$('#myUnicCode').val(myUnicCode);
}

$('#promocode').keyup(function(){

	myvyvod(); //выводим подсчет  
	myDataParse(); //Обновление всех данных в письме	

});


</script>
<!-- Подключение оплаты -->
<script src="https://www.paypalobjects.com/api/checkout.js"></script> 
<script src="<?php echo get_template_directory_uri() ?>/js/payment-usd.js"></script>
<!-- Конец подключения скриптов расчета -->
<?php get_footer() ?>
