# Feature Set 1
Place your queries below
SELECT * FROM `Student Names` WHERE `username`='shah1129'
UPDATE `Student Names` SET `email`='m@gmail.com' WHERE username='shah1129'
INSERT INTO `Student Names`(`name`, `email`, `username`, `password`) VALUES ('Mandy','mandy@gmail.com','mandy123','thisisagreatpassword')
DELETE FROM `Student Names` WHERE `username`='Mandy123'

#Feature Set 2
SELECT * FROM `todo_items(FS2)` WHERE `USER_ID`='1'
INSERT INTO `todo_items(FS2)`(`ID`, `TITLE`, `DETAILS`, `TIMESTAMP`, `USER_ID`) VALUES ('1','More Laundry','second load','1449210819','1')
DELETE FROM `todo_items(FS2)` WHERE ID='1'
UPDATE `todo_items(FS2)` SET `ID`='11',`TITLE`='CODINGCRACK' WHERE `USER_ID`='3'
SELECT * FROM `Student Names` WHERE `USER_ID` = '4'

