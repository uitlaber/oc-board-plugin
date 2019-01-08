<?php return [
    'plugin' => [
        'name' => 'Board',
        'description' => 'Фронтенд управления данными плагина',
    ],
    'settings' => [
        'category_title' => 'Список категорий',
        'category_description' => 'Отображает список категорий на странице.',
        'category_slug' => 'Параметр URL',
        'category_slug_description' => 'Параметр маршрута, используемый для поиска в текущей категории по URL. Это свойство используется по умолчанию компонентом для маркировки активной категории.',
        'category_display_empty' => 'Пустые категории',
        'category_display_empty_description' => 'Отображать категории, которые не имеют записей.',
        'category_page' => 'Страница категорий',
        'category_page_description' => 'Название страницы категорий. Это свойство используется по умолчанию компонентом.',
        'post_title' => 'Запись',
        'post_description' => 'Отображение записи',
        'post_slug' => 'Параметр URL',
        'post_slug_description' => 'Параметр маршрута, необходимый для выбора конкретной записи.',
        'post_category' => 'Страница категорий',
        'post_category_description' => 'Название страницы категорий. Это свойство используется по умолчанию компонентом.',
        'posts_title' => 'Список записей',
        'posts_description' => 'Отображает список последних записей на странице.',
        'posts_pagination' => 'Параметр постраничной навигации',
        'posts_pagination_description' => 'Параметр, необходимый для постраничной навигации.',
        'posts_filter' => 'Фильтр категорий',
        'posts_filter_description' => 'Введите URL категории или параметр URL-адреса для фильтрации записей. Оставьте пустым, чтобы посмотреть все записи.',
        'posts_per_page' => 'Записей на странице',
        'posts_per_page_validation' => 'Недопустимый Формат. Ожидаемый тип данных - действительное число.',
        'posts_no_posts' => 'Отсутсвие записей',
        'posts_no_posts_description' => 'Сообщение, отображаемое в блоге, если нет никаких записей. Это свойство используется по умолчанию компонентом.',
        'posts_order' => 'Сортировка',
        'posts_order_description' => 'Атрибут, по которому будут сортироваться записи.',
        'posts_category' => 'Страница категорий',
        'posts_category_description' => 'Название категории на странице записи "размещена в категории". Это свойство используется по умолчанию компонентом.',
        'posts_post' => 'Страница записи',
        'posts_post_description' => 'Название страницы для ссылки "подробнее". Это свойство используется по умолчанию компонентом.',
        'posts_except_post' => 'Except post',
        'posts_except_post_description' => 'Enter ID/URL or variable with post ID/URL you want to except',
        'postform_title' => 'Форма добавления записи',
        'postform_description' => 'Добавляет форму на страницу для создание новых записей',
        'helper_title' => 'Helper component',
        'helper_description' => 'Этот компонент включает в себе: onPay,....',
        'search_title' => 'Форма поиска',
        'search_description' => 'Создает форму для поиска постов',
        'search_param_title' => 'Параметр поиска',
        'search_param_description' => 'Параметр с помощью которого можно получить поисковый запрос',
        'location_param_title' => 'Параметр локации',
        'location_param_description' => 'Параметр с помощью которого можно получить регион',
        'ajax_filter_title' => 'Ajax filter',
        'ajax_filter_description' => 'Создает форму с дополнительными фильтрами',
        'withlist_title' => 'Избранные',
        'withlist_description' => 'Отображает избранные объявления',
    ],
    'category' => [
        'name' => 'Название',
        'thumb' => 'Иконка',
        'seo_title' => 'SEO Заголовок',
        'seo_desc' => 'SEO Описание',
        'seo_keys' => 'SEO Ключевые слова',
        'sort' => 'Сортировать',
        'photo' => 'Постер',
    ],
    'tabs' => [
        'main' => 'Основные',
        'properties' => 'Свойства',
    ],
    'permissions' => [
        'manage_categories' => 'Управление категориями',
        'manage_posts' => 'Управление записями',
        'manage_properties' => 'Управление свойствами',
        'manage_plans' => 'Управлять планами',
    ],
    'menu' => [
        'main_menu' => 'Доска объявлений',
        'posts' => 'Записи',
        'categories' => 'Категории',
        'properties' => 'Свойства',
        'plans' => 'Тарифы',
        'locations' => 'Города',
    ],
    'property' => [
        'label' => 'Название',
        'name' => 'Имя',
        'comment' => 'Коммент',
        'type' => 'Тип',
        'filter_type' => 'Тип фильтра',
        'property_mode' => 'Режим свойствии',
        'settings' => 'Настройки',
        'category_id' => 'Категория',
        'show_as_filter' => 'Показать как фильтр',
    ],
    'postproperty' => [
        'key' => 'Ключ',
        'value' => 'Значение',
        'post_id' => 'Запись',
    ],
    'plan' => [
        'title' => 'Название',
        'type' => 'Тип',
        'desc' => 'Описание',
        'amount' => 'Стоимость',
        'days' => 'Количество дней',
        'name' => 'Название',
    ],
    'post' => [
        'location' => 'Город, регион',
        'title' => 'Название',
        'images' => 'Картинки',
        'category_id' => 'Категория',
        'content' => 'Описание',
        'phone' => 'Телефон',
        'email' => 'Электронная почта',
        'contact_name' => 'Контактное лицо',
        'views' => 'Просмотров',
        'tab_main' => 'Основные',
        'tab_plans' => 'Услуги',
        'amount' => 'Цена',
        'is_contract' => 'Договорная',
        'published' => 'Опубликовано',
        'published_at' => 'Дата публикации',
        'currency' => 'Валюта',
    ],
    'location' => [
        'name' => 'Имя',
        'slug' => 'URL',
    ],
];