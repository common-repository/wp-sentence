<?php
/*
Plugin Name: WP Sentence
Version: 1.0
Plugin URI: http://jakubas.net.pl/projekty/narzedzia/wp-sentence-plugin
Description: WP Sentence shows one of the more than 470 citations on Your sidebar. 
Author: Piotr Jakubas
Author URI: http://jakubas.net.pl/
*/

function wp_get_sentence($before_title="",$after_title="") {

	$wp_sentence_start = "
<style>
 .bq_group{ padding: 0px 3px; margin-top: 7px; height: 7px; font-size: 300%;}		
 .bqstart {float: left;}
 .bqend { float: right;}
 ul.wp_sentence div{ font-size:130%; font-style:normal; line-height:160%;padding: 0px 0px 0px 0px;}
 #cite_wp_sentence{ float: right; font-weight: bold; font-size:130%; display: block; margin: 2px;}
 #url_wp_sentence{float: right; margin: 1px; display: block;}
</style>

		<div>
			<span class='bqstart bq_group'>&ldquo;</span>";
	
	$wp_sentence_center ="
			<span class='bqend bq_group'>&rdquo;</span>
		</div>
		<cite id='cite_wp_sentence'>
	";
	
	$wp_sentence_end ="
		</cite><br/>
		<div id='url_wp_sentence'>
			<a href='http://jakubas.net.pl/projekty/narzedzia/wp-sentence-plugin' title='WordPress Plugin - WP Sentence' style='font-size: 8px;'>WP Sentence</a> 
		</div>
	";

$wp_sentence = array(
	1 => array( "text" => "
					That was one of the best Pizza's I have ever eaten in my life. The cheese was so good it made me faint.
						  ",  
				"author" => "
					Elvis A. Presley
							" ),
 
	2 => array( "text" => "
					A bad woman is a sort of woman a man never gets tired of.
							",  
				"author" => "
					Oscar Wilde
							" ),
	3 => array( "text" => "
					If only one takes care of means, the end will take care of itself.
							",  
				"author" => "
					Gandhi
							" ),
	4 => array( "text" => "
					Of the best rulers people only know that they exist, <br/>
					the next best they love and praise, <br/>
					the next they fear, <br/>
					and the next they revile. <br/>
							",  
				"author" => "
					Lao-Tsy
							" ),
	5 => array( "text" => "
					Perfection is achieved, not when there is nothing more to add, but when there is nothing left to take away.
							",  
				"author" => "
					Antoine de Saint-Exup&eacute;ry
							" ),
	// Group:A 
	
	6 => array( "text" => "
					A bore deprives you of solitude without providing you with company.
							",  
				"author" => "" ),
	7 => array( "text" => "
					A bore is a man who talks when you want him to listen.
							",  
				"author" => "" ),
	8 => array( "text" => "
					A boy becomes a man when he stops asking his father for money and requests a loan.
							",  
				"author" => "" ),
	9 => array( "text" => "
					A cad is a man who kisses and tells.
							",  
				"author" => "" ),
	10 => array( "text" => "
					A classic is something that everybody wants to have read and nobody wants to read.
							",  
				"author" => "" ),
	11 => array( "text" => "
					A friend to all is a friend to none.
							",  
				"author" => "" ),
	12 => array( "text" => "
					A fool must now and then be right by chance.
							",  
				"author" => "" ),
	13 => array( "text" => "
					A gentleman is a man who has respect for those who can be of no possible service to him.
							",  
				"author" => "" ),
	14 => array( "text" => "
					A gentleman is never rude, except on purpose.
							",  
				"author" => "" ),
	15 => array( "text" => "
					A good listener makes more friends than a good talker.
							",  
				"author" => "" ),
	16 => array( "text" => "
					A good scare is worth more than good advice.
							",  
				"author" => "" ),
	17 => array( "text" => "
					A good woman is known by what she does, a good man by what he doesn't do.
							",  
				"author" => "" ),
	18 => array( "text" => "
					A great man is he who has not lost the heart of a child.
							",  
				"author" => "" ),
	19 => array( "text" => "
					A great poet is the most unpoetical of creatures.
							",  
				"author" => "Oscar Wilde" ),
	20 => array( "text" => "
					A great statesman, like a good housekeeper, knows that cleaning has to be done every morning.
							",  
				"author" => "" ),
	21 => array( "text" => "
					A highbrow is a kind of person who looks at a sausage and thinks of Picasso.
							",  
				"author" => "" ),
	22 => array( "text" => "
					A highbrow is a person educated beyond his intelligence.
							",  
				"author" => "" ),
	23 => array( "text" => "
					A lie has no legs.
							",  
				"author" => "" ),
	24 => array( "text" => "
					A man is as old as he feels and a woman as old as she looks.
							",  
				"author" => "" ),
	25 => array( "text" => "
					A man is like a phonograph with half a dozen records. You soon get tired of them all, and yet you have to sit at table whilst he reels them off to every new visitor.
							",  
				"author" => "" ),
	26 => array( "text" => "
					A man who is going to commit an inhuman act excuses himself by saying 'I'm only human after all'.
							",  
				"author" => "" ),
	27 => array( "text" => "
					A man who knows he is a fool is not a great fool.
							",  
				"author" => "" ),
	28 => array( "text" => "
					A man who won't lie to a woman has very little consideration for her feelings.
							",  
				"author" => "" ),
	29 => array( "text" => "
					A modest girl never pursues a man, nor does a mouse-trap pursue a mouse.
							",  
				"author" => "" ),
	30 => array( "text" => "
					A new acquaintance is like a new book. I prefer it, even if bad, to a classic.
							",  
				"author" => "" ),
	31 => array( "text" => "
					A perfect guest makes his host feel at home.
							",  
				"author" => "" ),
	32 => array( "text" => "
					A person may cause evil not only by his action but also by his inaction.
							",  
				"author" => "" ),
	33 => array( "text" => "
					A pessimist is a fellow who lives with an optimist.
							",  
				"author" => "" ),
	34 => array( "text" => "
					A pessimist is a man who thinks everybody as nasty as himself and hates them for it.
							",  
				"author" => "" ),
	35 => array( "text" => "
					A poet can survive anything but a misprint.
							",  
				"author" => "Oscar Wilde" ),
	36 => array( "text" => "
					A poet that fails in writing becomes a bitter critic.
							",  
				"author" => "" ),
	37 => array( "text" => "
					A politician divides mankind into two classes: tools and enemies.
							",  
				"author" => "" ),
	38 => array( "text" => "
					A psychologist is a man who watches everybody else when a beautiful girl enters the room.
							",  
				"author" => "" ),
	39 => array( "text" => "
					A reasonable number of fleas is good for a dog: keeps him from brooding over being a dog.
							",  
				"author" => "" ),
	40 => array( "text" => "
					A rich man can't imagine poverty.
							",  
				"author" => "" ),
	41 => array( "text" => "
					A room without books is a body without soul.
							",  
				"author" => "" ),
	42 => array( "text" => "
					A scholar who cherishes a love of comfort is not fit to be deemed a scholar.
							",  
				"author" => "" ),
	43 => array( "text" => "
					A selfish man is indifferent to people he can't use for his purpose.
							",  
				"author" => "" ),
	44 => array( "text" => "
					A sense of duty is useful in work, but offensive in personal relations.
							",  
				"author" => "" ),
	45 => array( "text" => "
					A successful man is one who earns more than his wife can possibly spend.
							",  
				"author" => "" ),
	46 => array( "text" => "
					A teacher who is impatient for his pupils is only human.
							",  
				"author" => "" ),
	47 => array( "text" => "
					Accidents are accidents only to ignorance.
							",  
				"author" => "" ),
	48 => array( "text" => "
					Acquaintance: a person whom we know well enough to borrow from but not well enough to lend to.
							",  
				"author" => "" ),
	49 => array( "text" => "
					Adopt the pace of nature: her secret is patience.
							",  
				"author" => "" ),
	50 => array( "text" => "
					Advertising makes you think you have longed all your life for something you never even heard of before.
							",  
				"author" => "" ),
	51 => array( "text" => "
		All political parties die at last of swallowing their own lies.
							",  
		"author" => "" ),
	52 => array( "text" => "
		Almost every wise saying has an opposite one, no less wise, to balance it.
							",  
		"author" => "" ),
53 => array( "text" => "
		Almost every wise saying has an opposite one, no less wise, to balance it.
",  
"author" => "" ),
54 => array( "text" => "
		Always mistrust a subordinate who never finds fault with his superior.
",  
"author" => "" ),

55 => array( "text" => "
		An alarm clock: a device for waking a childless household.
",  
"author" => "" ),

56 => array( "text" => "
		An honest minister asks what recommends a man, a corrupt one, who.
",  "author" => "" ),

57 => array( "text" => "
		An ideal wife is any woman who has an ideal husband.
",  "author" => "" ),

58 => array( "text" => "
		An ordinary man would rather read the life of the cruellest pirate that ever lived than that of the wisest philosopher.
",  "author" => "" ),

59 => array( "text" => "
		Any sort of peace with our fellow-citizens seems to me preferable to civil war.
",  "author" => "" ),

60 => array( "text" => "
		Anybody can sympathize with the sufferings of a friend, but it requires a very fine nature to sympathize with a friend's success.
",  "author" => "" ),

61 => array( "text" => "
		Apology is politeness too late.
",  "author" => "" ),

62 => array( "text" => "
		As long as a woman can look ten years younger than her own daughter, she is perfectly satisfied.
",  "author" => "Oscar Wilde" ),

63 => array( "text" => "
		At sixty man learns how to value home.
",  "author" => "" ),

64 => array( "text" => "
		Beauty makes idiots sad and wise men merry.
",  "author" => "" ),

	// Group:B 

65 => array( "text" => "
		Birth is the cause of death.
",  "author" => "" ),

66 => array( "text" => "
		Blessed is the man who, having nothing to say, abstains from giving us wordy evidence of the fact.
",  "author" => "" ),

	// Group:C 

67 => array( "text" => "
		Caress your sentence tenderly, it will end by smiling to you.
",  "author" => "" ),

68 => array( "text" => "
		Character is what you are in the dark.
",  "author" => "" ),

69 => array( "text" => "
		Children are so expensive that only the poor can afford them.
",  "author" => "" ),

70 => array( "text" => "
		Choose your wife rather by your ear than by your eye.
",  "author" => "" ),

71 => array( "text" => "
		Commit a sin twice and it will not seem to you a crime.
",  "author" => "" ),

72 => array( "text" => "
		Conscience: another man within me who is angry with me.
",  "author" => "" ),

73 => array( "text" => "
		Conversation between Adam and Eve must have been difficult at times because they had nobody to talk about.
",  "author" => "" ),

74 => array( "text" => "
		Corruption of the best becomes the worst.
",  "author" => "" ),

75 => array( "text" => "
		Creativity is the art of taking a fresh look at old knowledge.
",  "author" => "" ),

76 => array( "text" => "
		Curiosity is, in great and generous minds, the first passion and the last.
",  "author" => "" ),

77 => array( "text" => "
		Curiosity is one of the permanent and certain characteristics of a vigorous intellect.
",  "author" => "" ),

78 => array( "text" => "
		Cynic: a man who knows the price of everything and the value of nothing.
",  "author" => "" ),

	// Group:D 

79 => array( "text" => "
		Daring ideas are like chessmen moved forward: they may be beaten but they start a winning game.
",  "author" => "" ),

80 => array( "text" => "
		Defend me from my friends: my enemies never call when I have work to do.
",  "author" => "" ),

81 => array( "text" => "
		Diamond cuts diamond.
",  "author" => "" ),

82 => array( "text" => "
		Dictionaries are like watches: the worst is better than none, and the best cannot be expected to go quite true.
",  "author" => "" ),

83 => array( "text" => "
		Discussion: a method of confirming others in their errors.
",  "author" => "" ),

84 => array( "text" => "
		Do all the work you can: that is the whole philosophy of a good life.
",  "author" => "" ),

85 => array( "text" => "
		Do you love life? Then don't waste time, for that is the stuff life is made of.
",  "author" => "" ),

86 => array( "text" => "
		Don't pass a temptation lightly by: it may never come again.
",  "author" => "" ),

87 => array( "text" => "
		Don't put all your eggs into one basket.
",  "author" => "" ),

88 => array( "text" => "
		Don't talk of things after they are done.
",  "author" => "" ),

89 => array( "text" => "
		Duty is what we expect from others.
",  "author" => "" ),

	// Group:E 

90 => array( "text" => "
		Early to bed and early to rise makes a man healthy, wealthy and wise.
",  "author" => "" ),

91 => array( "text" => "
		Eat with the rich, but go to play with the poor, who are capable of joy.
",  "author" => "" ),

92 => array( "text" => "
		Education: that which discloses to the wise and disguises from the foolish their lack of understanding.
",  "author" => "" ),

93 => array( "text" => "
		Egotist: a man who tells you those things about himself which you intended to tell him about yourself.
",  "author" => "" ),

94 => array( "text" => "
		Empty barrels make the most sound.
",  "author" => "" ),

95 => array( "text" => "
		Etiquette requires us to admire the human race.
",  "author" => "" ),

95 => array( "text" => "
		Every complaints of his memory and no one complaints of his judgment.
",  "author" => "" ),

96 => array( "text" => "
		Every hero becomes a bore at last.
",  "author" => "" ),

97 => array( "text" => "
		Every man has a perfect right to his opinion, provided it agrees with ours.
",  "author" => "" ),

98 => array( "text" => "
		everybody in good society holds exactly the same opinions.
",  "author" => "Oscar Wilde" ),

99 => array( "text" => "
		everybody knows that it is much harder to turn word into deed than deed into word.
",  "author" => "" ),

100 => array( "text" => "
		everybody knows that man has a lot of faults just as woman has, but it takes the opposite sex to bring them to light.
",  "author" => "" ),

101 => array( "text" => "
		everyone is a moon and has a dark side which he doesn't show to anybody.
",  "author" => "" ),

102 => array( "text" => "
		everything is funny as long as it is happening to somebody else.
",  "author" => "" ),

103 => array( "text" => "
		everything is simpler than you think and at the same time more complex than you imagine.
",  "author" => "" ),

104 => array( "text" => "
		everything that can be thought at all can be thought clearly, everything that can be said, can be said clearly.
",  "author" => "" ),

105 => array( "text" => "
		evil is good perverted.
",  "author" => "" ),

106 => array( "text" => "
		examinations are formidable even for the best prepared, for the greatest fool can ask more than the wisest man can answer.
",  "author" => "" ),

107 => array( "text" => "
		experience is a comb which nature gives to men when they are bald.
",  "author" => "" ),

108 => array( "text" => "
		experience is not what happens to a man. It is what a man does with what happens to him.
",  "author" => "" ),

109 => array( "text" => "
		experience is the name everybody gives to his mistakes.
",  "author" => "" ),

110 => array( "text" => "
		experience is the name everybody gives to his mistakes.
",  "author" => "" ),

	// Group:F 

111 => array( "text" => "
		fashion is something that goes out of fashion as soon as most people have it.
",  "author" => "" ),

112 => array( "text" => "
		few can do us good, almost any can do us harm.
",  "author" => "" ),

113 => array( "text" => "
		few men get what they desire and few deserve what they get.
",  "author" => "" ),

114 => array( "text" => "
		few people are famous for what they have not done.
",  "author" => "" ),

115 => array( "text" => "
		flattery is like Cologne water, to be smelt of, not swallowed.
",  "author" => "" ),

116 => array( "text" => "
		flowers are as common in the country as people are in London.
",  "author" => "Oscar Wilde" ),

117 => array( "text" => "
		friendship is like money: easier made than kept.
",  "author" => "" ),

	// Group:G 

118 => array( "text" => "
		generosity is the essence of friendship.
",  "author" => "Oscar Wilde" ),

119 => array( "text" => "
		genius is the will to turn on your thoughts instead of the radio.
",  "author" => "" ),

120 => array( "text" => "
		genius: the faculty of perceiving in an unusual way.
",  "author" => "" ),

121 => array( "text" => "
		give me a bed and a book, and I am happy.
",  "author" => "" ),

122 => array( "text" => "
		God sells knowledge for labour and risk.
",  "author" => "" ),

123 => array( "text" => "
		good manners are the technic of expressing consideration for the feelings of others.
",  "author" => "" ),

	// Group:H 

124 => array( "text" => "
		half a truth is often a great lie.
",  "author" => "" ),

125 => array( "text" => "
		happiness is the by-product of an effort to make someone else happy.
",  "author" => "" ),

126 => array( "text" => "
		he that is pleased with solitude must be either a wild beast or a god.
",  "author" => "" ),

127 => array( "text" => "
		he who does not need to lie is proud of not being a lier.
",  "author" => "" ),

128 => array( "text" => "
		he who falls in love with himself has no rivals.
",  "author" => "" ),

129 => array( "text" => "
		he who falls in love with himself has no rivals.
",  "author" => "" ),

130 => array( "text" => "
		he who fears he will suffer, already suffers because of his fear.
",  "author" => "" ),

131 => array( "text" => "
		he who is loved by men is loved by God.
",  "author" => "" ),

132 => array( "text" => "
		he who says there is no such thing as an honest man, you may be sure is himself a knave.
",  "author" => "" ),

133 => array( "text" => "
		he will always be a slave who does not know how to live on a little.
",  "author" => "" ),

134 => array( "text" => "
		history is on every occasion the record of that which one age finds worthy of note in another.
",  "author" => "" ),

135 => array( "text" => "
		home is the place where, when you have to go there, they have to take you in.
",  "author" => "" ),

136 => array( "text" => "
		honesty is a fine jewel but much out of fashion.
",  "author" => "" ),

137 => array( "text" => "
		hope for the best, prepare for the worst.
",  "author" => "" ),

138 => array( "text" => "
		how glorious it is, and also how painful, to be an exception.
",  "author" => "" ),

139 => array( "text" => "
		how many people have a good ear for literature and sing out of tune.
",  "author" => "" ),

140 => array( "text" => "
		hunger for truth is often stronger than the desire for peace and security.
",  "author" => "" ),

	// Group:I 

141 => array( "text" => "
		I can always be nice to people I don't care for.
",  "author" => "" ),

142 => array( "text" => "
		I can live for two months on a good compliment.
",  "author" => "" ),

143 => array( "text" => "
		I can resist everything except temptation.
",  "author" => "" ),

144 => array( "text" => "
		I care for a philosopher only to the extent that he is able to be an example.
",  "author" => "" ),

145 => array( "text" => "
		I disapprove of what you say but I will defend to the death your right to say it.
",  "author" => "" ),

146 => array( "text" => "
		I distrust people who are very sure of everything they say.
",  "author" => "" ),

147 => array( "text" => "
		I divide all readers into two classes: those who read to remember and those who read to forget.
",  "author" => "" ),

148 => array( "text" => "
		I don't like principles, I prefer prejudices.
",  "author" => "Oscar Wilde" ),

149 => array( "text" => "
		I like looking at geniuses, and listening to beautiful people.
",  "author" => "Oscar Wilde" ),

150 => array( "text" => "
		I like work. It fascinates me. I can sit and look at it for hours.
",  "author" => "" ),

151 => array( "text" => "
		I never know whether to pity or congratulate a man on coming to his senses.
",  "author" => "" ),

152 => array( "text" => "
		I never put off till tomorrow what I can possibly do the day after.
",  "author" => "Oscar Wilde" ),

153 => array( "text" => "
		I sometimes think that God in creating man, somewhat overestimated His ability.
",  "author" => "Oscar Wilde" ),

154 => array( "text" => "
		if a man is not a gentleman, whatever he knows is bad for him.
",  "author" => "Oscar Wilde" ),

155 => array( "text" => "
		if a man loves to give advice, it is a sure sign that he himself needs it.
",  "author" => "" ),

156 => array( "text" => "
		if at first you don't succeed you are running about average .
",  "author" => "" ),

157 => array( "text" => "
		if only one takes care of means, the end will take care of itself.
",  "author" => "Gandhi" ),

158 => array( "text" => "
		if we can't as we would, we must do as we can.
",  "author" => "" ),

159 => array( "text" => "
		if we judge of love by the majority of its results it rather resembles hatred than friendship.
",  "author" => "" ),

160 => array( "text" => "
		if you don't aim at anything you achieve nothing.
",  "author" => "" ),

161 => array( "text" => "
		if you have many friends you probably have little time.
",  "author" => "" ),

162 => array( "text" => "
		if you want to see what children can do, you must stop giving them things.
",  "author" => "" ),

162 => array( "text" => "
		if you wish to be good, first believe that you are bad.
",  "author" => "" ),

163 => array( "text" => "
		if you wish to be good, first believe that you are bad.
",  "author" => "" ),

164 => array( "text" => "
		if your enemy wrongs you, buy each of his children a drum.
",  "author" => "" ),

165 => array( "text" => "
		in a multitude of words there will certainly be an error.
",  "author" => "" ),

166 => array( "text" => "
		in eating, a third of the stomach should be filled with food, a third with drink and the rest left empty.
",  "author" => "" ),

167 => array( "text" => "
		in general, pride is at the bottom of all great mistakes.
",  "author" => "" ),

168 => array( "text" => "
		in Rome do as Romans do.
",  "author" => "" ),

169 => array( "text" => "
		in their first passion women are in love with their lover; in the rest, with love.
",  "author" => "" ),

170 => array( "text" => "
		in this age when it is said of a man 'he knows to live' it may be implied he is not very honest.
",  "author" => "" ),

171 => array( "text" => "
		industry is the root of all ugliness.
",  "author" => "Oscar Wilde" ),

172 => array( "text" => "
		instead of loving your enemies treat your friends a little better.
",  "author" => "" ),

173 => array( "text" => "
		intelligence is like a river: the deeper it is, the less noise it makes.
",  "author" => "" ),

174 => array( "text" => "
		it is a dirty bird which fouls its own nest.
",  "author" => "" ),

175 => array( "text" => "
		it is a double pleasure to deceive the deceiver.
",  "author" => "" ),

176 => array( "text" => "
		it is a glorious thing to be indifferent to suffering, but only to one's own suffering.
",  "author" => "" ),

177 => array( "text" => "
		it is a wise talker who knows when he has nothing to say.
",  "author" => "" ),

178 => array( "text" => "
		it is absurd to divide people into good and bad. People are either charming or tedious.
",  "author" => "Oscar Wilde" ),

179 => array( "text" => "
		it is almost a definition of a gentleman to say he is one who never inflicts pain.
",  "author" => "" ),

180 => array( "text" => "
		it is always nice to be expected and not to arrive.
",  "author" => "Oscar Wilde" ),

181 => array( "text" => "
		it is better to give than to lend, and it costs about the same.
",  "author" => "" ),

182 => array( "text" => "
		it is batter to have a permanent income than to be fascinating.
",  "author" => "Oscar Wilde" ),

183 => array( "text" => "
		it is better to travel hopefully than to arrive.
",  "author" => "" ),

184 => array( "text" => "
		it is difficult not to be unjust to what one loves.
",  "author" => "" ),

185 => array( "text" => "
		it is easier to get money than to keep it.
",  "author" => "" ),

186 => array( "text" => "
		it is easier to produce ten volumes of philosophical writing than to put one principle into practice.
",  "author" => "" ),

187 => array( "text" => "
		it is easy to bear the misfortunes of others.
",  "author" => "" ),

188 => array( "text" => "
		it is easy to stand a pain but difficult to stand an itch.
",  "author" => "" ),

189 => array( "text" => "
		it is many a slip between the cup and the lip.
",  "author" => "" ),

190 => array( "text" => "
		it is never too late to mend.
",  "author" => "" ),

191 => array( "text" => "
		it is no use saying 'We are doing our best.' You have got to succeed in doing what is necessary.
",  "author" => "" ),

192 => array( "text" => "
		it is not enough to do good; one must do it in the right way.
",  "author" => "" ),

193 => array( "text" => "
		it is not lack of love but lack of friendship that makes unhappy marriages.
",  "author" => "" ),

194 => array( "text" => "
		it is often said that force is no argument. That, however, entirely depends on what one wants do prove.
",  "author" => "" ),

195 => array( "text" => "
		it is one of functions of literature to turn truisms into truths.
",  "author" => "" ),

196 => array( "text" => "
		it is only in literature that coincidences seem unnatural.
",  "author" => "" ),

197 => array( "text" => "
		it is so easy to convert others. It is so difficult to convert oneself.
",  "author" => "Oscar Wilde" ),

198 => array( "text" => "
		it is the customary fate of new truths to begin as heresies and to end as superstitions.
",  "author" => "" ),

199 => array( "text" => "
		it is the first step that is troublesome.
",  "author" => "" ),

//435 => array( "text" => "
//		It is the fight alone that pleases us, not the victory. 
//",  "author" => "Blaise Pascal" ),

200 => array( "text" => "
		it often takes a speaker twice as long to tell what he thinks as to tell what he knows.
",  "author" => "" ),

201 => array( "text" => "
		it requires a very unusual mind to undertake the analysis of the obvious.
",  "author" => "" ),

202 => array( "text" => "
		it takes two to make a quarrel.
",  "author" => "" ),

203 => array( "text" => "
		it's a great man who can laugh at his misfortunes.
",  "author" => "" ),

204 => array( "text" => "
		it's a long way to Tipperary.
",  "author" => "" ),

205 => array( "text" => "
		it's sweet to be remembered, but it's often cheaper to be forgotten.
",  "author" => "" ),

	// Group:J 

206 => array( "text" => "
		journalism is unreadable, and literature is not read.
",  "author" => "Oscar Wilde" ),

207 => array( "text" => "
		just as we suffer from excess in all things so we suffer from excess in literature.
",  "author" => "" ),

	// Group:K 

208 => array( "text" => "
		keep smiling.
",  "author" => "" ),

209 => array( "text" => "
		killing time is not so much murder as suicide.
",  "author" => "" ),

	// Group:L 

210 => array( "text" => "
		lack of imagination is the basis of action.
",  "author" => "Oscar Wilde" ),

211 => array( "text" => "
		language is the parent, and not the child, of thought.
",  "author" => "Oscar Wilde" ),

212 => array( "text" => "
		last but not least.
",  "author" => "" ),

213 => array( "text" => "
		learning has gained most from those books from which the printers have lost.
",  "author" => "" ),

214 => array( "text" => "
		learning makes a good man better and an ill man worse.
",  "author" => "" ),

215 => array( "text" => "
		life is a hospital, in which every patient wants to change his bed.
",  "author" => "" ),

216 => array( "text" => "
		life is a matter about which we are lost if we reason too little or too much.
",  "author" => "" ),

217 => array( "text" => "
		life is a tragedy for those who feel and a comedy for those who think.
",  "author" => "" ),

218 => array( "text" => "
		life is the art of drawing sufficient conclusions from insufficient premises.
",  "author" => "" ),

219 => array( "text" => "
		like most people who try to exhaust a subject, he exhausted his listeners.
",  "author" => "Oscar Wilde" ),

220 => array( "text" => "
		listening patiently to people's confessions and complaints you win their friendship.
",  "author" => "" ),

221 => array( "text" => "
		little minds are interested in extraordinary things; great minds are interested in the commonplace.
",  "author" => "" ),

222 => array( "text" => "
		little minds are wounded by the smallest thing.
",  "author" => "" ),

223 => array( "text" => "
		love is the only way out of solitude.
",  "author" => "" ),

224 => array( "text" => "
		love is the triumph of imagination over intelligence.
",  "author" => "" ),

	// Group:M 

225 => array( "text" => "
		make hay while the sun shines.
",  "author" => "" ),

226 => array( "text" => "
		man can believe the impossible but can never believe the improbable.
",  "author" => "" ),

227 => array( "text" => "
		man is always looking for someone to boast to; woman is always looking for a shoulder to put her head on.
",  "author" => "" ),

228 => array( "text" => "
		man is often more irritated by the trifles than by the serious matters.
",  "author" => "" ),

229 => array( "text" => "
		man is the only animal who blushes, or needs to.
",  "author" => "" ),

230 => array( "text" => "
		many a truth can be best expressed in jest.
",  "author" => "" ),

231 => array( "text" => "
		many laws but little justice.
",  "author" => "" ),

232 => array( "text" => "
		many things are not believed because their current explanation is not believed.
",  "author" => "" ),

233 => array( "text" => "
		many wise words are spoken in jest; but they don't begin to compare with the number of foolish words spoken in earnest.
",  "author" => "" ),

234 => array( "text" => "
		marriage: a community consisting of a master, a mistress, and two slaves, making in all two.
",  "author" => "" ),

235 => array( "text" => "
		marriage: a romance in which the hero dies in the first chapter.
",  "author" => "" ),

236 => array( "text" => "
		marriage is like a cafeteria: you take what looks good to you, and pay for it later.
",  "author" => "" ),

237 => array( "text" => "
		mediocre people have an answer to everything and are astonished at nothing.
",  "author" => "" ),

238 => array( "text" => "
		men can live without air for a few minutes, without water for about two weeks, without food for two months, and without a new thought, for years and years.
",  "author" => "" ),

239 => array( "text" => "
		men never do evil so completely and cheerfully as when they do it for religious conviction.
",  "author" => "" ),

240 => array( "text" => "
		men tire themselves in pursuit of rest.
",  "author" => "" ),

241 => array( "text" => "
		men who are ready to do everything for the sake of peace, seldom find peace.
",  "author" => "" ),

242 => array( "text" => "
		men who are unhappy, like men who sleep badly, are always proud of the fact.
",  "author" => "" ),

243 => array( "text" => "
		millions long for immortality who do not know what to do with themselves on a rainy Sunday afternoon.
",  "author" => "" ),

244 => array( "text" => "
		modern age: when girls wear less in the street than their grandmothers did in bed.
",  "author" => "" ),

245 => array( "text" => "
		money will buy a pretty good dog but it won't buy the wag of his tail.
",  "author" => "" ),

246 => array( "text" => "
		monotony is a law of nature. Look at the monotonous manner in which the sun rises.
",  "author" => "" ),

247 => array( "text" => "
		most people tire of a lecture in ten minutes, clever people can do it in five.
",  "author" => "" ),

248 => array( "text" => "
		my duty is a thing I never do, on principle.
",  "author" => "Oscar Wilde" ),

249 => array( "text" => "
		my house is my castle.
",  "author" => "" ),

	// Group:N 

250 => array( "text" => "
		never in the field of human conflict was so much owed by so many to so few.
",  "author" => "" ),

251 => array( "text" => "
		new brooms sweep clear.
",  "author" => "" ),

252 => array( "text" => "
		no man has become wicked all at once.
",  "author" => "" ),

253 => array( "text" => "
		no man with four aces asks for a new deal.
",  "author" => "" ),

254 => array( "text" => "
		no member of a crew is praised for the individuality of his rowing.
",  "author" => "" ),

255 => array( "text" => "
		no needle is sharp at both ends.
",  "author" => "" ),

256 => array( "text" => "
		no one can be original by trying.
",  "author" => "" ),

257 => array( "text" => "
		nobody has ever been able to tell the difference between a fool and a hero until afterwards.
",  "author" => "" ),

258 => array( "text" => "
		nobody has ever tried to change gold into lead.
",  "author" => "" ),

259 => array( "text" => "
		nothing is ever all wrong. Even a clock that stops is right twice a day.
",  "author" => "" ),

260 => array( "text" => "
		nothing is impossible in Russia but reform.
",  "author" => "Oscar Wilde" ),

261 => array( "text" => "
		nothing is wonderful when you get used to it.
",  "author" => "" ),

262 => array( "text" => "
		nothing marks the increasing wealth of our times and the growth of the public mind toward refinement more than the demand for books.
",  "author" => "" ),

263 => array( "text" => "
		nothing refines but the intellect.
",  "author" => "Oscar Wilde" ),

264 => array( "text" => "
		nowadays it is only the unreadable that occurs.
",  "author" => "Oscar Wilde" ),

265 => array( "text" => "
		nowadays whatever is not worth saying is sung.
",  "author" => "" ),

	// Group:O 

266 => array( "text" => "
		of the best rulers people only know that they exist,<BR>
		the next best they love and praise,<BR>
		the next they fear,<BR>
		and the next they revileoften it is just lack of imagination that keeps a man from suffering very much.
",  "author" => "" ),

267 => array( "text" => "
		one must be serious about something, if one wants to have any amusement in life.
",  "author" => "Oscar Wilde" ),

268 => array( "text" => "
		only the shallow know themselves.
",  "author" => "Oscar Wilde" ),

269 => array( "text" => "
		only the wisest and the stupidest of men never change.
",  "author" => "" ),

270 => array( "text" => "
		only a small man boasts of his achievements and only an ignorant boasts of his knowledge.
",  "author" => "" ),

	// Group:P 

271 => array( "text" => "
		patience is the best remedy for every trouble.
",  "author" => "" ),

272 => array( "text" => "
		peace comes not from the absence of conflict but from the ability to cope with it.
",  "author" => "" ),

273 => array( "text" => "
		peace of mind begins just where ambition ends.
",  "author" => "" ),

274 => array( "text" => "
		people are also judged by the company they keep away from.
",  "author" => "" ),

275 => array( "text" => "
		people are happy or unhappy, not according to what they get absolutely, but according to the ratio between what they get and what they have been led to expect.
",  "author" => "" ),

276 => array( "text" => "
		people who are not aware of the danger can't be said to be brave.
",  "author" => "" ),

277 => array( "text" => "
		people are usually more convinced by reasons they discovered themselves than by those found by others.
",  "author" => "" ),

278 => array( "text" => "
		people ask you for advice byt they only want praise.
",  "author" => "" ),

279 => array( "text" => "
		perfect freedom is reserved for the man who lives by his own work and in that work does what he wants to.
",  "author" => "" ),

280 => array( "text" => "
		perfection is finally attained not when there is no longer anything to add, but when there is no longer anything to take away.
",  "author" => "" ),

281 => array( "text" => "
		perfection is made of trifles, and perfection is not a trifle.
",  "author" => "" ),

282 => array( "text" => "
		pessimism with regard to the present often comes from ignorance of the errors nad miseries of the past.
",  "author" => "" ),

283 => array( "text" => "
		philosophy teaches us to bear with equanimity the misfortunes of our neighbours.
",  "author" => "Oscar Wilde" ),

284 => array( "text" => "
		power of speech is given to all, wisdom of mind to few.
",  "author" => "" ),

285 => array( "text" => "
		power tends to corrupt, absolute power corrupts absolutely.
",  "author" => "" ),

	// Group:Q 

286 => array( "text" => "
		questions are never indiscreet. Answers sometimes are.
",  "author" => "Oscar Wilde" ),

	// Group:R 

287 => array( "text" => "
		right or wrong, my country.
",  "author" => "" ),

	// Group:S 

288 => array( "text" => "
		scandal: something that has to be very bad to be very good.
",  "author" => "" ),

289 => array( "text" => "
		scepticism is the beginning of Faith.
",  "author" => "Oscar Wilde" ),

290 => array( "text" => "
		science is organized knowledge.
",  "author" => "" ),

291 => array( "text" => "
		selfishness is not living as one wishes to live, it is asking others to live as one wishes to live.
",  "author" => "" ),

292 => array( "text" => "
		self-respect is at basis of good manners.
",  "author" => "" ),

293 => array( "text" => "
		she laughs at everything you say. Why? Because she has fine teeth.
",  "author" => "" ),

294 => array( "text" => "
		smokers and non-smokers cannot be equally free in the same carriage.
",  "author" => "" ),

295 => array( "text" => "
		solitude affects some people like wine; they must not take too much of it, for it flies to the head.
",  "author" => "" ),

296 => array( "text" => "
		solitude is fine when you are at peace with yourself and have something definite to do.
",  "author" => "" ),

297 => array( "text" => "
		some people always look for a job and always avoid work.
",  "author" => "" ),

298 => array( "text" => "
		some people have nothing else but experience.
",  "author" => "" ),

299 => array( "text" => "
		some people think that whatever is done solemnly must make sense.
",  "author" => "" ),

300 => array( "text" => "
		something is rotten in the state of Denmark.
",  "author" => "Hamlet" ),

301 => array( "text" => "
		sometimes tolerance is another name for indifference.
",  "author" => "" ),

302 => array( "text" => "
		steel is produced from iron and poetry from suffering.
",  "author" => "" ),

303 => array( "text" => "
		success depends on knowing how long it will take to succeed.
",  "author" => "" ),

304 => array( "text" => "
		suffering is an essential ingredient of life, the genuine yeast which cannot be replaced by any ersatz.
",  "author" => "" ),

	// Group:T 

305 => array( "text" => "
		taking advantage of any situation that is what some people call intelligence.
",  "author" => "" ),

306 => array( "text" => "
		talk to a man about himself and he will listen to you for hours.
",  "author" => "" ),

307 => array( "text" => "
		the acquiring of culture is the developing of an avid hunger for knowledge and beauty.
",  "author" => "" ),

308 => array( "text" => "
		the ancient historians gave us delightful fiction in the form of fact; the modern novelist presents us with dull facts under the guise of fiction.
",  "author" => "Oscar Wilde" ),

309 => array( "text" => "
		the belief in a supernatural source of evil is not necessary: men alone are capable of every wickedness.
",  "author" => "" ),

310 => array( "text" => "
		the best men seek for truth all their lives long.
",  "author" => "" ),

311 => array( "text" => "
		the best men seek for truth all their lives longthe best that one can say of most modern creative art is that it is just a little less vulgar than reality.
",  "author" => "Oscar Wilde" ),

312 => array( "text" => "
		the character is a long standing habit.
",  "author" => "" ),

313 => array( "text" => "
		the Creeds are believed not because they are rational, but because they are repeated.
",  "author" => "Oscar Wilde" ),

314 => array( "text" => "
		the discontented are the driving force of progress.
",  "author" => "" ),

315 => array( "text" => "
		the discovery of America was the death of art.
",  "author" => "Oscar Wilde" ),

316 => array( "text" => "
		the early bird catches the worm.
",  "author" => "" ),

317 => array( "text" => "
		the first half our life is usually ruined by our parents, and the second by our children.
",  "author" => "" ),

318 => array( "text" => "
		the foolish man wonders at the unusual, but the wise man wonders at the usual.
",  "author" => "" ),

319 => array( "text" => "
		the future influences the present just as much as the past.
",  "author" => "" ),

320 => array( "text" => "
		the great superiority of France over England is that in France every bourgeois wants to be an artist, whereas in England every artist wants to be a bourgeois.
",  "author" => "" ),

321 => array( "text" => "
		the greater the power, the more dangerous its abuse.
",  "author" => "" ),

322 => array( "text" => "
		the greatest event in the history of the universe was the evolution of gas into genius.
",  "author" => "" ),

323 => array( "text" => "
		the greatest fault is to be conscious of none.
",  "author" => "" ),

324 => array( "text" => "
		the greatest fool is he who thinks he is not one and all the others are.
",  "author" => "" ),

325 => array( "text" => "
		the happiest people seem to be those who have no particular reason for being happy except that they are so.
",  "author" => "" ),

326 => array( "text" => "
		the less broth, the more spoons.
",  "author" => "" ),

327 => array( "text" => "
		the majority of husbands remind me of an orang-utan trying to play the violin.
",  "author" => "" ),

328 => array( "text" => "
		the more desperate the love the more funny it seems to others.
",  "author" => "" ),

329 => array( "text" => "
		the more help man gets in his garden, the less it belongs to him.
",  "author" => "" ),

330 => array( "text" => "
		the most dangerous of all falsehoods is a slightly distorted truth.
",  "author" => "" ),

331 => array( "text" => "
		the nearer the bone, the sweeter the flesh.
",  "author" => "" ),

332 => array( "text" => "
		the public have an insatiable curiosity to know everything, except what is worth knowing.
",  "author" => "" ),

333 => array( "text" => "
		the real tragedy of the poor is that they can afford nothing but self- denial.
",  "author" => "Oscar Wilde" ),

334 => array( "text" => "
		the reasonable man adapts himself to the world, the unreasonable man persists in trying to adapt the world to himself. Therefore all progress depends on the unreasonable man.
",  "author" => "" ),

335 => array( "text" => "
		the rest is silence.
",  "author" => "Hamlet" ),

336 => array( "text" => "
		the right man in the right place.
",  "author" => "" ),

337 => array( "text" => "
		the terrible thing about the search for truth is that you find it.
",  "author" => "" ),

338 => array( "text" => "
		the test of good manners is being able to put up with bad ones.
",  "author" => "" ),

339 => array( "text" => "
		the true snob is a man who is afraid to admit that he is bored when he is bored.
",  "author" => "" ),

340 => array( "text" => "
		the usual pretext of those who make others unhappy is that they do it for their own good.
",  "author" => "" ),

341 => array( "text" => "
		the way to be a bore is for an author to say everything.
",  "author" => "" ),

342 => array( "text" => "
		the wealthiest are by no means the happiest.
",  "author" => "" ),

343 => array( "text" => "
		the world is a stage, but the play is badly cast.
",  "author" => "Oscar Wilde" ),

344 => array( "text" => "
		the worst of having a romance of any kind is that it leaves one so unromantic.
",  "author" => "Oscar Wilde" ),

345 => array( "text" => "
		the youth of America is their oldest tradition. It has been going on now for three hundred years.
",  "author" => "Oscar Wilde" ),

346 => array( "text" => "
		there are only three ways by which an individual can get rich: by work, by gift, or by theft.
",  "author" => "" ),

347 => array( "text" => "
		there are only two sure means of forgetfulness known to man: work and drink, and, of the two, work is the more economical.
",  "author" => "" ),

348 => array( "text" => "
		there are so many things one can do without.
",  "author" => "" ),

349 => array( "text" => "
		there have been as many martyrs for bad causes as for good ones.
",  "author" => "" ),

350 => array( "text" => "
		there is no cure for birth and death save to enjoy the interval.
",  "author" => "" ),

351 => array( "text" => "
		There is no place like home.
",  "author" => "" ),

352 => array( "text" => "
		There is no sin except stupidity.
",  "author" => "Oscar Wilde" ),

353 => array( "text" => "
		There is no smoke without fire.
",  "author" => "" ),

354 => array( "text" => "
		There is nothing more horrible than imagination without taste.
",  "author" => "" ),

355 => array( "text" => "
		There is nothing so unlucky as depending on luck.
",  "author" => "" ),

356 => array( "text" => "
		There is nothing wrong with sobriety in moderation.
",  "author" => "" ),

357 => array( "text" => "
		There is this difference between happiness and wisdom: he that thinks himself the happiest man, really is so, but he that thinks himself the wisest is generally the greatest fool.
",  "author" => "" ),

358 => array( "text" => "
		They quarrel about trifles because they hate each other.
",  "author" => "" ),

359 => array( "text" => "
		Those who are at war with others are not at peace with themself.
",  "author" => "" ),

360 => array( "text" => "
		Though all society is founded on intolerance all improvement is founded on tolerance.
",  "author" => "" ),

361 => array( "text" => "
		Thought depends on the stomach, but in spite of that, those who have the best stomachs are not the best thinkers.
",  "author" => "" ),

362 => array( "text" => "
		Time is money.
",  "author" => "" ),

363 => array( "text" => "
		Time is waste of money.
",  "author" => "Oscar Wilde" ),

364 => array( "text" => "
		To admire is the only way of imitating without losing originality.
",  "author" => "" ),

365 => array( "text" => "
		To be happy add to your possessions but subtract from your desires.
",  "author" => "" ),

366 => array( "text" => "
		To be happy at home is the most important condition of a good life.
",  "author" => "" ),

367 => array( "text" => "
		To be natural is such a very difficult pose to keep up.
",  "author" => "Oscar Wilde" ),

368 => array( "text" => "
		To be on the spot when the opportunity for greatness occurs is the essential thing.
",  "author" => "" ),

369 => array( "text" => "
		To be or not to be, that is the question.
",  "author" => "Hamlet" ),

370 => array( "text" => "
		To die for one's theological beliefs is the worst use a man can make of his life.
",  "author" => "Oscar Wilde" ),

371 => array( "text" => "
		To fall in love with a woman is to fall in love with life and with oneself.
",  "author" => "" ),

372 => array( "text" => "
		To laugh at men of sense is the privilege of fools.
",  "author" => "" ),

373 => array( "text" => "
		To like what you have is to have what you like.
",  "author" => "" ),

374 => array( "text" => "
		To profit from good advice demands more wisdom than to give it.
",  "author" => "" ),

375 => array( "text" => "
		To recommend thrift to the poor is both grotesque and insulting.
",  "author" => "Oscar Wilde" ),

376 => array( "text" => "
		To regret one's own experiences is to arrest one's own development.
",  "author" => "Oscar Wilde" ),

377 => array( "text" => "
		To say that a man is vain means merely that he is pleased with the effect he produces on other people. A conceited man is satisfied with the effect he produces on himself.
",  "author" => "" ),

378 => array( "text" => "
		To turn events into ideas is the function of literature.
",  "author" => "" ),

379 => array( "text" => "
		To win back my youth there is nothing I wouldn't do except take exercise, get up early, or be a useful member of community.
",  "author" => "" ),

380 => array( "text" => "
		Truth crushed to earth will rise again.
",  "author" => "" ),

381 => array( "text" => "
		Truth is always paradoxical.
",  "author" => "" ),

	// Group:V 

382 => array( "text" => "
		Visits always give pleasure: if not the coming, then the going.
",  "author" => "" ),

	// Group:W 

383 => array( "text" => "
		Water taken in moderation can't hurt anybody.
",  "author" => "" ),

384 => array( "text" => "
		We all find time to do what we really want to do.
",  "author" => "" ),

385 => array( "text" => "
		We are always bored by those whom we bore.
",  "author" => "" ),

386 => array( "text" => "
		We are by nature already condemned to die which sentence no man can pardon.
",  "author" => "" ),

387 => array( "text" => "
		We are interested in others when they are interested in us.
",  "author" => "" ),

388 => array( "text" => "
		We are not satisfied to be right, unless we can prove others to be quite wrong.
",  "author" => "" ),

389 => array( "text" => "
		We are tired by the work we do not do, not by what we do.
",  "author" => "" ),

390 => array( "text" => "
		We hardly find any person of good sense save those who agree with us.
",  "author" => "" ),

391 => array( "text" => "
		We learn from experience that men never learn from experience.
",  "author" => "" ),

392 => array( "text" => "
		We live in the age in which people are so industrious that they become absolutely stupid.
",  "author" => "Oscar Wilde" ),

393 => array( "text" => "
		We must make the world honest before we can honestly say to our children that honesty is the best policy.
",  "author" => "" ),

394 => array( "text" => "
		We must not look for a calm life in the age of jets.
",  "author" => "" ),

395 => array( "text" => "
		We often read with as much talent as we write.
",  "author" => "" ),

396 => array( "text" => "
		We profit little from books we don't enjoy.
",  "author" => "" ),

397 => array( "text" => "
		What a dustbin is the memory of a man who never forgets.
",  "author" => "" ),

398 => array( "text" => "
		What a man thinks of himself, influences his fate.
",  "author" => "" ),

399 => array( "text" => "
		What begins in happiness is doomed to end in misery.
",  "author" => "" ),

400 => array( "text" => "
		What holy cities are to nomadic tribes: a symbol of race and a bond of union, great books are to the wandering souls of men: they are the Meccas of the mind.
",  "author" => "" ),

401 => array( "text" => "
		What is a highbrow? He is a man who has found something more interesting than women.
",  "author" => "" ),

402 => array( "text" => "
		What is love? The need to escape from oneself.
",  "author" => "" ),

403 => array( "text" => "
		What is not useful to any is harmful to all.
",  "author" => "" ),

404 => array( "text" => "
		What is written without effort is usually read without pleasure.
",  "author" => "" ),

405 => array( "text" => "
		When a man acts he is a puppet. When he describes he is a poet.
",  "author" => "Oscar Wilde" ),

406 => array( "text" => "
		When a man gets talking about himself he seldom fails to be eloquent.
",  "author" => "" ),

407 => array( "text" => "
		When a man has no enemy left there must be something mean about him.
",  "author" => "Oscar Wilde" ),

408 => array( "text" => "
		When a man is tired of London he is tired of life.
",  "author" => "" ),

409 => array( "text" => "
		When one is in love one begins by deceiving oneself, and one ends by deceiving others.
",  "author" => "" ),

410 => array( "text" => "
		When people agree with me I always feel that I must be wrong.
",  "author" => "" ),

411 => array( "text" => "
		When the gods wish to punish us they answer our prayers.
",  "author" => "Oscar Wilde" ),

411 => array( "text" => "
		When the public describe a work as grossly immoral, they mean that the artist has said or made a beautiful thing that is true.
",  "author" => "Oscar Wilde" ),

412 => array( "text" => "
		When you walk or ride a bike you see the country at your own speed.
",  "author" => "" ),

413 => array( "text" => "
		Where it is duty to worship the sun, it is a crime to examine the laws of heat.
",  "author" => "" ),

414 => array( "text" => "
		Where there is a will there is a way.
",  "author" => "" ),

415 => array( "text" => "
		While an author is yet living, we estimate his powers by his worst performance; and when he is dead, we rate them by his best.
",  "author" => "" ),

416 => array( "text" => "
		Who is loved by everybody has much trouble.
",  "author" => "" ),

417 => array( "text" => "
		Wisdom denotes the pursuing of the best ends by the best means.
",  "author" => "" ),

418 => array( "text" => "
		Wishful thinking.
",  "author" => "" ),

419 => array( "text" => "
		With freedom, flowers, books and the moon, who could not be perfectly happy?.
",  "author" => "Oscar Wilde." ),

420 => array( "text" => "
		Women are the most reliable as they have no memory for the important.
",  "author" => "Oscar Wilde." ),

421 => array( "text" => "
		Women love us for our defects. If we have enough of them they will forgive us even our superior intellects.
",  "author" => "" ),

422 => array( "text" => "
		Worry is like sand in an oyster: a little produces a pearl, too much kills the animal.
",  "author" => "" ),

	// Group:Y 

423 => array( "text" => "
		Yawn is at least an honest opinion.
",  "author" => "" ),

424 => array( "text" => "
		You are not permitted to kill a woman who has injured you, but nothing forbids you to reflect that she is growing older every minute.
",  "author" => "" ),

425 => array( "text" => "
		You can always kill with a knife, but you can't always break a man's will with it.
",  "author" => "" ),

426 => array( "text" => "
		You can never plan the future by the past.
",  "author" => "" ),

427 => array( "text" => "
		You can tell a man by his work.
",  "author" => "" ),

428 => array( "text" => "
		You can't be independent of all people.
",  "author" => "" ),

429 => array( "text" => "
		You can't see much in a little town but what you hear makes up for it.
",  "author" => "" ),

430 => array( "text" => "
		You can't tell an honest man from a rogue, at least not at the first sight.
",  "author" => "" ),

431 => array( "text" => "
		You may be sure that when a man begins to call himself a 'realist', he is preparing to do something he is secretly ashamed of doing.
",  "author" => "" ),

432 => array( "text" => "
		You must not find symbols in everything you see. It makes life impossible.
",  "author" => "Oscar Wilde" ),

433 => array( "text" => "
		You shall judge of a man by his foes as well as by his friends.
",  "author" => "" ),

434 => array( "text" => "
		Youth is the one thing worth having.
",  "author" => "Oscar Wilde" ),


// New

435 => array( "text" => "
		It is the fight alone that pleases us, not the victory. 
",  "author" => "Blaise Pascal" ),

436 => array( "text" => "
		What saves a man is to take a step.  Then another step.  It is always the same step, but you have to take it. 
",  "author" => "Antoine de Saint-Exup&eacute;ry" ),

437 => array( "text" => "
		Don't wait for the Last Judgment. It happens every day.  
",  "author" => "Albert Camus" ),

438 => array( "text" => "
		Good for the body is the work of the body, and good for the soul is the work of the soul, and good for either is the work of the other.
",  "author" => "Henry David Thoreau" ),

439 => array( "text" => "
		Anyone can carry his burden, however hard, until nightfall.  Anyone can do his work, however hard, for one day.  Anyone can live sweetly, patiently, lovingly, purely, till the sun goes down.  And this is all life really means.  
",  "author" => "Robert Louis Stevenson" ),


440 => array( "text" => "
		If you don't like how things are, change it!  You're not a tree.  
",  "author" => "Jim Rohn" ),

441 => array( "text" => "
		See everything; overlook a great deal; correct a little.  
",  "author" => "Pope John XXIII" ),

442 => array( "text" => "
		Give thanks for what you are now, and keep fighting for what you want to be tomorrow.  
",  "author" => "Fernanda Miramontes-Landeros" ),

443 => array( "text" => "
		Enjoy when you can, and endure when you must.  
",  "author" => "Johann Wolfgang von Goethe" ),

443 => array( "text" => "
		Now that it's all over, what did you really do yesterday that's worth mentioning?  
",  "author" => "Coleman Cox" ),

444 => array( "text" => "
		If you surrender to the wind, you can ride it.   
",  "author" => "Toni Morrison" ),

445 => array( "text" => "
		Never miss an opportunity to make others happy, even if you have to leave them alone in order to do it.  
",  "author" => "" ),

446 => array( "text" => "
		Sometimes it's more important to be human, than to have good taste.  
",  "author" => "Brecht" ),

447 => array( "text" => "
		We have to live today by what truth we can get today and be ready tomorrow to call it falsehood.  
",  "author" => "William James" ),

448 => array( "text" => "
		You can tell more about a person by what he says about others than you can by what others say about him.  
",  "author" => "Leo Aikman" ),

449 => array( "text" => "
		Seek freedom and become captive of your desires.  Seek discipline and find your liberty.  
",  "author" => "Frank Herbert, Dune Chronicles" ),

450 => array( "text" => "
		The first and greatest victory is to conquer yourself; to be conquered by yourself is of all things most shameful and vile.  
",  "author" => "Plato" ),

451 => array( "text" => "
		Pick battles big enough to matter, small enough to win.  
",  "author" => "Jonathan Kozel" ),

452 => array( "text" => "
		Tough and funny and a little bit kind:  that is as near to perfection as a human being can be.  
",  "author" => "Mignon McLaughlin" ),

453 => array( "text" => "
		Do what you can, with what you have, where you are.   
",  "author" => "Theodore Roosevelt" ),

454 => array( "text" => "
		Face what you think you believe and you will be surprised.   
",  "author" => "William Hale White" ),

455 => array( "text" => "
		Don't look where you fall, but where you slipped.   
",  "author" => "African Proverb" ),

456 => array( "text" => "
		The important thing is this:  To be able at any moment to sacrifice that which we are for what we could become.   
",  "author" => "Charles DuBois" ),

457 => array( "text" => "
		Time you enjoy wasting, was not wasted.  
",  "author" => "John Lennon" ),

458 => array( "text" => "
		It is every man's obligation to put back into the world at least the equivalent of what he takes out of it.  
",  "author" => "Albert Einstein" ),

459 => array( "text" => "
		Don't judge each day by the harvest you reap but by the seeds that you plant.  
",  "author" => "Robert Louis Stevenson" ),

460 => array( "text" => "
		In this age, which believes that there is a short cut to everything, the greatest lesson to be learned is that the most difficult way is, in the long run, the easiest. 
",  "author" => "Henry Miller" ),

461 => array( "text" => "
		Whatever you are be a good one.
",  "author" => "Abraham Lincoln" ),

462 => array( "text" => "
		Think of your faults the first part of the night when you are awake, and the faults of others the latter part of the night when you are asleep.
",  "author" => "Chinese Proverb" ),

463 => array( "text" => "
		When \"Why not do it?\" barely outweights \"Why do it?\" - don't do it. 
",  "author" => "Mignon McLaughlin" ),


464 => array( "text" => "
		Life is like riding a bicycle - in order to keep your balance, you must keep moving.  
",  "author" => "Albert Einstein" ),

465 => array( "text" => "
		The biggest problem in the world<br/>
		Could have been solved when it was small.
",  "author" => "Witter Bynner" ),


466 => array( "text" => "
		Take the bull by the horns.
",  "author" => "" ),

467 => array( "text" => "
		Don’t count your chickens before they hatch.
",  "author" => "" ),

468 => array( "text" => "
		Curiosity killed the cat.
",  "author" => "" ),

469 => array( "text" => "
		What’s good for the goose is good for the gander.
",  "author" => "" ),

470 => array( "text" => "
		Kill two birds with one stone.
",  "author" => "" ),

471 => array( "text" => "
		He who lies with dogs, rises with fleas.
",  "author" => "" ),

);

	$min = 1 ; $max = 471;
	$output = $wp_sentence[rand($min,$max)];

	$output_fin = '<ul class="wp_sentence">' . $wp_sentence_start . $output["text"]. $wp_sentence_center . $output["author"]. $wp_sentence_end . '</ul>';
	
	return $output_fin;
}

function wp_sentence(){
	
	$output = wp_get_sentence() ;

	echo $output;
}



add_action('plugins_loaded', 'widget_sidebar_wp_sentence');
function widget_sidebar_wp_sentence() {
	function widget_wp_sentence($args) {
	    extract($args);
		
		echo $before_widget;
		
		$output = wp_get_sentence($before_title,$after_title);
		echo $output;
		echo $after_widget;
	}
	register_sidebar_widget('WP Sentence', 'widget_wp_sentence');
}



