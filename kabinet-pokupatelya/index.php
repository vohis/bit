<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кабинет покупателя");
?>Text here....<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>


<?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    ".default",
    array(
        "ROOT_MENU_TYPE" => "top",  // Тип верхнего меню
        "MAX_LEVEL" => "2",         // Максимальный уровень вложенности
        "CHILD_MENU_TYPE" => "left", // Тип подменю
        "USE_EXT" => "Y",           // Использовать дополнительные файлы меню
        "MENU_CACHE_TYPE" => "A",   // Тип кеширования
        "MENU_CACHE_TIME" => "3600",// Время кеширования
        "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
        "MENU_CACHE_GET_VARS" => "", // Дополнительные переменные
    ),
    false,
    array(
        "ACTIVE_COMPONENT" => "Y"
    )
);?>
