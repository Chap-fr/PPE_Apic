DROP DATABASE IF EXISTS bdd_ppe;

CREATE DATABASE IF NOT EXISTS bdd_ppe;
USE bdd_ppe;

# -----------------------------------------------------------------------------
#       TABLE : COMMANDE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMMANDE
 (
   NUMCOMM INT(30)  NOT NULL   ,
   NUMEROC INT(30)  NOT NULL   ,
   FACTURECOMM INT(30)   
   , PRIMARY KEY (NUMCOMM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE COMMANDE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_COMMANDE_CLIENT
     ON COMMANDE (NUMEROC ASC);

# -----------------------------------------------------------------------------
#       TABLE : PERIODE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PERIODE
 (
   NUMEROPERIODE INT(30) NOT NULL AUTO_INCREMENT,
   DATEPERIODE DATE   
   , PRIMARY KEY (NUMEROPERIODE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : FORMATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FORMATION
 (
   NUMEROFORMATION INT(30) NOT NULL  AUTO_INCREMENT,
   NUMTYPE INT(30) NOT NULL  ,
   NUMEROPERIODE INT(30) NOT NULL  ,
   NUMEROC INT(30) NOT NULL  ,
   LIBELLEFORMATION VARCHAR(255)   
   , PRIMARY KEY (NUMEROFORMATION) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE FORMATION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_FORMATION_TYPE_FORMATION
     ON FORMATION (NUMTYPE ASC);

CREATE  INDEX I_FK_FORMATION_PERIODE
     ON FORMATION (NUMEROPERIODE ASC);

CREATE  INDEX I_FK_FORMATION_CLIENT
     ON FORMATION (NUMEROC ASC);

# -----------------------------------------------------------------------------
#       TABLE : CLIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLIENT
 (
   NUMEROC INT(30) NOT NULL AUTO_INCREMENT,
   ADRESSEC VARCHAR(128)   ,
   TELC INT(30)   ,
   MAILC VARCHAR(128)   ,
   MDPC VARCHAR(128)   ,
   IDENTIFIANTC VARCHAR(128)   
   , PRIMARY KEY (NUMEROC) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PRODUIT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PRODUIT
 (
   NUMEROP INT(30) NOT NULL AUTO_INCREMENT,
   NOMP VARCHAR(128)   ,
   IMG VARCHAR(128)   ,
   LIBILLR VARCHAR(255)   ,
   STOCKDISPONIBLE INT(30)   ,
   PRIXP INT(30)   
   , PRIMARY KEY (NUMEROP) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ENTREPRISE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENTREPRISE
 (
   NUMEROC INT(30) NOT NULL  ,
   NOMRESPONSABLE VARCHAR(32)   ,
   NOMENTREPRISE VARCHAR(32)   ,
   ADRESSEC VARCHAR(128)   ,
   TELC INT(30)   ,
   MAILC VARCHAR(128)   ,
   MDPC VARCHAR(128)   ,
   IDENTIFIANTC VARCHAR(128)   
   , PRIMARY KEY (NUMEROC) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TYPE_FORMATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_FORMATION
 (
   NUMTYPE INT(30) NOT NULL  AUTO_INCREMENT,
   PRIXTYPE INT(30)   
   , PRIMARY KEY (NUMTYPE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PARTICULIER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PARTICULIER
 (
   NUMEROC INT(30) NOT NULL ,
   NOMPARTICULIER VARCHAR(128)   ,
   PRENOMPARTICULIER VARCHAR(128)   ,
   ADRESSEC VARCHAR(128)   ,
   TELC INT(30)   ,
   MAILC VARCHAR(128)   ,
   MDPC VARCHAR(128)   ,
   IDENTIFIANTC VARCHAR(128)   
   , PRIMARY KEY (NUMEROC) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : AVOIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS AVOIR
 (
   NUMCOMM INT(30) NOT NULL  ,
   NUMEROP INT(30) NOT NULL 
   , PRIMARY KEY (NUMCOMM,NUMEROP) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE AVOIR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_AVOIR_COMMANDE
     ON AVOIR (NUMCOMM ASC);

CREATE  INDEX I_FK_AVOIR_PRODUIT
     ON AVOIR (NUMEROP ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE COMMANDE 
  ADD FOREIGN KEY FK_COMMANDE_CLIENT (NUMEROC)
      REFERENCES CLIENT (NUMEROC) ;


ALTER TABLE FORMATION 
  ADD FOREIGN KEY FK_FORMATION_TYPE_FORMATION (NUMTYPE)
      REFERENCES TYPE_FORMATION (NUMTYPE) ;


ALTER TABLE FORMATION 
  ADD FOREIGN KEY FK_FORMATION_PERIODE (NUMEROPERIODE)
      REFERENCES PERIODE (NUMEROPERIODE) ;


ALTER TABLE FORMATION 
  ADD FOREIGN KEY FK_FORMATION_CLIENT (NUMEROC)
      REFERENCES CLIENT (NUMEROC) ;


ALTER TABLE ENTREPRISE 
  ADD FOREIGN KEY FK_ENTREPRISE_CLIENT (NUMEROC)
      REFERENCES CLIENT (NUMEROC) ;


ALTER TABLE PARTICULIER 
  ADD FOREIGN KEY FK_PARTICULIER_CLIENT (NUMEROC)
      REFERENCES CLIENT (NUMEROC) ;


ALTER TABLE AVOIR 
  ADD FOREIGN KEY FK_AVOIR_COMMANDE (NUMCOMM)
      REFERENCES COMMANDE (NUMCOMM) ;


ALTER TABLE AVOIR 
  ADD FOREIGN KEY FK_AVOIR_PRODUIT (NUMEROP)
      REFERENCES PRODUIT (NUMEROP) ;

