<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('books')->delete();
        
        \DB::table('books')->insert(array (
            0 => 
            array (
                'created_at' => '2022-06-06 00:03:20',
                'description' => 'An insightful discussion and practical guide on how to put customers back into the center of your business model

With so many digital experiences touching our lives-and businesses-it\'s understandable to feel like you\'re drowning in data. There\'s a dashboard or chart for just about everything, but data alone can\'t help you understand and empathize with your customers. No amount of it will take you inside their heads, help you see the world through their eyes, or let you experience what it\'s really like to be your customer. Only human insight from real people can do that.

User Tested gives both individual contributors and executives an approachable, pragmatic playbook for stepping beyond standard business metrics and infusing real human insight into every business decision, design, and experience.',
                'id' => 4,
                'image' => 'uploads/book/book-how_the_world_s_top_companies.jpg',
                'price' => '98.60',
                'status_id' => 4,
                'title' => 'USER TESTED : HOW THE WORLD\'S TOP COMPANIES USE HUMAN INSIGHT TO CREATE GREAT EXPERIENCES',
                'updated_at' => '2022-06-06 00:03:20',
                'writer' => 'Janelle Estes & Andy MacMillan',
            ),
            1 => 
            array (
                'created_at' => '2022-06-06 00:13:10',
                'description' => 'A primer on the currency alternative that\'s changing the world

Bitcoin can be a bit puzzling to the uninitiated. Ledger? Blockchain? Mining? These cryptocurrency concepts aren\'t going away, and there are tremendous opportunities for those with some know-how to get onboard with the crypto culture. Bitcoin For Dummies helps you get un-puzzled, learn the Bitcoin basics, and discover the possibilities in the new world of digital currencies.

With this 100% new edition, you can step into the fascinating culture of cryptocurrency and learn how to use Bitcoin as a currency or an investment vehicle. A little bit of knowledge will go a long way, and you\'ll be ready to sail smoothly ahead as the crypto tsunami advances.',
                'id' => 5,
                'image' => 'uploads/book/book-9781119602132.jpg',
                'price' => '83.80',
                'status_id' => 4,
                'title' => 'BITCOIN FOR DUMMIES, 2ED',
                'updated_at' => '2022-06-06 00:13:10',
                'writer' => 'Peter Kent',
            ),
            2 => 
            array (
                'created_at' => '2022-06-06 00:15:11',
                'description' => 'A pragmatic framework for nonprofit digital transformation that embraces the human-centered nature of your organization

In The Smart Nonprofit: Staying Human-Centered in an Automated World, a team of dedicated nonprofit thought leaders delivers a discussion of the information and tools nonprofit staffers and board members need to effectively use artificial intelligence without alienating the human stakeholders and donors on whom they rely.

Each chapter of the book offers a narrative discussion of how AI affects a particular functional area in an organization that includes case studies and practical tips for the ethical use of AI. You\'ll discover explorations of:',
                'id' => 6,
                'image' => 'uploads/book/book-9781119818120.jpg',
                'price' => '92.20',
                'status_id' => 4,
                'title' => 'THE SMART NONPROFIT : STAYING HUMAN-CENTERED IN AN AUTOMATED WORLD',
                'updated_at' => '2022-06-06 00:15:11',
                'writer' => 'Beth Kanter',
            ),
            3 => 
            array (
                'created_at' => '2022-06-06 00:17:19',
                'description' => 'An actionable blueprint for transformational business journeys

Leading transformation in teams, businesses, and organizations is complex, and leaders are expected to know how to do it. This book provides the clear thinking required to navigate this challenge.

In Navigate the Swirl: 7 Crucial Conversations for Business Transformation renowned growth and strategy leader Richard Hawkes delivers a simple and powerful framework that any team can apply to overcome the most common leadership challenges to growing and scaling companies, known as "The Swirl." In this straightforward book, he draws on decades of experience guiding teams to implement strategic change at companies like Edward Jones, GENEWIZ, Hitachi, Pfizer, Johnson & Johnson, Mars, and Chicos. In this book you will learn:',
                'id' => 7,
                'image' => 'uploads/book/book-9781119868798.jpg',
                'price' => '108.90',
                'status_id' => 4,
                'title' => 'NAVIGATE THE SWIRL : 7 CRUCIAL CONVERSATIONS FOR BUSINESS TRANSFORMATION',
                'updated_at' => '2022-06-06 00:17:19',
                'writer' => 'Richard Hawkes',
            ),
            4 => 
            array (
                'created_at' => '2022-06-06 00:18:59',
                'description' => 'A new ride is opening at Luna Park! Every mouse in New Mouse City has come for the grand opening. But the rides keep breaking down, and everything is going wrong. Can Geronimo and his friends figure out who is sabotaging the opening of the Train of Terror?',
                'id' => 8,
                'image' => 'uploads/book/book-9781338729399.jpg',
                'price' => '42.90',
                'status_id' => 4,
                'title' => 'GERONIMO STILTON GRAPHIC NOVEL #4: LAST RIDE AT LUNA PARK',
                'updated_at' => '2022-06-06 00:18:59',
                'writer' => 'Geronimo Stilton',
            ),
            5 => 
            array (
                'created_at' => '2022-06-06 00:20:10',
                'description' => 'A young girl, saved by the demon beside her. A demon, killing his time with the young girl beside him. In a corner of the late 19th century British Empire, a chance meeting between two people set their story in motion, as they seek to find a place where they belong. And herein begins, a dark night story between a demon and a girl, drawn together by their shared loneliness…',
                'id' => 9,
                'image' => 'uploads/book/book-9789814999625.jpg',
                'price' => '35.70',
                'status_id' => 4,
                'title' => 'THE TALES OF THE OUTCASTS #1',
                'updated_at' => '2022-06-06 00:20:10',
                'writer' => 'Makoto Hoshino',
            ),
            6 => 
            array (
                'created_at' => '2022-06-06 00:21:16',
                'description' => 'The Bad Guys are coming to a screen near you!

The first laugh-out-loud Bad Guys episode by award-winning creator Aaron Blabey, now in full colour.
They sound like the Bad Guys, they look like the Bad Guys … and they even smell like the Bad Guys. But Mr Wolf, Mr Piranha, Mr Snake and Mr Shark are about to change all of that – whether you want them to or not!

Mr Wolf has a daring plan for the Bad Guys’ first good mission.
The gang are going to break 200 dogs out of the Maximum Security City Dog Pound. Will Operation Dog Pound go smoothly? Will the Bad Guys become the Good Guys? And will Mr Snake please stop swallowing Mr Piranha?',
                'id' => 10,
                'image' => 'uploads/book/book-9789813372306.jpg',
                'price' => '34.90',
                'status_id' => 4,
            'title' => 'THE BAD GUYS 01: THE BAD GUYS (COLOUR EDITION)',
                'updated_at' => '2022-06-06 00:21:16',
                'writer' => 'Aaron Blabey',
            ),
            7 => 
            array (
                'created_at' => '2022-06-06 00:22:09',
                'description' => 'Just when you thought it was safe to flush, the Turbo Toilet 2000 strikes back! The carnivorous commode known for devouring everything in its path has built up a real appetite... for REVENGE! Luckily, the fate of humanity is once again in the hands of George and Harold and their annoying nemesis Melvin Sneedly. Will Wedgie Power prevail? Or will the amazing Captain Underpants be flushed away forever?',
                'id' => 11,
                'image' => 'uploads/book/book-9789814918008.jpg',
                'price' => '37.76',
                'status_id' => 4,
            'title' => 'CAPTAIN UNDERPANTS #11: THE TYRANNICAL RETALIATION OF THE TURBO TOILET 2000 (COLOR EDITION)',
                'updated_at' => '2022-06-06 00:22:09',
                'writer' => 'Dav Pilkey',
            ),
            8 => 
            array (
                'created_at' => '2022-06-06 00:23:23',
                'description' => 'Being with our loved ones has never felt so important, and great food is the perfect excuse to get together. Each chapter features a meal, from seasonal feasts to curry nights, with a simple, achievable menu that can be mostly prepped ahead. Jamie\'s aim - whether you\'re following the full meal or choosing just one of over 120 individual recipes - is to minimise your time in the kitchen so you can maximise the time you spend with your guests. Jamie\'s Together also helps to take the stress out of cooking by arming you with tips, tricks and hacks to stay organised and get ahead of the game. Inspirational but practical, Together is about comfort, celebration, creating new memories and, above all, sharing fantastic food. This is about memorable meals, made easy. Let\'s tuck in - together!',
                'id' => 12,
                'image' => 'uploads/book/book-9780241431177.jpg',
                'price' => '150.95',
                'status_id' => 4,
                'title' => 'TOGETHER',
                'updated_at' => '2022-06-06 00:23:23',
                'writer' => 'Jamie Oliver',
            ),
            9 => 
            array (
                'created_at' => '2022-06-06 00:24:18',
                'description' => '7 Ways to reinvent your favourite ingredients with more than 120 new, exciting and tasty recipes. Jamie\'s looked at the top ingredients we buy week in, week out. We\'re talking about those meal staples we pick up without thinking - chicken breasts, salmon fillets, mince, eggs, potatoes, broccoli, mushrooms, to name but a few. We\'re all busy, but that shouldn\'t stop us from having a tasty, nutritious meal after a long day at work or looking after the kids. So, rather than trying to change what we buy, Jamie wants to give everyone new inspiration for their favourite supermarket ingredients. Jamie will share 7 achievable, exciting and tasty ways to cook 18 of our favourite ingredients, and each recipe will include a minimal amount of ingredients. Across the book, at least 70% of the recipes will be everyday options from both an ease and nutritional point of view, meaning you\'re covered for every day of the week. With everything from fakeaways and traybakes to family and freezer favourites, you\'ll find bags of inspiration to help you mix things up in the kitchen. Step up, 7 Ways, the most reader-focused cookbook Jamie has ever written.',
                'id' => 13,
                'image' => 'uploads/book/book-9780241431153.jpg',
                'price' => '150.95',
                'status_id' => 4,
                'title' => '7 WAYS: EASY IDEAS FOR EVERY DAY OF THE WEEK',
                'updated_at' => '2022-06-06 00:24:18',
                'writer' => 'Jamie Oliver',
            ),
            10 => 
            array (
                'created_at' => '2022-06-06 00:25:19',
                'description' => 'Take a culinary voyage through the vibrant flavours of Malaysia with MasterChef UK contestant, Zaleha Kadir Olpin, as she shares her favourite family recipes in this cookbook. Malaysian-born Zaleha pays tribute to dishes she grew up with, including laksam, a rolled rice noodle dish unique to the East Coast of Malaysia; nasi lemak, one of Malaysia’s most iconic dishes; as well as chicken rendang, the controversial dish she prepared on the show.

Mostly handed down from her mother and grandmother, Zaleha’s recipes maintain traditional methods of cooking, but are suitable for use in the modern kitchen so you can experience Malaysian cuisine in all its authenticity. She also shares lessons she learnt growing up in a culinary family, with insights into the importance of food in Malaysian culture. Written from the heart, this book will appeal to anyone looking to expand their flavour repertoire or just wanting to dip their toes into the delightful world of Malaysian cooking.',
                'id' => 14,
                'image' => 'uploads/book/book-9789814841511.jpg',
                'price' => '99.90',
                'status_id' => 4,
                'title' => 'MY RENDANG ISN\'T CRISPY & OTHER FAVOURITE MALAYSIAN DISHES',
                'updated_at' => '2022-06-06 00:25:19',
                'writer' => 'Zaleha Olpin',
            ),
            11 => 
            array (
                'created_at' => '2022-06-06 00:26:36',
                'description' => 'Indian cuisine owes part of its unique character to the people who dropped by the lush, exotic subcontinent over the centuries, including the Portugese, the British and the Moghuls. Born and raised in Goa, cooking instructor Sapna Anand ended up going places, much like the traders and colonists that left their mark on her homeland. Her travels and experiences changed the way she saw and cooked the food she grew up with and encountered on her journeys. Sapna\'s New Indian Kitchen features a variety of dishes that are primarily from the Indian regions of Kerala, Goa, and northern India. Each recipe is a milestone in her life\'s journey, vividly coloured and flavoured by the dishes, sweets and snacks made by family, friends, and neighbours. Alongside such traditional and familiar fare as chicken biryani, raita and kebabs are edamame upma, achari chicken tart and keema lasagna, among others - examples of how she uses the cooking techniques she picked up to breathe new life into the time-tested flavours of her homeland.',
                'id' => 15,
                'image' => 'uploads/book/book-9789674154370.jpg',
                'price' => '39.90',
                'status_id' => 4,
            'title' => 'NEW INDIAN KITCHEN (REVISED)',
                'updated_at' => '2022-06-06 00:26:36',
                'writer' => 'Sapna Anand',
            ),
            12 => 
            array (
                'created_at' => '2022-06-06 00:27:57',
                'description' => 'Digital Signal Processing is a comprehensive textbook designed for undergraduate and post-graduate students of enginee01ring for a course on digital signal processing. Following the book\'s step-by-step approach, students can quickly master the fundamental concepts and applications of DSP. Each topic is explained lucidly through illustrations and solved examples. Divided into 17 Chapters, this text presents the introductory topics such as discrete-time signals and systems, sampling and quantization, convolution, discrete-time Fourier series, discrete-time Fourier transform, and z-transform in a rigorous fashion. Further, topics such as DFT, FFT, filter concepts, filter structures, FIR filter design and IIR filter design are dealt in detail. It also covers the advanced topics such as finite word length effects, multirate DSP, optimum linear filters, and spectrum estimation techniques. The chapters are packed with numerous illustrations, solved examples, multiple choice questions, numerical exercises and MATLAB programs. Additional solved examples at the end of the book will provide some more practice to students.',
                'id' => 16,
                'image' => 'uploads/book/book-9780198081937.jpg',
                'price' => '75.90',
                'status_id' => 4,
                'title' => 'DIGITAL SIGNAL PROCESSING',
                'updated_at' => '2022-06-06 00:27:57',
                'writer' => 'Tarun Kumar Rawat',
            ),
            13 => 
            array (
                'created_at' => '2022-06-06 00:28:37',
            'description' => 'Based on the latest version of MATLAB (2010a), the book begins with an introduction to MATLAB programming describing the MATLAB toolbar and SIMULINK toolboxes. Further the various MATLAB operators, functions, and graphics are discussed in detail. Applications of SIMULINK and MATLAB in electrical engineering, electrical machines & power system projects, simulation of rectifiers, inverters, choppers, and cycloconverters is presented in detail. Applications in computer science, communication and mechanical engineering is also discussed. Finally a chapter on recent developments in this area covers topics such as the matrix converter, modulation techniques, and PWM rectifiers. The book provides numerous MATLAB programs tested and run for various projects for different disciplines in engineering. The programs, complete with their outputs, through various screen shots of the MATLAB windows help readers familiarise themselves with the software.',
                'id' => 17,
                'image' => 'uploads/book/book-9780198072447.jpg',
                'price' => '58.90',
                'status_id' => 4,
                'title' => 'MATLAB AND SIMULINK FOR ENGINEERS',
                'updated_at' => '2022-06-06 00:28:37',
                'writer' => 'Agam Kumar Tyagi',
            ),
            14 => 
            array (
                'created_at' => '2022-06-06 00:29:37',
                'description' => 'Learn to write practical, reusable code with the straightforward tutorials and tips in the newest edition of this For Dummies bestseller

Do you speak Java? No, we\'re not talking about your morning cup \'o joe. We mean the world\'s most popular programming language that runs on almost any computer!

If you\'re looking to get started-or up your game-with Java, then Java For Dummies is the guide you need. In this book, you\'ll:



Take control of your program flow
Program with classes, objects, and methods
Use Java\'s functional programming features
Explore Java 17, the latest long-term support release

This up-to-date handbook covers the latest developments in Java, including the new \'switch\' statement syntax. So, if you\'re ready to dive into one of the most practical (and coolest!) programming languages around, it\'s time you picked up Java For Dummies',
                'id' => 18,
                'image' => 'uploads/book/book-9781119861645.jpg',
                'price' => '100.60',
                'status_id' => 4,
                'title' => 'JAVA FOR DUMMIES, 8ED',
                'updated_at' => '2022-06-06 00:29:37',
                'writer' => 'Barry Burd',
            ),
            15 => 
            array (
                'created_at' => '2022-06-06 00:30:21',
                'description' => 'Understand the basic tools and operations of Visual Basic for Applications
Create custom spreadsheet functions that make life easier for you and the people maintaining your spreadsheets
Deal with errors and exceptions and eliminate the bugs in your code

Perfect for anyone who\'s never even heard of Excel VBA, Excel VBA Programming For Dummies is also a fantastic resource for intermediate and advanced Excel users looking for a heads-up on the latest features and newest functionality of this simple yet powerful scripting language.',
                'id' => 19,
                'image' => 'uploads/book/book-9781119843078.jpg',
                'price' => '134.20',
                'status_id' => 4,
                'title' => 'EXCEL VBA PROGRAMMING FOR DUMMIES, 6ED',
                'updated_at' => '2022-06-06 00:30:21',
                'writer' => 'Dick Kusleika',
            ),
            16 => 
            array (
                'created_at' => '2022-06-06 00:31:27',
                'description' => 'Learn how to strengthen your immune system, for life. Our immune system is our body\'s fortress - without it, we would be vulnerable to all sorts of infections and diseases. Yet misinformation about how to boost the immune system is everywhere. In Immune, Dr Servaas Binge breaks through those myths, translating the latest scientific findings on immunity into clear advice with which you can optimise your lifestyle. Using no-nonsense language with a touch of humour and lots of creative thinking, Binge takes us on a fascinating journey through our immune system. He explains how we become ill and how best to protect against it, providing superb guidance for the most important thing you can do - stay healthy.',
                'id' => 20,
                'image' => 'uploads/book/book-9781913348977.jpg',
                'price' => '86.90',
                'status_id' => 4,
                'title' => 'IMMUNE',
                'updated_at' => '2022-06-06 00:31:27',
                'writer' => 'Dr Servaas Bingé',
            ),
            17 => 
            array (
                'created_at' => '2022-06-06 00:32:17',
                'description' => 'We need to encourage men to talk about their feelings. This book uses the Lions Barber Collective\'s established training approach - created with the help of psychiatrists and mental health professionals - to gives you the tools you need to play a supportive role and listen effectively. The shocking statistic that suicide is the biggest killer of men aged 29-40 in the UK has made us all wake up to the fact we need to encourage men to talk about their feelings. For some, the stigma and taboo around mental health make it a difficult subject to speak about or \'admit\' to due to shame of being seen to be weak, especially in men. What can you do about it? What steps can you take, that could make a real difference to the men around you - and point them toward the right help? Tom Chapman is the founder of mental health charity the Lions Barber Collective, set up to raise awareness for the prevention of suicide. This book uses the LBC\'s established training approach, to gives you the tools you need to play a supportive role and listen effectively.',
                'id' => 21,
                'image' => 'uploads/book/book-9781789562927.jpg',
                'price' => '72.90',
                'status_id' => 4,
                'title' => 'HOW TO LISTEN SO MEN WILL TALK',
                'updated_at' => '2022-06-06 00:32:17',
                'writer' => 'Tom Chapman',
            ),
            18 => 
            array (
                'created_at' => '2022-06-06 00:33:10',
                'description' => 'Get the best results from your HIIT sessions by understanding the muscle action needed to perfect each exercise. Explore the physiology of all the essential HIIT exercises, spins, and sprints, to master each movement with confidence and control. Recent scientific research shows that HIIT is the most efficient form of exercise for raising fitness levels, increasing cardiopulmonary health, and losing weight. Science of HIIT reveals the facts, with annotated illustrations that show the mechanics, the angles, the key muscle and joint actions working below the surface of each exercise, safe alignment, and much more. Look no further to achieve technical excellence in your practice and develop your own program of varied workouts, to optimize the benefits of HIIT to your body and mind.',
                'id' => 22,
                'image' => 'uploads/book/book-9780744051285.jpg',
                'price' => '93.95',
                'status_id' => 4,
                'title' => 'SCIENCE OF HIIT',
                'updated_at' => '2022-06-06 00:33:10',
                'writer' => 'Ingrid S. Clay',
            ),
            19 => 
            array (
                'created_at' => '2022-06-06 00:34:17',
                'description' => 'An innovative yoga manual for teachers, trainers, and advanced students—craft a safer, more effective yoga practice informed by anatomy, physiology, and biomechanics. Supplemented with more than 100 illustrations and photos, The Yoga Engineer’s Manual makes yoga anatomy simple, clear, and accessible. With tips, tools, and practical advice for on-the-mat applications, this essential resource is written for yoga teachers and practitioners of all traditions. It offers a step-by-step, layer-by-layer examination of the connection between our physical and energetic bodies, their activation through finding one’s best personal alignment, and methods for utilizing asana practice to explore the deeper nature of the Self. To experience the full benefits of yoga, author and yoga teacher trainer Richelle Ricard explains that we need to start with understanding the body: its mechanics, physiology, and our own individual strengths and limitations. Too often, outdated yoga modalities and rote memorization fail trainers and students with a one-size-fits-all approach. The Yoga Engineer’s Manual introduces the functional anatomy, postures, asanas, and yoga-classroom skills that teachers need to confidently lead safe
and effective classes that work for all students. Ricard also includes exercises, study guides, and supplemental materials for an interactive and continuous learning experience',
                'id' => 23,
                'image' => 'uploads/book/book-9781623176334.jpg',
                'price' => '140.95',
                'status_id' => 4,
                'title' => 'THE YOGA ENGINEER\'S MANUAL',
                'updated_at' => '2022-06-06 00:34:17',
                'writer' => 'Richelle Ricard',
            ),
            20 => 
            array (
                'created_at' => '2022-06-06 00:35:53',
                'description' => 'A blueprint for how parents can stop worrying about their children’s future and start helping them prepare for it, from the cofounder and CEO of one of America’s most innovative public-school networks In 2003, Diane Tavenner cofounded the first school in what would become Summit Public Schools, which has since won national recognition for its exceptional outcomes: 99 percent of students are accepted to a four-year college, and its students graduate college at twice the national average. But in a radical departure from the environments created by the college admissions arms race, Summit students aren’t focused on competing with their classmates for rankings or test scores. Instead, students spend their days solving real-world problems and developing the skills of self-direction, collaboration, and reflection, all of which prepare them to succeed in college, thrive in today’s workplace, and lead a secure and fulfilled life. Through personal stories and hard-earned lessons from Summit’s exceptional team of educators and diverse students, Tavenner shares the learning philosophies underlying the Summit model and offers a blueprint for any parent who wants to stop worrying about their children’s future—and start helping them prepare for it. At a time when many students are struggling to regain educational and developmental ground lost to the disruptions of the pandemic, Prepared is more urgent and necessary than ever.',
                'id' => 24,
                'image' => 'uploads/book/book-9781984826541.jpg',
                'price' => '84.90',
                'status_id' => 4,
                'title' => 'PREPARED: WHAT KIDS NEED FOR A FULFILLED LIFE',
                'updated_at' => '2022-06-06 00:35:53',
                'writer' => 'Diane Tavenner',
            ),
            21 => 
            array (
                'created_at' => '2022-06-06 00:36:49',
                'description' => 'We think we have to push our kids to do more, achieve more, BE more. But we\'re modeling the wrong traits—like rule-following and caution—and research shows it\'s NOT working. This kind of "Striver" mindset isn\'t just making kids unhappier, says Dr. Michele Borba—it\'s actually the opposite of what it takes to thrive in the uncertain world ahead. Thrivers are different—they flourish in our fast-paced, digital-driven, often uncertain world. Why? Through her in-depth research, Dr. Borba discovered that the difference comes down not to grades or test scores, but to seven character traits that set Thrivers apart—confidence, empathy, self-control, integrity, curiosity, perseverance, and optimism. The even better news—these traits can be taught to children at any age—in fact, parents and educations must do so. In Thrivers, Dr. Borba offers practical, actionable ways to develop these traits in children from preschool through high school, showing how to teach kids how to cope today so they can thrive tomorrow.',
                'id' => 25,
                'image' => 'uploads/book/book-9780593085295.jpg',
                'price' => '84.95',
                'status_id' => 4,
                'title' => 'THRIVERS',
                'updated_at' => '2022-06-06 00:36:49',
                'writer' => 'Michele Borba',
            ),
            22 => 
            array (
                'created_at' => '2022-06-06 00:37:42',
                'description' => 'The authoritative guide to feeding babies and toddlers “responsively”—the no-fuss method that follows your child’s cues and sets the stage for healthy eating! When should I start my baby on solids? Should I offer purees— or try baby-led weaning? What if my toddler rejects new foods? Feeding therapist Melanie Potock has answers to all in Responsive Feeding. The secret? Tune in to your child’s cues, and you’ll know what’s right for her. With Responsive Feeding, you won’t have to choose between the spoon-led and baby-led approach or cajole your baby to “eat up” when he’s fussy. Instead, every meal becomes a fun learning experience that will engage each of your baby’s senses—and strengthen your bond. • Gauge your baby’s readiness for solid foods.
• Introduce bold flavors to set the stage for a lifetime of adventurous eating.
• Navigate tricky transitions and picky eating—peacefully.
• Watch your baby become a confident, independent eater! Potock guides parents along every step of the way, from “to bib or not to bib?” and how to wrangle a “food thrower” to the merits of a “nibble tray” for hangry toddlers and considerations for special needs. Raising a mindful, healthy eater is just a bite away!',
                'id' => 26,
                'image' => 'uploads/book/book-9781615198368.jpg',
                'price' => '79.95',
                'status_id' => 4,
                'title' => 'RESPONSIVE FEEDING',
                'updated_at' => '2022-06-06 00:37:42',
                'writer' => 'Melanie Potock',
            ),
            23 => 
            array (
                'created_at' => '2022-06-06 00:38:36',
                'description' => 'Author and newspaper columnist Erma Bombeck said, “When my kids become wild and unruly, I use a nice, safe playpen. When they’re finished, I climb out.”

All parents would have gone through their playpen phase, whether their little darlings are angels, devils or something in between.

Lydia Teh sure did. She has survived the harrowing years of raising four children without a maid and lives to write the tale.',
                'id' => 27,
                'image' => 'uploads/book/book-9789674155179.jpg',
                'price' => '32.90',
                'status_id' => 4,
                'title' => 'COW SENSE FOR PARENTS',
                'updated_at' => '2022-06-06 00:38:36',
                'writer' => 'Lydia The',
            ),
            24 => 
            array (
                'created_at' => '2022-06-06 00:39:42',
                'description' => 'Your personal roadmap to becoming fluent in financial reports At first glance, the data in financial reports might seem confusing or overwhelming. But, with the right guide at your side, you can learn to translate even the thickest and most complex financial reports into plain English.

In Reading Financial Reports For Dummies, you\'ll move step-by-step through each phase of interpreting and understanding the data in a financial report, learning the key accounting and business fundamentals as you go. The book includes clear explanations of basic and advanced topics in finance, from the difference between private and public companies to cash flow analysis.',
                'id' => 28,
                'image' => 'uploads/book/book-9781119871361.jpg',
                'price' => '104.80',
                'status_id' => 4,
                'title' => 'READING FINANCIAL REPORTS FD 4ED',
                'updated_at' => '2022-06-06 00:39:42',
                'writer' => 'Lita Epstein',
            ),
            25 => 
            array (
                'created_at' => '2022-06-06 00:40:59',
                'description' => 'Trade currencies like a seasoned pro with this friendly, fact-filled guide to the forex market

Over $6 trillion changes hands in the foreign exchange market every day. You can jump straight into the action with expert guidance from the hands-on Currency Trading For Dummies. You\'ll learn how the foreign exchange market works, what factors influence currency values, and how to understand financial data. When you\'re ready to create your own game plan for trading currencies, you\'ll be able to build it around your investment objectives, experience level, and risk appetite. You\'ll also find details on the latest trends in currency trading, including currency ETFs, cryptocurrencies, and currency options.

From essential newcomer knowledge to advanced positioning advice, Currency Trading For Dummies offers straightforward instruction that helps you:',
                'id' => 29,
                'image' => 'uploads/book/book-9781119824725.jpg',
                'price' => '96.40',
                'status_id' => 4,
                'title' => 'CURRENCY TRADING FOR 4ED',
                'updated_at' => '2022-06-06 00:40:59',
                'writer' => 'MLADJENOVIC',
            ),
            26 => 
            array (
                'created_at' => '2022-06-06 00:42:04',
                'description' => 'THE ESSAYS OF Warren Buffett

A gold mine of investing advice from the most successful investor in history

THE ESSAYS OF
Warren Buffett
SIXTH EDITION

When Warren Buffett speaks, people worldwide listen. And with good reason: Buffett is the most successful investor-manager in history. He has set world records for achieving both high personal net worth, exceeding US$80 billion, and high corporate value for his holding company, Berkshire Hathaway, approaching US$600 billion. Time magazine lists Buffett as among the most influential people in the world—and he is.

According to Buffett, the best book collating his philosophy is The Essays of Warren Buffett by Lawrence A. Cunningham, the internationally renowned scholar and expert on Buffett and Berkshire. Through many updated editions dating to 1997, The Essays is the definitive account of Buffett’s approach to investing and management, consisting of a carefully curated and thematically organized compendium of Buffett’s original annual letters, along with Cunningham’s priceless commentaries.',
                'id' => 30,
                'image' => 'uploads/book/book-9781119803270.jpg',
                'price' => '96.75',
                'status_id' => 4,
                'title' => 'THE ESSAYS OF WARREN BUFFETT : LESSONS FOR INVESTORS AND MANAGERS',
                'updated_at' => '2022-06-06 00:42:04',
                'writer' => 'Lawrence Cunningham',
            ),
            27 => 
            array (
                'created_at' => '2022-06-06 00:42:49',
                'description' => 'This is not a method book. It is a thinking book.


Warren Buffett: Inside the Ultimate Money Mind explains the philosophies of self-reliance, stoicism, rationalism, and pragmatism and their contributions to making intelligent investment decisions. It also outlines the evolution of value investing, discusses how to develop a business-driven investing mindset, and describes the defining traits of successful active management. Lastly, it examines the surprising aspects of a Money Mind - sportsman, teacher, and artist.


In short, Warren Buffett: Inside the Ultimate Money Mind helps readers understand the building blocks that go into making a Money Mind so they can begin to incorporate its principles in the service to a life of value.',
                'id' => 31,
                'image' => 'uploads/book/book-9781119714590.jpg',
                'price' => '102.90',
                'status_id' => 4,
                'title' => 'WARREN BUFFETT : INSIDE THE ULTIMATE MONEY MIND',
                'updated_at' => '2022-06-06 00:42:49',
                'writer' => 'Robert G. Hagstrom',
            ),
            28 => 
            array (
                'created_at' => '2022-06-06 00:44:19',
                'description' => 'This book offers the first detailed account of the individuals and families who arrived as settlers, traders, miners, cooks and explorers and made Penang their home. Along the way they made fortunes in tin, opium, rubber and commerce, created empires, and left legacies that became the stuff of legends. This is the story of those skilled opportunists, and of the mansions they built, the architects they employed and the fortunes they made and lost. With over 200 photographs detailing their journey, these are the priceless stories of the individuals and families that ultimately made Penang.',
                'id' => 32,
                'image' => 'uploads/book/book-9789674154325.jpg',
                'price' => '40.00',
                'status_id' => 4,
                'title' => 'PENANG: AN INSIDE GUIDE TO ITS HISTORIC',
                'updated_at' => '2022-06-06 00:44:19',
                'writer' => 'Keith Hockton',
            ),
            29 => 
            array (
                'created_at' => '2022-06-06 00:47:32',
            'description' => 'Lonely Planet: The world\'s leading travel guide publisher Every country in the world, in one guidebook: Lonely Planet\'s The World. A Traveller\'s Guide to the Planet. We\'ve taken the highlights from the world\'s best guidebooks and put them together into one 900+ page whopper to create the ultimate guide to Earth. This user-friendly A-Z gives a flavour of each country in the world, including a map, travel highlights, info on where to go and how to get around, as well as some quirkier details to bring each place to life. In Lonely Planet\'s trademark bluespine format, this is the ultimate planning resource. From now on, every traveller\'s journey should start here... Nearly 1000 colour photos of must-visit highlights More than 200 colour maps The guidebook every traveller needs to ownAbout Lonely Planet: Lonely Planet is a leading travel media company and the world\'s number one travel guidebook brand, providing both inspiring and trustworthy information for every kind of traveller since 1973. Over the past four decades, we\'ve printed over 145 million guidebooks and phrasebooks for 120 languages, and grown a dedicated, passionate global community of travellers. You\'ll also find our content online, and in mobile apps, video, 14 languages, 12 international magazines, armchair and lifestyle books, ebooks, and more, enabling you to explore every day. Lonely Planet enables the curious to experience the world fully and to truly get to the heart of the places they find themselves, near or far from home.TripAdvisor Travelers\' Choice Awards 2012, 2013, 2014, 2015 and 2016 winner in Favorite Travel Guide category \'Lonely Planet guides are, quite simply, like no other.\' - New York Times \'Lonely Planet. It\'s on everyone\'s bookshelves; it\'s in every traveller\'s hands. It\'s on mobile phones. It\'s on the Internet. It\'s everywhere, and it\'s telling entire generations of people how to travel the world.\' - Fairfax Media (Australia)',
                'id' => 33,
                'image' => 'uploads/book/book-9781786576538.jpg',
                'price' => '165.00',
                'status_id' => 4,
                'title' => 'THE WORLD 2EDN',
                'updated_at' => '2022-06-06 00:47:32',
                'writer' => 'Lonely Planet',
            ),
            30 => 
            array (
                'created_at' => '2022-06-06 00:52:21',
                'description' => 'Experience the world with DK Travel. DK Travel\'s highly visual guides show you what others only tell you, with easy-to-read maps, tips and tours to inform and enrich your trip. Our travel writers report on what to see, eat, drink and do around the world, while the very best photographs and illustrations bring cities, regions and countries to life. We publish guides to more than 200 destinations around the world, from handy pocket-sized city guides to comprehensive country guides. DK is the world\'s leading illustrated reference publisher, producing beautifully designed books for adults and children in over 120 countries.',
                'id' => 34,
                'image' => 'uploads/book/book-9780241256756.jpg',
                'price' => '98.95',
                'status_id' => 4,
                'title' => 'DK EYEWITNESS TRAVEL GUIDE JAPAN',
                'updated_at' => '2022-06-06 00:52:21',
                'writer' => 'DK Travel',
            ),
            31 => 
            array (
                'created_at' => '2022-06-06 00:53:12',
                'description' => '-',
                'id' => 35,
                'image' => 'uploads/book/book-9784805314746.jpg',
                'price' => '57.00',
                'status_id' => 4,
                'title' => 'TRAVEL PACK JAPAN',
                'updated_at' => '2022-06-06 00:53:12',
                'writer' => 'Rob Goss , Judith Clancy',
            ),
            32 => 
            array (
                'created_at' => '2022-06-06 00:54:34',
                'description' => 'Do you have an existential crisis every time your alarm goes off?
Did you used to be fun/effervescent/happy/less of a bitter old b*tch - and now, let\'s just say, YOU ARE NOT?
Do you want to feel creative, inspired and, well, just ALIVE again?

Let Ash Ambirge - one of Huffington Post\'s 50 Must-Follow Women, and founder of the multi-million-dollar, multi-award-winning website and blog The Middle Finger Project - offer you a spunky new alternative to traditional concepts of \'work\'.

Growing up in a trailer park, by her twenty-first birthday Ash was a jobless, homeless orphan with only $26 to her name. But even with the odds stacked against her, she changed her fortune forever by starting her million-dollar business from the backseat of her car. Ash gave the finger to convention, blazed her own path, and finally found work she loved. And she wants to show you how she did it.

Whether you\'re an individual freelancer, self-made entrepreneur, or part of a larger corporation but not realising your dreams, Ash draws on her unconventional personal story to offer a fun, bracing, and occasionally potty-mouthed manifesto for the transformative power of radical self-reliance. Her paradigm-shifting advice will teach you how to hack your own success, create your own career options, rid yourself of imposter syndrome, and leverage your creativity to make it to the top. Told with her characteristic wit and no-bullshit attitude, this book is a must-read for anyone feeling stuck, restless, and doubtful of everything, especially themselves.',
                'id' => 36,
                'image' => 'uploads/book/book-9780753553480.jpg',
                'price' => '79.90',
                'status_id' => 4,
                'title' => 'THE MIDDLE FINGER PROJECT : TRASH YOUR IMPOSTER SYNDROME AND LIVE THE UNF*CKWITHABLE LIFE YOU DESERVE',
                'updated_at' => '2022-06-06 00:54:34',
                'writer' => 'Ash Ambirge',
            ),
            33 => 
            array (
                'created_at' => '2022-06-06 00:55:33',
                'description' => 'This beloved classic presents a principle-centered approach for solving both personal and professional problems. With penetrating insights and practical anecdotes, Stephen R. Covey reveals a step-by-step pathway for living with fairness, integrity, honesty, and human dignity--principles that give us the security to adapt to change and the wisdom and power to take advantage of the opportunities that change creates.',
                'id' => 37,
                'image' => 'uploads/book/book-06_the_7_habit_revised_edition_9781982137274.jpg',
                'price' => '56.90',
                'status_id' => 4,
                'title' => 'THE 7 HABITS OF HIGHLY EFFECTIVE PEOPLE: REVISED AND UPDATED : POWERFUL LESSONS IN PERSONAL CHANGE',
                'updated_at' => '2022-06-06 00:55:33',
                'writer' => 'Stephen R Covey & Sean Covey',
            ),
            34 => 
            array (
                'created_at' => '2022-06-06 00:56:37',
                'description' => 'Slow down, own who you really are and unleash your inner brilliance.You already have everything you need to become truly brilliant -- to lead a successful, fulfilling life -- even though it doesn\'t always feel like it. When everything exterl to us is moving so quickly, we feel out of control and exhausted; we worry about what we don\'t have or what we need more of; we seek solutions to band-aid our perceived imperfections and doubts. Crowded calendars and unending demands at home and work give us little time to look interlly -- though it is within each of us where the answers can be found. At a time when we suffer from unprecedented stress, comparison-itis and self-doubt, author Janine Garner asks us to slow down and turn our focus inward. She challenges you to take ownership of who you are and who you want to become, to rise above limitations, and unleash your brilliance within. Learn the 4 Laws of Brilliance and explore how to: - discover and own your spotlight- harness your tural energy- connect and collaborate with intent- enhance and magnify your influence.Be Brilliant helps you get out of your own way and unlock your true potential.',
                'id' => 38,
                'image' => 'uploads/book/book-9780730383765.jpg',
                'price' => '81.70',
                'status_id' => 4,
                'title' => 'BE BRILLIANT : HOW TO LEAD A LIFE OF INFLUENCE',
                'updated_at' => '2022-06-06 00:56:37',
                'writer' => 'Janine Garner',
            ),
            35 => 
            array (
                'created_at' => '2022-06-06 00:57:31',
            'description' => 'At a time when it\'s harder than ever to get and keep people\'s attention, we could all use some help. Enter Sonya Hamlin, author of the now classic How to Talk So People Listen (1988), and one of the country\'s leading communication experts. In this revised and updated edition, Sonya Hamlin, arguably America\'s leading communication expert, shows us how to successfully capture people\'s attention so that they listen, understand, and are persuaded by your message -- especially in the plugged-in, fast-paced, visually-driven atmosphere that is today\'s workplace.

Whether making a presentation to a large audience or dealing one-on-one with a client or colleague, or communicating by E-mail, Hamlin teaches us that one of the keys to making people listen is to think about and respond to what motivates them - namely, self-interest. She then provides tools to assess others\' self-interest and use it to get them to listen to your message. Hamlin also explains how to capitalize on the latest visual aids we have at our disposal today. We learn to determine what information needs or lends itself to visual presentation, and how to make visuals active, so that they serve as an extension of the speaker. In HOW TO TALK SO PEOPLE LISTEN, you\'ll also find practical information on how to understand your audience, how to encourage your listeners to trust you, and how to be yourself when you\'re on the podium.',
                'id' => 39,
                'image' => 'uploads/book/book-9780060734077.jpg',
                'price' => '52.90',
                'status_id' => 4,
                'title' => 'HOW TO TALK SO PEOPLE LISTEN: CONNECTING IN TODAY\'S WORKPLACE',
                'updated_at' => '2022-06-06 00:57:31',
                'writer' => 'Sonya Hamlin',
            ),
        ));
        
        
    }
}