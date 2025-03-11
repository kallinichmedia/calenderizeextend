CREATE TABLE tx_calendarize_domain_model_event (
	new smallint(1) unsigned NOT NULL DEFAULT '0',
	request smallint(1) unsigned NOT NULL DEFAULT '0',
	eventtype int(11) DEFAULT '0' NOT NULL,
	eventform int(11) DEFAULT '0' NOT NULL,
	qundis_location smallint(1) unsigned NOT NULL DEFAULT '0',
	fee int(11) NOT NULL DEFAULT '0',
	costspernight int(11) NOT NULL DEFAULT '0',
	location_text text NOT NULL DEFAULT '',
	targetgroup text NOT NULL DEFAULT '',
	show_requirements smallint(1) unsigned NOT NULL DEFAULT '0',
	requirments text NOT NULL DEFAULT '',
	overnightstays int(11) NOT NULL DEFAULT '0',
	semester int(11) DEFAULT '0' NOT NULL,
	maxpersons int(11) DEFAULT '0' NOT NULL,
	tx_extbase_type varchar(255) DEFAULT '' NOT NULL
);


CREATE TABLE tx_calendarize_domain_model_configuration (
	km_new smallint(1) unsigned NOT NULL DEFAULT '0',
);

CREATE TABLE tx_calendarize_domain_model_index (
	km_new smallint(1) unsigned NOT NULL DEFAULT '0',
);
