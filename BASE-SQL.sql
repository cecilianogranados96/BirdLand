
CREATE TABLESPACE BL_Data
  DATAFILE 'C:\app\Administrator\oradata\BirdLand\BLdata01.dbf'
  SIZE 10M
  REUSE
  AUTOEXTEND ON
  NEXT 512k
  MAXSIZE 200M;
  
CREATE TABLESPACE BL_Ind
  DATAFILE 'C:\app\Administrator\oradata\BirdLand\BLind01.dbf'
  SIZE 10M
  REUSE
  AUTOEXTEND ON
  NEXT 512k
  MAXSIZE 200M;
    

CREATE USER BL
      IDENTIFIED BY BL123
      DEFAULT TABLESPACE BL_data
      QUOTA 10M on BL_data
      TEMPORARY TABLESPACE temp
      QUOTA 5M ON system;
      
    
CREATE SEQUENCE sq_clase MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_orden MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_suborden MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_familia MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_genero MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_especie MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_continente MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_pais MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_provincia MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_canton MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_ubicacion MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_tipo MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_color MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_ave MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_persona MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_usuario MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_bitacora MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_foto MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_avistamiento MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20; 
CREATE SEQUENCE sq_puntos MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
CREATE SEQUENCE sq_parametro MINVALUE 0 START WITH 0 INCREMENT BY 1 CACHE 20;
 

GRANT ALL PRIVILEGES ON  sq_clase TO BL;
GRANT ALL PRIVILEGES ON  sq_orden TO BL;
GRANT ALL PRIVILEGES ON  sq_suborden TO BL;
GRANT ALL PRIVILEGES ON  sq_familia TO BL;
GRANT ALL PRIVILEGES ON  sq_genero TO BL;
GRANT ALL PRIVILEGES ON  sq_especie TO BL;
GRANT ALL PRIVILEGES ON  sq_continente TO BL;
GRANT ALL PRIVILEGES ON  sq_pais TO BL;
GRANT ALL PRIVILEGES ON  sq_provincia TO BL;
GRANT ALL PRIVILEGES ON  sq_canton TO BL;
GRANT ALL PRIVILEGES ON  sq_ubicacion TO BL;
GRANT ALL PRIVILEGES ON  sq_tipo TO BL;
GRANT ALL PRIVILEGES ON  sq_color TO BL;
GRANT ALL PRIVILEGES ON  sq_ave TO BL;
GRANT ALL PRIVILEGES ON  sq_persona TO BL;
GRANT ALL PRIVILEGES ON  sq_usuario TO BL;
GRANT ALL PRIVILEGES ON  sq_bitacora TO BL;
GRANT ALL PRIVILEGES ON  sq_foto TO BL;
GRANT ALL PRIVILEGES ON  sq_avistamiento TO BL;
GRANT ALL PRIVILEGES ON  sq_puntos TO BL;
GRANT ALL PRIVILEGES ON  sq_parametro TO BL;

GRANT SELECT ON sq_clase TO BL
 
/* REVISAR CON CUIDADO */
GRANT ALL PRIVILEGES TO BL;

