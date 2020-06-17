CREATE TABLE tx_dozententest_domain_model_dozent (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	ID varchar(255) DEFAULT '' NOT NULL,
	Titel text,
	Vorname text,
	Name text,
	Profil text,
	Beruf text,
	Kennung varchar (255),

	PRIMARY KEY (uid),
	KEY parent (pid)
);
