    <?php require "header.php";?>
    <script>
//      $( "#opretToggle" ).click(function() {
//        $( "#opret" ).slideToggle( "slow", function() {
//          // Animation complete.
//        });
//      });
    </script>
    <main>
     
        <div id="opretCont">
<!--          <button id="opretToggle">Tilføj produkt</button>-->
          <div id="opret">
            <form action="php/insertArticle.php" method="POST"> <!-- method="GET" gør at input ryger i URLen -->
	          <div class="opretForm">
		        <label class="control-label " for="imgSrc">Billede</label>
		        <input required class="form-control" placeholder="sti til billede..." id="imgSrc" name="imgSrc" type="text"/>
	          </div>	
	          <div class="opretForm">
		        <label class="control-label" for="imgAlt">Alt tekst</label>
		        <input required class="form-control" placeholder="Billedets alt tekst..." id="imgAlt" name="imgAlt" type="text"/>
	          </div>
	          <div class="opretForm">
		        <label class="control-label " for="heading">Overskrift</label>
		        <input required class="form-control" placeholder="Overskrift..." id="heading" name="heading" type="text"/>
	          </div>	
	          <div class="opretForm">
		        <label class="control-label " for="content">Brødtekst</label>
		        <textarea required class="form-control" cols="40" placeholder="Brødtekst..." id="content" name="content" rows="10"></textarea>
	          </div>
	          <div class="opretForm">
		        <label class="control-label " for="heading">Pris</label>
		        <input required class="form-control" placeholder="Pris i kr..." id="heading" name="heading" type="text"/>
	          </div>	
	          <div class="opretForm">
		        <button class="opretBtn" name="submit" type="submit">Opret</button>
	          </div>
            </form>
          </div>
        </div>
      

    </main>
    <section>
      <div class="productCont">
        <div class="products">
          <img src="img/1.jpg" alt="Lilla sæbe">
          <p class="pHead2">Økologisk hånd/body lotion</p>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis molestiae cum nihil fugit dicta officiis, consequatur, blanditiis ab animi aspernatur quisquam pariatur reiciendis. Nobis sunt est eveniet eum voluptate!</p>
          <div class="priceCont"><p>Pris: 200kr.</p></div>
          <p>Published: 02-08-1993</p>
          <div class="buttonCont">
            <button type="button">Køb</button>
          </div>
        </div>
        <div class="products">
          <img src="img/2.jpg" alt="Økologisk bodylotion">
          <p class="pHead2">Økologisk hånd/body lotion</p>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis molestiae cum nihil fugit dicta officiis, consequatur, blanditiis ab animi aspernatur quisquam pariatur reiciendis. Nobis sunt est eveniet eum voluptate!</p>
          <div class="priceCont"><p>Pris: 800kr.</p></div>
          <p>Published: 06-03-1975</p>
          <div class="buttonCont">
            <button type="button">Køb</button>
          </div>
        </div>
        <div class="products">
          <img src="img/3.jpg" alt="Grøn bodylotion">
          <p class="pHead2">Økologisk hånd/body lotion</p>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis molestiae cum nihil fugit dicta officiis, consequatur, blanditiis ab animi aspernatur quisquam pariatur reiciendis. Nobis sunt est eveniet eum voluptate!</p>
          <div class="priceCont"><p>Pris: 180kr.</p></div>
          <p>Published: 01-01-1970</p>
          <div class="buttonCont">
            <button type="button">Køb</button>
          </div>
        </div>
      </div>
    </section>
  <?php require "footer.php";?>
  </div>

</body>
</html>