GRANT CONNECT TO BL;
GRANT CREATE TABLE TO BL;
GRANT CREATE PUBLIC SYNONYM TO BL;
GRANT CREATE VIEW TO BL;
GRANT CREATE ANY INDEX TO BL;
GRANT UNLIMITED TABLESPACE TO BL;
GRANT CREATE PROCEDURE to BL;



                                   
-- ********************************************************************************************** --
CREATE TABLE clase
(    
    id_clase NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT clase_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE clase ADD CONSTRAINT pk_clase PRIMARY KEY (id_clase) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK   
    -- COMMENTS
		COMMENT ON TABLE clase IS 'Clases de aves';
    COMMENT ON COLUMN clase.id_clase IS 'Identificador �nico de la clase';
		COMMENT ON COLUMN clase.nombre IS 'Nombre cient�fico de la clase';    
-- ********************************************************************************************* --     
CREATE TABLE orden
(    
    id_orden NUMBER(11),
    id_clase NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT orden_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE orden ADD CONSTRAINT pk_orden PRIMARY KEY (id_orden) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE orden ADD CONSTRAINT fk_clase
        FOREIGN KEY (id_clase) REFERENCES clase(id_clase);
	-- COMMENTS
		COMMENT ON TABLE orden IS 'Clasificaciones de ordenes';
		COMMENT ON COLUMN orden.id_orden IS 'Identificador �nico del orden';
		COMMENT ON COLUMN orden.id_clase IS 'Llave for�nea que relaciona la clase con el orden';
		COMMENT ON COLUMN orden.nombre IS 'Nombre cient�fico del orden';
 
    
-- ********************************************************************************************* --     
CREATE TABLE suborden
(    
    id_suborden NUMBER(11),
    id_orden NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT suborden_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE suborden ADD CONSTRAINT pk_suborden PRIMARY KEY (id_suborden) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE suborden ADD CONSTRAINT fk_suborden
        FOREIGN KEY (id_orden) REFERENCES orden(id_orden);
	-- COMMENTS
		COMMENT ON TABLE suborden IS 'Clasificaciones de ordenes';
		COMMENT ON COLUMN suborden.id_suborden IS 'Identificador �nico del suborden';
		COMMENT ON COLUMN suborden.id_orden IS 'Llave for�nea que relaciona la orden con el suborden';
		COMMENT ON COLUMN suborden.nombre IS 'Nombre cient�fico del suborden';
    -- FUNTIONS
    
-- ********************************************************************************************* --  

CREATE TABLE familia
(    
    id_familia NUMBER(11),
    id_suborden NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT familia_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE familia ADD CONSTRAINT pk_familia PRIMARY KEY (id_familia) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE familia ADD CONSTRAINT fk_suborden_f
        FOREIGN KEY (id_suborden) REFERENCES suborden(id_suborden);
	-- COMMENTS
		COMMENT ON TABLE familia IS 'Clasificaciones de familias';
		COMMENT ON COLUMN familia.id_familia IS 'Identificador �nico de la familia';
		COMMENT ON COLUMN familia.id_suborden IS 'Llave for�nea que relaciona el orden con la familia';
		COMMENT ON COLUMN familia.nombre IS 'Nombre cient�fico de la familia';
-- ********************************************************************************************* --  
CREATE TABLE genero
(    
    id_genero NUMBER(11),
    id_familia NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT genero_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE genero ADD CONSTRAINT pk_genero PRIMARY KEY (id_genero) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE genero ADD CONSTRAINT fk_familia
        FOREIGN KEY (id_familia) REFERENCES familia(id_familia);
	-- COMMENTS
		COMMENT ON TABLE genero IS 'Clasificaciones de generos';
		COMMENT ON COLUMN genero.id_genero IS 'Identificador �nico del g�nero';
		COMMENT ON COLUMN genero.id_familia IS 'Llave for�nea que relaciona el g�nero con la familia';
		COMMENT ON COLUMN genero.nombre IS 'Nombre cient�fico del g�nero';
-- ********************************************************************************************* --   
CREATE TABLE especie
(    
    id_especie NUMBER(11),
    id_genero NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT especie_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE especie ADD CONSTRAINT pk_especie PRIMARY KEY (id_especie) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE especie ADD CONSTRAINT fk_genero
        FOREIGN KEY (id_genero) REFERENCES genero(id_genero);
	-- COMMENTS
		COMMENT ON TABLE especie IS 'Clasificaciones de especies';
		COMMENT ON COLUMN especie.id_especie IS 'Identificador �nico de la especie';
		COMMENT ON COLUMN especie.id_genero IS 'Llave for�nea que relaciona el g�nero con la especie';
		COMMENT ON COLUMN especie.nombre IS 'Nombre cient�fico de la especie';	
-- ********************************************************************************************* --  
CREATE TABLE continente
(    
    id_continente NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT continente_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE continente ADD CONSTRAINT pk_continente PRIMARY KEY (id_continente) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
	-- COMMENTS
		COMMENT ON TABLE continente IS 'Continentes del mundo';
		COMMENT ON COLUMN continente.id_continente IS 'Identificador �nico del continente';
		COMMENT ON COLUMN continente.nombre IS 'Nombre del continente';
-- ********************************************************************************************* --  
CREATE TABLE pais
(    
    id_pais NUMBER(11),
    id_continente NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT pais_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE pais ADD CONSTRAINT pk_pais PRIMARY KEY (id_pais) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE pais ADD CONSTRAINT fk_continente
        FOREIGN KEY (id_continente) REFERENCES continente(id_continente);
	-- COMMENTS
		COMMENT ON TABLE pais IS 'Pa�ses de cada continente';
		COMMENT ON COLUMN pais.id_pais IS 'Identificador �nico del pa�s';
		COMMENT ON COLUMN pais.id_continente IS 'Llave for�nea que relaciona el continente con el pa�s';
		COMMENT ON COLUMN pais.nombre IS 'Nombre del pa�s';
-- ********************************************************************************************* --  
CREATE TABLE provincia
(    
    id_provincia NUMBER(11),
    id_pais NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT provincia_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE provincia ADD CONSTRAINT pk_provincia PRIMARY KEY (id_provincia) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE provincia ADD CONSTRAINT fk_pais
        FOREIGN KEY (id_pais) REFERENCES pais(id_pais);
	-- COMMENTS
		COMMENT ON TABLE provincia IS 'Provincias de cada pa�s';
		COMMENT ON COLUMN provincia.id_provincia IS 'Identificador �nico de la provincia';
		COMMENT ON COLUMN provincia.id_pais IS 'Llave for�nea que relaciona la provincia con el pa�s';
		COMMENT ON COLUMN provincia.nombre IS 'Nombre de la provincia';
		
-- ********************************************************************************************* --  
CREATE TABLE canton
(    
    id_canton NUMBER(11),
    id_provincia NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT canton_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE canton ADD CONSTRAINT pk_canton PRIMARY KEY (id_canton) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE canton ADD CONSTRAINT fk_provincia
        FOREIGN KEY (id_provincia) REFERENCES provincia(id_provincia);
	-- COMMENTS
		COMMENT ON TABLE canton IS 'Cantones de las provinicias';
		COMMENT ON COLUMN canton.id_canton IS 'Identificador �nico del cant�n';
		COMMENT ON COLUMN canton.id_provincia IS 'Llave for�nea que relaciona la provincia con el cant�n';
		COMMENT ON COLUMN canton.nombre IS 'Nombre del cant�n';
-- ********************************************************************************************* --  
CREATE TABLE color
(    
    id_color NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT color_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE color ADD CONSTRAINT pk_color PRIMARY KEY (id_color) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK    	
	-- COMMENTS
		COMMENT ON TABLE color IS 'Colores de las aves';
		COMMENT ON COLUMN color.id_color IS 'Identificador �nico del color';
		COMMENT ON COLUMN color.nombre IS 'Nombre del color';
-- ********************************************************************************************* --    
CREATE TABLE persona
(    
    id_persona NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT persona_nombre_nn NOT NULL,
    apellido VARCHAR2(100) CONSTRAINT persona_apellido_nn NOT NULL,
    fecha_nacimiento DATE CONSTRAINT persona_fechaNacimiento_nn NOT NULL,
    email VARCHAR2(100) CONSTRAINT persona_email_nn NOT NULL, 
		CONSTRAINT persona_email_uk unique (email),
    profesion VARCHAR2(100) CONSTRAINT persona_profesion_nn NOT NULL,
    tipo VARCHAR2(100) CONSTRAINT persona_tipo_nn NOT NULL, --revisar
		CONSTRAINT persona_tipo_ck CHECK (tipo= '1' OR tipo= '2' OR tipo= '3'),
    imagen VARCHAR2(100) CONSTRAINT persona_imagen_nn NOT NULL
    --puntos NUMBER(100) CONSTRAINT persona_puntos NOT NULL --revisar
) ;
    -- PK 
        ALTER TABLE persona ADD CONSTRAINT pk_persona PRIMARY KEY (id_persona) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
	-- COMMENTS
		COMMENT ON TABLE persona IS 'Personas registradas en el sistema';
		COMMENT ON COLUMN persona.id_persona IS 'Identificador �nico de la persona';
		COMMENT ON COLUMN persona.nombre IS 'Primer nombre de la persona';
		COMMENT ON COLUMN persona.apellido IS 'Apellido de la persona';
		COMMENT ON COLUMN persona.fecha_nacimiento IS 'Fecha de nacimiento de la persona';
		COMMENT ON COLUMN persona.email IS 'Email de la persona, debe ser �nico';
		COMMENT ON COLUMN persona.profesion IS 'Profesion de la persona';
		COMMENT ON COLUMN persona.tipo IS 'Tipo de persona, puede ser 1, 2 o 3. El 1 es un administrador, 2 un ornit�logo, y 3 aficionado';
		COMMENT ON COLUMN persona.imagen IS 'Imagen de perfil de la persona';
-- ********************************************************************************************* --  
CREATE TABLE estado
(    
    id_estado NUMBER(11),
    descripcion VARCHAR2(100) CONSTRAINT estado_nombre_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE estado ADD CONSTRAINT pk_estado PRIMARY KEY (id_estado) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
	-- COMMENTS
		COMMENT ON TABLE estado IS 'Estados posibles de las poblaciones de aves';
		COMMENT ON COLUMN estado.id_estado IS 'Identificador �nico del estado';
		COMMENT ON COLUMN estado.descripcion IS 'Descripci�n del estado de la poblaci�n del ave, respecto a su tama�o';

-- ********************************************************************************************* --  

CREATE TABLE ave
(    
    id_ave NUMBER(11),
    id_especie NUMBER(11),
    id_color NUMBER(11),
	  id_estado NUMBER(11),
    nombre_comun VARCHAR2(100) CONSTRAINT ave_nombreComun_nn NOT NULL,
    tamano VARCHAR2(100) CONSTRAINT ave_tamano_nn NOT NULL,
    imagen VARCHAR2(100) CONSTRAINT ave_imagen_nn NOT NULL    
) ;
    -- PK 
        ALTER TABLE ave ADD CONSTRAINT pk_ave PRIMARY KEY (id_ave) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE ave ADD CONSTRAINT fk_especie
        FOREIGN KEY (id_especie) REFERENCES especie(id_especie);
        
        ALTER TABLE ave ADD CONSTRAINT fk_color
        FOREIGN KEY (id_color) REFERENCES color(id_color);
		
		ALTER TABLE ave ADD CONSTRAINT fk_estado
        FOREIGN KEY (id_estado) REFERENCES estado(id_estado);
	-- COMMENTS
		COMMENT ON TABLE ave IS 'Aves registradas en el sistema';
		COMMENT ON COLUMN ave.id_ave IS 'Identificador �nico del ave';
		COMMENT ON COLUMN ave.id_especie IS 'Llave for�nea que relaciona el ave con la especie a la que pertenece';
		COMMENT ON COLUMN ave.id_color IS 'Llave for�nea que relaciona el ave con el color de su plumaje';
		COMMENT ON COLUMN ave.id_estado IS 'Llave for�nea que relaciona el ave con su estado, respecto a la cantidad de poblaci�n';
		COMMENT ON COLUMN ave.nombre_comun IS 'Nombre com�n con el cu�l se le conoce al ave';
		COMMENT ON COLUMN ave.tamano IS 'Tama�o promedio del ave';
		COMMENT ON COLUMN ave.imagen IS 'Imagen de referencia del ave';

-- ********************************************************************************************* --  
CREATE TABLE avistamiento
(    
    id_avistamiento NUMBER(11),
    id_persona NUMBER(11),
    id_ave NUMBER(11),
    latitud NUMBER(20,20) CONSTRAINT avistamiento_latitud_nn NOT NULL,
    longitud NUMBER(20,20) CONSTRAINT avistamiento_longitud_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE avistamiento ADD CONSTRAINT pk_avistamiento PRIMARY KEY (id_avistamiento) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE avistamiento ADD CONSTRAINT fk_persona
        FOREIGN KEY (id_persona) REFERENCES persona(id_persona);
        
        ALTER TABLE avistamiento ADD CONSTRAINT fk_ave
        FOREIGN KEY (id_ave) REFERENCES ave(id_ave);
	-- COMMENTS
		COMMENT ON TABLE avistamiento IS 'Avistamientos de las aves';
		COMMENT ON COLUMN avistamiento.id_avistamiento IS 'Identificador �nico del avistamiento';
		COMMENT ON COLUMN avistamiento.id_persona IS 'Llave for�nea que relaciona el avistamiento con la persona que la realiz�';
		COMMENT ON COLUMN avistamiento.id_ave IS 'Llave for�nea que relaciona el avistamiento con el ave vista';
		COMMENT ON COLUMN avistamiento.latitud IS 'Es la latitud de la localizaci�n donde se hizo el avistamiento';
		COMMENT ON COLUMN avistamiento.longitud IS 'Es la longitud de la localizaci�n donde se hizo el avistamiento';
-- ********************************************************************************************* --  
CREATE TABLE foto
(    
    id_foto NUMBER(11),
    id_avistamiento NUMBER(11),
    url VARCHAR2(100) CONSTRAINT foto_url_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE foto ADD CONSTRAINT pk_foto PRIMARY KEY (id_foto) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE foto ADD CONSTRAINT fk_avistamiento
        FOREIGN KEY (id_avistamiento) REFERENCES avistamiento(id_avistamiento);
	-- COMMENTS
		COMMENT ON TABLE foto IS 'Fotos de las aves por avistamiento';
		COMMENT ON COLUMN foto.id_foto IS 'Identificador �nico de la foto';
		COMMENT ON COLUMN foto.id_avistamiento IS 'Llave for�nea que relaciona la foto con el avistamiento donde se public�';
		COMMENT ON COLUMN foto.url IS 'Es la direcci�n de donde est� guardada la foto afuera de la base';
-- ********************************************************************************************* --  
CREATE TABLE usuario
(    
    id_usuario NUMBER(11),
	id_persona NUMBER(11),
    usuario VARCHAR2(100) CONSTRAINT nombre NOT NULL,
    contrasena VARCHAR2(100) CONSTRAINT usuario_contrasena_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE usuario ADD CONSTRAINT pk_usuario PRIMARY KEY (id_usuario) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE usuario ADD CONSTRAINT fk_persona_usuario
        FOREIGN KEY (id_persona) REFERENCES persona(id_persona);
	-- COMMENTS
		COMMENT ON TABLE usuario IS 'Usuarios de las personas registradas';
		COMMENT ON COLUMN usuario.id_usuario IS 'Identificador �nico del usuario';
		COMMENT ON COLUMN usuario.id_persona IS 'Llave for�nea que relaciona el usuario con la persona a la que le pertenece';
		COMMENT ON COLUMN usuario.nombre IS 'Nombre del usuario';
		COMMENT ON COLUMN usuario.contrasena IS 'Contrase�a del usuario, debe estar encriptada';
-- ********************************************************************************************* --  
CREATE TABLE bitacora
(    
    id_bitacora NUMBER(11),
    id_usuario NUMBER(11),
    contrasena VARCHAR2(100) CONSTRAINT bitacora_contrasena_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE bitacora ADD CONSTRAINT pk_bitacora PRIMARY KEY (id_bitacora) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE bitacora ADD CONSTRAINT fk_usuario
        FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario); 
	-- COMMENTS
		COMMENT ON TABLE bitacora IS 'Bitacora de los cambios de clave por usuario';
		COMMENT ON COLUMN bitacora.id_bitacora IS 'Identificador �nico de la bit�cora';
		COMMENT ON COLUMN bitacora.id_usuario IS 'Llave for�nea que relaciona la bit�cora con el usuario que realiz� el cambi�';
		COMMENT ON COLUMN bitacora.contrasena IS 'Nueva contrase�a del usuario';

-- ********************************************************************************************* --  
CREATE TABLE ubicacion
(    
    id_ubicacion NUMBER(11),
    id_ave NUMBER(11),
    id_canton NUMBER(11)
) ;
    -- PK 
        ALTER TABLE ubicacion ADD CONSTRAINT pk_ubicacion PRIMARY KEY (id_ubicacion) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE ubicacion ADD CONSTRAINT fk_ave_ubicacion
        FOREIGN KEY (id_ave) REFERENCES ave(id_ave);
    
        ALTER TABLE ubicacion ADD CONSTRAINT fk_canton
        FOREIGN KEY (id_canton) REFERENCES canton(id_canton);
	-- COMMENTS
		COMMENT ON TABLE ubicacion IS 'Ubicaciones en las que se encuentran cada tipo de ave';
		COMMENT ON COLUMN ubicacion.id_ubicacion IS 'Identificador �nico de la ubicaci�n del ave';
		COMMENT ON COLUMN ubicacion.id_ave IS 'Llave for�nea que relaciona la ubicaci�n con el ave que habita en la zona';
		COMMENT ON COLUMN ubicacion.id_canton IS 'Llave for�nea que relaciona la ubicaci�n con el cant�n';
-- ********************************************************************************************* --  
CREATE TABLE puntaje
(    
    id_puntaje NUMBER(11),
    id_avistamiento NUMBER(11),
    id_persona NUMBER(11)
) ;
    -- PK 
        ALTER TABLE puntaje ADD CONSTRAINT pk_puntaje PRIMARY KEY (id_puntaje) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE puntaje ADD CONSTRAINT fk_avistamiento_puntaje
        FOREIGN KEY (id_avistamiento) REFERENCES avistamiento(id_avistamiento);
        
        ALTER TABLE puntaje ADD CONSTRAINT fk_persona_puntaje
        FOREIGN KEY (id_persona) REFERENCES persona(id_persona);
	-- COMMENTS
		COMMENT ON TABLE puntaje IS 'Calificaci�n binaria que una persona da a un avistamiento';
		COMMENT ON COLUMN puntaje.id_puntaje IS 'Identificador �nico del puntaje';
		COMMENT ON COLUMN puntaje.id_avistamiento IS 'Llave for�nea que relaciona el puntaje con el avistamiento calificado';
		COMMENT ON COLUMN puntaje.id_persona IS 'Llave for�nea que relaciona el puntaje con la persona que realiz�la calificaci�n';
-- ********************************************************************************************* --  
CREATE TABLE parametro
(    
    id_parametro NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT parametro_nombre_nn NOT NULL,
    descripcion LONG RAW CONSTRAINT parametro_descripcion_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE parametro ADD CONSTRAINT pk_parametro PRIMARY KEY (id_parametro) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
	-- COMMENTS
		COMMENT ON TABLE parametro IS 'Par�metros del sistema que un administrador puede modificar';
		COMMENT ON COLUMN parametro.id_parametro IS 'Identificador �nico del par�metro';
		COMMENT ON COLUMN parametro.nombre IS 'Nombre del par�metro';
		COMMENT ON COLUMN parametro.descripcion IS 'Descripcion del par�metro';
    
    
-- ************************************************************ --

-- ************************************************************ --

-- ************************************************************ --


    
    
    
    
    
    
    
    
    
    
    
    
    
		