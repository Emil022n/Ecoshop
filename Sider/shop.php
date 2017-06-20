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
            <form action="../php/insertProducts.php" method="POST"> <!-- method="GET" gør at input ryger i URLen -->
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
		        <label class="control-label " for="price">Pris</label>
		        <input required class="form-control" placeholder="Pris i kr..." id="price" name="price" type="text"/>
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
        <?php require "../php/getProducts.php"; ?>
      </div>
    </section>
  <?php require "footer.php";?>
  </div>

</body>
</html>