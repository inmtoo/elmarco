<?php
return array (
  'meta' => 
  array (
    'Project-Id-Version' => 'wa-plugins/shipping/boxberry',
    'POT-Creation-Date' => '2019-08-26 09:21+0300',
    'PO-Revision-Date' => '',
    'Last-Translator' => 'wa-plugins/shipping/boxberry',
    'Language-Team' => 'wa-plugins/shipping/boxberry',
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/plain; charset=utf-8',
    'Content-Transfer-Encoding' => '8bit',
    'Plural-Forms' => 
    array (
      'nplurals' => '3',
      'plural' => 'return (((($n%10)==1)&&(($n%100)!=11))?(0):((((($n%10)>=2)&&(($n%10)<=4))&&((($n%100)<10)||(($n%100)>=20)))?(1):2));',
    ),
    'X-Poedit-SourceCharset' => 'utf-8',
    'X-Poedit-Basepath' => '.',
    'Language' => 'ru_RU',
    'X-Generator' => 'Poedit 2.0.6',
    'X-Poedit-SearchPath-0' => '.',
    'X-Poedit-SearchPath-1' => '.',
  ),
  'messages' => 
  array (
    'Real-time shipping quotes with <a href="https://boxberry.ru/en/">Boxberry</a> service.' => 'Расчет стоимости доставки сервисом <a href="https://boxberry.ru/">Boxberry</a>.',
    'Shipping cost' => 'Стоимость доставки',
    'Minimum order cost for free delivery' => 'Минимальная стоимость заказа для бесплатной доставки',
    'Shipping rates provided by Boxberry service are ignored when free shipping is applied.' => 'Стоимость доставки, рассчитанная сервисом Boxberry, игнорируется, когда применяется бесплатная доставка.',
    'Declared value for prepaid delivery (insurance cost)' => 'Объявленная стоимость для отправлений с предоплатой (страховая стоимость)',
    'Set up markup costs in your Boxberry account.' => 'Настройте стоимость наценок в своем личном кабинете Boxberry.',
    'Shipping options' => 'Варианты доставки',
    'Select values corresponding to your contract’s conditions.' => 'Выберите значения в соответствии с условиями своего договора.',
    'If “With prepayment only” option is selected, then in Shop-Script, with “In-cart checkout” mode enabled, only prepayment options are available after shipping option selection.' => 'Если выбран вариант «Только предоплата», то в приложении Shop-Script в режиме «Оформление заказа в корзине» после выбора варианта доставки будут доступны только варианты предоплаты.',
    'If “All” option is selected, then in Shop-Script, with “In-cart checkout” mode enabled, minimum shipping cost for prepayment is displayed by default. Once a shipping and a payment option are selected, the displayed shipping cost is updated accordingly.' => 'Если выбран вариант «Все», то в приложении Shop-Script в режиме «Оформление заказа в корзине» по умолчанию будет показана минимальная стоимость доставки с расчетом на предоплату, а после выбора вариантов доставки и оплаты стоимость доставки будет уточнена.',
    'Pickup points' => 'Пункты выдачи заказов',
    'Courier delivery' => 'Курьерская доставка',
    'Courier name' => 'Название курьера',
    'Russian Federation' => 'Российская Федерация',
    'Availability settings' => 'Условия доступности',
    'Country' => 'Страна',
    'Region' => 'Регион',
    'Shipping will be restricted to the selected region.' => 'Доставка будет ограничена выбранным регионом.',
    'Localities' => 'Населенные пункты',
    'Separate locality names with a comma.' => 'Разделяйте названия населенных пунктов запятой.',
    'Max weight' => 'Максимальный вес',
    'g' => 'г',
    'Max length' => 'Максимальная длина',
    'Max width' => 'Максимальная ширина',
    'Max height' => 'Максимальная высота',
    'Max dimensions' => 'Максимальные размеры',
    'Basic settings' => 'Основные настройки',
    'Service name' => 'Название службы',
    'API URL' => 'Адрес API',
    'Token' => 'Токен',
    'Parcel office city' => 'Город приема посылок',
    'Start typing a city name' => 'Начните искать город',
    'To select a parcel office, please enter a token and save the settings.' => 'Чтобы выбрать пункт приема посылок, введите токен и сохраните настройки.',
    'There are no parcel offices in your city.' => 'В вашем городе нет пункта приема посылок.',
    'Parcel office' => 'Пункт приема посылок',
    'Default weight' => 'Вес по умолчанию',
    'Default length' => 'Длина по умолчанию',
    'm' => 'м',
    'Default width' => 'Ширина по умолчанию',
    'Default height' => 'Высота по умолчанию',
    'Used only if order dimensions have not been calculated by a special plugin. If no value is specified, shipping rate and terms will not be calculated.' => 'Используется, только если габариты заказа не были рассчитаны специальным плагином. Если значение не указано, то сроки и стоимость доставки в пункт выдачи заказов не рассчитываются.',
    'Integration settings' => 'Настройки интеграции',
    'Upon checkout, a delivery draft is created in your Boxberry account. Should you edit an order in your Webasyst backend, the corresponding draft is updated automatically.' => 'После оформления заказа в вашем личном кабинете Boxberry создается посылка (черновик отгрузки). В случае редактирования заказа в бекенде Webasyst этот черновик автоматически обновляется.',
    'Type of parcel delivery' => 'Вид выдачи посылок',
    'If nothing is selected, a default value from the store profile’s “Services” section of your Boxberry account is used.' => 'Если ничего не выбрано, то используется значение по умолчанию, установленное в разделе «Услуги» профиля магазина в вашем личном кабинете Boxberry.',
    'Store name for SMS and email notifications' => 'Наименование магазина для SMS- и email-оповещений',
    'Notifications are sent by Boxberry service.' => 'Оповещения отправляются сервисом Boxberry.',
    'Delivery is not available. Please check the shipping address and the selected payment type.' => 'Доставка недоступна. Проверьте адрес доставки и выбранный вариант оплаты.',
    'Do not use' => 'Не использовать',
    'All' => 'Все',
    'With prepayment only' => 'Только с предоплатой',
    'Delivery without parcel opening' => 'Выдача без вскрытия',
    'Delivery with parcel opening and completeness check' => 'Выдача со вскрытием и проверкой комплектности',
    'Delivery of a parcel part' => 'Выдача части вложения',
    'from' => 'oт',
    'Delivery is not available for specified ZIP code.' => 'Доставка для указанного индекса недоступна.',
    'Courier' => 'Курьер',
    'The sum of length, width, and height values must not exceed 2.5 m.' => 'Сумма значений длины, ширины и высоты не должна превышать 2,5 м.',
    'Specify either a fixed value expressed in a currency or percentage of the order total, or their sum or difference.' => 'Укажите фиксированную стоимость в валюте или долю от суммы заказа в процентах, либо их сумму или разность.',
    'Examples:' => 'Примеры:',
    'Declared value must not exceed 300,000 rubles.' => 'Объявленная стоимость не может превышать 300 000 рублей.',
    'To switch to the test mode, request a test API address and token from Boxberry support team.' => 'Чтобы переключиться в тестовый режим, запросите тестовый адрес API и токен у службы поддержки Boxberry.',
    'Error during automatic shipment creation. Please create a shipment manually in your personal account on Boxberry website. See detailed error-related information in log file <em>wa-log/wa-plugins/shipping/boxberry/api_requests.log</em>.' => 'Ошибка при автоматическом создании отправления. Создайте отправление вручную в личном кабинете на сайте Boxberry. Подробную информацию об ошибке смотрите в лог-файле <em>wa-log/wa-plugins/shipping/boxberry/api_requests.log</em>.',
    'In case of payment on delivery, the declared value passed to the shipping service is equal to the order total less the shipping cost, i.e. pure cost of delivered items with discount applied.' => 'В случае оплаты заказа при получении в службу доставки передается объявленная стоимость отправления, равная стоимости заказа за вычетом стоимости доставки, т. е. стоимость товаров с учетом скидки.',
    'Edit' => 'Редактировать',
    'Shipping will be available for selected regions only' => 'Доставка будет доступна только в выбранные регионы',
    'Regions' => 'Регионы',
    'All regions' => 'Все регионы',
    'Selected regions only' => 'Только выбранные регионы',
    'Search' => 'Поиск',
    'Choose all' => 'Выбрать все',
    'No regions are set up for this country.' => 'Для этой страны регионы не настроены.',
    'Save' => 'Сохранить',
    'or' => 'или',
    'cancel' => 'отмена',
    'Countries' => 'Страны',
    'All countries' => 'Все страны',
    'Selected countries only' => 'Только выбранные страны',
    'Territorial availability' => 'Территориальная доступность',
    'Maximum dimensions' => 'Максимальные габариты',
    'Maximum package dimensions for which this shipping method should be available. Cannot exceed the maximum dimensions set by Boxberry — length 1.2 m, width 0.8 m, height 0.5 m, all dimensions sum 2.5 m.' => 'Максимальные габариты отправления, для которых будет доступен этот вариант доставки. Они не могут превышать ограничения по габаритам Boxberry: длина — 1,2 м, ширина — 0,8 м, высота — 0,5 м, общая сумма измерений — 2,5 м.',
    'Length' => 'Длина',
    'Width' => 'Ширина',
    'Height' => 'Высота',
    'Maximum length must be greater than 0 and must not exceed 1.2 m.' => 'Максимальная длина должна быть больше 0 и не превышать 1,2 м.',
    'Maximum width must be greater than 0 and must not exceed 0.8 m.' => 'Максимальная ширина должна быть больше 0 и не превышать 0,8 м.',
    'Maximum height must be greater than 0 and must not exceed 0.5 m.' => 'Максимальная высота должна быть больше 0 и не превышать 0,5 м.',
    'Default dimensions' => 'Габариты по умолчанию',
    'Used in cases when package dimensions are not provided by a dedicated plugin. If these values are empty then, if no values are provided by a dedicated plugin, shipping terms and rates for this shipping method will not be calculated.' => 'Используется, если габариты заказа не были рассчитаны специальным плагином. Если значения не указаны, то при отсутствии значений, рассчитанных специальным плагином, сроки и стоимость доставки для этого способа доставки рассчитываться не будут.',
    'Default length must be greater than 0 and must not exceed the maximum dimensions length.' => 'Длина по умолчанию должна быть больше 0 и меньше или равна длине максимальных габаритов.',
    'Default width must be greater than 0 and must not exceed the maximum dimensions width.' => 'Ширина по умолчанию должна быть больше 0 и меньше или равна ширине максимальных габаритов.',
    'Default height must be greater than 0 and must not exceed the maximum dimensions height.' => 'Высота по умолчанию должна быть больше 0 и меньше или равна высоте максимальных габаритов.',
    'Maximum weight for which this shipping method will be available. Cannot exceed Boxberry’s weight limitation of 30 kg.' => 'Максимальный вес отправления, для которого будет доступен этот вариант доставки. Не может превышать ограничения по весу Boxberry в 30 кг.',
    'Must be above 4 g and must not exceed 30 kg.' => 'Должен быть больше 4 г и меньше либо равно 30 кг.',
    'Used in cases when no weight data are available. If this value is empty then, with no information about the shipping weight available, the shipping terms and rates will not be calculated.' => 'Используется, если плагин не получил информацию о весе отправления. Если значение не указано, то при отсутствии информации о весе сроки и стоимость доставки для этого способа доставки рассчитаны не будут.',
    'Must be greater than 4 g and must not exceed the maximum weight value.' => 'Должен быть больше 4 г и меньше или равно значению максимального веса.',
  ),
);