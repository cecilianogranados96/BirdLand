
CREATE TABLESPACE BL_Data
  DATAFILE 'C:\app\Jose\oradata\demo\BLdata01.dbf'
  SIZE 10M
  REUSE
  AUTOEXTEND ON
  NEXT 512k
  MAXSIZE 200M;
  
CREATE TABLESPACE BL_Ind
  DATAFILE 'C:\app\Jose\oradata\demo\BLind01.dbf'
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

/* REVISAR CON CUIDADO */

GRANT CONNECT TO BL;
GRANT CREATE TABLE TO BL;
GRANT CREATE PUBLIC SYNONYM TO BL;
CREATE ROLE BL IDENTIFIED BY BL;
--GRANT SELECT,INSERT,UPDATE, DELETE ON BL.employee to BL;
GRANT CREATE VIEW TO BL;
GRANT CREATE ANY INDEX TO BL;
GRANT UNLIMITED TABLESPACE TO BL;


CREATE TABLE clase
(    
    id_clase NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT clase_nombre_nn NOT NULL,
) ;
    -- PK 
        ALTER TABLE clase ADD CONSTRAINT pk_clase PRIMARY KEY (id_clase) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK   
    -- COMMENTS
		COMMENT ON TABLE clase IS 'Clases de aves';
        COMMENT ON COLUMN clase.id_clase IS 'Identificador único de la clase';
		COMMENT ON COLUMN clase.nombre IS 'Nombre científico de la clase';
	-- SEQUENCE
		CREATE SEQUENCE seq_clase_id_clase --nombre de la secuencia
		START WITH 1 --la secuencia empieza por 1
		INCREMENT BY 1 --se incrementa de uno en uno
		NOMAXVALUE; --no tiene valor maximo
	-- TRIGGERS
		CREATE TRIGGER trig_clase_seq
		BEFORE INSERT ON clase
		FOR EACH ROW
		BEGIN
		SELECT seq_clase_id_clase.nextval INTO :new.clase_id FROM dual;
		END;
    
-- ********************************************************************************************* --     
CREATE TABLE orden
(    
    id_orden NUMBER(11),
    id_clase NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT orden_nombre_nn NOT NULL,
) ;
    -- PK 
        ALTER TABLE orden ADD CONSTRAINT pk_orden PRIMARY KEY (id_orden) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE orden ADD CONSTRAINT fk_clase
        FOREIGN KEY (id_clase) REFERENCES clase(id_clase);
	-- COMMENTS
		COMMENT ON TABLE orde IS 'Clasificaciones de ordenes';
		COMMENT ON COLUMN orden.id_orden IS 'Identificador único del orden';
		COMMENT ON COLUMN orden.id_clase IS 'Llave foránea que relaciona la clase con el orden';
		COMMENT ON COLUMN orden.nombre IS 'Nombre científico del orden';
		
-- ********************************************************************************************* --    
CREATE TABLE familia
(    
    id_familia NUMBER(11),
    id_orden NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT familia_nombre_nn NOT NULL,
) ;
    -- PK 
        ALTER TABLE familia ADD CONSTRAINT pk_familia PRIMARY KEY (id_familia) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE familia ADD CONSTRAINT fk_orden
        FOREIGN KEY (id_orden) REFERENCES orden(id_orden);
	-- COMMENTS
		COMMENT ON TABLE familia IS 'Clasificaciones de familias';
		COMMENT ON COLUMN familia.id_familia IS 'Identificador único de la familia';
		COMMENT ON COLUMN familia.id_orden IS 'Llave foránea que relaciona el orden con la familia';
		COMMENT ON COLUMN familia.nombre IS 'Nombre científico de la familia';
-- ********************************************************************************************* --  
CREATE TABLE genero
(    
    id_genero NUMBER(11),
    id_familia NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT genero_nombre_nn NOT NULL,
) ;
    -- PK 
        ALTER TABLE genero ADD CONSTRAINT pk_genero PRIMARY KEY (id_genero) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE genero ADD CONSTRAINT fk_familia
        FOREIGN KEY (id_familia) REFERENCES familia(id_familia);
	-- COMMENTS
		COMMENT ON TABLE generos IS 'Clasificaciones de generos';
		COMMENT ON COLUMN genero.id_genero IS 'Identificador único del género';
		COMMENT ON COLUMN genero.id_familia IS 'Llave foránea que relaciona el género con la familia';
		COMMENT ON COLUMN genero.nombre IS 'Nombre científico del género';
