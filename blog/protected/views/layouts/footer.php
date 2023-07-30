<div class="container-fluid navbar-fixed-bottom bg-light bg-gradient shadow-lg mt-5">
  <footer class="py-3 my-4">
    <ul class="container nav justify-content-center border-bottom pb-3 mb-3">
      <li class="styled-button"><a href="<?= Yii::app()->request->baseUrl; ?>/"
          class="nav-link px-2 text-muted">Home</a></li>
      <li class="styled-button"><a href="<?= Yii::app()->request->baseUrl; ?>/index.php?r=post/listposts"
          class="nav-link px-2 text-muted">Postagens</a></li>
      <li class="styled-button"><a href="https://conexa.app/" class="nav-link px-2 text-muted">Site Oficial</a></li>
    </ul>
    <p class="text-center text-muted">©
      <?php echo date('Y'); ?> by Conexa
    </p>
  </footer>
</div>

</body>
</html>