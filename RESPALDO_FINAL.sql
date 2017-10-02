--------------------------------------------------------
-- Archivo creado  - domingo-octubre-01-2017   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Type AVE_CANTIDAD_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."AVE_CANTIDAD_RECORD" 
AS TABLE OF T_AVE_CANTIDAD;

/
--------------------------------------------------------
--  DDL for Type AVE_ESPECIE_GENERO_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."AVE_ESPECIE_GENERO_RECORD" AS TABLE OF t_ave_especie_genero

/
--------------------------------------------------------
--  DDL for Type AVE_GENERAL_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."AVE_GENERAL_RECORD" 
AS TABLE OF T_AVE_GENERAL;

/
--------------------------------------------------------
--  DDL for Type AVE_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."AVE_RECORD" AS TABLE OF t_ave

/
--------------------------------------------------------
--  DDL for Type AVE_TIPO_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."AVE_TIPO_RECORD" 
AS TABLE OF T_AVE_TIPO;

/
--------------------------------------------------------
--  DDL for Type AVISTAMIENTO_GENERAL_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."AVISTAMIENTO_GENERAL_RECORD" 
AS TABLE OF T_AVISTAMIENTO_GENERAL;

/
--------------------------------------------------------
--  DDL for Type AVISTAMIENTO_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."AVISTAMIENTO_RECORD" AS TABLE OF t_avistamiento


/
--------------------------------------------------------
--  DDL for Type BITACORA_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."BITACORA_RECORD" AS TABLE OF t_bitacora


/
--------------------------------------------------------
--  DDL for Type CANTON_GENERAL_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."CANTON_GENERAL_RECORD" 
AS TABLE OF T_CANTON_GENERAL;

/
--------------------------------------------------------
--  DDL for Type CANTON_PROVINCIA_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."CANTON_PROVINCIA_RECORD" 
AS TABLE OF T_CANTON_PROVINCIA;

/
--------------------------------------------------------
--  DDL for Type CANTON_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."CANTON_RECORD" AS TABLE OF t_canton


/
--------------------------------------------------------
--  DDL for Type CLASE_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."CLASE_RECORD" AS TABLE OF t_clase


/
--------------------------------------------------------
--  DDL for Type COLOR_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."COLOR_RECORD" AS TABLE OF t_color


/
--------------------------------------------------------
--  DDL for Type CONTINENTE_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."CONTINENTE_RECORD" AS TABLE OF t_continente


/
--------------------------------------------------------
--  DDL for Type ESPECIE_GENERO_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."ESPECIE_GENERO_RECORD" AS TABLE OF T_ESPECIE_GENERO;

/
--------------------------------------------------------
--  DDL for Type ESPECIE_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."ESPECIE_RECORD" AS TABLE OF t_especie


/
--------------------------------------------------------
--  DDL for Type FAMILIA_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."FAMILIA_RECORD" AS TABLE OF t_familia


/
--------------------------------------------------------
--  DDL for Type FAMILIA_SUBORDEN_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."FAMILIA_SUBORDEN_RECORD" 
AS TABLE OF T_FAMILIA_SUBORDEN;

/
--------------------------------------------------------
--  DDL for Type FOTO_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."FOTO_RECORD" AS TABLE OF t_foto


/
--------------------------------------------------------
--  DDL for Type GENERO_FAMILIA_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."GENERO_FAMILIA_RECORD" 
AS TABLE OF T_GENERO_FAMILIA;

/
--------------------------------------------------------
--  DDL for Type GENERO_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."GENERO_RECORD" AS TABLE OF t_genero


/
--------------------------------------------------------
--  DDL for Type ORDEN_CLASE_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."ORDEN_CLASE_RECORD" 
AS TABLE OF T_ORDEN_CLASE;

/
--------------------------------------------------------
--  DDL for Type ORDEN_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."ORDEN_RECORD" AS TABLE OF t_orden


/
--------------------------------------------------------
--  DDL for Type PAIS_CONTINENTE_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."PAIS_CONTINENTE_RECORD" 
AS TABLE OF T_PAIS_CONTINENTE;

/
--------------------------------------------------------
--  DDL for Type PAIS_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."PAIS_RECORD" AS TABLE OF t_pais


/
--------------------------------------------------------
--  DDL for Type PARAMETRO_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."PARAMETRO_RECORD" AS TABLE OF t_parametro


/
--------------------------------------------------------
--  DDL for Type PERSONA_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."PERSONA_RECORD" AS TABLE OF t_persona


/
--------------------------------------------------------
--  DDL for Type PERSONA_USUARIO_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."PERSONA_USUARIO_RECORD" 
AS TABLE OF T_PERSONA_USUARIO;

/
--------------------------------------------------------
--  DDL for Type PROVINCIA_PAIS_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."PROVINCIA_PAIS_RECORD" 
AS TABLE OF T_PROVINCIA_PAIS;

/
--------------------------------------------------------
--  DDL for Type PROVINCIA_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."PROVINCIA_RECORD" AS TABLE OF t_provincia


/
--------------------------------------------------------
--  DDL for Type PUNTAJE_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."PUNTAJE_RECORD" AS TABLE OF t_puntaje


/
--------------------------------------------------------
--  DDL for Type SUBORDEN_ORDEN_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."SUBORDEN_ORDEN_RECORD" 
AS TABLE OF T_SUBORDEN_ORDEN;

/
--------------------------------------------------------
--  DDL for Type SUBORDEN_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."SUBORDEN_RECORD" AS TABLE OF t_suborden


/
--------------------------------------------------------
--  DDL for Type T_AVE
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_AVE" AS OBJECT
(
    "ID_AVE" NUMBER(11,0), 
    "ESPECIE" VARCHAR2(100 BYTE), 
    "NOMBRE" VARCHAR2(100 BYTE), 
    "COLOR" VARCHAR2(100 BYTE),     
    "TIPO" VARCHAR2(100 BYTE), 
    "TAMANO" VARCHAR2(100 BYTE), 
    "IMAGEN" VARCHAR2(100 BYTE),
	"COLORID" NUMBER(11,0), 
	"TIPOID" NUMBER(11,0)	
);

/
--------------------------------------------------------
--  DDL for Type T_AVE_CANTIDAD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_AVE_CANTIDAD" AS OBJECT 
( 
    "ID_AVE" NUMBER(11,0),
    "CANTIDAD" NUMBER(20,0)
)

