
-- INSERT文
INSERT INTO `survey` (`nickname`,`email`,`content`) VALUES ("べっち","betti@gmail.com","北斎にハマってる"),("ひろし","hiroshi@gmail.com","ドローンが趣味");
INSERT INTO `survey` (`nickname`,`email`,`content`) VALUES ("なおき","naoki@gmail.com","国際交流イェイ！"),("よーへい","yohei@gmail.com","フェデラーが好き");
INSERT INTO `survey` (`nickname`,`email`,`content`) VALUES ("ザッキー","zakiyama@gmail.com","ブラック企業は嫌いです"),("げんと","gento@gmail.com","俺以外といろんな言語知ってる");
INSERT INTO `survey` (`nickname`,`email`,`content`) VALUES ("かよさん","kayo@gmail.com","ねむ〜い"),("ひとしさん","hitoshi@gmail.com","キャニオニング楽しいよ");
INSERT INTO `survey` (`nickname`,`email`,`content`) VALUES ("しゅんたくん","syunta@gmail.com","風邪長引きますよ"),("りょうさん","ryo@gmail.com","ロンブー２号と同姓同名なんです");
INSERT INTO `survey` (`nickname`,`email`,`content`) VALUES ("かな","kana@gmail.com","ジンベイザメ見たーい");

-- SELEST文（語尾に「です」）
SELECT * FROM `survey` WHERE `content` LIKE "%です"

-- UPDATE文（語尾に「です」-> 「セブ最高だぜ」に変更）
UPDATE `survey` SET `content` = "セブ最高だぜ" WHERE `content` LIKE "%です"

-- DELETE文（「セブ最高だぜ」に変更されたデータを消す）
DELETE FROM `survey` WHERE `content` = "セブ最高だぜ"

