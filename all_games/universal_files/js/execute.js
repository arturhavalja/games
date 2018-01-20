var games = {
	"ballons" : {

	},
	"brain" : {

	},
	"breakout": {

	},
	"hang_man": {

	},
	"identic": {

	},
	"lottety": {

	},
	"minimal_memory":{

	},
	"puzzle": {

	},
	"reaction_wall": {

	},
	"shoot": {

	},
	"snake": {

	},
	"sprint": {

	},
	"tic_tac_Toe": {

	}
}



function dropDatabases () {

	var keys = Object.keys(games);

	var sql = "";

	for (var i = 0; i < keys.length; ++i) {
		sql += "DROP DATABASE `" + keys[i] + "` ;\n";
	}
	return sql;
}

function createDatabases () {

	var keys = Object.keys(games);

	var content = 
			"SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\r\n" +
			"SET AUTOCOMMIT = 0;\r\n" +
			"START TRANSACTION;\r\n" +
			"SET time_zone = \"+00:00\";\r\n" + 
			"CREATE TABLE `data_game` (\r\n" +
			"  `id` int(11) NOT NULL,\r\n" +
			"  `name` varchar(255) DEFAULT NULL,\r\n" +
			"  `nr_players` int(11) DEFAULT NULL,\r\n" +
			"  `status` varchar(255) DEFAULT 'active',\r\n" +
			"  `creation_date` datetime DEFAULT CURRENT_TIMESTAMP\r\n" +
			") ENGINE=InnoDB DEFAULT CHARSET=latin1;\r\n" +
			
			"CREATE TABLE `data_register` (\r\n" +
			"  `id` int(11) NOT NULL,\r\n" +
			"  `id_player` int(11) DEFAULT NULL,\r\n" +
			"  `winner` tinyint(1) DEFAULT NULL,\r\n" +
			"  `date` datetime DEFAULT CURRENT_TIMESTAMP,\r\n" +
			"  `action` varchar(255) DEFAULT NULL,\r\n" +
			"  `note` text,\r\n" +
			"  `duration` datetime DEFAULT NULL,\r\n" +
			"  `finished` tinyint(1) DEFAULT NULL,\r\n" +
			"  `helped` tinyint(1) DEFAULT NULL\r\n" +
			") ENGINE=InnoDB DEFAULT CHARSET=latin1;\r\n" +
			
			"CREATE TABLE `media` (\r\n" +
			"  `id` int(11) NOT NULL,\r\n" +
			"  `file_name` varchar(255) DEFAULT NULL,\r\n" +
			"  `type` varchar(255) DEFAULT NULL,\r\n" +
			"  `description` text NOT NULL\r\n" +
			") ENGINE=InnoDB DEFAULT CHARSET=latin1;\r\n" +
			
			"CREATE TABLE `rules` (\r\n" +
			"  `id` int(11) NOT NULL,\r\n" +
			"  `text` text\r\n" +
			") ENGINE=InnoDB DEFAULT CHARSET=latin1;\r\n" +
			
			"CREATE TABLE `terms_condition_main` (\r\n" +
			"  `id` int(11) NOT NULL,\r\n" +
			"  `text` text\r\n" +
			") ENGINE=InnoDB DEFAULT CHARSET=latin1;\r\n" +
		
			"CREATE TABLE `terms_condition_sub` (\r\n" +
			"  `id` int(11) NOT NULL,\r\n" +
			"  `id_main` int(11) DEFAULT NULL,\r\n" +
			"  `text` text\r\n" +
			") ENGINE=InnoDB DEFAULT CHARSET=latin1;\r\n" +
		
			"ALTER TABLE `data_game`\r\n" +
			"  ADD PRIMARY KEY (`id`);\r\n" +
			
			"ALTER TABLE `data_register`\r\n" +
			"  ADD PRIMARY KEY (`id`);\r\n" +
			
			"ALTER TABLE `media`\r\n" +
			"  ADD PRIMARY KEY (`id`);\r\n" +
			
			"ALTER TABLE `rules`\r\n" +
			"  ADD PRIMARY KEY (`id`);\r\n" +
			
			"ALTER TABLE `terms_condition_main`\r\n" +
			"  ADD PRIMARY KEY (`id`);\r\n" +
			
			"ALTER TABLE `terms_condition_sub`\r\n" +
			"  ADD PRIMARY KEY (`id`);\r\n" +
			
			"ALTER TABLE `data_game`\r\n" +
			"  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;\r\n" +
			
			"ALTER TABLE `data_register`\r\n" +
			"  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;\r\n" +
			
			"ALTER TABLE `media`\r\n" +
			"  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;\r\n" +
			
			"ALTER TABLE `rules`\r\n" +
			"  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;\r\n" +
			
			"ALTER TABLE `terms_condition_main`\r\n" +
			"  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;\r\n" +
			
			"ALTER TABLE `terms_condition_sub`\r\n" +
			"  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;\r\n" +
			"COMMIT;\r\n";

	var sql = "";
	// for (var i = 0; i < keys.length; ++i) {
	// 	sql += "CREATE DATABASE `" + keys[i] + "` ; \n" + content + "\n";
	// }

	sql += "CREATE DATABASE `" + keys[2] + "` ; \n" + content + "\n"

	return sql;
}