-- ********************************************************************************************* --   
CREATE TABLE especie
(    
    id_especie NUMBER(11),
    id_genero NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT especie_nombre_nn NOT NULL,
) ;
    -- PK 
        ALTER TABLE especie ADD CONSTRAINT pk_especie PRIMARY KEY (id_especie) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE especie ADD CONSTRAINT fk_genero
        FOREIGN KEY (id_genero) REFERENCES genero(id_genero);
	-- COMMENTS
		COMMENT ON TABLE especie IS 'Clasificaciones de especies';
		COMMENT ON COLUMN especie.id_especie IS 'Identificador único de la especie';
		COMMENT ON COLUMN especie.id_genero IS 'Llave foránea que relaciona el género con la especie';
		COMMENT ON COLUMN especie.nombre IS 'Nombre científico de la especie';	
-- ********************************************************************************************* --  
CREATE TABLE continente
(    
    id_continente NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT continente_nombre_nn NOT NULL,
) ;
    -- PK 
        ALTER TABLE continente ADD CONSTRAINT pk_continente PRIMARY KEY (id_continente) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
	-- COMMENTS
		COMMENT ON TABLE continente IS 'Continentes del mundo';
		COMMENT ON COLUMN continente.id_continente IS 'Identificador único del continente';
		COMMENT ON COLUMN continente.nombre IS 'Nombre del continente';
-- ********************************************************************************************* --  
CREATE TABLE pais
(    
    id_pais NUMBER(11),
    id_continente NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT pais_nombre_nn NOT NULL,
) ;
    -- PK 
        ALTER TABLE pais ADD CONSTRAINT pk_pais PRIMARY KEY (id_pais) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE pais ADD CONSTRAINT fk_continente
        FOREIGN KEY (id_continente) REFERENCES continente(id_continente);
	-- COMMENTS
		COMMENT ON TABLE pais IS 'Países de cada continente';
		COMMENT ON COLUMN pais.id_pais IS 'Identificador único del país';
		COMMENT ON COLUMN pais.id_continente IS 'Llave foránea que relaciona el continente con el país';
		COMMENT ON COLUMN pais.nombre IS 'Nombre del país';
-- ********************************************************************************************* --  
CREATE TABLE provincia
(    
    id_provincia NUMBER(11),
    id_pais NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT provincia_nombre_nn NOT NULL,
) ;
    -- PK 
        ALTER TABLE provincia ADD CONSTRAINT pk_provincia PRIMARY KEY (id_provincia) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE provincia ADD CONSTRAINT fk_pais
        FOREIGN KEY (id_pais) REFERENCES pais(id_pais);
	-- COMMENTS
		COMMENT ON TABLE provincia IS 'Provincias de cada país';
		COMMENT ON COLUMN provincia.id_provincia IS 'Identificador único de la provincia';
		COMMENT ON COLUMN provincia.id_pais IS 'Llave foránea que relaciona la provincia con el país';
		COMMENT ON COLUMN provincia.nombre IS 'Nombre de la provincia';
		
-- ********************************************************************************************* --  
CREATE TABLE canton
(    
    id_canton NUMBER(11),
    id_provincia NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT canton_nombre_nn NOT NULL,
) ;
    -- PK 
        ALTER TABLE canton ADD CONSTRAINT pk_canton PRIMARY KEY (id_canton) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE canton ADD CONSTRAINT fk_provincia
        FOREIGN KEY (id_provincia) REFERENCES provincia(id_provincia);
	-- COMMENTS
		COMMENT ON TABLE canton IS 'Cantones de las provinicias';
		COMMENT ON COLUMN canton.id_canton IS 'Identificador único del cantón';
		COMMENT ON COLUMN canton.id_provincia IS 'Llave foránea que relaciona la provincia con el cantón';
		COMMENT ON COLUMN canton.nombre IS 'Nombre del cantón';
