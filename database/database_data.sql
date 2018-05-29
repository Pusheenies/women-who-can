/*
 * Database test data for Women Who Can.  The Blog Project
 * Run completely to add all the data once you've created the database
 */


INSERT INTO security
(security_group)
VALUES
("admin"),
("reader"),
("writer");


INSERT INTO members
(username, password, security_group)
VALUES
("Alan", "test", "writer"),
("Maria", "test2", "writer"),
("John", "test3", "writer"),
("Jenna", "test4", "writer"),
("Cath", "test5", "writer"),
("Enid", "test6", "writer"),
("Agnes", "test7", "writer"),
("Jonas", "test8", "reader"),
("Ros", "test9", "reader"),
("Rossie", "test10", "reader"),
("Lenna", "test11", "reader"),
("Stan", "test12", "reader"),
("Lee", "test13", "reader"),
("Pam", "test14", "reader"),
("Iza", "test15", "reader"),
("Anna", "anna", "admin"),
("Laura", "laura", "admin"),
("Louise", "louise", "admin"),
("Natalia", "natalia", "admin"),
("Steph", "steph", "admin");



INSERT INTO profiles
(member_id, surname, forename, profile_image, profile_description, email)
VALUES
(1, "White", "Alan", "uploads/profile_image_AlanWhite.jpg", "I am a martial arts expert and coach a championship-level Women's Karate Team", "alan.white@mailinator.com"),
(2, "Grey", "Maria", "uploads/profile_image_MariaGrey.jpg", "Beauty begins the moment you decide to be yourself", "maria.grey@mailinator.com"),
(3, "Black", "John", "uploads/profile_image_JohnBlack.jpg", "Studying Computer Science at Uni", "john.black@mailinator.com"),
(4, "Green", "Jenna", "uploads/profile_image_JennaGreen.jpg", "Jenna wants to be a mermaid when she grows up", "jenna.green@mailinator.com"),
(5, "Rose", "Catherine", "uploads/profile_image_CatherineRose.jpg","I run self-awareness groups and enjoy watching people turn into the best version of themselves ", "catherine.rose@mailinator.com"),
(6, "Brown", "Enid", "uploads/profile_image_EnidBrown.jpg", "I work at Tesco's but do graphic design for fun and I'm massively into gaming", "enid.brown@mailinator.com"),
(7, "Reed", "Agnes", "uploads/profile_image_AgnesReed.jpg", "I like to travel a lot and do quite a bit of blogging about my explorations", "agnes.reed@mailinator.com"),
(8, "Robin", "Jonas", "uploads/profile_image_JonasRobin.jpg", "I'm a surfing instructor and living the good life with my family", "jonas.robin@mailinator.com"),
(9, "Archer", "Rossalyn", "uploads/profile_image_RossalynArcher.jpg", "I like to read a lot do a bit of gigging with my saxophone", "rossalyn.archer@mailinator.com"),
(10, "Smith", "Rossalyn", "uploads/profile_image_RossalynSmith.jpg", "I work for NASA, I'm interested in STEM subjects especially physics", "rossalyn.smith@mailinator.com"),
(11, "Potter", "Lenna", "uploads/profile_image_LennaPotter.jpg", "I love cool blogs especially those that deal with issues such as gender equality", "lenna.potter@mailinator.com"),
(12, "Tailor", "Stanley", "uploads/profile_image_StanleyTailor.jpg", "Work in music management and always looking for the next star", "stanley.tailor@mailinator.com"),
(13, "Barber", "Lee", "uploads/profile_image_LeeBarber.jpg", "Training to be a paramedic - I am in awe of the capabilities of the human body", "lee.barber@mailinator.com"),
(14, "Clark", "Pamela", "uploads/profile_image_PamelaClark.jpg", "Almost completed my book about successful women but always on the look out for more inspirational ladies", "pamela.clark@mailinator.com"),
(15, "Clarke", "Iza", "uploads/profile_image_IzaClarke.jpg", "-", "iza.clarke@mailinator.com"),
(16, "Pusheenie", "Anna", "uploads/profile_image_Pusheenies.jpg", "Anna is a co-creator and admin of the Women Who Can blog", "annaeccleston79@gmail.com"),
(17, "Pusheenie", "Laura", "uploads/profile_image_Pusheenies.jpg", "Laura is is a co-creator and admin of the Women Who Can blog", "laura.collard.lc@gmail.com"),
(18, "Pusheenie", "Louise", "uploads/profile_image_Pusheenies.jpg", "Louise is is a co-creator and admin of the Women Who Can blog", "louisejean8102@gmail.com"),
(19, "Pusheenie", "Natalia", "uploads/profile_image_Pusheenies.jpg", "Natalia is is a co-creator and admin of the Women Who Can blog", "natalia.fpintos@gmail.com"),
(20, "Pusheenie", "Stephanie", "uploads/profile_image_Pusheenies.jpg", "Steph is is a co-creator and admin of the Women Who Can blog", "stephanie.e.brooks@googlemail.com");



INSERT INTO follows
(member_id, follower_id)
VALUES
(1, 2),
(1, 3),
(2, 14),
(2, 13),
(3, 4),
(3, 5),
(4, 12),
(4, 11),
(5, 2),
(5, 6),
(5, 9),
(5, 10),
(5, 4),
(5, 1),
(5, 5),
(6, 2),
(7, 10),
(7, 2),
(8, 13),
(9, 2),
(10, 5),
(11, 4),
(12, 2),
(13, 2),
(14, 3),
(16, 2),
(16, 1),
(17, 10),
(18, 11),
(19, 4),
(7, 20);



INSERT INTO categories
(category_description)
VALUES
("Laugh"),
("Innovate"),
("Learn"),
("Inspire");




INSERT INTO posts
(post_date, category_id, member_id, title, post_image,  post_content)
VALUES

