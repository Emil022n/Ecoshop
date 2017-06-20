    
    <?php 
      require "header.php";
    ?>
    <script>
//      $( "#opretToggle" ).click(function() {
//        $( "#opret" ).slideToggle( "slow", function() {
//          // Animation complete.
//        });
//      });
    </script>

    <main>
     
    <?php 
      
      if(isset($_SESSION['userName'])){
        echo "
        
        
        
             <div class='mainCont'>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate a tempora, molestias non blanditiis odit rerum quam suscipit iusto, odio magnam nisi veniam accusantium exercitationem harum, quibusdam eveniet perferendis at.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil itaque harum distinctio corporis, earum animi commodi. Quod odit rem ipsa eveniet corporis rerum, provident itaque libero laudantium blanditiis culpa nesciunt.</p>
      </div>
      <div id='mainCont2'>
        <div id='opretCont'>
          <div id='opret'>
            <form action='../php/insertProducts.php' method='POST'>  
<!--            method='GET' gør at input ryger i URLen -->
	          <div class='opretForm'>
		        <label class='control-label ' for='imgSrc'>Billede</label>
		        <input required class='form-control' placeholder='sti til billede...' id='imgSrc' name='imgSrc' type='text'/>
	          </div>	
	          <div class='opretForm'>
		        <label class='control-label' for='imgAlt'>Alt tekst</label>
		        <input required class='form-control' placeholder='Billedets alt tekst...' id='imgAlt' name='imgAlt' type='text'/>
	          </div>
	          <div class='opretForm'>
		        <label class='control-label ' for='heading'>Overskrift</label>
		        <input required class='form-control' placeholder='Overskrift...' id='heading' name='heading' type='text'/>
	          </div>	
	          <div class='opretForm'>
		        <label class='control-label ' for='content'>Brødtekst</label>
		        <textarea required class='form-control' cols='40' placeholder='Brødtekst...' id='content' name='content' rows='10'></textarea>
	          </div>
	          <div class='opretForm'>
		        <label class='control-label ' for='price'>Pris</label>
		        <input required class='form-control' placeholder='Pris i kr...' id='price' name='price' type='text'/>
	          </div>	
	          <div class='opretForm'>
		        <button class='opretBtn' name='submit' type='submit'>Opret</button>
	          </div>
            </form>
          </div>

        </div>
      </div>
      <div class='mainCont'>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure maiores neque obcaecati adipisci officiis esse earum fuga molestiae, dignissimos, expedita qui dicta temporibus eius sequi tenetur quaerat delectus magni non.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ab quae porro soluta ipsum suscipit dolor iste magnam, molestiae minima possimus nobis, quaerat ipsam praesentium. Doloremque fuga dolores nihil minus?</p>
      </div>
";
      }
      else {
        echo "     <div class='mainCont'>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate a tempora, molestias non blanditiis odit rerum quam suscipit iusto, odio magnam nisi veniam accusantium exercitationem harum, quibusdam eveniet perferendis at.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil itaque harum distinctio corporis, earum animi commodi. Quod odit rem ipsa eveniet corporis rerum, provident itaque libero laudantium blanditiis culpa nesciunt.</p>
      </div>
      <div id='mainCont2'>
      <img src='img/logo2.gif' alt='ØKOshop logo'>
      <h1><span style='color:#A1C65D;'>ØKO</span>shop.<span style='color:#6B9814; font-size: 2em;'><br>DK</span></h1>
      </div>
      <div class='mainCont'>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure maiores neque obcaecati adipisci officiis esse earum fuga molestiae, dignissimos, expedita qui dicta temporibus eius sequi tenetur quaerat delectus magni non.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ab quae porro soluta ipsum suscipit dolor iste magnam, molestiae minima possimus nobis, quaerat ipsam praesentium. Doloremque fuga dolores nihil minus?</p>
      </div>";
      }
      ?>
              

    </main>
    <section>
     <p class="pHead">Alle produkter</p>
      <div class="productCont">
        <?php require "../php/getProducts.php"; ?>
      </div>
    </section>
  <?php require "footer.php";?>
  </div>

</body>
</html>