-- ********************************************************************************************* --  
CREATE TABLE color
(    
    id_color NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT color_nombre_nn NOT NULL,
) ;
    -- PK 
        ALTER TABLE color ADD CONSTRAINT pk_color PRIMARY KEY (id_color) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK    	
	-- COMMENTS
		COMMENT ON TABLE color IS 'Colores de las aves';
		COMMENT ON COLUMN color.id_color IS 'Identificador único del color';
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
		CONSTRAINT persona_tipo_ck CHECK (tipo= '1' OR tipo= '2' OR tipo= '3'); 
    imagen VARCHAR2(100) CONSTRAINT persona_imagen_nn NOT NULL, 
    --puntos NUMBER(100) CONSTRAINT persona_puntos NOT NULL --revisar
) ;
    -- PK 
        ALTER TABLE persona ADD CONSTRAINT pk_persona PRIMARY KEY (id_persona) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
	-- COMMENTS
		COMMENT ON TABLE persona IS 'Personas registradas en el sistema';
		COMMENT ON COLUMN persona.id_persona IS 'Identificador único de la persona';
		COMMENT ON COLUMN persona.nombre IS 'Primer nombre de la persona';
		COMMENT ON COLUMN persona.apellido IS 'Apellido de la persona';
		COMMENT ON COLUMN persona.fecha_nacimiento IS 'Fecha de nacimiento de la persona';
		COMMENT ON COLUMN persona.email IS 'Email de la persona, debe ser único';
		COMMENT ON COLUMN persona.profesion IS 'Profesion de la persona';
		COMMENT ON COLUMN persona.tipo IS 'Tipo de persona, puede ser 1, 2 o 3. El 1 es un administrador, 2 un ornitólogo, y 3 aficionado';
		COMMENT ON COLUMN persona.imagen IS 'Imagen de perfil de la persona';