/
--------------------------------------------------------
--  DDL for Type T_AVE_ESPECIE_GENERO
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_AVE_ESPECIE_GENERO" AS OBJECT 
( 
    "ID_AVE" NUMBER(11,0), 
    "NOMBRE_COMUN" VARCHAR2(100 BYTE), 
    "NOMBRE_CIENTIFICO" VARCHAR2(200 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_AVE_GENERAL
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_AVE_GENERAL" AS OBJECT 
(
    "ID_AVE" NUMBER(11,0), 	
	"NOMBRE_COMUN" VARCHAR2(100 BYTE), 
    "NOMBRE_CIENTIFICO" VARCHAR2(200 BYTE), 
    "GENERO" VARCHAR2(100 BYTE),
    "ESPECIE" VARCHAR2(100 BYTE),
    "FAMILIA" VARCHAR2(100 BYTE),
    "SUBORDEN" VARCHAR2(100 BYTE),
    "ORDEN" VARCHAR2(100 BYTE),
    "CLASE" VARCHAR2(100 BYTE),
    "TIPO" VARCHAR2(100 BYTE),
	"IMAGEN" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_AVE_TIPO
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_AVE_TIPO" AS OBJECT 
( 
    "ID_AVE" NUMBER(11,0), 	
    "ESPECIE" VARCHAR2(100 BYTE),
	"NOMBRE" VARCHAR2(100 BYTE), 
    "COLOR" VARCHAR2(100 BYTE),  
    "TIPO" VARCHAR2(100 BYTE),
    "TAMANO" VARCHAR2(100 BYTE),
	"IMAGEN" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_AVISTAMIENTO
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_AVISTAMIENTO" AS OBJECT
(
    "ID_AVISTAMIENTO" NUMBER(11,0), 
	"ID_PERSONA" NUMBER(11,0), 
	"ID_AVE" NUMBER(11,0), 
	"LATITUD" VARCHAR2(100 BYTE), 
	"LONGITUD" VARCHAR2(100 BYTE), 
	"FOTO" VARCHAR2(20 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_AVISTAMIENTO_GENERAL
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_AVISTAMIENTO_GENERAL" AS OBJECT 
(
    "ID_AVISTAMIENTO" NUMBER(11,0),  
	"NOMBRE" VARCHAR2(100 BYTE), 
	"NOMBRE_COMUN" VARCHAR2(100 BYTE), 
	"FOTO" VARCHAR2(20 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_BITACORA
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_BITACORA" AS OBJECT
(
    "ID_BITACORA" NUMBER(11,0), 
	"ID_USUARIO" NUMBER(11,0), 
	"CONTRASENA" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_BITACORA_PERSONA
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_BITACORA_PERSONA" AS OBJECT 
( 
    "ID_BITACORA" NUMBER(11,0), 
	"ID_USUARIO" NUMBER(11,0), 
	"CONTRASENA" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_CANTON
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_CANTON" AS OBJECT
(
    "ID_CANTON" NUMBER(11,0), 
	"ID_PROVINCIA" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_CANTON_GENERAL
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_CANTON_GENERAL" AS OBJECT 
( 
	"UBICACION" VARCHAR2(100 BYTE),
    "ID_CANTON" NUMBER(11,0)
)

/
--------------------------------------------------------
--  DDL for Type T_CANTON_PROVINCIA
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_CANTON_PROVINCIA" AS OBJECT 
( 
    "ID_CANTON" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE),
    "PROVINCIA" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_CLASE
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_CLASE" AS OBJECT
(
    "ID_CLASE" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_COLOR
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_COLOR" AS OBJECT
(
    "ID_COLOR" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_CONTINENTE
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_CONTINENTE" AS OBJECT
(
    "ID_CONTINENTE" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_ESPECIE
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_ESPECIE" AS OBJECT
(
    "ID_ESPECIE" NUMBER(11,0), 
	"ID_GENERO" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_ESPECIE_GENERO
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_ESPECIE_GENERO" AS OBJECT 
(
    "ID_ESPECIE" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE),
    "GENERO" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_FAMILIA
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_FAMILIA" AS OBJECT
(
    "ID_FAMILIA" NUMBER(11,0), 
	"ID_SUBORDEN" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_FAMILIA_SUBORDEN
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_FAMILIA_SUBORDEN" AS OBJECT 
( 
    "ID_FAMILIA" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE),
    "SUBORDEN" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_FOTO
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_FOTO" AS OBJECT
(
    "ID_FOTO" NUMBER(11,0), 
	"ID_AVISTAMIENTO" NUMBER(11,0), 
	"URL" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_GENERO
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_GENERO" AS OBJECT
(
    "ID_GENERO" NUMBER(11,0), 
	"ID_FAMILIA" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_GENERO_FAMILIA
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_GENERO_FAMILIA" AS OBJECT 
( 
    "ID_GENERO" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE),
    "FAMILIA" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type TIPO_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."TIPO_RECORD" AS TABLE OF t_tipo


/
--------------------------------------------------------
--  DDL for Type T_ORDEN
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_ORDEN" AS OBJECT
(
    "ID_ORDEN" NUMBER(11,0), 
	"ID_CLASE" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_ORDEN_CLASE
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_ORDEN_CLASE" AS OBJECT 
( 
    "ID_ORDEN" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE),
    "CLASE" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_PAIS
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_PAIS" AS OBJECT
(
    "ID_PAIS" NUMBER(11,0), 
	"ID_CONTINENTE" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_PAIS_CONTINENTE
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_PAIS_CONTINENTE" AS OBJECT 
( 
    "ID_PAIS" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE),
    "CONTINENTE" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_PARAMETRO
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_PARAMETRO" AS OBJECT
(
    "ID_PARAMETRO" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE), 
	"DESCRIPCION" VARCHAR2(1000 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_PERSONA
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_PERSONA" AS OBJECT
(
    "ID_PERSONA" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE), 
	"APELLIDO" VARCHAR2(100 BYTE), 
	"FECHA_NACIMIENTO" DATE, 
	"EMAIL" VARCHAR2(100 BYTE), 
	"PROFESION" VARCHAR2(100 BYTE), 
	"TIPO" VARCHAR2(100 BYTE), 
	"FOTO" VARCHAR2(50 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_PERSONA_USUARIO
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_PERSONA_USUARIO" AS OBJECT 
( 
    "ID_PERSONA" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE), 
	"APELLIDO" VARCHAR2(100 BYTE), 
	"FECHA_NACIMIENTO" DATE, 
	"EMAIL" VARCHAR2(100 BYTE), 
	"PROFESION" VARCHAR2(100 BYTE), 
	"TIPO" VARCHAR2(100 BYTE), 
	"FOTO" VARCHAR2(50 BYTE),
    "ID_USUARIO" NUMBER(11,0), 
	"USUARIO" VARCHAR2(100 BYTE), 
	"CONTRASENA" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_PROVINCIA
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_PROVINCIA" AS OBJECT
(
    "ID_PROVINCIA" NUMBER(11,0), 
	"ID_PAIS" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_PROVINCIA_PAIS
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_PROVINCIA_PAIS" AS OBJECT 
( 
    "ID_PROVINCIA" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE),
    "PAIS" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_PUNTAJE
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_PUNTAJE" AS OBJECT
(
    "ID_PUNTAJE" NUMBER(11,0), 
	"ID_AVISTAMIENTO" NUMBER(11,0), 
	"ID_PERSONA" NUMBER(11,0)
);

/
--------------------------------------------------------
--  DDL for Type T_SUBORDEN
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_SUBORDEN" AS OBJECT
(
    "ID_SUBORDEN" NUMBER(11,0), 
	"ID_ORDEN" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_SUBORDEN_ORDEN
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_SUBORDEN_ORDEN" AS OBJECT 
( 
    "ID_SUBORDEN" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE),
    "ORDEN" VARCHAR2(100 BYTE)
)

/
--------------------------------------------------------
--  DDL for Type T_TIPO
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_TIPO" AS OBJECT
(
    "ID_TIPO" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type T_UBICACION
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_UBICACION" AS OBJECT
(
    "ID_UBICACION" NUMBER(11,0), 
	"ID_AVE" NUMBER(11,0), 
	"ID_CANTON" NUMBER(11,0)
);

/
--------------------------------------------------------
--  DDL for Type T_UBICACION_CANTON
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_UBICACION_CANTON" AS OBJECT 
( 
    "UBICACION" VARCHAR2(200 BYTE),
    "ID_CANTON" NUMBER(11,0)
)

/
--------------------------------------------------------
--  DDL for Type T_USUARIO
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."T_USUARIO" AS OBJECT
(
    "ID_USUARIO" NUMBER(11,0), 
	"ID_PERSONA" NUMBER(11,0), 
	"USUARIO" VARCHAR2(100 BYTE), 
	"CONTRASENA" VARCHAR2(100 BYTE)
);

/
--------------------------------------------------------
--  DDL for Type UBICACION_CANTON_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."UBICACION_CANTON_RECORD" 
AS TABLE OF T_UBICACION_CANTON;

/
--------------------------------------------------------
--  DDL for Type UBICACION_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."UBICACION_RECORD" AS TABLE OF t_ubicacion


/
--------------------------------------------------------
--  DDL for Type USUARIO_RECORD
--------------------------------------------------------

  CREATE OR REPLACE TYPE "BL"."USUARIO_RECORD" AS TABLE OF t_usuario


/
--------------------------------------------------------
--  DDL for Table AVE
--------------------------------------------------------

  CREATE TABLE "BL"."AVE" 
   (	"ID_AVE" NUMBER(11,0), 
	"ID_ESPECIE" NUMBER(11,0), 
	"ID_COLOR" NUMBER(11,0), 
	"ID_ESTADO" NUMBER(11,0), 
	"NOMBRE_COMUN" VARCHAR2(100 BYTE), 
	"TAMANO" VARCHAR2(100 BYTE), 
	"IMAGEN" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."AVE"."ID_AVE" IS 'Identificador �nico del ave';
 
   COMMENT ON COLUMN "BL"."AVE"."ID_ESPECIE" IS 'Llave for�nea que relaciona el ave con la especie a la que pertenece';
 
   COMMENT ON COLUMN "BL"."AVE"."ID_COLOR" IS 'Llave for�nea que relaciona el ave con el color de su plumaje';
 
   COMMENT ON COLUMN "BL"."AVE"."ID_ESTADO" IS 'Llave for�nea que relaciona el ave con su estado, respecto a la cantidad de poblaci�n';
 
   COMMENT ON COLUMN "BL"."AVE"."NOMBRE_COMUN" IS 'Nombre com�n con el cu�l se le conoce al ave';
 
   COMMENT ON COLUMN "BL"."AVE"."TAMANO" IS 'Tama�o promedio del ave';
 
   COMMENT ON COLUMN "BL"."AVE"."IMAGEN" IS 'Imagen de referencia del ave';
 
   COMMENT ON TABLE "BL"."AVE"  IS 'Aves registradas en el sistema';
--------------------------------------------------------
--  DDL for Table AVISTAMIENTO
--------------------------------------------------------

  CREATE TABLE "BL"."AVISTAMIENTO" 
   (	"ID_AVISTAMIENTO" NUMBER(11,0), 
	"ID_PERSONA" NUMBER(11,0), 
	"ID_AVE" NUMBER(11,0), 
	"LATITUD" VARCHAR2(100 BYTE), 
	"LONGITUD" VARCHAR2(100 BYTE), 
	"FOTO" VARCHAR2(20 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."AVISTAMIENTO"."ID_AVISTAMIENTO" IS 'Identificador �nico del avistamiento';
 
   COMMENT ON COLUMN "BL"."AVISTAMIENTO"."ID_PERSONA" IS 'Llave for�nea que relaciona el avistamiento con la persona que la realiz�';
 
   COMMENT ON COLUMN "BL"."AVISTAMIENTO"."ID_AVE" IS 'Llave for�nea que relaciona el avistamiento con el ave vista';
 
   COMMENT ON COLUMN "BL"."AVISTAMIENTO"."LATITUD" IS 'Es la latitud de la localizaci�n donde se hizo el avistamiento';
 
   COMMENT ON COLUMN "BL"."AVISTAMIENTO"."LONGITUD" IS 'Es la longitud de la localizaci�n donde se hizo el avistamiento';
 
   COMMENT ON COLUMN "BL"."AVISTAMIENTO"."FOTO" IS 'Fotografia del avistamiento';
 
   COMMENT ON TABLE "BL"."AVISTAMIENTO"  IS 'Avistamientos de las aves';
--------------------------------------------------------
--  DDL for Table BITACORA
--------------------------------------------------------

  CREATE TABLE "BL"."BITACORA" 
   (	"ID_BITACORA" NUMBER(11,0), 
	"ID_USUARIO" NUMBER(11,0), 
	"CONTRASENA" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION DEFERRED 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."BITACORA"."ID_BITACORA" IS 'Identificador �nico de la bit�cora';
 
   COMMENT ON COLUMN "BL"."BITACORA"."ID_USUARIO" IS 'Llave for�nea que relaciona la bit�cora con el usuario que realiz� el cambi�';
 
   COMMENT ON COLUMN "BL"."BITACORA"."CONTRASENA" IS 'Nueva contrase�a del usuario';
 
   COMMENT ON TABLE "BL"."BITACORA"  IS 'Bitacora de los cambios de clave por usuario';
--------------------------------------------------------
--  DDL for Table CANTON
--------------------------------------------------------

  CREATE TABLE "BL"."CANTON" 
   (	"ID_CANTON" NUMBER(11,0), 
	"ID_PROVINCIA" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."CANTON"."ID_CANTON" IS 'Identificador �nico del cant�n';
 
   COMMENT ON COLUMN "BL"."CANTON"."ID_PROVINCIA" IS 'Llave for�nea que relaciona la provincia con el cant�n';
 
   COMMENT ON COLUMN "BL"."CANTON"."NOMBRE" IS 'Nombre del cant�n';
 
   COMMENT ON TABLE "BL"."CANTON"  IS 'Cantones de las provinicias';
--------------------------------------------------------
--  DDL for Table CLASE
--------------------------------------------------------

  CREATE TABLE "BL"."CLASE" 
   (	"ID_CLASE" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."CLASE"."ID_CLASE" IS 'Identificador �nico de la clase';
 
   COMMENT ON COLUMN "BL"."CLASE"."NOMBRE" IS 'Nombre cient�fico de la clase';
 
   COMMENT ON TABLE "BL"."CLASE"  IS 'Clases de aves';
--------------------------------------------------------
--  DDL for Table COLOR
--------------------------------------------------------

  CREATE TABLE "BL"."COLOR" 
   (	"ID_COLOR" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."COLOR"."ID_COLOR" IS 'Identificador �nico del color';
 
   COMMENT ON COLUMN "BL"."COLOR"."NOMBRE" IS 'Nombre del color';
 
   COMMENT ON TABLE "BL"."COLOR"  IS 'Colores de las aves';
--------------------------------------------------------
--  DDL for Table CONTINENTE
--------------------------------------------------------

  CREATE TABLE "BL"."CONTINENTE" 
   (	"ID_CONTINENTE" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."CONTINENTE"."ID_CONTINENTE" IS 'Identificador �nico del continente';
 
   COMMENT ON COLUMN "BL"."CONTINENTE"."NOMBRE" IS 'Nombre del continente';
 
   COMMENT ON TABLE "BL"."CONTINENTE"  IS 'Continentes del mundo';
--------------------------------------------------------
--  DDL for Table ESPECIE
--------------------------------------------------------

  CREATE TABLE "BL"."ESPECIE" 
   (	"ID_ESPECIE" NUMBER(11,0), 
	"ID_GENERO" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."ESPECIE"."ID_ESPECIE" IS 'Identificador �nico de la especie';
 
   COMMENT ON COLUMN "BL"."ESPECIE"."ID_GENERO" IS 'Llave for�nea que relaciona el g�nero con la especie';
 
   COMMENT ON COLUMN "BL"."ESPECIE"."NOMBRE" IS 'Nombre cient�fico de la especie';
 
   COMMENT ON TABLE "BL"."ESPECIE"  IS 'Clasificaciones de especies';
--------------------------------------------------------
--  DDL for Table FAMILIA
--------------------------------------------------------

  CREATE TABLE "BL"."FAMILIA" 
   (	"ID_FAMILIA" NUMBER(11,0), 
	"ID_SUBORDEN" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."FAMILIA"."ID_FAMILIA" IS 'Identificador �nico de la familia';
 
   COMMENT ON COLUMN "BL"."FAMILIA"."ID_SUBORDEN" IS 'Llave for�nea que relaciona el orden con la familia';
 
   COMMENT ON COLUMN "BL"."FAMILIA"."NOMBRE" IS 'Nombre cient�fico de la familia';
 
   COMMENT ON TABLE "BL"."FAMILIA"  IS 'Clasificaciones de familias';
--------------------------------------------------------
--  DDL for Table FOTO
--------------------------------------------------------

  CREATE TABLE "BL"."FOTO" 
   (	"ID_FOTO" NUMBER(11,0), 
	"ID_AVISTAMIENTO" NUMBER(11,0), 
	"URL" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION DEFERRED 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."FOTO"."ID_FOTO" IS 'Identificador �nico de la foto';
 
   COMMENT ON COLUMN "BL"."FOTO"."ID_AVISTAMIENTO" IS 'Llave for�nea que relaciona la foto con el avistamiento donde se public�';
 
   COMMENT ON COLUMN "BL"."FOTO"."URL" IS 'Es la direcci�n de donde est� guardada la foto afuera de la base';
 
   COMMENT ON TABLE "BL"."FOTO"  IS 'Fotos de las aves por avistamiento';
--------------------------------------------------------
--  DDL for Table GENERO
--------------------------------------------------------

  CREATE TABLE "BL"."GENERO" 
   (	"ID_GENERO" NUMBER(11,0), 
	"ID_FAMILIA" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."GENERO"."ID_GENERO" IS 'Identificador �nico del g�nero';
 
   COMMENT ON COLUMN "BL"."GENERO"."ID_FAMILIA" IS 'Llave for�nea que relaciona el g�nero con la familia';
 
   COMMENT ON COLUMN "BL"."GENERO"."NOMBRE" IS 'Nombre cient�fico del g�nero';
 
   COMMENT ON TABLE "BL"."GENERO"  IS 'Clasificaciones de generos';
--------------------------------------------------------
--  DDL for Table ORDEN
--------------------------------------------------------

  CREATE TABLE "BL"."ORDEN" 
   (	"ID_ORDEN" NUMBER(11,0), 
	"ID_CLASE" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."ORDEN"."ID_ORDEN" IS 'Identificador �nico del orden';
 
   COMMENT ON COLUMN "BL"."ORDEN"."ID_CLASE" IS 'Llave for�nea que relaciona la clase con el orden';
 
   COMMENT ON COLUMN "BL"."ORDEN"."NOMBRE" IS 'Nombre cient�fico del orden';
 
   COMMENT ON TABLE "BL"."ORDEN"  IS 'Clasificaciones de ordenes';
--------------------------------------------------------
--  DDL for Table PAIS
--------------------------------------------------------

  CREATE TABLE "BL"."PAIS" 
   (	"ID_PAIS" NUMBER(11,0), 
	"ID_CONTINENTE" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."PAIS"."ID_PAIS" IS 'Identificador �nico del pa�s';
 
   COMMENT ON COLUMN "BL"."PAIS"."ID_CONTINENTE" IS 'Llave for�nea que relaciona el continente con el pa�s';
 
   COMMENT ON COLUMN "BL"."PAIS"."NOMBRE" IS 'Nombre del pa�s';
 
   COMMENT ON TABLE "BL"."PAIS"  IS 'Pa�ses de cada continente';
--------------------------------------------------------
--  DDL for Table PARAMETRO
--------------------------------------------------------

  CREATE TABLE "BL"."PARAMETRO" 
   (	"ID_PARAMETRO" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE), 
	"DESCRIPCION" VARCHAR2(1000 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."PARAMETRO"."ID_PARAMETRO" IS 'Identificador �nico del par�metro';
 
   COMMENT ON COLUMN "BL"."PARAMETRO"."NOMBRE" IS 'Nombre del par�metro';
 
   COMMENT ON COLUMN "BL"."PARAMETRO"."DESCRIPCION" IS 'Descripcion del par�metro';
 
   COMMENT ON TABLE "BL"."PARAMETRO"  IS 'Par�metros del sistema que un administrador puede modificar';
--------------------------------------------------------
--  DDL for Table PERSONA
--------------------------------------------------------

  CREATE TABLE "BL"."PERSONA" 
   (	"ID_PERSONA" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE), 
	"APELLIDO" VARCHAR2(100 BYTE), 
	"FECHA_NACIMIENTO" DATE, 
	"EMAIL" VARCHAR2(100 BYTE), 
	"PROFESION" VARCHAR2(100 BYTE), 
	"TIPO" VARCHAR2(100 BYTE), 
	"FOTO" VARCHAR2(50 BYTE) DEFAULT 'default.png'
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."PERSONA"."ID_PERSONA" IS 'Identificador �nico de la persona';
 
   COMMENT ON COLUMN "BL"."PERSONA"."NOMBRE" IS 'Primer nombre de la persona';
 
   COMMENT ON COLUMN "BL"."PERSONA"."APELLIDO" IS 'Apellido de la persona';
 
   COMMENT ON COLUMN "BL"."PERSONA"."FECHA_NACIMIENTO" IS 'Fecha de nacimiento de la persona';
 
   COMMENT ON COLUMN "BL"."PERSONA"."EMAIL" IS 'Email de la persona, debe ser �nico';
 
   COMMENT ON COLUMN "BL"."PERSONA"."PROFESION" IS 'Profesion de la persona';
 
   COMMENT ON COLUMN "BL"."PERSONA"."TIPO" IS 'Tipo de persona, puede ser 1, 2 o 3. El 1 es un administrador, 2 un ornit�logo, y 3 aficionado';
 
   COMMENT ON TABLE "BL"."PERSONA"  IS 'Personas registradas en el sistema';
--------------------------------------------------------
--  DDL for Table PROVINCIA
--------------------------------------------------------

  CREATE TABLE "BL"."PROVINCIA" 
   (	"ID_PROVINCIA" NUMBER(11,0), 
	"ID_PAIS" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."PROVINCIA"."ID_PROVINCIA" IS 'Identificador �nico de la provincia';
 
   COMMENT ON COLUMN "BL"."PROVINCIA"."ID_PAIS" IS 'Llave for�nea que relaciona la provincia con el pa�s';
 
   COMMENT ON COLUMN "BL"."PROVINCIA"."NOMBRE" IS 'Nombre de la provincia';
 
   COMMENT ON TABLE "BL"."PROVINCIA"  IS 'Provincias de cada pa�s';
--------------------------------------------------------
--  DDL for Table PUNTAJE
--------------------------------------------------------

  CREATE TABLE "BL"."PUNTAJE" 
   (	"ID_PUNTAJE" NUMBER(11,0), 
	"ID_AVISTAMIENTO" NUMBER(11,0), 
	"ID_PERSONA" NUMBER(11,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."PUNTAJE"."ID_PUNTAJE" IS 'Identificador �nico del puntaje';
 
   COMMENT ON COLUMN "BL"."PUNTAJE"."ID_AVISTAMIENTO" IS 'Llave for�nea que relaciona el puntaje con el avistamiento calificado';
 
   COMMENT ON COLUMN "BL"."PUNTAJE"."ID_PERSONA" IS 'Llave for�nea que relaciona el puntaje con la persona que realiz�la calificaci�n';
 
   COMMENT ON TABLE "BL"."PUNTAJE"  IS 'Calificaci�n binaria que una persona da a un avistamiento';
--------------------------------------------------------
--  DDL for Table SUBORDEN
--------------------------------------------------------

  CREATE TABLE "BL"."SUBORDEN" 
   (	"ID_SUBORDEN" NUMBER(11,0), 
	"ID_ORDEN" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."SUBORDEN"."ID_SUBORDEN" IS 'Identificador �nico del suborden';
 
   COMMENT ON COLUMN "BL"."SUBORDEN"."ID_ORDEN" IS 'Llave for�nea que relaciona la orden con el suborden';
 
   COMMENT ON COLUMN "BL"."SUBORDEN"."NOMBRE" IS 'Nombre cient�fico del suborden';
 
   COMMENT ON TABLE "BL"."SUBORDEN"  IS 'Clasificaciones de ordenes';
--------------------------------------------------------
--  DDL for Table TIPO
--------------------------------------------------------

  CREATE TABLE "BL"."TIPO" 
   (	"ID_TIPO" NUMBER(11,0), 
	"NOMBRE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."TIPO"."ID_TIPO" IS 'Identificador �nico del tipo';
 
   COMMENT ON COLUMN "BL"."TIPO"."NOMBRE" IS 'Nombre del tipo de clasificacion del ave';
 
   COMMENT ON TABLE "BL"."TIPO"  IS 'Tipo de clasificacion de aves';
--------------------------------------------------------
--  DDL for Table UBICACION
--------------------------------------------------------

  CREATE TABLE "BL"."UBICACION" 
   (	"ID_UBICACION" NUMBER(11,0), 
	"ID_AVE" NUMBER(11,0), 
	"ID_CANTON" NUMBER(11,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."UBICACION"."ID_UBICACION" IS 'Identificador �nico de la ubicaci�n del ave';
 
   COMMENT ON COLUMN "BL"."UBICACION"."ID_AVE" IS 'Llave for�nea que relaciona la ubicaci�n con el ave que habita en la zona';
 
   COMMENT ON COLUMN "BL"."UBICACION"."ID_CANTON" IS 'Llave for�nea que relaciona la ubicaci�n con el cant�n';
 
   COMMENT ON TABLE "BL"."UBICACION"  IS 'Ubicaciones en las que se encuentran cada tipo de ave';
--------------------------------------------------------
--  DDL for Table USUARIO
--------------------------------------------------------

  CREATE TABLE "BL"."USUARIO" 
   (	"ID_USUARIO" NUMBER(11,0), 
	"ID_PERSONA" NUMBER(11,0), 
	"USUARIO" VARCHAR2(100 BYTE), 
	"CONTRASENA" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
 

   COMMENT ON COLUMN "BL"."USUARIO"."ID_USUARIO" IS 'Identificador �nico del usuario';
 
   COMMENT ON COLUMN "BL"."USUARIO"."ID_PERSONA" IS 'Llave for�nea que relaciona el usuario con la persona a la que le pertenece';
 
   COMMENT ON COLUMN "BL"."USUARIO"."USUARIO" IS 'Nombre del usuario';
 
   COMMENT ON COLUMN "BL"."USUARIO"."CONTRASENA" IS 'Contrase�a del usuario, debe estar encriptada';
 
   COMMENT ON TABLE "BL"."USUARIO"  IS 'Usuarios de las personas registradas';
--------------------------------------------------------
--  DDL for Sequence SQ_AVE
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_AVE"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_AVISTAMIENTO
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_AVISTAMIENTO"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 0 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_BITACORA
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_BITACORA"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 0 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_CANTON
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_CANTON"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_CLASE
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_CLASE"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 40 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_COLOR
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_COLOR"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 40 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_CONTINENTE
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_CONTINENTE"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_ESPECIE
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_ESPECIE"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_FAMILIA
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_FAMILIA"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_FOTO
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_FOTO"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 0 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_GENERO
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_GENERO"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_ORDEN
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_ORDEN"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_PAIS
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_PAIS"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_PARAMETRO
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_PARAMETRO"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_PERSONA
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_PERSONA"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_PROVINCIA
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_PROVINCIA"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_PUNTOS
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_PUNTOS"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 0 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_SUBORDEN
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_SUBORDEN"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 40 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_TIPO
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_TIPO"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 40 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_UBICACION
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_UBICACION"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 0 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SQ_USUARIO
--------------------------------------------------------

   CREATE SEQUENCE  "BL"."SQ_USUARIO"  MINVALUE 0 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 20 CACHE 20 NOORDER  NOCYCLE ;
REM INSERTING into BL.AVE
SET DEFINE OFF;
Insert into BL.AVE (ID_AVE,ID_ESPECIE,ID_COLOR,ID_ESTADO,NOMBRE_COMUN,TAMANO,IMAGEN) values ('7','8','21','1','NOMBRE COMUN','11','14logo.png');
Insert into BL.AVE (ID_AVE,ID_ESPECIE,ID_COLOR,ID_ESTADO,NOMBRE_COMUN,TAMANO,IMAGEN) values ('4','9','1','1','NOMBRE','12','14Jose.png');
REM INSERTING into BL.AVISTAMIENTO
SET DEFINE OFF;
Insert into BL.AVISTAMIENTO (ID_AVISTAMIENTO,ID_PERSONA,ID_AVE,LATITUD,LONGITUD,FOTO) values ('2','14','7','9.521189760201944','-84.53971435937501','14159logo.png');
Insert into BL.AVISTAMIENTO (ID_AVISTAMIENTO,ID_PERSONA,ID_AVE,LATITUD,LONGITUD,FOTO) values ('3','14','7','9.521189760201944','-83.53971435937501','1426092logo.png');
Insert into BL.AVISTAMIENTO (ID_AVISTAMIENTO,ID_PERSONA,ID_AVE,LATITUD,LONGITUD,FOTO) values ('4','14','4','9.939431129748815','-84.08103516015626','1426146logo2.png');
REM INSERTING into BL.BITACORA
SET DEFINE OFF;
REM INSERTING into BL.CANTON
SET DEFINE OFF;
Insert into BL.CANTON (ID_CANTON,ID_PROVINCIA,NOMBRE) values ('1','1','Aserri2');
Insert into BL.CANTON (ID_CANTON,ID_PROVINCIA,NOMBRE) values ('20','1','Desamparados');
Insert into BL.CANTON (ID_CANTON,ID_PROVINCIA,NOMBRE) values ('21','25','Central');
REM INSERTING into BL.CLASE
SET DEFINE OFF;
Insert into BL.CLASE (ID_CLASE,NOMBRE) values ('20','CLASE #2');
Insert into BL.CLASE (ID_CLASE,NOMBRE) values ('5','CLASE #1');
REM INSERTING into BL.COLOR
SET DEFINE OFF;
Insert into BL.COLOR (ID_COLOR,NOMBRE) values ('1','Morado');
Insert into BL.COLOR (ID_COLOR,NOMBRE) values ('21','Verde');
Insert into BL.COLOR (ID_COLOR,NOMBRE) values ('20','Azul');
REM INSERTING into BL.CONTINENTE
SET DEFINE OFF;
Insert into BL.CONTINENTE (ID_CONTINENTE,NOMBRE) values ('1','America');
Insert into BL.CONTINENTE (ID_CONTINENTE,NOMBRE) values ('2','Africa');
REM INSERTING into BL.ESPECIE
SET DEFINE OFF;
Insert into BL.ESPECIE (ID_ESPECIE,ID_GENERO,NOMBRE) values ('8','1','Especie #1');
Insert into BL.ESPECIE (ID_ESPECIE,ID_GENERO,NOMBRE) values ('9','2','Especie #2');
REM INSERTING into BL.FAMILIA
SET DEFINE OFF;
Insert into BL.FAMILIA (ID_FAMILIA,ID_SUBORDEN,NOMBRE) values ('2','24','Familia #1');
Insert into BL.FAMILIA (ID_FAMILIA,ID_SUBORDEN,NOMBRE) values ('3','23','Familia #2');
REM INSERTING into BL.FOTO
SET DEFINE OFF;
REM INSERTING into BL.GENERO
SET DEFINE OFF;
Insert into BL.GENERO (ID_GENERO,ID_FAMILIA,NOMBRE) values ('1','2','Genero #1');
Insert into BL.GENERO (ID_GENERO,ID_FAMILIA,NOMBRE) values ('2','3','Genero #2');
REM INSERTING into BL.ORDEN
SET DEFINE OFF;
Insert into BL.ORDEN (ID_ORDEN,ID_CLASE,NOMBRE) values ('1','5','Orden #1');
Insert into BL.ORDEN (ID_ORDEN,ID_CLASE,NOMBRE) values ('2','20','Orden #2');
REM INSERTING into BL.PAIS
SET DEFINE OFF;
Insert into BL.PAIS (ID_PAIS,ID_CONTINENTE,NOMBRE) values ('2','1','Costa Rica');
Insert into BL.PAIS (ID_PAIS,ID_CONTINENTE,NOMBRE) values ('4','1','Nicaragua');
REM INSERTING into BL.PARAMETRO
SET DEFINE OFF;
Insert into BL.PARAMETRO (ID_PARAMETRO,NOMBRE,DESCRIPCION) values ('5','Email de cumplea�os','EMAIL
');
Insert into BL.PARAMETRO (ID_PARAMETRO,NOMBRE,DESCRIPCION) values ('6','Cantidad por pagina','20');
REM INSERTING into BL.PERSONA
SET DEFINE OFF;
Insert into BL.PERSONA (ID_PERSONA,NOMBRE,APELLIDO,FECHA_NACIMIENTO,EMAIL,PROFESION,TIPO,FOTO) values ('14','Jose Andres','Ceciliano Granados',to_date('15/11/96','DD/MM/RR'),'cecilianogranados96@hotmail.com','In Compu','1','14logo.png');
Insert into BL.PERSONA (ID_PERSONA,NOMBRE,APELLIDO,FECHA_NACIMIENTO,EMAIL,PROFESION,TIPO,FOTO) values ('20','Usuario','Usuario',to_date('12/11/96','DD/MM/RR'),'cecilianogranados90@hotmail.com','Ing.Compu','3','default.png');
REM INSERTING into BL.PROVINCIA
SET DEFINE OFF;
Insert into BL.PROVINCIA (ID_PROVINCIA,ID_PAIS,NOMBRE) values ('1','2','San Jose');
Insert into BL.PROVINCIA (ID_PROVINCIA,ID_PAIS,NOMBRE) values ('20','2','Alajuela');
Insert into BL.PROVINCIA (ID_PROVINCIA,ID_PAIS,NOMBRE) values ('21','2','Limon');
Insert into BL.PROVINCIA (ID_PROVINCIA,ID_PAIS,NOMBRE) values ('22','2','Cartago');
Insert into BL.PROVINCIA (ID_PROVINCIA,ID_PAIS,NOMBRE) values ('23','2','Guanacaste');
Insert into BL.PROVINCIA (ID_PROVINCIA,ID_PAIS,NOMBRE) values ('24','2','Puntarenas');
Insert into BL.PROVINCIA (ID_PROVINCIA,ID_PAIS,NOMBRE) values ('25','2','Heredia');
REM INSERTING into BL.PUNTAJE
SET DEFINE OFF;
Insert into BL.PUNTAJE (ID_PUNTAJE,ID_AVISTAMIENTO,ID_PERSONA) values ('59','2','14');
Insert into BL.PUNTAJE (ID_PUNTAJE,ID_AVISTAMIENTO,ID_PERSONA) values ('57','3','14');
Insert into BL.PUNTAJE (ID_PUNTAJE,ID_AVISTAMIENTO,ID_PERSONA) values ('61','4','20');
Insert into BL.PUNTAJE (ID_PUNTAJE,ID_AVISTAMIENTO,ID_PERSONA) values ('1','2','20');
Insert into BL.PUNTAJE (ID_PUNTAJE,ID_AVISTAMIENTO,ID_PERSONA) values ('2','3','20');
REM INSERTING into BL.SUBORDEN
SET DEFINE OFF;
Insert into BL.SUBORDEN (ID_SUBORDEN,ID_ORDEN,NOMBRE) values ('23','2','SubOrden #2');
Insert into BL.SUBORDEN (ID_SUBORDEN,ID_ORDEN,NOMBRE) values ('24','1','SubOrden #1');
REM INSERTING into BL.TIPO
SET DEFINE OFF;
Insert into BL.TIPO (ID_TIPO,NOMBRE) values ('1','En peligro');
Insert into BL.TIPO (ID_TIPO,NOMBRE) values ('20','Estable');
REM INSERTING into BL.UBICACION
SET DEFINE OFF;
Insert into BL.UBICACION (ID_UBICACION,ID_AVE,ID_CANTON) values ('6','7','1');
Insert into BL.UBICACION (ID_UBICACION,ID_AVE,ID_CANTON) values ('7','7','20');
Insert into BL.UBICACION (ID_UBICACION,ID_AVE,ID_CANTON) values ('5','7','21');
REM INSERTING into BL.USUARIO
SET DEFINE OFF;
Insert into BL.USUARIO (ID_USUARIO,ID_PERSONA,USUARIO,CONTRASENA) values ('3','14','ceciliano','21232f297a57a5a743894a0e4a801fc3');
Insert into BL.USUARIO (ID_USUARIO,ID_PERSONA,USUARIO,CONTRASENA) values ('20','20','user','21232f297a57a5a743894a0e4a801fc3');
--------------------------------------------------------
--  DDL for Index PK_COLOR
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_COLOR" ON "BL"."COLOR" ("ID_COLOR") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_USUARIO
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_USUARIO" ON "BL"."USUARIO" ("ID_USUARIO") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_ORDEN
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_ORDEN" ON "BL"."ORDEN" ("ID_ORDEN") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_SUBORDEN
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_SUBORDEN" ON "BL"."SUBORDEN" ("ID_SUBORDEN") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_CANTON
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_CANTON" ON "BL"."CANTON" ("ID_CANTON") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_PARAMETRO
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_PARAMETRO" ON "BL"."PARAMETRO" ("ID_PARAMETRO") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_CONTINENTE
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_CONTINENTE" ON "BL"."CONTINENTE" ("ID_CONTINENTE") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_ESPECIE
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_ESPECIE" ON "BL"."ESPECIE" ("ID_ESPECIE") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_FOTO
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_FOTO" ON "BL"."FOTO" ("ID_FOTO") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS NOCOMPRESS LOGGING
  STORAGE( INITIAL 16384 NEXT 16384
  PCTINCREASE 0)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_TIPO
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_TIPO" ON "BL"."TIPO" ("ID_TIPO") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_PUNTAJE
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_PUNTAJE" ON "BL"."PUNTAJE" ("ID_PUNTAJE") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_UBICACION
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_UBICACION" ON "BL"."UBICACION" ("ID_UBICACION") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_AVE
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_AVE" ON "BL"."AVE" ("ID_AVE") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_FAMILIA
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_FAMILIA" ON "BL"."FAMILIA" ("ID_FAMILIA") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_PROVINCIA
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_PROVINCIA" ON "BL"."PROVINCIA" ("ID_PROVINCIA") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_AVISTAMIENTO
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_AVISTAMIENTO" ON "BL"."AVISTAMIENTO" ("ID_AVISTAMIENTO") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_BITACORA
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_BITACORA" ON "BL"."BITACORA" ("ID_BITACORA") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS NOCOMPRESS LOGGING
  STORAGE( INITIAL 16384 NEXT 16384
  PCTINCREASE 0)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_GENERO
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_GENERO" ON "BL"."GENERO" ("ID_GENERO") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_CLASE
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_CLASE" ON "BL"."CLASE" ("ID_CLASE") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PERSONA_EMAIL_UK
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PERSONA_EMAIL_UK" ON "BL"."PERSONA" ("EMAIL") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA" ;
--------------------------------------------------------
--  DDL for Index PK_PAIS
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_PAIS" ON "BL"."PAIS" ("ID_PAIS") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Index PK_PERSONA
--------------------------------------------------------

  CREATE UNIQUE INDEX "BL"."PK_PERSONA" ON "BL"."PERSONA" ("ID_PERSONA") 
  PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND" ;
--------------------------------------------------------
--  DDL for Procedure get_ave_especie_total
--------------------------------------------------------
set define off;

  CREATE OR REPLACE PROCEDURE "BL"."get_ave_especie_total" (p_recordset OUT SYS_REFCURSOR)
AS
BEGIN
open p_recordset for
select especie.id_especie, Count(ave.id_ave) as total
from
ave inner join
especie on especie.id_especie = ave.id_especie
group by especie.id_especie
order by total;
END "get_ave_especie_total";
--commit;

/*select especie.id_especie, Count(ave.id_ave) as total
from
ave inner join
especie on especie.id_especie = ave.id_especie
group by especie.id_especie
order by total;
*/

--EXECUTE "get_ave_especie_total";

/
--------------------------------------------------------
--  DDL for Package PCK_AVE
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_AVE" IS
          PROCEDURE delete_ave (pId NUMBER);
          PROCEDURE update_ave (pid_ave number,pid_color NUMBER,pid_estado NUMBER,pnombre varchar2,ptamano varchar2,pimagen varchar2);
          PROCEDURE update_ave_especie (pid_ave number,pid_especie NUMBER);
          PROCEDURE insert_ave (pid_especie NUMBER,pid_color NUMBER,pid_estado NUMBER,pnombre varchar2,ptamano varchar2,pimagen varchar2);
          FUNCTION select_ave (pid_ave NUMBER) RETURN ave_record;
          FUNCTION total_ave RETURN VARCHAR2; 
          FUNCTION ave_especie_genero RETURN ave_especie_genero_record;
          FUNCTION ave_general (pid_ave NUMBER) RETURN ave_general_record;
          FUNCTION ave_tipo (pid_tipo NUMBER) RETURN ave_tipo_record;
          FUNCTION ave_id RETURN VARCHAR2; 
END;

/
--------------------------------------------------------
--  DDL for Package PCK_AVISTAMIENTO
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_AVISTAMIENTO" IS
          PROCEDURE delete_avistamiento (pId NUMBER);
          PROCEDURE update_avistamiento (pid_avistamiento number,pid_persona NUMBER,pid_ave NUMBER,platitud NUMBER,plongitud number,pfoto varchar2);
          PROCEDURE insert_avistamiento (pid_persona NUMBER,pid_ave NUMBER,platitud NUMBER,plongitud number,pfoto varchar2);
          FUNCTION total_avistamiento RETURN VARCHAR2; 
          FUNCTION total_avistamiento_persona (pid_persona NUMBER) RETURN VARCHAR2;
          FUNCTION ave_cantidad RETURN ave_cantidad_record;
          FUNCTION avistamiento_ave (pid_ave NUMBER) RETURN avistamiento_record;
          FUNCTION avistamiento_general RETURN avistamiento_general_record;
END;

/
--------------------------------------------------------
--  DDL for Package PCK_CANTON
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_CANTON" IS
          PROCEDURE delete_canton (pId NUMBER);
          PROCEDURE update_canton (pId NUMBER,pnombre VARCHAR2,pIdC NUMBER);
          PROCEDURE insert_canton(pnombre VARCHAR2,pIdC NUMBER);
          FUNCTION canton_nombre (pId NUMBER) RETURN VARCHAR2;
          FUNCTION provincia_id (pId NUMBER) RETURN VARCHAR2;
          FUNCTION provincia_nombre(pId NUMBER) RETURN VARCHAR2;
          FUNCTION total_canton RETURN VARCHAR2; 
          FUNCTION canton_provincia RETURN canton_provincia_record;
          FUNCTION canton_general RETURN canton_general_record;
END;

/
--------------------------------------------------------
--  DDL for Package PCK_CLASE
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_CLASE" IS
          PROCEDURE delete_clase (pId NUMBER);
          PROCEDURE update_clase (pId NUMBER,pnombre VARCHAR2);
          PROCEDURE insert_clase (pnombre VARCHAR2);
          FUNCTION clase_nombre (pId NUMBER) RETURN VARCHAR2;
END;


/
--------------------------------------------------------
--  DDL for Package PCK_COLOR
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_COLOR" IS
          PROCEDURE delete_color (pId NUMBER);
          PROCEDURE update_color (pId NUMBER,pnombre VARCHAR2);
          PROCEDURE insert_color (pnombre VARCHAR2);
          FUNCTION color_nombre (pId NUMBER) RETURN VARCHAR2;
END;


/
--------------------------------------------------------
--  DDL for Package PCK_CONTINENTE
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_CONTINENTE" IS
          PROCEDURE delete_continente (pId NUMBER);
          PROCEDURE update_continente (pId NUMBER,pnombre VARCHAR2);
          PROCEDURE insert_continente (pnombre VARCHAR2);
          FUNCTION continente_nombre (pId NUMBER) RETURN VARCHAR2;
END;


/
--------------------------------------------------------
--  DDL for Package PCK_ESPECIE
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_ESPECIE" IS
          PROCEDURE delete_especie (pId NUMBER);
          PROCEDURE update_especie (pId NUMBER,pnombre VARCHAR2,pIdC NUMBER);
          PROCEDURE insert_especie(pnombre VARCHAR2,pIdC NUMBER);
          FUNCTION especie_nombre (pId NUMBER) RETURN VARCHAR2;
          FUNCTION genero_id (pId NUMBER) RETURN VARCHAR2;
          FUNCTION genero_nombre(pId NUMBER) RETURN VARCHAR2;
          FUNCTION total_especie RETURN VARCHAR2; 
          FUNCTION especie_genero RETURN especie_genero_record;
END;

/
--------------------------------------------------------
--  DDL for Package PCK_FAMILIA
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_FAMILIA" IS
          PROCEDURE delete_familia (pId NUMBER);
          PROCEDURE update_familia (pId NUMBER,pnombre VARCHAR2,pIdC NUMBER);
          PROCEDURE insert_familia(pnombre VARCHAR2,pIdC NUMBER);
          FUNCTION familia_nombre (pId NUMBER) RETURN VARCHAR2;
          FUNCTION suborden_id (pId NUMBER) RETURN VARCHAR2;
          FUNCTION suborden_nombre(pId NUMBER) RETURN VARCHAR2;
          FUNCTION familia_suborden RETURN familia_suborden_record;
END;

/
--------------------------------------------------------
--  DDL for Package PCK_GENERO
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_GENERO" IS
          PROCEDURE delete_genero (pId NUMBER);
          PROCEDURE update_genero (pId NUMBER,pnombre VARCHAR2,pIdC NUMBER);
          PROCEDURE insert_genero(pnombre VARCHAR2,pIdC NUMBER);
          FUNCTION genero_nombre (pId NUMBER) RETURN VARCHAR2;
          FUNCTION familia_id (pId NUMBER) RETURN VARCHAR2;
          FUNCTION familia_nombre(pId NUMBER) RETURN VARCHAR2;
          FUNCTION genero_familia RETURN genero_familia_record;
END;

/
--------------------------------------------------------
--  DDL for Package PCK_ORDEN
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_ORDEN" IS
          PROCEDURE delete_orden (pId NUMBER);
          PROCEDURE update_orden (pId NUMBER,pnombre VARCHAR2,pIdC NUMBER);
          PROCEDURE insert_orden (pnombre VARCHAR2,pIdC NUMBER);
          FUNCTION orden_nombre (pId NUMBER) RETURN VARCHAR2;
          FUNCTION clase_id (pId NUMBER) RETURN VARCHAR2;
          FUNCTION nombre_clase(pId NUMBER) RETURN VARCHAR2; 
          FUNCTION orden_clase RETURN orden_clase_record;
END;

/
--------------------------------------------------------
--  DDL for Package PCK_PAIS
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_PAIS" IS
          PROCEDURE delete_pais (pId NUMBER);
          PROCEDURE update_pais (pId NUMBER,pnombre VARCHAR2,pIdC NUMBER);
          PROCEDURE insert_pais(pnombre VARCHAR2,pIdC NUMBER);
          FUNCTION pais_nombre (pId NUMBER) RETURN VARCHAR2;
          FUNCTION continente_id (pId NUMBER) RETURN VARCHAR2;
          FUNCTION continente_nombre(pId NUMBER) RETURN VARCHAR2;
          FUNCTION pais_continente RETURN pais_continente_record;
END;

/
--------------------------------------------------------
--  DDL for Package PCK_PARAMETRO
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_PARAMETRO" IS
          PROCEDURE update_parametro (pid_parametro number,pdescripcion VARCHAR);
          FUNCTION parametro_id (pid_parametro NUMBER) RETURN parametro_record;
END;

/
--------------------------------------------------------
--  DDL for Package PCK_PERSONA
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_PERSONA" IS
          PROCEDURE delete_p (pId NUMBER);
          PROCEDURE update_p (pid_persona NUMBER,pnombre VARCHAR2,papellido VARCHAR2,pemail VARCHAR2,pprofesion VARCHAR2,ptipo NUMBER,pfecha_nacimiento date,pfoto VARCHAR2,puser VARCHAR2,ppass VARCHAR2);
          PROCEDURE insert_p (pnombre VARCHAR2,papellido VARCHAR2,pemail VARCHAR2,pprofesion VARCHAR2,ptipo NUMBER,pfecha_nacimiento date,puser VARCHAR2,ppass VARCHAR2);
          FUNCTION tipo_persona (pusuario VARCHAR2,pcontrasena VARCHAR2) RETURN NUMBER;
          FUNCTION id_persona (pusuario VARCHAR2,pcontrasena VARCHAR2) RETURN NUMBER;
          FUNCTION obtener_nombre (pId NUMBER) RETURN VARCHAR2;
          FUNCTION total_persona RETURN VARCHAR2;
          FUNCTION persona_usuario (pid_persona NUMBER) RETURN persona_usuario_record;
END;

/
--------------------------------------------------------
--  DDL for Package PCK_PROVINCIA
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_PROVINCIA" IS
          PROCEDURE delete_provincia (pId NUMBER);
          PROCEDURE update_provincia (pId NUMBER,pnombre VARCHAR2,pIdC NUMBER);
          PROCEDURE insert_provincia(pnombre VARCHAR2,pIdC NUMBER);
          FUNCTION provincia_nombre (pId NUMBER) RETURN VARCHAR2;
          FUNCTION pais_id (pId NUMBER) RETURN VARCHAR2;
          FUNCTION pais_nombre(pId NUMBER) RETURN VARCHAR2;
          FUNCTION provincia_pais RETURN provincia_pais_record;
END;

/
--------------------------------------------------------
--  DDL for Package PCK_PUNTAJE
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_PUNTAJE" IS
          PROCEDURE delete_puntaje (pid_persona NUMBER,pid_avistamiento NUMBER);
          PROCEDURE insert_puntaje (pid_persona NUMBER,pid_avistamiento NUMBER);
          FUNCTION total_puntaje RETURN VARCHAR2; 
END;

/
--------------------------------------------------------
--  DDL for Package PCK_SUBORDEN
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_SUBORDEN" IS
          PROCEDURE delete_suborden (pId NUMBER);
          PROCEDURE update_suborden (pId NUMBER,pnombre VARCHAR2,pIdC NUMBER);
          PROCEDURE insert_suborden (pnombre VARCHAR2,pIdC NUMBER);
          FUNCTION suborden_nombre (pId NUMBER) RETURN VARCHAR2;
          FUNCTION orden_id (pId NUMBER) RETURN VARCHAR2;
          FUNCTION orden_nombre(pId NUMBER) RETURN VARCHAR2;
          FUNCTION suborden_orden RETURN suborden_orden_record;
END;

/
--------------------------------------------------------
--  DDL for Package PCK_TIPO
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_TIPO" IS
          PROCEDURE delete_tipo (pId NUMBER);
          PROCEDURE update_tipo (pId NUMBER,pnombre VARCHAR2);
          PROCEDURE insert_tipo (pnombre VARCHAR2);
          FUNCTION tipo_nombre (pId NUMBER) RETURN VARCHAR2;
END;


/
--------------------------------------------------------
--  DDL for Package PCK_UBICACIONES
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."PCK_UBICACIONES" IS
          PROCEDURE insert_ubicacion (pid_ave NUMBER,pid_canton NUMBER);
          PROCEDURE delete_ubicacion (pid_ave NUMBER);
          FUNCTION ubicacion_canton (pid_ave NUMBER) RETURN ubicacion_canton_record;
          FUNCTION total_ubicacion (pid_canton NUMBER, pid_ave NUMBER) RETURN VARCHAR2; 
END;

/
--------------------------------------------------------
--  DDL for Package TYPES
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE "BL"."TYPES" AS 
  TYPE cursor_type IS REF CURSOR;
END Types; 

/
--------------------------------------------------------
--  DDL for Package Body PCK_AVE
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_AVE" AS
             -- ********************************************************* --
              PROCEDURE delete_ave (pId NUMBER) is
              BEGIN
                    Delete from ave where id_ave = pId;
                    Commit;
              END delete_ave;
             -- ********************************************************* --
              PROCEDURE update_ave (pid_ave NUMBER,pid_color NUMBER,pid_estado NUMBER,pnombre varchar2,ptamano varchar2,pimagen varchar2) is
              BEGIN
                    UPDATE ave SET
                    id_color = pid_color,
                    id_estado = pid_estado,
                    nombre_comun = pnombre,
                    tamano = ptamano,
                    imagen = pimagen
                    WHERE id_ave = pid_ave;
                    Commit;
              END update_ave;
             -- ********************************************************* --
              PROCEDURE update_ave_especie (pid_ave NUMBER,pid_especie NUMBER) is
              BEGIN
                    UPDATE ave SET id_especie = pid_especie WHERE id_ave = pid_ave;
                    Commit;
              END update_ave_especie;
             -- ********************************************************* --
              PROCEDURE insert_ave (pid_especie NUMBER,pid_color NUMBER,pid_estado NUMBER,pnombre varchar2,ptamano varchar2,pimagen varchar2) is
              BEGIN
                    INSERT INTO ave (id_ave, id_especie,id_color,id_estado,nombre_comun,tamano,imagen) 
                    VALUES (sq_ave.NEXTVAL,pid_especie,pid_color,pid_estado,pnombre,ptamano,pimagen);
                    Commit;
              END insert_ave;
              -- ********************************************************* --
              FUNCTION select_ave (pid_ave NUMBER) RETURN ave_record AS
              l_aves  ave_record := ave_record();
              BEGIN
                 FOR I IN (select ave.id_ave,especie.nombre especie, ave.nombre_comun nombre, color.nombre color,tipo.nombre tipo, 
                            ave.tamano, ave.imagen, color.id_color colorid, tipo.id_tipo tipoid 
                            from ave inner join especie on ave.id_especie = especie.id_especie 
                            inner join tipo on ave.id_estado = tipo.id_tipo 
                            inner join color on ave.id_color = color.id_color 
                            where ave.id_ave = pid_ave) LOOP
                        l_aves.EXTEND;
                        l_aves(l_aves.COUNT) := (t_ave(i.id_ave, i.especie, i.nombre, i.color, i.tipo, i.tamano, i.imagen, i.colorid, i.tipoid)) ;
                END LOOP;
              RETURN l_aves;
              END select_ave;       
              -- ********************************************************* --              
              FUNCTION total_ave  RETURN VARCHAR2 IS
              total VARCHAR2(11) ;
              BEGIN
              SELECT COUNT(id_ave) into total FROM ave;              
              RETURN total;
             
              END total_ave;
              -- ********************************************************* --   
              FUNCTION ave_especie_genero RETURN ave_especie_genero_record AS
              l_ave_especie_generos ave_especie_genero_record := ave_especie_genero_record();
              BEGIN
                 FOR I IN (select ave.id_ave,ave.nombre_comun,genero.nombre || ' ' ||  especie.nombre nombre_cientifico from ave 
                            inner join especie on ave.id_especie = especie.id_especie
                            inner join genero on especie.id_genero = genero.id_genero) LOOP
                         l_ave_especie_generos.EXTEND;
                         l_ave_especie_generos(l_ave_especie_generos.COUNT) := (t_ave_especie_genero(i.id_ave, i.nombre_comun, i.nombre_cientifico)) ;
                END LOOP;
              RETURN  l_ave_especie_generos;
              END ave_especie_genero;   
              -- ********************************************************* --   
              FUNCTION ave_general (pid_ave NUMBER) RETURN ave_general_record AS
              l_ave_generales ave_general_record := ave_general_record();
              BEGIN
                 FOR I IN (select ave.id_ave,ave.nombre_comun,genero.nombre ||' ' || especie.nombre nombre_cientifico, genero.nombre genero, 
                            especie.nombre especie, familia.nombre familia,
                            suborden.nombre suborden, orden.nombre orden,clase.nombre clase, tipo.nombre tipo,ave.imagen
                            from ave 
                            inner join especie on ave.id_especie = especie.id_especie
                            inner join genero on especie.id_genero = genero.id_genero
                            inner join familia on genero.id_familia = familia.id_familia
                            inner join suborden on familia.id_suborden = suborden.id_suborden
                            inner join orden on suborden.id_orden = orden.id_orden
                            inner join clase on orden.id_clase = clase.id_clase 
                            inner join tipo on ave.id_estado = tipo.id_tipo
                            where ave.id_ave = pid_ave) LOOP
                         l_ave_generales.EXTEND;
                         l_ave_generales(l_ave_generales.COUNT) := (t_ave_general(i.id_ave, i.nombre_comun, i.nombre_cientifico, i.genero, 
                         i.especie, i.familia, i.suborden, i.orden, i.clase, i.tipo, i.imagen)) ;
                END LOOP;
              RETURN  l_ave_generales;
              END ave_general;  
              -- ********************************************************* --   
              FUNCTION ave_tipo (pid_tipo NUMBER) RETURN ave_tipo_record AS
              l_ave_tipos ave_tipo_record := ave_tipo_record();
              BEGIN
                 FOR I IN (select ave.id_ave,especie.nombre especie, ave.nombre_comun nombre, color.nombre color,tipo.nombre tipo,
                            ave.tamano, ave.imagen from ave 
                            inner join especie on ave.id_especie = especie.id_especie
                            inner join tipo on ave.id_estado = tipo.id_tipo
                            inner join color on ave.id_color = color.id_color and ave.id_estado = nvl(pid_tipo, ave.id_estado)) LOOP
                         l_ave_tipos.EXTEND;
                         l_ave_tipos(l_ave_tipos.COUNT) := (t_ave_tipo(i.id_ave, i.especie, i.nombre, i.color, i.tipo, i.tamano, i.imagen)) ;
                END LOOP;
              RETURN  l_ave_tipos;
              END ave_tipo;
              -- ********************************************************* --              
              FUNCTION ave_id  RETURN VARCHAR2 IS
              id VARCHAR2(11) ;
              BEGIN
              select id_ave into id from ave where id_ave = ( select max(id_ave) from ave );             
              RETURN id;
             
              END ave_id;
 END pck_ave;

/
--------------------------------------------------------
--  DDL for Package Body PCK_AVISTAMIENTO
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_AVISTAMIENTO" AS
             -- ********************************************************* --
              PROCEDURE delete_avistamiento (pId NUMBER) is
              BEGIN
                    Delete from avistamiento where id_avistamiento = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE update_avistamiento (pid_avistamiento number,pid_persona NUMBER,pid_ave NUMBER,platitud NUMBER,plongitud number,pfoto varchar2) is
              BEGIN
                    UPDATE avistamiento SET
                    id_persona = pid_persona,
                    id_ave = pid_ave,
                    latitud = platitud,
                    longitud = plongitud,
                    foto = pfoto
                    WHERE id_avistamiento = pid_avistamiento;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE insert_avistamiento (pid_persona NUMBER,pid_ave NUMBER,platitud NUMBER,plongitud number,pfoto varchar2) is
              BEGIN
                    INSERT INTO avistamiento (id_avistamiento,id_persona,id_ave,latitud,longitud,foto)
                    VALUES (sq_avistamiento.NEXTVAL,pid_persona,pid_ave,platitud,plongitud,pfoto);
                    Commit;
              END;
              -- ********************************************************* --             
              FUNCTION total_avistamiento  RETURN VARCHAR2 IS
              total VARCHAR2(11) ;
              BEGIN
              SELECT COUNT(id_avistamiento) into total FROM avistamiento;              
              RETURN total;
             
              END total_avistamiento;
              -- ********************************************************* --             
              FUNCTION total_avistamiento_persona (pid_persona NUMBER)  RETURN VARCHAR2 IS
              total VARCHAR2(11) ;
              BEGIN
              SELECT COUNT(id_avistamiento) into total FROM avistamiento WHERE ID_PERSONA = pid_persona;            
              RETURN total;             
              END total_avistamiento_persona;
              -- ********************************************************* --  
              FUNCTION ave_cantidad RETURN ave_cantidad_record AS
              l_ave_cantidades  ave_cantidad_record := ave_cantidad_record();
              BEGIN
                 FOR I IN (SELECT  id_ave, COUNT(*) cantidad
                            FROM avistamiento WHERE ROWNUM <= 10
                            GROUP BY id_ave
                            HAVING COUNT(*) > 0  order by cantidad) LOOP
                         l_ave_cantidades.EXTEND;
                         l_ave_cantidades(l_ave_cantidades.COUNT) := (t_ave_cantidad(i.id_ave, i.cantidad)) ;
                END LOOP;
              RETURN  l_ave_cantidades;
              END ave_cantidad;   
              -- ********************************************************* --  
              FUNCTION avistamiento_ave (pid_ave NUMBER) RETURN avistamiento_record AS
              l_avistamientos  avistamiento_record := avistamiento_record();
              BEGIN
                 FOR I IN (SELECT ID_AVISTAMIENTO, ID_PERSONA, ID_AVE, LATITUD, LONGITUD, FOTO from avistamiento WHERE id_ave = pid_ave) LOOP
                         l_avistamientos.EXTEND;
                         l_avistamientos(l_avistamientos.COUNT) := (t_avistamiento(i.id_avistamiento, i.id_persona, 
                         i.id_ave, i.latitud, i.longitud, i.foto));
                END LOOP;
              RETURN  l_avistamientos;
              END avistamiento_ave;    
              -- ********************************************************* --  
              FUNCTION avistamiento_general RETURN avistamiento_general_record AS
              l_avistamiento_generales  avistamiento_general_record := avistamiento_general_record();
              BEGIN
                 FOR I IN (select avistamiento.id_avistamiento, persona.nombre, ave.nombre_comun, avistamiento.foto from avistamiento 
                            inner join persona on avistamiento.id_persona = persona.id_persona
                            inner join ave on ave.id_ave = avistamiento.id_ave) LOOP
                         l_avistamiento_generales.EXTEND;
                         l_avistamiento_generales(l_avistamiento_generales.COUNT) := (t_avistamiento_general(i.id_avistamiento, i.nombre, i.nombre_comun, i.foto)) ;
                END LOOP;
              RETURN  l_avistamiento_generales;
              END avistamiento_general;                 
 END;

/
--------------------------------------------------------
--  DDL for Package Body PCK_CANTON
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_CANTON" AS
             -- ********************************************************* --
              PROCEDURE delete_canton (pId NUMBER) is
              BEGIN
                    Delete from canton where id_canton = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE update_canton (pId NUMBER,pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    UPDATE canton SET nombre = pNombre,id_provincia = pIdC WHERE id_canton = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE insert_canton (pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    INSERT INTO canton (id_canton, nombre,id_provincia) VALUES (sq_canton.nextval,pnombre,pIdC);
                    Commit;
              END;
              -- ********************************************************* --
              FUNCTION canton_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from canton
                    where id_canton = pId;
                    RETURN(vname);
              END;

              -- ********************************************************* --
              FUNCTION provincia_id(pId NUMBER) return VARCHAR2
              IS
                    vid NUMBER(11);
              BEGIN
                    SELECT id_provincia
                    INTO vid
                    from canton
                    where id_canton = pId;
                    RETURN(vid);
              END;
              -- ********************************************************* --
              FUNCTION provincia_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                 SELECT provincia.nombre
                  INTO vname
                  FROM provincia
                  INNER JOIN canton ON canton.id_provincia = provincia.id_provincia and canton.id_canton = pId;
                 RETURN(vname);
              END;
              -- ********************************************************* --              
              FUNCTION total_canton  RETURN VARCHAR2 IS
              total VARCHAR2(11) ;
              BEGIN
              SELECT COUNT(id_canton) into total FROM canton;              
              RETURN total;
             
              END total_canton;
              -- ********************************************************* --   
              FUNCTION canton_provincia RETURN canton_provincia_record AS
              l_canton_provincias canton_provincia_record := canton_provincia_record();
              BEGIN
                 FOR I IN (Select canton.id_canton,canton.nombre, provincia.nombre provincia from canton inner join provincia 
                            on canton.id_provincia = provincia.id_provincia order by canton.id_provincia,canton.nombre) LOOP
                         l_canton_provincias.EXTEND;
                         l_canton_provincias(l_canton_provincias.COUNT) := (t_canton_provincia(i.id_canton, i.nombre, i.provincia)) ;
                END LOOP;
              RETURN  l_canton_provincias;
              END canton_provincia; 
              -- ********************************************************* -- 
              FUNCTION canton_general RETURN canton_general_record AS
              l_canton_generales canton_general_record := canton_general_record();
              BEGIN
                 FOR I IN (select pais.nombre || ' ' || provincia.nombre || ' ' || initcap(canton.nombre) ubicacion, 
                            canton.id_canton from continente 
                            inner join pais on pais.id_continente = continente.id_continente
                            inner join provincia on pais.id_pais = provincia.id_pais
                            inner join canton on provincia.id_provincia = canton.id_provincia order by provincia.nombre,canton.nombre ASC) LOOP
                         l_canton_generales.EXTEND;
                         l_canton_generales(l_canton_generales.COUNT) := (t_canton_general(i.ubicacion, i.id_canton)) ;
                END LOOP;
              RETURN  l_canton_generales;
              END canton_general; 
              -- ********************************************************* --  
 END ;

/
--------------------------------------------------------
--  DDL for Package Body PCK_CLASE
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_CLASE" AS
             -- ********************************************************* --
              PROCEDURE delete_clase (pId NUMBER) is
              BEGIN
                    Delete from clase where id_clase = pId;
                    Commit;
              END delete_clase;
             -- ********************************************************* --
              PROCEDURE update_clase (pId NUMBER,pNombre VARCHAR2) is
              BEGIN
                    UPDATE clase SET nombre = pNombre WHERE id_clase = pId;
                    Commit;
              END update_clase;
             -- ********************************************************* --
              PROCEDURE insert_clase (pNombre VARCHAR2) is
              BEGIN
                    INSERT INTO clase (id_clase, nombre) VALUES (sq_clase.NEXTVAL,pnombre);
                    Commit;
              END insert_clase;
              -- ********************************************************* --
              FUNCTION clase_nombre(pId NUMBER) return VARCHAR2 
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from clase
                    where id_clase = pId;
                    RETURN(vname);
              END;

 END pck_clase;


/
--------------------------------------------------------
--  DDL for Package Body PCK_COLOR
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_COLOR" AS
             -- ********************************************************* --
              PROCEDURE delete_color (pId NUMBER) is
              BEGIN
                    Delete from color where id_color = pId;
                    Commit;
              END delete_color;
             -- ********************************************************* --
              PROCEDURE update_color (pId NUMBER,pNombre VARCHAR2) is
              BEGIN
                    UPDATE color SET nombre = pNombre WHERE id_color = pId;
                    Commit;
              END update_color;
             -- ********************************************************* --
              PROCEDURE insert_color (pNombre VARCHAR2) is
              BEGIN
                    INSERT INTO color (id_color, nombre) VALUES (sq_color.NEXTVAL,pnombre);
                    Commit;
              END insert_color;
              -- ********************************************************* --
              FUNCTION color_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from color
                    where id_color = pId;
                    RETURN(vname);
              END;

 END pck_color;


/
--------------------------------------------------------
--  DDL for Package Body PCK_CONTINENTE
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_CONTINENTE" AS
             -- ********************************************************* --
              PROCEDURE delete_continente (pId NUMBER) is
              BEGIN
                    Delete from continente where id_continente = pId;
                    Commit;
              END delete_continente;
             -- ********************************************************* --
              PROCEDURE update_continente (pId NUMBER,pNombre VARCHAR2) is
              BEGIN
                    UPDATE continente SET nombre = pNombre WHERE id_continente = pId;
                    Commit;
              END update_continente;
             -- ********************************************************* --
              PROCEDURE insert_continente (pNombre VARCHAR2) is
              BEGIN
                    INSERT INTO continente (id_continente, nombre) VALUES (sq_continente.NEXTVAL,pnombre);
                    Commit;
              END insert_continente;
              -- ********************************************************* --
              FUNCTION continente_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from continente
                    where id_continente = pId;
                    RETURN(vname);
              END;

 END pck_continente;


/
--------------------------------------------------------
--  DDL for Package Body PCK_ESPECIE
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_ESPECIE" AS
             -- ********************************************************* --
              PROCEDURE delete_especie (pId NUMBER) is
              BEGIN
                    Delete from especie where id_especie = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE update_especie (pId NUMBER,pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    UPDATE especie SET nombre = pNombre,id_genero = pIdC WHERE id_especie = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE insert_especie (pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    INSERT INTO especie (id_especie, nombre,id_genero) VALUES (sq_especie.nextval,pnombre,pIdC);
                    Commit;
              END;
              -- ********************************************************* --
              FUNCTION especie_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from especie
                    where id_especie = pId;
                    RETURN(vname);
              END;

              -- ********************************************************* --
              FUNCTION genero_id(pId NUMBER) return VARCHAR2
              IS
                    vid NUMBER(11);
              BEGIN
                    SELECT id_genero
                    INTO vid
                    from especie
                    where id_especie = pId;
                    RETURN(vid);
              END;
              -- ********************************************************* --
              FUNCTION genero_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                 SELECT genero.nombre
                  INTO vname
                  FROM genero
                  INNER JOIN especie ON especie.id_genero = genero.id_genero and especie.id_especie = pId;
                 RETURN(vname);
              END;
              -- ********************************************************* --              
              FUNCTION total_especie  RETURN VARCHAR2 IS
              total VARCHAR2(11) ;
              BEGIN
              SELECT COUNT(id_especie) into total FROM especie;              
              RETURN total;             
              END total_especie;
              -- ********************************************************* --   
              FUNCTION especie_genero RETURN especie_genero_record AS
              l_especie_generos especie_genero_record := especie_genero_record();
              BEGIN
                 FOR I IN (Select especie.id_especie, especie.nombre, genero.nombre genero  from especie inner join genero 
                            on genero.id_genero = especie.id_genero order by especie.nombre,genero.id_genero) LOOP
                         l_especie_generos.EXTEND;
                         l_especie_generos(l_especie_generos.COUNT) := (t_especie_genero(i.id_especie, i.nombre, i.genero)) ;
                END LOOP;
              RETURN  l_especie_generos;
              END especie_genero; 
              -- ********************************************************* --  
 END ;

/
--------------------------------------------------------
--  DDL for Package Body PCK_FAMILIA
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_FAMILIA" AS
             -- ********************************************************* --
              PROCEDURE delete_familia (pId NUMBER) is
              BEGIN
                    Delete from familia where id_familia = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE update_familia (pId NUMBER,pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    UPDATE familia SET nombre = pNombre,id_suborden = pIdC WHERE id_familia = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE insert_familia (pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    INSERT INTO familia (id_familia, nombre,id_suborden) VALUES (sq_familia.nextval,pnombre,pIdC);
                    Commit;
              END;
              -- ********************************************************* --
              FUNCTION familia_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from familia
                    where id_familia = pId;
                    RETURN(vname);
              END;

              -- ********************************************************* --
              FUNCTION suborden_id(pId NUMBER) return VARCHAR2
              IS
                    vid NUMBER(11);
              BEGIN
                    SELECT id_suborden
                    INTO vid
                    from familia
                    where id_familia = pId;
                    RETURN(vid);
              END;
              -- ********************************************************* --
              FUNCTION suborden_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                 SELECT suborden.nombre
                  INTO vname
                  FROM suborden
                  INNER JOIN familia ON familia.id_suborden = suborden.id_suborden and familia.id_familia = pId;
                 RETURN(vname);
              END;
              -- ********************************************************* --   
              FUNCTION familia_suborden RETURN familia_suborden_record AS
              l_familia_subordenes familia_suborden_record := familia_suborden_record();
              BEGIN
                 FOR I IN (Select familia.id_familia,familia.nombre, suborden.nombre suborden  from familia inner join suborden 
                            on suborden.id_suborden = familia.id_suborden order by familia.nombre,suborden.id_suborden) LOOP
                         l_familia_subordenes.EXTEND;
                         l_familia_subordenes(l_familia_subordenes.COUNT) := (t_familia_suborden(i.id_familia, i.nombre, i.suborden)) ;
                END LOOP;
              RETURN  l_familia_subordenes;
              END familia_suborden;    
              
 END pck_familia;

/
--------------------------------------------------------
--  DDL for Package Body PCK_GENERO
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_GENERO" AS
             -- ********************************************************* --
              PROCEDURE delete_genero (pId NUMBER) is
              BEGIN
                    Delete from genero where id_genero = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE update_genero (pId NUMBER,pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    UPDATE genero SET nombre = pNombre,id_familia = pIdC WHERE id_genero = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE insert_genero (pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    INSERT INTO genero (id_genero, nombre,id_familia) VALUES (sq_genero.nextval,pnombre,pIdC);
                    Commit;
              END;
              -- ********************************************************* --
              FUNCTION genero_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from genero
                    where id_genero = pId;
                    RETURN(vname);
              END;

              -- ********************************************************* --
              FUNCTION familia_id(pId NUMBER) return VARCHAR2
              IS
                    vid NUMBER(11);
              BEGIN
                    SELECT id_familia
                    INTO vid
                    from genero
                    where id_genero = pId;
                    RETURN(vid);
              END;
              -- ********************************************************* --
              FUNCTION familia_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                 SELECT familia.nombre
                  INTO vname
                  FROM familia
                  INNER JOIN genero ON genero.id_familia = familia.id_familia and genero.id_genero = pId;
                 RETURN(vname);
              END;
              -- ********************************************************* --   
              FUNCTION genero_familia RETURN genero_familia_record AS
              l_genero_familias genero_familia_record := genero_familia_record();
              BEGIN
                 FOR I IN (Select genero.id_genero,genero.nombre, familia.nombre familia  from genero inner join familia 
                        on familia.id_familia = genero.id_familia order by genero.nombre,familia.id_familia) LOOP
                         l_genero_familias.EXTEND;
                         l_genero_familias(l_genero_familias.COUNT) := (t_genero_familia(i.id_genero, i.nombre, i.familia)) ;
                END LOOP;
              RETURN  l_genero_familias;
              END genero_familia; 
 END ;

/
--------------------------------------------------------
--  DDL for Package Body PCK_ORDEN
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_ORDEN" AS
             -- ********************************************************* --
              PROCEDURE delete_orden (pId NUMBER) is
              BEGIN
                    Delete from orden where id_orden = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE update_orden (pId NUMBER,pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    UPDATE orden SET nombre = pNombre,id_clase = pIdC WHERE id_orden = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE insert_orden (pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    INSERT INTO orden (id_orden, nombre,id_clase) VALUES (sq_orden.NEXTVAL,pnombre,pIdC);
                    Commit;
              END;
              -- ********************************************************* --
              FUNCTION orden_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from orden
                    where id_orden = pId;
                    RETURN(vname);
              END;

              -- ********************************************************* --
              FUNCTION clase_id(pId NUMBER) return VARCHAR2
              IS
                    vid NUMBER(11);
              BEGIN
                    SELECT id_clase
                    INTO vid
                    from orden
                    where id_orden = pId;
                    RETURN(vid);
              END;
              -- ********************************************************* --
              FUNCTION nombre_clase(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                 SELECT clase.nombre
                  INTO vname 
                  FROM orden
                  INNER JOIN clase ON orden.id_clase = clase.id_clase and orden.id_orden = pId;
                 RETURN(vname);
              END;
              -- ********************************************************* --   
              FUNCTION orden_clase RETURN orden_clase_record AS
              l_orden_clases orden_clase_record := orden_clase_record();
              BEGIN
                 FOR I IN (Select orden.id_orden,orden.nombre, clase.nombre clase  from orden inner join clase 
                            on clase.id_clase = orden.id_clase order by orden.nombre,clase.id_clase) LOOP
                         l_orden_clases.EXTEND;
                         l_orden_clases(l_orden_clases.COUNT) := (t_orden_clase(i.id_orden, i.nombre, i.clase)) ;
                END LOOP;
              RETURN  l_orden_clases;
              END orden_clase; 
 END pck_orden;

/
--------------------------------------------------------
--  DDL for Package Body PCK_PAIS
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_PAIS" AS
             -- ********************************************************* --
              PROCEDURE delete_pais (pId NUMBER) is
              BEGIN
                    Delete from pais where id_pais = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE update_pais (pId NUMBER,pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    UPDATE pais SET nombre = pNombre,id_continente = pIdC WHERE id_pais = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE insert_pais (pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    INSERT INTO pais (id_pais, nombre,id_continente) VALUES (sq_pais.nextval,pnombre,pIdC);
                    Commit;
              END;
              -- ********************************************************* --
              FUNCTION pais_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from pais
                    where id_pais = pId;
                    RETURN(vname);
              END;

              -- ********************************************************* --
              FUNCTION continente_id(pId NUMBER) return VARCHAR2
              IS
                    vid NUMBER(11);
              BEGIN
                    SELECT id_continente
                    INTO vid
                    from pais
                    where id_pais = pId;
                    RETURN(vid);
              END;
              -- ********************************************************* --
              FUNCTION continente_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                 SELECT continente.nombre
                  INTO vname
                  FROM continente
                  INNER JOIN pais ON pais.id_continente = continente.id_continente and pais.id_pais = pId;
                 RETURN(vname);
              END;
              -- ********************************************************* --   
              FUNCTION pais_continente RETURN pais_continente_record AS
              l_pais_continentes pais_continente_record := pais_continente_record();
              BEGIN
                 FOR I IN (Select pais.id_pais, pais.nombre, continente.nombre continente from pais inner join continente 
                            on continente.id_continente = pais.id_continente order by pais.id_pais, continente.nombre) LOOP
                         l_pais_continentes.EXTEND;
                         l_pais_continentes(l_pais_continentes.COUNT) := (t_pais_continente(i.id_pais, i.nombre, i.continente)) ;
                END LOOP;
              RETURN  l_pais_continentes;
              END pais_continente; 
 END ;

/
--------------------------------------------------------
--  DDL for Package Body PCK_PARAMETRO
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_PARAMETRO" AS
             -- ********************************************************* --
              PROCEDURE update_parametro (pid_parametro number,pdescripcion VARCHAR) is
              BEGIN
                    UPDATE parametro SET
                    descripcion = pdescripcion
                    WHERE id_parametro = pid_parametro;
                    Commit;
              END update_parametro;
              -- ********************************************************* --
              FUNCTION parametro_id (pid_parametro NUMBER) RETURN parametro_record AS
              l_parametro_ids parametro_record := parametro_record();
              BEGIN
                 FOR I IN (select id_parametro, nombre, descripcion from parametro where id_parametro = pid_parametro) LOOP
                         l_parametro_ids.EXTEND;
                         l_parametro_ids(l_parametro_ids.COUNT) := (t_parametro(i.id_parametro, i.nombre, i.descripcion)) ;
                END LOOP;
              RETURN  l_parametro_ids;
              END parametro_id;   
 END;

/
--------------------------------------------------------
--  DDL for Package Body PCK_PERSONA
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_PERSONA" AS
             -- ********************************************************* --
              PROCEDURE delete_p (pId NUMBER) is
              BEGIN
                    Delete from persona where id_persona = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE update_p (pid_persona NUMBER,pnombre VARCHAR2,papellido VARCHAR2,pemail VARCHAR2,pprofesion VARCHAR2,ptipo NUMBER,pfecha_nacimiento date,pfoto VARCHAR2,puser VARCHAR2,ppass VARCHAR2) is
              BEGIN
                UPDATE persona SET nombre = pnombre,apellido= papellido,fecha_nacimiento = pfecha_nacimiento,email = pemail,profesion = pprofesion, foto = pfoto,tipo = ptipo
                WHERE id_persona = pid_persona;
                UPDATE usuario SET usuario = puser,contrasena= ppass
                WHERE id_persona = pid_persona;
                Commit;
              END;
             -- ********************************************************* --
              PROCEDURE insert_p (pnombre VARCHAR2,papellido VARCHAR2,pemail VARCHAR2,pprofesion VARCHAR2,ptipo NUMBER,pfecha_nacimiento date,puser VARCHAR2,ppass VARCHAR2) is
              BEGIN
                    INSERT INTO persona (id_persona, nombre,apellido,fecha_nacimiento,email,profesion,tipo) 
                    VALUES (sq_persona.NEXTVAL,pnombre,papellido,pfecha_nacimiento,pemail,pprofesion,ptipo);
                    INSERT INTO usuario (id_Usuario,id_persona,usuario,contrasena) VALUES
                    (sq_usuario.nextval,sq_persona.currval,puser,ppass);

                    Commit;
              END;
              -- ********************************************************* --
              FUNCTION tipo_persona (pusuario VARCHAR2,pcontrasena VARCHAR2) return NUMBER
              IS
                    vtipo number(11);
              BEGIN
                    select tipo into vtipo from persona where id_persona = 
                    (select id_persona from usuario where usuario = pusuario and contrasena = pcontrasena);

                    RETURN(vtipo);
              END;
              -- ********************************************************* --
              FUNCTION id_persona (pusuario VARCHAR2,pcontrasena VARCHAR2) return NUMBER
              IS
                    vpersona number(11);
              BEGIN

                    select id_persona into vpersona  from usuario 
                    where usuario = pusuario and contrasena = pcontrasena;

                    RETURN(vpersona);
              END;
              -- ********************************************************* --
              FUNCTION obtener_nombre (pId NUMBER) return VARCHAR2
              IS
                    vpersona VARCHAR2(50);
              BEGIN

                    select nombre into vpersona  from persona 
                    where id_persona = pId;

                    RETURN(vpersona);
              END;
               -- ********************************************************* --           
              FUNCTION total_persona RETURN VARCHAR2 IS
              total VARCHAR2(11) ;
              BEGIN
              SELECT COUNT(id_persona) into total FROM persona;              
              RETURN total;
             
              END total_persona;
              -- ********************************************************* --  
              FUNCTION persona_usuario (pid_persona NUMBER) RETURN persona_usuario_record AS
              l_persona_usuarios  persona_usuario_record := persona_usuario_record();
              BEGIN
                 FOR I IN (select persona.id_persona, nombre, apellido, fecha_nacimiento, email, profesion, tipo, foto, id_usuario, usuario, contrasena  from persona 
                        inner join usuario on usuario.id_persona = persona.id_persona 
                        and persona.id_persona = pid_persona) LOOP
                        l_persona_usuarios.EXTEND;
                        l_persona_usuarios(l_persona_usuarios.COUNT) := (t_persona_usuario(i.id_persona, i.nombre, i.apellido, i.fecha_nacimiento, 
                        i.email, i.profesion, i.tipo, i.foto, i.id_usuario, i.usuario, i.contrasena)) ;
                END LOOP;
              RETURN l_persona_usuarios;
              END persona_usuario;   
 END;

/
--------------------------------------------------------
--  DDL for Package Body PCK_PROVINCIA
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_PROVINCIA" AS
             -- ********************************************************* --
              PROCEDURE delete_provincia (pId NUMBER) is
              BEGIN
                    Delete from provincia where id_provincia = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE update_provincia (pId NUMBER,pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    UPDATE provincia SET nombre = pNombre,id_pais = pIdC WHERE id_provincia = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE insert_provincia (pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    INSERT INTO provincia (id_provincia, nombre,id_pais) VALUES (sq_provincia.nextval,pnombre,pIdC);
                    Commit;
              END;
              -- ********************************************************* --
              FUNCTION provincia_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from provincia
                    where id_provincia = pId;
                    RETURN(vname);
              END;

              -- ********************************************************* --
              FUNCTION pais_id(pId NUMBER) return VARCHAR2
              IS
                    vid NUMBER(11);
              BEGIN
                    SELECT id_pais
                    INTO vid
                    from provincia
                    where id_provincia = pId;
                    RETURN(vid);
              END;
              -- ********************************************************* --
              FUNCTION pais_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                 SELECT pais.nombre
                  INTO vname
                  FROM pais
                  INNER JOIN provincia ON provincia.id_pais = pais.id_pais and provincia.id_provincia = pId;
                 RETURN(vname);
              END;
              -- ********************************************************* --   
              FUNCTION provincia_pais RETURN provincia_pais_record AS
              l_provincia_paises provincia_pais_record := provincia_pais_record();
              BEGIN
                 FOR I IN (SELECT provincia.id_provincia,provincia.nombre, pais.nombre pais FROM provincia INNER JOIN pais 
                            ON provincia.id_pais = pais.id_pais ORDER BY pais.id_continente,pais.nombre) LOOP
                         l_provincia_paises.EXTEND;
                         l_provincia_paises(l_provincia_paises.COUNT) := (t_provincia_pais(i.id_provincia, i.nombre, i.pais)) ;
                END LOOP;
              RETURN  l_provincia_paises;
              END provincia_pais;   
 END ;

/
--------------------------------------------------------
--  DDL for Package Body PCK_PUNTAJE
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_PUNTAJE" AS
             -- ********************************************************* --
              PROCEDURE delete_puntaje (pid_persona NUMBER,pid_avistamiento NUMBER) is
              BEGIN
                    Delete from puntaje where id_persona = pid_persona and id_avistamiento =pid_avistamiento;
                    Commit;
              END;

             -- ********************************************************* --
              PROCEDURE insert_puntaje (pid_persona NUMBER,pid_avistamiento NUMBER) is
              BEGIN
                    INSERT INTO puntaje (id_puntaje,id_persona,id_avistamiento)
                    VALUES (sq_puntos.NEXTVAL,pid_persona,pid_avistamiento);
                    Commit;
              END;
              -- ********************************************************* --             
              FUNCTION total_puntaje  RETURN VARCHAR2 IS
              total VARCHAR2(11) ;
              BEGIN
              SELECT COUNT(id_puntaje) into total FROM puntaje;              
              RETURN total;
             
              END total_puntaje;
              -- ********************************************************* --  
 END;

/
--------------------------------------------------------
--  DDL for Package Body PCK_SUBORDEN
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_SUBORDEN" AS
             -- ********************************************************* --
              PROCEDURE delete_suborden (pId NUMBER) is
              BEGIN
                    Delete from suborden where id_suborden = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE update_suborden (pId NUMBER,pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    UPDATE suborden SET nombre = pNombre,id_orden = pIdC WHERE id_suborden = pId;
                    Commit;
              END;
             -- ********************************************************* --
              PROCEDURE insert_suborden (pNombre VARCHAR2,pIdC NUMBER) is
              BEGIN
                    INSERT INTO suborden (id_suborden, nombre,id_orden) VALUES (sq_suborden.nextval,pnombre,pIdC);
                    Commit;
              END;
              -- ********************************************************* --
              FUNCTION suborden_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from suborden
                    where id_suborden = pId;
                    RETURN(vname);
              END;

              -- ********************************************************* --
              FUNCTION orden_id(pId NUMBER) return VARCHAR2
              IS
                    vid NUMBER(11);
              BEGIN
                    SELECT id_orden
                    INTO vid
                    from suborden
                    where id_suborden = pId;
                    RETURN(vid);
              END;
              -- ********************************************************* --
              FUNCTION orden_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                 SELECT orden.nombre
                  INTO vname
                  FROM orden
                  INNER JOIN suborden ON suborden.id_orden = orden.id_orden and suborden.id_suborden = pId;
                 RETURN(vname);
              END;
              -- ********************************************************* --   
              FUNCTION suborden_orden RETURN suborden_orden_record AS
              l_suborden_ordenes suborden_orden_record := suborden_orden_record();
              BEGIN
                 FOR I IN (SELECT suborden.id_suborden,suborden.nombre, orden.nombre orden  FROM suborden INNER JOIN orden 
                            ON orden.id_orden = suborden.id_orden ORDER BY suborden.nombre,orden.id_orden) LOOP
                         l_suborden_ordenes.EXTEND;
                         l_suborden_ordenes(l_suborden_ordenes.COUNT) := (t_suborden_orden(i.id_suborden, i.nombre, i.orden)) ;
                END LOOP;
              RETURN  l_suborden_ordenes;
              END suborden_orden;   
              
 END pck_suborden;

/
--------------------------------------------------------
--  DDL for Package Body PCK_TIPO
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_TIPO" AS
             -- ********************************************************* --
              PROCEDURE delete_tipo (pId NUMBER) is
              BEGIN
                    Delete from tipo where id_tipo = pId;
                    Commit;
              END delete_tipo;
             -- ********************************************************* --
              PROCEDURE update_tipo (pId NUMBER,pNombre VARCHAR2) is
              BEGIN
                    UPDATE tipo SET nombre = pNombre WHERE id_tipo = pId;
                    Commit;
              END update_tipo;
             -- ********************************************************* --
              PROCEDURE insert_tipo (pNombre VARCHAR2) is
              BEGIN
                    INSERT INTO tipo (id_tipo, nombre) VALUES (sq_tipo.NEXTVAL,pnombre);
                    Commit;
              END insert_tipo;
              -- ********************************************************* --
              FUNCTION tipo_nombre(pId NUMBER) return VARCHAR2
              IS
                    vname varchar2(30);
              BEGIN
                    SELECT nombre
                    INTO vname
                    from tipo
                    where id_tipo = pId;
                    RETURN(vname);
              END;

 END pck_tipo;


/
--------------------------------------------------------
--  DDL for Package Body PCK_UBICACIONES
--------------------------------------------------------

  CREATE OR REPLACE PACKAGE BODY "BL"."PCK_UBICACIONES" AS
             -- ********************************************************* --
              PROCEDURE delete_ubicacion (pid_ave NUMBER) is
              BEGIN
                    Delete from ubicacion where id_ave = pid_ave;
                    Commit;
              END;

             -- ********************************************************* --
              PROCEDURE insert_ubicacion (pid_ave NUMBER,pid_canton NUMBER) is
              BEGIN
                    INSERT INTO ubicacion (id_ubicacion,id_ave,id_canton)
                    VALUES (sq_ubicacion.NEXTVAL,pid_ave,pid_canton);
                    Commit;
              END;
              -- ********************************************************* --
              FUNCTION ubicacion_canton (pid_ave NUMBER) RETURN ubicacion_canton_record AS
              l_ubicacion_cantones ubicacion_canton_record := ubicacion_canton_record();
              BEGIN
                 FOR I IN (select pais.nombre || ' ' || canton.nombre ubicacion, canton.id_canton from ubicacion 
                        inner join canton on ubicacion.id_canton = canton.id_canton 
                        inner join provincia on canton.id_provincia = provincia.id_provincia
                        inner join pais on pais.id_pais = provincia.id_pais where ubicacion.id_ave = pid_ave
                        order by provincia.nombre,canton.nombre ASC) LOOP
                         l_ubicacion_cantones.EXTEND;
                         l_ubicacion_cantones(l_ubicacion_cantones.COUNT) := (t_ubicacion_canton(i.ubicacion, i.id_canton));
                END LOOP;
              RETURN  l_ubicacion_cantones;
              END ubicacion_canton;  
              -- ********************************************************* --              
              FUNCTION total_ubicacion (pid_canton NUMBER, pid_ave NUMBER) RETURN VARCHAR2 IS
              total VARCHAR2(11) ;
              BEGIN
              SELECT COUNT(id_ubicacion) INTO total FROM ubicacion WHERE id_canton = pid_canton AND id_ave = pid_ave;
              RETURN total;             
              END total_ubicacion;
 END;

/
--------------------------------------------------------
--  DDL for Function GET_AVISTAMIENTO
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_AVISTAMIENTO" RETURN avistamiento_record
    AS
       l_avistamiento avistamiento_record := avistamiento_record();
    BEGIN
         FOR I IN (SELECT ID_AVISTAMIENTO, ID_PERSONA, ID_AVE, LATITUD, LONGITUD,FOTO  FROM avistamiento) LOOP
                l_avistamiento.EXTEND;
                l_avistamiento(l_avistamiento.COUNT) := (t_avistamiento(i.ID_AVISTAMIENTO, i.ID_PERSONA, i.ID_AVE, i.LATITUD, i.LONGITUD, i.FOTO)) ;
       END LOOP;
        RETURN l_avistamiento;
END;

/
--------------------------------------------------------
--  DDL for Function GET_BITACORA
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_BITACORA" RETURN bitacora_record
    AS
       l_bitacoras  bitacora_record := bitacora_record();
    BEGIN
         FOR I IN (SELECT ID_BITACORA, ID_USUARIO, CONTRASENA   FROM bitacora) LOOP
                l_bitacoras.EXTEND;
                l_bitacoras(l_bitacoras.COUNT) := (t_bitacora(i.ID_BITACORA, i.ID_USUARIO , i.CONTRASENA)) ;
       END LOOP;
        RETURN l_bitacoras;
END;


/
--------------------------------------------------------
--  DDL for Function GET_CANTON
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_CANTON" RETURN canton_record
    AS
       l_canton canton_record := canton_record();
    BEGIN
         FOR I IN (SELECT ID_CANTON, ID_PROVINCIA, NOMBRE FROM canton) LOOP
                l_canton.EXTEND;
                l_canton(l_canton.COUNT) := (t_canton(i.ID_CANTON, i.ID_PROVINCIA, i.NOMBRE)) ;
       END LOOP;
        RETURN l_canton;
END;


/
--------------------------------------------------------
--  DDL for Function GET_CLASE
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_CLASE" RETURN clase_record
    AS
       l_clase  clase_record := clase_record();
    BEGIN
         FOR I IN (SELECT ID_CLASE, NOMBRE FROM clase) LOOP
                l_clase.EXTEND;
                l_clase(l_clase.COUNT) := (t_clase(i.id_clase, i.nombre)) ;
       END LOOP;
        RETURN l_clase;
END;


/
--------------------------------------------------------
--  DDL for Function GET_COLOR
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_COLOR" RETURN color_record
    AS
       l_color  color_record := color_record();
    BEGIN
         FOR I IN (SELECT ID_COLOR, NOMBRE  FROM color) LOOP
                l_color.EXTEND;
                l_color(l_color.COUNT) := (t_color(i.ID_COLOR, i.NOMBRE)) ;
       END LOOP;
        RETURN l_color;
END;


/
--------------------------------------------------------
--  DDL for Function GET_CONTINENTE
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_CONTINENTE" RETURN continente_record
    AS
       l_continente continente_record := continente_record();
    BEGIN
         FOR I IN (SELECT ID_CONTINENTE, NOMBRE FROM continente) LOOP
                l_continente.EXTEND;
                l_continente(l_continente.COUNT) := (t_continente(i.ID_CONTINENTE, i.NOMBRE)) ;
       END LOOP;
        RETURN l_continente;
END;


/
--------------------------------------------------------
--  DDL for Function GET_ESPECIE
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_ESPECIE" RETURN especie_record
    AS
       l_especie especie_record := especie_record();
    BEGIN
         FOR I IN (SELECT ID_ESPECIE, ID_GENERO, NOMBRE FROM especie) LOOP
                l_especie.EXTEND;
                l_especie(l_especie.COUNT) := (t_especie(i.ID_ESPECIE, i.ID_GENERO, i.NOMBRE)) ;
       END LOOP;
        RETURN l_especie;
END;


/
--------------------------------------------------------
--  DDL for Function GET_FAMILIA
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_FAMILIA" RETURN familia_record
    AS
       l_familia familia_record := familia_record();
    BEGIN
         FOR I IN (SELECT id_familia, id_suborden, nombre FROM familia) LOOP
                l_familia.EXTEND;
                l_familia(l_familia.COUNT) := (t_familia(i.id_familia, i.id_suborden, i.nombre)) ;
       END LOOP;
        RETURN l_familia;
END;


/
--------------------------------------------------------
--  DDL for Function GET_FOTO
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_FOTO" RETURN foto_record
    AS
       l_foto foto_record := foto_record();
    BEGIN
         FOR I IN (SELECT id_foto, id_avistamiento, url FROM foto) LOOP
                l_foto.EXTEND;
                l_foto(l_foto.COUNT) := (t_foto(i.id_foto, i.id_avistamiento, i.url)) ;
       END LOOP;
        RETURN l_foto;
END;


/
--------------------------------------------------------
--  DDL for Function GET_GENERO
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_GENERO" RETURN genero_record
    AS
       l_genero  genero_record := genero_record();
    BEGIN
         FOR I IN (SELECT id_genero, id_familia, nombre FROM genero) LOOP
                l_genero.EXTEND;
                l_genero(l_genero.COUNT) := (t_genero(i.id_genero, i.id_familia, i.nombre)) ;
       END LOOP;
        RETURN l_genero;
END;


/
--------------------------------------------------------
--  DDL for Function GET_ORDEN
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_ORDEN" RETURN orden_record
    AS
       l_orden  orden_record := orden_record();
    BEGIN
         FOR I IN (SELECT ID_ORDEN, ID_CLASE, NOMBRE  FROM orden) LOOP
                l_orden.EXTEND;
                l_orden(l_orden.COUNT) := (t_orden(i.ID_ORDEN, i.ID_CLASE, i.NOMBRE)) ;
       END LOOP;
        RETURN l_orden;
END;


/
--------------------------------------------------------
--  DDL for Function GET_PAIS
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_PAIS" RETURN pais_record
    AS
       l_pais pais_record := pais_record();
    BEGIN
         FOR I IN (SELECT ID_PAIS,ID_CONTINENTE, NOMBRE FROM pais) LOOP
                l_pais.EXTEND;
                l_pais(l_pais.COUNT) := (t_pais(i.ID_PAIS, i.ID_CONTINENTE, i.NOMBRE)) ;
       END LOOP;
        RETURN l_pais;
END;


/
--------------------------------------------------------
--  DDL for Function GET_PARAMETRO
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_PARAMETRO" RETURN parametro_record
    AS
       l_parametro parametro_record := parametro_record();
    BEGIN
         FOR I IN (SELECT ID_PARAMETRO, NOMBRE, DESCRIPCION FROM parametro order by id_parametro DESC) LOOP
                l_parametro.EXTEND;
                l_parametro(l_parametro.COUNT) := (t_parametro(i.ID_PARAMETRO, i.NOMBRE, i.DESCRIPCION)) ;
       END LOOP;
        RETURN l_parametro;
END;

/
--------------------------------------------------------
--  DDL for Function GET_PERSONA
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_PERSONA" RETURN persona_record
    AS
       l_persona persona_record := persona_record();
    BEGIN
         FOR I IN (SELECT ID_PERSONA, NOMBRE, APELLIDO, FECHA_NACIMIENTO, EMAIL, PROFESION, TIPO, FOTO FROM persona) LOOP
                l_persona.EXTEND;
                l_persona(l_persona.COUNT) := (t_persona(i.ID_PERSONA, i.NOMBRE, i.APELLIDO, i.FECHA_NACIMIENTO, i.EMAIL, i.PROFESION, i.TIPO, i.FOTO)) ;
       END LOOP;
        RETURN l_persona;
END;


/
--------------------------------------------------------
--  DDL for Function GET_PROVINCIA
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_PROVINCIA" RETURN provincia_record
    AS
       l_provincia  provincia_record := provincia_record();
    BEGIN
         FOR I IN (SELECT ID_PROVINCIA, ID_PAIS, NOMBRE FROM provincia) LOOP
                l_provincia.EXTEND;
                l_provincia(l_provincia.COUNT) := (t_provincia(i.ID_PROVINCIA, i.ID_PAIS, i.NOMBRE)) ;
       END LOOP;
        RETURN l_provincia;
END;


/
--------------------------------------------------------
--  DDL for Function GET_PUNTAJE
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_PUNTAJE" RETURN puntaje_record
    AS
       l_puntaje puntaje_record := puntaje_record();
    BEGIN
         FOR I IN (SELECT ID_PUNTAJE, ID_AVISTAMIENTO, ID_PERSONA FROM puntaje) LOOP
                l_puntaje.EXTEND;
                l_puntaje(l_puntaje.COUNT) := (t_puntaje(i.ID_PUNTAJE, i.ID_AVISTAMIENTO, i.ID_PERSONA)) ;
       END LOOP;
        RETURN l_puntaje;
END;


/
--------------------------------------------------------
--  DDL for Function GET_SUBORDEN
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_SUBORDEN" RETURN suborden_record
    AS
       l_suborden suborden_record := suborden_record();
    BEGIN
         FOR I IN (SELECT ID_SUBORDEN, ID_ORDEN, NOMBRE FROM suborden) LOOP
                l_suborden.EXTEND;
                l_suborden(l_suborden.COUNT) := (t_suborden(i.ID_SUBORDEN, i.ID_ORDEN, i.NOMBRE)) ;
       END LOOP;
        RETURN l_suborden;
END;


/
--------------------------------------------------------
--  DDL for Function GET_TIPO
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_TIPO" RETURN tipo_record
    AS
       l_tipo tipo_record := tipo_record();
    BEGIN
         FOR I IN (SELECT ID_TIPO, NOMBRE FROM tipo) LOOP
                l_tipo.EXTEND;
                l_tipo(l_tipo.COUNT) := (t_tipo(i.ID_TIPO, i.NOMBRE)) ;
       END LOOP;
        RETURN l_tipo;
END;


/
--------------------------------------------------------
--  DDL for Function GET_UBICACION
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_UBICACION" RETURN ubicacion_record
    AS
       l_ubicacion  ubicacion_record := ubicacion_record();
    BEGIN
         FOR I IN (SELECT ID_UBICACION, ID_AVE, ID_CANTON FROM ubicacion) LOOP
                l_ubicacion.EXTEND;
                l_ubicacion(l_ubicacion.COUNT) := (t_ubicacion(i.ID_UBICACION, i.ID_AVE, i.ID_CANTON)) ;
       END LOOP;
        RETURN l_ubicacion;
END;


/
--------------------------------------------------------
--  DDL for Function GET_USUARIO
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."GET_USUARIO" RETURN usuario_record
    AS
       l_usuario usuario_record := usuario_record();
    BEGIN
         FOR I IN (SELECT ID_USUARIO, ID_PERSONA, USUARIO, CONTRASENA FROM usuario) LOOP
                l_usuario.EXTEND;
                l_usuario(l_usuario.COUNT) := (t_usuario(i.ID_USUARIO, i.ID_PERSONA, i.USUARIO, i.CONTRASENA)) ;
       END LOOP;
        RETURN l_usuario;
END;


/
--------------------------------------------------------
--  DDL for Function TOTAL_AVE
--------------------------------------------------------

  CREATE OR REPLACE FUNCTION "BL"."TOTAL_AVE" RETURN NUMBER AS
              total NUMBER;
              BEGIN
              SELECT COUNT(*) into total FROM ave;
              RETURN total;
              END total_ave;

/
--------------------------------------------------------
--  Constraints for Table CONTINENTE
--------------------------------------------------------

  ALTER TABLE "BL"."CONTINENTE" MODIFY ("NOMBRE" CONSTRAINT "CONTINENTE_NOMBRE_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."CONTINENTE" ADD CONSTRAINT "PK_CONTINENTE" PRIMARY KEY ("ID_CONTINENTE")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table ORDEN
--------------------------------------------------------

  ALTER TABLE "BL"."ORDEN" MODIFY ("NOMBRE" CONSTRAINT "ORDEN_NOMBRE_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."ORDEN" ADD CONSTRAINT "PK_ORDEN" PRIMARY KEY ("ID_ORDEN")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table AVE
--------------------------------------------------------

  ALTER TABLE "BL"."AVE" MODIFY ("IMAGEN" CONSTRAINT "AVE_IMAGEN_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."AVE" MODIFY ("NOMBRE_COMUN" CONSTRAINT "AVE_NOMBRECOMUN_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."AVE" MODIFY ("TAMANO" CONSTRAINT "AVE_TAMANO_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."AVE" ADD CONSTRAINT "PK_AVE" PRIMARY KEY ("ID_AVE")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table SUBORDEN
--------------------------------------------------------

  ALTER TABLE "BL"."SUBORDEN" ADD CONSTRAINT "PK_SUBORDEN" PRIMARY KEY ("ID_SUBORDEN")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
 
  ALTER TABLE "BL"."SUBORDEN" MODIFY ("NOMBRE" CONSTRAINT "SUBORDEN_NOMBRE_NN" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table FAMILIA
--------------------------------------------------------

  ALTER TABLE "BL"."FAMILIA" MODIFY ("NOMBRE" CONSTRAINT "FAMILIA_NOMBRE_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."FAMILIA" ADD CONSTRAINT "PK_FAMILIA" PRIMARY KEY ("ID_FAMILIA")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table TIPO
--------------------------------------------------------

  ALTER TABLE "BL"."TIPO" ADD CONSTRAINT "PK_TIPO" PRIMARY KEY ("ID_TIPO")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
 
  ALTER TABLE "BL"."TIPO" MODIFY ("NOMBRE" CONSTRAINT "TIPO_NOMBRE_NN" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table CANTON
--------------------------------------------------------

  ALTER TABLE "BL"."CANTON" MODIFY ("NOMBRE" CONSTRAINT "CANTON_NOMBRE_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."CANTON" ADD CONSTRAINT "PK_CANTON" PRIMARY KEY ("ID_CANTON")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table AVISTAMIENTO
--------------------------------------------------------

  ALTER TABLE "BL"."AVISTAMIENTO" MODIFY ("LATITUD" CONSTRAINT "AVISTAMIENTO_LATITUD_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."AVISTAMIENTO" MODIFY ("LONGITUD" CONSTRAINT "AVISTAMIENTO_LONGITUD_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."AVISTAMIENTO" ADD CONSTRAINT "PK_AVISTAMIENTO" PRIMARY KEY ("ID_AVISTAMIENTO")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
 
  ALTER TABLE "BL"."AVISTAMIENTO" MODIFY ("FOTO" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."AVISTAMIENTO" MODIFY ("ID_PERSONA" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."AVISTAMIENTO" MODIFY ("ID_AVE" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table ESPECIE
--------------------------------------------------------

  ALTER TABLE "BL"."ESPECIE" MODIFY ("NOMBRE" CONSTRAINT "ESPECIE_NOMBRE_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."ESPECIE" ADD CONSTRAINT "PK_ESPECIE" PRIMARY KEY ("ID_ESPECIE")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table COLOR
--------------------------------------------------------

  ALTER TABLE "BL"."COLOR" MODIFY ("NOMBRE" CONSTRAINT "COLOR_NOMBRE_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."COLOR" ADD CONSTRAINT "PK_COLOR" PRIMARY KEY ("ID_COLOR")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table UBICACION
--------------------------------------------------------

  ALTER TABLE "BL"."UBICACION" ADD CONSTRAINT "PK_UBICACION" PRIMARY KEY ("ID_UBICACION")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table CLASE
--------------------------------------------------------

  ALTER TABLE "BL"."CLASE" MODIFY ("NOMBRE" CONSTRAINT "CLASE_NOMBRE_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."CLASE" ADD CONSTRAINT "PK_CLASE" PRIMARY KEY ("ID_CLASE")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table USUARIO
--------------------------------------------------------

  ALTER TABLE "BL"."USUARIO" ADD CONSTRAINT "NOMBRE" CHECK ("USUARIO" IS NOT NULL) ENABLE;
 
  ALTER TABLE "BL"."USUARIO" ADD CONSTRAINT "PK_USUARIO" PRIMARY KEY ("ID_USUARIO")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
 
  ALTER TABLE "BL"."USUARIO" MODIFY ("CONTRASENA" CONSTRAINT "USUARIO_CONTRASENA_NN" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table PUNTAJE
--------------------------------------------------------

  ALTER TABLE "BL"."PUNTAJE" ADD CONSTRAINT "PK_PUNTAJE" PRIMARY KEY ("ID_PUNTAJE")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table FOTO
--------------------------------------------------------

  ALTER TABLE "BL"."FOTO" MODIFY ("URL" CONSTRAINT "FOTO_URL_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."FOTO" ADD CONSTRAINT "PK_FOTO" PRIMARY KEY ("ID_FOTO")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS NOCOMPRESS LOGGING
  STORAGE( INITIAL 16384 NEXT 16384
  PCTINCREASE 0)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table GENERO
--------------------------------------------------------

  ALTER TABLE "BL"."GENERO" MODIFY ("NOMBRE" CONSTRAINT "GENERO_NOMBRE_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."GENERO" ADD CONSTRAINT "PK_GENERO" PRIMARY KEY ("ID_GENERO")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table PARAMETRO
--------------------------------------------------------

  ALTER TABLE "BL"."PARAMETRO" MODIFY ("DESCRIPCION" CONSTRAINT "PARAMETRO_DESCRIPCION_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."PARAMETRO" MODIFY ("NOMBRE" CONSTRAINT "PARAMETRO_NOMBRE_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."PARAMETRO" ADD CONSTRAINT "PK_PARAMETRO" PRIMARY KEY ("ID_PARAMETRO")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table PROVINCIA
--------------------------------------------------------

  ALTER TABLE "BL"."PROVINCIA" ADD CONSTRAINT "PK_PROVINCIA" PRIMARY KEY ("ID_PROVINCIA")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
 
  ALTER TABLE "BL"."PROVINCIA" MODIFY ("NOMBRE" CONSTRAINT "PROVINCIA_NOMBRE_NN" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table BITACORA
--------------------------------------------------------

  ALTER TABLE "BL"."BITACORA" MODIFY ("CONTRASENA" CONSTRAINT "BITACORA_CONTRASENA_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."BITACORA" ADD CONSTRAINT "PK_BITACORA" PRIMARY KEY ("ID_BITACORA")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS NOCOMPRESS LOGGING
  STORAGE( INITIAL 16384 NEXT 16384
  PCTINCREASE 0)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Constraints for Table PERSONA
--------------------------------------------------------

  ALTER TABLE "BL"."PERSONA" MODIFY ("APELLIDO" CONSTRAINT "PERSONA_APELLIDO_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."PERSONA" MODIFY ("EMAIL" CONSTRAINT "PERSONA_EMAIL_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."PERSONA" ADD CONSTRAINT "PERSONA_EMAIL_UK" UNIQUE ("EMAIL")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_DATA"  ENABLE;
 
  ALTER TABLE "BL"."PERSONA" MODIFY ("FECHA_NACIMIENTO" CONSTRAINT "PERSONA_FECHANACIMIENTO_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."PERSONA" MODIFY ("NOMBRE" CONSTRAINT "PERSONA_NOMBRE_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."PERSONA" MODIFY ("PROFESION" CONSTRAINT "PERSONA_PROFESION_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."PERSONA" ADD CONSTRAINT "PERSONA_TIPO_CK" CHECK (tipo= '1' OR tipo= '2' OR tipo= '3') ENABLE;
 
  ALTER TABLE "BL"."PERSONA" MODIFY ("TIPO" CONSTRAINT "PERSONA_TIPO_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."PERSONA" ADD CONSTRAINT "PK_PERSONA" PRIMARY KEY ("ID_PERSONA")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
 
  ALTER TABLE "BL"."PERSONA" MODIFY ("FOTO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table PAIS
--------------------------------------------------------

  ALTER TABLE "BL"."PAIS" MODIFY ("NOMBRE" CONSTRAINT "PAIS_NOMBRE_NN" NOT NULL ENABLE);
 
  ALTER TABLE "BL"."PAIS" ADD CONSTRAINT "PK_PAIS" PRIMARY KEY ("ID_PAIS")
  USING INDEX PCTFREE 20 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 16384 NEXT 16384 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BL_IND"  ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table AVE
--------------------------------------------------------

  ALTER TABLE "BL"."AVE" ADD CONSTRAINT "FK_COLOR" FOREIGN KEY ("ID_COLOR")
	  REFERENCES "BL"."COLOR" ("ID_COLOR") ENABLE;
 
  ALTER TABLE "BL"."AVE" ADD CONSTRAINT "FK_ESPECIE" FOREIGN KEY ("ID_ESPECIE")
	  REFERENCES "BL"."ESPECIE" ("ID_ESPECIE") ENABLE;
 
  ALTER TABLE "BL"."AVE" ADD CONSTRAINT "FK_ESTADO" FOREIGN KEY ("ID_ESTADO")
	  REFERENCES "BL"."TIPO" ("ID_TIPO") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table AVISTAMIENTO
--------------------------------------------------------

  ALTER TABLE "BL"."AVISTAMIENTO" ADD CONSTRAINT "FK_AVE" FOREIGN KEY ("ID_AVE")
	  REFERENCES "BL"."AVE" ("ID_AVE") ENABLE;
 
  ALTER TABLE "BL"."AVISTAMIENTO" ADD CONSTRAINT "FK_PERSONA" FOREIGN KEY ("ID_PERSONA")
	  REFERENCES "BL"."PERSONA" ("ID_PERSONA") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table BITACORA
--------------------------------------------------------

  ALTER TABLE "BL"."BITACORA" ADD CONSTRAINT "FK_USUARIO" FOREIGN KEY ("ID_USUARIO")
	  REFERENCES "BL"."USUARIO" ("ID_USUARIO") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table CANTON
--------------------------------------------------------

  ALTER TABLE "BL"."CANTON" ADD CONSTRAINT "FK_PROVINCIA" FOREIGN KEY ("ID_PROVINCIA")
	  REFERENCES "BL"."PROVINCIA" ("ID_PROVINCIA") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table ESPECIE
--------------------------------------------------------

  ALTER TABLE "BL"."ESPECIE" ADD CONSTRAINT "FK_GENERO" FOREIGN KEY ("ID_GENERO")
	  REFERENCES "BL"."GENERO" ("ID_GENERO") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table FAMILIA
--------------------------------------------------------

  ALTER TABLE "BL"."FAMILIA" ADD CONSTRAINT "FK_SUBORDEN_F" FOREIGN KEY ("ID_SUBORDEN")
	  REFERENCES "BL"."SUBORDEN" ("ID_SUBORDEN") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table FOTO
--------------------------------------------------------

  ALTER TABLE "BL"."FOTO" ADD CONSTRAINT "FK_AVISTAMIENTO" FOREIGN KEY ("ID_AVISTAMIENTO")
	  REFERENCES "BL"."AVISTAMIENTO" ("ID_AVISTAMIENTO") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table GENERO
--------------------------------------------------------

  ALTER TABLE "BL"."GENERO" ADD CONSTRAINT "FK_FAMILIA" FOREIGN KEY ("ID_FAMILIA")
	  REFERENCES "BL"."FAMILIA" ("ID_FAMILIA") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table ORDEN
--------------------------------------------------------

  ALTER TABLE "BL"."ORDEN" ADD CONSTRAINT "FK_CLASE" FOREIGN KEY ("ID_CLASE")
	  REFERENCES "BL"."CLASE" ("ID_CLASE") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table PAIS
--------------------------------------------------------

  ALTER TABLE "BL"."PAIS" ADD CONSTRAINT "FK_CONTINENTE" FOREIGN KEY ("ID_CONTINENTE")
	  REFERENCES "BL"."CONTINENTE" ("ID_CONTINENTE") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table PROVINCIA
--------------------------------------------------------

  ALTER TABLE "BL"."PROVINCIA" ADD CONSTRAINT "FK_PAIS" FOREIGN KEY ("ID_PAIS")
	  REFERENCES "BL"."PAIS" ("ID_PAIS") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table PUNTAJE
--------------------------------------------------------

  ALTER TABLE "BL"."PUNTAJE" ADD CONSTRAINT "FK_AVISTAMIENTO_PUNTAJE" FOREIGN KEY ("ID_AVISTAMIENTO")
	  REFERENCES "BL"."AVISTAMIENTO" ("ID_AVISTAMIENTO") ENABLE;
 
  ALTER TABLE "BL"."PUNTAJE" ADD CONSTRAINT "FK_PERSONA_PUNTAJE" FOREIGN KEY ("ID_PERSONA")
	  REFERENCES "BL"."PERSONA" ("ID_PERSONA") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table SUBORDEN
--------------------------------------------------------

  ALTER TABLE "BL"."SUBORDEN" ADD CONSTRAINT "FK_SUBORDEN" FOREIGN KEY ("ID_ORDEN")
	  REFERENCES "BL"."ORDEN" ("ID_ORDEN") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table UBICACION
--------------------------------------------------------

  ALTER TABLE "BL"."UBICACION" ADD CONSTRAINT "FK_AVE_UBICACION" FOREIGN KEY ("ID_AVE")
	  REFERENCES "BL"."AVE" ("ID_AVE") ENABLE;
 
  ALTER TABLE "BL"."UBICACION" ADD CONSTRAINT "FK_CANTON" FOREIGN KEY ("ID_CANTON")
	  REFERENCES "BL"."CANTON" ("ID_CANTON") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table USUARIO
--------------------------------------------------------

  ALTER TABLE "BL"."USUARIO" ADD CONSTRAINT "FK_PERSONA_USUARIO" FOREIGN KEY ("ID_PERSONA")
	  REFERENCES "BL"."PERSONA" ("ID_PERSONA") ENABLE;
