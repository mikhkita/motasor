<?


/* Ошибка */
// echo json_encode(
// 	array(
// 		"action" => "authError",
// 		"text" => "Логин не найден"
// 	)
// );

/* Показать попап */
echo json_encode(
	array(
		"action" => "showPopup",
		"success" => true, // Если передать false, то subtitle подсветится красным, иначе зеленым
		"title" => "Восстановление пароля",
		"subtitle" => "Пароль успешно восстановлен",
		"text" => "На ваш e-mail было выслано письмо с информацией о восстановлении пароля.",
	)
);



?>