-- ********************************************************************************************* --  
CREATE TABLE ave
(    
    id_ave NUMBER(11),
    id_especie NUMBER(11),
    id_color NUMBER(11),
	id_estado VARCHAR2(100),
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
        FOREIGN KEY (id_estado) REFERENCES color(id_estado);
	-- COMMENTS
		COMMENT ON TABLE ave IS 'Aves registradas en el sistema';
		COMMENT ON COLUMN ave.id_ave IS 'Identificador único del ave';
		COMMENT ON COLUMN ave.id_especie IS 'Llave foránea que relaciona el ave con la especie a la que pertenece';
		COMMENT ON COLUMN ave.id_color IS 'Llave foránea que relaciona el ave con el color de su plumaje';
		COMMENT ON COLUMN ave.id_estado IS 'Llave foránea que relaciona el ave con su estado, respecto a la cantidad de población';
		COMMENT ON COLUMN ave.nombre_comun IS 'Nombre común con el cuál se le conoce al ave';
		COMMENT ON COLUMN ave.tamano IS 'Tamaño promedio del ave';
		COMMENT ON COLUMN ave.imagen IS 'Imagen de referencia del ave';
-- ********************************************************************************************* --  
CREATE TABLE estado
(    
    id_estado NUMBER(11),
    descripcion VARCHAR2(100) CONSTRAINT estado_nombre_nn NOT NULL,	
) ;
    -- PK 
        ALTER TABLE estado ADD CONSTRAINT pk_estado PRIMARY KEY (id_estado) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
	-- COMMENTS
		COMMENT ON TABLE estado IS 'Estados posibles de las poblaciones de aves';
		COMMENT ON COLUMN estado.id_estado IS 'Identificador único del estado';
		COMMENT ON COLUMN estado.descripcion IS 'Descripción del estado de la población del ave, respecto a su tamaño';
-- ********************************************************************************************* --  
CREATE TABLE avistamiento
(    
    id_avistamiento NUMBER(11),
    id_persona NUMBER(11),
    id_ave NUMBER(11),
    latitud NUMBER(20,20) CONSTRAINT avistamiento_latitud_nn NOT NULL,
    longitud NUMBER(20,20) CONSTRAINT avistamiento_longitud_nn NOT NULL,
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
		COMMENT ON COLUMN avistamiento.id_avistamiento IS 'Identificador único del avistamiento';
		COMMENT ON COLUMN avistamiento.id_persona IS 'Llave foránea que relaciona el avistamiento con la persona que la realizó';
		COMMENT ON COLUMN avistamiento.id_ave IS 'Llave foránea que relaciona el avistamiento con el ave vista';
		COMMENT ON COLUMN avistamiento.latitud IS 'Es la latitud de la localización donde se hizo el avistamiento';
		COMMENT ON COLUMN avistamiento.longitud IS 'Es la longitud de la localización donde se hizo el avistamiento';
-- ********************************************************************************************* --  
CREATE TABLE foto
(    
    id_foto NUMBER(11),
    id_avistamiento NUMBER(11),
    url VARCHAR2(100) CONSTRAINT foto_url_nn NOT NULL,
) ;
    -- PK 
        ALTER TABLE foto ADD CONSTRAINT pk_foto PRIMARY KEY (id_foto) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE foto ADD CONSTRAINT fk_avistamiento
        FOREIGN KEY (id_avistamiento) REFERENCES avistamiento(id_avistamiento);
	-- COMMENTS
		COMMENT ON TABLE foto IS 'Fotos de las aves por avistamiento';
		COMMENT ON COLUMN foto.id_foto IS 'Identificador único de la foto';
		COMMENT ON COLUMN foto.id_avistamiento IS 'Llave foránea que relaciona la foto con el avistamiento donde se publicó';
		COMMENT ON COLUMN foto.url IS 'Es la dirección de donde está guardada la foto afuera de la base';
-- ********************************************************************************************* --  
CREATE TABLE usuario
(    
    id_usuario NUMBER(11),
	id_persona NUMBER(11),
    nombre VARCHAR2(100) CONSTRAINT nombre NOT NULL,
    contrasena VARCHAR2(100) CONSTRAINT usuario_contrasena_nn NOT NULL
) ;
    -- PK 
        ALTER TABLE usuario ADD CONSTRAINT pk_usuario PRIMARY KEY (id_usuario) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE usuario ADD CONSTRAINT fk_persona
        FOREIGN KEY (id_persona) REFERENCES persona(id_persona);
	-- COMMENTS
		COMMENT ON TABLE usuario IS 'Usuarios de las personas registradas';
		COMMENT ON COLUMN usuario.id_usuario IS 'Identificador único del usuario';
		COMMENT ON COLUMN usuario.id_persona IS 'Llave foránea que relaciona el usuario con la persona a la que le pertenece';
		COMMENT ON COLUMN usuario.nombre IS 'Nombre del usuario';
		COMMENT ON COLUMN usuario.contrasena IS 'Contraseña del usuario, debe estar encriptada';
-- ********************************************************************************************* --  
CREATE TABLE bitacora
(    
    id_bitacora NUMBER(11),
    id_usuario NUMBER(11),
    contrasena VARCHAR2(100) CONSTRAINT bitacora_contrasena_nn NOT NULL, 
) ;
    -- PK 
        ALTER TABLE bitacora ADD CONSTRAINT pk_bitacora PRIMARY KEY (id_bitacora) 
        USING INDEX TABLESPACE BL_IND PCTFREE 20 STORAGE(INITIAL 10K NEXT 10K PCTINCREASE 0) ;
    -- FK
        ALTER TABLE bitacora ADD CONSTRAINT fk_usuario
        FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario); 
	-- COMMENTS
		COMMENT ON TABLE bitacora IS 'Bitacora de los cambios de clave por usuario';
		COMMENT ON COLUMN bitacora.id_bitacora IS 'Identificador único de la bitácora';
		COMMENT ON COLUMN bitacora.id_usuario IS 'Llave foránea que relaciona la bitácora con el usuario que realizó el cambió';
		COMMENT ON COLUMN bitacora.contrasena IS 'Nueva contraseña del usuario';

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
        ALTER TABLE ubicacion ADD CONSTRAINT fk_ave
        FOREIGN KEY (id_ave) REFERENCES ave(id_ave);
    
        ALTER TABLE ubicacion ADD CONSTRAINT fk_canton
        FOREIGN KEY (id_canton) REFERENCES canton(id_canton);
	-- COMMENTS
		COMMENT ON TABLE ubicacion IS 'Ubicaciones en las que se encuentran cada tipo de ave';
		COMMENT ON COLUMN ubicacion.id_ubicacion IS 'Identificador único de la ubicación del ave';
		COMMENT ON COLUMN ubicacion.id_ave IS 'Llave foránea que relaciona la ubicación con el ave que habita en la zona';
		COMMENT ON COLUMN ubicacion.id_canton IS 'Llave foránea que relaciona la ubicación con el cantón';
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
        ALTER TABLE puntaje ADD CONSTRAINT fk_avistamiento
        FOREIGN KEY (id_avistamiento) REFERENCES avistamiento(id_avistamiento);
        
        ALTER TABLE puntaje ADD CONSTRAINT fk_persona
        FOREIGN KEY (id_persona) REFERENCES persona(id_persona);
	-- COMMENTS
		COMMENT ON TABLE puntaje IS 'Calificación binaria que una persona da a un avistamiento';
		COMMENT ON COLUMN puntaje.id_puntaje IS 'Identificador único del puntaje';
		COMMENT ON COLUMN puntaje.id_avistamiento IS 'Llave foránea que relaciona el puntaje con el avistamiento calificado';
		COMMENT ON COLUMN puntaje.id_persona IS 'Llave foránea que relaciona el puntaje con la persona que realizóla calificación';
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
		COMMENT ON TABLE parametro IS 'Parámetros del sistema que un administrador puede modificar';
		COMMENT ON COLUMN parametro.id_parametro IS 'Identificador único del parámetro';
		COMMENT ON COLUMN parametro.nombre IS 'Nombre del parámetro';
		COMMENT ON COLUMN parametro.descripcion IS 'Descripcion del parámetro';
		