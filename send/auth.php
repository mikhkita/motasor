<?


/* Ошибка авторизации */
// echo json_encode(
// 	array(
// 		"action" => "authError",
// 		"text" => "Неверный логин или пароль"
// 	)
// );

/* Редирект */
// echo json_encode(
// 	array(
// 		"action" => "redirect",
// 		"href" => "index.php",
// 	)
// );

/* Перезагрузка страницы */
echo json_encode(
	array(
		"action" => "reload",
	)
);

?>