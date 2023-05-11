<?php

return array(

    'does_not_exist' => 'Аксессуар [:id] не существует.',
    'assoc_users'	 => 'Данный аксессуар выдан пользователям в количестве :count. Сделайте возврат аксессуара и попробуйте снова. ',

    'create' => array(
        'error'   => 'Аксесуар не был создан, попробуйте ещё раз.',
        'success' => 'Аксесуар успешно создан.'
    ),

    'update' => array(
        'error'   => 'Аксесуар не обновлён, попробуйте ещё раз',
        'success' => 'Аксесуар успешно обновлён.'
    ),

    'delete' => array(
        'confirm'   => 'Вы уверены, что хотите удалить этот компонент?',
        'error'   => 'Невозможно удалить компонент. Пожалуйста, попробуйте еще раз.',
        'success' => 'Копонент удален успешно.'
    ),

     'checkout' => array(
        'error'   		=> 'Ошибка при выдаче аксессуара. Повторите попытку',
        'success' 		=> 'Аксессуар успешно выдан.',
        'unavailable'   => 'Accessory is not available for checkout. Check quantity available',
        'user_does_not_exist' => 'Этот пользователь является недопустимым. Пожалуйста, попробуйте еще раз.'
    ),

    'checkin' => array(
        'error'   		=> 'Ошибка при возврате аксессуара. Повторите попытку',
        'success' 		=> 'Аксессуар успешно возвращен.',
        'user_does_not_exist' => 'Этот пользователь является недопустимым. Пожалуйста, попробуйте еще раз.'
    )


);
