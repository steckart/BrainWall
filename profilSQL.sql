
--- Personal Data SQL

---First Name ----------
SELECT first_name FROM xtf1_personaldata WHERE personalid ...

---Last Name ----------
SELECT last_name FROM xtf1_personaldata WHERE personalid ...

---Street --------
SELECT street FROM xtf1_personaldata WHERE personalid ...

---ZIP ----------
SELECT zip FROM xtf1_personaldata WHERE personalid ...

---Location ----------
SELECT location FROM xtf1_personaldata WHERE personalid ...

---Birth Date ----------
SELECT birth_date FROM xtf1_personaldata WHERE personalid ...

---Phone Number ----------
SELECT phone FROM xtf1_personaldata WHERE personalid ...


--- Profile SQL

---Ape Index
SELECT apeindex, height, climbingscore FROM xtf1_profile WHERE profile_id

--- Height
SELECT height FROM xtf1_profile WHERE profile_id

---Climbing Score
SELECT climbingscore FROM xtf1_profile WHERE profile_id

--- Avatar
SELECT image FROM xtf1_profile WHERE profile_id

---Rolle
SELECT name FROM xtf1_role WHERE roleid

<!--SQLSelect---"SELECT first_name, last_name, street, zip, location, birth_date, phone  FROM xtf1_personaldata WHERE profile_id = -->