<?php snippet('header') ?>

  <main class="main" role="main">

    <h1 class="alpha"><?php echo $page->title() ?></h1>
    <h2 class="beta margin-bottom">Get your license for Kirby!</h2>

    <section class="buy-section col-4-6">
      <div class="buy-section-option text active">
        <h3 class="gamma">Buy new license for Kirby 2</h3>
        <div class="buy-section-option-content cf">
          <form class="cf">
            <label for="license-count">Licence(s) at 39$/30€ each</label>
            <input type="number" name="license-count" value="1">
          </form>
          <div class="buy-section-total cf"><b class="delta">Total price:</b> 39$<span>(plus VAT if applicable)</span>
          <button class="btn-red">Proceed &rarr;</button>
          </div>
          <div class="buy-section-order-info text smaller">
            <h5 class="epsilon"><img src="<?php echo page('support/answers')->image()->url() ?>" alt="Info icon">About your order</h5>
            <?php echo kirbytext($page->order()) ?>
          </div>
        </div>
      </div>
      <div class="buy-section-option text smaller">
        <h3 class="gamma">Buy voluntary upgrade for Kirby 2</h3>
        <div class="buy-section-option-content cf vh">
          <form class="cf">
            <label>Licence(s) at 39$/30€ each</label>
            <input type="number" value="1">
          </form>
          <div class="buy-section-total cf"><b class="delta">Total price:</b> 39$<span>(plus VAT if applicable)</span>
          <button class="btn-red">Proceed &rarr;</button>
          </div>
          <div class="buy-section-order-info text smaller cf">
            <h5 class="epsilon">
            <h5 class="epsilon"><img src="<?php echo page('support/answers')->image()->url() ?>" alt="Info icon">Why does this option exist?</h5>
            <?php echo kirbytext($page->voluntary()) ?>
          </div>
        </div>
      </div>
    </section>

    <aside class="buy-aside col-2-6 last text smaller">
      <h3>Volume discounts</h3>
      <?php echo kirbytext($page->volumes()) ?>
      <h3>Student discounts</h3>
      <?php echo kirbytext($page->students()) ?>
    </aside>


  </main>

<?php snippet('footer') ?>