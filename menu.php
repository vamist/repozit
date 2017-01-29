
  <header class="clearfix">
      <div class="container">
  <!--      <a id="logo" href="index.html">Подарки</a>	-->

        <nav class="clearfix">
          <ul role="navigation">
            <li>
              <a href="index.php" ><span class="icon">S</span>Главная</a>
            </li>
            <li>
              <a href="index.php?category=0"><span class="icon">E</span>Подарки</a>
            </li>
            <li>
              <a href="index.php?post"><span class="icon">Û</span>Все о подарках</a>
            </li>
            <li>
              <a href="index.php?contact"><span class="icon">M</span>Контакты</a>
            </li>
          </ul>
        </nav>
      </div>
    <div class="bredcrumbs">

      ////////////// Навигация ХЛЕБНЫЕ КРОШКИ
      //для работы необходимо запустить сессию, определить для всех категорий меню поля cat (будет использоваться в switch)
      //и name (будет отображаться как пункт меню). Во всех формируемых гиперссылках пунктов меню нужно
      //прописать параметр l=<?=($l+1)
//
$l=breadCrumbs();
$cat=$_GET["categor"];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    </div>
  </header>
