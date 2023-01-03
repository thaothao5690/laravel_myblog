-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th2 16, 2023 lúc 03:34 PM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `content`, `created_at`, `updated_at`, `status`, `user_id`, `category_id`, `image`) VALUES
(1, 'Prof.', 'Odio molestias ut odit et id. Non debitis quos et adipisci cum quia sint. Quisquam consequatur veritatis incidunt dolor.', 'Voluptas ab enim veritatis dolor nesciunt dolores omnis sit. Quas voluptatum doloremque eos. Molestias temporibus nobis atque ipsum molestiae aut ut dignissimos. Provident rerum ratione quod quae quia.', '2022-12-15 00:25:25', '2022-12-25 21:02:16', 0, 1, 1, 'blog.jpg'),
(2, 'Miss', 'Quia culpa exercitationem sit. Ipsam fugit quia veniam quam sunt commodi.', 'In unde sit qui. Sit pariatur quia exercitationem aspernatur quidem quia. Rem voluptatibus laboriosam dolorem quaerat saepe dolores. Aliquid magnam alias quisquam corporis sequi vero.', '2022-12-15 00:25:26', '2022-12-15 00:25:26', -1, 1, 1, 'blog.jpg'),
(3, 'Ms.', 'Qui tenetur accusantium voluptatibus impedit dolorum mollitia. Eius iste omnis impedit distinctio et nihil. Harum accusamus voluptatem ut vitae deserunt hic.', 'Qui explicabo voluptatum alias hic quia quaerat ut ex. Cumque ipsum facere nostrum vel cupiditate reiciendis. Facilis et iste eos omnis quis facere.', '2022-12-15 00:25:27', '2022-12-15 00:25:27', -1, 1, 2, 'blog.jpg'),
(4, 'Ms.', 'Error sint consequatur explicabo eos soluta quia. Consequatur qui fuga consequatur officiis doloribus vel accusantium aut. Hic omnis ut asperiores voluptatem accusamus.', 'Magni voluptate repellat eveniet nihil. Labore aut qui doloremque. Veniam facere consectetur et consequatur rem fugit voluptatibus. Maxime quidem sint veritatis reprehenderit consequatur nesciunt vel numquam.', '2022-12-15 00:25:28', '2022-12-15 00:25:28', 10, 1, 6, 'image1671092337-snsd-15655270279711489799383.png.png'),
(5, 'Testtt', 'asa', 'asas', '2022-12-15 00:25:56', '2022-12-15 00:26:12', -1, 1, 4, 'blog.jpg'),
(7, 'asx', 'asx', 'ax', '2022-12-15 01:34:24', '2022-12-15 01:34:24', -1, 1, 3, 'blog.jpg'),
(8, 'newasd', 'asx', 'ax', '2022-12-15 01:42:51', '2022-12-15 01:42:51', -1, 1, 3, 'blog.jpg'),
(9, 'asdsadad', 'asda', 'ds', '2022-12-15 01:43:57', '2022-12-26 19:22:17', 0, 1, 3, 'blog.jpg'),
(11, 'If Podcasts Are the New Blogs, Enjoy the Golden Age While It Lasts', 'Podcasts hold the promise of a great new democratized medium. But how many blogs do you read now?', 'SERIAL is back! Oh boy! The podcast that introduced a host of listeners to the medium last year with its 12-episode true crime series about the 1999 murder of Maryland high school student Hae Min Lee has just released the second episode of its second season. In the year since Serial has launched, some tantalizing questions have lingered: Are podcasts the next great storytelling platform? And: should we all be recording podcasts, too?\n\nIt’s the golden age of podcasting, and the format is open to anyone with a laptop, a microphone, and access to a web server. A host of audio producers, many trained by Ira Glass, are creating narrative series with the same quality and creativity as the 20-year-old radio documentary show This American Life. Media companies from TED to The New York Times are piloting shows. Businesses are testing them out as content marketing. And hell, if you want to make a podcast about your stamp-collecting obsession, you can do it. Surely there’s money to be made—and audience to be had—somewhere. It all feels very familiar. As Joshua Benton wrote for NiemanLab, podcasts in 2015 feel a lot like blogs did a decade ago.\n\nLike those blogs of yesteryear, the promise feels huge. But as that brief era also taught us, the golden age doesn\'t last.\n\nLink to the Past\nIn 2005, BusinessWeek featured a cover story on blogs. To give you an idea just how early 2005 was, the story defined “links” for readers: “These are underlined words that, when clicked, carry readers of this story\'s online version to another Web page.” Blogs had already been around for a while, but thanks to new software products like Wordpress and Blogger, anyone could start one very easily for free. At the time, BusinessWeek estimated 40,000 new blogs were popping up every day.\n\nSuddenly, everyone could be a publisher, but no one knew exactly how to classify the medium. Was it journalism? Advertisers didn’t know how to best use blogs to reach their targets. And no one was reading most of them. A Pew Research Center survey quoted in that article suggested only 27 percent of Internet users paid any attention to them.\n\nModern day podcasts are in a similar position. They’ve been around for a long time. But this year, prompted by popular shows like Serial, and enabled in part by an iOS update that improved the purple podcast icon on the iPhone home screen, they\'ve sprung into the mainstream: iTunes lists 16 categories of podcasts, and though no one\'s measuring exactly how many exist, most estimates suggest somewhere around 180,000 are currently active.\n\nStill, most people still haven’t figured out how to listen to them yet. A Pew research center study from April—several months after Serial hit 5 million listeners in record time—suggested only 17 percent of Americans had ever listened to a podcast. And they’re not particularly easy to discover. If you like one, it is hard to share. What’s more, podcasts quickly shake out to a thin sliver of popular, highly produced shows and a long tail of everything else. Serial is expensive to make. Former This American Life producer and Planet Money co-creator Alex Blumberg, created an entire podcast series around the expense and struggle of trying to get his podcasting startup, Gimlet Media, off the ground.\n\nA Captive Audience\nDespite the challenges, ad dollars are flowing to podcasts. And it’s no wonder. Podcasts command the captive attention of their audiences like few other media. An endorsement coming straight from the mouth of a trusted podcast host feels intimate and authentic. And it’s much harder to click away to another screen or channel surf while you listen.\n\nScripps-owned Midroll, which matches podcasts with advertisers and takes a cut, says that of its 2,000 clients, a handful make more than $1 million a year. Right now, the CPM rate, or the cost per one thousand ad impressions, is much higher than other forms of media. Consider that in 2014, YouTube’s CPM was reported at $14.72. Midroll reports that some of its shows report a rate of near $100, and the average is $25. But as Nicholas Quah, who writes a newsletter on podcasts, points out, it’s not clear whether podcasts will be able to justify or sustain high CPMs once the novelty wears off and the nascent analytics catch up. (Right now, there’s not much by way of data to signal how long people are listening once they’ve downloaded a podcast.)\n\nIn It for the Attention\nBack in the early days of blogs, we thought they would change everything. Well, they did—but not in the ways we predicted. At first, everyone started their own blogs. Then a small group of professionals built digital empires that were not so dissimilar from the media companies to which they often eventually sold. AOL, now owned by Verizon, paid $25 million for Techcrunch in 2010 and then $350 million for the blog HuffingtonPost (yep, that was considered a blog) in 2011. Vox Media, itself akin to what once would have been called a blog network, paid between $20-30 million in 2013 to acquire real estate blog brand Curbed, which had started in the medium\'s early days.\n\nBut then came social media and the rise of microblogging. The rest of us moved on to new social platforms that provided not just the publishing tools, but a captive audience of people we knew. We weren’t in it for the money; we wanted the attention. First, social networks like MySpace and Facebook lured us. Then we moved on to Twitter, where we could express our blog posts in 140-character bursts to large audiences.\n\nThe same type of shakeout could be just up ahead for podcasting. The opportunity is amazing, but it is just so new. No Wordpress for podcasting exists yet, no easy platform for newbies to find and publish and share their own audio clips. So for now, I’ll listen to Serial, hold off on starting my own podcast—and see where the creativity of a nascent industry takes our voices.', '2022-12-16 00:39:24', '2022-12-16 00:39:24', 10, 1, 5, 'image1671176364-75521750_746980042484991_661065857073414144_n.jpg'),
(12, 'What I Learned Writing A Brain Blog For 17 Months', 'Brain myths die hard, and other things I learned from writing WIRED\'s popular Brain Watch blog for 17 months.', 'NOVEMBER 2013, I proudly launched the Brain Watch blog here at WIRED. This will be my final post. For seventeen months I’ve used the blog to report on new neuroscience findings, to reflect on how neuroscience is influencing the public and media, to investigate the claims of brain products, to explore neurological abnormality and death, and to debunk misconceptions about the brain. I loved reading your comments and I was thrilled when I found my ideas from here quoted in other publications. It’s been a lot of fun. Here’s some of what I learned:\r\n\r\nBrain myths die hard\r\nWhen the movie Lucy came out last year, it provided me an opportunity to challenge the 10% brain myth and explore its origins (the idea we only use 10% of our brains is a premise of the film). With such tired myths, it’s easy to wonder if anybody believes them anymore. Writing this blog, I learned not to underestimate their staying power! Consider the vitriol my 10% post attracted from a neuroscience grad student at Yale. In an email dripping with disdain she told me “You … should feel ashamed for releasing such a misinformed article. … There are misinformed and uneducated people all over the internet trying to disprove this 10% notion, but that is expected. This is certainly NOT something I expected from someone allegedly as well educated as yourself.”\r\n\r\nBrain science is confusing and complicated\r\nHardly a revelation, you might say. But writing this blog brought home to me the messy reality of neuroscience. Consider how tabloid papers like dividing the world into those activities and technologies that cause brain shrinkage and those that cause brain growth – the implicit assumption always being that growth is good and shrinkage bad. Yet real brain science does not sit well with such simplistic notions. Just look at the brain scanning study of elite chess players I reported on last Fall. These clever players didn’t have huge bulbous temporal lobes for remembering their chess formations. Nor did they have massively engorged frontal gyri for considering multiple moves at once. Rather, they had shrunken grey matter in the occipital-temporal junction and reduced bushiness along a key communication tract. The findings are “difficult to explain on the basis of current knowledge”, the researchers said. In the many papers I read for this blog, such admissions of ignorance were a common occurrence.\r\n\r\nMany brain-branded products are founded on hype and spurious science\r\nA popular route for many manufacturers and developers today is to tell you that they’ve worked with top neuroscientists to use the latest brain science to create a product that can transform your life, usually through increases to your productivity or concentration power. To take just one example, last year I looked at a music app that says it uses neuroscience insights to help you ignore background distractions, ultimately boosting your brain power by 400%. However, I found that the app’s scientific claims were unsubstantiated, and that its website made multiple gratuitous references to the brain, alongside many confused appeals to psychological theory. While writing this blog, I often received unsolicited emails from PR companies, among them were claims for neuroscience-inspired cognitive training, recruitment, drinks and more. It rarely took long to discover that many of these products’ references to neuroscience were over-stated and their claims over-hyped.\r\n\r\nPeople are hungry for neuroscience insights into everyday experiences\r\nA lot of neuroscientists and journalists fall victim to a fallacy known as “neuro-realism” – the idea that evidence based on the brain is somehow more persuasive or fundamental than psychological or social data. This was true of a study of humiliation I covered last May (the researchers claimed their crude brain recordings proved the emotion is highly intense), and a brain scanning study of the effects of reading novels I covered in January 2014. In each case, the brain data was used to give neuroscientific weight to what we already know, without adding much new. One of the researchers in the study of reading actually said: “We already knew that good stories can put you in someone else’s shoes in a figurative sense. Now we’re seeing that something may also be happening biologically.”\r\n\r\nSometimes, brain activity data really does add something – I felt that way about a study of teenagers’ reactions to their moms\' criticism (there was evidence of their emotional control centers shutting down), and about a study of how we react to celebrity gossip (participants’ brain activity suggested they found it more rewarding than they admitted). My posts on both these studies led to lots of media interest and invitations for me to appear on radio to discuss the findings. I think this shows the public appetite for using neuroscience to better understand everyday experiences.\r\n\r\nOf course, there’s often a fine line between falling for neurorealism and uncovering genuine brain-based revelations. It\'s a high-wire I enjoy walking. I will miss Brain Watch and my readers here, but I\'m grateful for the opportunity I had. I continue to write about the mind and brain elsewhere – please stay tuned to my twitter feed @Psych_Writer for updates. Thanks for your attention and, for now, goodbye!', '2022-12-16 00:43:03', '2022-12-16 00:43:03', 10, 1, 5, 'image1671176583-83726948_186884935837645_3613007440938795008_o.jpg'),
(13, 'Peak Newsletter? That Was 80 Years Ago', 'In the 1940s, journalists fled traditional news outlets to write directly for subscribers. What happened next may be a warning.', 'BY THE TIME Claud Cockburn resigned from his post as foreign correspondent for The Times of London, he’d grown sick of the newspaper’s conservative streak. But even as a freelancer, he continued to struggle with what he saw as the media’s complacency toward the rise of ultra-nationalist movements around the world. So he tried a new approach: He’d start a newsletter, and make himself a brand.\r\n\r\nCockburn’s first issue went out to subscribers in March 1933.\r\n\r\nSUBSCRIBE\r\nImage may contain Pac Man and Rug\r\nSubscribe to WIRED and stay smart with more of your favorite Ideas writers.\r\nProduced from his one-room London office on a mimeograph machine, The Week would be unafraid to attack extremists such as Mussolini. His subscriber list started at just seven, but it soon grew to include even Charlie Chaplin and King Edward VII, among many others. In one of Cockburn’s biggest scoops, in June 1936, The Week broke the story that “a Fascist putsch by the higher ranks of the army officers” was underway in Spain. A month later, as predicted, a coup set the stage for the fascist leader Francisco Franco to come to power.\r\n\r\nCockburn was among a crop of journalists during the mid-20th century who turned their back on traditional media and used the mimeograph to go directly to their readers. If that sounds familiar, it\'s because we’ve lately seen the rise of staff-journalists-turned-newsletter-writers, such as Emily Atkin (formerly of The New Republic, now Heated), Judd Legum (formerly of ThinkProgress, now Popular Information), and, most recently, Casey Newton (formerly of the Verge, now Platformer). These writers have leveraged paid subscriptions on personal platforms to report and write full-time for a private audience. Many publications are hailing our arrival at this moment of Peak Newsletter. But they’re forgetting Cockburn and his colleagues.\r\n\r\nIn the 1930s, as today, the shift to newsletters arose amidst a crisis of confidence in the newspaper industry and was enabled by the spread of new technology. Though the first mimeograph had been licensed at the end of the 19th century, a mass-produced version of the machine ballooned in popularity around World War II. Now, regular people could become their own publishers for a one-time cost of just $50 to $100—equivalent to about $500 to $1,000 in today’s dollars. Radical poets like Allen Ginsburg used mimeographs to sell chapbooks, while genre aficionados relied on them to print science-fiction fanzines. Mimeographs also fueled the growth of marginalized communities: Some of the earliest gay publications, like the 1950s lesbian newsletter The Ladder, ran on the machine.\r\n\r\nBut there was another reason that media newsletters started to take off around the 1940s. At the time, public trust in mainstream media was wavering. Newspapers were making good money, but they were also increasingly turning into a monopoly. From 1923 to 1943, the number of US towns with at least two daily papers dropped from 502 to 137, according to media historian Victor Pickard’s book America’s Battle for Media Democracy. Congress threatened to investigate.\r\n\r\nAt the time, the popular perception was that newspapers were a bastion of conservative, not liberal, politics, driven by the interests of big business. By the end of the 1930s, many papers were fiercely opposed to the New Deal and to labor organizing, stances that would alienate large numbers of readers. As Pickard shows, the growing market consolidation, paired with these ideological concerns, led thousands of Americans in the 1940s to pack panels with titles like “Is the American Press Really Free?”\r\n\r\nIt also pushed some of the nation’s leading journalists to publish independently. In 1940 an entrepreneurial Chicago Tribune journalist named George Seldes quit his job to launch a newsletter. Newspapers, Seldes said, were “on the side of the free enterprise profits at public expense.” Like Claud Cockburn before him, Seldes wanted to print the stories that he felt the mainstream press had ignored. He called his publication In Fact, and labeled it “an Antidote for Falsehood in the Daily Press.”\r\n\r\nIn Fact was a 4-page news sheet written almost entirely by Seldes, and it sold for two cents. Seldes attacked newspapers that took ad money from tobacco companies and failed to report on the health risks of cigarettes. He went after strike-breakers. He reported on the FBI’s surveillance of unions (and drew FBI attention of his own). At its peak, 176,000 people were reading In Fact—including Eleanor Roosevelt, Harry Truman, and “approximately 20 senators,” according to The Washington Post.\r\n\r\nIn some ways, Seldes brought Cockburn’s newsletter model to the American mainstream. “The tendency of reporters to leave their job and strike out on their own to report, I think Seldes is a really important figure in that,” said A. J. Bauer, a media professor at NYU.\r\n\r\nIn Fact certainly influenced Seldes’ friend, the leftist journalist I. F. Stone. Stone had left a job at the New York Post in 1939, and joined the staff of The Nation the next year. He bounced between jobs throughout the 1940s, including short stints at left-leaning papers like PM and The New York Star. Both publications quickly folded. Left-wing media was struggling, but Stone insisted to a friend he was “going to keep on fighting if I have to crank out a paper on a mimeograph machine in the cellar.” Which, by 1953, is what he did. I.F. Stone’s Weekly would be published for 20 years, earning 70,000 subscribers and a spot on NYU’s top works of journalism of the 20th century.\r\n\r\nNeither Stone nor Seldes built audiences entirely on their own. Left-wing newsstands and bookstores carried their newsletters, says Bauer, and unions bought subscriptions for their members. Seldes was particularly reliant on the labor movement, and he paid the price when the Red Scare frightened unions out of associating with him. He ceased publication of In Fact in 1950, after its subscriber count had plummeted to just 40,000.\r\n\r\nStill, the mid-century newsletter boom was not limited to the Left. Joseph P. Kamp, a conservative writer whom a US senator once described as a “veteran pamphleteer of extreme right-wing causes,” bootstrapped a newsletter called Headlines, and What\'s Behind Them in 1938. A typical article from 1948 detailed the investigation into what Kamp described as a Communist infiltration of the YMCA. Headlines saw an ideological successor in the conspiratorial Counterattack, launched by a trio of former FBI agents with a mimeograph machine in 1947. Another ex-FBI agent, Dan Smoot, started publishing the Dan Smoot Report in 1957.\r\n\r\nIn the 1930s, as today, the shift to newsletters arose amidst a crisis of confidence in the newspaper industry, and was enabled by the spread of new technology.\r\n\r\nSo what happened to newsletters between then and now? They never really died. In the 1970s, conservative activists like Ayn Rand and Phyllis Schlafly each had their own—and press reports suggested in 1979 that newsletters were “booming” in Washington, DC.\r\n\r\nBut the swashbuckling early days of Cockburn and Seldes were over: Newsletters had gone corporate. Trade associations cranked them out, as did big publishers like McGraw Hill. Staff journalists at newspapers and magazines also started newsletters about specialty topics, like energy policy, for their parent companies. Going it alone was hard. About one-third of independent newsletters failed every year.\r\n\r\nThe distribution system that had given rise to In Fact—a network of unions, bookstores, and niche newsstands—had faded by this time. The 1970s wave relied on direct mailings, a tough market to crack without resources; and there was much less room for working journalists to go into solo publishing.\r\n\r\nThese days, companies like Substack are offering a new way out. For now, the platforms let readers find and discover new publications with ease, and they make starting up a newsletter even cheaper than renting a mimeograph ever was. But the context has shifted, too. The journalism crisis of the 1940s was ideological, not financial: When Seldes left the Tribune, the industry was booming and he could easily have found another job, says Bauer. He chose to leave anyway, because he wanted to report the news in his own way. In 2020, with the business of journalism in free fall, Substack’s allure has as much to do with generating steady income as finding editorial freedom.\r\n\r\nThere’s still plenty of reason to be wary of the current trend. Take the blog boom, which is in some ways the most recent precedent for what we’ve seen with newsletters. The early-00s blogging moment fell apart, and many outlets were bought up by companies like Gawker Media. One can imagine that phenomenon repeating itself. What happens, for instance, if a corporation comes along looking for talented Substack writers, then buys up the rights to their newsletters, or poaches them for other projects? Newsletters were corporatized once before, and they could be once again.\r\n\r\nAs Bauer puts it, “It’s this constant cat-and-mouse game between independent journalists trying to eke out a living and venture capital stalking them.”', '2022-12-16 00:45:37', '2022-12-16 00:45:37', 10, 1, 2, 'image1671176737-unnamed.jpg'),
(14, 'abc', 'asd', 'asd', '2022-12-18 23:38:18', '2022-12-26 02:55:33', 0, 1, 4, 'image1671431898-— taylor swift lockscreens.png'),
(15, 'testtt', 'Here\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.', 'Here\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.\r\nHere\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.\r\nHere\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.Here\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.', '2022-12-19 01:13:33', '2022-12-26 02:56:16', 0, 2, 5, 'image1671431898-— taylor swift lockscreens.png'),
(16, 'Model', 'The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.', 'The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.', '2022-12-20 00:00:05', '2022-12-26 19:46:17', 10, 2, 6, 'image1671431898-— taylor swift lockscreens.png'),
(17, 'dasc', 'asc', 'asc', '2022-12-20 00:27:00', '2022-12-21 21:48:04', -1, 3, 2, 'image1671431898-— taylor swift lockscreens.png'),
(18, 'blog smda', 'asd', 'csdfsdf', '2022-12-20 23:56:20', '2022-12-20 23:56:29', 0, 3, 3, 'image1671431898-— taylor swift lockscreens.png'),
(19, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'One dollar and eighty-seven cents. That was all. And sixty cents of it was in pennies. Pennies saved one and two at a time by bulldozing the grocer and the vegetable man and the butcher until one’s cheeks burned with the silent imputation of parsimony that such close dealing implied. One dollar and eighty-seven cents. And the next day would be Christmas...', 'One dollar and eighty-seven cents. That was all. And sixty cents of it was in pennies. Pennies saved one and two at a time by bulldozing the grocer and the vegetable man and the butcher until one’s cheeks burned with the silent imputation of parsimony that such close dealing implied. One dollar and eighty-seven cents. And the next day would be Christmas...\r\nOne dollar and eighty-seven cents. That was all. And sixty cents of it was in pennies. Pennies saved one and two at a time by bulldozing the grocer and the vegetable man and the butcher until one’s cheeks burned with the silent imputation of parsimony that such close dealing implied. One dollar and eighty-seven cents. And the next day would be Christmas...\r\nOne dollar and eighty-seven cents. That was all. And sixty cents of it was in pennies. Pennies saved one and two at a time by bulldozing the grocer and the vegetable man and the butcher until one’s cheeks burned with the silent imputation of parsimony that such close dealing implied. One dollar and eighty-seven cents. And the next day would be Christmas...\r\nOne dollar and eighty-seven cents. That was all. And sixty cents of it was in pennies. Pennies saved one and two at a time by bulldozing the grocer and the vegetable man and the butcher until one’s cheeks burned with the silent imputation of parsimony that such close dealing implied. One dollar and eighty-seven cents. And the next day would be Christmas...\r\nOne dollar and eighty-seven cents. That was all. And sixty cents of it was in pennies. Pennies saved one and two at a time by bulldozing the grocer and the vegetable man and the butcher until one’s cheeks burned with the silent imputation of parsimony that such close dealing implied. One dollar and eighty-seven cents. And the next day would be Christmas...', '2022-12-21 00:19:38', '2022-12-26 19:03:00', 0, 3, 1, 'image1671431898-— taylor swift lockscreens.png'),
(20, 'asdasddasd', 'asdasd', 'asd', '2022-12-21 23:10:33', '2022-12-26 02:55:22', 0, 2, 3, 'image1671431898-— taylor swift lockscreens.png'),
(21, 'ettsx', 'asc', 'vfvxdfv', '2022-12-22 02:38:00', '2022-12-26 19:03:16', 0, 3, 2, 'image1671431898-— taylor swift lockscreens.png'),
(22, 'ádas', 'dđá', 'ádasd', NULL, '2022-12-26 19:03:27', 0, 3, 5, 'blog.jpg'),
(23, 'hhhhhhh', 'acasc', 'asc', '2022-12-23 02:41:42', '2022-12-23 02:44:10', 0, 2, 1, 'image1671431898-— taylor swift lockscreens.png'),
(24, 'new bsdalo', 'It\'s always good to bring a slower friend with you on a hike. If you happen to come across bears, the whole group doesn\'t have to worry. Only the slowest in the group do. That was the lesson they were about to learn that day.', 'Greg understood that this situation would make Michael terribly uncomfortable. Michael simply had no idea what was about to come and even though Greg could prevent it from happening, he opted to let it happen. It was quite ironic, really. It was something Greg had said he would never wish upon anyone a million times, yet here he was knowingly letting it happen to one of his best friends. He rationalized that it would ultimately make Michael a better person and that no matter how uncomfortable, everyone should experience racism at least once in their lifetime.\r\nHe ordered his regular breakfast. Two eggs sunnyside up, hash browns, and two strips of bacon. He continued to look at the menu wondering if this would be the day he added something new. This was also part of the routine. A few seconds of hesitation to see if something else would be added to the order before demuring and saying that would be all. It was the same exact meal that he had ordered every day for the past two years.\r\nOne dollar and eighty-seven cents. That was all. And sixty cents of it was in pennies. Pennies saved one and two at a time by bulldozing the grocer and the vegetable man and the butcher until one’s cheeks burned with the silent imputation of parsimony that such close dealing implied. One dollar and eighty-seven cents. And the next day would be Christmas...\r\nThe chair sat in the corner where it had been for over 25 years. The only difference was there was someone actually sitting in it. How long had it been since someone had done that? Ten years or more he imagined. Yet there was no denying the presence in the chair now.', '2022-12-26 01:30:42', '2022-12-26 21:19:05', 10, 2, 6, 'image1672114745-. (2).jpg'),
(25, 'ascdscasdadad', 'Here\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.', 'Here\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.\r\nHere\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.\r\nHere\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.Here\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.\r\nHere\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.', '2022-12-26 02:20:55', '2022-12-27 00:13:44', 0, 2, 5, 'image1671431898-— taylor swift lockscreens.png'),
(26, 'hihaicia', 'Then came the night of the first falling star. It was seen early in the morning, rushing over Winchester eastward, a line of flame high in the atmosphere. Hundreds must have seen it and taken it for an ordinary falling star. It seemed that it fell to earth about one hundred miles east of him.', 'Then came the night of the first falling star. It was seen early in the morning, rushing over Winchester eastward, a line of flame high in the atmosphere. Hundreds must have seen it and taken it for an ordinary falling star. It seemed that it fell to earth about one hundred miles east of him.\r\nThen came the night of the first falling star. It was seen early in the morning, rushing over Winchester eastward, a line of flame high in the atmosphere. Hundreds must have seen it and taken it for an ordinary falling star. It seemed that it fell to earth about one hundred miles east of him.\r\nThen came the night of the first falling star. It was seen early in the morning, rushing over Winchester eastward, a line of flame high in the atmosphere. Hundreds must have seen it and taken it for an ordinary falling star. It seemed that it fell to earth about one hundred miles east of him.\r\nThen came the night of the first falling star. It was seen early in the morning, rushing over Winchester eastward, a line of flame high in the atmosphere. Hundreds must have seen it and taken it for an ordinary falling star. It seemed that it fell to earth about one hundred miles east of him.\r\nThen came the night of the first falling star. It was seen early in the morning, rushing over Winchester eastward, a line of flame high in the atmosphere. Hundreds must have seen it and taken it for an ordinary falling star. It seemed that it fell to earth about one hundred miles east of him.', '2022-12-26 21:28:10', '2022-12-28 01:53:14', 0, 2, 1, 'image1672115290-— taylor swift lockscreens.png'),
(27, 'hihaicia', 'The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.', 'The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\n\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\n\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.', '2022-12-27 00:36:08', '2022-12-27 00:36:08', -1, 2, 1, 'image1672126568-— taylor swift lockscreens.png'),
(28, 'hihaicia', 'The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.', 'The young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\n\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.\r\nThe young man wanted a role model. He looked long and hard in his youth, but that role model never materialized. His only choice was to embrace all the people in his life he didn\'t want to be like.', '2022-12-27 00:41:53', '2022-12-28 01:50:04', 0, 2, 3, 'image1672126913-— taylor swift lockscreens.png'),
(29, 'qaaaaaaa', 'There was something beautiful in his hate. It wasn\'t the hate itself as it was a disgusting display of racism and intolerance. It was what propelled the hate and the fact that although he had this hate, he didn\'t understand where it came from. It was at that moment that she realized that there was hope in changing him.', 'His parents continued to question him. He didn\'t know what to say to them since they refused to believe the truth. He explained again and again, and they dismissed his explanation as a figment of his imagination. There was no way that grandpa, who had been dead for five years, could have told him where the treasure had been hidden. Of course, it didn\'t help that grandpa was roaring with laughter in the chair next to him as he tried to explain once again how he\'d found it.\r\nIt was just a burger. Why couldn\'t she understand that? She knew he\'d completely changed his life around her eating habits, so why couldn\'t she give him a break this one time? She wasn\'t even supposed to have found out. Yes, he had promised her and yes, he had broken that promise, but still in his mind, all it had been was just a burger.\r\nIt was a weird concept. Why would I really need to generate a random paragraph? Could I actually learn something from doing so? All these questions were running through her head as she pressed the generate button. To her surprise, she found what she least expected to see.', '2022-12-28 19:37:08', '2022-12-29 01:00:21', 10, 2, 2, 'image1672281428-— taylor swift lockscreens.png'),
(30, 'cvhdhf', 'If you can imagine a furry humanoid seven feet tall, with the face of an intelligent gorilla and the braincase of a man, you\'ll have a rough idea of what they looked like -- except for their teeth. The canines would have fitted better in the face of a tiger, and showed at the corners of their wide, thin-lipped mouths, giving them an expression of ferocity.', 'She counted. One. She could hear the steps coming closer. Two. Puffs of breath could be seen coming from his mouth. Three. He stopped beside her. Four. She pulled the trigger of the gun.\r\nHis parents continued to question him. He didn\'t know what to say to them since they refused to believe the truth. He explained again and again, and they dismissed his explanation as a figment of his imagination. There was no way that grandpa, who had been dead for five years, could have told him where the treasure had been hidden. Of course, it didn\'t help that grandpa was roaring with laughter in the chair next to him as he tried to explain once again how he\'d found it.\r\nShe wanted rainbow hair. That\'s what she told the hairdresser. It should be deep rainbow colors, too. She wasn\'t interested in pastel rainbow hair. She wanted it deep and vibrant so there was no doubt that she had done this on purpose.\r\nIt was a rat\'s nest. Not a literal one, but that is what her hair seemed to resemble every morning when she got up. It was going to take at least an hour to get it under control and she was sick and tired of it. She peered into the mirror and wondered if it was worth it. It wasn\'t. She opened the drawer and picked up the hair clipper', '2022-12-29 01:03:49', '2022-12-29 01:03:49', 10, 2, 3, 'image1672301029-— taylor swift lockscreens.png'),
(31, 'dcddddddddd', 'The robot clicked disapprovingly, gurgled briefly inside its cubical interior and extruded a pony glass of brownish liquid. \"Sir, you will undoubtedly end up in a drunkard\'s grave, dead of hepatic cirrhosis,\" it informed me virtuously as it returned my ID card. I glared as I pushed the glass across the table.', 'At that moment he had a thought that he\'d never imagine he\'d consider. \"I could just cheat,\" he thought, \"and that would solve the problem.\" He tried to move on from the thought but it was persistent. It didn\'t want to go away and, if he was honest with himself, he didn\'t want it to.\r\nA long black shadow slid across the pavement near their feet and the five Venusians, very much startled, looked overhead. They were barely in time to see the huge gray form of the carnivore before it vanished behind a sign atop a nearby building which bore the mystifying information \"Pepsi-Cola.\"\r\nThe words hadn\'t flowed from his fingers for the past few weeks. He never imagined he\'d find himself with writer\'s block, but here he sat with a blank screen in front of him. That blank screen taunting him day after day had started to play with his mind. He didn\'t understand why he couldn\'t even type a single word, just one to begin the process and build from there. And yet, he already knew that the eight hours he was prepared to sit in front of his computer today would end with the screen remaining blank.\r\nJosh had spent year and year accumulating the information. He knew it inside out and if there was ever anyone looking for an expert in the field, Josh would be the one to call. The problem was that there was nobody interested in the information besides him and he knew it. Years of information painstakingly memorized and sorted with not a sole giving even an ounce of interest in the topic.', '2022-12-29 01:08:08', '2022-12-29 01:08:08', 10, 2, 1, 'image1672301288-— taylor swift lockscreens.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `status`, `image`) VALUES
(1, 'Food', '2022-12-15 07:25:09', '2022-12-27 01:58:51', 10, 'image1672131531-22ac579c4f88feb7681d7d607bf2d348.png'),
(2, 'Entertainment', '2022-12-15 07:25:09', '2022-12-27 01:58:37', 10, 'image1672131517-e6ec550b886664cc29b7782b40d337d0.jpg'),
(3, 'Travel', '2022-12-15 07:25:09', '2022-12-27 01:58:23', 10, 'image1672131503-f6d2f6a5999078d21a921cc84165957a.jpg'),
(4, 'Music', '2022-12-15 07:25:09', '2022-12-27 01:58:09', 10, 'image1672131489-fceb0a77e82d800f9a6b689b56b1a530.jpg'),
(5, 'Life', '2022-12-15 07:25:09', '2022-12-27 01:57:43', 10, 'image1672131463-3f32130923d65a4c7c23f253f3a3bec8.jpg'),
(6, 'Technology', '2022-12-15 07:25:09', '2022-12-27 01:57:25', 10, 'image1672131434-032bb4387d0796e02d7e23ac92adea99.jpg'),
(7, 'hiasfdhasfdi', '2022-12-27 00:59:24', '2022-12-27 02:05:59', -1, 'image1672127964-— taylor swift lockscreens.png'),
(8, 'zxcSCadscs', '2022-12-30 00:17:56', '2022-12-30 00:17:56', -1, 'image1672384676-— taylor swift lockscreens.png'),
(9, 'bbnbnhn', '2022-12-30 00:18:06', '2022-12-30 00:18:06', 10, 'image1672384686-— taylor swift lockscreens.png'),
(10, 'gbghnghnjhmhjm', '2022-12-30 00:18:17', '2022-12-30 00:18:17', 10, 'image1672384697-— taylor swift lockscreens.png'),
(11, 'ssssssjjasjda', '2022-12-30 00:18:27', '2023-01-02 19:18:48', -1, 'image1672384707-— taylor swift lockscreens.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `reply` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email`, `phone`, `title`, `content`, `created_at`, `updated_at`, `status`, `reply`) VALUES
(1, 'Dan Holmes', 'danholmes@gmail.com', '0123456789', 'How to submit a blog', 'I want to submit a blog', '2022-12-23 03:56:31', NULL, -1, ''),
(2, 'John Cohmnlet', 'johncohmnlet@gmail.com', '0123456789', 'Can I be a submitter', 'There wasn\'t a bird in the sky, but that was not what caught her attention. It was the clouds. The deep green that isn\'t the color of clouds, but came with these. She knew what was coming and she hoped she was prepared.', NULL, '2022-12-27 21:13:52', -1, ''),
(3, 'Kraig Fritsch', 'anastacio03@gmail.com', '+18204823915', 'Ms.', 'Culpa aperiam est inventore. Nemo eum similique in atque quasi. Beatae et nihil et est natus.', '2022-12-27 21:07:43', '2022-12-28 00:27:50', -1, ''),
(4, 'Anya Smith', 'ylynch@sanford.com', '1-520-925-8254', 'Prof.', 'Nulla omnis consequuntur error itaque facilis maxime iusto. A asperiores harum non consequuntur. Dolores eius laborum ullam sed. Nostrum non blanditiis quaerat magnam itaque ut error.', '2022-12-27 21:08:04', '2022-12-28 00:55:11', -1, ''),
(5, 'Michel Reilly', 'lemke.delores@rodriguez.com', '+1-432-548-4883', 'Prof.', 'Aut libero iste porro in nam ea consequatur. Voluptas repudiandae qui sunt qui sunt id. Aut quisquam et maxime quibusdam tempore aliquam incidunt consequuntur. Error et dignissimos eveniet non quisquam veritatis.', '2022-12-28 01:03:20', '2022-12-28 01:04:18', -1, ''),
(6, 'Sheldon Gottlieb III', 'crona.lauren@mclaughlin.info', '(843) 368-6927', 'Prof.', 'Est dignissimos quia ut qui magnam at. Maiores quae corrupti incidunt ut sapiente voluptas. Commodi eum laborum sit ut vel illo. Quasi neque illo consectetur eveniet optio repellat. Autem repudiandae ad doloremque et sint quo et doloribus.', '2022-12-28 01:03:22', '2022-12-28 01:14:22', -1, ''),
(7, 'Dina Klocko', 'herminia.kris@hotmail.com', '+1 (661) 423-8306', 'Miss', 'Maxime necessitatibus possimus cumque fugit ea. Incidunt suscipit ut ducimus in nisi voluptatem. Illo velit voluptatem qui ad excepturi in. Aliquid quae voluptatum autem illum voluptas.', '2022-12-28 01:03:23', '2022-12-28 01:17:33', -1, ''),
(8, 'Rogers Okuneva', 'oberbrunner.antwon@parker.com', '1-309-580-9178', 'Dr.', 'Velit placeat nemo incidunt provident quia. Enim deserunt numquam sed beatae sunt. Veritatis eum aut dignissimos maxime magnam cum aut. Quod aut molestiae fuga sunt harum quos.', '2022-12-28 01:03:23', '2022-12-28 01:03:23', -1, ''),
(9, 'Marine May Kotlin', 'marinekotline@gmail.com', '0123456789', 'I can\'t register', 'Hello myBLOG, I enjoy to view your page and I want to be a partner but when I register, I don\'t know why I can\'t. It\'s show that fail... Can you help me?', '2022-12-28 21:09:55', '2022-12-28 21:09:55', -1, ''),
(10, 'Marine May Kotlin', 'marinekotline@gmail.com', '0123456789', 'I can\'t register', 'Hello myBLOG, I enjoy to view your page and I want to be a partner but when I register, I don\'t know why I can\'t. It\'s show that fail... Can you help me?', '2022-12-28 21:10:18', '2022-12-28 21:10:18', -1, ''),
(11, 'Marine May Kotlin', 'marinekotline@gmail.com', '0123456789', 'I can\'t register', 'Hello myBLOG, I enjoy to view your page and I want to be a partner but when I register, I don\'t know why I can\'t. It\'s show that fail... Can you help me?', '2022-12-28 21:11:21', '2022-12-28 21:11:21', -1, ''),
(12, 'Marine May Kotlin', 'marinekotline@gmail.com', '0123456789', 'I can\'t register', 'Hello myBLOG, I enjoy to view your page and I want to be a partner but when I register, I don\'t know why I can\'t. It\'s show that fail... Can you help me?', '2022-12-28 21:11:35', '2022-12-28 21:11:35', -1, ''),
(13, 'Catherin Tran', 'catherintran@gmail.com', '0123456789', 'acsdsvcfdvf', 'sdhsaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-12-29 02:40:39', '2022-12-29 02:40:39', -1, ''),
(14, 'Catherin Tran', 'catherintran@gmail.com', '0123456789', 'acsdsvcfdvf', 'sdhsaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-12-29 02:41:17', '2022-12-29 02:41:17', -1, ''),
(15, 'Dan Haustin', 'danhaustin@gmail.com', '0123456789', 'How about pay for a blog', '_token=Ib3FJUTDYuivCNOUvY6SAZ6GgHUAtyWktQ09G7bC&full_name=Dan+Haustin&email=danhaustin%40gmail.com&phone=0123456789&title=How+about+pay+for+a+blog&content=Hello%2C+can+I+know+how+much+you+will+pay+for+a+blog.+I+want+to+submit+a+blog+and+make+money', '2023-01-03 00:27:51', '2023-01-03 00:27:51', -1, ''),
(16, 'Marine May Kotlin', 'marinekotline@gmail.com', '0123456789', 'I can\'t submit blog...', 'I think your website have an errror... I have submitted blog for many times but it\'s said: can\'t submit blog. Can you check again, thanks', '2023-01-03 00:33:34', '2023-01-03 00:35:16', 10, 'Hello Marine, we\'re all check! Thank for your mail, we have checked and fix the error. Now you can totally submit your blog!');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(46, '2014_10_12_000000_create_users_table', 1),
(47, '2014_10_12_100000_create_password_resets_table', 1),
(48, '2019_08_19_000000_create_failed_jobs_table', 1),
(49, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(50, '2022_12_13_025519_create_categories_table', 1),
(51, '2022_12_13_031249_create_blogs_table', 1),
(52, '2022_12_13_031733_create_favorites_table', 1),
(53, '2022_12_13_032037_create_contacts_table', 1),
(54, '2022_12_13_071257_create_comments_table', 1),
(55, '2022_12_13_071330_create_ratings_table', 1),
(56, '2022_12_15_070709_add_image_columns', 1),
(57, '2022_12_19_085828_add_role_column_to_users_table', 2),
(60, '2022_12_23_080746_rename_author_column', 3),
(61, '2022_12_27_093151_add_status_column_to_contacts_table', 4),
(66, '2022_12_28_082302_add_reply_column_to_contacts_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stars` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `image`, `role`) VALUES
(1, 'Clemmie Lindgren', 'ed.tromp@example.com', '2022-12-15 00:23:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZtmJQ6Hduz', '2022-12-15 00:23:40', '2022-12-15 00:23:40', NULL, 1),
(2, 'Jane', 'junethao74@gmail.com', NULL, '$2y$10$KleMU6xMso/662L.ICXlgeVYi0AjzjEAUnNOapBX7uPVpcf24rmmG', NULL, '2022-12-19 00:01:36', '2022-12-19 00:01:36', NULL, 1),
(3, 'Camilllas', 'camillias.may@gmail.com', NULL, '$2y$10$zbpGZPdO/ChOu5AELeE/..iupM5Yn2SFolZ7pTKvz85jWuOAkJo7a', NULL, '2022-12-19 02:19:15', '2022-12-19 02:19:15', NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`),
  ADD KEY `favorites_blog_id_foreign` (`blog_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`),
  ADD KEY `ratings_blog_id_foreign` (`blog_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