("2018-05-25", 4, 19, "Girls Need Role Models", "uploads/01_Girls_Need_Role_Models.jpeg", "Girls need role models - in every part of their lives<br>
<br>
I often get asked how we are going to fix the gender inequality problem in tech. This is a huge, complicated, multi-faceted problem. That needs to be worked on from many sides to effect change. However, I do believe there is one thing we can do that might just get us over the tipping point.<br>
- Role Models.<br>
- Modeling STEM.<br>
- In every single part of girl's lives.<br>
<br>
This is what I have worked hard to do for my daughter and I think it is working. Time will tell if I am right, but there are glimmers of hope and because of this I want to share my approach, in case, just maybe, this is the thing that tips the balance.<br>
<br>
The STEM Cliff<br>
My daughter is approaching the edge of the STEM Cliff. She is starting to enter the time in a girl's life when how she is perceived by her peers becomes the most important thing in her world. This is also the time when girls begin to form their identity as women. It is important to girls at this age to feel liked and part of a group. It becomes can be more important to adopt an identity that is perceived as 'female' than to follow their own interests. Just as this social shift is happening we are also seeing girls move away from STEM subjects.<br>
The STEM cliff, [according to Microsoft research], indicates that girls move away from STEM subjects between the ages of 12 and 17. One conjecture is that computing and more widely STEM subjects are viewed as uncool, or not part of female identity and seen as a major contributing factor to them choosing to move away from STEM subjects.<br>
So how do we change this?<br>
Make computing and STEM subjects cool.<br>
Easy right?! We can just change what is cool for pre-teens and teens easily. As a 30-something mom, I am sure that should be simple.<br>
Obviously not.<br>
What can we do?<br>
We can give them as many role models as possible so that they can see a path forward. We can make it the norm to see women succeeding in STEM fields and Leadership positions. This may not make it cool, but it will take away some of the stigma. They won't be the first or only girl to go a different path. The more girls that take the STEM/Leadership path, the more accepted it will become. Over time, if enough choose those paths, it could actually become the cool thing to do.<br>
Let's get started and deluge girls with STEM Role Models!<br>
<br>
Historical Roles Models<br>
There have been many amazing women in STEM and leadership roles over time. However, in our patriarchal society, they have been ignored, and passed over; the Great Men of History are privileged over female figures.<br>
It is critical for girls to see that history includes people they identify with, that history is full of strong, smart, successful, women, who have done what they want to do.<br>
The recent success of 'Hidden Figures' telling the overlooked story of the black women who made the Moon landing possible through their work as mathematicians and pioneering computer scientists, is a great example of what it looks like when girls have the opportunity to share in the stories of historical role models. We need so much more like this movie.<br>
This is why I love the 'Good Night Stories for Rebel Girls' book series.<br>
My daughter devoured the 100 stories of different women in a single weekend. She was fascinated with the stories. She loved them so much she brought them with her to the cottage this summer. It quickly became the go to book for bedtime for not only her, but my 9 year old nephew and 7 year old niece. The three of them even read the book out loud to each other on rainy days. It is a great book to show girls and boys the amazing women of history.<br>
It is also important to note that the Rebel Girls series have been the most funded books in the history of Kickstarter! To me, this shows how starved women and girls have been of role models, and the power they have to inspire our girls.<br>
<br>
Fictional Role Models<br>
Having strong positive female role models in the books, movies, and TV shows our daughters see normalises the idea that women can be leaders, fighters, scientists, and so much more. The good news is Hollywood is starting to see the power, and financial benefit, of strong female leads.<br>
In the last two years we have seen two new Star Wars movies with female leads, an all female crew in Ghostbusters and, of course, Wonder Woman. These movies have been huge hits in the theatre!<br>
On a daily basis my daughter is pretending to be Rey, Jyn Erso, Princess Leia, Diana, and Holtzmann. This means as she plays, she is pretending to lead, fight, and be brave.<br>
My favourite is the women of Ghostbusters, they are funny, smart women, who do science for fun and catch ghosts. When my daughter suggested she wanted a Ghostbusters birthday party I got right on that!<br>
Family Role Models<br>
Do your girls and boys know what the women in their families have accomplished? What their great-grandmothers did? How powerful would it be for them to know their stories? To see the strength, resilience, and ingenuity of the women in their family?<br>
This summer, I had an epiphany. If my daughter loved the stories of historical women who did amazing things, how much would she love the stories of the women in her family. So this summer, we created her own book of rebel stories of the women in her family.<br>
In the book are the stories of every women she is related to going back to her great-grandmothers. At the end of the book I wrote her story. Here are a few lines from the end of her story.<br>
My daughter's story on the left. On the right is a self-portrait of her future (where she is a mermaid).<br>
This girl is very smart and works very hard to do both the things she loves, mathematics, and things that challenge her, new piano songs. The harder she works at different skills the better she gets at them.<br>
Her bright mind, love of science, technology, engineering, arts, and mathematics along with hard work will take her anywhere her heart dreams to go.<br>
The world is anxiously awaiting what this rebel girl will accomplish in her lifetime.<br>
<br>
Integrating Role Models into Daily Life<br>
It isn't enough for our daughters to be exposed to role models occasionally. It needs to become part of their daily life so that it becomes the norm to see women as leaders, women in STEM fields and women making their dreams come true.<br>
This is where books and toys come in. It is great when we can just go ahead and buy pre-made toys so that their role models can be brought to life by their imaginations when they play or read. We have a lot of Star Wars and superhero Lego and books in our house that my daughter plays with and reads all the time.<br>
Sometimes though, their role model can't be bought in a store. A few years ago I bought my daughter a Marie Curie doll as part of a set of dolls from the Miss Possible series.<br>
<br>
She was really excited to find out that she would also be getting a Bessie Coleman and an Ada Lovelace! She learned all about them and waited. Going to the mailbox constantly. When I broke it to her that the company had closed down and the dolls weren't coming she was heart broken.<br>
So my Mom and I hatched a plan. I would buy a black doll and my mom would knit an aviators outfit and we would give my daughter Bessie Coleman for Christmas. My daughter loved it. Later Christmas day she had already build a cardboard box airplane for Bessie to fly in. Her and my niece were pretending to be airplane pilots.<br>
She has already started asking for Ada and she might just be in luck this Christmas. Just because the stores don't have the toy you need, doesn't mean you need to give up on the idea.<br>
Role Models for Girls<br>
It is so important that girls are able to see examples of who they can be. More than Being The Change we want to see in the world - as individuals, we need to work together as a society to Model The Change for girls, in a way that shows girls it's possible, it's acceptable, and it's maybe even cool to be someone who is excited and passionate about STEM.<br>
Seeing example of ourselves in the world around us is so very important and extends beyond STEM. I recently read a story of a local mom who received an anonymous donation of dolls with hijabs. This is such an inspiring story of inclusion and thoughtful consideration of the power of role models for girls. It is encouraging to see a growing trend of this kind of work to support girls.<br>
I hope you're able to be part of this exciting work and I'd love to hear your stories about your experience with role models for girls in the comments.<br>
<br>
Credit for original article: (https://code.likeagirl.io/girls-need-role-models-bef0998fd71e)"),


("2018-05-12",3, 4, "A Woman in Computing Science?", "uploads/02_Woman_in_Computer_Science.jpeg", "Though my story began in the city of Allahabad, India, the story that is relevant for now is my journey as a woman in computing science. That side of the story goes back into my early school years, when computers were still new to India and households were only beginning to have one at home. It was early 2000's and my first memory of a computer, studying in a school in the metropolitan city of Gurgaon, is that of a dark, air-conditioned laboratory in the basement of my school. It was always an adventure to go there and work on computers with my friends. We must have been in Grade 4 or 5.<br>
The first time I felt passionate about computing science was in Grade 8. We were studying Hyper Text Markup Language (HTML) for that year and as the final project, a friend and I had to design a website. My dad, who had moved to Canada when I was two years old, had sent me many DK Eyewitness books by then and after looking through my collection, we decided to build a website on being an explorer. Grade 9 was Microsoft Visual Basic and Grade 10 was Structured Query Language(SQL) and databases. The computer lab was no longer the dark one in the basement; it was now a nice room on the top level of the school, an open area with computers lined along the perimeter.<br>
I changed schools in Grade 11. I decided not to take computing science. Instead, I decided to learn Economics as my fifth subject; the other four were predetermined for me - Physics, Chemistry, Math and English.<br>
I passed Grade 12 with flying colours. My mom and I explored which undergraduate programs I could apply for and we chose a three-year Bachelors in Computing Science (Honors) from University of Delhi. As that neared its completion in 2014, I applied and got accepted to the Masters in Science (Computing Science) at University of Alberta, Canada. I moved away from my mom and moved in with my dad's family. I completed my MS in 2016, decided I wanted to learn more about technology in education, and pursued a Masters in Educational Technology from the same university.<br>
You know how you sometimes go through life and it is some years later that you look back to wonder about why some things happened the way they did? I am at that point now. I read the article, 'No need to pinkify' on Code Like A Girl, and I had this immense urge to look back at my education through my school years and beyond, and understand how I got to be where I am today.<br>
As I thought more about it, a number of questions came to my mind and though I do not have all the answers, I hope that we can at least start a discussion and find answers together. This article is divided into sections, where in each section, I attempt to answer the following questions in order:<br>
· Why did I (and my friends) choose to be in computing science?<br>
· What was different about my graduate and undergraduate degrees?<br>
· What did the Indian education system do for those of us that chose computers?<br>
· Who is a woman in Computing Science?<br>
· Is it enough to get the younger generation of girls interested when there are bigger challenges that we have not tried to mitigate?<br>
My views are my own and my hope is to learn and understand the world I live in better. If you feel that I am misinformed or under-informed in any way, please feel free to point me out to sources where I may broaden my outlook.<br>
I had an interest in computing science but in my school years, I could not decide on my profession - I started with wanting to be an archeologist and study dinosaur bones to being a historian to visit the Pyramids.<br>
Where did all those ambitions go? Why did I choose to be in computing science? I asked my mom after reading 'No need to pinkify' why she encouraged me to take computing science. I had always liked computing science in school but this was about deciding a career path. She said that in India, it had a huge job market (it still does) and it offers the opportunity to work from home.<br>
I asked my dad the same question the next day during brunch and he said being in Canada and a professor, he knew it was going to be a great field to be in. There was lots of research to do in it.<br>
I did not learn a programming language until I started my undergraduate degree. As I mentioned earlier, I did not take computers in Grades 11 and 12, which is when Indian education introduces programming languages. I decided to pursue computers because I had some interest in it and I was a good student. I am sure I could have done well in the BSc Electronics too, had I wanted to do that.<br>
My friends during my BSc were 5 other girls with whom I hung out during and between classes. I never asked them how they ended up being in the degree. They were my companions. That was all that mattered.<br>
After talking to my mom and dad, I contacted a couple of them and asked them two questions:<br>
	1.	Why did you choose to do a BSc in Computing science?<br>
	2.	What role did your parents play in this?<br>
<br>
I ask the second question because in India, our parents have a huge say in what we do. They pay for all our education. 'Interest' does not always fly in the Indian society to do something - there is always the question of how it makes you independent eventually and allows for a good career.<br>
All of my friends now are working for software companies; they work in teams for their company's products with clients all over the world. They are my best example of women in computing science because they are in the industry.<br>
My first friend said that she took computers in Grade 11 and 12 and her comfort level in programming led her to believe that she could do well in the field. By the time she graduated from school, she had made a couple of games in C++ and she was fairly confident it was a line of work that fit her. She said her parents supported her decision to go into this career.<br>
My second friend said that upon graduating from school, she looked at all her options - 'I was not good in teaching, biology, public speaking or any form of creative work.' That is why she chose computers - there wasn't another place she thought she could fit. She had no inclination towards it as such. Her parents wanted her to be an engineer, and since she did not get into a great college to study engineering (the competition for engineering degrees in India demands numerous other articles) and this was the closest to landing the same kind of jobs with some extra years of education after the BSc, her parents were okay with it.<br>
My third friend had decent marks in Grade 12. Computers had a big job market when we were entering university and her parents thought this was the field for her to be in. They wanted her to do something that had scope - something that would not lead to a dead-end career in India. Computers gave her a chance at a promising career and she took it without any interest in it.<br>
My fourth friend had not opted for computers in Grade 11 and 12 either because she did not like the way it was taught in earlier grades. Similar to my second friend, she had lower interest in other subjects and this was something she could see herself doing. Her parents supported this choice due to the numerous job opportunities later.<br>
Whether we came into the BSc with any interest in computers or not, we all went on to do very well in our classes. I did my MS while my friends did a Masters in Computer Application (MCA) in India and have well-paying jobs now. They never looked back at the choice that they made. Their reasons for taking up computers were justified. Their reasons give rise to other questions such as why the other subjects were not as interesting, but I am not trying to find those answers. They are not my questions to ask or my answers to find.<br>
What was different about my graduate and undergraduate degrees?<br>
When I started my education in Canada, I did not realise until months into my program how few women were in my department. The ones I met were International students like me who had come from India, Brazil, China or Iran, while some were immigrants from the same countries. That was the first time I realised there was a big gap between the number of women who pursued higher education in computers back home and in Canada.<br>
In India, there is no mention of why we should have chosen computers as women. We were not treated any differently than our male counterparts when it came to being encouraged into a profession. We were more in number (55%) than the men in our program and my friends said that the ratio of female:male did not change in their Masters programs either.<br>
That led to the shattering of an impression I had about my home country - I expect to see gender divides in such fields of study more in India than in Canada, and yet it is the opposite. I never felt like I was someone unique during my BSc because I was surrounded by women who were as intelligent or more than me. We all grew up without taking any special computers programs outside of school. We did not hear about special coding clubs for girls. And yet, we all found our way into computers.<br>
What did the Indian education system do for those of us that chose computers?<br>
I was discussing this with one of my friends and she said that there was always a stress on STEM subjects. We never truly choose our classes in India. The Indian education in high school is divided into the categories based on undergraduate degree requirements.<br>
The first (and only) choice we get is in Grade 11 when we can decide between the non-medical (physics, chemistry, math), medical (biology, chemistry, physics), commerce (economics, accountancy, business) and arts (history, civics, geography). English is mandatory and that leaves one spot open. At my high school, the non-medical students could choose between computers, fine arts (painting), economics, and physical education; the medical students also had the option of math. The arts students also had the option for psychology. To do any undergraduate degree related to sciences, the non-medical combination is a minimum. You are still eligible to apply for social science degrees with that combination, but once you take arts in school, the doors to a science degree later are shut.<br>
At the high school I went to, the year I was in Grade 11, there were eleven classes for Grade 11, i.e., the students were divided into eleven 'sections' based on their choice. There was one section that was mostly medical students and some non-medical, six sections of only non-medical students, and three sections for commerce. Each of these had around 35 students each. There was one more section for arts with nine students. Does that say anything about the stress my education puts on STEM?<br>
I remember debating between arts and non-medical at one point and my mom said non-medical was better because I could still go into social science subjects later in university if I wanted but I would never be able to go from History to convincing someone I can do well in Physics.<br>
Who is a woman in Computing Science?<br>
I realized through my MS that I was interested in something else, and my professors did too. I have written extensively about my education, if you would like to read. I decided to pursue a MEd in Educational Technology and while doing that program, I figured out I just wanted to teach computers. I loved being a teaching assistant to undergraduates during my MS and what would be better than to teach young minds computing science? I am currently working towards my teaching certificate.<br>
I will always think of myself as a woman in computing science because that is where I discovered my passion for teaching. I may not do research in it or work in the industry but I love teaching computing science. When I become a teacher, will I no longer be a woman in Computing Science? It does not matter what other people think, but the fact that I have this question is disturbing to me because it shows me how little I know about who a woman in Computing Science and STEM is. Do we count teachers in this category?<br>
I told my mom about the discussions I had with my friends, the coding clubs for girls that I hear about, and my computers education, and I asked her what was missing. I can share my story but as a researcher and writer, but it must have a conclusion. What am I missing? Why are there not enough women in computing science? Why are there so few women researchers and women at high positions in those industries?<br>
She said it was because of the nature of the jobs and women. As a new professor who gets hired into the university, it is a couple of years before you become tenure-track and then more years before you become a full professor. All that time in between is spent researching and publishing papers. But if you decide to have a child, you will have to take a break most likely to care for the child. You might not be able to give as much time to your research because the child will take priority. And even when he/she gets older, you will come back home from work and leave your research at work. It's different for men. This is true in industry jobs too. We could lose hours spent towards getting that promotion.<br>
Is it enough to get the younger generation of girls interested when there are bigger challenges that we have not tried to mitigate?<br>
I love the fact that we are trying to get more girls into coding and STEM but I feel it is not enough to do just that. We need to look at further barriers that stop women from staying in, never mind succeeding at, these jobs. Is there a social construct that restricts women knowingly or unknowingly from being involved in these jobs?<br>
If I think about my friends in India and the Indian society, I can say that yes, there is a social construct that restricts women from these jobs and it is the fact that a man is always thought of as the provider or bread-winner for the family while the woman is the one who nurtures and takes care of everyone at home. She may be able to work, but her work is not her priority. This isn't necessarily true for all families in India but it is for a good many of them. If I revisit this article in five years, all my friends will be married by then. My intuition is most of them would have stopped working by then or moved into jobs where, if they take time off because of children or they cannot give as much time to work, they will not be at a disadvantage. Another possibility would be that they would continue working without aiming for promotions because their home will be their priority.<br>
My aim was to understand my history and ask the questions that I have with an attempt to voice the questions and concerns that you might have had too, because without addressing the hard questions, we will not get anywhere fast.<br>
<br>
Credit for original article: (https://code.likeagirl.io/a-woman-in-computer-science-14bb0046e254)"),


("2018-05-13",4, 2, "40 Badass Women in Emerging Tech", "uploads/03_Badass_Women.jpg", "40 Badass Women in Emerging Tech to Follow on Twitter<br>
Investors are the gatekeepers, holding the keys to who gets funded, who gets to scale their product, and what products get brought to market for mass consumption. There are about 800 VC firms, and only about 28 of these firms were founded by women.<br>
2% of Venture Funding Goes to Women-led Ventures<br>
This being said, it comes as no surprise that women startup founders raise only 2% of all venture funding, despite owning 38% of the businesses in the US, generating approximately $1.6 trillion in revenues, and employing more than 9 million people. For women of color raising money, the stats are even more dismal not to mention the overt sexism and harassment women founders have faced raising capital. Even with studies showing that women-led tech startups generate 35% higher ROI and 12% higher revenue than startups run exclusively by men, women still face significant obstacles raising money. Even with all of the tech blogs and with the NYT shining a spotlight on the funding gap, not much is improving.<br>
Over the years, I've heard from some investors that one of the reasons they had not previously invested in women-led startups was because they felt that they did not have the expertise to evaluate 'fashion type startups.' News flash: the majority of women-led startups are not focused on fashion. As a matter of fact, the majority of the 2,000 startups that have applied to our Women Startup Challenges are focused on Emerging Tech such as health tech, virtual reality, augmented reality, AI, robotics, blockhain, and more. Some of these startups are well on their way to discovering better diagnostic tools, treatments, and, yes, even CURES for rare diseases and different forms of cancer. Can you imagine the global impact that these startups could have? We'll never benefit from these discoveries, though, if investors don't fund them.<br>
Women-Led Startups will Make Investors a Ton of Money (If They Get Funding to Scale)<br>
Bottom line - We know women-led startups who are going to solve the world's toughest problems and make investors a lot of money. So, Sequoia, Andreessen Horowitz, Greylock Partners, and others - if you want to be one of those investors, we've created a list of 40 Women in Emerging Tech to follow to get you started.<br>
We've also launched a monthly enewsletter for accredited investors and VC firms, where we spotlight three early-stage women-led startups who are gaining traction with their products and who need to be on your radar.<br>
The Women Startup Challenge<br>
And if you're a women-led emerging tech startup, be sure to apply for our nextWomen Startup Challenge cohosted by Google. We're showcasing 10 of the best early stage women-led startups who will pitch Nisha Dua - Partner at BBG Ventures, Rebecca Kaden - Partner at Union Square Ventures, and Hoolie Tejwani - Vice President at Obvious Ventures for $50,000 cash, provided by Women Who Tech. The deadline to apply is December 19th.<br>
<br>
Women in Emerging Tech YOU Need to Know<br>
	1.	Dr. Maria Chatzou, CoFounder, LifeBit - Run your genomics analysis in minutes via a cloud based platform.<br>
	2.	Samantha Payne, CoFounder Open Bionics - Created one of the first bionic hands for children using 3D printing themed with superheroes.<br>
	3.	Kiah Williams, CoFounder, SIRUM - A platform to distribute unused medicine from manufacturers, wholesalers, pharmacies, and health facilities to low-income clinics and patients.<br>
	4.	Veronica Orvalho, CoFounder, MyDidimo - Automatically creates a 3D virtual character starting from a single photo - and in about 2 minutes you have a lifelike avatar that can speak, move, and represent you in a 3D world.<br>
	5.	Tasha Nagamine, CoFounder, Droice Labs - Droice uses cutting-edge machine learning to help hospitals achieve better patient outcomes.<br>
	6.	Rhona Togher, CoFounder, Sound Bounce of Restored Hearing - The world's first smart material hearing protection headset that works to absorb damaging sounds.<br>
	7.	Eimear O'Carroll, CoFounder, Sound Bounce of Restored Hearing - The world's first smart material hearing protection headset that works to absorb damaging sounds.<br>
	8.	Jasjit Maggu, CoFounder, Galaxy.AI - An artificial intelligence solution to automate the property and casualty insurance claims process.<br>
	9.	Christianna Taylor, PhD, Founder, Intelligent Space - Developing artificial intelligence for space applications. They leverage autonomous robotics to restructure space for satellite safety from orbital debris starting with a space towing system moving dead satellites to a graveyard zone.<br>
	10.	Lili Qiu, CoFounder, Haouli - Revolutionizing how users interact with the world by developing patent-pending high-precision acoustic-based motion tracking technology. The technology will enable VR/AR users to easily interact with objects in the scene.<br>
	11.	Mitu Khandaker-Kokoris, CoFounder, Spirit AI - Tools to craft more expressive characters, stories, and worlds in games and VR. With this tech, they're also solving another important challenge: combating online harassment in multiplayer videogames.<br>
	12.	Jade Huang, CoFounder, Style Sage, Provides critical retail analytics solutions for global brands in pricing, assortment, promotions, and trends.<br>
	13.	Heidi Wyle, CoFounder, Venti Technologies - Creating self-driving non-automotive vehicles.<br>
	14.	Daniela Rus, Robotisist and Director of the Computer Science and Artificial Intelligence Laboratory at MIT. Rus is also the CoFounder of Venti Technologies.<br>
	15.	Helen Greiner, Founder, Cyphy Works - Delivers rugged, high-endurance tethered drones with secure payload data and autonomous flight.<br>
	16.	Sam Frons, Founder, Addicaid - Platform for aiding in recovery for addictions.<br>
	17.	Nancy Yu, CoFounder, ACGTXYZ - Building centralized research infrastructure for rare disease communities - clinical software, patient products, sample collection, and genetic sequencing.<br>
	18.	Mariana Acuña, CoFounder, Opaque Studios. Builds VR-based tools for Hollywood studios. They combine the two most exciting developments in tech and Hollywood: Virtual Reality and Virtual Production; allowing content creators to produce feature films, TV shows, games and VR applications more efficiently than ever before.<br>
	19.	Kristina Tsvetanova, Founder, Blitab - The world's first tactile tablet for people who are blind and visually impaired.<br>
	20.	Alexandra Grigore, CoFounder, Simprints - Simprints has developed an inexpensive biometric scanner, mobile app, and cloud platform that could become the first identity provider for the 1.5 billion people who do not have formal IDs.<br>
	21.	Caritta Seppa, CoFounder, Tespack - Solar Smartpacks that are stylish, light and easy to use. Collect, store and use your energy and keep all your devices charged<br>
	22.	Yesika Aguilera, CoFounder, Tespack - Solar Smartpacks are stylish, light and easy to use. Collect, store and use your energy and keep all your devices charged with Tespack.<br>
	23.	Katie Brenner, CoFounder, BluDiagnostics - One of the first apps to enable women to understand their body through revolutionary saliva-based measurement technology that provides immediate, quantitative data about hormone levels.<br>
	24.	Sanna Gaspard, PhD, Founder, Rubitection - A reliable medical device for early bedsore diagnosis that is 75% - 90% cheaper than its competition.<br>
	25.	Sabine Seymour, Founder, SUPA AI, biometric sensor platform for apparel.<br>
	26.	Bethany Edwards, CoFounder, Lia Diagnostics - The at-home pregnancy test hasn't changed in over 20-years, so Lia Diagnostics created the first discrete, flushable, biodegradable, and compostable at-home pregnancy test.<br>
	27.	Natasha Dhayagude, CoFounder, Chinova Bioworks - Developing a new, clean label, natural preservative from a fiber found in mushrooms called Chitosan. They are the first company to have a natural solution for every major type of spoilage bacteria, yeast and mold!<br>
	28.	Evelin Weber, Founder, Narra Life - Narra is designing and building and end-to-end financial services platform for the unbanked using Blockchain technologies to ease the financial inclusion problem.<br>
	29.	Fei-Fei Li, Professor, Director, Stanford AI Lab, Chief Scientist AI/ML Google Cloud, and CoFounder/Chair @ai4allorg - Fei-Fei is on sabbatical from Stanford and is currently working as Chief Scientist of AI/ML of Google Cloud.<br>
	30.	Tatayna Kanzaveli, Founder, Open Health Network - OHN's Blockchain Technology based Healthcare Data Interchange Platform is the first platform where patients will have full control of their data and give them tools to manage how and who can access their data.<br>
	31.	Jessica Matthews, Founder, Uncharted Play - A renewable power company that specializes in harnessing the energy from motion to create entire ecosystems of power for communities around the world.<br>
	32.	Rana el Kaliouby, Co-Founder, Affectiva - Creates emotion AI products that humanizes how people and technology interact.<br>
	33.	Karen Dayan, Chief Marketing Officer, Trusona - A cybersecurity startup that has developed identity authentication technology that allows users to securely access web and mobile applications without entering a password.<br>
	34.	Ivana Ojukwu, Cofounder, See Fashion - A discovery platform that helps fashion brands identify new trends and buying opportunities in their markets. They provide contextualised product insights in real-time.<br>
	35.	Erica Lee, Founder, Collective Intelligence Technologies - Building ML-drive software tools for better image recognition in automotive vehicles.<br>
	36.	Stefanie Lemcke, CoFounder, GoKid - A complete carpool solution for schools, teams & active families, helping parents carpool with families they know and trust.<br>
	37.	Jacquene Curlee, Founder and CEO of Kids Drone Zone - Teaches kids how to build a drone, code a drone, and how to fly a drone.<br>
	38.	Gillian Morris, Founder, Hitlist - An intelligent assistant that monitors flight and accommodation prices for trips you want to take, then alerts you when prices drop.<br>
	39.	Carol Reiley, CoFounder, Drive.AI - Building the brain of self-driving vehicles.<br>
	40.	Prachi Baxi is the co-founder of Smartypans, Bluetooth enabled cookware that enables users to track the nutritional content of ingredients in real time while cooking.<br>
Add to the List<br>
There's a lot more women who should be on this list, and I'd like to encourage you to continue adding to it. Feel free to post your name, background, and Twitter handle in the comments.<br>
<br>
Credit for original article: (https://code.likeagirl.io/40-badass-women-in-emerging-tech-to-follow-on-twitter-26e55ee39fa2)"),



("2018-05-14",4, 1, "Most Americans Cannot Name a Single Living Scientist-Let Alone a Female One", "uploads/04_Most_Americans_Cant_Name.jpg", "When most people think of a scientist, they picture shocking white hair, nerdy glasses, a stark white lab coat and - naturally - a man. Maybe it's a specific person that pops into your head, like Albert Einstein, or Rick Sanchez, or Bill Nye, or Charles Darwin, or Walter White. The point is still the same: Our imagination is seriously limited by culture.<br>
That's not just my opinion. A recent survey from Research!America has found 81 percent of Americans cannot name a single living scientist - not even one. Worst still - of the pathetic 19 percent able to recall a living scientist, 27 percent named Stephen Hawking (*The survey was taken before Stephen Hawking's recent and tragic death.), 19 percent named Neil deGrasse Tyson and 5 percent named Bill Nye. Jane Goodall - apparently the only living female scientist the American public is capable of remembering - was mentioned by a mere 2 percent.<br>
This is how inequality in science is perpetuated: through recycled stereotypes, which leave little room for any sort of diversity. Because science - regardless of how much it wants to be unbiased, impartial and open-minded - can never be more than the sum of its human parts, and those parts are predominantly white and male.<br>
Where have all the scientists gone?<br>
Every day around the world scientists of all genders are making ground-breaking contributions to further humanity's collective knowledge. Still, the average American is far more likely to know the name of a Scientologist than an actual scientist - and I'm not saying that's anyone's fault.<br>
Often, it feels like the mainstream media talks about science as much as President Trump's numerous sexual assault allegations - which is to say: not a fucking lot. According to a Pew Research analysis from 2007 to 2010, science and technology accounted for only 1.5 percent of all news stories. In 2011, that number dropped to 1 percent.<br>
'The media need superheroes in science just as in every sphere of life.' - Stephen Hawking<br>
In theory, climate change should have done a lot for the elevation of scientists in our national conversation. But last year, during two weeks of hurricane footage, 60 percent of the news stories included the word 'Trump', while only 5 percent could summon the journalistic integrity to mention climate change - let alone interview an actual scientist.<br>
The way we talk about and imagine scientists doesn't just reflect reality, it creates one. It's no accident that children grow up dreaming of the same careers: a fireman, a football player, a ballerina, maybe even the president one day. It's pretty darn likely that a young child, dreaming of being, say, an archaeologist, knows someone with that career, or has recently seen the movie Indiana Jones. After all, imagining a future is much easier when there's a precedent for it-and so goes the cynic's cliche: You cannot be what you cannot see.<br>
For young millennial women this is especially problematic. Because if most Americans cannot think of even a single living scientist, how are we to imagine a female one?<br>
Where have all the women gone?<br>
When engagement between scientists and the public is all but non-existent, finding a scientist role model as a millennial woman, and especially as a millennial woman of colour, is like playing Marco Polo by yourself. In a 2015 survey of Australian women working in STEM, 52 percent of respondents said the lack of female role models significantly or moderately impeded their career advancement. No doubt, female scientists in the U.S. have experienced something similar.<br>
Right now, women hold 47 percent of all U.S. jobs, yet we fill only 24 percent of STEM jobs. Put another way: A STEM worker is about half as likely to be a woman as a member of the overall workforce. For women of color the numbers are even worse. Despite the fact Black and Hispanic women make up 7 and 8 percent of the population respectively in the U.S., they hold only 2 percent of science and engineering occupations.<br>
This isn't just a problem for women. Decades of research by scientists, psychologists, sociologists and economists have shown that socially diverse groups are more innovative than homogeneous groups. Studies have also found gender diversity improves performance, removes biases, increases the value of the company and boosts innovation. At all levels, diversity makes science better - and science benefits everybody.<br>
Over the years, representation of women in STEM has made great progress, but there's still plenty of room for improvement. While it's true the percentage of women in some fields has increased, we are still seriously underrepresented in life science, math, physical science, engineering and computing. Of all the physics PhD's in this country, only one-fifth are awarded to women, and only 14 percent of U.S. engineers are female. If nothing is done to encourage more women into computing, the number of women in this field will drop to 22 percent by 2025.<br>
Is it really any wonder we see these trends occurring in STEM fields where negative gender stereotypes have taken firm root?<br>
The way our culture thinks about science and scientists has a direct impact on the number of women who pursue STEM. In a survey of half a million people in 34 countries, about 70 percent revealed an implicit stereotype that associated science with men more than women. In addition, other studies have shown that when both children and adults are asked to imagine a scientist, they are more likely to think of a man.<br>
In a vicious cycle, when people fear a negative stereotype, research suggests we are more likely to confirm it. For instance, when girls are reminded before a test that boys are better at math, their subsequent performance reflects that very stereotype. It's obvious that our culture's idea of a scientist has become a sort of sieve, funnelling men into certain fields, while filtering women out.<br>
Given that many cultural biases are formed through observation, we might be able to change negative stereotypes through observation as well. Studies have shown that exposing young women to counter stereotypes, both within their science courses and also through popular culture, has been found to weaken gendered stereotypes in STEM. And that is exactly why female role models are so indispensable.<br>
If we want to improve gender diversity in STEM, we have to put a spotlight on female scientists. Movies like Black Panther and Hidden Figures are a great start. If we can show the next generation that female scientists are capable of changing the world, in the future we can give young girls an opportunity to do the same.<br>
Credit for original article: https://medium.com/athena-talks/most-americans-cannot-name-a-single-living-scientist-let-alone-a-female-one-8f8f793f81b1"),




("2018-05-15",4, 20, "Is the Industry Ready for Women Like Us", "uploads/05_Is_the_Industry_Ready.jpeg", "Almost two years ago my friend Massimo, exquisite flamenco guitar player and literature expert, told me the story of Vivienne Haigh-Wood.<br>
If you are a connoisseur of the English and American literature, you might have heard of her, but, even so, you probably have not.<br>
England, early Twentieth Century. Who is Vivienne Haigh-Wood?<br>
She is just one of those eccentric women soon labeled as hysterical and forced into an asylum, or rather an elegant clinic for rich people: she is from a wealthy family, after all. Social privilege, however, cannot save her from a perpetual deprivation of personal freedom.<br>
Hysteria was still a sort of mystery, a diagnosis often used to label (and possibly get rid of) women who made men uncomfortable and, although it is a fascinating theme, which deserves to be studied and delved, my feminist nerve was definitely struck when I gathered Vivienne was a writer who could never pursue a writing career due to her illness. Before being forced into her golden prison, she had published a few tales, under a pseudonym, but her writings are now either destroyed or classified.<br>
Google her name if you'd like to find out more.<br>
Cut. World, 2018. How are women artists and entrepreneurs getting on? Are they autonomous, free to speak their minds out, able to set their projects up without stumbling upon social obstacles?<br>
Italy, 2000s. The media often present women as objects, pure entertaining accessories. In the music industry, women are more than often just performers of someone else's ideas: authors are usually men trying to adopt a woman's point of view.<br>
In this utterly disappointing scenario, I try to emerge as a 100% independent songwriter, who is the author, the performer, the manager.<br>
Is the Industry ready for women like me?<br>
In a recent article published by Noisey, I read a broad analysis about why the music industry is the perfect misogynist environment. According to the numerous stories witnesses and victims reported, 'culture and labor conditions create a perfect storm for abuse'.<br>
But even when sexual abuse doesn't occur, women are constantly underrated.<br>
It is not so easy, for example, to meet women managers or producers, as these roles are traditionally reserved to men.<br>
When I book my shows, the venue owner or promoter (a good 80% of the time a man) on the other end often sounds doubtful, as if he didn't trust a young woman talking business.<br>
I couldn't grasp it at first, but then I realised why my offer often gets overlooked: a young woman doing business (being a musician often feels like being an entrepreneur) is not credible, at least not in the Italian culture, at least not in the culture of the music industry.<br>
Luckily things are changing: more and more women are getting the space they deserve. Our duty is fighting the stereotypes that see women as pretty creatures incapable of doing business or art through our work.<br>
'So you both sing and play,' a fellow musician once told me, 'amazing! It is not so easy for women.'<br>
I am eager to read your experiences and points of view on this matter.<br>
Also, if you liked this article and would like to find out more about my music, check out my latest album Canzoni Per Vivienne, inspired by the story of Vivienne Haigh-Wood.<br>
<br>
Credit for original article: https://medium.com/athena-talks/is-the-industry-ready-for-women-like-us-6b155b10f515"),



("2018-05-16",4, 7, "I've Been Traveling The World My Entire Life And It's Taught Me This About Entrepreneurship", "uploads/06_Ive_Been_Travelling.jpeg", "My first passport was issued when I was 2 months old. I've lived in 9 countries and I've traveled to 27. My experiences traveling the world have taught me a significant amount about people, culture and myself.<br>
<br>
Many travel in search for answers or an 'Eat, Pray, Love' pivotal moment in their lives. When in reality, there is no one 'defining moment' that turns someone knowledgeable or cultured. It's the culmination of all our experiences that creates who we are as people.<br>
I've recently noticed how much I pull from my experiences traveling when making entrepreneurial decisions, like what decision to make next, or how to better relate to and understand different kinds of people.<br>
Here are the four biggest lessons I've learned.<br>
1. The Importance of Perseverance<br>
Perseverance is key part of being successful at anything in life - whether you judge success based on external approval, wealth, etc., or internal fulfillment and happiness.<br>
The simple act of traveling detaches you from reality in the same way entrepreneurship can. People who go after what they want in life have to be buoyant and willing to move with the tide. But it's in that detachment that you grow.<br>
It's kind of a balancing act.<br>
It's tricky to be able to detach yourself from everything you know, and everyone you love and completely immerse yourself into something new. It's even more complicated to do that, and still stay rooted.<br>
Traveling (especially traveling a lot) teaches you that level of perseverance. And not in the way that schools do, where concepts are learned in theory and not in real life experience.<br>
To be an entrepreneur you absolutely need to be perseverant. When you're faced with rejection and doubt, you're the one who needs to stay positive, carry your team, and find a solution.<br>
Travel is a luxury, and honestly so is entrepreneurship. You're never going to do what you want, where you want, when you want, if you're not perseverant.<br>
2. Humility Is an Asset<br>
 When you travel to impoverished cities in South America, Africa, and the Middle East you always see the same thing.<br>
You always see little markets of thriving entrepreneurs making it work. All of them selling their trinkets, luring gringas (foreigners) into their tourist traps and charging them six dollars for a bracelet that only costs two cents to make.<br>
You also will see where they live. In India, it's the slums. In Brazil, it's a favela. In South Africa, it's the townships. In Mexico, it's el barrio bajo. And in America, it's the ghetto.<br>
Last year, I was on a beach in Colombia getting my hair braided. I asked this thirteen or fourteen year-old girl, who was giving me cornrows, how many hours she works in a day. '10, 12, sometimes even 16. I've been on this beach since 5:30 am,' she said.<br>
A wave of humility hit me. I couldn't help but laugh at myself. It was funny to think about how hard I thought my startup grind 13 hours works days were. I thought of the soft silver edges of my Macbook air, and my pair of favorite Calvin Klein leggings I always wear when working out of coffee shops.<br>
Travelling has given me perspective, and in that, humility.<br>
Being humble means appreciating the hours of work you have - no matter how grueling, or sleepless - and seeing them as an opportunity. We're all very fortunate to be able to hustle the way we do.<br>
3. Understanding Opportunity Cost Is Critical<br>
A massively important life skill you learn when traveling is budgeting, but an even bigger one is opportunity cost.<br>
I could decide to get the cheaper red eye flight, but then I'll be running on little sleep the next day. I could meet with this influential investor, but then I'd be shaving three needed hours off my week. I could go ziplining and hiking today, but I'll be exhausted by the time we go out for dinner and I need to get some work done tonight.<br>
School doesn't teach you about opportunity cost. Life does. Especially the life of a traveller. Understanding and being able to decisively weigh out what will be better for you, your day, and even your business will help you play the game of longevity.<br>
And longevity is everything.<br>
4. Being a Go-Getter<br>
The most valuable lesson traveling has taught me is to go after what I want. You'll never start your entrepreneurial journey if you don't. Traveling has taught me to speak up, even when I don't know the language. It's taught me to rely on and believe in myself, but it's also taught me to know when to ask for help.<br>
Going after what you want isn't as easy as it seems. You'll face doubt and confusion from your peers, friends and even your family.<br>
'Why do you want to go to Africa? Isn't that dangerous?' they'll ask.<br>
'You're quitting your job? What are you going to do when you don't have health or dental insurance?' they'll demand.<br>
Having the confidence to bet on yourself, do what you want, and work as hard as you can to get it is what trailblazers do.<br>
Whether you're traveling to a new city for the first time, or starting your own company, you need to be okay with the unknown and even the illogical.<br>
You need to go after what you want.<br>
<br>
Credit for original article: https://medium.com/athena-talks/ive-been-traveling-the-world-my-entire-life-and-it-s-taught-me-this-about-entrepreneurship-e891fcbac52c"),



("2018-05-23",1, 18, "Comedy in Tech", "uploads/07_Comedy_in_Tech.jpg", "We're living through a golden age of comedy. The genre is more popular than ever, fuelled by technology and a generational shift as consumers increasingly value experiences over things. And it's not just the big names that are benefiting from the boom - up-and-comer comedians and venues are, too.<br>
Online consumption of comedy seems to be insatiable. The world's top ten comics on social media have a combined reach of more than 125 million fans spanning Twitter, Facebook, YouTube, and more. Look at music streaming sites and you'll find a similar story: Pandora's comedy channel, for example, attracts more four million unique listeners per month.<br>
Here's how artists and promoters and organisers are leveraging this growing interest online to grow their audiences and evolve the live comedy experience.<br>
Thanks to a plethora of new platforms for comedy - from podcasts to livestreams - there's been an outpouring of fresh comedy from a wide and diverse group of comics. This original content is helping comics, promoters, and comedy venues alike grow their audiences.<br>
'Never before has so much original material been this easy to access and been consumed by this many people,' says comedian and writer Elahe Izadi. 'Never before has the talent pool of comedians been this deep, and in format, voice and material, this diverse.'<br>
From social media to podcasting, up-and-coming talent now has the ability to share material directly with fans. This format allows relatively unknown comics to be more easily discovered by networks like Netflix, which in turn makes it possible for them to amplify their reach.<br>
Similarly, comedy clubs and larger venues are also attracting new fans online with digital content. Take New York comedy club, The Stand, for example. The venue's YouTube channel has 28,306 subscribers and counting, while its most popular video has 6M+ views. Comedy is most powerful when experienced live, which makes it easier to turn digital fans into in-person attendees.<br>
'There's an undeniable golden age of comedy underway with on-demand media access of comedy blowing up on a global level,' says John Cornett, who directs the comedy team at Eventbrite. 'The end result for comedy fans is to act on the digital content they love by going out to see comedy live.'<br>
How to get online comedy fans to come to your live shows<br>
These live experiences range from intimate comedy clubs to large-scale events, like San Francisco's outdoor comedy festival Colossal Clusterfest, which drew more than 45,000 people and featured comedians Jerry Seinfeld, Kevin Hart, Sarah Silverman, T.J. Miller, and more.<br>
Comedy is also being added to established music festivals as a way to create more value for attendees. Boston Calling (40,000+ attendees) and Life Is Beautiful (137,000 attendees), for example, each offered full comedy lineups this past year.<br>
So how do comedians, promoters, and venues turn that online interest into a live experience? Part of it is booking the right talent to engage fans. The other part is using the right technology to make the ticketing experience seamless, so you can quickly turn viewers or listeners into attendees.<br>
That means making it easy for fans to buy tickets from their phones, on social media platforms like Facebook where they follow comedians, and through other apps where comedy fans spend their time. For example, comedy events sold on Ticketfly, and soon those on Eventbrite as well, will be promoted through Pandora in-app notifications to its comedy channel listeners.<br>
By selling tickets to shows on the apps where comedy fans are, you can seriously increase sales. In fact, events that sell tickets directly on Facebook drive 2X more sales and free registrations on average than events that redirect to a ticketing page.<br>
To learn more about how you can pack the house, download Multiply Attendance at Your Comedy Venue (Without Putting in More Work).<br>
<br>
Credit for original article (partial): https://www.ted.com/talks/heather_knight_silicon_based_comedy"),




("2018-05-18",1, 5, "The Divine Comedy of the Tech Sisterhood", "uploads/08_Divine_Comedy_Tech.jpeg", "The Divine Comedy of the Tech Sisterhood<br>
This is a work of fiction. Names, characters, businesses, places, events and incidents are either the products of the author's imagination or used in a fictitious manner. Any resemblance to actual persons, living or dead, or actual events is purely coincidental.<br>
<br>
A letter from Virgil<br>
If you're looking for inspirational wisdom about how leadership is more than a creative enterprise but a calling and there's nothing more rewarding than selflessly enabling other people's successes, this is not that.<br>
This is a guide to some of the absurd dysfunctions and dynamics you will likely encounter if you embark on a career in tech, and end up in a leadership position with all the naive innocence and drive that you will be different, you will be a great leader, respected by all, and you will change things not just for yourself and your team and but for the industry as a whole, moving the needle on behalf of all the other women out there who look up to you as a role model.<br>
So. You believe in yourself and you've read Lean In and gone to Grace Hopper, and are armed with a myriad certificates in leadership, influencing and negotiating skills. You're convinced you won't fail.<br>
This is a story that you should come to when you've failed. When you're in pain, when all your creativity and emotional resilience has been depleted by the guy you fired who is now suing or stalking you, when you're considering quitting to have a baby, travel the world, write a book or maybe try your luck as a yoga instructor.<br>
So is this a girl book? Self-help? Can a self-help book use the word fuck? Should I hide this book in a paper binding if I'm reading it on the subway? If you're asking yourself any of these questions, you're not a real engineer.<br>
How'd that feel? Get used to it. Because any time you actually solve a problem, someone is going to say that what you do isn't really engineering. That you're not as sharp now that you're not writing code anymore.<br>
This is a book about all the ways leading can crush your soul.<br>
And about how to survive and thrive anyway.<br>
# # #<br>
PART ONE - INFERNO<br>
A lot of the tech industry today is fucked up. Think of every horrible stereotype of software engineers you've ever seen on TV - hackers straight out of mom's basement who can't lift their eyes from your chest, socially-awkward twenty-something millionaires who get shit-faced in night clubs in San Francisco and convince you of the merits of polyamory, venture capitalists who refuse to shake hands with women for religious or cultural reasons - and somewhere in Silicon Valley, you will find it.<br>
And that's not even scraping the surface.<br>
The entrance to hell is not a cave with the words Abandon all hope. It's the $200,000 signing bonus being offered to you by Facebook, or the car from Microsoft, or the offer of free food from Google after you've scrimped and saved to get through college and are eating nothing but Ramen every night so you can chip away at your student debt.<br>
Your journey begins with being rescued, and so for the first couple of years you struggle to be worthy of the gift you've been given, not recognizing the temperature increasing gradually around you to its boiling point.<br>
Welcome to hell.<br>
# # #<br>
1. Athena meets the Brogrammers<br>
You've never been drunk in your life. You skipped a grade in high school, graduated summa cum laude from university, and so you're not yet twenty-one. Back home, in Kansas where your parents never went to college, or in India where your family lives in a tiny, cramped apartment, people are counting on you to make their sacrifices worthwhile.<br>
You've never been an extrovert. You had very few friends in high school. People either bullied you for being a geek, or stared at you when you demonstrated your intellect, as if you were Athena sprung directly from the head of Zeus and not a normal girl at all.<br>
You've never learned how to dress yourself. You spent high-school and college studying, hiding in grey hoodies and unflattering jeans. You worked three jobs to put yourself through college, and one of them was washing dishes in the college cafeteria where you came home with your shoes smelling like eggs.<br>
You've never really dated, either because love was a distraction or sex was a sin, or the University of Waterloo where you studied Systems Engineering was a boring bomb shelter and your body went into hibernation for four Canadian winters. So you don't know when boys are flirting with you or just being friendly or treating you like a kid sister because all of it amounts to more attention being paid to you than you're really comfortable with anyway.<br>
So when the boys invite you to their parties, you feel like you've arrived. You'll drink beer with them even though it tastes like stale yoghurt, or pretend to like the really expensive whisky that brings tears to your eyes. You'll be their anointed Queen, singing and whooping as the world swims before your eyes, and taking the proffered Adderall to stay awake until 2 AM. They all claim that they see you as a friend and a sister, nothing more, it's all safe, but something tells you they want something from you even if it's only validation that they're cool enough to have a girl with them.<br>
'Why do women not want to join tech?' one of them asks you. 'Aren't you having fun? Isn't this fun?'<br>
'You're not like other girls,' the quiet one says when you're alone discussing the benefits of one API over another. 'They're stupid or irrational. You're so smart.'<br>
'Let's go on a road-trip!' says the ringleader, your manager. 'We'll be driving across the country as a team-bonding exercise. We'll go bar-hopping in the mountains, drink Redbull and vodka by the campfire in the great plains, and Kerouac our way to Manhattan!'<br>
Instinct tells you this is a terrible idea. You'll be the only girl among a group of drunk guys, stuck in a small, smelly car. You'll have to either pay for your own room or share a room with them when even the idea of a co-ed dorm had you shrinking in revulsion. You don't know if you'll be on your period.<br>
But you can't say any of this. So you take your manager aside and tell him privately, 'I feel weird doing this. I'm the only girl in the group.'<br>
He says, 'Nobody's forcing you to do anything. It's just a team-bonding thing, and team culture is really important. You should have the opportunity.'<br>
What you hear is, We need to talk about your flair.<br>
'If it's the sharing of a space that's a problem, you can drive alongside us separately and we'll catch up at the rest-stops. But you should know, the team really respects you as an engineer. They don't even really see that you're a girl.'<br>
You do what's necessary, because that's what you've always done. You toss away your lipsticks and your few skirts, you give up on makeup, you wear your hair in a messy, natural ponytail, and kill your inner anima not with anger but with rational detachment.<br>
You join the brotherhood. You become an engineer.<br>
# # #<br>
2. Imposter Syndrome<br>
'Sweet, everyone's here. Let's get started. Can you take notes?'…<br>
…<br>
To be continued!….You want to read more don't you?! the full content is available online.<br>
<br>
Credit for original article: https://code.likeagirl.io/the-divine-comedy-of-the-tech-sisterhood-62bf54fd2186"),


("2018-05-19",1, 3, "Tinder Taps Comedian Whitney Cummings to Launch 'Reactions'", "uploads/09_Tinder_Taps_Comedian.jpg", "Following in the footsteps of Facebook and iMessage, Tinder has today introduced Reactions, letting Tinder users send each other custom animated responses.<br>
These reactions include Hearts, Eye Roll, Round of Applause, Martini Throw, etc. This makes it even easier for Tinder users to casually use the app without actually having to work at the conversation.<br>
In January of last year, Tinder introduced Giphy support and bigger emojis. Reactions seem like a natural extension of that, making the already featherweight Tinder experience even more casual and simplified.<br>
But it seems that Reactions are part of a larger initiative at Tinder, which is meant to give women all the tools they need to deal with douchebags.<br>
Actress and comedian Whitney Cummings is helping Tinder launch Reactions in a video series called 'The Menprovement Initiative,' directed by J.J. Adler.<br>
The video shows real female employees at Tinder interacting with Whitney Cummings to improve men. That said, Tinder doesn't have a sterling history of empowering women, especially its own female employees.<br>
Tinder offers clear community guidelines about bad behaviour, and gives users tools to both report malicious actors and swipe left after matching to quickly escape an unwanted conversation. That said, branding Reactions as a way for women to deal with douchebags seems a bit lackluster.<br>
Responding with the splashing martini reaction won't do much to stop unwanted messaging from coming your way, and in fact might even encourage the guy to send more. Because these reactions are cute, and feel flirty. It's like Tinder created a way for users to wink at cat callers on the digital street.<br>
Tinder Reactions might make conversation easier between Tinder parties, but it doesn't seem to fit in well with the so-called Menprovement Initiative.<br>
<br>
Credit for original article: https://techcrunch.com/2017/10/04/tinder-taps-comedian-whitney-cummings-to-launch-reactions/"),


("2018-05-10",2, 16, "A Headset that Reads your Brainwaves", "uploads/10_Headset_that_Reads_Brainwaves.jpg", "Tan Le, is a pioneer of human brain research, with an incredible story of her personal journey from Vietnamese refugee to starting and selling a successful technology company at age 26 to founding EMOTIV, a company that has developed breakthrough technology for connecting digital media to the human brain.<br>
<br>
'What will happen in next few decades is more astounding than what's happened in the last 1,000 years,' she said. She urges audiences to follow their dreams, even if they sometimes seem unrealistic. 'You'll often be told it can't be done, but if you have the courage to pursue your goals, then 'can't be done' becomes a challenge rather than an insurmountable obstacle,' she said.<br>
Tan's mission entails giving everyday citizens the tools to better understand how their own brains function.<br>
Her work is dramatically accelerating the pace of brain research. Her products use electroencephalography (EEG) technology to create a uniquely user-friendly method of collecting and sharing brain data.<br>
<br>
EARLY WORK<br>
Tan began her career as a lawyer. Through that job, she was inspired to switch gears and get into entrepreneurship.<br>
'What's really transforming our world today is technology. Technology is driving a lot of innovation and driving what's happening in everyday lives. As a lawyer, I was facilitating and sitting on the sidelines helping entrepreneurs and other creative people undertake their ventures. I wanted to be a part of it too.<br>
The second shift in Tan's career came roughly five years after the founding of her first company, when she became 'unhappy thinking about reinventing [herself] every three to five years.' That's when the intrigue of the brain and the opportunities to expand the norms of brain research caught her attention and kept it.<br>
'The brain slowly became more and more of a fixture. This was something that I was totally fascinated by. . . . I saw opportunities to disrupt this space by really innovating around a core technology. The dream was to try to create a technological platform that would make it much more accessible for anybody who is interested in the brain to participate.'<br>
<br>
MOST EXCITING PART OF YOUR WORK<br>
Tan says she and her colleagues at Emotiv Lifesciences are simply the creators of the technology. The beauty, she emphasises, is in the applications.<br>
'We've been really amazed by how the technology has been used. . . . People have looked into driving a car with your thought, using a smartphone via thought, new methods of patient rehabilitation, children's art, and so many different things. We're the people who created the technology platform, but not the applications. It's developers and researchers who have taken this technology platform and breathed life into it.'<br>
<br>
MOST DEMANDING PART OF YOUR WORK<br>
Brain research is traditionally dominated by a small number of experts, with decades of education and experience required to break into the field. For Tan, convincing those around her to reframe their approach to understanding and researching the brain was no small task.<br>
'There's something that's very limiting when you become an insider or an expert, because you become settled and you come to expect certain things. People say, 'It's always been done that way.' But let's think again-why does it have to be this way? We fall into autopilot even when we're trying our hardest not to fall into this trap.'<br>
Since moving past this initial hurdle and assembling her 'multidisciplinary team of misfits,' Tan's challenges have taken on a much more technical nature, tied to the mechanical and engineering intricacies of Emotiv's different products.<br>
If the root of geography and exploration is the desire to better understand the unknown, the brain may indeed be the ultimate challenge for explorers like Tan. We know less about the brain than we do about any other system in the human body.<br>
'It's a challenging problem, especially because the brain is a system that's very dynamic. We understand now that the brain has neuroplasticity, which means that the brain doesn't stop learning once the critical period closes. It remains open for the bulk of our mature adult lives. That means that it's constantly evolving in response to the input you're providing it.'<br>
<br>
SO, YOU WANT TO BE AN . . . INNOVATOR AND ENTREPRENEUR<br>
Innovation, Tan says, is best understood by looking at the common forces moving society and technology forward.<br>
'The best way to predict the future is to invent it, but short of that, the next best thing is to look at people's collective passions, because that's really what's driving the world today.'<br>
Tan cites coding-the suite of 'languages' computer systems use to communicate-as an essential tool for tapping these collective passions.<br>
'If I had the chance again, I would definitely learn to code. It's a very useful language to have under your belt; I consider it a communication tool. . . . It equips you with a set of tools that you can apply to anything.'<br>
<br>
GET INVOLVED<br>
Those interested in using Emotiv's products to learn more about their own brain can find out about the latest product, the Emotiv Insight.  Once you are able to collect your own brain data, you can begin to track things like your progress while learning a new language, personal risk for neurological conditions like dementia or Alzheimer's disease, and brain activity while dreaming.<br>
<br>
Credit for original article: https://www.nationalgeographic.org/news/innovator-and-entrepreneur-tan-le/"),


("2018-05-22",2, 6, "In a Computer Scientist's Shoes", "uploads/11_In_Computer_Scientists_Shoes.jpg", "Fabulous shoes made to your own design might not sound like part of your usual computer science career.<br>
'It sounds more fashion than technical, but it's all online so there are a lot of other skills that feed into it,' explains UNSW Australia computer science graduate Belinda Teh, who works as a software engineer for Shoes of Prey. 'It needs database management, web design and networking. I also work a lot with graphics, scripting and 3D rendering.'<br>
Bel's parents exposed her to the same activities as her brother from a young age, including Dick Smith electronics workshops. Always interested in maths and science, she considered studying electrical engineering, but chose CS because of the amazing projects she could get involved in – and she hasn't looked back since.<br>
Bel was part of UNSW Australia's winning team in the 2014 RoboCup tournament in Brazil. She was in charge of programming the robots' kicking action – to control details such as where to kick the ball, how to get the ball to a particular spot at a particular speed, and so on.<br>
'The idea is to code robots to play soccer and continually improve so that by 2050 we will have robots that can play against humans!'<br>
One day, Bel hopes to work for SpaceX – a company that designs, makes and launches spacecraft. 'I'd love to go to Mars!'<br>
Credit for original article: https://careerswithstem.com.au/profiles/belinda-teh/"),


("2018-05-12",2, 3, "An ex-Facebook exec making wearable MRI device", "uploads/12_ExFacebook_Exec_Making_device.jpg", "An ex-Facebook exec who 'went home to die' is making a device to scrap the costly procedure that almost didn't save her<br>
Former Facebook executive Mary Lou Jepsen said a near-death experience inspired her latest project, a device that she said would let us 'look inside any part of the body'.<br>
Jepsen has been vague about the technology but said it would be affordable and wearable with MRI-like capabilities.<br>
She claims the device could have a broad range of applications, including learning more about a range of mental illnesses as well as heart disease and certain types of cancer, but has yet to release further details.<br>
<br>
A brush with death inspired ex-Facebook executive Mary Lou Jepsen's latest venture - a technology that she claims will enable us to peek inside our bodies and brains.<br>
'Why let people suffer if we can find out what's really going on?' Jepsen said at the Rock Health Summit in San Francisco on Tuesday. Her new technology, she explained, 'can look inside your body - at any part of the body - in high resolution.'<br>
She was first inspired to delve into the project after learning she had a brain tumour as a graduate student in her 20s. For months, Jepsen struggled with debilitating headaches, but she had no idea what was wrong until she finally got an MRI - a costly scan of her brain that can only be done in specially-equipped hospitals. Even today, 20 years after Jepsen had her test, the procedure remains a scary ordeal for many people - particularly those with an existing fear of small spaces. Climbing inside a tiny, human-sized enclave where you'll be unable to move and subjected to loud, pulsating sounds that clamour around your body for up to 30 minutes is no walk in the park. The bigger problem, though, is that many diseases that can only be diagnosed with an MRI give very few clues that suggest the procedure is necessary. Jepsen went months with no idea what was going on inside her brain.<br>
'I nearly died - I literally went home to die - because I didn't know I needed an MRI,' Jepsen said.<br>
Now Jepsen is working on something that would replace the machine - which costs hospitals roughly $3 million to buy and costs consumers about $2,600 per test - with something people could wear potentially all the time.<br>
Dozens of unanswered questions about Jepsen's mysterious device remain. In August, Jepsen announced she was leaving her one-year stint at Facebook - where she had served as the company's executive director of engineering and the head of display technologies at its virtual reality arm Oculus - to work on the project, which she described then as a 'new imaging technology' that would help 'cure diseases.' Jepsen added that the device would shrink down the capabilities of an MRI into something affordable that people could wear, like a hat.<br>
MRIs use radio waves and strong magnets to create pictures of organs and structures inside the body. In Jepsen's case, the test was used to spot a tumor in her brain.<br>
Jepsen's new tool would do the same thing, but instead of using strong magnets, it would use near-infrared light - a type of light that can penetrate cells and approximate blood flow by distinguishing between blood that has been oxygenated and is flowing away from the heart and blood that has not been oxygenated and is flowing towards it, she said on Tuesday. 'Oxygenated blood and deoxygenated blood are different colors,' Jepsen said.<br>
A preliminary version of the device, she said, has allowed her to get a more accurate and defined picture of the inner-workings of the brain and body than the fuzzy, pixelated images generated by existing MRI machines. 'We got a billion times higher resolution than an MRI,' Jepsen said.<br>
It's still unclear exactly what the new device will be called and how far along in development it is, but Jepsen said she could see it being used for a variety of applications, from peeking inside the brain - where it could potentially improve our understanding of mental illnesses like depression- to glimpsing the inner-workings of the heart or tumours - where it could help treat diseases like cancer and heart disease.<br>
'You can buy a blood pressure cuff,' Jepsen said. 'How come you can't look inside your body?'<br>
<br>
Credit for original article: http://uk.businessinsider.com/mary-lou-jepsen-device-replace-mri-see-inside-brain-2017-10"),



("2018-05-13",3, 5, "My 18-month Coding Journey", "uploads/13_My_18month_Coding_Journey.jpg", "How I went from 33-year-old museum tour guide to professional Web Developer and UX Designer: My 18-month coding journey<br>
My story is a bit different from the stories you have read so many times. I did not get my first web development job in 3 months. Not in 6 months. Not even in a year. My journey took 18 months, which were tough and frustrating but also exciting and amazing.<br>
My background, like many other self taught developers, is one that seems as far as possible from any type of technology. I have a Master's degree in History. I worked as a guide in a museum, as a group facilitator in a non-profit organisation, and as a teacher. I loved all of these roles. Otherwise, I wouldn't have chosen to spend my time doing them.<br>
At some point I decided to change it all. I wanted to make a bigger impact through my work, especially in non-profit organistions. In addition, after living in 3 countries (in 3 continents) in 6 years, I wanted to start a career that would not require me to find a new job and even a new field each time I move.<br>
I didn't need much research to conclude that technology can answer both goals. It can fill my passion to contribute in a (probably the most) meaningful way and it could offer me the freedom to move and relocate while continuing my work.<br>
I quit my great job as a teacher, left a nice salary and job security behind, and started to be a 'full time web development self learner.' That was my title for quite a long time.<br>
I began learning web development by myself, thinking (after reading some impressive stories here) that all it would take is hard work and 3 to 4 months of studies, and I will be hired as a full time web developer.<br>
The journey that was ahead of me was very different than what expected. It was much harder than I could imagine. It was confusing, challenging, and made me wonder over and over again if I chose the right path or if I should admit that this is not for me.<br>
It's hard and maybe impossible to point out what exactly made my journey different from all of the amazing success stories I've read, but a few things immediately come to mind.<br>
Not all people thrive alone<br>
I'm a people person. I love to be with others, to collaborate, talk, and struggle together. I'm less happy when I'm by myself for a long time because I enjoy the company of others.<br>
Studying by myself for most of the day, most days, was one of the things that I won't miss.<br>
Not all people love challenges<br>
I need to be very brave to admit that not all challenges make me happy and push me to improve myself. Some definitely do.<br>
I ran two half marathons (does that count as completing one full marathon?) and it was challenging. I completed a Tough Mudder, and it was challenging. I relocated, including to places where I didn't speak the language, and it was challenging.<br>
Although these challenges were amazing and enjoyable, many others were not. I am eager to overcome challenges when I choose them, understand them, and know what I am accepting. In the case of web development I didn't realise well enough what were the challenges I was going to face. I only came to understand the scope of these challenges further down the road, and that was a tough revelation. Instead of getting excited, I became frustrated.<br>
Not everyone is made for coding<br>
Wait a second. Don't eat me alive. I'm not saying that not everyone can learn how to code if they want and put the time and effort. I am just saying that we don't have the same background, the same way of thinking, and the same intuitions, so the learning process will vary between people. No doubt about that.<br>
When I decided to learn web development, I had no background whatsoever. I never never never saw myself doing anything that was tech related beyond merely consuming technology like everyone else does.<br>
For me, learning web development was like jumping into a deep ocean all at once. I remember one conversation I had with my partner a few weeks after I started to learn JavaScript. He had some high school and basic university background in programming, and he tried to explain to me how to solve an early freeCodeCamp challenge. I couldn't understand what it meant to have an array of elements and what it meant to push an item to the array. The concept was totally foreign to me.<br>
I've since realised that not everyone is made for coding. It comes naturally to some people. Others have been introduced to the basic coding concepts and way of thinking at a young age.<br>
But for some of us it comes for the first time at age 33, when we have never heard of anything that is even in the same universe as programming concepts.<br>
Yep, that's me. I mean, that was me. I figured out the push method, and have since turned 34.<br>
My no-regrets dive into the web development ocean<br>
Now I have to stop and make sure that I explain myself correctly. I do not regret any of this. If I could decide again, I would take the same path. But I would also make sure that I knew what I was actually committing to. I would align my expectations with reality.<br>
There is no one way or one answer, but better researching about this journey, before committing to it, could have made a huge difference in the way I experienced things.<br>
So how did I eventually make it? Thinking retrospectively, there were a few things that helped me overcome these challenges. Before I list them, I have to admit that I've read many similar lists and I've tried to follow some of them closely, but none of them worked exactly the same way for me.<br>
Lessons from the long road<br>
At the end of the day, this is a personal journey, so some of the things you read can help you, while others can put you down or just waste your time. I am sharing what I've been through, but I'm not saying that this is the winning recipe or the secret magic for your success as well.<br>
Have a goal<br>
Remind yourself what is your goal. What is your goal for this week? For this month? For this year? And above all - for your journey.<br>
You can't do it if you don't have a clear goal, something to look forward to. I'm not saying that it was always clear to me - I wish it were. But the 'what is your goal' question kept presenting itself, and I had to explain to myself why am I doing this. These were the times when my goal and my finish line became clearer.<br>
Be honest with yourself<br>
This one is a bit odd, I know, but it is one of the most important things I have realised. You will hear so many times what is considered better in web development. Backend vs. Frontend, React vs. Vue, Visual Studio Code vs. Atom, Vanilla JS vs. jQuery, Express vs. Hapi, and so on. So many opinions and beliefs. It can be very confusing. It confused me.<br>
I wanted to prove that I can do everything, understand everything, and be good at everything. And guess what? I was following others' opinions instead of creating my own.<br>
I enjoyed some aspects of web development more than others. I struggled with some concepts more than with others. I was happy to write code with some languages and libraries more than with others. So why not create my own path? If people think that X is better than Y, does it mean that Y is mybest option?<br>
Being honest was relieving. It helped me enjoy what I do. I struggled with the challenges I faced, but those were my challenges - not someone else's. And I was able to channel my creativity by using the tools and technologies that personally excited me.<br>
Join communities<br>
It's hard to convey how important it is to become a part of the community of developers, and have those developers around you.<br>
In my case, it was mostly a virtual community of people from all over the world. And sometimes I was lucky enough to meet people in person and even be a part of a community where I've lived.<br>
It doesn't matter in what shape or form your community is. As long as you know other people who struggle with you, other people who share similar passions to yours, other people you can look at and tell yourself: 'this is how I want to be in the future.' People you can ask for help when you have a question, people you can help when they struggle with something that you've already figured out, and people you can rely on when you need some motivation.<br>
And just don't give up<br>
At the end of the day, you have to believe that you can do this.<br>
For long periods of time I had my doubts, but at no point did I get to a place where I felt like I was done trying. I always knew that I could do better, improve, learn, and eventually find a way to make it.<br>
I was very lucky in two important ways. (Yes, luck is another big factor!) The first was the people and communities I found along the way. And the second is was the place I ended up living in.<br>
The next step in my coding journey<br>
My journey took a very long time and put a lot of pressure on me, on my relationships, and on my partner. But I believe it was worth it. It pushed me to new places, showed me new sides of myself, and gave me the skills and strength I wanted.<br>
The journey is still going. It has no finish line. The good thing is that there are many peaks to reach and mountains to climb. I am happy to know that I have already accomplished some of these goals and I am excited for the others that will come.<br>
<br>
Credit for original article: https://medium.freecodecamp.org/the-post-i-hoped-to-write-for-18-months-2902d074f5ba"),



("2018-05-24",3, 2, "How to Layout and Design a Website", "uploads/14_How_to_Design_Website.jpg", "How to layout and design a website (without any design skills)<br>
<br>
If you're trying to build freelance websites for clients, or even just trying to build up your portfolio, you may have come across this conundrum: How do you build a website if you don't have any web design skills?<br>
Here are some options:<br>
	⁃	You could hire a web designer to create the design for you - but (good) designers aren't cheap.<br>
	⁃	You could find a cheap designer on Fiverr or Upwork - but you know it can be risky.<br>
	⁃	Or you could download a free or premium theme or template - but sometimes they don't do everything you want them to.<br>
<br>
One other option for you is to learn some basic skills to layout and design websites, and to build your own front end out.<br>
Now, you're not going to become an amazing designer in the time it takes you to read this article. And for complex websites, you may end up needing to work with a professional designer. But I believe that you can learn how to plan and design simple websites that would work for most small businesses.<br>
This method involves:<br>
	⁃	Learning the basics of how websites are put together visually<br>
	⁃	Researching existing web designs to get inspiration and ideas for yourself.<br>
<br>
It's actually the strategy that I used to build my own website! Granted, it's a pretty simple design, nothing overly fancy. But sometimes simple is all you need.<br>
Once you know the basics of how to layout and design for the web, you'll be able to build custom websites that you can use for your portfolio and freelance clients.<br>
And, of course, each website you build will give you experience. Over time, you will be able to create more and more complex designs as you continue practicing your craft.<br>
Here are the main steps of this process:<br>
<br>
	⁃	Decide the basics of your website<br>
	⁃	Plan the layout of your website<br>
	⁃	Put the design together<br>
	⁃	Build out the final product<br>
<br>
Each step will be fuelled by research - looking at other websites to see what they do, and pulling out the parts that you want to reuse for your website.<br>
One important note: I'm not at all advocating that you steal CSS or images that aren't yours. (For one thing, you won't learn anything with a copy and paste job.)<br>
The idea here is to get creative ideas and concepts, and use them to create something similar.<br>
<br>
Before you start picking colours or fonts, let's answer some general questions about this website:<br>
<br>
What kind of business will the website promote?<br>
A pizza place, photographer's studio, or bookstore? Any kind of business could benefit from a website, so you can choose anything.<br>
For our purposes here, we'll choose a fictional coffee shop called Central Coffee. Because everyone likes coffee, right?<br>
<br>
What pages will the website have?<br>
Some common pages would be the homepage, about page, contact page, and pages specific to the industry that the business is in.<br>
The best way to figure out the pages and other general structural aspects of the website is to do some quick online research.<br>
<br>
Research existing websites<br>
Check out other existing websites for similar types of businesses. Look at 3–4 of these websites and see what pages they have. Try to notice how the website is designed and take notes on:<br>
		What pages the website has,<br>
		What the overall style is,<br>
		How easy it is to navigate and find things,<br>
		And anything else that piques your interest.<br>
<br>
One good place to find example websites is Theme Forest. It has a ton of free and premium website templates and WordPress themes. And if you stick with the most popular themes, you know that generally they will be examples of good designs.<br>
<br>
Write down notes for your own website<br>
Now, after looking at multiple websites, we have a much better idea of what features are common. And we have some ideas of what we think works and doesn't work.<br>
Based on your research, you can now start writing down notes for your own site.<br>
<br>
Plan the layout of your website<br>
Now that we've figured out the skeleton of the site, we'll flesh out each page or section with the elements that we want to put in each one. The layout that we'll end up making is also called a wireframe.  In the wireframe, we're not exactly designing anything, meaning no fonts, colours, or photos yet. We're just figuring out the kind of content that we want, and roughly where it will be on the page. It's more like a blueprint or a diagram at this point. We do need to figure out some of the basics though. Things like:<br>
<br>
Colour scheme<br>
The colour scheme is simply the different colours you're using on the website. Think of it like painting and decorating your house. Usually you would want to stick with neutral tones like greys and white, for most of the spaces. And one or two bright accent colours for the important elements that you want to pop out, like links and buttons.<br>
If you need some colour inspiration, Canva has some sample colour palettes that you can try out.<br>
<br>
Fonts<br>
Going back through the websites, pretty much all of them use a sans-serif font (letters that don't have the 'serif,' or the end bars on like typewriter text).<br>
I would pick a simple font for the majority of your text, and then you can go slightly more fancy with a heavier weight font for the titles and headlines.<br>
Google Fonts is a great place to look for fonts that you can load on your website for free. Just don't get too many, because every font family, weight, and style will add additional load to the site.<br>
<br>
Images/Photography<br>
Pick a general style or mood that fits the type of business the website is. For a coffee shop, you generally would want to go with inviting pictures with soft light, cozy or nostalgic feel for interior shots, people chatting and relaxing in the coffee shop, and images of food and drink.<br>
For illustrations and logos, there are some free online graphic design tools that come with images you can use on your website.<br>
<br>
Build out the website<br>
Now we have wireframes to tell us generally how everything is laid out. And we have our design references, to help guide the front end styles. Since we don't have a designer to create detailed PSDs, we will just go ahead and start building the website from the wireframes we just drew up.<br>
Here is how I usually approach building the front end of a website:<br>
	.	Set up the website files<br>
	.	Create and structure the folders and files.<br>
	.	Get the task runner up and running. (I'm using Gulp for this project.)<br>
	.	Create a separate HTML file for each template.<br>
	.<br>
Then go through these steps for each HTML template:<br>
	.	Create the skeleton structure with the basic HTML elements.<br>
	.	Build out the page elements one by one.<br>
	.	For each element, add in the CSS styles, first making sure each section is laid out correctly.<br>
	.	Check how the page looks in the browser as you work, continuing to make corrections.<br>
	.<br>
Make sure your website is responsive<br>
While you're building a site, it's generally a good idea to check that your styles are looking seamless on desktop, tablet, and mobile. You can easily check desktop styles on your own computer, with different browsers. For mobile, you can use Chrome's developer tools, which emulates websites on various mobile devices.<br>
Keep in mind that any emulation tool will not be 100% exactly like what the actual phone or tablet will see. So when testing your styles, you'll eventually want to check it on a real phone when the website is on the internet.<br>
Here are some device emulators that you can use to test website display:<br>
		Responsinator.com (free)<br>
		Screenfly by Quirktools (free)<br>
		Browserstack (paid) <br>
<br>
The finished product!<br>
And that's how I designed and built a website, without having to hire a designer.<br>
I hope you found this post helpful!<br>
<br>
Credit for original article: https://medium.freecodecamp.org/how-to-layout-and-design-a-website-without-any-design-skills-86d94e40b55a"),


("2018-05-15",3, 17, "Increase your Chances of a Landing a Developer Role", "uploads/15_Increase_Chances_of_Developer_Job.jpg", "How to increase your chances of landing a developer job<br>
<br>
In a recent job as a senior developer, I helped interview and hire many of my employer's development team members. This is a brain dump of my advice based on those interviews.<br>
I've followed a lot of it myself in interviewing for recent positions as a candidate. And I recommend these approaches to my friends when they're applying to development positions.<br>
<br>
How to write an enticing initial email or cover letter<br>
Start with a good hook:<br>
<br>
Hi Stacy,<br>
I saw your post looking for a Full-Stack PHP Developer. Well your search is over!<br>
I recently completed a project that also uses Laravel's Queue Workers and Task Scheduler. I've been through a lot of troubleshooting hours with these, and I'm sure those skills and my experience below will be very valuable to your development team.<br>
<br>
Whether you're writing an email or submitting a cover letter, the opening lines need to stick. The one above accomplishes a couple of things:<br>
	1.	The first sentence shows some enthusiasm for the position. Exclamation marks work great for this, but don't overdo it either. Make it natural.<br>
	2.	The first paragraph goes right into showing the proof in the pudding, as they say, by referencing a past project that relates to the job. By relating your experience to the job, you're immediately showing them the value you can bring to their team.<br>
<br>
To write that message effectively, take some time to thoroughly read the job description and company information to figure out what the best projects will be to showcase right away.<br>
<br>
Show off your passion<br>
People want to be around others who are passionate about something and are working on cool projects. The person hiring you feels this way, since they'll probably be seeing and communicating with you quite a bit if you get the job. From their perspective, it helps to hire someone interesting that they can talk to and learn from.<br>
<br>
Give them more of the good stuff<br>
Finish off by adding in your portfolio and GitHub links, and you'll have them excited to go and check those out.<br>
I always felt as if a weight had already been lifted off my shoulders whenever I read a great developer application. That's the feeling we're aiming to create for the person who's reading yours.<br>
<br>
Add precision to your portfolio<br>
Your portfolio should be as project-focused as possible. As soon as I visit your site, I should be able to see where the projects are.<br>
Choose quality over quantity by showing the projects that relate to the job. I would recommend moving around the order and even removing/hiding some projects depending on the job you're applying for.<br>
<br>
It may even hurt you to have a ton of projects, especially if they vary wildly in technologies. This is because some employers aren't crazy about generalists.<br>
<br>
Make sure the portfolio site is finely tuned<br>
The first thing any developer does when they see a site they're evaluating is resize the browser window back and forth. This is to make sure you have enough responsive skills for the position.<br>
<br>
Get creative with it<br>
Get creative with the layout and design of the portfolio, even if it's not a front-end position. Seeing something different will always stand out. Try not to use CSS templates as much as humanly possible. Some people will tell you not to use Bootstrap or jQuery at all on your portfolio site, since the employer may want to check out your raw CSS and JavaScript skills.<br>
If you're applying as a front-end developer, that advice is great. But I personally don't think it's important what you use, as long as it's creative and user-friendly.<br>
If you don't have an eye for design or enough CSS skills, try taking the simple and clean approach. You could also reach out to a front-end developer friend for help.<br>
Below is an example of a simple and clean portfolio site. Nothing too fancy happening, but it still sends a very professional and creative vibe.<br>
<br>
Don't put rating scales (like 80% Ruby, 95% JavaScript) in your portfolio. I've seen this before, and it's confusing to the reader since they won't have any idea how to interpret it.<br>
<br>
Let's move on to sprucing up your GitHub profile.<br>
As a developer working a full-time job, it can be tough to find the time to contribute to and create public projects. But it's one of those things where you just have to suck it up and do it.<br>
These days every developer needs some public code available. It makes it much easier for the person hiring you to quickly glance through your code to see if it's a good fit for them.<br>
If you don't have any public contributions yet, try adding one of your existing projects that you wouldn't mind being public. It's also never too late to start contributing.<br>
<br>
Make your GitHub profile presentable<br>
Make a good README for the projects your presenting<br>
Clean up your code<br>
Make good commit messages<br>
Collaborate<br>
<br>
Your Résumé<br>
This section is more of a tip. As a person hiring other developers, I'm going to spend much more time focusing on your actual projects and code than I will analysing the time line and bullet points in your résumé. I also couldn't care less about what school you went to. Those details may be great for other industries or companies, but I honestly don't see much use for résumés in the development world. Here, your actual work and code speak the loudest.<br>
Next time you're applying, instead of just polishing up your résumé, try spending more time on the points above and you'll be sure to stand out among the crowd of applicants.<br>
Thanks for reading!<br>
<br>
Credit for original article: https://medium.freecodecamp.org/how-to-increase-your-chances-of-landing-a-development-job-acb6759c66da");




INSERT INTO hashtags
(hashtag_id)
VALUES
("#WomenInTech"),
("#computerscience"),
("#entrepreneurship"),
("#femaleleaders"),
("#webdeveloper"),
("#creativity"),
("#study"),
("#STEM"),
("#employability"),
("#genderequality"),
("#codelikeagirl"),
("#hiddenfigures"),
("#entertainment"),
("#healthtech"),
("#AI"),
("#brain"),
("#Video");




INSERT INTO posts_hashtags
(post_id, hashtag_id)
VALUES
(1, "#WomenInTech"),
(2, "#WomenInTech"),
(3, "#WomenInTech"),
(4, "#WomenInTech"),
(5, "#WomenInTech"),
(6, "#WomenInTech"),
(7, "#WomenInTech"),
(8, "#WomenInTech"),
(9, "#WomenInTech"),
(10, "#WomenInTech"),
(11, "#WomenInTech"),
(12, "#WomenInTech"),
(13, "#WomenInTech"),
(14, "#WomenInTech"),
(15, "#WomenInTech"),
(1, "#computerscience"),
(2, "#computerscience"),
(3, "#computerscience"),
(4, "#computerscience"),
(7, "#computerscience"),
(8, "#computerscience"),
(9, "#computerscience"),
(10, "#computerscience"),
(11, "#computerscience"),
(12, "#computerscience"),
(13, "#computerscience"),
(14, "#computerscience"),
(15, "#computerscience"),
(1, "#entrepreneurship"),
(2, "#entrepreneurship"),
(3, "#entrepreneurship"),
(5, "#entrepreneurship"),
(6, "#entrepreneurship"),
(7, "#entrepreneurship"),
(9, "#entrepreneurship"),
(10, "#entrepreneurship"),
(11, "#entrepreneurship"),
(12, "#entrepreneurship"),
(13, "#entrepreneurship"),
(14, "#entrepreneurship"),
(1, "#femaleleaders"),
(2, "#femaleleaders"),
(3, "#femaleleaders"),
(4, "#femaleleaders"),
(5, "#femaleleaders"),
(6, "#femaleleaders"),
(7, "#femaleleaders"),
(10, "#femaleleaders"),
(11, "#femaleleaders"),
(12, "#femaleleaders"),
(13, "#femaleleaders"),
(2, "#webdeveloper"),
(3, "#webdeveloper"),
(6, "#webdeveloper"),
(8, "#webdeveloper"),
(9, "#webdeveloper"),
(11, "#webdeveloper"),
(13, "#webdeveloper"),
(14, "#webdeveloper"),
(15, "#webdeveloper"),
(1, "#creativity"),
(3, "#creativity"),
(5, "#creativity"),
(6, "#creativity"),
(7, "#creativity"),
(8, "#creativity"),
(9, "#creativity"),
(11, "#creativity"),
(14, "#creativity"),
(1, "#study"),
(2, "#study"),
(6, "#study"),
(13, "#study"),
(14, "#study"),
(15, "#study"),
(1, "#STEM"),
(2, "#STEM"),
(3, "#STEM"),
(4, "#STEM"),
(10, "#STEM"),
(11, "#STEM"),
(12, "#STEM"),
(1, "#employability"),
(2, "#employability"),
(5, "#employability"),
(6, "#employability"),
(8, "#employability"),
(13, "#employability"),
(14, "#employability"),
(15, "#employability"),
(1, "#genderequality"),
(2, "#genderequality"),
(3, "#genderequality"),
(4, "#genderequality"),
(5, "#genderequality"),
(8, "#genderequality"),
(1, "#codelikeagirl"),
(2, "#codelikeagirl"),
(3, "#codelikeagirl"),
(8, "#codelikeagirl"),
(13, "#codelikeagirl"),
(14, "#codelikeagirl"),
(1, "#hiddenfigures"),
(2, "#hiddenfigures"),
(4, "#hiddenfigures"),
(5, "#entertainment"),
(7, "#entertainment"),
(8, "#entertainment"),
(9, "#entertainment"),
(3, "#healthtech"),
(10, "#healthtech"),
(12, "#healthtech"),
(3, "#AI"),
(7, "#AI"),
(10, "#AI"),
(10, "#brain"),
(12, "#brain"),
(7, "#Video"),
(9, "#Video"),
(10, "#Video"),
(12, "#Video");



INSERT INTO favourites
(post_id, member_id)
VALUES
(1, 2),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 10),
(1, 13),
(1, 14),
(1, 18),
(2, 2),
(2, 5),
(2, 7),
(2, 9),
(2, 13),
(3, 1),
(3, 6),
(3, 8),
(3, 11),
(3, 12),
(3, 20),
(4, 2),
(4, 3),
(4, 7),
(4, 12),
(4, 13),
(5, 3),
(5, 6),
(5, 9),
(5, 14),
(6, 1),
(6, 4),
(6, 6),
(6, 9),
(6, 14),
(7, 3),
(7, 6),
(7, 11),
(7, 12),
(8, 2),
(8, 3),
(8, 6),
(8, 11),
(8, 12),
(9, 4),
(9, 8),
(9, 11),
(10, 1),
(10, 8),
(10, 10),
(10, 13),
(11, 5),
(11, 9),
(11, 11),
(12, 1),
(12, 10),
(12, 14),
(13, 2),
(13, 4),
(13, 7),
(13, 9),
(13, 11),
(13, 14),
(14, 3),
(14, 11),
(15, 2),
(15, 5),
(15, 10),
(15, 9),
(15, 13),
(15, 14);


INSERT INTO comments
(post_id, member_id, comment_content, comment_date, approved)
VALUES
(1, 2, "Great job!", "2018-05-11", 1),
(1, 4, "This inspires me so much", "2018-05-11", 1),
(1, 5, "Love this! thank you", "2018-05-11", 1),
(1, 6, "Amazing post", "2018-05-12", 1),
(1, 7, "Fantastic & inspiring", "2018-05-14", 1),
(1, 10, "Fabulous", "2018-05-14", 1),
(1, 13, "Well done, I really enjoyed this", "2018-05-16", 1),
(1, 14, "So interesting to read", "2018-05-17", 1),
(1, 15, "Such a good article", "2018-05-18", 1),
(1, 18, "Love it", "2018-05-18", 1),
(2, 2, "This inspires me so much", "2018-05-12", 1),
(2, 5, "Love this! thank you", "2018-05-13", 1),
(2, 7, "Amazing post", "2018-05-18", 1),
(2, 9, "Fantastic & inspiring", "2018-05-20", 1),
(2, 13, "Well done, I really enjoyed this", "2018-05-21", 1),
(3, 1, "Fantastic & inspiring", "2018-05-13",1),
(3, 6, "Well done, I really enjoyed this", "2018-05-13", 1),
(3, 8, "Great job!", "2018-05-15", 1),
(3, 11, "This inspires me so much", "2018-05-19", 1),
(3, 12, "Amazing post", "2018-05-20", 1),
(3, 20, "Fabulous", "2018-05-24", 1),
(4, 2, "Love this! thank you", "2018-05-14", 1),
(4, 3, "Great post", "2018-05-15", 1),
(4, 7, "Interesting", "2018-05-15", 1),
(4, 12, "Well done, I really enjoyed this", "2018-05-19", 1),
(4, 13, "Love this! thank you", "2018-05-23", 1),
(5, 3, "Amazing post", "2018-05-16", 1),
(5, 6, "Fantastic & inspiring", "2018-05-27", 1),
(5, 9, "This is interesting, thanks","2018-05-20", 1),
(5, 14, "Great job!", "2018-05-23", 1),
(6, 1, "Love this! thank you", "2018-05-16", 1),
(6, 4, "Amazing post", "2018-05-17", 1),
(6, 6, "This inspires me so much", "2018-05-20", 1),
(6, 9, "Fantastic & inspiring", "2018-05-23",1),
(6, 14, "Well done, I really enjoyed this", "2018-05-16", 1),
(7, 3, "Love this! thank you", "2018-05-17", 1),
(7, 6, "Amazing post", "2018-05-17", 1),
(7, 11, "Fantastic", "2018-05-18", 1),
(7, 12, "Well done, I really enjoyed this", "2018-05-19", 1),
(8, 2, "Amazing post", "2018-05-23", 1),
(8, 3, "A joy to read", "2018-05-18", 1),
(8, 6, "Love this! thank you", "2018-05-18", 1),
(8, 11, "Fantastic", "2018-05-22", 1),
(8, 12, "Well done, I really enjoyed this", "2018-05-25", 1),
(9, 4, "Amazing post", "2018-05-19", 1),
(9, 8, "A joy to read", "2018-05-20", 1),
(9, 11, "Well done, I really enjoyed this", "2018-05-25" ,1),
(10, 1, "Amazing", "2018-05-23", 1),
(10, 8, "So inspiring!", "2018-05-11",1),
(10, 10, "Love this! thank you", "2018-05-12", 1),
(10, 13, "This inspires me so much", "2018-05-17", 1),
(11, 5, "Amazing post", "2018-05-11", 1),
(11, 9, "Fantastic & inspiring", "2018-05-11", 1),
(11, 11, "Well done, I really enjoyed this", "2018-05-21", 1),
(12, 1, "Amazing post", "2018-05-23", 1),
(12, 10, "Fantastic & inspiring", "2018-05-23", 1),
(12, 14, "Love this! thank you", "2018-05-23", 1),
(13, 2, "Amazing post", "2018-05-13", 1),
(13, 4, "Great job!", "2018-05-13", 1),
(13, 7, "This inspires me so much", "2018-05-14", 1),
(13, 9, "Fantastic & inspiring", "2018-05-15", 1),
(13, 11, "Well done, I really enjoyed this", "2018-05-19", 1),
(13, 14, "Love this! thank you", "2018-05-23", 1),
(14, 3, "Amazing post", "2018-05-15", 1),
(14, 11, "Love this! thank you", "2018-05-16", 1),
(15, 10, "Amazing post", "2018-05-15", 1),
(15, 5, "Fantastic & interesting", "2018-05-26", 1),
(15, 2, "Well done, I really enjoyed this", "2018-05-24", 1),
(15, 9, "Love this! thank you", "2018-05-25", 1),
(15, 13, "A joy to read", "2018-05-25", 1),
(15, 14, "Great job!", "2018-05-25", 1),
(14, 5, "Sorry but this is not very good", "2018-05-16", 1),
(2, 1, "Sorry but this is not very good", "2018-05-14", 1),
(3, 14, "Sorry but this is not very good", "2018-05-16", 1),
(4, 9, "Nah, Did'nt enjoy this", "2018-05-17", 1),
(5, 4, "Didn't enjoy reading this", "2018-05-19", 1),
(5, 5, "Nah, not that interesting really", "2018-05-20", 1),
(6, 10, "Didn't like this, sorry", "2018-05-18", 1),
(7, 5, "Not the best article I've read", "2018-05-17", 1),
(8, 8, "Didn't enjoy this", "2018-05-23", 1),
(9, 9, "Not that good really","2018-05-22", 1),
(10, 3, "Didn't enjoy this", "2018-05-11", 1),
(13, 1, "Didn't enjoy this", "2018-05-14", 1),
(11, 13, "Sorry but this is not very good", "2018-05-16",1),
(12, 5, "Not the best article I've read", "2018-05-17", 1);
