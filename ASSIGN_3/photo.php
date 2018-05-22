<?php
	include 'photo_header.php'
?>
</header>

	<div class="bigimg_aboutus">
		<div class="caption">
		<h1><span class="border">RV ART HALL</span></h1>
		</div>
	</div>

	<article class="white_background-article">
	
		<div class="header" id="myHeader">
		<h3>Photo Gallery</h3>
		<button class="btn active" onclick="two()">2</button>
		<button class="btn" onclick="four()">4</button>
		</div>

		<!-- Photo Grid -->
		<div class="row"> 
		  <div class="column">
			<img src="images/PG/PG_1.jpg" alt="Sleep in the back of RV? No problem!" onclick="openModal();currentSlide(1)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_2.jpg" alt="One big RV. One small RV." onclick="openModal();currentSlide(2)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_3.jpg" alt="Leg's out !" onclick="openModal();currentSlide(3)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_4.jpg" alt="Not everyday you go visit Dry Land." onclick="openModal();currentSlide(4)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_5.jpg" alt="Hop in boys!" onclick="openModal();currentSlide(5)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_6.jpg" alt="This view only for the RV Campers." onclick="openModal();currentSlide(6)" class="hover-shadow cursor"/>
		  </div>
		  <div class="column">
			<img src="images/PG/PG_8.jpg" alt="Sunset gaze." onclick="openModal();currentSlide(8)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_9.jpg" alt="*Knock Knock*" onclick="openModal();currentSlide(9)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_10.jpg" alt="Mountain RV-ing." onclick="openModal();currentSlide(10)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_11.jpg" alt="A beach line is a good place for RV." onclick="openModal();currentSlide(11)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_12.jpg" alt="Trailer so that I can carry more stuff." onclick="openModal();currentSlide(12)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_7.jpg" alt="Resting near the beach." onclick="openModal();currentSlide(7)" class="hover-shadow cursor"/>
		  </div> 
		  
		  <div class="column">
			<img src="images/PG/PG_13.jpg" alt="Ever see a RV BumbleBee?" onclick="openModal();currentSlide(13)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_14.jpg" alt="Good Evening." onclick="openModal();currentSlide(14)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_15.jpg" alt="Dine in." onclick="openModal();currentSlide(15)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_16.jpg" alt="Starry sky in the darkest night." onclick="openModal();currentSlide(16)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_17.jpg" alt="I found a hot spring." onclick="openModal();currentSlide(17)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_18.jpg" alt="I had my dog with me." onclick="openModal();currentSlide(18)" class="hover-shadow cursor"/>
		  </div>
		  
		  <div class="column">
			<img src="images/PG/PG_20.jpg" alt="Snow Mountain." onclick="openModal();currentSlide(20)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_21.jpg" alt="I found a lost RV." onclick="openModal();currentSlide(21)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_22.jpg" alt="We like to stay in the wild." onclick="openModal();currentSlide(22)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_23.jpg" alt="Ready to roll." onclick="openModal();currentSlide(23)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_24.jpg" alt="Class C + Trailer." onclick="openModal();currentSlide(24)" class="hover-shadow cursor"/>
			<img src="images/PG/PG_19.jpg" alt="How often you see these amount of stars." onclick="openModal();currentSlide(19)" class="hover-shadow cursor"/>
		  </div>
		</div>

		
		<div id="myModal" class="modal">
		  <span class="close cursor" onclick="closeModal()">x</span>
		  <div class="modal-content">

			<div class="mySlides">
			  <div class="numbertext">1 / 24</div>
			  <img src="images/PG/PG_1.jpg" alt="Sleep in the back of RV? No problem!"/>
			</div>

			<div class="mySlides">
			  <div class="numbertext">2 / 24</div>
			  <img src="images/PG/PG_2.jpg" alt="One big RV. One small RV."/>
			</div>

			<div class="mySlides">
			  <div class="numbertext">3 / 24</div>
			  <img src="images/PG/PG_3.jpg" alt="Leg's out !"/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">4 / 24</div>
			  <img src="images/PG/PG_4.jpg" alt="Not everyday you go visit Dry Land."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">5 / 24</div>
			  <img src="images/PG/PG_5.jpg" alt="Hop in boys!"/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">6 / 24</div>
			  <img src="images/PG/PG_6.jpg" alt="This view only for the RV Campers."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">7 / 24</div>
			  <img src="images/PG/PG_7.jpg" alt="Sunset gaze."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">8 / 24</div>
			  <img src="images/PG/PG_8.jpg" alt="*Knock Knock*"/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">9 / 24</div>
			  <img src="images/PG/PG_9.jpg" alt="Mountain RV-ing."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">10 / 24</div>
			  <img src="images/PG/PG_10.jpg" alt="A beach line is a good place for RV."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">11 / 24</div>
			  <img src="images/PG/PG_11.jpg" alt="Trailer so that I can carry more stuff."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">12 / 24</div>
			  <img src="images/PG/PG_12.jpg" alt="Resting near the beach."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">13 / 24</div>
			  <img src="images/PG/PG_13.jpg" alt="Ever see a RV BumbleBee?"/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">14 / 24</div>
			  <img src="images/PG/PG_14.jpg" alt="Good Evening."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">15 / 24</div>
			  <img src="images/PG/PG_15.jpg" alt="Dine in."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">16 / 24</div>
			  <img src="images/PG/PG_16.jpg" alt="Starry sky in the darkest night."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">17 / 24</div>
			  <img src="images/PG/PG_17.jpg" alt="I found a hot spring."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">18 / 24</div>
			  <img src="images/PG/PG_18.jpg" alt="I had my dog with me."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">19 / 24</div>
			  <img src="images/PG/PG_19.jpg" alt="Snow Mountain."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">20 / 24</div>
			  <img src="images/PG/PG_20.jpg" alt="I found a lost RV."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">21 / 24</div>
			  <img src="images/PG/PG_21.jpg" alt="We like to stay in the wild."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">22 / 24</div>
			  <img src="images/PG/PG_22.jpg" alt="Ready to roll."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">23 / 24</div>
			  <img src="images/PG/PG_23.jpg" alt="Class C + Trailer."/>
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">24 / 24</div>
			  <img src="images/PG/PG_24.jpg" alt="How often you see these amount of stars."/>
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

			<div class="caption-container">
			  <p id="caption"></p>
			</div>
		</div>
		
		 <div class="column">
			<img class="demo cursor" src="images/PG/PG_1.jpg" onclick="currentSlide(1)" alt="Sleep in the back of RV? No problem!"/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_2.jpg" onclick="currentSlide(2)" alt="One big RV. One small RV."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_3.jpg" onclick="currentSlide(3)" alt="Leg's out !"/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_4.jpg" onclick="currentSlide(4)" alt="Not everyday you go visit Dry Land."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_5.jpg" onclick="currentSlide(5)" alt="Hop in boys!"/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_6.jpg" onclick="currentSlide(6)" alt="This view only for the RV Campers."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_7.jpg" onclick="currentSlide(7)" alt="Resting near the beach."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_8.jpg" onclick="currentSlide(8)" alt="Sunset gaze."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_9.jpg" onclick="currentSlide(9)" alt="*Knock Knock*"/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_10.jpg" onclick="currentSlide(10)" alt="Mountain RV-ing."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_11.jpg" onclick="currentSlide(11)" alt="A beach line is a good place for RV."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_12.jpg" onclick="currentSlide(12)" alt="Trailer so that I can carry more stuff."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_13.jpg" onclick="currentSlide(13)" alt="Ever see a RV BumbleBee?"/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_14.jpg" onclick="currentSlide(14)" alt="Good Evening!"/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_15.jpg" onclick="currentSlide(15)" alt="Dine in."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_16.jpg" onclick="currentSlide(16)" alt="Starry sky in the darkest night."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_17.jpg" onclick="currentSlide(17)" alt="I found a hot spring."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_18.jpg" onclick="currentSlide(18)" alt="I had my dog with me."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_19.jpg" onclick="currentSlide(19)" alt="How often you see these amount of stars."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_20.jpg" onclick="currentSlide(20)" alt="Snow Mountain."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_21.jpg" onclick="currentSlide(21)" alt="I found a lost RV."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_22.jpg" onclick="currentSlide(22)"  alt="We like to stay in the wild."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_23.jpg" onclick="currentSlide(23)" alt="Ready to roll."/>
		</div>
		<div class="column">
			<img class="demo cursor" src="images/PG/PG_24.jpg" onclick="currentSlide(24)" alt="Class C + Trailer."/>
		</div>
		</div>
	</article>
	
	<div class="bigimg_aboutus">
		<div class="caption">
		<h2><span class="border2">ART LIFE</span></h2>
		</div>
	</div>

<?php
	include 'photo_footer.php'
?>
</body>
<script src="script/script.js"></script>

</html>