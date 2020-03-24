<?php
    //Подключение шапки
require_once("header.php");
?>

<div class="block_for_messages">
    <?php
        //Если в сессии существуют сообщения об ошибках, то выводим их
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
 
        //Если в сессии существуют радостные сообщения, то выводим их
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>

<div class="content">

	<div class="d-flex justify-content-center">
		<div >
			<h1>Главная страница</h1>
			<br>
			<br>
		</div>
	</div>

	<div class="aut">
		<div class="container-fluid">

			<div class="row">

				<div class="inf col-lg-6 ">
					<div class="tabl">
						<p>
							ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ
							ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ
							ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ
							ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ ИНФОРМАЦИЯ О САЙТЕ
						</p>
					</div>
				</div>

				<div class="inf col-lg-5 offset-lg-1 ">
					<div class="resultati">
						<p>
							ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ
							ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ
							ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ ТАБЛИЦА РЕЗУЛЬТАТОВ
						</p>
					</div>
					<br>


					<div class="">

						<a class="ychast btn btn-block" href="#">
							<p>
								ПРИНЯТЬ УЧАСТИЕ В ТЕСТИРОВАНИИ
							</p>

						</a>

					</div>

				</div>

			</div>


		</div>
	</div>

</div>

<?php
    //Подключение подвала
require_once("footer.php");
?>