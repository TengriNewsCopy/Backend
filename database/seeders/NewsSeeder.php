<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Из Кореи этапировали находящихся в розыске казахстанок',
                'content' => '<img src="https://tengrinews.kz/userdata/news/2024/news_531857/thumb_b/photo_468415.jpeg.webp" alt="" class="news-image"><p class="news-content" style="border-bottom: 1px solid gray;">За пособничество, провокацию преступления и незаконное обращение с психотропными веществами из Южной Кореи этапировали гражданку Казахстана. Об этом сообщили в Антикоррупционной службе, передает корреспондент <a style="color: green" href='tengrinews.kz'>Tengrinews.kz</a>.</p><p>Как рассказал официальный представитель Антикора Данияр Бегайдаров, совместно с Генеральной прокуратурой при содействии МВД и Интерпола из Республики Корея была этапирована подозреваемая Ж., находившаяся в международном розыске.</p><div style="padding: 16px 36px 24px; background: #f5f6fe; border-left: 4px solid #4459f2; border-radius: 0 5px 5px 0;">"Она подозревается в пособничестве, провокации преступления и незаконном обращении с психотропными веществами. А именно: в 2022 году в сговоре с сотрудниками полиции Туркестанской области подозреваемая склонила местного жителя к приобретению у неустановленных лиц психотропного вещества - мефедрона. 29 марта текущего года она водворена в следственный изолятор города Алматы. Причастные руководитель отдела и оперуполномоченный управления по борьбе с наркобизнесом областного департамента полиции установлены и находятся под домашним арестом", - сообщил Бегайдаров.</div><p>Еще одна соучастница по делу, подозреваемая в аналогичных преступлениях, ранее также была задержана и этапирована из Республики Корея.</p><p>Ранее <a style="color: green" href="https://tengrinews.kz/kazakhstan_news/knb-v-stambule-zaderjanyi-dvoe-kazahstantsev-531216/">в КНБ сообщили о задержании и этапировании казахстанцев из Турции</a>.</p><p><a style="color: green" href="https://whatsapp.com/channel/0029VaC8d1M3AzNVm4DlYk2H">Наши новости теперь в WhatsApp! Подписывайтесь на наш канал в самом популярном мессенджере</a></p>',
                'image' => 'https://tengrinews.kz/userdata/news/2024/news_531857/thumb_b/photo_468415.jpeg.webp',
                'author' => [
                    'name' => 'Аружан Дарибай',
                    'image' => 'https://tengrinews.kz/userdata/user/5c881e7da195d8348345ed59494e1ebd.jpeg',
                    'job_title' => 'Корреспондент'
                ],
                'views' => 100,
                'comments' => [
                    [
                        'name' => 'Commenter 1',
                        'comment' => 'Comment 1',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                    [
                        'name' => 'Commenter 2',
                        'comment' => 'Comment 2',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                ],
                'tags' => ['Антикор', 'Антикоррупционная служба', 'Корея', 'Задержание', 'Алматы', 'Южная Корея'],
                'published_at' => '2024-04-10 14:28:00',
            ],
            [
                'title' => 'Морозы до 13 градусов придут в Казахстан',
                'content' => '<img src="https://tengrinews.kz/userdata/news/2024/news_531860/thumb_b/photo_468413.jpeg.webp" alt="" class="news-image"><p class="news-content" style="border-bottom: 1px solid gray;">Синоптики сделали прогноз о том, какой будет погода в Казахстане 11, 12 и 13 апреля, передает корреспондент <a style="color: green" href='tengrinews.kz'>Tengrinews.kz</a>.</p><p>Согласно прогнозу, большая часть территории Казахстана будет находиться под влиянием атмосферных фронтальных разделов, в связи с чем ночью ожидаются осадки (дождь, снег), днем дождь, 11-12 апреля на востоке и юго-востоке страны прогнозируются сильные осадки (дождь, снег). По республике в ночные и утренние часы прогнозируются туманы, днем на западе, в южных регионах ожидаются грозы, в центре, на востоке и юго-востоке - порывистый ветер.</p><div style="padding: 16px 36px 24px; background: #f5f6fe; border-left: 4px solid #4459f2; border-radius: 0 5px 5px 0;">"На большей части территории страны значительных колебаний в температурном фоне не прогнозируется. Лишь в северных и восточных регионах страны 12-13 апреля в ночные часы ожидается понижение температуры воздуха до 1-13 мороза", - говорится в сообщении.</div><p><a style="color: green" href="https://tengrinews.kz/weather/">Прогноз погоды по городам Казахстана</a>.</p><p><a style="color: green" href="https://whatsapp.com/channel/0029VaC8d1M3AzNVm4DlYk2H">Наши новости теперь в WhatsApp! Подписывайтесь на наш канал в самом популярном мессенджере</a></p>',
                'image' => 'https://tengrinews.kz/userdata/news/2024/news_531860/thumb_b/photo_468413.jpeg.webp',
                'author' => [
                    'name' => 'Author 2',
                    'image' => 'author2.jpg',
                    'job_title' => 'Job Title 2'
                ],
                'views' => 200,
                'comments' => [
                    [
                        'name' => 'Commenter 3',
                        'comment' => 'Comment 3',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                    [
                        'name' => 'Commenter 4',
                        'comment' => 'Comment 4',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                ],
                'tags' => ['Погода', 'Прогноз погоды', 'Мороз', 'Снег', 'Дожди'],
                'published_at' => '2024-04-10 14:15:00',
            ],
            [
                'title' => 'Новое расследование в отношении Гульмиры Сатыбалды: подробности',
                'content' => '<img src="https://tengrinews.kz/userdata/news/2024/news_531855/thumb_b/photo_468410.png.webp" alt="" class="news-image"><p class="news-content" style="border-bottom: 1px solid gray;">В Антикоррупционной службе прокомментировали новое расследование в отношении экс-супруги Кайрата Сатыбалдыулы - Гульмиры Сатыбалды, передает корреспондент <a style="color: green" href='tengrinews.kz'>Tengrinews.kz</a>.</p><p>Как рассказал на брифинге официальный представитель Антикора Данияр Бигайдаров, Сатыбалдыулы и другим лицам вменяется совершение нескольких уголовных преступлений.</p><div style="padding: 16px 36px 24px; background: #f5f6fe; border-left: 4px solid #4459f2; border-radius: 0 5px 5px 0;">"Агентством завершено досудебное расследование в отношении подозреваемой Сатыбалды Гульмиры и других лиц по фактам незаконного лишения свободы, вымогательства в особо крупном размере, самоуправства, повлекшего тяжкие последствия. В отношении Сатыбалды Гульмиры с санкции следственного суда Алматы избрана мера пресечения в виде содержания под стражей", - сообщил Бигайдаров.</div><p>Как отметил официальный представитель Антикора, в настоящее время участники процесса продолжают ознакомление с материалами уголовного дела, после чего его планируется направить в суд.</p><p>Ранее стало известно о <a style="color: green" href="https://tengrinews.kz/kazakhstan_news/zaversheno-novoe-rassledovanie-otnoshenii-gulmiryi-530617/">завершении нового расследования в отношении Гульмиры Сатыбалды.</a>.</p><p><a style="color: green" href="https://whatsapp.com/channel/0029VaC8d1M3AzNVm4DlYk2H">Наши новости теперь в WhatsApp! Подписывайтесь на наш канал в самом популярном мессенджере</a></p>',
                'image' => 'https://tengrinews.kz/userdata/news/2024/news_531855/thumb_b/photo_468410.png.webp',
                'author' => [
                    'name' => 'Аружан Дарибай',
                    'image' => 'https://tengrinews.kz/userdata/user/5c881e7da195d8348345ed59494e1ebd.jpeg',
                    'job_title' => 'Корреспондент'
                ],
                'views' => 300,
                'comments' => [
                    [
                        'name' => 'Бигайша',
                        'comment' => 'айтараз сөз бітті...',
                        'published_at' => '2024-04-10 14:26:00'
                    ],
                    [
                        'name' => 'Commenter 6',
                        'comment' => 'Comment 6',
                        'published_at' => '2024-04-09 15:49:09'
                    ],
                ],
                'tags' => ['Антикоррупционная служба', 'Антикор', 'Гульмира сатыбалды', 'Кайрат Сатыбалдыулы', 'Коррупция', 'Расследование'],
                'published_at' => '2024-04-10 14:08:00',
            ],
            [
                'title' => 'Более 8 тысяч животных погибло из-за паводков: как получить компенсацию',
                'content' => '<img src="https://tengrinews.kz/userdata/news/2024/news_531847/thumb_b/photo_468403.jpeg.webp" alt="" class="news-image"><p class="news-content" style="border-bottom: 1px solid gray;">В Казахстане из-за паводков погибло более восьми тысяч животных, передает <a style="color: green" href='tengrinews.kz'>Tengrinews.kz</a>.</p><p>Как рассказал официальный представитель Министерства сельского хозяйства Олжас Тлебалдин на брифинге в СЦК, совместными усилиями акиматов регионов и Министерства сельского хозяйства удалось отогнать на безопасное расстояние более 88 тысяч сельхозживотных. По оперативным данным, количество павших животных составляет 8,1 тысячи голов.</p><div style="padding: 16px 36px 24px; background: #f5f6fe; border-left: 4px solid #4459f2; border-radius: 0 5px 5px 0;">"На сегодняшний день утилизировано 4,1 тысячи голов павших животных. По поручению премьер-министра эта работа будет продолжаться в усиленном режиме. Разработан и утвержден Республиканским штабом по координации противопаводковых мероприятий и ликвидации последствий паводкового периода алгоритм по выплате компенсаций владельцам павшего скота. Для решения вопросов установки владельцев, определения ущерба и решения других вопросов в регионах местными исполнительными органами созданы комиссии по определению ущерба", - сказал Олжас Тлебалдин.</div><p>Факт владения сельхозживотными будет подтверждаться актами комиссий. Размер компенсации владельцам будет определен на основе данных о рыночной стоимости животных в разрезе видов и половозрастных групп, публикуемых Бюро национальной статистики.</p><p>Ранее в МЧС предоставили <a style="color: green" href="https://tengrinews.kz/kazakhstan_news/pavodki-v-kazahstane-v-mchs-rasskazali-o-situatsii-531813/">оперативную информацию о паводковой ситуации в Казахстане</a>.</p><p><a style="color: green" href="https://whatsapp.com/channel/0029VaC8d1M3AzNVm4DlYk2H">Наши новости теперь в WhatsApp! Подписывайтесь на наш канал в самом популярном мессенджере</a></p>',
                'image' => 'https://tengrinews.kz/userdata/news/2024/news_531847/thumb_b/photo_468403.jpeg.webp',
                'author' => [
                    'name' => 'Author 4',
                    'image' => 'author4.jpg',
                    'job_title' => 'Job Title 4'
                ],
                'views' => 400,
                'comments' => [
                    [
                        'name' => 'Маке',
                        'comment' => 'Енди онын бари сасиды(( Жут келди деген осы гой, кошмар в мирное время, на ровном месте…',
                        'published_at' => '2024-04-10 13:26:00'
                    ],
                    [
                        'name' => 'Тали',
                        'comment' => 'Теперь надо следить, чтобы в колбасных изделиях не оказалось',
                        'published_at' => '2024-04-10 13:56:00'
                    ],
                ],
                'tags' => ['Паводки', 'Животные', 'Казахстан'],
                'published_at' => '2024-04-10 13:20:00',
            ],
            [
                'title' => 'Высокопоставленный чиновник Минсельхоза попался на взятках - Антикор',
                'content' => '<img src="https://tengrinews.kz/userdata/news/2024/news_531834/thumb_b/photo_468396.jpeg.webp" alt="" class="news-image"><p class="news-content" style="border-bottom: 1px solid gray;">Антикоррупционная служба проводит досудебное расследование в отношении председателя Комитета рыбного хозяйства Министерства сельского хозяйства и других лиц. Высокопоставленного чиновника подозревают в неоднократном получении взяток, передает корреспондент <a style="color: green" href='tengrinews.kz'>Tengrinews.kz</a>.</p><p>Как сообщил официальный представитель Антикора Данияр Бигайдаров, в отношении подозреваемого санкционирована мера пресечения в виде домашнего ареста, на него надели электронный браслет.</p><div style="padding: 16px 36px 24px; background: #f5f6fe; border-left: 4px solid #4459f2; border-radius: 0 5px 5px 0;">"Они подозреваются в получении взяток на системной основе от представителей малого и среднего бизнеса в период 2021-2024 годов за общее покровительство. Он (председатель комитета - прим.) полностью признал вину, в настоящее время содействует следствию", - рассказал Бигайдаров.</div><p>Читайте также: <a style="color: green" href="https://tengrinews.kz/crime/vzyatki-biznesmenov-sotrudnikam-kaztemirtransa-vyinesli-529754/">Взятки от бизнесменов: сотрудникам "Казтемиртранса" вынесли приговор</a>.</p><p><a style="color: green" href="https://whatsapp.com/channel/0029VaC8d1M3AzNVm4DlYk2H">Наши новости теперь в WhatsApp! Подписывайтесь на наш канал в самом популярном мессенджере</a></p>',
                'image' => 'https://tengrinews.kz/userdata/news/2024/news_531834/thumb_b/photo_468396.jpeg.webp',
                'author' => [
                    'name' => 'Аружан Дарибай',
                    'image' => 'https://tengrinews.kz/userdata/user/5c881e7da195d8348345ed59494e1ebd.jpeg',
                    'job_title' => 'Корреспондент'
                ],
                'views' => 500,
                'comments' => [
                    [
                        'name' => 'Давид',
                        'comment' => 'сколько ж у нас чиновников ???? каждый день ловят через одного даже садят а они все не заканчиваются',
                        'published_at' => '2024-04-10 12:49:00'
                    ],
                    [
                        'name' => 'Мт.',
                        'comment' => '"Активно сотрудничает со следствием", это значит- ему ничего не будет. Тем более находится под домашним арестом. Без злого умысла делал он.',
                        'published_at' => '2024-04-09 12:56:00'
                    ],
                ],
                'tags' => ['Антикор', 'Антикоррупционная служба', 'Рыба', 'Коррупция', 'Взятка', 'Взятки'],
                'published_at' => '2024-04-10 12:42:00',
            ],
        ];

        foreach ($data as $news) {
            News::updateOrCreate(
                [
                    'title' => $news['title'],
                ],
                $news
            );
        }

    }
}
