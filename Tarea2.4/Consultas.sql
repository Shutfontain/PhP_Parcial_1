/* NUMERO 1 */
select * from alumnos;

/* NUMERO 2 */
select nombre,localidad,fecha_nac from alumnos;

/* NUMERO 3 */
SELECT nombre AS 'Nombre y apellidos' FROM alumnos;

/* NUMERO 4 */
SELECT nombre, faltas * 2 AS 'Faltas de asistencia' FROM alumnos;

/* NUMERO 5 */
SELECT * FROM alumnos WHERE localidad = 'Lorca';

/* NUMERO 6 */
SELECT * FROM alumnos WHERE localidad = 'Murcia' OR localidad = 'Alhama de Murcia';

/* NUMERO 7 */
SELECT * FROM alumnos WHERE localidad = 'Murcia' AND curso = 1 AND nivel = 'ESO';

/* NUMERO 8 */
SELECT * FROM alumnos WHERE localidad = 'Lorca' AND curso = 2 AND nivel = 'BACHILLER' AND faltas > 10;

/* NUMERO 9 */
SELECT * FROM alumnos WHERE localidad = 'Murcia' ORDER BY nombre;

/* NUMERO 10 */
SELECT * FROM alumnos ORDER BY nivel, curso;

/* NUMERO 11 */
SELECT * FROM alumnos WHERE (curso = 1 OR curso = 2) AND faltas > 10;

/* NUMERO 12 */
SELECT * FROM alumnos WHERE (curso = 3 OR curso = 4) AND faltas < 10 AND localidad = 'Murcia';

/* NUMERO 13 */
SELECT DISTINCT curso FROM alumnos;

/* NUMERO 14 */
SELECT * FROM alumnos WHERE curso = 1 AND nivel = 'ESO' AND faltas != 10;

/* NUMERO 15 */
SELECT * FROM alumnos WHERE nombre LIKE 'B%';

/* NUMERO 16 */
SELECT * FROM alumnos WHERE localidad = 'Murcia' AND nombre LIKE '%O';

/* NUMERO 17 */
SELECT * FROM alumnos WHERE curso = 1 AND nivel = 'ESO' AND SUBSTRING(nombre, 2, 1) = 'U';

/* NUMERO 18 */
SELECT * FROM alumnos WHERE faltas IS NULL;

/* NUMERO 19 */
SELECT * FROM alumnos WHERE faltas BETWEEN 10 AND 20 ORDER BY nombre;

/* NUMERO 20 */
SELECT * FROM alumnos WHERE localidad = 'Murcia' AND faltas BETWEEN 10 AND 20;

/* NUMERO 21 */
SELECT * FROM alumnos WHERE localidad = 'Murcia' AND curso = 1 AND nivel = 'ESO' AND faltas BETWEEN 10 AND 20;

/* NUMERO 22 */
SELECT * FROM alumnos WHERE faltas < 10 OR faltas > 20;

/* NUMERO 23 */
SELECT * FROM alumnos WHERE YEAR(fecha_nac) BETWEEN 1993 AND 1994 ORDER BY nombre;

/* NUMERO 24 */
SELECT * FROM alumnos WHERE curso IN (1, 2);

/* NUMERO 25 */
SELECT * FROM alumnos WHERE curso IN (3, 4) AND localidad = 'Murcia';

/* NUMERO 26 */
SELECT * FROM alumnos WHERE nivel NOT IN ('ESO') ORDER BY curso, nombre DESC;

/* NUMERO 27 */
SELECT * FROM alumnos WHERE curso IN (1, 2) AND nivel != 'BACHILLER' ORDER BY nombre;

/* NUMERO 28 */
SELECT * FROM alumnos WHERE nombre LIKE 'J%' AND faltas > 10 AND nivel != 'BACHILLER' ORDER BY curso, nombre;

/* NUMERO 29 */
SELECT expediente, nombre, curso, nivel FROM alumnos 
WHERE nivel != 'BACHILLER' ORDER BY curso ASC, nivel ASC, nombre DESC;

/* NUMERO 30 */
SELECT UPPER(nombre) AS nombre_mayuscula FROM alumnos WHERE localidad = 'Murcia';

/* NUMERO 31 */
SELECT UPPER(nombre) AS nombre_mayuscula, LOWER(localidad) AS localidad_minuscula FROM alumnos 
ORDER BY localidad;

/* NUMERO 32 */
SELECT CONCAT(nombre, ', ', REPLACE(nivel, 'BACHILLER', 'Bachillerato')) AS nombre_localidad_modificado 
FROM alumnos;

/* NUMERO 33 */
SELECT nombre, LENGTH(nombre) AS longitud_nombre FROM alumnos;

/* NUMERO 34 */
SELECT nombre, YEAR(fecha_nac) AS ano_nacimiento, MONTH(fecha_nac) AS mes_nacimiento FROM alumnos;

/* NUMERO 35 */
SELECT nombre, YEAR(NOW()) - YEAR(fecha_nac) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(fecha_nac, '%m%d')) AS edad FROM alumnos;

