# INSERT STATEMENT
```mysql
INSERT INTO users (firstname, lastname, password, birthdate, username, currency_id) VALUES ('test', 'test', 'base64pass', '2018-06-26', 'krasserzockertypX-X-X__XXX_trppleX', 1)
```


# SELECT STATEMENT

```mysql
SELECT firstname FROM users;
SELECT firstname, lastname FROM users;
SELECT * FROM users WHERE firstname = "test";
SELECT * FROM users WHERE firstname = "test" AND id = 1;
SELECT * FROM users WHERE firstname = "test" OR id = 1;
SELECT * FROM users WHERE firstname = "test" OR id = 1 AND lastname = "test2";
SELECT * FROM users WHERE firstname LIKE '%te%';

/* Multi Table Query */
SELECT u.*, c.bank 
FROM users AS u, currencies AS c 
WHERE u.currency_id = c.id

```


# UPDATE STATEMENT

```mysql
UPDATE users SET firstname = "Marten";
UPDATE users SET firstname = "Marten" WHERE id = 1;
UPDATE users SET firstname = "Marten" WHERE id = 1 AND firstname = "value";
```


# DELETE STATEMENT

```mysql
DELETE FROM users WHERE id = 1;
DELETE FROM users WHERE id = 1 AND lastname = "hugo";
```

# Backup Database
```bash
mysqldump -u root -p database_name > /path/to/file.sql
```

# import backup
```bash
mysql -u root -p target_database < /path/to/import/file
```