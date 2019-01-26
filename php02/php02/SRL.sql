INSERT INTO gs_an_table(name,email,naiyou,indate) VALUES(:name,:email,:naiyou,sysdate())

SELECT * FROM gs_an_table WHERE name='村瀬'

SELECT * FROM gs_an_table WHERE id=1

SELECT * FROM gs_an_table WHERE name LIKE '%西%'

SELECT * FROM gs_an_table ORDER BY indate DESC
SELECT * FROM gs_an_table ORDER BY indate DESC LIMIT 3
