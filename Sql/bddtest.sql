
CREATE DATABASE bddtest;
USE bddtest;


# -----------------------------------------------------------------------------
#       TABLE : PRODUIT
# -----------------------------------------------------------------------------

CREATE TABLE PRODUIT (
	IDP INT(10) NOT NULL auto_increment,
	NOMP VARCHAR(30) ,
	IMGP VARCHAR(30),
	LIBILLP VARCHAR(255),
   	STOCKDISPONIBLE INT(30),
   	PRIXP INT(30),  
   PRIMARY KEY (IDP) 
 );

