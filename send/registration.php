<?


/* Ошибка */
// echo json_encode(
// 	array(
// 		"action" => "authError",
// 		"text" => "Пользователь с e-mail «".$_POST["email"]."» уже существует",
// 	)
// );

/* Показать попап */
echo json_encode(
	array(
		"action" => "showPopup",
		"success" => true, // Если передать false, то subtitle подсветится красным, иначе зеленым
		"title" => "Регистрация",
		"subtitle" => "Вы были успешно зарегистрированы.",
		"text" => "На указанный в форме e-mail было выслано письмо с информацией о подтверждении регистрации.",
	)
);



?>